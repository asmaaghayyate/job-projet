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




<div class="row" style=";margin-left:0%;">
<div class="col-md-3" style="background-color:#EFEFEF;padding-top:0%;padding-left:0%">
			<!-- Contenu de la première colonne -->

                    <div class="sixteen columns  " style="margin-bottom: 20px;">
                        <nav id="breadcrumbs">

                            <ul>
                                <i class="fa fa-user icon-color " style="font-size: 16px;"></i>
                                <a href="{{route('monprofile')}}"> &nbsp<strong>Mon profile</strong></a>

                            </ul>

                        </nav>


                    </div>
                    <div class="sixteen columns  " style="margin-bottom: 20px;">
                        <nav id="breadcrumbs">

                            <ul>
                                <i class="fas fa-pencil-alt icon-color" style="font-size: 16px;"></i>
                                <a href="{{route('ajouterentreprise')}}">
                                    &nbsp<strong>Ajouter Entreprise</strong></a>

                            </ul>

                        </nav>
                    </div>
                    <div class="sixteen columns" style="margin-bottom: 20px;">
                        <nav id="breadcrumbs">

                            <ul>
                                <i class="fas fa-star icon-color" style="font-size: 16px;"></i>
                                <a href="{{route('mesentreprises')}}"> &nbsp<strong>Mes Entreprises</strong></a>

                            </ul>

                        </nav>
                    </div>

                    <div class="sixteen columns" style="margin-bottom: 20px;">
                        <nav id="breadcrumbs">

                            <ul>
                                <i class="fas fa-folder icon-color" style="font-size: 16px;"></i>
              <a href="{{route('mesannances')}}"> &nbsp<strong>Mes Annances</strong></a>

                            </ul>

                        </nav>
                    </div>


                    <div class="sixteen columns" style="margin-bottom: 20px;">
                        <nav id="breadcrumbs">

                            <ul>
                                <i class="fas fa-folder icon-color" style="font-size: 16px;"></i>
                                <a href="{{route('ameliorerprofile')}}"> &nbsp<strong>
                                    Ameliorer Mon Profile </strong></a>

                            </ul>

                        </nav>
                    </div>
                    <div class="sixteen columns" style="margin-bottom: 20px;">
                        <nav id="breadcrumbs">

                            <ul>
                                <i class="fas fa-folder icon-color" style="font-size: 16px;"></i>
                                <a href="{{route('mescandidatures')}}"> &nbsp<strong>
                                  Mes candidatures</strong></a>

                            </ul>

                        </nav>
                    </div>

                    <div class="sixteen columns" style="margin-bottom: 20px;">
                        <nav id="breadcrumbs">

                            <ul>
                                <i class="fas fa-key icon-color" style="font-size: 16px;"></i>
                                <a href="">&nbsp<strong>Modifier Mot de passe</strong></a>

                            </ul>

                        </nav>
                    </div>


</div>


<div class="col-md-9">


	@if (isset($profileActive) )
	<div  style="padding-left: 10px;padding-bottom: 10px; padding-top: 10px; background-color:#EFEFEF" >
		<h3><strong>Mes informations</strong></h3>
	  </div>
      @if (session()->has('success'))
      <div class="alert alert-success">
          {{ session()->get('success') }}
      </div>
      @endif
	  Ce sont les informations que nous avons actuellement sur le dossier de votre compte.
	   Cliquez sur le bouton «Modifier» ci-dessous pour apporter des modifications à votre compte.


   <div style=" padding-top: 10px;">
	   <table border="1" style="width: 100%;">
		<tr>
			<td style="height: 45px;"><strong>Nom utilisateur:</strong></td>
			<td>{{auth()->user()->name}}
			</td>
		</tr>
		<tr>
			<td style="height: 45px;"> <strong>Email:</strong></td>
			<td>{{auth()->user()->email}}</td>
		</tr>

		<tr>
			<td style="height: 45px;"><strong>Membre depuis:</strong></td>
			<td>{{auth()->user()->created_at}}</td>
		</tr>
		<tr>
			<td style="height: 45px;"><strong>Sexe:</strong></td>
			<td>{{auth()->user()->sexe}}</td>
		</tr>

		<tr>
			<td style="height: 45px;"><strong>Phone:</strong></td>
			<td>{{auth()->user()->phone}}</td>
		</tr>

	   </table>
	</div>
<a href="{{route('ameliorerprofile')}}" class="button">Modifier mes infos</a>
@endif
 @yield('profile')
</div>

</div>



</div>

@endsection
