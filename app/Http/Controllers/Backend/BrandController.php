<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Brand_Gallery;
use Image;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = Category::all();
        return view('backend.pages.brand.add', compact("cats"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cat_id' => 'required',
        ]);
        $brand = new Brand;
        if ($request->image) {
            $image = $request->file('image');
            $customName = rand() . "." . $image->getClientOriginalExtension();
            $location = public_path("backend/assets/brand/" . $customName);
            Image::make($image)->resize(200, 300)->save($location);
        }
        $brand->name = $request->name;
        $brand->cat_id = $request->cat_id;
        $brand->image = $customName;
        $brand->save();

        $brandId = Brand::where('name', $request->name)->first();

        if ($request->images) {
            $images = $request->file('images');
            foreach ($images as $image) {
                $customName = rand() . "." . $image->getClientOriginalExtension();
                $location = public_path("backend/assets/brand/gallery/" . $customName);
                Image::make($image)->resize(200, 300)->save($location);
                $brand_gallery = new Brand_Gallery;
                $brand_gallery->brand_id = $brandId->id;
                $brand_gallery->images = $customName;
                $brand_gallery->save();
            }

        }

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $brands = Brand::all();
        return view("backend.pages.brand.manage", compact("brands"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function view($id)
    {
        $brand = Brand::find($id);
        $galleries = Brand_Gallery::where('brand_id', $brand->id)->get();
        return view("backend.pages.brand.view", compact("brand", "galleries"));

    }
}