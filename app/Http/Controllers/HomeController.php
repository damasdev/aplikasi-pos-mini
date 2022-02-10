<?php

namespace App\Http\Controllers;

use App\Helper\DateFormater;
use App\Helper\StringFormater;
use App\Models\Pembelian;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Init Data
        $user = auth()->user();
        $start = date('Y-m-01');
        $end = date('Y-m-t');

        // Tanggal
        $date_between = DateFormater::between($start, $end);
        $tanggal = StringFormater::arrayToString($date_between);

        // Card Data
        $total_pembelian = Pembelian::select(DB::raw('SUM(total) as total'))->when(!$user->is_admin, function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->value('total');

        $total_penjualan = Penjualan::select(DB::raw('SUM(total) as total'))->when(!$user->is_admin, function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->value('total');

        // Grafik
        $penjualan = Penjualan::select(DB::raw('DATE(tanggal) as tanggal, SUM(total) as total'))
            ->when(!$user->is_admin, function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })->whereBetween('tanggal', [$start, $end])
            ->groupBy('tanggal')
            ->get()
            ->toArray();

        $data_penjualan = StringFormater::formatDate($penjualan, $date_between);

        $pembelian = Pembelian::select(DB::raw('DATE(tanggal) as tanggal, SUM(total) as total'))
            ->when(!$user->is_admin, function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })->whereBetween('tanggal', [$start, $end])
            ->groupBy('tanggal')
            ->get()
            ->toArray();

        $data_pembelian = StringFormater::formatDate($pembelian, $date_between);

        return view('home', [
            'penjualan' => $total_penjualan,
            'pembelian' => $total_pembelian,
            'tanggal' => $tanggal,
            'grafik' => [
                'penjualan' => $data_penjualan,
                'pembelian' => $data_pembelian,
            ]
        ]);
    }
}
