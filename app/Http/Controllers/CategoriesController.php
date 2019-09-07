<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;
use App\Category;
use Yajra\DataTables\DataTables;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Category::create($input);

        $category = Category::all();

        return Datatables::of($category)
            ->addColumn('name', function($category){
                return $category->name;
            })
            ->addColumn('action', function($category){
                return '<a onclick="editForm('. $category->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a> ' .
                    '<a onclick="deleteData('. $category->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>';
            })
            ->rawColumns(['name', 'action'])->make(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return $category;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $category = Category::findOrFail($id);
        $category->update($input);

        return response()->json([
            'success' => true,
            'message' => 'Category Updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $categories = Category::find($id);
        foreach ($categories->languages as $languages){
            $languages->delete();
        }
        $categories->delete();
        return response()->json([
            'success' => true,
            'message' => 'Category Deleted'
        ]);
    }

    public function apiCategories()
    {
        $category = Category::all();

        return Datatables::of($category)
            ->addColumn('name', function($category){
                return $category->name;
            })
            ->addColumn('action', function($category){
                return '<a onclick="editForm('. $category->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a> ' .
                    '<a onclick="deleteData('. $category->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>';
            })
            ->rawColumns(['name', 'action'])->make(true);
    }
}
