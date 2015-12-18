@extends('pages.template')

@section('main')
<div class="header-section" id="content" tabindex="-1"> 
	<div class="container"> 
		<h1>Upload Image and Resize</h1> 
		<p>Select your image and put new size in it.</p> 
	</div>
</div>

<div class="container content-container">
	<div class="row">
		<div class="col-md-10">
			<form method="post" enctype="multipart/form-data" action="image">
				<div class="form-group">
					<label for="image_file">Image File</label>
					<input type="file" id="image_file" name="image_file"  value="{{ old('image_file')}}">
					<p class="help-block">Select your image.</p>
				</div>
				<div class="form-group">
					<label for="height">New height</label>
					<input type="text" value="{{ old('height')}}" class="form-control" id="height" name="height">
					<p class="help-block">Enter value to adjust height, please input integer only. Could be empty if don't want resize image.</p>
				</div>
				<div class="form-group">
					<label for="width">New Width</label>
					<input type="text"  value="{{ old('width')}}" class="form-control" id="width" name="width">
					<p class="help-block">Enter new value to adjust width, please input integer only. Could be empty if don't want resize image.</p>
				</div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>

</div>

@stop