new Vue({
	el: '#searchEvents',
	data : {
		title : '', 
		searchMyEvents : false,
		events:[]
	},
	ready: function() {
		console.log('searching events');
	},
	methods : {
		searchForEvents : function() {

			if(this.title) {
				this.$http.get('search/events/'+this.title+'/'+this.searchMyEvents).success(function(response) {
					if(response.type=='error')
					{
						toastr.error(response.message);
						return;
					}
				    this.$set('events', response);
				});
			}
			else 
				this.events = []
			
		}
	}

})