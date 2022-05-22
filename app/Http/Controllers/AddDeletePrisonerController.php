<?php

namespace App\Http\Controllers;
use App\Models\Prisoner;
use Illuminate\Http\Request;

class AddDeletePrisonerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ADPrisoner()
    {
        return view('admin.add_delete_prisoner');
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
        request()->validate([
            'Imie' => 'required',
            'Nazwisko' => 'required',
            'Miasto' => 'required',
            'Ulica' => 'required',
            'Waga' => 'required',
            'Wzrost' => 'required',
            'Telefon' => 'required',
            'id_celi' => 'required',
            'mozliwosc_wizyt' => 'required',
            'mozliwosc_przepustek' => 'required',
            'Status_celi' => 'required',
        ]);

        Prisoner::create([
            'Imie' => request('Imie'),
            'Nazwisko' => request('Nazwisko'),
            'Miasto' => request('Miasto'),
            'Ulica' => request('Ulica'),
            'Waga' => request('Waga'),
            'Wzrost' => request('Wzrost'),
            'Telefon' => request('Telefon'),
            'id_celi' => request('id_celi'),
            'mozliwosc_wizyt' => request('mozliwosc_wizyt'),
            'mozliwosc_przepustek' => request('mozliwosc_przepustek'),
            'Status_celi' => request('Status_celi'),
        ]);

        return redirect('prisoner_list');
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

    public function save(Request $request)
    {

    }
}
