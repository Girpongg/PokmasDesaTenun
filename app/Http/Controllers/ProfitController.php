<?php

namespace App\Http\Controllers;

use App\Models\Expenditures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfitController extends Controller
{
    public function index()
    {
        $data['title'] = 'Laba Rugi';

        $expenditures = DB::table('expenditures')
            ->select(DB::raw('DATE_FORMAT(exp_date, "%Y-%m") as month'), DB::raw('SUM(total_price) as total_expenditure'))
            ->groupBy('month')
            ->get();

        $orders = DB::table('orders')
            ->select(DB::raw('DATE_FORMAT(order_date, "%Y-%m") as month'), DB::raw('SUM(total_price) as total_order'))
            ->groupBy('month')
            ->get();

        // Gabungkan data per bulan
        $months = $expenditures->pluck('month')
            ->merge($orders->pluck('month'))
            ->unique()
            ->sort()
            ->values();

        $pnl = [];

        foreach ($months as $month) {
            $total_expenditure = $expenditures->firstWhere('month', $month)->total_expenditure ?? 0;
            $total_order = $orders->firstWhere('month', $month)->total_order ?? 0;

            $total = $total_order - $total_expenditure;

            $pnl[] = [
                'month' => $month,
                'total' => $total
            ];
        }

        $data['pnls'] = $pnl;
        return view('admin.labarugi', $data);
    }
}
