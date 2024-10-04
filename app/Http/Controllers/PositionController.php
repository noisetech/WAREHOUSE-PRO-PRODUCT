<?php

namespace App\Http\Controllers;

use App\Models\Dapertemen;
use App\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PositionController extends Controller
{
    public function index()
    {
        return view('pages.jabatan.index');
    }

    public function data(Request $request)
    {
        if ($request->ajax()) {

            $data = DB::table('positions')
                ->select(
                    'positions.*',
                    'dapertemens.name as dapertemen'
                )
                ->join('dapertemens', 'dapertemens.id', '=', 'positions.dapertemen_id')
                ->get();

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
            'name' => 'required',
            'dapertemen' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $position = new Position();
        $position->name = $request->name;
        $position->dapertemen_id = $request->dapertemen;
        $position->save();

        if ($position) {
            return response()->json([
                'status' => 'success',
                'message' => 'Add Position'
            ], 200);
        }
    }

    public function getDataById(Request $request)
    {
        $position = Position::findOrFail($request->id);

        return response()->json($position);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'dapertemen' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $position = Position::findOrFail($request->id);
        $position->name = $request->name;
        $position->dapertemen_id = $request->dapertemen;
        $position->save();

        if ($position) {
            return response()->json([
                'status' => 'success',
                'message' => 'Updated Position'
            ], 200);
        }
    }

    public function listDapertemenByPosition(Request $request)
    {
        $dapertemen = DB::table('positions')
            ->select(
                'positions.*',
                'dapertemens.id as dapertemen_id',
                'dapertemens.name as dapertemen_name'
            )
            ->join('dapertemens', 'dapertemens.id', '=', 'positions.dapertemens_id')
            ->where('positions.id', $request->posistion_id)
            ->first();

        if ($dapertemen != null || !empty($dapertemen)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data dapertemen by position',
                'data' => $dapertemen
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Something wrong'
            ], 400);
        }
    }

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

            $data = Dapertemen::all();

            foreach ($data as $d) {
                $result[] = [
                    'id' => $d->id,
                    'text' => $d->name
                ];
            }

            return response()->json($result);
        }
    }


    public function destroy(Request $request)
    {
        $position = Position::findOrFail($request->id);

        $position->delete();

        if ($position) {
            return response()->json([
                'status' => 'success',
                'message' => 'Delete Position',
                'title' => 'Success'
            ], 200);
        }
    }
}
