<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index()
    {
        $users = User::select(DB::raw("COUNT(*)  as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $months = User::select(DB::raw("Month(created_at)  as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');

        $datas = array(0,0,0,0,0,0,0);
        foreach($months as $index => $month)
        {
            $datas[$month-1] =  $users[$index];
        }
        return view('chart', compact('datas'));
    }

//     public function dias(){
//         $users = User::select(DB::raw("COUNT(*)  as count"))
//         ->whereDay('created_at', date('D'))
//         ->groupBy(DB::raw("Day(created_at)"))
//         ->pluck('count');

//         $days = User::select(DB::raw("Day(created_at)  as day"))
//             ->whereDay('created_at', date('D'))
//             ->groupBy(DB::raw("Day(created_at)"))
//             ->pluck('day');

//     $datas = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
//     foreach($days as $index => $day)
//     {
//         $datas[$day-1] =  $users[$index];
//     }
//     return view('chart', compact('datas'));
//     }
}
