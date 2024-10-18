@extends('layouts.master')


@section('content')

<div id="titlebar" class="single submit-page">
	<div class="container">

		<div class="sixteen columns">
			<h2>Les Candidatures</h2>
		</div>

	</div>
</div>

<!-- Content
================================================== -->

<!-- Container -->
<div class="container">


    <div class="sixteen columns">


		<table class="manage-table resumes responsive-table">

			<tr>
				<th><i class="fa fa-user"></i> Name</th>
				<th><i class="fa fa-file-text"></i> Email</th>
				<th><i class="fa fa-map-marker"></i> Phone</th>
				<th><i class="fa fa-calendar"></i> CV</th>
                <th><i class="fa fa-calendar"></i> Niveau d'etude</th>
                <th><i class="fa fa-calendar"></i> Annees d'experiences</th>
				<th>Motivation</th>
                <th>Etat</th>
                <th>Changer Etat</th>
			</tr>

			<!-- Item #1 -->


@foreach ( $candidatures as $candidature )
	<tr>

              <td>{{ $candidature->id }}</td>
                <td>{{$candidature->id}}</td>
                <td>{{$candidature->id}}</td>
                <td>{{$candidature->id}}</td>
                <td>{{$candidature->id}}</td>
                <td>{{$candidature->id}}</td>
				<td>{{$candidature->id}}</td>
                <td>{{$candidature->id}}</td>
                <td>{{$candidature->id}}</td>
			</tr>

@endforeach
			<!-- Item #1 -->
		</table>

		<br>

		<a href="#" class="button">Add Resume</a>

	</div>
</div>



@endsection
