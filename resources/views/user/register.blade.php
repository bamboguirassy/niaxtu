<div ng-controller="UserController" class="modal mbr-popup cid-sI4z8My1D1 fade" tabindex="-1" role="dialog" data-overlay-color="#000000"
    data-overlay-opacity="0.8" id="mbr-popup-16" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header pb-0">
                <h5 class="modal-title mbr-fonts-style display-5">Ouvrir un nouveau compte</h5>
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
                    Ouvrez vite votre compte afin de pouvoir publier vos récits et interagir avec les autres.</p>
                <div>
                    <div class="form-wrapper">
                        <!--Formbuilder Form-->
                        <form name="form" ng-submit="register()"  class="mbr-form form-with-styler"
                            data-form-title="souscriptionForm">
                            <div ng-if="errorMessage" data-form-alert-danger="" class="alert alert-danger col-12">
                                [[errorMessage]]
                            </div>
                            <div ng-if="validationError" data-form-alert-danger="" class="alert alert-danger col-12">
                                [[validationError.message]]
                            </div>
                            <div class="dragArea">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="name">
                                    <label for="name-subscription_modal"
                                        class="form-control-label mbr-fonts-style display-7"><strong>Nom
                                            complet</strong></label>
                                    <input ng-model="registerForm.name" type="text" name="name" placeholder="Nom complet" data-form-field="name"
                                        class="form-control display-7" required="required" value=""
                                        id="name-subscription_modal">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="email">
                                    <label for="email-subscription_modal"
                                        class="form-control-label mbr-fonts-style display-7"><strong>Email</strong></label>
                                    <input ng-model="registerForm.email" type="email" name="email" placeholder="test@email.com"
                                        data-form-field="email" class="form-control display-7" required="required"
                                        value="" id="email-subscription_modal">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="profession">
                                    <label for="profession-subscription_modal"
                                        class="form-control-label mbr-fonts-style display-7"><strong>Profession</strong></label>
                                    <input ng-model="registerForm.profession" type="text" name="profession" placeholder="Profession"
                                        data-form-field="profession" class="form-control display-7" required="required"
                                        value="" id="profession-subscription_modal">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="password">
                                    <label for="password-subscription_modal"
                                        class="form-control-label mbr-fonts-style display-7"><strong>Nouveau mot de
                                            passe</strong></label>
                                    <input ng-model="registerForm.password" minlength="6" type="password" name="password" placeholder="Nouveau mot de passe"
                                        data-form-field="password" class="form-control display-7" required="required"
                                        value="" id="password-subscription_modal">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="password_confirmation">
                                    <label for="password_confirmation-subscription_modal"
                                        class="form-control-label mbr-fonts-style display-7"><strong>Confirmation
                                            mot de passe</strong></label>
                                    <input minlength="6" ng-model="registerForm.password_confirmation" type="password" name="password_confirmation"
                                        placeholder="Confirmation mot de passe" data-form-field="password_confirmation"
                                        class="form-control display-7" required="required" value=""
                                        id="password_confirmation-subscription_modal">
                                </div>
                                <div class="col input-group-btn">
                                    <button ng-disabled="form.$invalid" type="submit" class="btn btn-primary display-4">S'inscrire</button>
                                </div>
                            </div>
                        </form>
                        <!--Formbuilder Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>