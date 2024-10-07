<?php

namespace App\Http\Controllers;

use App\Models\Dapertemen;
use App\Models\Empeloye;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EmpeloyeController extends Controller
{
    public function index()
    {
        return view('pages.empeloye.index');
    }

    public function data(Request $request) {}

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'gender' => 'required',
            'last_education' => 'required',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ]);
        }

        $empeloye = new Empeloye();
        $empeloye->name = $request->name;
        $empeloye->number_empeloye = $request->number_empeloye;
        $empeloye->gender = $request->gender;
        $empeloye->phone = $request->phone;
        $empeloye->age = $request->age;
        $empeloye->birht_of_date = $request->birth_of_date;
        $empeloye->save();

        if ($empeloye) {
            return response()->json([
                'status' => 'success',
                'title' => 'Success',
                'message' => 'Add Empeloye'
            ]);
        }
    }


    public function getDataById(Request $request) {}

    public function update(Request $request) {}

    public function listDapertemen(Request $request)
    {
        if ($request->has('q')) {
            $result = [];

            $data = Dapertemen::select('*')->where(DB::raw('LOWER(name)'), 'LIKE', '%' . strtolower(request()->q))->get();

            foreach ($data as $d) {
                $result[] = [
                    'id' => $d->id,
                    'text' => $d->name
                ];
            }

            return response()->json($result);
        } else {
            $result = [];

            $data = Dapertemen::select('*')->get();

            foreach ($data as $d) {
                $result[] = [
                    'id' => $d->id,
                    'text' => $d->name
                ];
            }

            return response()->json($result);
        }
    }

    public function listJabatan(Request $request) {}


    public function destroy(Request $request)
    {
        $empeloye = Empeloye::findOrfail($request->id);

        $empeloye->delete();

        if ($empeloye) {
            return response()->json([
                'status' => 'success',
                'message' => 'Delete Empeloye',
                'title' => 'Success'
            ]);
        }
    }
}
