<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Miejsce_wieznia;
use App\Models\Prisoner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

        $id = request('id_wieznia');
        $dane = Prisoner::find($id);
        
        request()->validate([

            'id_wieznia' => 'required',
            'Miejsce' => 'required',
        ]);

        Miejsce_wieznia::create([
            'id_wieznia' => request('id_wieznia'),
            'Miejsce' => request('Miejsce'),
            'Imie' => $dane->Imie,
            'Nazwisko' => $dane->Nazwisko,
        ]);

        
            
            $user_ac = Auth::user()->name ;
            $id_n = request('id_wieznia');
            $name = $dane->Imie;
            $surname = $dane->Nazwisko;
            $Miejsceprisoner = request('Miejsce');
            
        
        
        DB::connection('mysql')->insert(DB::raw('INSERT INTO log_tables (typ, user_ac, id_n, name, surname, Miejsceprisoner,date) 
        VALUES(12,"'.$user_ac.'",'.$id_n.',"'.$name.'","'.$surname.'","'.$Miejsceprisoner.'",NOW(3));'));

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

        $id = request('id_wieznia');
        $dane2 = Prisoner::find($id);

        
            
            $user_ac = Auth::user()->name ;
            $id_n = request('id_wieznia');
            $name = $dane2->Imie;
            $surname = $dane2->Nazwisko;
            $Miejsceprisoner = request('Miejsce');
            
        
        DB::update('update miejsce_wieznias set id_wieznia = ?, Miejsce = ? where id = ?', [$id_wieznia, $Miejsce,  $id]);

        DB::connection('mysql')->insert(DB::raw('INSERT INTO log_tables (typ, user_ac, id_n, name, surname, Miejsceprisoner,date) 
        VALUES(10,"'.$user_ac.'",'.$id_n.',"'.$name.'","'.$surname.'","'.$Miejsceprisoner.'",NOW(3));'));


        

        return redirect('miejscewieznia')->with('success','Dane zmienione');
    }
    public function delete($id)
    {
        $miejsce_wieznias = Miejsce_wieznia::find($id);

        
            
            $user_ac = Auth::user()->name ;
            $id_n = $miejsce_wieznias->id_wieznia;
            $name = $miejsce_wieznias->Imie;
            $surname = $miejsce_wieznias->Nazwisko;
            $Miejsceprisoner = $miejsce_wieznias->Miejsce;
            
        DB::connection('mysql')->insert(DB::raw('INSERT INTO log_tables (typ, user_ac, id_n, name, surname, Miejsceprisoner,date) 
        VALUES(11,"'.$user_ac.'",'.$id_n.',"'.$name.'","'.$surname.'","'.$Miejsceprisoner.'",NOW(3));'));

        DB::connection('mysql')->delete(DB::raw('DELETE FROM miejsce_wieznias WHERE id='.$id.';'));
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


