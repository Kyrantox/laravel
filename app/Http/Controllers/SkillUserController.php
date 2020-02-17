<?php

namespace App\Http\Controllers;

use App\Skill_user_;
use Illuminate\Http\Request;

class SkillUserController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Skill_user_::class, 'skill');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $skills_u = Skill_user_::latest()->paginate(5);

        return view('skills.index',compact('skills_u'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('skills.create');
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'logo' => 'required',
        ]);

        Skill_user_::create($request->all());

        return redirect()->route('skills.index')
            ->with('success','Skill created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skill_user_  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill_user_ $skill)
    {
        //
        return view('skills.show',compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skill_user_  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill_user_ $skill)
    {
        //
        return view('skills.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skill_user_  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill_user_ $skill)
    {
        $request->validate([
            'level' => 'required'
        ]);

        $skill->update($request->all());

        return redirect()->route('skills.index')
            ->with('success','Skill updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skill_user_  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill_user_ $skill)
    {
        //
        $skill->delete();

        return redirect()->route('skills.index')
            ->with('success','Skill deleted successfully');
    }
}
