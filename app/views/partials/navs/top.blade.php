<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <ul class="nav nav-pills">
	  @if (!Auth::user())
		<li role="presentation" class=" {{ ($page == 'home') ? 'active' : '' }} "><a href=" {{ URL::to('/') }} ">Home</a></li>
	  @else
	  	<li role="presentation" class=" {{ ($page == 'home') ? 'active' : '' }} "><a href=" {{ URL::to('home') }} ">Home</a></li>
	  @endif
	  <li role="presentation" class=" {{ ($page == 'roadmaps') ? 'active' : '' }} "><a href=" {{ URL::to('roadmaps') }} ">Roadmaps</a></li>
	  <li role="presentation" class=" {{ ($page == 'complains') ? 'active' : '' }} "><a href=" {{ URL::to('complains') }} ">Complains</a></li>
	  <li role="presentation" class=" {{ ($page == 'register') ? 'active' : '' }} "><a href=" {{ URL::to('register') }} ">Register</a></li>
	  @if (!Auth::user())
	  	<li role="presentation" class=" {{ ($page == 'login') ? 'active' : '' }} "><a href=" {{ URL::to('auth') }} ">Login</a></li>
	  @else
	  	<li role="presentation" class=" {{ ($page == 'login') ? 'active' : '' }} "><a href=" {{ URL::to('authOut') }} ">Logout</a></li>
	  @endif
	</ul>
  </div>
</nav>
