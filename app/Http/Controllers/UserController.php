<?php

namespace App\Http\Controllers;

use App\CompanyPostModel;
use App\TypesModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function joblist()
    {
        $types = TypesModel::get();

        $possitions = CompanyPostModel::where('type_id', request()->choice)->get();

        return view('users.joblist', compact('types','possitions'));
    }

    public function jobDetails()
    {
        $jobDetails= CompanyPostModel::where('id', request()->id)->first();


        $requirements = explode("-", $jobDetails->requirements);

        return view('users.post_details',compact('jobDetails','requirements'));
    }
}
