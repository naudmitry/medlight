<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\StoreHelpDesk;
use App\Models\Site\HelpDesk;

class HelpDeskController extends Controller
{
    /**
     * @param StoreHelpDesk $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store(StoreHelpDesk $request)
    {
        $helpDesk = new HelpDesk();
        $helpDesk->name = $request->get('name');
        $helpDesk->surname = $request->get('surname');
        $helpDesk->phone = $request->get('phone');
        $helpDesk->email = $request->get('email');
        $helpDesk->message = $request->get('message');
        $helpDesk->save();

        return response('MF000');
    }
}
