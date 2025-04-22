<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PerfumeResource;
use App\Models\Perfume;
use Illuminate\Http\Request;

class GetPerfumesController extends Controller
{
    public function getAllPerfumes()
    {
        return response()->json(PerfumeResource::collection(Perfume::all()));
    }
    public function getPerfume(Request $request)
    {
        return response()->json(new PerfumeResource(Perfume::find($request->perfumeID)));
    }
}
