@extends('content.profile.profile')


@section('profile')




<!-- Content
================================================== -->

<!-- Container -->
<div  style="padding-left: 10px;padding-bottom: 10px; padding-top: 10px; background-color:#EFEFEF" >
	<h3><strong>Ameliorer Profile</strong></h3>
  </div>
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
<form action="{{route('update.profile')}}" method="post" enctype="multipart/form-data" >
@csrf

<div class="form">
    <h5>Sexe</h5>
    <select
         class="chosen-select"  name="sexe" id="sexe" style="margin-bottom: 2%;">
        <option value="{{Auth::user()->sexe}}">{{Auth::user()->sexe}}</option>
        <option value="homme">Homme</option>
         <option value="femme">Femme</option>

   </select>

    </div>
    <div class="form">
        <h5>Phone</h5>
			<input  type="text" placeholder="Phone" name="phone" id="phone" style="margin-bottom: 2%;" value="{{Auth::user()->phone}}"/>
    </div>

    <div class="form">
        <h5>Niveau d'etude</h5>
    <select class="chosen-select"  name="niveau_etude" id="niveau_etude" style="margin-bottom: 2%;">
        <option value="{{Auth::user()->niveau_etude}}">{{Auth::user()->niveau_etude}}</option>
        <option value="Autodidacte">Autodidacte</option>
  <option value="Qualification avant Bac">Qualification avant Bac</option>
  <option value="Bac">Bac</option>
  <option value="Bac +1">Bac +1</option>
  <option value="Bac +2">Bac +2</option>
  <option value="Bac +3">Bac +3</option>
  <option value="Bac +4">Bac +4</option>
  <option  value="Bac +5 et plus">Bac +5 et plus</option>
 </select>
    </div>

    <div class="form">
        <h5>Annees d'experiences</h5>
    <select class="chosen-select"  name="annees_experiences" id="annees_experiences" style="margin-bottom: 2%;">
        <option value="{{Auth::user()->annees_experiences}}">{{Auth::user()->annees_experiences}}</option>
         <option value="Débutant">Débutant</option>
         <option value="Moins de 1 an">Moins de 1 an</option>
         <option  value="De 1 à 3 ans">De 1 à 3 ans</option>
         <option value="De 3 à 5 ans">De 3 à 5 ans</option>
         <option value="De 5 à 10 ans">De 5 à 10 ans</option>
         <option value="De 10 à 20 ans">De 10 à 20 ans</option>
         <option value="Plus de 20 ans">Plus de 20 ans</option>
              </select>

            </div>

        <div class="form">
            <h5>Joindre CV </h5>
			<label class="upload-btn">
				<input type="file" multiple  name="cv" id="cv" style="margin-bottom: 2%;"/>
				<i class="fa fa-upload"></i> CV
			</label>
			<span class="fake-input" >Aucun fichier sélectionné</span>
        <a href="{{ asset('storage/' .Auth::user()->cv) }}" target="_blank">
                {{ basename(Auth::user()->cv) }}</a>
        </div>
        {{-- <embed src="{{ asset('storage/' .Auth::user()->cv) }}" type="application/pdf" width="400" height="600"> --}}


                <!-- Affiche le nom du fichier -->
<button type="submit" class="button">Modifier</button>
</form>

@endsection

