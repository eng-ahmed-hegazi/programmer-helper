<?php

namespace App\Http\Controllers;

use App\Article;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use App\Contact;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.articles.index');
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
        $input['slug']=str_slug($input['title']);
        $input['photo'] = null;

        if ($request->hasFile('photo')){
            $input['photo'] = '/upload/photo/'.str_slug($input['title'], '-').'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('/upload/photo/'), $input['photo']);
        }

        Article::create($input);

        return response()->json([
            'success' => true,
            'message' => 'Contact Created'
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
        $article = Article::findOrFail($id);
        return $article;
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
        $article = Article::findOrFail($id);

        $input['slug']=str_slug($article->title);
        $input['photo'] = $article->photo;

        if ($request->hasFile('photo')){
            if (!$article->photo == NULL){
                unlink(public_path($article->photo));
            }
            $input['photo'] = '/upload/photo/'.str_slug($input['title'], '-').'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('/upload/photo/'), $input['photo']);
        }

        $article->update($input);

        return response()->json([
            'success' => true,
            'message' => 'Contact Updated'
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
        $article = Article::findOrFail($id);

        if (!$article->photo == NULL){
            unlink(public_path($article->photo));
        }

        Article::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Contact Deleted'
        ]);
    }

    public function apiArticles()
    {
        $article = Article::with('language')->get();

        return Datatables::of($article)
            ->addColumn('title', function($article){
                return $article->title;
            })
            ->addColumn('body', function($article){
                return $article->body;
            })
            ->addColumn('slug', function($article){
                return $article->slug;
            })
            ->addColumn('language_id', function($article){
                return $article->language->name;
            })
            ->addColumn('photo', function($article){
                if ($article->photo == NULL){
                    return 'No Image';
                }
                return '<img class="rounded-square" width="50" height="50" src="'. url($article->photo) .'" alt="">';
            })

            ->addColumn('action', function($article){
                return '<a onclick="editForm('. $article->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a> ' .
                    '<a onclick="deleteData('. $article->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>';
            })
            ->rawColumns(['photo', 'action','title','slug','body','language_id'])->make(true);
    }
}
