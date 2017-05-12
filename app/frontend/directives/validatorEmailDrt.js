angular.module('Obsecao').directive('emailDrt', [function(){
	return {
		require:"ngModel",
		link: function(scope,element,attrs,ctrl){
			
			var emailPattern = function(value){
				var 
					pattern = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})$/g,
					validA = (value.match(pattern) != null);
				

				ctrl.$setValidity("emailPattern", pattern);

				return !!validA ? value : undefined;
			};
			
			ctrl.$parsers.push(emailPattern);
		}
	}
}]);