<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\JoinResource;
use App\Models\Join;

class JoinsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $list = Join::latest();

            return JoinResource::collection($list->paginate());
        }

        return view('admin.joins.index');
    }
}
