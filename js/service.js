//定义一个模块MyService
angular.module("MyService", [])
    .factory('githubService', ["$q", "$http", function($q, $http){
		var obj={};
	    obj.getPullRequests = function(){
        var deferred = $q.defer();
        var promise = deferred.promise;
        var progress;
        $http.get("https://api.github.com/repos/angular/angular.js/pulls")
        .success(function(data){
            var result = [];
			console.log(data.length);
			
            for(var i = 0; i < data.length; i++){
                result.push(data[i].user);
                progress = (i+1)/data.length * 100;
				//通知 
                deferred.notify(progress);
            }
			
			//成功
            deferred.resolve(result);
            })
        .error(function(error){
			//失败 
            deferred.reject(error);
        });
			
      return promise;
			
    }

    return obj;
	
       
}]);