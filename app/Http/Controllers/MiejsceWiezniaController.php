<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Miejsce_wieznia;
use Illuminate\Http\Request;

class MiejsceWiezniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $miejsce_wieznias = Miejsce_wieznia::paginate(10);
        return view('miejscewieznia', compact('miejsce_wieznias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dodaj_miejscew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([

            'id_wieznia' => 'required',
            'Miejsce' => 'required',
        ]);

        Miejsce_wieznia::create([
            'id_wieznia' => request('id_wieznia'),
            'Miejsce' => request('Miejsce'),


        ]);

        return redirect('miejscewieznia');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Miejsce_wieznia  $miejsce_wieznia
     * @return \Illuminate\Http\Response
     */
    public function show(Miejsce_wieznia $miejsce_wieznia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Miejsce_wieznia  $miejsce_wieznia
     * @return \Illuminate\Http\Response
     */
    public function edit(Miejsce_wieznia $miejsce_wieznia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Miejsce_wieznia  $miejsce_wieznia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Miejsce_wieznia $miejsce_wieznia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Miejsce_wieznia  $miejsce_wieznia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miejsce_wieznia $miejsce_wieznia)
    {
        //
    }

    public function edit_function($id)
    {
        $miejsce_wieznia = DB::select('select * from miejsce_wieznias where id = ?',[$id]);
        return view('admin.miejscewieznia_edit',['miejsce_wieznia'=>$miejsce_wieznia]);
    }

    public function update_function(Request $request,$id)
    {
        $id_wieznia = $miejsce_wieznia = $request->input('id_wieznia');
        $Miejsce = $miejsce_wieznia = $request->input('Miejsce');



        DB::update('update miejsce_wieznias set id_wieznia = ?, Miejsce = ? where id = ?', [$id_wieznia, $Miejsce,  $id]);

        return redirect('miejscewieznia')->with('success','Dane zmienione');
    }
    public function delete($id)
    {
        $miejsce_wieznias = Miejsce_wieznia::find($id);
        $miejsce_wieznias->delete();
        return redirect('miejscewieznia');
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $miejsce_wieznias = DB::table('miejsce_wieznias')-> where ('id_wieznia', 'like', '%'.$search.'%')
        ->paginate(10);
        return view('miejscewieznia',['miejsce_wieznias' => $miejsce_wieznias]);
    }
}


