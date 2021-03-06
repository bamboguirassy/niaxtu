@extends('base')

@section('title',"Publier un post")

@section("description","Créer une nouvelle publication et la diffuser au près des internautes... ")

@section('twitter-title',"Publication d'un nouveau niaxtu")

@section("body")
<div class="container container-fluid" style="margin-top: 80px;" ng-controller="PostNewController">
    <div class="row">
        <div class="col-10 mx-auto">
            <p class="mbr-text mbr-fonts-style display-7">
                Rédigez et publiez votre témoignage en sélectionnant une catégorie d'abord.<br>Votre nom
                n'apparaitra pas sur la publication.<br>Toutes les publications sont anonymes.</p>

            <div>
                <div class="form-wrapper">
                    <!--Formbuilder Form-->
                    <form enctype="multipart/form-data" name="form" action="{{ route('post.store') }}" class="mbr-form form-with-styler"
                        data-form-title="postForm" method="post">
                        @csrf
                        @method('post')
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger col-12">
                            {{$error}}
                        </div>
                        @endforeach
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12"></div>
                        <div class="dragArea">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="categorie">
                                <label for="categorie-mbr-popup-19"
                                    class="form-control-label mbr-fonts-style display-7"><strong>Catégorie</strong></label>
                                <select ng-model="post.categorie_id" name="categorie_id" data-form-field="categorie"
                                    class="form-control display-7" id="categorie-mbr-popup-19">
                                    <option value="">---Selectionner une valeur---</option>
                                    <option ng-repeat="categorie in categories" ng-value="categorie.id">
                                        [[categorie.nom]]</option>
                                </select>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="post">
                                <label for="post-mbr-popup-19"
                                    class="form-control-label mbr-fonts-style display-7"><strong>Publication</strong></label>
                                <textarea ng-model="post.post" name="post"
                                    placeholder="Rédiger votre publication ici" data-form-field="post"
                                    class="form-control display-7" required="required"
                                    id="post-mbr-popup-19"></textarea>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                  <label for="image" class="form-label">Ajouter une image</label>
                                  <input type="file"
                                    class="form-control" name="image" id="image" accept="image/*">
                                </div>
                            </div>
                            <div class="col input-group-btn">
                                <div class="d-grid gap-2">
                                    <button ng-disabled="form.$invalid" type="submit"
                                        class="btn btn-primary display-4">Publier</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--Formbuilder Form-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<div  class="modal mbr-popup cid-sI4F2yYYO0 fade" tabindex="-1" role="dialog"
    data-overlay-color="#000000" data-overlay-opacity="0.8" id="mbr-popup-19" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header pb-0">
                <h5 class="modal-title mbr-fonts-style display-5">Nouvelle Publication</h5>
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

            </div>
        </div>
    </div>
</div>
