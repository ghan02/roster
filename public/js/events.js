new Vue({
    el: '#rosterevent',
    data: {
        events: [],
        attachments: []
    },
    ready: (function() {
        console.log('loading events for the user');
        this.getEvents();
        
    }),
    methods: {
        getEvents: function() {
            this.$http.get('/getUserEvents').success(function(response) {
                this.$set('events', response.events);
            });
        },
        showEventInfo: function(event) {

            $('#moreInfo').on('show.bs.modal', function(e) {
            	
                var modal = $(this);
                modal.find('#modalTitle').text(event.title);
                modal.find('#requestCreatedOn').text(event.created_at);
                modal.find('#lastUpdatedOn').text(event.updated_at);
                modal.find('#notes').text(event.notes);
                modal.find('#attachment ul').empty();
                for (var i = 0; i < event.attachments.length; i++) {
                	modal.find('#attachment ul').append('<li> <a href="'+event.attachments[i].location+'" target="_blank">'+event.attachments[i].filename+'</a> </li>')
                }
                // modal.find('#attachment').text(event.attachments[0].filename);
            });

            $('#moreInfo').modal('show');

        }
    }

});