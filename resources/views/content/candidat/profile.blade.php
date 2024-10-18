@extends('layouts.master')


@section('content')

<div id="titlebar" class="single mb-2" >
	<div class="container">

		<div class="sixteen columns">
			<h2 style="color: #53b427">Mon Profile</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>Bonjour:</li>
					<li><a href="#"><strong>{{ strtoupper(auth()->user()->name)}}</strong></a></li>

				</ul>
			</nav>
		</div>

	</div>
</div>




<div class="container">
	<div class="row">
		<div class="col-md-3">
			<!-- Contenu de la première colonne -->

		<div id="titlebar" class="single">
				<div class="container">

					<div class="sixteen columns  " style="margin-bottom: 20px;">
						<nav id="breadcrumbs">

							<ul>
								<i class="fa fa-user icon-color" style="font-size: 16px;"></i>
								<a href="{{route('monprofile')}}"> &nbsp<strong>Mon profile</strong></a>

							</ul>

						</nav>
					</div>
					<div class="sixteen columns  " style="margin-bottom: 20px;">
						<nav id="breadcrumbs">

							<ul>
								<i class="fas fa-pencil-alt icon-color" style="font-size: 16px;"></i>
								<a href="{{route('ameliorerprofile')}}"> &nbsp<strong>Ameliorer Mon profile</strong></a>

							</ul>

						</nav>
					</div>




				</div>
			</div>

		</div>
		<div class="col-md-9">

	
@yield('profile')

		</div>
	</div>
</div>

<!-- Content
================================================== -->
<!-- Container -->

@endsection
