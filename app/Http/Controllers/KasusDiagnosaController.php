<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KasusDiagnosaController extends Controller
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
        $posts = Diagnosa::all();
        //render view with posts
        return view('admin.diagnosa.table', compact('posts'));
    }
    public function destroy($id)
    {
        //get post by ID delete post
        Diagnosa::where('id', $id)->delete();

        //redirect to index
        return redirect('diagnosa')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
