<div ng-controller="PostPublicListControler">
    <section data-bs-version="5.1" class="info3 cid-sI4UluJklB" id="info3-1e" data-sortbtn="btn-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg-10">
                    <div class="card-wrapper">
                        <div class="card-box align-center">
                            <p class="mbr-text mbr-fonts-style mb-2 display-5"><strong>
                                    Options de filtre</strong></p>
                            <div class="row">
                                <div class="col-12">
                                    <ul class="categorie-list">
                                        <li ng-class="{'categorie-item':true,active:selectedCategorie==''}">
                                            <a ng-click="load('')">Tout</a>
                                        </li>
                                        <li class="separator">/</li>
                                        <li ng-click="load(categorie.id)" ng-repeat-start="categorie in categories"
                                            ng-class="{'categorie-item':true,active:selectedCategorie==categorie.id}">
                                            <a><b>[[categorie.nom]]</b></a>
                                        </li>
                                        <li ng-if="!$last" ng-repeat-end class="separator">/</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="pricing1 cid-sI3REMZ9AF" xmlns="http://www.w3.org/1999/html" id="pricing01-9"
        data-sortbtn="btn-primary">
        <div class="container">
            <div class="card" ng-if="posts|isEmpty">
                <div class="card-wrapper">
                    <div class="row align-items-center">
                        <div class="col-12 col-md">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-md">
                                        <p class="mbr-text text-center pt-2 mbr-fonts-style display-7">
                                            Aucun contenu n'est encore disponible !
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- section de la boucle sur les posts --}}
            <div class="card" ng-repeat="post in posts">
                <div class="card-wrapper">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-3">
                            <div class="image-wrapper">
                                <img ng-src="/assets/images/categories/[[post.categorie.image]]"
                                    alt="[[post.categorie.nom]] image">
                            </div>
                        </div>
                        <div class="col-12 col-md">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-md">
                                        <p class="mbr-text mbr-fonts-style display-7">
                                            [[post.post|truncate:150:'...']] <br>
                                            <span style="font-size: 13px; font-weight: bold; color: #1574bb;">[[post.created_at|date:'dd MMM yyyy - HH:mm']] <span style="color: #E87C2B">par <b>anonyme</b></span></span>
                                        </p>
                                        <ul>
                                            <li style="display: inline">
                                                [[post.likes_count]] <i
                                                    class="mobi-mbri mobi-mbri-hearth mbr-iconfont"></i> &nbsp; &nbsp;
                                            </li>
                                            <li style="display: inline">
                                                [[post.comments_count]] <i
                                                    class="mobi-mbri mobi-mbri-chat mbr-iconfont"></i> &nbsp; &nbsp;
                                            </li>
                                            <li style="display: inline">
                                                [[post.clicks_count]] <i
                                                    class="mobi-mbri mobi-mbri-cursor-click mbr-iconfont"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-auto">
                                        <div class="mbr-section-btn">
                                            <a href="/post/[[post.id]]" class="btn btn-primary display-4">
                                                <span class="mobi-mbri mobi-mbri-heart mbr-iconfont">
                                                </span>
                                                Lire plus
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="info3 cid-sI4wy3gR8f" id="info3-15" data-sortbtn="btn-primary">
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