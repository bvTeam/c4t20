<?php

namespace App\Http\Controllers;

use App\CompanyPostModel;
use App\TypesModel;
use Illuminate\Http\Request;
use Happyr\LinkedIn\LinkedIn;

class UserController extends Controller
{
    public function joblist()
    {
        $types = TypesModel::get();

        $possitions = CompanyPostModel::where('type_id', request()->choice)->get();

        return view('users.joblist', compact('types','possitions'));
    }

    public function jobDetails(Request $request)
    {
        $jobDetails= [];

        $requirements = [];

        $linkedIn=new LinkedIn('77mpq4ed5ejtuu', 'Cg9XfO2KQWLN1ANy');
//dd($user=$linkedIn->get('v1/people/~'));
        if ($request->candidate) {

            //we know that the user is authenticated now. Start query the API
            $user=$linkedIn->get('v1/people/~');
            dd($user);
//
//            exit();
//        } elseif ($linkedIn->hasError()) {
//            dd('34256');
//            echo "User canceled the login.";
//            exit();
        }

        if(!$linkedIn->isAuthenticated()) {
            $linkedIn = new LinkedIn('77mpq4ed5ejtuu', 'Cg9XfO2KQWLN1ANy');

            $scope = 'r_basicprofile';
            $urlLinked = $linkedIn->getLoginUrl(['scope' => $scope]);
        }

        $urlLinked = '';
 
        return view('users.post_details',compact('jobDetails','requirements','urlLinked'));
    }

    public function linkedIn()
    {



//if not authenticated
    }
}
