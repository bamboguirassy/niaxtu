<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Error;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'name'=>'required|min:3',
            'password'=>'confirmed|min:6',
            'email'=>'email|unique:users,email'
            ]
        );
        $user = $request->all();
        $user['password']=Hash::make($request->get('password'));
        $user = User::create($user);
        Auth::attempt($request->only(['email','password']));
        return ['error'=>false,'data'=>true];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Validator::validate($request->except('email'),
        [
            'name'=>'required|min:3',
            'profession'=>'required'
            ]
        );
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('account_route');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request) {
        Validator::validate($request->only(['email','password']),
    [
        'email'=>'email|required',
        'password'=>'min:6'
    ]);
        if(Auth::attempt($request->only(['email','password']))) {
            return ['error'=>false, 'data'=>true];
        }
        return ['error'=>true, 'message'=>'Identifiants invalides, merci  de réessayer'];
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home_route');
    }

    public function updatePassword(Request $request) {
        $validators = Validator::validate($request->all(),
        [
            'currentPassword'=>'required',
            'password'=>'confirmed|min:6'
            ]
        );
        $user = User::find(Auth::user()->id);
        if(Hash::check($request->get('currentPassword'), $user->password)) {
            $hashedPassword = Hash::make($request->get('password'));
            $user->password = $hashedPassword;
            $user->update();
            return redirect()->route('home_route');
        } 
        $request->session()->flash('error', 'Le mot de passe actuel est incorrect, merci de resaisir');
        return $validators;
    }
}
