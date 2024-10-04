<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MasterModulController extends Controller
{
    public function index()
    {
        return view('pages.master-moduls.index');
    }

    public function data(Request $request)
    {
        if ($request->ajax()) {
            $data =
        }
    }

    public function store(Request $request)
    {
        $valdiator = Validator::make($request->all(), [
            'modul_name' => 'required',
            'modul_end_point' => 'required',
        ]);

        if ($valdiator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $valdiator->errors()
            ], 422);
        }

        $data = DB::table('master_moduls')->insert([
            'modul_name' => $request->modul_name,
            'modul_end_point' => $request->modul_end_point,
            'modul_parnet' => $request->modul_parent ? $request->modul_parent : null
        ]);

        if ($data) {
            return response()->json([
                'status' => 'success',
                'message' => 'Add modul',
                'title' => 'success'
            ], 200);
        }
    }

    public function update(Request $request) {}

    public function destroy(Request $request)
    {
        $data = DB::table('master_moduls')->where('id', $request->id)
            ->update([
                'is_deleted' => true,
                'updated_at' => Carbon::now()
            ]);

        if ($data) {
            return response()->json([
                'status' =>  'success',
                'message' => 'deleted master moduls',
                'title' => 'Success'
            ], 200);
        }
    }
}
