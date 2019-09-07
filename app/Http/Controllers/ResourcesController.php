<?php

namespace App\Http\Controllers;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use App\Resource;
use App\Type;
class ResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.resources.index');
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
        Resource::create([
            'name' => $request->name,
            'description' => $request->description,
            'url' => $request->url,
            'type_id' => $request->type,
            'slug' => str_slug($request->name),
            'language_id' => $request->language,
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
        $language = Resource::findOrFail($id);
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

        $language = Resource::findOrFail($id);
        $language->update([
            'name' => $request->name,
            'description' => $request->description,
            'url' => $request->url,
            'type_id' => $request->type,
            'slug' => str_slug($request->name),
            'language_id' => $request->language,
        ]);

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
        Resource::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Language Deleted'
        ]);
    }

    public function apiResource()
    {
        $resource = Resource::with('language')->with('type')->get();

        return Datatables::of($resource)
            ->addColumn('name', function($resource){
                return $resource->name;
            })
            ->addColumn('url', function($resource){
                return $resource->url;
            })
            ->addColumn('type', function($resource){
                return $resource->type->type;
            })
            ->addColumn('language', function($resource){
                return $resource->language->name;
            })
            ->addColumn('action', function($resource){
                return '<a onclick="editForm('. $resource->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a> ' .
                    '<a onclick="deleteData('. $resource->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>';
            })
            ->rawColumns(['name','url','type','language','action'])->make(true);
    }
}
