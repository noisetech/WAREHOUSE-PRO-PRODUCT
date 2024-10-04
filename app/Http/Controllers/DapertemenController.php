<?php

namespace App\Http\Controllers;

use App\Models\Dapertemen;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DapertemenController extends Controller
{
    public function index()
    {
        return view('pages.dapertemen.index');
    }

    public function data(Request $request)
    {
        if ($request->ajax()) {
            $data = Dapertemen::select('*')->orderBy('name', 'ASC')->get();

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


        $dapertemen = new Dapertemen();
        $dapertemen->name = $request->name;
        $dapertemen->is_active = true;
        $dapertemen->save();

        if ($dapertemen) {
            return response()->json([
                'status' => 'success',
                'title' => 'Success',
                'message' => 'Add Dapertemen'
            ]);
        }
    }


    public function getDataById(Request $request)
    {
        $dapertemen = Dapertemen::findOrFail($request->id);

        if ($dapertemen != null || !empty($dapertemen)) {
            return response()->json([
                'status' => 'success',
                'title' => 'Success',
                'message' => 'data dapertemen',
                'data' => $dapertemen
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Something wrong',
            ], 404);
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
                'error' => $validator->errors()
            ], 422);
        }

        $dapertemen = Dapertemen::findOrFail($request->id);

        $dapertemen->name = $request->name;
        $dapertemen->is_active = true;
        $dapertemen->save();

        if ($dapertemen) {
            return response()->json([
                'status' => 'success',
                'message' => 'Updated Dapertemen',
                'title' => 'Success'
            ], 200);
        }
    }


    public function destroy(Request $request)
    {
        $dapertemen = Dapertemen::find($request->id);

        $dapertemen->delete();

        if ($dapertemen) {
            return response()->json([
                'status' => 'success',
                'title' => 'Success',
                'message' => 'Delete Dapertemen'
            ]);
        }
    }
}
