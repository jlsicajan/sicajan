<?php

namespace App\Http\Controllers\Admin;

use App\Knowledge;
use App\Semester;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class KnowledgeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $knowledge_of_today = Knowledge::where('published_at', '=', date('Y-m-d'))->first();

        $learning_today = $knowledge_of_today ? $knowledge_of_today->knowledge : "Nothing for today";

        $data = ['semesters' => Semester::all(), 'learning_today' => $learning_today];
        return view('admin.knowledge.index')->with($data);
    }

    public function save(){
        $learn = Input::get('learn');

        $today = Knowledge::firstOrNew(array('published_at' => date('Y-m-d'), 'user_id' => Auth::id()));
        $today->knowledge = $learn;
        $today->user_id = Auth::id();
        $today->save();

    }
}
