@extends('layouts.master')


@section('content')
    
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Mon Compte Candidat</h2>
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
			
				<!-- Register -->
				<div class="tab-content" id="tab2" style="display: none;">
					@if (session()->has('success'))
					<div class="alert alert-success">
						{{ session()->get('success') }}
					</div>
					@endif
										
							@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					<h3 class="margin-bottom-10 margin-top-10">Register</h3>

					<form class="register" action="{{route('register')}}" method="post" >				
					@csrf

					<input type="hidden" name="role" id="role" value="candidat"> 	
						<p class="form-row form-row-wide">
						<label for="reg_email">Nom et Prenom:</label>
						<input type="text" class="input-text" name="name" id="name" value="" />
						</p>
							 
						<p class="form-row form-row-wide">
							<label for="reg_email">Email Address:</label>
							<input type="email" class="input-text" name="email" id="email" value="" />
							
						</p>

						
						<p class="form-row form-row-wide">
							<label for="reg_password">Mot de Passe:</label>
							<input type="password" class="input-text" name="password" id="password" />
						</p>

						<p class="form-row form-row-wide">
							<label for="reg_password2">Confirmez le mot de passe:</label>
							<input type="password" class="input-text" name="password_confirmation" id="password_confirmation" />
						</p>

							
						<p class="form-row">
							<input type="submit" class="button" name="register" value="Register" />
						</p>
						
					</form>
				</div>
		</div>
	</div>
</div>



@endsection
