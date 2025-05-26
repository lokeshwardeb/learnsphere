<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.create_assignment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Assignment $assignment)
    {
        if(isset($_POST['create_assignment'])){
            $assignment->assignment_title = $request->assign_title;
            $assignment->assignment_desc = $request->assign_desc;
            $assignment->assignment_starting_date = $request->assign_starting_date;
            $assignment->assignment_submission_date = $request->assign_submission_date;

            $assignment->save();

            echo 'The post has been submitted';

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Assignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assignment $assignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assignment $assignment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assignment $assignment)
    {
        //
    }
}
