<?php
/**
 * Created by PhpStorm.
 * User: hatamiarash7
 * Date: 2018-09-02
 * Time: 11:53
 */

namespace App\Http\Controllers\CAdmin;


use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function dashboard()
    {
        return view('CAdmin.dashboard');
    }
}
