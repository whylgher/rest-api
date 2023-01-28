<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SkillController extends Controller
{
    public function index()
    {
        return response()->json("Skill index");
    }

    public function show(Skill $skill)
    {
        return $skill;
    }

    public function store(StoreSkillRequest $request)
    {
        Skill::create($request->validated());
        return response()->json('Skill Created');
    }

    public function update(StoreSkillRequest $request, Skill $skill)
    {
        $skill->update($request->validate([]));
        return response()->json("Skill updated");
    }

    public function destroy(Skill $id)
    {
        $skill = Skill::find($id);
        $skill->delete();
    }
}
