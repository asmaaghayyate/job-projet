@extends('layouts.master')


@section('content')

<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Mon Espace</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>My Account</li>
				</ul>
			</nav>
		</div>

	</div>
</div>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">

	<div class="my-account">


		<div class="tabs-container">



			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">


				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif




				<h3 class="margin-bottom-10 margin-top-10">Login</h3>

				<form method="post" class="login" action="{{route('login')}}">
                  @csrf

					<p class="form-row form-row-wide">
						<label for="username"> Email Address:</label>
						<input type="text" class="input-text" name="email" id="email" value="" />
					</p>

					<p class="form-row form-row-wide">
						<label for="password">Password:</label>
						<input class="input-text" type="password" name="password" id="password" />
					</p>

					<p class="form-row">
						<input type="submit" class="button" name="login" value="Login" />

						<label for="rememberme" class="rememberme">
					</p>

					<p class="lost_password">
						<a href="#" >Vous avez perdu votre mot de passe ?</a>
					</p>


				</form>

                <a href="{{route('google-auth')}}" class="btn btn-google">
                    <i class="fab fa-google"></i> Connexion avec Google
                </a>
			</div>

				<!-- Register -->

		</div>
	</div>
</div>



@endsection
