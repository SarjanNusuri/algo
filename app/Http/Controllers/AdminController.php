<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Portfolio;
use App\Models\Proyek;
use App\Models\Services;
use App\Models\Message;

class AdminController extends Controller
{
    // Overview dashboard
    public function index()
    {
        $projects = Proyek::select(
            DB::raw("MONTH(created_at) as month"),
            DB::raw("COUNT(*) as total")
        )
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $projectLabels = $projects->map(function ($p) {
            return date('M', mktime(0, 0, 0, $p->month, 1));
        });

        $projectData = $projects->pluck('total');

        // Data Services per kategori (Doughnut Chart)
        $services = Services::select('jenis', DB::raw('count(*) as total'))
            ->groupBy('jenis')
            ->get();

        $serviceLabels = $services->pluck('jenis');
        $serviceData = $services->pluck('total');

        $proyekCount = Proyek::count();

        return view('admin.index', compact(
            'projectLabels',
            'projectData',
            'serviceLabels',
            'serviceData',
            'proyekCount'
        ));
    }

    public function profil()
    {
        return view('admin.profil');
    }

    public function layanan()
    {
        $services = Services::all();
        return view('admin.layanan', compact('services'));
    }

    public function portofolio()
    {
        $portfolios = Portfolio::all();
        return view('admin.portofolio', compact('portfolios'));
    }

    public function pesan()
    {
        $messages = Message::all();
        return view('admin.pesan', compact('messages'));
    }

    public function pengguna()
    {
        return view('admin.pengguna');
    }

    public function pengaturan()
    {
        return view('admin.pengaturan');
    }
}
