<?php

namespace App\Http\Controllers;

use App\Category;
use DB;
use Illuminate\Http\Request;
use App\Language;
use Yajra\DataTables\DataTables;

class LanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.languages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $language = Language::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Language Created'
        ]);
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
        $language = Language::findOrFail($id);
        return $language;
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

        $language = Language::findOrFail($id);
        $language->update([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category
            ]);

        /*$language->tags()->sync($request->input('tags'));*/

        return response()->json([
            'success' => true,
            'message' => 'Language Updated'
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
        $languages = Language::find($id);
        /*Guarantee The Data*/
        foreach ($languages->interviews as $interview){
            $interview->delete();
        }
        foreach ($languages->resources as $resource){
            $resource->delete();
        }
        foreach ($languages->articles as $article){
            $article->delete();
        }
        $languages->delete();
        return response()->json([
            'success' => true,
            'message' => 'Language Deleted'
        ]);
    }

    public function apiLanguages()
    {
        $language = Language::with('category')->get();
        return Datatables::of($language)
            ->addColumn('name', function($language){
                return $language->name;
            })
            ->addColumn('description', function($language){
                return str_limit($language->description,100);
            })
            ->addColumn('category', function($language){
                return $language->category->name;
            })
            ->addColumn('action', function($language){
                return '<a onclick="editForm('. $language->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a> ' .
                    '<a onclick="deleteData('. $language->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>';
            })
            ->rawColumns(['name','description','category', 'action'])->make(true);
    }
}
