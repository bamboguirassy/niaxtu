app.controller('MyPostsControler', ($scope, $http, PostService, CategorieService) => {
    $scope.posts = [];
    $scope.selectedPost = null;
    $scope.categories = [];
    $scope.validationError = null;

    $scope.resetErrors = () => {
        $scope.errorMessage = null;
        $scope.validationError = null;
    };

    $scope.findMyPosts = () => {
        PostService.loadMines()
            .success((response) => {
                $scope.posts = response;
            }).error(err => console.log(err));
    };

    $scope.select = (post) => {
        $scope.selectedPost = post;
    }

    $scope.remove = () => {
        PostService.destroy($scope.selectedPost)
            .success((response) => {
                if (!response.error) {
                    $scope.selectedPost = null;
                    $scope.findMyPosts();
                    $('#mbr-popup-1v').modal('toggle');
                } else {
                    alert(response.message);
                }
            }).error(err => console.log(err));
    }

    $scope.update = () => {
        PostService.update($scope.selectedPost)
            .success((response) => {
                if (!response.error) {
                    $scope.selectedPost = null;
                    $scope.findMyPosts();
                    $('#mbr-popup-1u').modal('toggle');
                } else alert(response.message);
            }).error(err => $scope.validationError = err);
    }

    $scope.findCategories = () => {
        CategorieService.findAll()
            .success((response) => {
                $scope.categories = response;
            }).error(err => console.log(err));
    }
    $scope.findMyPosts();
    $scope.findCategories();

});