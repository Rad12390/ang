<!DOCTYPE html>
<html>
<head>
	<meta chrset="UTF 8">
	<link rel="stylesheet" href="css/bootstrap.css"/>
</head>
<body>
<script src="https://code.angularjs.org/1.6.9/angular.js"></script>
<script src="lib/angular.js"></script>
<script src="lib/bootstrap.js"></script>
<script src="lib/jquery-1.11.3.min.js"></script>

<!-- App  first-->	
	<div ng-app="DemoApp">

	   <!--First Controller --> 
	  <div ng-controller="DemoController">
		   <div>{{hello}}</div>
			Tutorial Name : <input type="text" ng-model="tutorialName"><br>   
				Textarea Name : <textarea rows="3" cols="25" ng-model="PlaceholderTextarea"></textarea><br>   

              
	
		<input type="checkbox" ng-model="Topic.ControllerOne">Controller<br>&nbsp;&nbsp;&nbsp;
		<input type="checkbox" ng-model="Topic.ModelsOne">Models
		<br>
		<select ng-model="Topic">
		<option selected ="selected">{{Topic.option1}}</option>
		<option>{{Topic.option2}}</option>
		</select>
	
                 <br>
				This tutorial is {{tutorialName}}
				This tutorial is {{hello1}}
				This addition is {{3+5+3}}
				This substruction is {{5-3}}
				{{fullName("Guru","99")}}
				<div >daskudyisauyduiasyduiasdyuias
				Creating a function {{newfun("firstname" , "lastname")}}
			    </div>
		</div>
		
		<!-- Second Controller in the same app-->	

		<div ng-controller="DemoController1">
			   <ul>
			       <li ng-repeat="tpname in TopicNames"> {{tpname.name}}</li> 
			   </ul>
		 </div>

	</div>
	
	<div ng-app="NewApp">

	</div>


<script>
	var app = angular.module('DemoApp',[]);

	app.controller('DemoController', function($scope){
	$scope.tutorialName = "Angular JS";
	$scope.hello = "313131231321";
	$scope.hello1 = "sasaSASJhJKASHAJKShkjAHSJK";
	$scope.PlaceholderTextarea = "enter \n a \n value";
	$scope.Topic =
		{
			ControllerOne:true,
			ModelsOne:true,
			option1:"hdfjkhasjhasjkd",
			option2:"dasydtyaustdyuast"
		};  

	$scope.fullName=function(firstName,lastname){
		return firstName + lastname;
		}
	$scope.newfun = function(firstname,lastname){
			return firstname + "I am here"+ lastname;
		}
		
	});
	app.controller('DemoController1', function($scope){

		/**ng repeat*/
    $scope.TopicNames =[
		{name: "What controller do from Angular's perspective"},
		{name: "Controller Methods"},
		{name: "Building a basic controller"}];
		
	});
	
	/*app.controller("DemoController", function($scope) {
    
    $scope.fullName=function(firstName,lastname){
		return firstName + lastname;
		}
	} );*/
</script>

</body>
</html>