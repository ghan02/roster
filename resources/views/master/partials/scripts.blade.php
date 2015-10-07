{!!Html::script('https://code.jquery.com/jquery-1.11.3.min.js')!!}
{!!Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js')!!}
{!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.16/vue.min.js')!!}
{!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.1.16/vue-resource.min.js')!!}
{!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js')!!}
{!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/vue-router/0.6.2/vue-router.min.js')!!}
{!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.js')!!}
{!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js')!!}
<!-- calendar js -->
{!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js')!!}
{!!Html::script('//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.js')!!}

<script>


	(function () {
	  'use strict';

	  toastr.options = {
	    "closeButton": true,
	    "debug": false,
	    "newestOnTop": false,
	    "progressBar": true,
	    "positionClass": "toast-top-right",
	    "preventDuplicates": true,
	    "onclick": null,
	    "showDuration": "300",
	    "hideDuration": "1000",
	    "timeOut": "5000",
	    "extendedTimeOut": "1000",
	    "showEasing": "swing",
	    "hideEasing": "linear",
	    "showMethod": "fadeIn",
	    "hideMethod": "fadeOut"
	  }

	  /*!
	   * IE10 viewport hack for Surface/desktop Windows 8 bug
	   * Copyright 2014-2015 Twitter, Inc.
	   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
	   */

	  // See the Getting Started docs for more information:
	  // http://getbootstrap.com/getting-started/#support-ie10-width

	  if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
	    var msViewportStyle = document.createElement('style')
	    msViewportStyle.appendChild(
	      document.createTextNode(
	        '@-ms-viewport{width:auto!important}'
	      )
	    )
	    document.querySelector('head').appendChild(msViewportStyle)
	  }

	})();
</script>

@yield('scripts');