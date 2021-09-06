app.controller('PostNewController', ($scope, PostService, CategorieService) => {
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

    $scope.create = () => {
        $scope.resetErrors();
        PostService.create($scope.post)
            .success((response) => {
                if(!response.error) {
                    $scope.post = {};
                    window.location.href=`/post/${response.data.id}`;
                }
            }).error(err => $scope.validationError = err);
    }
});