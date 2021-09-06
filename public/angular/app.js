var app = angular.module('Niaxtu', ['angular.filter'],
    ($interpolateProvider) => {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
    });