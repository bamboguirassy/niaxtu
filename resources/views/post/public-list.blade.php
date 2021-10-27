<style>
    .right-bck {
        background-color: transparent;
        /** 231833 */
    }

    .registration-right {
        width: 80%;
        padding-top: 10px;
        padding-bottom: 50px
    }

    .registration-right h2 {
        color: #ffffff;
        font-weight: 700;
        padding-bottom: 20px
    }

    .registration .btn {
        width: 100%
    }

    .fa,
    .fas,
    .fab {
        font-family: "Font Awesome 5 Free";
        font-weight: 900
    }

    .far {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
    }

    .event-list .card {
        background-color: #1574BB;
        padding: 18px;
        margin-bottom: 3px
    }

    .event-list img {
        width: 100px;
        height: 100px
    }

    .event-list h4 {
        color: #c0bfc9;
        font-size: 16px
    }

    .event-list .card-title span {
        padding-left: 5px;
        padding-right: 20px;
        font-size: 12px;
        font-weight: 700
    }

    .event-list .card-text {
        color: #ffffff;
        font-weight: 700;
        font-size: 16px
    }

    .event-list .card-body {
        padding: 0 20px;
        margin: 0 0 10px 0
    }

    .event-list .card-title svg {
        color: #ffffff
    }

</style>

<div ng-controller="PostPublicListControler">
    <section data-bs-version="5.1" class="info3 cid-sI4UluJklB" id="info3-1e" data-sortbtn="btn-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg-10">
                    <div class="card-wrapper">
                        <div class="card-box align-center">
                            <p class="mbr-text mbr-fonts-style mb-2 display-5"><strong>
                                    Rechercher dans une catégorie</strong></p>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <select style="border: 1px solid #1574BB !important;" ng-change="load(categorieId)" ng-model="categorieId"
                                            class="form-control" name="categorie" id="catagorie">
                                            <option value="">Tout</option>
                                            <option ng-repeat="categorie in categories" ng-value="categorie.id"
                                                ng-bind="categorie.nom"></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid mt-1">
            <div class="row">
                <div class="col-12" ng-if="posts|isEmpty">
                    <div class="card">
                        <div class="card-wrapper">
                            <div class="row align-items-center">
                                <div class="col-12 col-md">
                                    <div class="card-box">
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="alert alert-info" role="alert">
                                                    <strong>Aucun contenu n'est encore disponible !</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-center right-bck">
                    <div class="registration-right">
                        <div class="event-list">
                            <ng-container ng-repeat="post in posts" ng-click="show(post.id)">
                                <div class="card flex-row">
                                {{-- <a href="/post/[[post.id]]" style="display: inline-block;"> --}}
                                    <img class="card-img-left img-fluid mr-0" ng-src="/uploads/post/images/[[post.image]]" />
                                    <div class="card-body">
                                        <h4 class="card-title h5 h4-sm">
                                            <i class="fas fa-caret-right" aria-hidden="true"></i><span
                                                ng-bind="post.created_at|date:'dd MMM yyyy'"></span>
                                            <i class="fas fa-caret-right" aria-hidden="true"></i><span
                                                ng-bind="post.created_at|date:'HH:mm'"></span>
                                            <i class="fas fa-caret-right" aria-hidden="true"></i><span
                                                ng-bind="post.categorie.nom"></span>
                                        </h4>
                                        <p class="card-text" ng-bind="post.post|truncate:150:'...'"></p>
                                        <div class="interactions">
                                            <ul class="pb-0 text-white" style="margin-bottom: 5px;">
                                                <li style="display: inline">
                                                    [[post.likes_count]] <i
                                                        class="mobi-mbri mobi-mbri-hearth mbr-iconfont"></i> &nbsp;
                                                    &nbsp;
                                                </li>
                                                <li style="display: inline">
                                                    [[post.comments_count]] <i
                                                        class="mobi-mbri mobi-mbri-chat mbr-iconfont"></i> &nbsp;
                                                    &nbsp;
                                                </li>
                                                <li style="display: inline">
                                                    [[post.clicks_count]] <i
                                                        class="mobi-mbri mobi-mbri-cursor-click mbr-iconfont"></i>
                                                </li>
                                                <li style="display: inline; padding-left: 30px;">
                                                    <a class="float-right" href="/post/[[post.id]]"><b>Lire la suite</b></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{-- </a> --}}
                                </div>
                            </ng-container>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section ng-if="pagination.next_page_url!=null" data-bs-version="5.1" class="content3 cid-sI45dTeoFu"
        id="article03-f" data-sortbtn="btn-primary">
        <div class="container">
            <div class="row">
                <div class="title col-md-12 col-lg-12">
                    <div class="mbr-section-btn align-right">
                        <a ng-click="nextPage()" class="btn btn-lg btn-success display-4">Voir
                            plus...&nbsp;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
