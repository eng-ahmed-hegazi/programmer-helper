<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Language;
use App\Resource;
use App\Type;
use App\Article;
class FrontEndController extends Controller
{
    public function contact(){
        return view('contacts');
    }
    public function search(){

        // Get All Language With A part Of The Value Of Search Box
        $langauge = Language::select('id')->where("name",'like','%'.request('search').'%')->get();
        // Get All Resources With The Language
        if(request('id') == null){
            $resource = Resource::whereIn("language_id",$langauge)
                ->orderBy('language_id')
                ->with('language')
                ->get();
            return view('search',[
                'resource'  => $resource,
                'search'    => request('search'),
                'typesId'   => request('id')
            ]);
        }else{
            $resource = Resource::whereIn("language_id",$langauge)
                ->whereIn("type_id",request('id'))
                ->orderBy('language_id','type_id')
                ->with('language')
                ->with('type')
                ->get();
            return view('search',[
                'resource'  => $resource,
                'search'    => request('search'),
                'typesId'   => request('id')
            ]);
        }



    }
    public function category($id){
        $languages = Language::with('category')
                    ->with('resources')
                    ->where('category_id',$id)
                    ->get();

        $category = Category::find($id);
        return view('category',[
            'language' => $languages,
            'category'  => $category
        ]);
    }
    public function type($id){
        $type = Type::where('type',$id)->first();
        $resources = Resource::where('type_id',$type->id)
            ->with('language')
            ->with('type')
            ->get();

        return view('type',[
            'resources'    => $resources
        ]);
    }
    public function singleresource($slug){
        $resource = Resource::where('slug',$slug)
                            ->with('type')
                            ->with('rates')
                            ->with('language')
                            ->with('comments')->first();
        return view('single',[
            'resource'  => $resource
        ]);
    }
    public function singlelanguage($id){
        $langauge = Language::find($id);
        $resources = Resource::where('language_id',$id)->get();

        return view('language',[
            'language'  => $langauge,
            'resources' => $resources
        ]);
    }

    public function articles(){
        $articles = Article::all();
        return view('articles',[
           'articles' => $articles
        ]);
    }
}
