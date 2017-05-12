angular.module('Obsecao').controller('LoginCtrl', ['$scope', function($scope){

	$scope.email = '';

	$scope.changeEmail = function(){
		var 
			email = $scope.email,
			regExp = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})$/g;

	    if(!~email.search(regExp))
			alert("E-mail invalido");
	};
}]);