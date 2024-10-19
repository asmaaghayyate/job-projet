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



<!-- Content
================================================== -->
<div class="container">

	<!-- Recent Jobs -->
            <div class="eleven columns">
                <div class="padding-right">

                    <!-- Company Info -->
                    <div class="company-info">
                        <img src="{{ asset('assets/images/company-logo.png')}}" alt="">

                        <div class="content">
                            <h4>{{$annance->entreprise->name}}</h4>
                            <span><a href="#"><i class="fa fa-map-marker"></i> {{$annance->ville}}</a></span>
                        </div>
                        <div class="clearfix"></div>
                    </div>

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

                <a href="{{route('postuleremplois',$annance->id)}}" class="btn btn-primary btn-lg">Postuler maintenant</a>

                            <div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
                                <div class="small-dialog-headline">
                                    <h2>Apply For This Job</h2>
                                </div>


                            </div>

                    </div>

                </div>






            </div>


	<!-- Widgets / End -->


</div>



@endsection
