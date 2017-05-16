angular.module('Obsecao').controller('LoginCtrl', ['$scope', function($scope){

	$scope.email = '';
	$scope.password = '';

	$allowWarning = false;

	$scope.up = function(signForm){
		var 
			bEmailInvalid = signForm.email.$invalid,
			bPassInvalid = signForm.pass.$error.required;

		$scope.allowWarningEmail = (!!bEmailInvalid);
		$scope.allowWarningPass = (!!bPassInvalid);
		
		if(!!$scope.allowWarningEmail && !!$scope.allowWarningPass){
			// Segue o submit
		}
	};
}]);