<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\Visiteur;
use DB;


class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visiteurs = Visiteur::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
        ->get();
$chart = Charts::database($visiteurs, 'bar', 'highcharts')
      ->title("Visiteurs Par Mois")
      ->elementLabel("Total Visiteurs")
      ->dimensions(1000, 500)
      ->responsive(false)
      ->groupByMonth(date('Y'), true);
      $chart1 = Charts::database($visiteurs,'line', 'highcharts')
      ->elementLabel("Total Visiteurs")
      ->title('Visiteurs Par Jours')
      ->dimensions(1000, 500)
      ->responsive(false)
      ->groupByDay();
return view('chart.chart',compact('chart' ,'chart1'));



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
}
