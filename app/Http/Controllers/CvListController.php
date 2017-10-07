<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserCvModel;

class CvListController extends Controller
{
    public function cvList()
    {
        $usersCv = UserCvModel::all();
        return view('users.cv_list',compact('usersCv'));

    }
}
