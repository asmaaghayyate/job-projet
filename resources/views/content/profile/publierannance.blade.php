@extends('layouts.master')


@section('content')

<div id="titlebar" class="single submit-page">
	<div class="container">

		<div class="sixteen columns">
			<h2><i class="fa fa-plus-circle"></i> Ajouter un emploi</h2>
		</div>

	</div>
</div>

<!-- Content
================================================== -->

<!-- Container -->
<div class="container">


        <div class="sixteen columns">
            <div class="submit-page">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
 <form action="{{route('store.annance')}}" method="post">
 @csrf
                <!-- Title -->


                <div class="row" style=";margin-left:0%;">
                    <div class="col-md-3" style="">

                   <h5>  <strong> Titre de l'emploi <span style="color: red">*</span></strong> </h5>
                    </div>
                    <div class="col-md-9">
                        <input class="search-field" value="{{ old('titre') }}"  type="text" placeholder="Titre" name="titre" id="titre"/>
                    </div>

                </div>

                <div class="row" style=";margin-left:0%;">
                    <div class="col-md-3" style="">

                        <h5>  <strong>Categorie <span style="color: red">*</span></strong> </h5>
                    </div>
                    <div class="col-md-9">
                        <select data-placeholder="Choisir categorie" class="chosen-select" multiple name="categorie" id="categorie">


                            <option value="developpeurs web">Développeurs Web</option>
                                <option value="developpeurs mobiles">Développeurs Mobiles</option>
                                <option value="administrateurs systeme">Administrateurs Système</option>
                                <option value="design et creation">Design et Création</option>
                                <option value="design graphique">Designers Graphiques</option>
                                <option value="photographe">Photographe</option>
                                <option value="redaction et marketing">Rédaction et Marketing</option>
                                <option value="redacteurs">Rédacteurs</option>
                                <option value="marketing digital">Spécialistes en Marketing Digital</option>
                                <option value="services aux entreprises">Services aux Entreprises</option>
                                <option value="assistants virtuels">Assistants Virtuels</option>
                                <option value="agents de service client">Agents de Service Client</option>
                                <option value="finance et comptabilite">Finance et Comptabilité</option>
                                <option value="comptables">Comptables</option>
                                <option value="vente et commercial">Vente et Commercial</option>
                                <option value="representants commerciaux">Représentants Commerciaux</option>
                                <option value="education et formation">Éducation et Formation</option>
                                <option value="formateurs">Formateurs</option>
                                <option value="sante et bien etre">Santé et Bien-être</option>
                                <option value="nutritionnistes">Nutritionnistes</option>
                        </select>
                     </div>

                </div>

                <div class="row" style=";margin-left:0%;">
                    <div class="col-md-3" style="">

                        <h5>  <strong>Ville <span style="color: red">*</span></strong> </h5>
                    </div>
                    <div class="col-md-9">
                        <select data-placeholder="Choisir ville" class="chosen-select" multiple name="ville" id="ville">
                            <option value="">Toutes les villes</option>
                            <option value="Agadir">Agadir</option>
                            <option value="Al Hoceima">Al Hoceima</option>
                            <option value="Aoussered">Aoussered</option>
                            <option value="Assilah">Assilah</option>
                            <option value="Autre ville">Autre ville</option>
                            <option value="Azrou">Azrou</option>
                            <option value="Ben Ahmed">Ben Ahmed</option>
                            <option value="Benguerir">Benguerir</option>
                            <option value="Beni Mellal">Beni Mellal</option>
                            <option value="Benslimane">Benslimane</option>
                            <option value="Berkane">Berkane</option>
                            <option value="Berrechid">Berrechid</option>
                            <option value="Boujdour">Boujdour</option>
                            <option value="Bouskoura">Bouskoura</option>
                            <option value="Bouznika">Bouznika</option>
                            <option value="Casablanca">Casablanca</option>
                            <option value="Chafchaouen">Chafchaouen</option>
                            <option value="Dakhla">Dakhla</option>
                            <option value="Deroua">Deroua</option>
                            <option value="El Hajeb">El Hajeb</option>
                            <option value="El Jadida">El Jadida</option>
                            <option value="Errachidia">Errachidia</option>
                            <option value="Essaouira">Essaouira</option>
                            <option value="Essmara">Essmara</option>
                            <option value="Fès">Fès</option>
                            <option value="Fkih Ben Salah">Fkih Ben Salah</option>
                            <option value="Guelmim">Guelmim</option>
                            <option value="Guercif">Guercif</option>
                            <option value="Ifrane">Ifrane</option>
                            <option value="Imouzzer Kandar">Imouzzer Kandar</option>
                            <option value="Kénitra">Kénitra</option>
                            <option value="Kabila">Kabila</option>
                            <option value="Khemisset">Khemisset</option>
                            <option value="Khenifra">Khenifra</option>
                            <option value="Khouribga">Khouribga</option>
                            <option value="Ksar el Kebir">Ksar el Kebir</option>
                            <option value="Laayoune">Laayoune</option>
                            <option value="Larache">Larache</option>
                            <option value="Marrakech">Marrakech</option>
                            <option value="Martil">Martil</option>
                            <option value="Mediouna">Mediouna</option>
                            <option value="Meknès">Meknès</option>
                            <option value="Melilia">Melilia</option>
                            <option value="Midelt">Midelt</option>
                            <option value="Mohammedia">Mohammedia</option>
                            <option value="Nador">Nador</option>
                            <option value="Nouaceur">Nouaceur</option>
                            <option value="Oualidia">Oualidia</option>
                            <option value="Ouarzazate">Ouarzazate</option>
                            <option value="Ouazzane">Ouazzane</option>
                            <option value="Oujda">Oujda</option>
                            <option value="Rabat">Rabat</option>
                            <option value="Safi">Safi</option>
                            <option value="Saidia">Saidia</option>
                            <option value="Salé">Salé</option>
                            <option value="Sebta">Sebta</option>
                            <option value="Sefrou">Sefrou</option>
                            <option value="Settat">Settat</option>
                            <option value="Sidi Bennour">Sidi Bennour</option>
                            <option value="Sidi Ifni">Sidi Ifni</option>
                            <option value="Sidi Kacem">Sidi Kacem</option>
                            <option value="Sidi Rahal">Sidi Rahal</option>
                            <option value="Sidi Slimane">Sidi Slimane</option>
                            <option value="Souk el Arbaa du Gharb">Souk el Arbaa du Gharb</option>
                            <option value="Tamensourte">Tamensourte</option>
                            <option value="Tamesna">Tamesna</option>
                            <option value="Tanger">Tanger</option>
                            <option value="Tantan">Tantan</option>
                            <option value="Tarfaya">Tarfaya</option>
                            <option value="Taroudant">Taroudant</option>
                            <option value="Taza">Taza</option>
                            <option value="Temara">Temara</option>
                            <option value="Tetouan">Tetouan</option>
                            <option value="Tifelt">Tifelt</option>
                            <option value="Tinghir">Tinghir</option>
                            <option value="Tiznit">Tiznit</option>
                            <option value="Tout le Maroc">Tout le Maroc</option>
                            <option value="Youssoufia">Youssoufia</option>
                            <option value="Zagora">Zagora</option>
                        </select>
                    </div>

                </div>

                <!-- Location -->



                <div class="row" style=";margin-left:0%;">
                    <div class="col-md-3" style="">

                        <h5>   <strong>Entreprise <span style="color: red">*</span></strong> </h5>
                    </div>
                    <div class="col-md-9">
                        <select data-placeholder="Choisir entreprise" class="chosen-select" multiple name="entreprise_id" id="entreprise_id">
                            @foreach ($entreprises as $entreprise)

                                    <option value="{{ $entreprise->id }}"
                                        {{ old('entreprise_id') == $entreprise->id ? 'selected' : '' }}>
                                       {{ $entreprise->name }}
                                    </option>

                                </option>
                            @endforeach
                        </select>
                     </div>

                </div>




                <div class="row" style=";margin-left:0%;">
                    <div class="col-md-3" style="">

                        <h5>    <strong>Type emploi <span style="color: red">*</span></strong> </h5>
                    </div>
                    <div class="col-md-9">
                        <select data-placeholder="Choisir type" class="chosen-select" multiple name="type_emploi" id="type_emploi">
                            <option value="temps plein"  {{ old('type_emploi') == "temps plein" ? 'selected' : '' }}>Temps plein</option>
                            <option value="temps partiel"  {{ old('type_emploi') == "temps partiel" ? 'selected' : '' }}>Temps partiel</option>
                            <option value="stage"  {{ old('type_emploi') == "stage" ? 'selected' : '' }}>Stage</option>

                        </select>
                     </div>

                </div>



                <div class="row" style=";margin-left:0%;">
                    <div class="col-md-3" style="">

                        <h5> <strong>Description <span style="color: red">*</span></strong> </h5>
                    </div>
                    <div class="col-md-9">
                        <textarea  name="description" id="description"   cols="40"
                        rows="3" id="summary"  >{{ old('description') }}</textarea>

                     </div>

                </div>







      <button type="submit" class="button">Ajouter</button>
 </form>

            </div>
        </div>


</div>



@endsection
