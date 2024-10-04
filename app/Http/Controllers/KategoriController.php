<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    public function index()
    {

        return view('pages.kategori-produk.index');
    }

    public function data(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('categeories')
                ->select('categeories.*')
                ->where('categeories.deleted_at', null)
                ->get();

            return datatables()->of($data)

                ->addColumn('action', function ($data) {
                    $button = '<div class="d-flex justify-content-start">
                    <a class="btn btn-xs btn-warning mx-1" id="edit" data-id="' . $data->id . '">
                       <i class="fas fa-sm fa-edit text-white text-sm opacity-10 px-1"></i>
                    </a>

                    <a class="btn btn-xs btn-danger" id="hapus" data-id="' . $data->id . '">
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

        $data = DB::table('categeories')->insert([
            'name' => $request->name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if ($data) {
            return response()->json([
                'status' => 'success',
                'title' => 'Success',
                'message' => 'Add category',
            ], 200);
        }
    }

    public function getDataById(Request $request)
    {
        $category = DB::table('categeories')->where('id', $request->id)->first();

        if ($category) {
            return response()->json($category);
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->fails());
        }


        $data = DB::table('categeories')->where('id', $request->id)
            ->update([
                'name' => $request->name
            ]);

        if ($data) {
            return response()->json([
                'status' => 'success',
                'message' => 'Successfully update category'
            ]);
        }
    }


    public function destroy(Request $request)
    {
        $data = DB::table('categeories')->where('id', $request->id)->update([
            'deleted_at' => Carbon::now(),
        ]);

        if ($data) {
            return response()->json([
                'status' => 'success',
                'title' => "Success",
                'message' => 'Delete category'
            ], 200);
        }
    }
}
