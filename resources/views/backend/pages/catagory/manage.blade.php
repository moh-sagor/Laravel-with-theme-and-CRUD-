@extends('backend.includes.master')
@section('main-content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Category</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Manage Category</li>
            </ol>
        </nav>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <button class="btn btn-sm btn-info mb-3" data-bs-toggle="modal" data-bs-target="#add">
        <div class="font-22 text-primary">
            <i class="lni lni-circle-plus"></i>
        </div></button>
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="allData">

                </tbody>    
            </table>
        </div>
    </div>
</div>

<!--ADD Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row mb-3">
                <label for="cat-name" class="col-sm-3 col-form-label">Category Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="cat-name" name="cat-name" placeholder="Enter Category Name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="cat-des" class="col-sm-3 col-form-label">Category Description</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="cat-des" name="cat-des" placeholder="Enter Category Description">
                </div>
            </div>
            <div class="row mb-3">
                <label for="cat-status" class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <select class="form-control" name="cat-status" id="cat-status">
                        <option value="">------Select Status-----</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="" type="button" class="btn btn-info cat-add">Add</a>
        </div>
    </div>
    </div>
</div>

@endsection