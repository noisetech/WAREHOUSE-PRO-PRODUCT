<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        return view('pages.role.index');
    }

    public function data(Request $request)
    {
        if ($request->ajax()) {
            $data = Role::all();

            return datatables()->of($data)
                ->addColumn('permission', function ($data) {
                    $permissions = '';
                    $permissions = '<div class="d-flex flex-wrap">';
                    foreach ($data->getPermissionNames() as $permission) {
                        $permissions .= '<button class="btn btn-sm btn-success mb-1 mt-1 mx-1">' . $permission . '</button>';
                    }
                    $permissions .= '</div>';
                    return $permissions;
                })
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
                ->rawColumns(['action', 'permission'])
                ->toJson();
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'permission' => 'required'
        ]);


        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $roles = new Role();
        $roles->name = $request->name;
        $roles->guard_name = 'web';
        $roles->save();


        $roles->permissions()->attach($request->permission);

        if ($roles) {
            return response()->json([
                'status' => 'success',
                'message' => 'Add roles'
            ], 200);
        }
    }


    public function listPermission(Request $request)
    {
        if ($request->has('q')) {
            $result = [];

            $data = Permission::select('*')->where(DB::raw('LOWER(name)'), 'LIKE', '%' . strtolower(request()->q))->get();

            foreach ($data as $d) {
                $result[] = [
                    'id' => $d->id,
                    'text' => $d->name
                ];
            }

            return response()->json($result);
        } else {

            $result = [];

            $data = Permission::all();

            foreach ($data as $d) {
                $result[] = [
                    'id' => $d->id,
                    'text' => $d->name
                ];
            }

            return response()->json($result);
        }
    }


    public function getDataById(Request $request)
    {
        $roles = Role::findOrFail($request->id);

        return response()->json($roles);
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

        $roles = Role::find($request->id);
        $roles->name = $request->name;
        $roles->save();

        $roles->permissions()->sync($request->permission);


        if ($roles) {
            return response()->json([
                'status' => 'success',
                'message' => 'Updated role'
            ], 200);
        }
    }

    public function listPermissionByRole(Request $request)
    {
        $roles = Role::find($request->id);

        $permissions = $roles->permissions;

        return response()->json($permissions);
    }


    public function destroy(Request $request)
    {
        $roles = Role::findOrFail($request->id);

        $roles->delete();

        if ($roles) {
            return response()->json([
                'status' => 'success',
                'message' => 'Delete role'
            ], 200);
        }
    }
}
