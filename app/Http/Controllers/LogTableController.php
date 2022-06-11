<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\LogTable;
use Illuminate\Http\Request;

class LogTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function LogGuardList()
    {
        $AddGuards = LogTable::where('typ','GuardAdd')->paginate(5, ['*'], 'AG');
        $DelGuards = LogTable::where('typ','GuardDelete')->paginate(5, ['*'], 'DG');
        $EditGuards = LogTable::where('typ','GuardEdit')->paginate(5, ['*'], 'EG');
        return view('admin.guard_log_list', compact('DelGuards','EditGuards','AddGuards'));
    }

    public function LogPrisonerList()
    {
        $AddPrisoners = LogTable::where('typ','PrisonerAdd')->paginate(5, ['*'], 'AP');
        $DelPrisoners = LogTable::where('typ','PrisonerDelete')->paginate(5, ['*'], 'DP');
        $EditPrisoners = LogTable::where('typ','PrisonerEdit')->paginate(5, ['*'], 'EP');
        return view('admin.prisoner_log_list', compact('DelPrisoners','EditPrisoners','AddPrisoners'));
    }

    public function LogGuardPlaceList()
    {
        $AddPlaceGuards = LogTable::where('typ','GuardPlaceAdd')->paginate(5, ['*'], 'AGP');
        $GuardPlaceDeletes = LogTable::where('typ','GuardPlaceDelete')->paginate(5, ['*'], 'DGP');
        return view('miejscestraznikalogi',compact('AddPlaceGuards','GuardPlaceDeletes'));
    }

    public function LogPrisonerPlaceList()
    {
        $PrisonerPlaceAdds = LogTable::where('typ','PrisonerPlaceAdd')->paginate(5, ['*'], 'APP');
        $PrisonerPlaceDeletes = LogTable::where('typ','PrisonerPlaceDelete')->paginate(5, ['*'], 'DPP');
        return view('miejscewieznialogi',compact('PrisonerPlaceAdds','PrisonerPlaceDeletes'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LogTable  $logTable
     * @return \Illuminate\Http\Response
     */
    public function show(LogTable $logTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LogTable  $logTable
     * @return \Illuminate\Http\Response
     */
    public function edit(LogTable $logTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LogTable  $logTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LogTable $logTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LogTable  $logTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(LogTable $logTable)
    {
        //
    }
}
