<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | Controller ini menangani otentikasi pengguna yang sudah ada dan
    | mengarahkan mereka ke halaman dashboard.
    |
    */

    use Authenticatable;

    /**
     * Ke mana pengguna akan diarahkan setelah berhasil login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Membuat instance controller baru.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
