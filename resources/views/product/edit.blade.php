@extends('layouts.app')

@section('breadcrumb')
<div class="page-title-box">
    <h4 class="page-title">Home </h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Product</a></li>
        <li class="breadcrumb-item"><a href="#">Add Product</a></li>
    </ol>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Product</div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </div>
                    @endif
                    <form action="{{ route('product.update', $edit_productinfo->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Category Name</label>
                            <select name="category_id" class="form-control">
                                <option value="{{ $edit_productinfo->category_id }}">{{ $edit_productinfo->relationtocategory->category_name }}</option>
                                @foreach ($active_categories as $active_category)
                                    <option value="{{ $active_category->id }}">{{ $active_category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="product_name" value="{{ $edit_productinfo->product_name }}"
                                placeholder="Enter Product Name">
                        </div>
                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="number" class="form-control" name="product_price" value="{{ $edit_productinfo->product_price }}"
                                placeholder="Enter Product Price">
                        </div>
                        <div class="form-group">
                            <label>Product Code</label>
                            <input type="text" class="form-control" name="product_code" value="{{ $edit_productinfo->product_code }}"
                                placeholder="Enter Product Code">
                        </div>
                        <div class="form-group">
                            <label>Product Quantity</label>
                            <input type="text" class="form-control" name="product_quantity" value="{{ $edit_productinfo->product_quantity }}"
                                placeholder="Enter Product Quantity">
                        </div>
                        <div class="form-group">
                            <label>Product Short Description</label>
                            <textarea  name="product_short_description" class="form-control" id="summernote1"  rows="2">{{ $edit_productinfo->product_short_description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Product Long Description</label>
                            <textarea name="product_long_description" class="form-control"  style="resize: none"  rows="6">{{ $edit_productinfo->product_long_description }}</textarea>
                        </div>
                        {{-- id="summernote" --}}
                        <div class="form-group">
                            <label>Old Product Photo</label>
                            <br>
                            <img width="150" src="{{ asset('uploads/product_photoes').'/'.$edit_productinfo->product_photo }}" alt="">
                        </div>
                        <div class="form-group">
                            <label>New Product Photo</label>
                            <input type="file" class="form-control" name="new_product_photo">
                        </div>
                        <div class="form-group">
                            <label>Old Product Thumbnails</label>
                            <br>
                            @forelse (product_thumbnails($edit_productinfo->id) as $single_thumbnail)
                                <img width="150" src="{{ asset('uploads/product_thumbnails').'/'.$single_thumbnail->product_thumbnail_name }}" alt="">
                            @empty
                                <span class="text-danger">NO Thumbnail To Show</span>
                            @endforelse
                        </div>
                        <div class="form-group">
                            <label>New Product Thumbnails</label>
                            <input type="file" class="form-control" name="new_product_thumbnails[]" multiple>
                        </div>

                        <button type="submit" class="btn btn-primary">Edit Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer_script')
<script>
    $(document).ready(function() {
  $('#summernote1').summernote();
  $('#summernote').summernote();
});
</script>

<script>
    @if (session('success'))
        toastr.success("{{ session('success') }}");
    @endif
</script>

@endsection


