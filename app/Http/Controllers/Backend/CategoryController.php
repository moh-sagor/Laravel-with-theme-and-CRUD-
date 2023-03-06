<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.catagory.manage');
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
        $cat = new Category;
        $cat->name = $request->name;
        $cat->des = $request->des;
        $cat->status = $request->status;
        $cat->save();
        return response()->json([
            "msg" => "Data Successfully Inserted"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $cats = Category::all();
        return response()->json([
            "status" => "200",
            "allData" => $cats
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cat = Category::find($id);
        return response()->json([
            "allData" => $cat
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cat = Category::find($id);
        $cat->name = $request->name;
        $cat->des = $request->des;
        $cat->status = $request->status;
        $cat->update();
        return response()->json([
            "msg" => "Data Successfully Updated"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return response()->json([
            "msg" => "Data Successfully Deleted"
        ]);
    }
    public function active($id)
    {
        $cat = Category::find($id);
        $cat->status = "2";
        $cat->update();
        return response()->json([
            "msg" => "Status Successfully Change"
        ]);
    }
    public function inactive($id)
    {
        $cat = Category::find($id);
        $cat->status = "1";
        $cat->update();
        return response()->json([
            "msg" => "Status Successfully Change"
        ]);
    }
}