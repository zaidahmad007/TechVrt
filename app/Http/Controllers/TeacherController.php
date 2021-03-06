<?php

namespace App\Http\Controllers;

use App\Models\TeacherDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function teacherdeshboard()
    {
        return view('teacher.teacher_deshboad');
    }
    public function addteacherdetail()
    {
        return view('teacher.addteacherdetail');
    }
    //teacherdetail
    public function teacherdetail(Request $req)
    {
        $user=Auth::user();
        $teacher=new TeacherDetail();
        $teacher->state=$req->state;
        $teacher->city=$req->City;
        $teacher->district=$req->District;
        $teacher->highest_qualification=$req->hq;
        $teacher->specialization=$req->Specialization;
        $teacher->experience=$req->Experience;
        $teacher->board=$req->board;
        $teacher->save();
        return redirect('teacherdeshboad');
    }
}
