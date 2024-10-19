@extends('content.profile.profileemployeur')


@section('profile')




<!-- Content
================================================== -->

<!-- Container -->
<div  style="padding-left: 10px;padding-bottom: 10px; padding-top: 10px; background-color:#EFEFEF" >
	<h3><strong>Mes Candidatures publiee</strong></h3>
  </div>


  @if ($mescandidaturespubliee->count()==0)
  <p>
  Vous n'avez  aucune candidatures publiee.
  </p>
@else
<div class="sixteen columns;margin-left:0%">
	<table class="manage-table resumes responsive-table" >
		<tr>
			<th><i class="fa fa-file-text"></i> Titre</th>
            <th><i class="fa fa-file-text"></i> Entreprise</th>
			<th><i class="fa fa-map-marker-alt"></i> Type Emploi</th>
			<th><i class="fa fa-calendar"></i> Date</th>


		</tr>

		<!-- Item #1 -->
     @foreach ($mescandidaturespubliee as $candidature)

		<tr>
			<td >{{$candidature->annance->titre}}</td>
            <td >{{$candidature->annance->entreprise->name}}</td>
		     <td>{{$candidature->type_emploi}}</td>
            <td>{{$candidature->created_at}}</td>


		</tr>
@endforeach
</table>
</div>
  @endif





<div  style="padding-left: 10px;padding-bottom: 10px; padding-top: 10px; background-color:#EFEFEF" >
	<h3><strong>Mes Candidatures En attente</strong></h3>
  </div>

  @if ($mescandidaturesenattente->count()==0)
  Vous n'avez  aucune annonces en attente.
@else
<div class="sixteen columns;margin-left:0%">
	<table class="manage-table resumes responsive-table" >
		<tr>
			<th><i class="fa fa-file-text"></i> Titre</th>
            <th><i class="fa fa-file-text"></i> Entreprise</th>
			<th><i class="fa fa-map-marker-alt"></i> Type Emploi</th>
			<th><i class="fa fa-calendar"></i> Date</th>


		</tr>

		<!-- Item #1 -->
     @foreach ($mescandidaturesenattente as $candidature)

		<tr>
			<td >{{$candidature->annance->titre}}</td>
            <td >{{$candidature->annance->entreprise->name}}</td>
		     <td>{{$candidature->annance->type_emploi}}</td>
            <td>{{$candidature->created_at}}</td>


		</tr>
@endforeach
</table>

</div>
@endif






@endsection

