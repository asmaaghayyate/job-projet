@extends('layouts.master')


@section('content')

<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Créer un compte</h2>
			<nav id="breadcrumbs">
				<ul>
		<li style="color: #53b427;"><strong>Les rubriques indiquees par * sont obligatoires.</li>
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


					<form class="register" action="{{route('register')}}" method="post" >
					@csrf

					<input type="hidden" name="role" id="role" value="candidat">
						<p class="form-row form-row-wide">
						<label for="reg_email">Nom et Prenom:<span style="color: red">*</span></label>
						<input type="text" class="input-text" name="name" id="name" value="" />
						</p>

						<p class="form-row form-row-wide">
							<label for="reg_email">Email Address:<span style="color: red">*</span></label>
							<input type="email" class="input-text" name="email" id="email" value="" />

						</p>


						<p class="form-row form-row-wide">
							<label for="reg_password">Mot de Passe:<span style="color: red">*</span></label>
							<input type="password" class="input-text" name="password" id="password" />
						</p>

						<p class="form-row form-row-wide">
							<label for="reg_password2">Confirmez le mot de passe:<span style="color: red">*</span></label>
							<input type="password" class="input-text" name="password_confirmation"
                             id="password_confirmation" />
						</p>


						<p class="form-row">
							<input type="submit" class="button" name="register" value="je m'inscrire" />
						</p>

					</form>
				</div>
		</div>
	</div>
</div>



@endsection
