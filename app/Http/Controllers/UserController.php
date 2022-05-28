<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guards = User::where('role','user')->paginate(7);
        return view('guard_list', ['guards'=>$guards]);
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

    public function delete($id)
    {
        $guards = User::where('role','user')->find($id);
        $guards->delete();
        return redirect('guard_list');

    }
    public function search(Request $request)
    {
        $search = $request->get('search');

        $guards = DB::table('users')->where('role','user')->where(function($query) use ($request){
            $query->where('name', 'like', '%'.$request->search . "%");
            $query->orwhere('surname', 'like', '%'.$request->search . "%");
        })->paginate(10);
        
        return view('guard_list',['guards' => $guards]);
    }


    public function edit_function($id)
    {
        $guard = DB::select('select * from users where id = ?',[$id]);
        return view('admin.useredit',['guard'=>$guard]);
    }

    public function update_function(Request $request,$id)
    {
        $name = $guard = $request->input('name');
        $surname = $guard = $request->input('surname');
        $email = $guard = $request->input('email');
        $Stopien = $guard = $request->input('Stopien');
        $Telefon = $guard = $request->input('Telefon');
        $Status = $guard = $request->input('Status');
        
        DB::update('update users set name = ?, surname = ?, email = ?, Stopien = ?, Telefon = ?, Status = ? where id = ?', [$name, $surname, $email, $Stopien, $Telefon, $Status, $id]);

        return redirect('guard_list')->with('success','Dane zmienione');
    }

}
