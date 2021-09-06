app.controller('UserController', ($scope, UserService) => {
    $scope.loginForm = {};
    $scope.errorMessage = null;
    $scope.validationError = null;
    $scope.registerForm = {};

    $scope.resetErrors = () => {
        $scope.errorMessage = null;
        $scope.validationError = null;
    };

    $scope.login = () => {
        $scope.resetErrors();
        UserService.login($scope.loginForm)
            .success((response) => {
                if (response.error) {
                    $scope.errorMessage = response.message;
                } else {
                    window.location.href='/';
                }
            }).error(err => $scope.validationError = err);
    }

    $scope.register = () => {
        $scope.resetErrors();
        UserService.register($scope.registerForm)
            .success((response) => {
                if (response.error) {
                    $scope.errorMessage = response.message;
                } else {
                    window.location.href='/';
                }
            }).error(err => $scope.validationError = err);
    }

});