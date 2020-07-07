$scope.includeDesktopTemplate = false;
$scope.includeMobileTemplate = false; 
let screenWidth = $window.innerWidth;

if (screenWidth < 700){
    $scope.includeMobileTemplate = true;
}else{
    $scope.includeDesktopTemplate = true;
}