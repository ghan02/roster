    <!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{!!url('/')!!}" style="font-size: 28px; font-family: 'Lobster', cursive;">
        <img src="{!!asset('images/roster.png')!!}" alt="" style="width:20px; display:inline;"> Roster
      </a>
    </div>
    <div id="navbar" class="collapse navbar-collapse pull-right">
      <ul class="nav navbar-nav">
         {!!HTML::navlink('pages.home', '<span class="lnr lnr-home"></span> Home')!!}
        <li><a href="#about"><span class="lnr lnr-heart"></span> About</a></li>
        <li><a href="#contact"><span class="lnr lnr-question-circle"></span> Help</a></li>
          @if(Auth::check())
            <li><a href="{!!route('user.profile')!!}"><span class="lnr lnr-user"></span> {!!Auth::user()->name!!}</a></li>
          @else
            {!!HTML::navlink('pages.login', '<span class="lnr lnr-enter"></span> Login')!!}
          @endif
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>