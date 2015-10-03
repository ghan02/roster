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
          <a class="navbar-brand" href="#">Roster</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse pull-right">
          <ul class="nav navbar-nav">
             {!!HTML::navlink('pages.home', '<span class="lnr lnr-home"></span> Home')!!}
            <li><a href="#about"><span class="lnr lnr-heart"></span> About</a></li>
            <li><a href="#contact"><span class="lnr lnr-question-circle"></span> Help</a></li>
             {!!HTML::navlink('pages.login', '<span class="lnr lnr-enter"></span> Login')!!}
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>