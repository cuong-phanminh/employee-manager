<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CriteriaRequest;
use App\Http\Requests\UpdateCriteriaRequest;
use App\Repositories\Criterias\CriteriaRepositoryInterface;
use App\Models\Criteria;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    protected $criteriaRepository;

    public function __construct(CriteriaRepositoryInterface $criteriaRepository){
        $this->criteriaRepository = $criteriaRepository;
    }

    public function index()
    {
        // $criterias= Criteria::all();
        $criterias= $this->criteriaRepository->getAll();
        return view('pages.criteria.list-criteria', compact('criterias'));
    }

    public function create()
    {
        return view('pages.criteria.add-criteria');
    }

    public function store(CriteriaRequest $request)
    {
        $data = $request->only('name', 'point');
        // Criteria::create($data);
        $criteria = $this->criteriaRepository->create($data);
        return redirect()->route('criteria.index');
    }

    public function edit($id)
    {
        // $criteriaById = Criteria::find($id);
        $criteriaById = $this->criteriaRepository->find($id);
        return view('pages.criteria.edit-criteria', compact('criteriaById'));
    }
    public function update(UpdateCriteriaRequest $request, $id)
    {
        $data = $request->only('name', 'point');
        // $criteria = Criteria::find($id);    
        // $criteria->update($data);
        $criteria = $this->criteriaRepository->update($id, $data);
        return redirect()->route('criteria.index');
    }
    
    public function destroy($id)
    {
        $criteria = Criteria::find($id)->delete();
        $criteria = $this->criteriaRepository->delete($id);
        return redirect()->back();
    }
}
