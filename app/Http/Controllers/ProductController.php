<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index() {}

    public function data(Request $request) {}

    public function listKategori(Request $request)
    {
        if ($request->has('q')) {
            $result = [];

            $category = DB::table('categeories')->select('*')
                ->where('categeories.deleted_at', null)
                ->where(DB::raw('LOWER(categeories.name)'), 'LIKE', '%' . strtolower(request()->q), '%')
                ->get();

            foreach ($category as $c) {
                $result[] = [
                    'id' => $c->id,
                    'text' => $c->name
                ];
            }

            return response()->json($result);
        } else {

            $category = DB::table('categeories')->select('*')
                ->where('categeories.deleted_at', null)
                ->get();

            foreach ($category as $c) {
                $result[] = [
                    'id' => $c->id,
                    'text' => $c->name
                ];
            }

            return response()->json($result);
        }
    }


    public function simpan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'sku' => 'required',
            'category' => 'required',
            'price' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ]);
        }

        DB::beginTransaction();

        try {
            $product = DB::table('products')->insertGetId([
                'name' => $request->name,
                'sku' => $request->sku,
                'price' => $request->price,
                'categeories_id' => $request->category,
                'hpp' => $request->hpp
            ]);


            if ($request->has('image')) {
                $image = $request->file('image')->store('assets/image-products', 'public');

                DB::table('products')->where('id', $product)->update([
                    'image' => $image
                ]);
            }


            DB::commit();

            return response()->json([
                'status' => 'Success',
                'message' => 'Add products'
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }


    public function hapus(Request $request)
    {
        $product = DB::table('products')->where('id', $request->id)->update([
            'deleted_at' => Carbon::now()
        ]);


        if ($product) {
            return response()->json([
                'status' => 'success',
                'message' => 'Product deleted'
            ], 200);
        }
    }
}
