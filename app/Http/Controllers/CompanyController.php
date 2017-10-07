<?php

namespace App\Http\Controllers;

use App\CompanyPostModel;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /*
     * edit company post
     * @param int $id
     * @param int $companyId
     */
    public function edit($id, $companyId)
    {
        $post = CompanyPostModel::join('types as ty', 'ty.id', '=', 'cp.type_id')
        ->where('cp.id', $id)->where('cp.company_id', $companyId)->first();

        return view('test', compact('post'));
    }

    /*
     * update company post
     * @param int $id
     * @param int $companyId
     */
    public function update($id,$companyId)
    {
        $data = array_except(request()->all(), ['_token', '_method']);

        CompanyPostModel::where('id', $id)
            ->where('company_id', $companyId)
            ->update($data);

        return redirect("/edit/".$id.'/'.$companyId);
    }

    /*
     * delete company post
     * @param int $id
     * @param int $companyId
     */
    public function delete($id,$companyId)
    {
        CompanyPostModel::where('id', $id)
            ->where('company_id', $companyId)
            ->delete();

        return redirect();
    }
}
