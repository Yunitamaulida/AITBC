<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Models\Penyakit;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    /**
     * index
     *
     * @return View
     */
    public function index()
    {
        //get posts
        $pakar = User::where('level', 'pakar')->count();
        $diagnonsa = Diagnosa::all();
        $penyakit = Penyakit::all();
        $pengguna = [];
        foreach (Diagnosa::all() as $key => $value) {
            if (empty($pengguna[$value->name])) {
                $pengguna[$value->name] = $value;
            }
        }
        //render view with posts
        return view('admin.diagnosa.dashboard', compact('diagnonsa','pakar','pengguna','penyakit'));
    }
}
