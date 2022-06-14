<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Przestepstwo;
use Illuminate\Http\Request;

class PrzestepstwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $przestepstwos = Przestepstwo::paginate(8);
        return view('przestepstwo', compact('przestepstwos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dodaj_przestepstwo');
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
            'data_popelnienia' => 'required',
            'data_rozprawy' => 'required',
            'Klasyfikacja' => 'required',
            'Status' => 'required',
        ]);

        Przestepstwo::create([
            'id_wieznia' => request('id_wieznia'),
            'data_popelnienia' => request('data_popelnienia'),
            'data_rozprawy' => request('data_rozprawy'),
            'Klasyfikacja' => request('Klasyfikacja'),
            'Status' => request('Status'),

        ]);

        return redirect('przestepstwo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Przestepstwo  $przestepstwo
     * @return \Illuminate\Http\Response
     */
    public function show(Przestepstwo $przestepstwo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Przestepstwo  $przestepstwo
     * @return \Illuminate\Http\Response
     */
    public function edit(Przestepstwo $przestepstwo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Przestepstwo  $przestepstwo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Przestepstwo $przestepstwo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Przestepstwo  $przestepstwo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Przestepstwo $przestepstwo)
    {
        //
    }

    public function edit_function($id)
    {
        $przestepstwo = DB::select('select * from przestepstwos where id = ?',[$id]);
        return view('admin.przestepstwo_edit',['przestepstwo'=>$przestepstwo]);
    }
    public function update_function(Request $request,$id)
    {
        $id_wieznia = $przestepstwo = $request->input('id_wieznia');
        $data_popelnienia = $przestepstwo = $request->input('data_popelnienia');
        $data_rozprawy = $przestepstwo = $request->input('data_rozprawy');
        $Klasyfikacja = $przestepstwo = $request->input('Klasyfikacja');
        $Status = $przestepstwo = $request->input('Status');


        DB::update('update przestepstwos set id_wieznia = ?, data_popelnienia = ?, data_rozprawy = ?, Klasyfikacja = ?, Status = ? where id = ?', [$id_wieznia, $data_popelnienia, $data_rozprawy, $Klasyfikacja, $Status,  $id]);

        return redirect('przestepstwo')->with('success','Dane zmienione');
    }

    public function delete($id)
    {
        $przestepstwos = Przestepstwo::find($id);
        $przestepstwos->delete();
        return redirect('przestepstwo');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $przestepstwos = DB::table('przestepstwos')-> where ('id_wieznia', 'like', '%'.$search.'%')
        ->paginate(10);
        return view('przestepstwo',['przestepstwos' => $przestepstwos]);
    }
}
