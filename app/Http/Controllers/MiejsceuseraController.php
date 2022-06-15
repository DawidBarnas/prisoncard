<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\miejsceusera;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MiejsceuseraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $miejsceuseras = Miejsceusera::paginate(8);
        return view('miejscestraznika', compact('miejsceuseras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dodaj_miejsces');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = request('id_straznika');
        $dane = User::find($id);

        request()->validate([

            'id_straznika' => 'required',
            'Miejsce' => 'required',
        ]);

        Miejsceusera::create([
            'id_straznika' => request('id_straznika'),
            'Miejsce' => request('Miejsce'),
            'name' => $dane->name,
            'surname' => $dane->surname,
        ]);

        
        $miejsceuseraddlog = [
            'typ' => 9,
            'user_ac' => Auth::user()->name ,
            'id_n' => request('id_straznika'),
            'name' => $dane->name,
            'surname' => $dane->surname,
            'Miejsceuser' => request('Miejsce'),
            'date' => NOW(2),
        ];
        DB::table('log_tables')->insert($miejsceuseraddlog);

        return redirect('miejscestraznika');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\miejsceusera  $miejsceusera
     * @return \Illuminate\Http\Response
     */
    public function show(miejsceusera $miejsceusera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\miejsceusera  $miejsceusera
     * @return \Illuminate\Http\Response
     */
    public function edit(miejsceusera $miejsceusera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\miejsceusera  $miejsceusera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, miejsceusera $miejsceusera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\miejsceusera  $miejsceusera
     * @return \Illuminate\Http\Response
     */
    public function destroy(miejsceusera $miejsceusera)
    {
        //
    }
    public function edit_function($id)
    {
        $miejsceusera = DB::select('select * from miejsceuseras where id = ?',[$id]);
        return view('admin.miejscestraznika_edit',['miejsceusera'=>$miejsceusera]);
    }

    public function update_function(Request $request,$id)
    {
        $id_straznika = $miejsceusera = $request->input('id_straznika');
        $Miejsce = $miejsceusera = $request->input('Miejsce');

        $id = request('id_straznika');
        $dane = User::find($id);

        $miejsceusereditlog = [
            'typ' => 7,
            'user_ac' => Auth::user()->name ,
            'id_n' => request('id_straznika'),
            'name' => $dane->name,
            'surname' => $dane->surname,
            'Miejsceuser' => request('Miejsce'),
            'date' => NOW(2),
        ];
        DB::table('log_tables')->insert($miejsceusereditlog);

        DB::update('update miejsceuseras set id_straznika = ?, Miejsce = ? where id = ?', [$id_straznika, $Miejsce,  $id]);

        return redirect('miejscestraznika')->with('success','Dane zmienione');
    }
    public function delete($id)
    {
        $miejsceuseras = Miejsceusera::find($id);

        $user_ac = Auth::user()->name;
            $id_n = $miejsceuseras->id_straznika;
            $name = $miejsceuseras->name;
            $surname = $miejsceuseras->surname;
            $Miejsceuser = $miejsceuseras->Miejsce;
            
        
        DB::connection('mysql')->insert(DB::raw('INSERT INTO log_tables (typ, user_ac, id_n, name, surname, Miejsceuser,date) 
        VALUES(8,"'.$user_ac.'",'.$id_n.',"'.$name.'","'.$surname.'","'.$Miejsceuser.'",NOW(3));'));

        DB::connection('mysql')->delete(DB::raw('DELETE FROM miejsceuseras WHERE id='.$id.';'));
        

        return redirect('miejscestraznika');
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $miejsceuseras = DB::table('miejsceuseras')-> where ('id_straznika', 'like', '%'.$search.'%')
        ->paginate(10);
        return view('miejscestraznika',['miejsceuseras' => $miejsceuseras]);
    }
}
