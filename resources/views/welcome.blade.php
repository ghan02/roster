@extends('master.master')

@section('content')
    <div class="col-md-9">
    	<div id="calendar">
    	    <!-- calendar control will be displayed here -->
    	</div>
    </div>
    <div class="col-md-3">
    	<div id="searchEvents">
    		<h4><span class="lnr lnr-magnifier"></span> Search Events <small class="text-muted" style="display: block;margin-top: 4px;">enter some characters of the event title</small></h4>
    		<input type="text" class="form-control" v-model="title" v-on="keyup:this.searchForEvents()">
    		<ul style="margin-top: 10px;">
    			<li v-repeat="events" style="margin-bottom: 10px;">
    				<span class="lnr lnr-rocket" style="font-size: 11px; margin-right: 4px;"></span><a href="#">@{{title}}</a>
    				<div style="margin-top:10px;">
    					<span class="label label-info">Start : @{{startdate}}</span>
    					<span class="label label-info">End : @{{enddate}}</span>
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

		    	  ]
		    });
		})
	</script>
@stop