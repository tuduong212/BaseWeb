var app = angular.module('tabApp', []);

app.controller('TabController', function($scope) {
    $scope.tabs = [
        { title: 'Home', content: 'Welcome to the Home tab.' },
        { title: 'About', content: 'Learn more about us on the About tab.' },
        { title: 'Contact', content: 'Get in touch via the Contact tab.' }
    ];

    $scope.currentTab = $scope.tabs[0];

    $scope.selectTab = function(tab) {
        $scope.currentTab = tab;
    };

    $scope.isActiveTab = function(tab) {
        return $scope.currentTab === tab;
    };
});
