app.factory('CategorieService',($http)=>{
    return {
        findAll:  () => {
            return $http.get(`/categorie`);
        }
    };
})