<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Term;
use Illuminate\Http\Request;

class termsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terms = Term::first();

        return view('admin.terms.index', compact('terms'));
    }

    public function edit(Term $term, int $id)
    {
        $terms = Term::findorfail($id);

        return view('admin.terms.edit', compact('term'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Terms  $terms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Term $term, int $id)
    {
        $input = $request->all();
        $validator = Validator::make($input);
        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $term=term::findOrFail($id);
        $term->update($request);

        return back();
    }
}
