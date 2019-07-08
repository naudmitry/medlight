<?php


namespace App\Http\Controllers\Site;


use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return redirect()->route('site.coming-soon.index');
    }

    public function comingSoon()
    {
        return view('salon.coming_soon.index');
    }
}