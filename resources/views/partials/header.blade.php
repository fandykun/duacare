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
						<li class="nav-item" id="nav-home"><a class="nav-link" href="{{url('/')}}">Home</a></li>
			          	<li class="nav-item submenu dropdown" id="nav-about">
				            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
				              aria-expanded="false">Tentang Duacare</a>
				            <ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="{{url('/visi-misi')}}">Visi Misi</a>
								<li class="nav-item"><a class="nav-link" href="{{url('/organizer')}}">Organizer</a>
								<li class="nav-item"><a class="nav-link" href="{{url('/laporan-keuangan')}}">Laporan Keuangan</a>
			            	</ul>
						</li>
			          	<li class="nav-item submenu dropdown" id="nav-media">
				            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
				              aria-expanded="false">Media</a>
				            <ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="{{url('/articles')}}">Artikel</a>
								<li class="nav-item"><a class="nav-link" href="{{url('/news')}}">Berita</a>
			            	</ul>
						</li>
			          	<li class="nav-item" id="nav-dld"><a class="nav-link" href="{{url('/duacare-loyal-donatur')}}" >Daftar DLD</a>
			          	<li class="nav-item" id="nav-contact"><a class="nav-link" href="{{url('/contact')}}" >Contact Us</a></li>
			        </ul>
			        {{-- <div class="nav-right text-center text-lg-right py-4 py-lg-0">
			          	<a class="button" href="#">Get Started</a>
			        </div> --}}
			      </div> 
			    </div>
		  </nav>
	</div>
</header>