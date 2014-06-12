$(document).ready(function(){
	$('.artist').click(function(e){
		$(this).addClass('open');
		var iframe = $(this).find('iframe');
		if(!iframe.data("isSet")){
			var src = iframe.attr('data-src');
			iframe.attr('src', src);
			iframe.data("isSet", true);
		}
	});
	$('.artist .close').click(function(e){
		e.stopPropagation();
		$(this).parents('.artist').removeClass('open');
	});

});
angular.module('Tumblr', []).factory('Tumblr', [
	'$http', function($http) {
		var key, url;
		key = 'Xnsw33dvljWQFIePN5ZmZnvpM8EwXr2ute17lWNsLrudht0KW1';
		url = "http://api.tumblr.com/v2/blog/walidvb.tumblr.com/posts?";
		url += 'api_key=' + key;
		this.getPosts = function(settings, cb) {
			var value;
			for (key in settings) {
				value = settings[key];
				console.log(key, settings[key]);
				url += "&" + key + "=" + value;
			}
			$http.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
			return $http.jsonp(url, {
				params: {
					jsonp: 'JSON_CALLBACK'
				}
			}).success(cb);
		};
		return this;
	}
	]).directive('myTumblr', [
	'$sce', 'Tumblr', function($sce, tumblr) {
		return {
			restrict: 'E',
			controller: function($scope, $element, $attrs) {
				tumblr.getPosts($attrs.myTumblr, function(data) {
					return $scope.blog = data.response;
				});
			},
			templateUrl: '/templates/tumblrPosts.tpl.html'
		}
	}
	]).filter('summary', function() {
		return function(input) {
			var break_point, ret;
			break_point = '<!-- more -->';
			ret = input.indexOf(break_point) !== -1 ? input.split(break_point)[0] : input;
			return ret;
		};
	}).filter('trust', ['$sce', function($sce){
		 	return function(input){
				return $sce.trustAsHtml(input);
			}
		}
	]);

	myApp = angular.module('myApp', ['Tumblr']);