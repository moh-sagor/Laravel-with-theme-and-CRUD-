@extends('backend.includes.master')
@section('main-content')


<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Product</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Update Product</li>
            </ol>
        </nav>
    </div>
</div>

<div class="card border-top border-0 border-4 border-info">
    <div class="card-body">
        <div class="border p-4 rounded">
            <div class="card-title d-flex align-items-center">
                <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                </div>
                <h5 class="mb-0 text-info">Update Product</h5>
            </div>
            <hr/>
            <form action="{{ route('insertproduct')}}" method="POST">
                @csrf 
            <div class="row mb-3">
                <label for="name" class="col-sm-3 col-form-label">Product Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="des" class="col-sm-3 col-form-label">Product Description</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="des" name="des" placeholder="Enter Product Description">
                </div>
            </div>
            <div class="row mb-3">
                <label for="price" class="col-sm-3 col-form-label">Price</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="price"  name="price"placeholder="Product Price">
                </div>
            </div>
            <div class="row mb-3">
                <label for="quantity" class="col-sm-3 col-form-label">Quantity</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Product Quantity">
                </div>
            </div>
            <div class="row mb-3">
                <label for="status" class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <select class="form-control" name="status" id="status">
                        <option value="">------Select Status-----</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-info px-5 offset-4">Add Product</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
</div>

@endsection