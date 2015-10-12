new Vue({
	el: '#teams',
	data: {
		teams:[],
		users:[],
		currentTeam :''
	},
	ready: function() {
		this.getTeams();
	}, 
	methods : {
		getTeams : function() {
			this.$http.get('/getTeams').success(function(response) {
			    this.$set('teams', response.teams);
			});
		}, 
		getUsers : function(team) {
			this.$set('users',team.users);
			this.$set('currentTeam',team.title);
			
			console.log(team.title);
		}
	}
});