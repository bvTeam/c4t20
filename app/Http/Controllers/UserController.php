<?php

namespace App\Http\Controllers;

use App\CCVModel;
use App\CompanyPostModel;
use App\TypesModel;
use Illuminate\Http\Request;
use Happyr\LinkedIn\LinkedIn;
use Illuminate\Support\Facades\Mail;

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
        $jobDetails= CompanyPostModel::where('id', request()->id)->first();

        $requirements = explode("-", $jobDetails->requirements);

        $linkedIn=new LinkedIn('77mpq4ed5ejtuu', 'Cg9XfO2KQWLN1ANy');

        if (request()->candidate) {

            $user=$linkedIn->get('v1/people/~');


            $data = [
                'firstname' => $user['firstName'],
                'lastname' => $user['lastName'],
                'headline' => $user['headline'],
                'url' => $user['siteStandardProfileRequest']['url']
            ];
        CCVModel::create($data);

        } elseif ($linkedIn->hasError()) {
            echo "User canceled the login.";
            exit();
        }

        $url = $linkedIn->getLoginUrl();

    $a = CCVModel::get();
        return view('users.post_details',compact('jobDetails','url','linkedIn','requirements','urlLinked','a'));
    }

    public function linkedIn()
    {

    }
}
