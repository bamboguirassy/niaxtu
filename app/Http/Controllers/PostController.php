<?php

namespace App\Http\Controllers;

use App\Models\Click;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::validate($request->all(),
        [
            'categorie_id'=>'required',
            'post'=>'required|unique:posts,post'
        ]);
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        $data['visible'] = true;
        DB::beginTransaction();
        try {
            if($request->has('image')) {
                $filename = uniqid().'.'.$request->file('image')->extension();
                $request->file('image')->storeAs('post/images',$filename);
                $data['image'] = $filename;
                $post = Post::create($data);
            }
            DB::commit();
        } catch(Exception $e) {
            DB::rollBack();
            throw $e;
        }
        toastr()->success("Votre post est publié avec succès !");
        return redirect()->route('post.show',compact('post'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $click = new Click();
        $click->post_id = $post->id;
        if(!Auth::guest()) {
            $click->user_id = Auth::user()->id;
        }
        $click->save();
        $post = Post::with(['categorie','user','comments'])->withCount(['clicks','likes','comments'])->find($post->id);
        return view('post.post-details',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        Validator::validate($request->all(),
        [
            'categorie_id'=>'required',
            'post'=>'required'
        ]);
        if($post->update($request->only(['categorie','post']))) {
            return ['error'=>false];
        } else {
            return ['error'=>true,'message'=>'Une erreur est survenue lors de la suppression du post'];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
       if($post->delete()) {
           return ['error'=>false];
       }
       return ['error'=>true,'message'=>"Une erreur s'est produite pendant la suppression !"];
    }

    public function loadPosts($categorie=null) {
        $paginationSize = 10;
        if(isset($categorie)) {
            $posts = Post::with(['categorie','user'])->where('categorie_id',$categorie)->orderby('created_at','DESC')->withCount(['clicks','comments','likes'])->paginate($paginationSize);
        } else {
            $posts = Post::with(['user','categorie'])->withCount(['clicks','comments','likes'])->orderby('created_at','DESC')->paginate($paginationSize);
        }
        return $posts;
    }

    public function loadUserPosts() {
        return Post::with(['categorie','comments'])->withCount(['clicks','comments','likes'])->where('user_id',Auth::user()->id)->orderby('created_at','desc')->get();
    }

    public function findOneById($id) {
        $post = Post::with(['categorie','user','comments'])->withCount(['clicks','likes','comments'])->find($id);
        return $post;
    }

    public function loadSimilarPosts(Post $post) {
        $posts = Post::with('categorie')->withCount(['clicks','comments','likes'])->where('categorie_id',$post->categorie->id)->where('id','<>',$post->id)->orderby('created_at','desc')->take(10)->get();
        return $posts;
    }
}
