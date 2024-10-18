@extends('content.candidat.profile')


@section('profile')
    



<!-- Content
================================================== -->

<!-- Container -->
<div  style="padding-left: 10px;padding-bottom: 10px; padding-top: 10px; background-color:#EFEFEF" >
	<h3><strong>Modifier Profile</strong></h3>
  </div>
<div class="form">
	<h4><strong>CV</strong> <span></span></h4>
	<label class="upload-btn">
		<input type="file" multiple />
		<i class="fa fa-upload"></i> FICHIER
	</label>
	<span class="fake-input">No file selected</span>
</div>
<div class="form with-line">
	<h4><strong>Phone</strong> <span></span></h4>
	<input type="text" class="search-field"  value="" class="">
</div>

<div class="form with-line">
	<h4><strong>Education</strong> <span></span></h4>
	<div class="form-inside">

		<!-- Add Education -->
		<div class="form boxed box-to-clone education-box">
			<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
			<input class="search-field" type="text" placeholder="School Name" value=""/>
			<input class="search-field" type="text" placeholder="Qualification(s)" value=""/>
			<input class="search-field" type="text" placeholder="Start / end date" value=""/>
			<textarea name="desc" id="desc" cols="30" rows="10" placeholder="Notes (optional)"></textarea>
		</div>

		<a href="#" class="button gray add-education add-box"><i class="fa fa-plus-circle"></i> Add Education</a>
	</div>
</div>

<div class="form with-line">
	<h4><strong>Experience</strong> <span></span></h4>
	<div class="form-inside">

		<!-- Add Experience -->
		<div class="form boxed box-to-clone experience-box">
			<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
			<input class="search-field" type="text" placeholder="Employer" value=""/>
			<input class="search-field" type="text" placeholder="Job Title" value=""/>
			<input class="search-field" type="text" placeholder="Start / end date" value=""/>
			<textarea name="desc1" id="desc1" cols="30" rows="10" placeholder="Notes (optional)"></textarea>
		</div>

		<a href="#" class="button gray add-experience add-box"><i class="fa fa-plus-circle"></i> Add Experience</a>

		
	</div>
	
</div>
<div class="form with-line">
	<h4><strong>Skills</strong> <span></span></h4>
	<div class="form-inside">

		<!-- Add Experience -->
		<div class="form boxed box-to-clone experience-box">
			<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
			<input class="search-field" type="text" placeholder="Skill" value=""/>
			
		</div>

		<a href="#" class="button gray add-experience add-box"><i class="fa fa-plus-circle"></i> Add Skills</a>

		
	</div>
	
</div>
<a href="#" class="button">Modifier</a>
@endsection
