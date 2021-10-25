@extends('base')

@section('title','Mes publication')

@section('twitter-title',"Retrouvez ici la liste de toutes les publications que vous avez faites sur la plateforme.
Vous pouvez mettre à jour certaines publications ou de les retirer définitivement.")

@section('description',"Retrouvez ici la liste de toutes les publications que vous avez faites sur la plateforme.
Vous pouvez mettre à jour certaines publications ou de les retirer définitivement.")

@section('body')
<div ng-controller="MyPostsControler">
    <section data-bs-version="5.1" class="article1 cid-sI4qNbt243" id="article01-x">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 align-left col-lg-12">
                    <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5"><strong>Toutes mes
                            publications</strong>
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-4"><strong>Retrouvez ici la liste de toutes les
                            publications
                            que vous avez faites sur la plateforme.</strong><br><strong>Vous pouvez mettre à jour
                            certaines
                            publications ou de les retirer&nbsp;définitivement.</strong></p>
                </div>
            </div>
        </div>
    </section>
    {!! Adsense::ads('responsive') !!}
    <section data-bs-version="5.1" class="info3 cid-sI4to9cx9b" id="info3-11">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg-10">
                    <div class="card-wrapper">
                        <div class="card-box align-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section ng-repeat-start="post in posts" data-bs-version="5.1" class="article5 cid-sI4qKHMpnp" id="article06-w">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg">
                    <div class="card-wrapper align-left">
                        <p class="mbr-text mbr-fonts-style display-7">
                            [[post.post|truncate:200:'...']]
                            &nbsp;<a href="/post/[[post.id]]" class="text-primary"><strong>Lire la
                                    suite</strong></a></p>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <ul>
                                    <li style="display: inline">
                                        [[post.likes_count]] <i class="mobi-mbri mobi-mbri-hearth mbr-iconfont"></i>
                                        &nbsp;
                                        &nbsp;
                                    </li>
                                    <li style="display: inline">
                                        [[post.comments_count]] <i class="mobi-mbri mobi-mbri-chat mbr-iconfont"></i>
                                        &nbsp;
                                        &nbsp;
                                    </li>
                                    <li style="display: inline">
                                        [[post.clicks_count]] <i
                                            class="mobi-mbri mobi-mbri-cursor-click mbr-iconfont"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mbr-section-btn align-right">
                                    <a class="btn btn-md btn-danger display-4" ng-click="select(post)"
                                        data-toggle="modal" data-bs-toggle="modal" data-target="#mbr-popup-1v"
                                        data-bs-target="#mbr-popup-1v">
                                        <span
                                            class="mdi-content-remove-circle mbr-iconfont mbr-iconfont-btn"></span>Retirer
                                    </a>
                                    <a class="btn btn-md btn-success display-4" ng-click="select(post)"
                                        data-toggle="modal" data-bs-toggle="modal" data-target="#mbr-popup-1u"
                                        data-bs-target="#mbr-popup-1u"><span
                                            class="mbri-edit mbr-iconfont mbr-iconfont-btn"></span>Modifier
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="image-wrapper">
                        <img src="/uploads/post/images/[[post.image]]" alt="[[post.categorie.nom]]">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section ng-repeat-end data-bs-version="5.1" class="info3 cid-sI4u1CZtUm" id="info3-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg-10">
                    <div class="card-wrapper">
                        <div class="card-box align-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal mbr-popup cid-sI5SG62IT8 fade" tabindex="-1" role="dialog" data-overlay-color="#000000"
        data-overlay-opacity="0.8" id="mbr-popup-1u" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mbr-fonts-style display-5">Modifier la publication</h5>
                    <button type="button" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                            fill="currentColor">
                            <path
                                d="M13.4 12l10.3 10.3-1.4 1.4L12 13.4 1.7 23.7.3 22.3 10.6 12 .3 1.7 1.7.3 12 10.6 22.3.3l1.4 1.4L13.4 12z">
                            </path>
                        </svg>
                    </button>
                </div>

                <div class="modal-body">
                    <div>
                        <div class="form-wrapper">
                            <!--Formbuilder Form-->
                            <form ng-submit="update()" name="form" class="mbr-form form-with-styler"
                                data-form-title="postForm">
                                <div ng-if="validationError" data-form-alert-danger=""
                                    class="alert alert-danger col-12">
                                    [[validationError.message]]
                                </div>
                                <div class="dragArea">
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="categorie">
                                        <label for="categorie-mbr-popup-1u"
                                            class="form-control-label mbr-fonts-style display-7"><strong>Catégorie</strong></label>
                                        <select ng-model="selectedPost.categorie_id" name="categorie_id"
                                            data-form-field="categorie" class="form-control display-7"
                                            id="categorie-mbr-popup-1u">
                                            <option value="">---Selectionner une valeur---</option>
                                            <option ng-selected="selectedPost.categorie_id==categorie.id"
                                                ng-repeat="categorie in categories" ng-value="categorie.nom">
                                                [[categorie.nom]]</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="post">
                                        <label for="post-mbr-popup-1u"
                                            class="form-control-label mbr-fonts-style display-7"><strong>Publication</strong></label>
                                        <textarea ng-model="selectedPost.post" name="post" data-form-field="post"
                                            class="form-control display-7" required="required"
                                            placeholder="Texte à modifier" id="post-mbr-popup-1u"></textarea>
                                    </div>
                                    <div class="col input-group-btn"><button type="submit"
                                            class="btn btn-primary display-4">Mettre à jour</button></div>
                                </div>
                            </form>
                            <!--Formbuilder Form-->
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="modal mbr-popup cid-sI5TnSzTnP fade" tabindex="-1" role="dialog" data-overlay-color="#000000"
        data-overlay-opacity="0.8" id="mbr-popup-1v" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h5 class="modal-title mbr-fonts-style display-5">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                            fill="currentColor">
                            <path
                                d="M13.4 12l10.3 10.3-1.4 1.4L12 13.4 1.7 23.7.3 22.3 10.6 12 .3 1.7 1.7.3 12 10.6 22.3.3l1.4 1.4L13.4 12z">
                            </path>
                        </svg>
                    </button>
                </div>

                <div class="modal-body">
                    <p class="mbr-text mbr-fonts-style display-7">
                        Êtes-vous sûr de vouloir procéder à la suppression ?</p>
                    <div>
                    </div>
                </div>

                <div class="modal-footer pt-0">
                    <div class="mbr-section-btn">
                        <a class="btn btn-md btn-warning mr-1 display-4" ng-click="remove()">Oui</a>
                        <a data-dismiss="modal" data-bs-dismiss="modal"
                            class="btn btn-md btn-danger ml-1 display-4">Non</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Adsense::ads('responsive') !!}
@endsection
