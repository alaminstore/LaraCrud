@extends('product.layout')
@section('content')
    <br><br>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="row">
                    <div class="col">
                        <div class="text-left">
                            <h2>Add new Product</h2>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-right">
                            <a href="{{route('product.index')}}" class="btn btn-info">Back To List</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Product Name:</strong>
                        <input type="text" name="product_name" class="form-control" placeholder="Product Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Product Code:</strong>
                        <input type="text" name="product_code" class="form-control" placeholder="Product Code">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Product Details:</strong>
                        <textarea name="product_details" id="" class="textarea form-control" cols="30" rows="10" placeholder="Product's Details"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Product Logo:</strong><br>
                        <input type="file" name="logo">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

@endsection
