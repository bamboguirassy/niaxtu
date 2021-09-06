app.factory('PostService', ($http) => {
    return {
        lazyLoad: (selectedCategorie) => {
            return $http.get(`/post/lazy-load/${selectedCategorie}`);
        },
        create: (post) => {
            return $http.post('/post', post);
        },
        loadMines: () => {
            return $http.get(`/posts/mines/`);
        },
        destroy: (post) => {
            return $http.delete(`/post/${post.id}`);
        },
        update: (post) => {
            return $http.put(`/post/${post.id}`, post);
        }
    };
})