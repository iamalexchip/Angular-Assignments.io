<!DOCTYPE html>
<html ng-app="demoApp">
<head>
<link rel="stylesheet" href="b.css">
</head>

<body bgcolor="">
<style type="text/css">
   body { background: #00CCCC ; }
</style>


<h1> Angular Js Assignment 1.1</h1>
<div class="row" ng-controller="NamesController">
	
		<div class="col-sm-8" >

			<input type="text" ng-model="filter.searchText" />

					<br/><br/>Showing people with the following letters in their names:<br/>
					{{ filter.searchText }}<br/><br/>
					<!-- <table width="100%"  class="table table-striped">
					 	<tr class="success">
					 		<th>NAME</th>
					 		<th>CENTER</th>
					 		<th>AGE</th>
					 		<th>OCCUPATION</th>
					 		<th>&nbsp</th>
					 	</tr>
					 	
					 	<person>
					 	</person>
					
					 </table>

						-->	
						<ul>
							<li ng-repeat="munhu in people | filter:filter.searchText | orderBy:'name'">
								<ng-person deletep="deleteMunhu(i)" person="munhu" i="$index"></ng-person>
							</li>
						</ul>
														
		</div>
		
		<div class="col-sm-2">
						<h3>
							<b>Add new entry</b>
						</h3>
						<br/><br/>
						<p class="bg-danger text-primary" style="float: center">{{msbg}}</p>
						Name  &nbsp:&nbsp
						<input type="text" ng-model="newMunhu.zita" /><br/><br>
						Center :&nbsp
						<input type="text" ng-model="newMunhu.center" /><br/><br/>

						<button class="btn btn-success" ng-click="addMunhu()">Add new entry</button>
											
		</div>

</div>
		<script src="js/angular.min.js"></script>
		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="controllers.js"></script>
</body>
</html>
