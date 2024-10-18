@extends('content.employeur.profileemployeur')


@section('profile')




<!-- Content
================================================== -->

<!-- Container -->
<div  style="padding-left: 10px;padding-bottom: 10px; padding-top: 10px; background-color:#EFEFEF" >
	<h3><strong>Ajouter entreprise</strong></h3>
  </div>
  @if (session()->has('success'))
  <div class="alert alert-success">
	  {{ session()->get('success') }}
  </div>
  @endif
  @if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
<form action="{{route('store.entreprise')}}" method="post" enctype="multipart/form-data" >
@csrf

<div class="form">
    <h5>Nom  </h5>
           <input  type="text" placeholder="Nom Entreprise" name="name" id="name" style="margin-bottom: 2%;" />
</div>
<div class="form">
    <h5>Adresse </h5>
			<input  type="text" placeholder="Adresse" name="adresse" id="adresse" style="margin-bottom: 2%;" />
 </div>
 <div class="form">
    <h5>Logo </h5>
			<label class="upload-btn">
				<input type="file" multiple  name="image" id="image"/>
				<i class="fa fa-upload"></i> LOGO
			</label>
			<span class="fake-input">No file selected</span>
        </div>
			<textarea name="description" id="description" cols="30" rows="10" placeholder="Description" style="margin-bottom: 2%;"></textarea>
<button type="submit" class="button">Ajouter</button>
</form>

@endsection

