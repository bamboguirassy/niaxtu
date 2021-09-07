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
        },
        findOneById: id => {
            return $http.get(`/posts/${id}`);
        },
        like: id => {
            return $http.post(`/like/${id}`);
        },
        comment: (id, comment) => {
            return $http.post(`/comment/${id}`, comment);
        }
    };
})