@extends('product.layout')
@section('content')
<br>
 <div class="container">
 	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col">
				<div class="text-left">
					<h2>Product Details</h2>
				</div>
			</div>
			<div class="col">
				<div class="text-right">
					<a href="{{route('product.index')}}" class="btn btn-info">Back To All Product List</a>
				</div>
			</div>
			</div>
		</div>
	</div>
<br>
	<div class="product_details">
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<strong>Product Name:</strong>
					<p>{{$data->product_name}}</p>
				</div>
				<div class="form-group">
					<strong>Product Code:</strong>
					<p>{{$data->product_code}}</p>
				</div>
				<div class="form-group">
					<strong>Product Details:</strong>
					<p>{{$data->details}}</p>
				</div>
				<div class="form-group">
					<strong>Product Image:</strong><br>
					<img src="{{URL::to($data->logo)}}" height="100px" width="100px" alt="Product Image">
				</div>
			</div>
		</div>
	</div>
 </div>


@endsection