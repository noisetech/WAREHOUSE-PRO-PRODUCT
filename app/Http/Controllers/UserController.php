<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.user.index');
    }


    public function data(Request $request)
    {
        if ($request->ajax()) {
            $data = User::all();

            return datatables()->of($data)
                ->addColumn('role', function ($data) {})
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'error' => $validator->errors()
            ], 422);
        }

        DB::beginTransaction();

        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt('password');
            $user->save();


            $role = Role::findOrFail($request->role);

            $user->assignRole($role->name);
            DB::commit();


            return response()->json([
                'status' => 'success',
                'message' => 'Add Users',
                'title' => 'success'
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }

    public function listRole(Request $request)
    {
        if ($request->has('q')) {

            $result = [];

            $data = Role::select('*')->where(DB::raw('LOWER(name)'), 'LIKE', '%' . strtolower(request()->q))->get();


            foreach ($data as $d) {
                $result = [
                    'id' => $d->id,
                    'text' =>  $d->name
                ];
            }

            return response()->json($result);
        } else {
            $result = [];

            $data = Role::select('*')->get();

            foreach ($data as $d) {
                $result[] = [
                    'id' => $d->id,
                    'text' => $d->name
                ];
            }

            return response()->json($result);
        }
    }


    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'error' => $validator->errors()
            ], 422);
        }
        DB::beginTransaction();
        try {
            if (!empty($request->password) || $request->password  != null) {
                $user = User::findOrFail($request->id);
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = bcrypt('password');
                $user->save();
                $user->assignRole($request->role);
                DB::commit();
                return response()->json([
                    'status' => 'success',
                    'message' => 'Add Users',
                    'title' => 'success'
                ], 200);
            } else {

                $user = User::findOrFail($request->id);
                $user->name = $request->name;
                $user->email = $request->email;
                $user->save();
                $user->assignRole($request->role);
                DB::commit();


                return response()->json([
                    'status' => 'success',
                    'message' => 'Add Users',
                    'title' => 'success'
                ], 200);
            }
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }



    public function destroy(Request $request)
    {
        $user = User::findOrFail($request->id);

        $user->delete();

        if ($user) {
            return response()->json([
                'status' => 'success',
                'message' => 'User deleted',
                'title' => 'Success',
            ], 200);
        }
    }
}
