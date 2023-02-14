<?php

namespace App\Http\Controllers;

use App\Models\University;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $universities = University::where('is_active', 1)->get();

        return view('backend.university.index', compact('universities'));
    }

    public function universities(Request $request)
    {

        if ($request->ajax()) {

            $universities = University::query();

            //Query start

            //pathway search
            if ($request->pathway != '') {

                $universities->where('pathway_provider', $request->pathway);

            }

            //Duolingo search
            if ($request->duolingo != '') {

                $universities->where('duolingo_start', '<=', $request->duolingo);

            }

            // Graduation->gpa /cgpa search
            if ($request->graduation_level == '1' && $request->cgpa != '' ) {

                $universities->where('ug_ac_req_gpa', '<=', $request->cgpa);

            }elseif ($request->graduation_level == '2' && $request->cgpa != ''){
                $universities->where('pg_ac_req_cgpa', '<=', $request->cgpa);
            }

            // Graduation->IELTS search
            if ($request->graduation_level == '1' && $request->ielts != '' ) {

                $universities->Where('ug_ielts_start', '<=', $request->ielts);

            }
            elseif ($request->graduation_level == '2' && $request->ielts != '' ){
                $universities->where('pg_ielts_start', '<=', $request->ielts);
            }

            //Query End


            $universities = $universities->orderBy('id', 'desc')->get();

            return Datatables::of($universities)
                ->blacklist(['action'])
                ->addIndexColumn()
                ->editColumn('ug_ac_req_education', function ($row) {
                    // return $row->ug_ac_req_education . ' GPA: ' . $row->ug_ac_req_gpa . ' Group: ' . $row->ug_ac_req_group . ' IELTS: ' . $row->ug_ielts_start;
                    return view('backend.university.table-action.ug-education', [
                        'row' => $row
                    ]);
                })
                ->editColumn('pg_ac_req_education', function ($row) {
                    // return $row->pg_ac_req_education . ' CGPA: ' . $row->pg_ac_req_cgpa . ' Subject: ' . $row->pg_ac_req_group . ' IELTS: ' . $row->pg_ielts_start;
                    return view('backend.university.table-action.pg-education', [
                        'row' => $row
                    ]);
                })
                ->editColumn('is_active', function ($row) {
                    $status = $row->is_active;
                    return view('backend.university.table-action.status', compact('status'));
                })
                ->addColumn('action', function ($row) {
                    $id = $row->id;
                    $status = $row->is_active;
                    return view('backend.university.action', compact('id', 'status'));
                })
                ->rawColumns(['action'])
                ->toJson();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.university.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        University::create([
            'name' => $request->name,
            'pathway_provider' => $request->pathway_provider,

            'ug_ac_req_education' => $request->ug_ac_req_education,
            'ug_ac_req_gpa' => $request->ug_ac_req_gpa,
            'ug_ac_req_group' => $request->ug_ac_req_group,
            'ug_is_active' => $request->ug_is_active,
            'ug_ielts_start' => $request->ug_ielts_start,
            'ug_ielts_end' => $request->ug_ielts_end,

            'pg_ac_req_education' => $request->pg_ac_req_education,
            'pg_ac_req_cgpa' => $request->pg_ac_req_cgpa,
            'pg_ac_req_group' => $request->pg_ac_req_group,
            'pg_is_active' => $request->pg_is_active,
            'pg_ielts_start' => $request->pg_ielts_start,
            'pg_ielts_end' => $request->pg_ielts_end,

            'oietc' => $request->oietc,
            'internal_test' => $request->internal_test,
            'moi' => $request->moi,
            'duolingo_is_active' => $request->duolingo_is_active,
            'duolingo_start' => $request->duolingo_start,
            'duolingo_end' => $request->duolingo_end,

            'pg_study_gap' => $request->pg_study_gap,
            'tution_fees' => $request->tution_fees,
            'scholarships' => $request->scholarships,
            'remarks' => $request->remarks
        ]);

        return redirect()->route('university.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $university = University::where('id', $id)->first();
        return view('backend.university.edit', compact('university'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        University::where('id', $id)->update([
            'name' => $request->name,
            'pathway_provider' => $request->pathway_provider,

            'ug_ac_req_education' => $request->ug_ac_req_education,
            'ug_ac_req_gpa' => $request->ug_ac_req_gpa,
            'ug_ac_req_group' => $request->ug_ac_req_group,
            'ug_is_active' => $request->ug_is_active,
            'ug_ielts_start' => $request->ug_ielts_start,
            'ug_ielts_end' => $request->ug_ielts_end,

            'pg_ac_req_education' => $request->pg_ac_req_education,
            'pg_ac_req_cgpa' => $request->pg_ac_req_cgpa,
            'pg_ac_req_group' => $request->pg_ac_req_group,
            'pg_is_active' => $request->pg_is_active,
            'pg_ielts_start' => $request->pg_ielts_start,
            'pg_ielts_end' => $request->pg_ielts_end,

            'oietc' => $request->oietc,
            'internal_test' => $request->internal_test,
            'moi' => $request->moi,
            'duolingo_is_active' => $request->duolingo_is_active,
            'duolingo_start' => $request->duolingo_start,
            'duolingo_end' => $request->duolingo_end,

            'pg_study_gap' => $request->pg_study_gap,
            'tution_fees' => $request->tution_fees,
            'scholarships' => $request->scholarships,
            'remarks' => $request->remarks
        ]);

        return redirect()->route('university.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $university = University::where('id', $id)->first();

        University::where('id', $id)->update([
            'is_active' => $university->is_active ? 0 : 1
        ]);

        return redirect()->route('university.index');
    }
}
