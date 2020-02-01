<style>


    .nav-item{
        color: white;
    }
    .fromLeft:after {
      display:block;
      content: '';
      border-bottom: solid 3px #3c6bb6;
      transform: scaleX(0);
      transition: transform 250ms ease-in-out;
    }
    .nav-link.fromLeft:after{ transform-origin: 100% 50%; }

    .nav-link.fromLeft:hover:after{ transform: scaleX(1); transform-origin:   0% 50%; }

    .dropdown-menu>.dropdown-item.fromLeft:after{ transform-origin: 100% 50%; }
    .dropdown-menu>.dropdown-item.fromLeft:hover:after{ transform: scaleX(1); transform-origin:   0% 50%; }

    </style>

<div id="header ">
    <div class="container bg-dark text-center">
        <nav class="navbar navbar-expand-lg navbar-light " role="navigation" >
            <div class="container">
                <!-- Adding logo image -->
                <a class="navbar-brand navlogo" href="/" ><img srcset="{{ URL('images/logo.gif') }}"> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">
                        <li class="nav-item active" >
                          <a class="nav-link fromLeft" href="/" style="color: white;">Home <span class="sr-only">(current)</span></a>
                        </li>

                      </ul>

                    <!-- Right Side Of Navbar -->


                </div>
            </div>
        </nav>
    </div>
</div>
