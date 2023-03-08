@extends('backend.includes.master')
@section('main-content')


<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Brand</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Add New Brand</li>
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
                <h5 class="mb-0 text-info">Add Brand</h5>
            </div>
            <hr/>
            <form id="brandData" action="{{route('storebrand')}} " method="POST" enctype="multipart/form-data">
                @csrf 
            <div class="row mb-3">
                <label for="name" class="col-sm-3 col-form-label">Brand Name</label>
                <div class="col-sm-9">
                    <input type="text" value="{{old('name')}}" class="form-control" id="name" name="name" placeholder="Enter Brand Name">
                    
                {{-- ajax validate error message  --}}
                <span class="text-danger spn-name"></span>

                    
                </div>
            </div>
            <div class="row mb-3">
                <label for="cat_id" class="col-sm-3 col-form-label">Category</label>
                <div class="col-sm-9">
                    <select name="cat_id" id="cat_id" class="form-control cat_id">
                        <option value="">------Select Category-----</option>
                        @foreach ($cats as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                   {{-- ajax validate error message  --}}
                <span class="text-danger spn-cat"></span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="image" class="col-sm-3 col-form-label">Brand Image</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control image" id="image"  name="image">
                    {{-- ajax validate error message  --}}
                <span class="text-danger spn-image"></span>
                </div>
                
            </div>
           
            <div class="row mb-3">
                <label for="images" class="col-sm-3 col-form-label">Gallery Image</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control images" id="images"  name="images[]" multiple>
                    {{-- ajax validate error message  --}}
                <span class="text-danger spn-images"></span>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-info px-5 offset-4">Add Brand</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
</div>

@endsection