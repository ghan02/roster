Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name=csrf-token]').attr("content");

new Vue( {
	el : '#login',
	data : {
		username : '',
		password :'',
	},
	ready: function() {
		console.log('Login form activated');
	},
	methods : {
		performLogin: function() {
				this.$http.post('login', {username: this.username, password: this.password}).success(function(response) {
				console.log(response);
				if(response.type=='error')
				{
					toastr.error(response.message);
				}
				else
				{
					console.log("Response URL " + response.url);
					if(response.url)
					{
						toastr.success(response.message);
						setTimeout(function(){
							
						window.location.href = response.url;

						}, 500);
					}
					
				}
			});			
		}
	}
});