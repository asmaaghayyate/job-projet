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



@if ($candidatures->count()==0)
<h3><p>Vous n'avez aucune candidatures pour l'instant.</p></h3>
@else


	<table class="manage-table resumes responsive-table">

			<tr>
                <th>Titre Annance</th>
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
 <td> <a href="{{route('showemplois',$candidature->annance->slug)}}"
    target="_blank"  style="color: blue; text-decoration: underline;"><i class="fas fa-external-link-alt"></i>
    {{ $candidature->annance->titre }}</a>
    </td>
                      <td>{{ $candidature->user->name }}</td>
                        <td>{{$candidature->user->email}}</td>
                        <td>{{$candidature->user->phone}}</td>
                        <td><a href="{{ asset('storage/' .$candidature->user->cv) }}" target="_blank">

                            {{ Str::limit($candidature->user->cv, 15, '...')}}


                            </a></td>
                        <td>{{$candidature->user->niveau_etude}}</td>
                        <td>{{$candidature->user->annees_experiences}}</td>
                        <td>{!!$candidature->lettre_motivation!!}</td>
                        <td>
                        <span class="badge badge-{{ \App\Enums\EtatEnumCandidature::getColor($candidature->etat) }}">
                            {{ $candidature->etat }}
                         </span>
                        </td>
                        <td><form action="{{route('updatetatcandidature',$candidature->id)}}" method="POST">
                            @csrf
                            <div class="form-group">

                                <select name="etat" id="etat" class="form-control">
                    <option value="en attente" {{ $candidature->etat === 'en attente' ? 'selected' : '' }}>En attente</option>
                     <option value="reçu" {{ $candidature->etat === 'reçu' ? 'selected' : '' }}>Reçu</option>
                      <option value="en attente entretien" {{ $candidature->etat === 'en attente entretien' ? 'selected' : '' }}>En attente d'entretien</option>
                       <option value="refusé" {{ $candidature->etat === 'refusé' ? 'selected' : '' }}>Refusé</option>
                       <option value="accepté" {{ $candidature->etat === 'accepté' ? 'selected' : '' }}>Accepté</option>


                       </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Modifier</button>
                        </form></td>
                    </tr>

        @endforeach
			<!-- Item #1 -->
		</table>



@endif






</div>



@endsection
