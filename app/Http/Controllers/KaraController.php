<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Kara;
use Illuminate\Http\Request;

class KaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karas = Kara::paginate(8);
        return view('kara', compact('karas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dodaj_kare');
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
            'Typ' => 'required',
            'data_rozpoczecia' => 'required',
            'planowana_data_zakonczenia' => 'required',
            'dodatkowe_kary' => 'required',
        ]);

        Kara::create([
            'id_wieznia' => request('id_wieznia'),
            'Typ' => request('Typ'),
            'data_rozpoczecia' => request('data_rozpoczecia'),
            'planowana_data_zakonczenia' => request('planowana_data_zakonczenia'),
            'dodatkowe_kary' => request('dodatkowe_kary'),

        ]);

        return redirect('kara');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kara  $kara
     * @return \Illuminate\Http\Response
     */
    public function show(Kara $kara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kara  $kara
     * @return \Illuminate\Http\Response
     */
    public function edit(Kara $kara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kara  $kara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kara $kara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kara  $kara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kara $kara)
    {
        //
    }

    public function edit_function($id)
    {
        $kara = DB::select('select * from karas where id = ?',[$id]);
        return view('admin.kara_edit',['kara'=>$kara]);
    }

    public function update_function(Request $request,$id)
    {
        $id_wieznia = $kara = $request->input('id_wieznia');
        $Typ = $kara = $request->input('Typ');
        $data_rozpoczecia = $kara = $request->input('data_rozpoczecia');
        $planowana_data_zakonczenia = $kara = $request->input('planowana_data_zakonczenia');
        $dodatkowe_kary = $kara = $request->input('dodatkowe_kary');


        DB::update('update karas set id_wieznia = ?, Typ = ?, data_rozpoczecia = ?, planowana_data_zakonczenia = ?, dodatkowe_kary = ? where id = ?', [$id_wieznia, $Typ, $data_rozpoczecia, $planowana_data_zakonczenia, $dodatkowe_kary,  $id]);

        return redirect('kara')->with('success','Dane zmienione');
    }
    public function delete($id)
    {
        $karas = Kara::find($id);
        $karas->delete();
        return redirect('kara');
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $karas = DB::table('karas')-> where ('id_wieznia', 'like', '%'.$search.'%')
        ->paginate(10);
        return view('kara',['karas' => $karas]);
    }
}
