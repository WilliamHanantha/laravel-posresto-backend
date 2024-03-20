<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index(){
        $discount = Discount::all();

        return response()->json([
            'status' => 'success',
            'data' => $discount
        ], 200);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'value' => 'required',
        ]);

        $discount = Discount::create($request->all());

        return response()->json([
            'status' => 'success',
            'data' => $discount
        ], 200);
    }

    public function destroy($id)
    {
        $discount = Discount::find($id);

        if (!$discount) {
            return response()->json([
                'status' => 'error',
                'message' => 'Discount not found',
            ], 404);
        }

        $discount->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Discount deleted successfully',
        ], 200);
    }
}
