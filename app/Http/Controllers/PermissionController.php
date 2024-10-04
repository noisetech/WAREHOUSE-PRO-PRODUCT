<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Laravel\Ui\Presets\React;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function index()
    {
        return view('pages.permission.index');
    }

    public function data(Request $request)
    {
        if ($request->ajax()) {

            $data = Permission::all();

            return datatables()->of($data)

                ->addColumn('action', function ($data) {
                    $button = '<div class="d-flex justify-content-start">
                    <a class="btn btn-sm btn-warning mx-1" id="edit" data-id="' . $data->id . '">
                       <i class="fas fa-sm fa-edit text-white text-sm opacity-10 px-1"></i>
                    </a>

                    <a class="btn btn-sm btn-danger" id="hapus" data-id="' . $data->id . '">
                <i class="fas fa-sm fa-trash text-white text-sm opacity-10 px-1"></i>
                    </a>

                </div>';

                    return $button;
                })
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->toJson();
        }
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }


        $permission = new Permission();
        $permission->name = $request->name;
        $permission->guard_name = 'web';
        $permission->save();

        if ($permission) {
            return response()->json([
                'status' => 'success',
                'title' => 'Success',
                'message' => 'Add Permissions'
            ], 200);
        }
    }


    public function getDataById(Request $request)
    {
        $permission = Permission::find($request->id);

        if ($permission != null || !empty($permission)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Successfully get data',
                'data' => $permission
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'error' => 'Something went wrong'
            ], 500);
        }
    }

    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $permission = Permission::find($request->id);
        $permission->name = $request->name;
        $permission->guard_name = 'web';
        $permission->save();

        if ($permission) {
            return response()->json([
                'status' => 'success',
                'message' => 'Successfully updated permission'
            ], 200);
        }
    }


    public function destroy(Request $request)
    {
        $permission = Permission::findOrFail($request->id);

        $permission->delete();

        if ($permission) {
            return response()->json([
                'status' => 'success',
                'message' => 'Success delete permission'
            ], 200);
        }
    }
}
