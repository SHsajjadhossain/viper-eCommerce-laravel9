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
                        <table class="table table-bordered">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#SL</th>
                                    <th>Vendor Name</th>
                                    <th>Vendor Photo</th>
                                    <th>Vendor Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($all_vendor as $key => $vendor)
                                    <tr>
                                        <td>{{ $all_vendor->firstItem() +$key }}</td>
                                        <td>{{ $vendor->relationToUser->name }}</td>
                                        <td><img width="50px" src="{{ asset('uploads/profile_photoes') }}/{{ $vendor->relationToUser->profile_photo }}" alt=""></td>
                                        <td>{{ $vendor->address }}</td>
                                         <td>
                                            <a href="#" class="btn btn-sm btn-info">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="text-center text-danger">
                                        <td colspan="50">No Record To Show</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{-- pagination --}}
                    {{ $all_vendor->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
