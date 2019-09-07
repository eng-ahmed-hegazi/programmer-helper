<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Interview;

class InterviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.interviews.index');
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

        Interview::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'language_id' => $request->language
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Category Created'
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
        $interview = Interview::findOrFail($id);
        return $interview;
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

        $interview = Interview::findOrFail($id);
        $interview->update([
            'question' => $request->question,
            'answer' => $request->answer,
            'language_id' => $request->language
        ]);

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
        Interview::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Category Deleted'
        ]);
    }

    public function apiInterviews()
    {
        $interview = Interview::with('language')->get();

        return Datatables::of($interview)
            ->addColumn('question', function($interview){
                return $interview->question;
            })
            ->addColumn('answer', function($interview){
                return $interview->answer;
            })
            ->addColumn('language', function($interview){
                return $interview->language->name;
            })
            ->addColumn('action', function($interview){
                return '<a onclick="editForm('. $interview->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a> ' .
                    '<a onclick="deleteData('. $interview->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>';
            })
            ->rawColumns(['question','answer','language', 'action'])->make(true);
    }
}
