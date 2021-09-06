@extends('base')

@section('title','Contact')

@section('body')
<section data-bs-version="5.1" class="content7 cid-sI4K6eNQgW" id="content7-1d">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7">
                <blockquote>
                    <h5 class="mbr-section-title mbr-fonts-style mb-2 display-7"><strong>Comment nous contacter
                            ?</strong></h5>
                    <p class="mbr-text mbr-fonts-style display-4">Vous avez quelque chose à nous dire ?<br>Vous avez des
                        remarques ou suggestions à faire ?<br>Remplissez le formulaire suivant et nous allons vous
                        revenir.</p>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="form1 cid-sI4JSajt7G" id="form01-1c">


    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-5">Envoyer un message</h3>

        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto" data-form-type="formoid">
                <!--Formbuilder Form-->
                <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler"
                    data-form-title="Contact Form"><input type="hidden" name="email" data-form-email="true"
                        value="MmqJdiPL2z2zs297LlMflnAO6eMdZuMvY5c5TnNq6XOkSb9DoWNqmW87+jBniNw7zM1e+vo5g9iqptGzN1/IsFb1C+XAcUEi0kQS4/3i/I0hmMTSJ7PmylXkFL0kF74h.5PmMun4T1N/WRK2fVqzsy26JoL3hYjmmMuXE91n9vnh/P1uUgog9iw/c8tLorQ/E4ny38bkQYAutL7eb6NKqXMzNHym9YUadnsds8FRTlZYY4NdOKYbDoLDU+XHgFE6c">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Merci de nous avoir
                            contacté, nous allons vous revenir.</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col form-group mb-3" data-for="fullName">
                            <label for="fullName-form01-1c"
                                class="form-control-label mbr-fonts-style display-7"><strong>Nom
                                    complet</strong></label>
                            <input type="text" name="fullName" placeholder="Nom Complet" data-form-field="fullName"
                                required="required" class="form-control display-7" value="" id="fullName-form01-1c">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="emailOrPhone">
                            <label for="emailOrPhone-form01-1c"
                                class="form-control-label mbr-fonts-style display-7"><strong>Email ou
                                    téléphone</strong></label>
                            <input type="text" name="emailOrPhone" placeholder="Email ou téléphone"
                                data-form-field="emailOrPhone" required="required" class="form-control display-7"
                                value="" id="emailOrPhone-form01-1c">
                        </div>
                        <div data-for="objet" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="objet-form01-1c"
                                class="form-control-label mbr-fonts-style display-7"><strong>Objet</strong></label>
                            <input type="text" name="objet" placeholder="Objet du message" data-form-field="objet"
                                class="form-control display-7" required="required" value="" id="objet-form01-1c">
                        </div>
                        <div data-for="message" class="col-12 form-group mb-3">
                            <label for="message-form01-1c"
                                class="form-control-label mbr-fonts-style display-7"><strong>Message</strong></label>
                            <textarea name="message" placeholder="Message" data-form-field="message" required="required"
                                class="form-control display-7" id="message-form01-1c"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit"
                                class="btn btn-primary display-4">Envoyer le message</button></div>
                    </div>
                </form>
                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>
@endsection