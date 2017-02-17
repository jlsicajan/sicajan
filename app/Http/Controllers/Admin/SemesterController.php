<?php

namespace App\Http\Controllers\Admin;

use App\Semester;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Yajra\Datatables\Facades\Datatables;

class SemesterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($number)
    {
        $data = ['semester_number' => $number];
        return view('admin.semester.index')->with($data);
    }

    public function ajax()
    {
        $semester_datas = Semester::all();
        $data = [];
        foreach ($semester_datas as $semester_data){
            array_push($data, ['DT_RowClass' => 'tr-content', 'DT_RowId' => $semester_data->id, $semester_data->name]);
        }
        return ['data' => $data];
    }

    public function save(){
        $semester = new Semester();
        $semester->name = Input::get('name');
        $semester->save();
        $data = array('message' => 'Dato ingresado correctamente.');
        return $data;
    }

    public function getSemesters(){
        $semesters = Semester::select(['name']);

        return Datatables::of($semesters)->make(true);
    }

}
