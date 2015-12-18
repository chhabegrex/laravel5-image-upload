@extends('pages.template')

@section('main')

<div class="header-section" id="content" tabindex="-1"> 
	<div class="container"> 
		<h1>Image List</h1> 
		<p>Checkout what image you already have.</p> 
	</div>
</div>


<div class="container content-container">

	<div class="row">
		<div class="col-md-10">
			<table class="table table-hover table-responsive">
				<thead>
					<tr>
						<td class="hidden-xs hidden-sm">Image ID</td>
						<td class="hidden-xs hidden-sm">Image Name</td>
						<td>Image</td>
						<td>Height</td>
						<td>Width</td>
						<td>Time of Request</td>
					</tr>
				</thead>
				<tbody>
					@foreach ($images as $image)
					    <tr>
					    	<td class="hidden-xs hidden-sm">{{ $image->image_id }}</td>
					    	<td class="hidden-xs hidden-sm">{{ $image->image_name }}</td>
					    	<td><img src='{{ $image->image_location }}' width="32" /></td>
					    	<td>
					    	@if($image->height != 0)
					    		{{ $image->height }}
					    	@else
					    		{{ $image->origin_height }}
					    	@endif
					    	</td>
					    	<td>
					    		@if($image->width != 0)
						    		{{ $image->width }}
						    	@else
						    		{{ $image->origin_width }}
						    	@endif
					    	</td>
					    	<td>{{ $image->request_times }}</td>
					    </tr>
					    
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

</div>
@stop