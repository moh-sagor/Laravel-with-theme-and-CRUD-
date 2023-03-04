@extends('backend.includes.master')
@section('main-content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Product</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Product Manage</li>
            </ol>
        </nav>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  
                  <tr>
                     <@php
                         $sl = 1;
                     @endphp
                    @foreach ($products as $tdata)
                    <td>{{$sl++}}</td>
                    <td>{{$tdata->name}}</td>
                    <td>{{$tdata->des}}</td>
                    <td>{{$tdata->price}}</td>
                    <td>{{$tdata->quantity}}</td>
                    <td>
                        @if($tdata->status=='1')
                        <a href="{{route('activeproduct',$tdata->id)}}" class="btn btn-primary btn-sm">Active</a>
                        @else
                        <a href="{{route('inactiveproduct',$tdata->id)}}" class="btn btn-warning btn-sm">Inactive</a>
                        @endif
                        
                    </td>
                    <td>
                        <a href="" class="btn btn-info btn-sm">Edit</a>
                        <a href="{{route('deleteproduct',$tdata->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$tdata->id}}">
                            Modal Delete
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="delete{{$tdata->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                Hey, Are you sure to Delete ? 
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="{{route('deleteproduct',$tdata->id)}}" type="button" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                </tr>
                  @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
</div>
@endsection