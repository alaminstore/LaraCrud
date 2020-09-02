@extends('product.layout')
@section('content')
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col">
				<div class="text-left">
					<h2>Product list</h2>
				</div>
			</div>
			<div class="col">
				<div class="text-right">
					<a href="{{route('create.product')}}" class="btn btn-info">Create new product</a>
				</div>
			</div>
			</div>
		</div>

	</div>
<br>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

	<table class="table table-bordered">
		<tr class="text-center">
			<th width="150px">Product Name</th>
            <th width="15px">Product Code</th>
            <th width="200px">product Details</th>
            <th width="100px">Product Logo</th>
            <th width="280px">Action</th>
		</tr>
		@foreach($product as $pro)
		<tr class="text-center">
			<td>{{$pro->product_name}}</td>
			<td>{{$pro->product_code}}</td>
			<td>{{ str_limit($pro->details,$limit = 70) }}</td>
			<td><img src="{{ URL::to($pro->logo) }}" height="100px" width="120px" alt=""></td>
			<td>
				<a class="btn btn-info" href="{{URL::to('show/product/'.$pro->id)}}">Show</a>
				<a class="btn btn-primary" href="{{URL::to('edit/product/'.$pro->id)}}">Edit</a>
				<a class="btn btn-danger" href="{{URL::to('delete/product/'.$pro->id)}}" 
				 onclick="return confirm('Are you sure?')">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
     
     	{!! $product->links() !!}

</div>
@endsection
