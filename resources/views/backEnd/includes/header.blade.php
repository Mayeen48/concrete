<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}" target="_blank">User Page</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/dashboard') }}">Home</a></li>
                <li><a href="{{ url('/countrySetup') }}">Country Setup</a></li>
                <li><a href="{{ url('/districtSetup') }}">District Setup</a></li>
                <li><a href="{{ url('/slideSetup') }}">Slide Setup</a></li>
                <li><a href="{{ url('/packagesSetup') }}">packages Setup</a></li>
                <li><a href="{{ url('/packagesShow') }}">packages Show</a></li>
                <li><a href="{{ url('/inquiriesShow') }}">Inquiries</a></li>
                <li><a href="{{ url('/teamCreate') }}">Team Setup</a></li>
                <li><a href="{{ url('/teamShow') }}">Team Show</a></li>
                <li><a href="{{ url('/ticketRequest') }}">Ticket Request</a></li>
                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                <li><a href="{{ url('/testimonial') }}">Testimonial</a></li>
                <li><a href="{{ url('/hcr') }}">Happy Client & Ratings</a></li>
                <li><a href="{{ url('/contacts') }}">Contacts</a></li>
            </ul>
            <ul class="nav navbar-nav" style="float: right;">
                <li class="active"><a href="#">{{ Auth::user()->name }}</a></li>
                <li>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </li>
            </ul>
        </div><!--/.nav-collapse -->

    </div>
</nav>