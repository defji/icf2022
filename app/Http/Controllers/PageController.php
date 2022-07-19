<?php

namespace App\Http\Controllers;

use App\Constants\Roles;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{


    /**
     * Shows relevant page
     * @return Application|Factory|View|void
     */
    public function show()
    {
        $page = request()->segment(1);
        $user = auth()->user()->load('roles');
        if (in_array($page, array_keys(Roles::mapping()))) {
            if ($user->hasAnyRole(Roles::mapping()[$page])) {
                return view($page);
            }
            abort(404);
        } elseif ($page === 'dashboard') {
            return view('dashboard');
        }
        abort(404);
    }
}
