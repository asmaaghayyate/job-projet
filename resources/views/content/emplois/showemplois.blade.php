@extends('layouts.master')


@section('content')


<div id="titlebar"  >
	<div class="container">
		<div class="ten columns">
			<span><a href="browse-jobs.html">{{$annance->categorie}}</a></span>
			<h2>{{$annance->titre}}
                      @if ($annance->type_emploi=="stage")
                        <span class="internship">
                        @elseif ($annance->type_emploi=="temps partiel")
                        <span class="part-time">
                         @elseif ($annance->type_emploi=="temps plein")
                        <span class="full-time">
                        @endif

                    {{$annance->type_emploi}}</span></h2>


		</div>

	</div>
</div>

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<!-- Content
================================================== -->
<div class="container">

	<!-- Recent Jobs -->
            <div class="eleven columns">
                <div class="padding-right">

                    <!-- Company Info -->
                    <div class="company-info">

                  @if ($annance->entreprise->image)
                   <img src="{{ asset('storage/' . $annance->entreprise->image) }}" alt="Image de l'entreprise">
                    @else
                  <img src="{{ asset('assets/images/job-list-logo-01.png')}}" alt="">
                    @endif



                        <div class="content">
                            <h4>{{$annance->entreprise->name}}</h4>
                            <span><a href="#"><i class="fa fa-map-marker"></i> {{$annance->ville}}</a></span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <h3><strong>Employeur</strong>

                        <p class="margin-reset">
                            {{$annance->user->name}}
                        </p>

                    </h3>
                <h3><strong>Description du poste</strong>

                    <p class="margin-reset">
                        {!!$annance->description!!}
                    </p>

                </h3>

                </div>


            </div>


	<!-- Widgets -->
            <div class="five columns">

                    <!-- Sort by -->
                    <div class="widget">

                        <div class="job-overview">


                            @if(auth()->check() && auth()->user()->id === $annance->user_id)
                            <p class="alert alert-info">Vous êtes l'annonceur de cette annonce.</p>
                            <a href="#" class="btn btn-secondary btn-lg" disabled>
                                Déjà Créé
                            </a>
                        @else
                            <a href="{{ route('postuleremplois', $annance->id) }}" class="btn btn-primary btn-lg">
                                Postuler maintenant
                            </a>
                        @endif


                    </div>

                </div>







            </div>


	<!-- Widgets / End -->


</div>



@endsection
