<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Criteria;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    public function index()
    {
        $criterias= Criteria::all();
        return view('pages.criteria.list-criteria', compact('criterias'));
    }

    public function create()
    {
        return view('pages.criteria.add-criteria');
    }

    public function store(Request $request)
    {
        $data = $request->only('name', 'point');
        Criteria::create($data);
        return redirect()->route('criteria.index');
    }

    public function edit($id)
    {
        $criteriaById = Criteria::find($id);

        return view('pages.criteria.edit-criteria', compact('criteriaById'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->only('name', 'point');
        $criteria = Criteria::find($id);    
        $criteria->update($data);
        return redirect()->route('criteria.index');
    }
    
    public function destroy($id)
    {
        $criteria = Criteria::find($id)->delete();
        return redirect()->back();
    }
}
