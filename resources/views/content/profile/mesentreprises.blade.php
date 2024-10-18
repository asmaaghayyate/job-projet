@extends('content.profile.profileemployeur')


@section('profile')




<!-- Content
================================================== -->

<!-- Container -->
<div  style="padding-left: 10px;padding-bottom: 10px; padding-top: 10px; background-color:#EFEFEF" >
	<h3><strong>Mes entreprises</strong></h3>
  </div>
  @if (session()->has('success'))
  <div class="alert alert-success">
      {{ session()->get('success') }}
  </div>
  @endif
  <div class="sixteen columns;margin-left:0%">
	<table class="manage-table resumes responsive-table" >
		<tr>
			<th><i class="fa fa-file-text"></i> Nom</th>
			<th><i class="fa fa-calendar"></i> Image</th>
			<th><i class="fa fa-tags"></i> Description</th>
			<th><i class="fa fa-map-marker"></i> Adresse</th>
			<th><i class="fa fa-check-square-o"></i> Action</th>
			<th></th>
		</tr>

		<!-- Item #1 -->
@foreach ($mesentreprises as $mesentreprise)


		<tr>
			<td >{{$mesentreprise->name}}</td>
			<td><img src="{{asset("storage/".$mesentreprise->image)}}"  style="height: 50px; width: 50px;"></td>
			<td >{!!$mesentreprise->description!!}</td>

			<td>{{$mesentreprise->adresse}}</td>
			<td >
                 <a href="" class="btn btn-info btn-sm"
                style="margin-right: 5px"><i class="fa-solid fa-pen "></i></a>
                <button onclick=""
                    class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
            </td>
		</tr>
@endforeach

	</table>

</div>



@endsection

