<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Prisoner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrisonerListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function PrisonerList()
    {
        $prisoners = Prisoner::paginate(7);
        return view('prisoner_list', compact('prisoners'));
    }

    public function delete($id)
    {
        $prisoners = Prisoner::find($id);
        $prisonerdeletelog = [
            'typ' => 5,
            'user_ac' => Auth::user()->name ,
            'id_n' => $prisoners->id,
            'name' => $prisoners->Imie,
            'surname' => $prisoners->Nazwisko,
            'date' => NOW(2),
        ];
        DB::table('log_tables')->insert($prisonerdeletelog);
        $prisoners->delete();
        return redirect('prisoner_list');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_delete_prisoner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function edit_function($id)
    {
        $prisoner = DB::select('select * from prisoners where id = ?',[$id]);
        return view('admin.prisoneredit',['prisoner'=>$prisoner]);
    }

    public function update_function(Request $request,$id)
    {
        $Imie = $prisoner = $request->input('Imie');
        $Nazwisko = $prisoner = $request->input('Nazwisko');
        $Miasto = $prisoner = $request->input('Miasto');
        $Ulica = $prisoner = $request->input('Ulica');
        $Waga = $prisoner = $request->input('Waga');
        $Wzrost = $prisoner = $request->input('Wzrost');
        $Telefon = $prisoner = $request->input('Telefon');
        $id_celi = $prisoner = $request->input('id_celi');
        $mozliwosc_wizyt = $prisoner = $request->input('mozliwosc_wizyt');
        $mozliwosc_przepustek = $prisoner = $request->input('mozliwosc_przepustek');
        $Status_celi = $prisoner = $request->input('Status_celi');

        DB::update('update prisoners set Imie = ?, Nazwisko = ?, Miasto = ?, Ulica = ?, Waga = ?, Wzrost = ?, Telefon = ?, id_celi = ?, mozliwosc_wizyt = ?, mozliwosc_przepustek = ?, Status_celi = ? where id = ?', [$Imie, $Nazwisko, $Miasto, $Ulica, $Waga, $Wzrost, $Telefon, $id_celi, $mozliwosc_wizyt, $mozliwosc_przepustek, $Status_celi, $id]);

        return redirect('prisoner_list')->with('success','Dane zmienione');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $prisoners = DB::table('prisoners')-> where ('Imie', 'like', '%'.$search.'%')
        ->orWhere('Nazwisko', 'like', '%'.$search.'%')
        ->paginate(10);
        return view('prisoner_list',['prisoners' => $prisoners]);
    }

}

