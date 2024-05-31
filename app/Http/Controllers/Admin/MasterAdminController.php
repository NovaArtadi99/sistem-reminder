<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use App\Rules\AdminEmailInsertCheckRule;
use App\Rules\AdminEmailUpdateCheckRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use App\Helpers\AdminHelper;
// use App\Helpers\MainHelper;

class MasterAdminController extends Controller
{
    public function index()
    {
        $list = AdminModel::all();

        $data = [
            'list' => $list,
            'menuActive' => 'master_admin'
        ];

        // $data = array_merge(AdminHelper::data_primary(), $data);

        return view('admin.masterAdmin.masterAdminList', $data);
    }

    function insert(Request $request)
    {
        $request->validate([
            'adm_name' => 'required',
            'adm_email' => [
                'required',
                'email',
                new AdminEmailInsertCheckRule()
            ],
            'adm_password' => 'required|confirmed',
            'adm_password_confirmation' => 'required',
        ]);

        $data_insert = $request->except(['_token','adm_password_confirmation']);
        $data_insert['adm_password'] = Hash::make($data_insert['adm_password']);
        AdminModel::create($data_insert);
    }

    function edit($admin_id)
    {
        $row = AdminModel::where('admin_id', $admin_id)->first();

        $data = [
            'row' => $row
        ];

        return view('admin.masterAdmin.masterAdminEditModal', $data);
    }

    function update(Request $request, $admin_id)
    {
        $request->validate([
            'adm_name' => 'required',
            'adm_email' => [
                'required',
                'email',
                new AdminEmailUpdateCheckRule($admin_id)
            ],
            'adm_password' => 'confirmed',
            'adm_password_confirmation' => '',
        ]);

        $data_update = $request->except(['_token','adm_password_confirmation']);
        if($request->input('adm_password')) {
            $data_update['adm_password'] = Hash::make($data_update['adm_password']);
        } else {
            unset($data_update['adm_password']);
        }
        AdminModel::where('admin_id', $admin_id)->update($data_update);
    }

    function delete($admin_id)
    {
        AdminModel::where('admin_id', $admin_id)->delete();
    }
}

