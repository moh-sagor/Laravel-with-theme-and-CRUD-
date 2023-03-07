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

<div class="row">
    <div class="col-md-6">
        <h4>Brand Information</h4>
        <p>{{$brand->name}}</p>
        <p>{{$brand->cat_id}}</p>
       
        <img height="600" width="500" src="{{asset('backend/assets/brand/'.$brand->image)}}" alt="">
    </div>
    <div class="col-md-6">
        <h4>Gallery Images</h4>
        @foreach ($galleries as $gallery)
        <div class="gallery">
        <img  src="{{asset('backend/assets/brand/gallery/'.$gallery->images)}}" alt="">
    </div>
        @endforeach
    </div>

</div>


@endsection