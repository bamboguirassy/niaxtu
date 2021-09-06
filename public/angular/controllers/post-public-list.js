app.controller('PostPublicListControler', ($scope, $http, PostService, CategorieService) => {
    $scope.pagination = {};
    $scope.posts = [];
    $scope.selectedCategorie = '';
    $scope.categories = [];

    $scope.load = (categorie) => {
        $scope.selectedCategorie = categorie;
        PostService.lazyLoad($scope.selectedCategorie)
            .success((response) => {
                $scope.posts = response.data;
                $scope.pagination = response;
            }).error(err => console.log(err));
    };

    $scope.findCategories = () => {
        CategorieService.findAll()
            .success((response) => {
                $scope.categories = response;
            }).error(err => console.log(err));
    }

    $scope.nextPage = () => {
        $http.get($scope.pagination.next_page_url)
            .success((response) => {
                $scope.posts = $scope.posts.concat(response.data);
                $scope.pagination = response;
            }).error(err => console.log(err));
    }

    $scope.load('');
    $scope.findCategories();

});