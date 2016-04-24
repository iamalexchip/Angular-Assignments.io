<!DOCTYPE html>
<html ng-app="demoApp">
<head>
<link rel="stylesheet" href="b.css">
</head>

<body bgcolor="">
<style type="text/css">
   body { background: #00CCCC ; }
</style>


<h1> Angular Js First Assignment </h1>
<div class="row" ng-controller="NamesController">
	
		<div class="col-sm-4" >

			<input type="text" ng-model="filter.searchText" />

					<br/><br/>Showing people with the following letters in their names:<br/>
					{{ filter.searchText }}<br/><br/>
													
							<ul>
	  						  <li ng-repeat="munhu in people | filter:filter.searchText | orderBy:'name'">{{ munhu.name }} - {{ munhu.center }}
	  						  <button class="btn btn-danger" ng-click="deleteMunhu($index)">Delete</button>
	  						  </li>	
							</ul>
														
		</div>
		
		<div class="col-sm-4">
						<h3>
							<b>Add new entry</b>
						</h3>
						<br/><br/>
						Name  &nbsp:&nbsp
						<input type="text" ng-model="newMunhu.name" /><br/><br>
						Center :&nbsp
						<input type="text" ng-model="newMunhu.centre" /><br/><br/>

						<button class="btn btn-success" ng-click="addMunhu()">Add new entry</button>
		</div>

</div>
		<script src="js/angular.min.js"></script>
		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="controllers.js"></script>
</body>
</html>
