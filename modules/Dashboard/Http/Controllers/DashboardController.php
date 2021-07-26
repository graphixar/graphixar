<?php


namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $page_title = 'داشبورد';
        return view('dashboard::dashboard', compact('page_title'));
    }

}
