<!-- top-nav -->
	<div class="top-nav">
		<div class="container">
			<div class="navbar-header logo">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					Menu
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<div class="menu">
					<ul class="nav navbar"> 
						<!--<li><a href="/" class="w3ls-hover"><span data-letters="Home">Home</span></a></li>-->
						<li><a href="#" data-toggle="modal" data-target="#about" class="w3ls-hover"><span data-letters="{{trans('topNav.menu-1')}}">{{trans('topNav.menu-1')}} </span></a></li>
						<li><a href="#" data-toggle="modal" data-target="#skill" class="w3ls-hover"><span data-letters="{{trans('topNav.menu-2')}}">{{trans('topNav.menu-2')}}</span></a></li>
						<li><a href="#" data-toggle="modal" data-target="#experience" class="w3ls-hover"><span data-letters="{{trans('topNav.menu-3')}}">{{trans('topNav.menu-3')}} </span></a></li>
						<li><a href="#" data-toggle="modal" data-target="#education" class="w3ls-hover"><span data-letters="{{trans('topNav.menu-4')}}">{{trans('topNav.menu-4')}} </span></a></li>
						<li><a href="#" data-toggle="modal" data-target="#work" class="w3ls-hover"><span data-letters="{{trans('topNav.menu-5')}}">{{trans('topNav.menu-5')}}</span></a></li>
						<li><a href="#" data-toggle="modal" data-target="#contact" class="w3ls-hover"><span data-letters="{{trans('topNav.menu-6')}}">{{trans('topNav.menu-6')}} </span></a></li> 
						<!--<li><a class="w3ls-icon" href="#"><span class="glyphicon glyphicon-refresh"></span></a></li> -->
						<li>
						<div style="display: inline;">
						<a class="w3ls-icon" href="{{ url('lang', ['es']) }}"><img src="images/flagVEN.png" width="35px"></a><a class="w3ls-icon" href="{{ url('lang', ['en']) }}"><img src="images/flagEUA.png" width="35px"></a>
						</div>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>	
	<!-- //top-nav -->