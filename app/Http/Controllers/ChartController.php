<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index()
    {
        $user = User::select(DB:raw("COUNT(*)  as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB:raw("Month(created_ad)"))
            ->pluck('count');

        $months = User::select(DB:raw("Month(created_ad)  as Month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB:raw("Month(created_ad)"))
            ->pluck('month');

        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0,);
        foreach($months as $index => $month)
        {
            $datas[$month] =  $users[$index];
        }
        return view('chart', compact('datas'));
    }
}
