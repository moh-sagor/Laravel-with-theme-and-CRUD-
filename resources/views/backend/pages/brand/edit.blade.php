@extends('backend.includes.master')
@section('main-content')

<div class="row">
<div class="col-xl-6 col-md-6">
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Brand</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Brand Update</li>
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
                    <h5 class="mb-0 text-info">Update Brand</h5>
                </div>
                <hr/>
                <form action="{{route('updatebrand',$brand->id)}} " method="POST" enctype="multipart/form-data">
                    @csrf 
                <div class="row mb-3">
                    <label for="name" class="col-sm-3 col-form-label">Brand Name</label>
                    <div class="col-sm-9">
                        <input type="text" value="{{$brand->name}}" class="form-control" id="name" name="name" placeholder="Enter Brand Name">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cat_id" class="col-sm-3 col-form-label">Category</label>
                    <div class="col-sm-9">
                        <select name="cat_id" id="cat_id" class="form-control cat_id">
                            <option value="{{$brand->cat_id}}">{{$brand->catinfo->name}}</option>
                            @foreach ($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                        @error('cat_id')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="image" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <img height="100" width="90" src="{{asset('backend/assets/brand/'.$brand->image)}}" alt="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="image" class="col-sm-3 col-form-label">Brand Image</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control image" id="image"  name="image">
                    </div>
                </div>
                {{-- <div class="row mb-3">
                    <label for="images" class="col-sm-3 col-form-label">Gallery Image</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control images" id="images"  name="images[]" multiple>
                    </div>
                </div> --}}
                <div class="row">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-info px-5 offset-4">Update Brand</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-6 col-md-6">
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Brand</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Brand Update</li>
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
                    <h5 class="mb-0 text-info">Add and Delete Gallery</h5>
                </div>
                <hr/>
                <div class="row">
                <div class="col-md-4 my-3 mx-3">
                    @foreach ($brand_gallery as $gallery)
                    <style>
                        .gallery{
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            position: relative;
                            margin: 10px;
                            height: 150px;
                            width: 175px;
            
                        }
                        .gallery img{
                            padding:10px;
                            width: 100%;
                            height:100%;
                        }
                        .delete-btn{
                            position:absolute; 
                            right: 1px;
                            top:1px;
                        }
                    </style>
                    <div class="gallery">
                    <img height="150" width="130" src="{{asset('backend/assets/brand/gallery/'.$gallery->images)}}">
                <a href="{{route ('deletegallery',$gallery->id)}}" class="delete-btn btn btn-sm btn-danger m-auto">X</a>
            </div>
                    @endforeach
                </div>
        </div>
           
        <form action="{{route('addgallery',$brand->id)}} " method="POST" enctype="multipart/form-data">
            @csrf 
<div class="row mb-3">
    <label for="images" class="col-sm-3 col-form-label">Gallery Image</label>
    <div class="col-sm-9">
        <input type="file" class="form-control images" id="images"  name="images[]" multiple>
    </div>
</div>
<div class="row">
    <label class="col-sm-3 col-form-label"></label>
    <div class="col-sm-9">
        <button type="submit" class="btn btn-info px-5 offset-4">Update Gallery</button>
    </div>
</div>
        </form>
</div>
</div>
</div>
</div>
</div>


@endsection