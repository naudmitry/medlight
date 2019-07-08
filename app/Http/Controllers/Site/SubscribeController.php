<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\StoreSubscribe;
use App\Models\Subscribe;

class SubscribeController extends Controller
{
    /**
     * @param StoreSubscribe $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store(StoreSubscribe $request)
    {
        $email = $request->get('email');

        $subscribe = Subscribe::query()
            ->where('email', $email)
            ->first();

        if (empty($subscribe)) {
            $subscribe = new Subscribe;
            $subscribe->email = $request->get('email');
            $subscribe->save();
        }

        return response('MF000');
    }
}
