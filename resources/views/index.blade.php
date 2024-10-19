

{{-- @if ( Auth::check() &&  Auth::user()->role=="employeur")
    @extends('layouts.masteremployeur')
@else --}}
	@extends('layouts.master')
{{-- @endif --}}


@section('content')


<div id="banner" style="background: url(images/banner-home-01.jpg)">
	<div class="container">
		<div class="sixteen columns">

			<div class="search-container">

				<!-- Form -->
				<h2>Trouver un emploi</h2>
                <form action="{{route('emplois')}}" method="POST">
                 @csrf
				<input type="text" class="ico-01" placeholder="Mot Cle de Categorie" name="categorie" id="categorie" />
				<input type="text" class="ico-02" placeholder="Ville" name="ville" name="ville" />
				<button type="submit"><i class="fa fa-search"></i></button>
                </form>

				<!-- Browse Jobs -->
				<div class="browse-jobs">
 Parcourir les offres d'emploi par  <a href="browse-categories.html"> catégorie</a>  ou par  localisation
                </div>

				<!-- Announce -->
				<div class="announce">

Nous avons plus de   <strong>{{ $toutlesemploiscount }} </strong> offres d'emploi pour vous !
				</div>

			</div>

		</div>
	</div>
</div>


<!-- Content
================================================== -->

<!-- Categories -->
<div class="container">
	<div class="sixteen columns">
		<h3 class="margin-bottom-25">Catégories populaires</h3>
		<ul id="popular-categories">


    <li><a href="#"><i class="fas fa-laptop-code"></i> Développeurs Web</a></li>
    <li><a href="#"><i class="fas fa-mobile-alt"></i> Développeurs Mobiles</a></li>
    <li><a href="#"><i class="fa fa-server"></i> Administrateurs Système</a></li>
    <li><a href="#"><i class="fa fa-paint-brush"></i> Design et Création</a></li>
    <li><a href="#"><i class="fa fa-image"></i> Designers Graphiques</a></li>
    <li><a href="#"><i class="fa fa-camera"></i> Photographe</a></li>
    <li><a href="#"><i class="fas fa-pencil-alt"></i> Rédaction et Marketing</a></li>
    <li><a href="#"><i class="fa fa-file-alt"></i> Rédacteurs</a></li>
    {{-- <li><a href="#"><i class="fa fa-bullhorn"></i> Spécialistes en Marketing Digital</a></li>
    <li><a href="#"><i class="fa fa-briefcase"></i> Services aux Entreprises</a></li>
    <li><a href="#"><i class="fas fa-user-tie"></i> Assistants Virtuels</a></li>
    <li><a href="#"><i class="fas fa-headset"></i> Agents de Service Client</a></li>
    <li><a href="#"><i class="fa fa-chart-line"></i> Finance et Comptabilité</a></li>
    <li><a href="#"><i class="fa fa-calculator"></i> Comptables</a></li>
    <li><a href="#"><i class="fa fa-shopping-cart"></i> Vente et Commercial</a></li>
    <li><a href="#"><i class="fas fa-user-tie"></i> Représentants Commerciaux</a></li>
    <li><a href="#"><i class="fas fa-chalkboard-teacher"></i> Éducation et Formation</a></li>
    <li><a href="#"><i class="fas fa-book-open"></i> Formateurs</a></li>
    <li><a href="#"><i class="fa fa-heartbeat"></i> Santé et Bien-être</a></li>
    <li><a href="#"><i class="fas fa-apple-alt"></i> Nutritionnistes</a></li> --}}

		</ul>

		<div class="clearfix"></div>
		<div class="margin-top-30"></div>

		<a href="browse-categories.html" class="button centered">Parcourir toutes les catégories</a>
		<div class="margin-bottom-50"></div>
	</div>
</div>


<div class="container">

	<!-- Recent Jobs -->



	<div class="padding-right">
		<h3 class="margin-bottom-25">Emplois récents</h3>

		<ul class="job-list">

@foreach ($dernieresannances as $dernieresannance)
<li class="">
    <a href="{{route('showemplois',$dernieresannance->slug)}}">
				<img src="{{ asset('assets/images/job-list-logo-01.png')}}" alt="">
				<div class="job-list-content">

					<h4><strong>{{$dernieresannance->titre}}</strong> </h4>
					<div class="job-icons">

                        <h4>
                                @if ($dernieresannance->type_emploi=="stage")
                                <span class="internship">
                                @elseif ($dernieresannance->type_emploi=="temps partiel")
                                <span class="part-time">
                                 @elseif ($dernieresannance->type_emploi=="temps plein")
                                <span class="full-time">
                                @endif

                            {{$dernieresannance->type_emploi}}</span></h4>


						<span><i class="fa fa-calendar"></i> {{$dernieresannance->created_at}}</span>
						<span><i class="fa fa-map-marker"></i> {{$dernieresannance->ville}}</span>

					</div>
                    <p> {!! Str::limit($dernieresannance->description, 170, '...')  !!}</p>
				</div>
	</a>
				<div class="clearfix"></div>
			</li>
@endforeach


		</ul>

		<a href="browse-jobs.html" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
		<div class="margin-bottom-55"></div>
	</div>


	<!-- Job Spotlight -->

</div>



@endsection
