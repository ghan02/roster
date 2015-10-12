new Vue({
	el: '#users',
	data: {
		users:[], 
		teams:[],
		teamMates :[],
		currentUser :''
	},
	ready: function() {
		console.log('getting the users');
		this.getUsers();
	}, 
	methods : {
		getUsers : function() {
			this.$http.get('/getUsers').success(function(response) {
			    this.$set('users', response.users);
			});
		},
		getTeams:function(user) {
			this.$set('teams',user.teams);
			this.$set('currentUser',user.name);

		}
	}
});