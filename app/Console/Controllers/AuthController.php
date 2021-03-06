<?php

namespace App\Console\Controllers;

use App\Http\Controllers\Controller;
use Swift\Http\Request;
use Swift\Http\Response;

/**
 * Class AuthController
 * @package App\Console\Controllers
 */
class AuthController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function login(Request $request): Response
    {
        if ($request->method() === 'POST') {
            // save auth
            $request->session()->set('auth', [
                'user_id' => 1
            ]);

            return redirect('/console');
        }

        return view('auth/login');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function forgot(Request $request): Response
    {
        if ($request->isAjax()) {
            // do action
        }

        return view('auth/forgot');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function reset(Request $request): Response
    {
        if ($request->isAjax()) {
            // do action
        }

        return view('auth/reset');
    }
}
