<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Gender;
use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;
use str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $candidates = Candidate::paginate(3);
        return view('home', compact('candidates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('candidate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Candidate::create([
            'full_name'=>$request->full_name,
            'dob'=>$request->dob,
            'pob'=>$request->pob,
            'gender'=>$request->gender,
            'year_exp'=>$request->year_exp,
            'last_salary'=>$request->last_salary
        ]);

        return redirect('home')
        ->with('danger', 'Data Tidak Berhasil Disimpan!')
        ->with('success', 'Data Berhasil Disimpan!');
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
        $editCandidates = Candidate::Where($id);
        return view('candidate.edit', compact('editCandidates'));
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
        $upCandidates = Candidate::Where($id);
        $upCandidates->update($request->all());

        return redirect('home')
        ->with('danger', 'Data Tidak Berhasil Diupdate!')
        ->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Candidate::Where($id);
        $del->delete();

        return back('home');
    }
}
