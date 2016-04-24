
var demoApp = angular.module('demoApp', [])

.controller('NamesController', function ($scope){

	$scope.newMunhu = {name: null, center: null};

	$scope.people = [
		{name: 'Alice Muchokomori', center:'Highfield'},
		{name: 'Allen Lindegard', center:'Pretoria'},
		{name: 'James Makombero', center:'Headquaters'},
		{name: 'Jimmy Gadzikayi', center:'Gutu'},
		{name: 'Paul Nzombe', center:'Mutare'},
		{name: 'Patricia Nzombe', center:'Mutare'},
		{name: 'Gregory Chirumhanzu', center:'Belverdere'},
		{name: 'Taura Donje', center:'Msasa'}
	];

	$scope.addMunhu = function (){
		
		$scope.people.push({
			name: $scope.newMunhu.name, 
			center: $scope.newMunhu.centre,
		});
	};// finit addMunhu
	
	 $scope.deleteMunhu = function(index){
   		$scope.people.splice(index, 1);
};

// end of controlers
});
