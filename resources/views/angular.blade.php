<!DOCTYPE html>
<html ng-app="tabApp">

<head>
    <meta charset="UTF-8">
    <title>AngularJS Tabs in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    @vite(['resources/js/angular.js'])
    <style>
        .tab {
            cursor: pointer;
            padding: 10px;
            display: inline-block;
            background-color: #f1f1f1;
            margin-right: 5px;
            border-radius: 5px;
        }

        .tab.active {
            background-color: #4CAF50;
            color: white;
        }

        .tab-content {
            border: 1px solid #ddd;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>

<body ng-controller="TabController">

    <!-- Tabs -->
    <div class="tab" ng-repeat="tab in tabs" ng-class="{ active: isActiveTab(tab) }" ng-click="selectTab(tab)">
        @{{ tab.title }}
    </div>

    <!-- Tab Content -->
    <div class="tab-content" ng-repeat="tab in tabs" ng-show="isActiveTab(tab)">
        <h2>@{{ tab.title }}</h2>
        <p>@{{ tab.content }}</p>
    </div>
    @foreach ($data as $item)
        <p style="color: red">{{ $item }}</p>
    @endforeach
</body>

</html>
