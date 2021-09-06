@extends('base')

@section('title','Post details')

@section('body')
<section data-bs-version="5.1" class="info3 cid-sI5NCv6udu" id="info3-1q">
<div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-lg-10">
                <div class="card-wrapper">
                    <div class="card-box align-center"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content3 personam4_content3 cid-sI5Mq5Rfkf" id="content03-1m">
<div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card-img">
                    <img src="{{ asset('assets/images/categories/'.$post->categorie->image) }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 py-4 align-right">
                <p class="mbr-text pb-2 align-right mbr-fonts-style display-4">
                    {{$post->post}}</p>
                <div class="sig-img">
                    <img src="{{ asset('assets/images/signature.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section__comments" id="facebook-comments-block-1r" data-rv-view="1082"
    style="background-image: url(assets/images/mbr.jpg); padding-top: 2rem; padding-bottom: 4rem;">
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(21, 116, 187);">
    </div>

    <div class="mbr-section__container mbr-section__container--isolated addons-container">
        <div class="addons-row">
            <div class="addons-container-inner">
                <div class="facebookPlaceholder text-center" data-numposts="7">
                    <h2>FACEBOOK COMMENTS WILL BE SHOWN ONLY WHEN YOUR SITE IS ONLINE</h2> <img
                        src="{{ asset('assets/images/facebook-comments.jpg') }}">
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
@endsection