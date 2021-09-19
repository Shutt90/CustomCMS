<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Term;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;


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

        return view('admin.terms.edit', compact('terms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Terms  $terms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {

        Term::where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
            ]);

        return redirect('/admin/terms');
    }
}
