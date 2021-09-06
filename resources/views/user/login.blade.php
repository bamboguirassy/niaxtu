<div ng-controller="UserController" class="modal mbr-popup cid-sI4B3WwWmf fade" tabindex="-1" role="dialog" data-overlay-color="#000000"
    data-overlay-opacity="0.8" id="mbr-popup-17" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header pb-0">
                <h5 class="modal-title mbr-fonts-style display-5">Se connecter</h5>
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
                    Saisissez vos identifiants de connexion puis cliquez sur "<strong>Se connecter</strong>"</p>
                <div>
                    <div class="form-wrapper">
                        <!--Formbuilder Form-->
                        <form ng-submit="login()" class="mbr-form form-with-styler"
                            data-form-title="loginForm" name="form">
                            <div ng-if="errorMessage" data-form-alert-danger="" class="alert alert-danger col-12">
                                [[errorMessage]]
                            </div>
                            <div ng-if="validationError" data-form-alert-danger="" class="alert alert-danger col-12">
                                [[validationError.message]]
                            </div>
                            <div class="dragArea">
                                <div class="col form-group " data-for="email">
                                    <label for="email-mbr-popup-17"
                                        class="form-control-label mbr-fonts-style display-7"><strong>Email</strong></label>
                                    <input ng-model="loginForm.email" type="email" name="email" placeholder="Email" data-form-field="Email"
                                        required="required" class="form-control display-7" value=""
                                        id="email-mbr-popup-17">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="password">
                                    <label for="password-mbr-popup-17"
                                        class="form-control-label mbr-fonts-style display-7"><strong>Mot de
                                            passe</strong></label>
                                    <input minlength="6" ng-model="loginForm.password" type="password" name="password" placeholder="Mot de passe"
                                        data-form-field="password" class="form-control display-7" required="required"
                                        value="" id="password-mbr-popup-17">
                                </div>
                                <div class="col-md-auto input-group-btn">
                                    <button ng-disabled="form.$invalid" type="submit" class="btn btn-primary display-4">Se connecter</button>
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