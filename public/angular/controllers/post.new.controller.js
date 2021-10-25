app.controller('PostNewController', ($scope, CategorieService) => {
    $scope.post = {};
    $scope.categories = [];
    $scope.validationError = null;

    $scope.resetErrors = () => {
        $scope.errorMessage = null;
        $scope.validationError = null;
    };

    $scope.findCategories = () => {
        CategorieService.findAll()
            .success((response) => {
                $scope.categories = response;
            }).error(err => console.log(err));
    }

    $scope.findCategories();
});
