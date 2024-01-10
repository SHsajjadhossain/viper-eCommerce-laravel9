@extends('layouts.app')

@section('breadcrumb')
<div class="page-title-box">
    <h4 class="page-title">Home </h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Product</a></li>
        <li class="breadcrumb-item"><a href="#">List Product</a></li>
    </ol>
</div>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Product</div>
                    <div class="card-body">
                        <table class="table table-bordered table-inverse">
                            <tbody>
                                    <tr>
                                        <td>Product Name</td>
                                        <td>{{ $single_productinfo->product_name }}</td>
                                    </tr>

                                    <tr>
                                        <td>Product Price</td>
                                        <td>{{ $single_productinfo->product_price }}</td>
                                    </tr>
                                    <tr>
                                        <td>Product Photo</td>
                                        <td>
                                            <img width="150" src="{{ asset('uploads/product_photoes') }}/{{ $single_productinfo->product_photo }}" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Product Category</td>
                                        <td>{{ $single_productinfo->relationtocategory->category_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Product Code</td>
                                        <td>{{ $single_productinfo->product_code }}</td>
                                    </tr>
                                    <tr>
                                        <td>Product Short Description</td>
                                        <td>{{ $single_productinfo->product_short_description }}</td>
                                    </tr>
                                    <tr>
                                        <td>Product Long Description</td>
                                        <td>
                                            {!! $single_productinfo->product_long_description !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Product Quantity</td>
                                        <td>{{ $single_productinfo->product_quantity }}</td>
                                    </tr>
                                    <tr>
                                        <td>Action</td>
                                        <td>
                                            <a href="{{ route('product.edit', $single_productinfo->id) }}" class="btn btn-sm btn-info">Edit</a>
                                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
