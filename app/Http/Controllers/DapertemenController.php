<?php

namespace App\Http\Controllers;

use App\Models\Dapertemen;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DapertemenController extends Controller
{
    public function index() {}

    public function data(Request $request) {}


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
                'title' => 'success',
                'message' => 'Add Dapertemen'
            ]);
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

        if($dapertemen){
            return response()->json([
                
            ])
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
