@extends('base')

@section('title',\Illuminate\Support\Str::limit($post->post, 150, '...'))

@section('twitter-title',\Illuminate\Support\Str::limit($post->post, 150, '...'))

@section('description',\Illuminate\Support\Str::limit($post->post, 300, '...'))

@section('body')
<div ng-controller="PostShowController" ng-init="init({{$post}})">
    <section data-bs-version="5.1" class="info3 cid-sI5NCv6udu" id="info3-1q">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg-10">
                    <div class="card-wrapper">
                        <div class="card-box align-center">
                            <a class="d-none d-lg-block" style="font-weight: bold; font-size: 22px;" href="{{ route('home_route') }}">Accueil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="content3 personam4_content3 cid-sI5Mq5Rfkf" id="content03-1m">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pb-0">
                    <span class="display-5">[[ post.categorie.nom ]]</span>
                    <hr>
                    {{-- <div class="card-img">
                        <img src="/assets/images/categories/[[post.categorie.image]]" alt="[[post.categorie.image]]">
                    </div> --}}
                </div>
                <div class="col-lg-6 py-1 align-right">
                    <p class="mbr-text pb-1 align-left mbr-fonts-style display-4" style="font-size: 20px;">
                        [[post.post]]</p>
                        <div class="align-right">
                            <span
                                style="font-size: 13px; font-weight: bold; color: #1574bb;">[[post.created_at|date:'dd MMM yyyy - HH:mm']] <span style="color: #E87C2B">par
                                    <b>anonyme</b></span></span>
                        </div>
                    <div class="sig-img">
                        <img src="{{ asset('assets/images/signature.png') }}" alt="">
                    </div>
                    <ul style="list-style-type: none;">
                        <li ng-click="like()" style="display: inline;"><a><u>Aimer</u> ([[ post.likes_count ]] <span
                                    class="mobi-mbri mobi-mbri-hearth"></span>)</a></li>
                        <li style="display: inline;"> &nbsp;&nbsp;&nbsp; <a><u>Commenter</u> ([[post.comments_count]]
                                <span class="mobi-mbri mobi-mbri-chat"></span>)
                            </a></li>
                        <li style="display: inline;"> &nbsp;&nbsp;&nbsp; <a><u></u> ([[post.clicks_count]]
                                <span class="mobi-mbri mobi-mbri-cursor-click"></span>)
                            </a></li>
                    </ul>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="display-5">Les commentaires</h6>
                            <hr>
                        </div>
                        <div class="col-12">
                            <ul style="font-style: italic; list-style-type: none;">
                                <li ng-repeat="comment in post.comments">
                                    <div class="align-left" style="border-left: 3px solid #DFDFDF; padding-left: 3px; font-size: 20px;">[[comment.comment]] <br>
                                        <div class="align-right">
                                            <span
                                                style="font-size: 13px; font-weight: bold; color: #1574bb;">[[comment.created_at|date:'dd MMM yyyy - HH:mm']] <span style="color: #E87C2B">par
                                                    <b>anonyme</b></span></span>
                                        </div>
                                    </div>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <form ng-submit="comment()" name="form">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea required ng-model="commentModel.comment" name="comment"
                                                id="comment" class="form-control"
                                                placeholder="Laisser un commentaire..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button ng-disabled="form.$invalid" type="submit"
                                            class="btn btn-primary">Commenter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="social2 cid-sI5MQIWexG" id="share2-1o">
        <div class="container">
            <div class="media-container-row">
                <div class="col-12">
                    <h3 class="mbr-section-title align-center mb-3 mbr-fonts-style display-5">
                        <strong>Partager cette page !</strong></h3>
                    <div>
                        <div class="mbr-social-likes align-center" data-counters="false">
                            <span class="btn btn-social facebook m-2">
                                <i class="socicon socicon-facebook"></i>
                            </span>
                            <span class="btn btn-social twitter m-2">
                                <i class="socicon socicon-twitter"></i>
                            </span>


                            <span class="btn btn-social pinterest m-2">
                                <i class="socicon socicon-pinterest"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection