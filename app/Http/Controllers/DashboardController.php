<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Posting;
use App\Models\Category;
use App\Models\Testimoni;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPostingan = Posting::count();
        $totalAllUsers = User::count();
        $totalAdmin = User::where('role_id','1')->count();
        $totalAuthor = User::where('role_id','2')->count();
        $totalCategories = Category::count();
        $totalTestimonis = Testimoni::count();
        $totalKonsultasi = Konsultasi::count();

        return view('dashboard.index', compact('totalPostingan', 'totalAllUsers', 'totalAdmin',
    'totalAuthor', 'totalAuthor', 'totalCategories', 'totalTestimonis', 'totalKonsultasi'));
    }
}
