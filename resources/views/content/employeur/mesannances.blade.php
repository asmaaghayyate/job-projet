@extends('content.employeur.profileemployeur')


@section('profile')




<!-- Content
================================================== -->

<!-- Container -->
<div  style="padding-left: 10px;padding-bottom: 10px; padding-top: 10px; background-color:#EFEFEF" >
	<h3><strong>Mes Annances</strong></h3>
  </div>


  <div class="sixteen columns;margin-left:0%">
	<table class="manage-table resumes responsive-table" >
		<tr>
			<th><i class="fa fa-file-text"></i> Titre</th>
            <th><i class="fa fa-file-text"></i> Entreprise</th>
			<th><i class="fa fa-calendar"></i> Description</th>
			<th><i class="fa fa-map-marker-alt"></i> Ville</th>
			<th><i class="fa fa-file-text"></i> Categorie</th>
			<th><i class="fa fa-calendar"></i> Date</th>
            <th><i class=""></i> Action</th>

		</tr>

		<!-- Item #1 -->
@foreach ($mesannances as $mesannance)

		<tr>
			<td >{{$mesannance->titre}}</td>
            <td >{{$mesannance->entreprise->name}}</td>
			<td >{!!Str::limit($mesannance->description, 25, '...') !!}</td>

			<td>{{$mesannance->ville}}</td>
            <td>{{$mesannance->categorie}}</td>
             <td>{{$mesannance->created_at}}</td>
			<td >
              <a href="" class="btn btn-info btn-sm"
             style="margin-right: 5px"><i class="fa-solid fa-pen "></i></a>
            <button onclick=""
               class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i>
            </button>
            </td>
		</tr>
@endforeach

	</table>

</div>



@endsection

