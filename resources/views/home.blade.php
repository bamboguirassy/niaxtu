@extends('base')

@section('title','Accueil')

@section('body')
<section data-bs-version="5.1" class="header3 cid-sI3Qkybtw1" id="header03-5" data-sortbtn="btn-primary">
    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(21, 116, 187);"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Ñaxtu</strong></h1>

                <p class="mbr-text mbr-fonts-style mb-4 display-7"><strong>Votre plateforme de publication des faits
                        marquants qui gangrènent&nbsp;la société.</strong><br></p>
                <div class="mbr-section-btn mt-3">
                    @auth
                    <a class="btn btn-lg btn-primary display-4" href="#" data-toggle="modal" data-bs-toggle="modal"
                        data-target="#mbr-popup-19" data-bs-target="#mbr-popup-19"><span
                            class="mobi-mbri mobi-mbri-plus mbr-iconfont mbr-iconfont-btn"></span>Publier une
                        plainte&nbsp;</a>
                    @else
                    <a class="btn btn-lg btn-white display-4" href="#" data-toggle="modal" data-bs-toggle="modal"
                        data-target="#mbr-popup-17" data-bs-target="#mbr-popup-17"><span
                            class="mobi-mbri mobi-mbri-login mbr-iconfont mbr-iconfont-btn"
                            style="color: rgb(21, 116, 187);"></span>Se connecter&nbsp;</a>
                    <a class="btn btn-lg btn-primary display-4" href="#" data-toggle="modal" data-bs-toggle="modal"
                        data-target="#mbr-popup-16" data-bs-target="#mbr-popup-16"><span
                            class="mobi-mbri mobi-mbri-edit mbr-iconfont mbr-iconfont-btn"
                            style="color: rgb(255, 255, 255);"></span>Ouvrir un compte&nbsp;</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="article4 cid-sI3Ygi2TqF" id="article4-b" data-sortbtn="btn-primary">
    <div class="container">
        <div class="row right">
            <div class="col-12">
                <h4 class="card-heading mbr-fonts-style mbr-section-title display-2"><strong>Pour mettre notre pays
                        sur les rails</strong></h4>
                <p class="mbr-text mbr-fonts-style display-7">Nous collectons l'ensemble des avis et témoignages sur
                    les magouilles, les manipulations, la manière dont les choses sont gérées au Sénégal.<br>Lisez
                    les récits de nos internautes afin de comprendre le vécu dans certains domaines et
                    administrations afin que cela serve à tous.<br>Peut être que les décideurs et les responsables
                    sauront réagir afin de faciliter la vie de tous les jours aux citoyens.</p>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="title2 cleanm4_title2 cid-sI3YMJOvpK" id="title2-c" data-sortbtn="btn-primary">
    <div class="align-center container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="content-inner d-flex justify-content-between flex-wrap align-center">
                    <div class="left-content">
                        <h1 class="mbr-fonts-style mbr-section-title mbr-bold align-left display-2">
                            Qu'est ce que les autres racontent ?</h1>
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                            Lisez les récits des autres et comprenez comment le Sénégal a mal en profondeur dans
                            tous les domaines<br>&nbsp;en mettant le point sur les irresponsabilités afin que les
                            autorités compétentes puissent prendre<br> les mesures idoines afin d'éradiquer ces
                            pratiques.<br></p>
                    </div>
                    <div class="right-content">
                        <div class="buttons-wrap w-100">
                            <div class="mbr-section-btn align-center"><a class="btn btn-md btn-white display-4" href="#"
                                    data-toggle="modal" data-bs-toggle="modal" data-target="#mbr-popup-19"
                                    data-bs-target="#mbr-popup-19">Publier un récit</a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@include('post.public-list')

<section data-bs-version="5.1" class="social2 cid-sI40q5GxIC" id="share2-e" data-sortbtn="btn-primary">
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
{{-- register form --}}
@include('user.register')
{{-- login form --}}
@include('user.login')
{{-- new post publication form --}}
@include('post.new')
@endsection