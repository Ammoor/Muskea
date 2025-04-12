<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perfume;

class GetPerfumesController extends Controller
{
    public function getAllPerfumes()
    {
        return response()->json(Perfume::all());
    }
    public function getPerfume(Request $request)
    {
        // return response()->json(Perfume::where('id', $request->perfumeID)->first());
        return response()->json(['image' => asset('Images/' . $request->perfumeID . '.webp')]);
    }
}
