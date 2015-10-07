new Vue({
	el: '#searchEvents',
	data : {
		title : '', 
		events:[]
	},
	ready: function() {
		console.log('searching events');
	},
	methods : {
		searchForEvents : function() {
			if(this.title) {
				this.$http.get('search/events/'+this.title).success(function(response) {
				    this.$set('events', response);
				});
			}
			else 
				this.events = []
			
		}
	}

})