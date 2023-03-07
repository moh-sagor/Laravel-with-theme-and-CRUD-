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
                        <th>Brand Name</th>
                        <th>Category Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  
                  <tr>
                     @php
                         $sl = 1;
                     @endphp
                    @foreach ($brands as $tdata)
                    <td>{{$sl++}}</td>
                    <td>{{$tdata->name}}</td>
                    <td>{{$tdata->cat_id}}</td>
                    <td><img height="100" src="{{asset('backend/assets/brand/'.$tdata->image)}}" alt="{{$tdata->image}}" ></td>
                    <td>
                        <a href="{{route('viewbrand',$tdata->id)}}" class="btn btn-warning btn-sm">View</a>
                        <a href="{{route('editbrand',$tdata->id)}}" class="btn btn-info btn-sm">Edit</a>
                        <a href="{{route('destroygallery',$tdata->id)}}" class="btn btn-danger btn-sm">Delete</a>


                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletebrand{{$tdata->id}}">
                            Modal Delete
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="deletebrand{{$tdata->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <a href="{{route('destroygallery',$tdata->id)}}" type="button" class="btn btn-danger">Delete</a>
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
                        <th>Sl No</th>
                        <th>Brand Name</th>
                        <th>Category Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
</div>
@endsection