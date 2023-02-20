<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
use App\Models\Formation;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$formations = Formation::withCount('candidats')->get();
        $formations = DB::table('formations')
        ->leftJoin('candidats', 'formations.id', '=', 'candidats.formation_id')
        ->select('formations.nom', DB::raw('COUNT(candidats.id) as candidats_count'))
        ->groupBy('formations.nom')
        ->get();
        $referentiels = DB::table('referentiels')
            ->leftJoin('formations', 'referentiels.id', '=', 'formations.referentiel_id')
            ->select('referentiels.type_id', DB::raw('COUNT(formations.id) as formations_count'))
            ->groupBy('referentiels.type_id')
            ->get();
        $candidats = DB::table('candidats')
            ->select('sexe', DB::raw('COUNT(id) as candidats_count'))
            ->groupBy('sexe')
            ->get();    
        $formationR = DB::table('formations')
            ->select('referentiel_id', DB::raw('COUNT(id) as formations_count'))
            ->groupBy('referentiel_id')
            ->get();
        $ageRanges = DB::table('candidats')
            ->select(DB::raw('TRUNCATE((YEAR(CURDATE()) - YEAR(age)) / 10, 0) * 10 as age_range'), DB::raw('COUNT(id) as candidats_count'))
            ->groupBy('age_range')
            ->get();
        $types = Type::all();    
        $nbEnCours = Formation::where('isStarted', 0)->count();
        $nbEnAttente = Formation::where('isStarted', 1)->count();
        return view('admin.dashboard', compact('formations','referentiels','types','candidats','formationR','ageRanges','nbEnCours','nbEnAttente'));
        // return view('admin.dashboard');
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
