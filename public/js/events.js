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
                modal.find('#attachment').text(event.attachments[0].filename);
            });

            $('#moreInfo').modal('show');

        }
    }

});