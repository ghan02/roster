@extends('master.master')

@section('content')
    <div class="col-md-9">
    	<div id="calendar">
    	    <!-- calendar control will be displayed here -->
    	</div>
    	<div style="margin-top: 5px;">
    		<small class="text-muted"><span class="lnr lnr-bullhorn"> Click the event to know more about the event.</span></small>
    	</div>
    </div>
    <div class="col-md-3">
    	<div id="searchEvents">
    		<h4><span class="lnr lnr-magnifier"></span> Search Events <small class="text-muted" style="display: block;margin-top: 4px;">enter some characters of the event title</small></h4>
    		<input type="text" class="form-control" v-model="title" v-on="keyup:this.searchForEvents()">
    		<small><input type="checkbox"> Show my events</small>
    		<ul style="margin-top: 10px;">
    			<li v-repeat="events" style="margin-bottom: 10px;">
    				<span class="lnr lnr-rocket" style="font-size: 11px; margin-right: 4px;"></span><a href="users/event/@{{id}}">@{{title}}</a>
    				<div style="margin-top:10px;">
    					<ul>
    						<li style="margin-top: 6px;"><span class="label label-info">Created By : @{{name}}</span></li>
    						<li style="margin-top: 6px;"><span class="label label-info">Start : @{{start}}</span></li>
    						<li style="margin-top: 6px;"><span class="label label-info">End : @{{end}}</span></li>
    					</ul>
    				</div>
    				<hr>
    			</li>
    		</ul>
    	</div>
    </div>
@stop

@section('scripts')
	{!!Html::script('js/searchevents.js')!!}
	<script>
		$(document).ready(function() {
		    $('#calendar').fullCalendar({

		    	   header: {
		    	       left: 'prev,next today',
		    	       center: 'title',
		    	       right: 'month,agendaWeek,agendaDay'
		    	   },
				editable: true,
				allDayDefault : true,
				eventLimit: true, // allow "more" link when too many events
		    	eventSources: [

		    	      // your event source
		    	      {
		    	          url: '/roster/events',
		    	          error: function() {
		    	              alert('there was an error while fetching events!');
		    	          },
		    	          color: 'red',   // a non-ajax option
		    	          textColor: 'black' // a non-ajax option
		    	      }

		    	      // any other sources...

		    	  ],
		    	  eventClick: function(calEvent, jsEvent, view) {
		    	  		console.log('eventid : ' + calEvent.id);
		    	  		window.location.href ="users/event/"+calEvent.id;
		    	     }
		    });
		})
	</script>
@stop