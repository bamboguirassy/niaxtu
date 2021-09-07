app.controller('PostShowController', ($scope, PostService) => {
    $scope.post = {};
    $scope.init = post => {
        $scope.post = post;
    }
    $scope.commentModel = {};

    $scope.like = () => {
        PostService.like($scope.post.id)
            .success(response => {
                if(response.error) {
                    alert(response.message);
                } else {
                    $scope.refresh();
                }
            }, err => console.log(err));
    }

    $scope.comment = () => {
        PostService.comment($scope.post.id, $scope.commentModel)
            .success(response => {
                if(response.error) {
                    alert(response.message);
                } else {
                    $scope.commentModel = {};
                    $scope.refresh();
                }
            }, err => console.log(err));
    }

    $scope.refresh = () => {
        PostService.findOneById($scope.post.id)
            .success((response) => {
                $scope.post=response;
            }).error(err => console.log(err));
    }
});