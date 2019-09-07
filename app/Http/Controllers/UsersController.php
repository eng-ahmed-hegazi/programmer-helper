<?php

namespace App\Http\Controllers;

use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    public function destroy($id)
    {
        User::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Category Deleted'
        ]);
    }

    public function apiUsers()
    {
        $user = User::with('comments')->with('fqas')->with('rates')->get();

        return Datatables::of($user)
            ->addColumn('name', function($user){
                return $user->name;
            })
            ->addColumn('email', function($user){
                return $user->email;
            })
            ->addColumn('comments', function($user){
                return $user->comments->count();
            })
            ->addColumn('rates', function($user){
                return $user->rates->count();
            })
            ->addColumn('fqas', function($user){
                return $user->fqas->count();
            })
            ->addColumn('action', function($user){
                return '<a onclick="deleteData('. $user->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>';
            })
            ->rawColumns(['name', 'email','comments','rates','fqas','action'])->make(true);
    }
}
