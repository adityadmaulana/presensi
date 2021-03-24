<?php

namespace App\Http\Controllers;

use App\Models\UserProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return view ('project');
    }

    public function userProject()
    {
        $data = UserProject::all()->where('user_id',Auth::id());
        return view('user.project', compact('data'));
    }

    public function m_project()
    {
        $data = Project::all();
        return view('admin.m_project', compact('data'));
    }
}
