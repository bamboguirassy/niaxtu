app.factory('UserService', ($http) => {
    return {
        login: (loginForm) => {
            return $http.post('/login',loginForm);
        },
        register: (userData) => {
            return $http.post('/user',userData);
        }
    }
});