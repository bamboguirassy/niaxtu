@extends('base')

@section('title','Mon compte')

@section('twitter-title',"Ceci est votre compte personnel.
Vous pouvez mettre à jour vos informations ou mettre à jour votre mot de passe de connexion.
Si vous décidez d'être invisible, votre nom n'apparaitra pas sur vos publications ou sur vos commentaires.")

@section('description',"Ceci est votre compte personnel.
Vous pouvez mettre à jour vos informations ou mettre à jour votre mot de passe de connexion.
Si vous décidez d'être invisible, votre nom n'apparaitra pas sur vos publications ou sur vos commentaires.")

@section('body')
<section data-bs-version="5.1" class="content4 cid-sI4cXc4OVT" id="extContacts4-p">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="card-title mbr-semibold pb-2 align-left mbr-fonts-style display-2">Mon compte</h4>
            </div>
            <div class="col-lg-8">
                <p class="mbr-text pb-2 align-left mbr-fonts-style display-4">Ceci est votre compte personnel.<br>Vous
                    pouvez mettre à jour vos informations ou mettre à jour votre mot de passe de connexion.<br>Si vous
                    décidez d'être invisible, votre nom n'apparaitra pas sur vos publications ou sur vos commentaires.
                </p>
            </div>
            <div class="col-lg-4">
                <p class="items items-col align-left mbr-fonts-style display-4">
                    <strong>Email:</strong> &nbsp;{{auth()->user()->email}}<br>
                    <strong>Profession:</strong>&nbsp;{{auth()->user()->profession}}<br>
                    <strong>DATE
                        inscription:</strong>&nbsp;{{date_format(auth()->user()->created_at,'d M Y à H:i')}}<br>
                </p>
            </div>
            <div class="col-12">

                <div class="form-row">
                    @foreach ($errors->all() as $message)
                    <div data-form-alert="" class="alert alert-danger col-12">{{$message}}</div>
                    @endforeach
                </div>
                @if (Session::has('error'))
                <div data-form-alert-danger="" class="alert alert-danger col-12">
                    {{Session::get('error')}}
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<section class="form cid-sI4dkjQpgr" id="formbuilder-s">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto mbr-form">
                <!--Formbuilder Form-->
                <form action="{{route('user.update',['user'=>auth()->user()])}}" method="POST"
                    class="mbr-form form-with-styler" data-form-title="Form Name">
                    @method('put')
                    @csrf
                    <div class="form-row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12"></div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="mbr-fonts-style display-2">Mettre à jour mes informations</h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="name">
                            <label for="name-formbuilder-s" class="form-control-label mbr-fonts-style display-7">Nom
                                complet</label>
                            <input value="{{auth()->user()->name}}" type="text" name="name" placeholder="Nom complet"
                                data-form-field="name" required="required" class="form-control display-7" value=""
                                id="name-formbuilder-s">
                        </div>
                        <div data-for="email" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="email-formbuilder-s"
                                class="form-control-label mbr-fonts-style display-7">Email</label>
                            <input disabled value="{{auth()->user()->email}}" type="email" name="email"
                                placeholder="test@email.com" data-form-field="email" class="form-control display-7"
                                required="required" value="" id="email-formbuilder-s">
                        </div>
                        <div data-for="profession" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="profession-formbuilder-s"
                                class="form-control-label mbr-fonts-style display-7">Profession</label>
                            <input value="{{auth()->user()->profession}}" type="text" name="profession"
                                placeholder="Profession" data-form-field="profession" class="form-control display-7"
                                required="required" value="" id="profession-formbuilder-s">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary display-7">Mettre à jour</button>
                        </div>
                    </div>
                </form>
                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>

<section class="form cid-sI4l8o0rQf" id="formbuilder-t">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto mbr-form">
                <!--Formbuilder Form-->
                <form action="{{route('password_update_route')}}" method="POST" class="mbr-form form-with-styler"
                    data-form-title="passwordEdit">
                    @method('put')
                    @csrf
                    <div class="dragArea form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="mbr-fonts-style display-2">Changer le mot de passe</h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="currentPassword">
                            <label for="currentPassword-formbuilder-t"
                                class="form-control-label mbr-fonts-style display-7"><strong>Mot de passe
                                    actuel</strong></label>
                            <input type="password" name="currentPassword" placeholder="Mot de passe actuel"
                                data-form-field="currentPassword" required="required" class="form-control display-7"
                                value="" id="currentPassword-formbuilder-t">
                        </div>
                        <div data-for="password" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="password-formbuilder-t"
                                class="form-control-label mbr-fonts-style display-7"><strong>Nouveau mot de
                                    passe</strong></label>
                            <input type="password" name="password" placeholder="Nouveau mot de passe"
                                data-form-field="password" class="form-control display-7" required="required" value=""
                                id="password-formbuilder-t">
                        </div>
                        <div data-for="password_confirmation" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="password_confirmation-formbuilder-t"
                                class="form-control-label mbr-fonts-style display-7"><strong>Confirmation mot de
                                    passe</strong></label>
                            <input type="password" name="password_confirmation"
                                placeholder="Confirmation nouveau mot de passe" data-form-field="password_confirmation"
                                class="form-control display-7" required="required" value=""
                                id="password_confirmation-formbuilder-t">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col"><button type="submit" class="btn btn-secondary display-7">Appliquer les
                                changements</button></div>
                    </div>
                </form>
                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>
@endsection