
var demoApp = angular.module('demoApp', [])


demoApp.directive('ngPerson', function() {

	return {
		restrict: 'E',
		scope: {
			person: '=',
			i: '=',
			deletep: '&'
		},

	replace:true,

	template: '<p>{{ person.name }} - {{ person.center }} - <button ng-click="deletep()">Delete - {{i}}</button></p>',


	}// RETURNED SON

})//DIRECTIVE NUMBER TWO

demoApp.controller('NamesController', function ($scope){

	$scope.newMunhu = {name: null, center: null};
    $scope.msbg = 'sss';
	
	$scope.people = [
		{name: 'Alice Muchokomori', center:'Highfield', occupation:' Touble maker',age: 10},
		{name: 'Allen Lindegard', center:'Pretoria', occupation:'Real Estate Agent ',age: 35},
		{name: 'James Makombero', center:'Headquaters', occupation:'Mechanic',age: 40},
		{name: 'Jimmy Gadzikayi', center:'Gutu', occupation:'Primary School Teacher',age: 23},
		{name: 'Paul Nzombe', center:'Mutare', occupation:'Commercial Farmer',age: 52},
		{name: 'Patricia Nzombe', center:'Mutare', occupation:'EMA Chairman',age: 34},
		{name: 'Gregory Chirumhanzu', center:'Belverdere', occupation:'Neurologist',age: 37},
		{name: 'Taura Donje', center:'Msasa', occupation:'Phycologist',age: 30}
	];

	$scope.addMunhu = function (){
			
		if ( $scope.newMunhu.zita != null && $scope.newMunhu.center != null ){

			$scope.people.push({
				name: $scope.newMunhu.zita, 
				center: $scope.newMunhu.center
			});

		}else{
			alert('Enter in both fields');
		}//endif
	};// finit addMunhu

		$scope.deleteMunhu = function(i){
   		$scope.people.splice(i, 1);
    }

})// end of controlers

