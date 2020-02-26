<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function dashboard()
    {
        $menus = [
            [
                'title' => '加盟申请',
                'link' => route('admin.joins.index'),
            ],
        ];

        return view('admin.pages.dashboard', compact('menus'));
    }
}
