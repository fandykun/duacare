<header class="header_area">
	<div class="main_menu">
		  <nav class="navbar navbar-expand-lg navbar-light">
		    <div class="container box_1620">
		      	<a class="navbar-brand logo_h" href="{{ url('/') }}"><img src="{{ asset('duacare-image/logo_small.png') }}" alt=""></a>
		      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			     </button>
			     <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
			        <ul class="nav navbar-nav menu_nav justify-content-end">
						<li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>
			          	{{-- <li class="nav-item submenu dropdown">
				            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
				              aria-expanded="false">Tentang Duacare</a>
				            <ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="{{url('/visi-misi')}}">Visi Misi</a>
								<li class="nav-item"><a class="nav-link" href="{{url('/organizer')}}">Organizer</a>
								<li class="nav-item"><a class="nav-link" href="{{url('/regional-manager')}}">Regional Manager</a>
			            	</ul>
						</li> --}}
						<li class="nav-item"><a class="nav-link" href="{{url('/about')}}">Tentang Duacare</a></li>
						<li class="nav-item"><a class="nav-link" href="{{url('/organizer')}}">Organizer</a></li>
						<li class="nav-item"><a class="nav-link" href="{{url('/news')}}">Berita</a></li>
			          	<li class="nav-item"><a class="nav-link" href="{{url('/duacare-loyal-donature')}}">Daftar DLD</a>
			          	<li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact Us</a></li>
			        </ul>
			        {{-- <div class="nav-right text-center text-lg-right py-4 py-lg-0">
			          	<a class="button" href="#">Get Started</a>
			        </div> --}}
			      </div> 
			    </div>
		  </nav>
	</div>
</header>