@extends('layouts.master')


@section('content')


<div id="titlebar"  class="photo-bg" style="background: url(images/job-page-photo.jpg)">
	<div class="container">
		<div class="ten columns" style="color: white !important;">
			Nous avons trouvé <strong> &nbsp;&nbsp;{{ $annancescount }} &nbsp;&nbsp;</strong> emplois.
			{{-- <h2>{{ $categorie }}</h2> --}}
		</div>



	</div>
</div>



<!-- Content
================================================== -->
<div class="container">
	<!-- Recent Jobs -->

	<div class="padding-right">

		<form action="#" method="get" class="list-search">
			<button><i class="fa fa-search"></i></button>
			<input type="text" placeholder="job title, keywords or company name" value=""/>
			<div class="clearfix"></div>
		</form>

		<ul class="job-list full">
    @foreach ($annances as $annance )
            <li class="">
                <a href="{{route('showemplois',['annance' => $annance->id, 'slug' => $annance->slug])}}">
				<img src="{{ asset('assets/images/job-list-logo-01.png')}}" alt="">
				<div class="job-list-content">
                    <h4>	<strong>{{$annance->categorie}}</strong> </h4>
				<h4>	<strong>{{$annance->titre}}</strong> </h4>

					<div class="job-icons">


                        <h4>
                            @if ($annance->type_emploi=="stage")
                            <span class="internship">
                            @elseif ($annance->type_emploi=="temps partiel")
                            <span class="part-time">
                             @elseif ($annance->type_emploi=="temps plein")
                            <span class="full-time">
                            @endif

                        {{$annance->type_emploi}}</span></h4>

						<span><i class="fa fa-calendar"></i> {{$annance->created_at}}</span>
						<span><i class="fa fa-map-marker"></i> {{$annance->ville}}</span>

					</div>
                    <p> {!! Str::limit($annance->description, 170, '...')  !!}</p>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

    @endforeach

		</ul>


	</div>
    {{-- {{ $annances->links() }} --}}
    {{ $annances->appends(request()->input())->links() }}
	<!-- Widgets -->

	<!-- Widgets / End -->


</div>



@endsection
