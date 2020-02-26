<?php

namespace App\Http\Controllers;

use App\Models\Join;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //首页
    public function root()
    {
        return view('pages.root');
    }

    //企业介绍页
    public function about()
    {
        return view('pages.about');
    }

    //成为服务商
    public function join()
    {
        return view('pages.join');
    }

    //服务与支持
    public function service()
    {
        return view('pages.service');
    }

    //加盟
    public function addJoin(Request $request, Join $join)
    {
        $data = $request->only([
            'name',
            'mobile'
        ]);

        $join->create($data);

        return;
    }

}
