@extends('layouts.master')


@section('content')


<div id="titlebar">
	<div class="container">
		<div class="ten columns">

			<h2><strong>Postuler emploi</strong></h2>
		</div>

	</div>
</div>



<!-- Content
================================================== -->
<div class="container">

<form action="{{route('store.candidature',$annance->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row" style=";margin-left:0%;">
        <div class="col-md-3" style="">

          <strong> Email</strong>
        </div>
        <div class="col-md-9">
            <h5> <strong> {{Auth::user()->email}}</strong></h5>
        </div>

    </div>

    <div class="row" style=";margin-left:0%;">
        <div class="col-md-3" style="">

          <strong> Nom</strong>
        </div>
        <div class="col-md-9">
            <h5> <strong> {{Auth::user()->name}}</strong></h5>
        </div>

    </div>


    <div class="row" style=";margin-left:0%;">
        <div class="col-md-3" style="">

          <strong> Sexe  <span style="color: red">*</span></strong>
        </div>
        <div class="col-md-9">
            <select
            class="chosen-select"  name="sexe" id="sexe" style="margin-bottom: 2%;">
           <option value="{{Auth::user()->sexe}}">{{Auth::user()->sexe}}</option>
           <option value="homme">Homme</option>
            <option value="femme">Femme</option>

      </select>
        </div>

    </div>


    <div class="row" style=";margin-left:0%;">
        <div class="col-md-3" style="">

          <strong> phone  <span style="color: red">*</span></strong>
        </div>
        <div class="col-md-9">
   <input  type="text" placeholder="Phone" name="phone" id="phone" style="margin-bottom: 2%;" value="{{Auth::user()->phone}}"/>

      </select>
        </div>

    </div>

    <div class="row" style=";margin-left:0%;">
        <div class="col-md-3" style="">

          <strong> Niveau d'etude  <span style="color: red">*</span></strong>
        </div>
        <div class="col-md-9">
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

    </div>


    <div class="row" style=";margin-left:0%;">
        <div class="col-md-3" style="">

          <strong> Annees d'experiences  <span style="color: red">*</span></strong>
        </div>
        <div class="col-md-9">
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

    </div>

    <div class="row" style=";margin-left:0%;">
        <div class="col-md-3" style="">

          <strong> CV  <span style="color: red">*</span></strong>
        </div>
        <div class="col-md-9">
            <label class="upload-btn">
                <input type="file" multiple  name="cv" id="cv" style="margin-bottom: 2%;"/>
                <i class="fa fa-upload"></i> CV
            </label>
            <span class="fake-input" >Aucun fichier sélectionné</span>
        <a href="{{ asset('storage/' .Auth::user()->cv) }}" target="_blank">
                {{ basename(Auth::user()->cv) }}
        </a>
        </div>

    </div>


    <div class="row" style=";margin-left:0%;">
        <div class="col-md-3" style="">

          <strong> Motivation  </strong>
        </div>
        <div class="col-md-9">
            <textarea name="lettre_motivation" id="lettre_motivation" rows="10"></textarea>


        </div>

    </div>

    <button type="submit" class="button">Envoyer</button>
            {{-- <embed src="{{ asset('storage/' .Auth::user()->cv) }}" type="application/pdf" width="400" height="600"> --}}

</form>
            </div>



@endsection
