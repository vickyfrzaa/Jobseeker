<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Gender;
use App\Models\Candidate;
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
        $data['title'] = 'Candidates';
        $data['q'] = $request->get('q');
        $data['candidates'] = Candidate::Where('full_name', 'like'. '%' . $data['q'] . '%')
        ->get();
        return view('home', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data['title'] = 'candidates';
        $data['candidates'] = Candidate::all();
        return view('create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'candidate_id'=>'required|numeric|unique:Candidate,candidate_id',
            'full_name'=>'required',
            'dob'=>'required',
            'pob'=>'required',
            'gender'=>'required',
            'year_exp'=>'required',
            'last_salary'=>'required'
        ],[
            'candidate_id.required' => 'Field Is Empty',
            'full_name.required' => 'Field Is Empty',
            'dob.required' => 'Field Is Empty',
            'pob.required' => 'Field Is Empty',
            'gender.required' => 'Field Is Empty',
            'year_exp.required' => 'Field Is Empty',
            'last_salary.required' => 'Field Is Empty',
        ]);
        $data = [
            'candidate_id' => $request->id,
            'full_name' => $request->full_name,
            'dob' => $request->dob,
            'pob' => $request->pob,
            'gender' => $request->gender,
            'year_exp' => $request->year_exp,
            'last_salary' => $request->last_salary,
        ];

        Candidate::create($data);
        return 'Hi';
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
