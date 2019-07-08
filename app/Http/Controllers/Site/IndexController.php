<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $preview = $request->get('preview');

        if ($preview) {
            return view('salon.index');
        }

        return redirect()->route('site.coming-soon.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function comingSoon()
    {
        return view('salon.coming_soon.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contacts()
    {
        return view('salon.contacts.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function services()
    {
        return view('salon.services.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('salon.about.index');
    }
}