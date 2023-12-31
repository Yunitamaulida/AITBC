<?php

namespace App\Http\Controllers;

//import Model "User
use App\Models\Gejala;

//return type View
use Illuminate\View\View;
//return type redirectResponse
use App\Http\Controllers\Controller;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class GejalaController extends Controller
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
        $posts = Gejala::all();
        $uri = 'gejala';
        //render view with posts
        return view('admin.gejala.table', compact(['posts', 'uri']));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.gejala.add');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'kode'     => 'required|min:2',
            'name'     => 'required|min:2',
            'bobot'     => 'required',
        ]);

        //create post
        Gejala::create([
            // 'image'     => $image->hashName(),
            'kode'     => $request->kode,
            'name'     => $request->name,
            'bobot'    => $request->bobot,
        ]);

        //redirect to index
        return redirect('gejala')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $kode): View
    {
        //get post by ID
        $post = Gejala::where('kode', $kode)->firstorfail();

        //render view with post
        return view('admin.gejala.edit', compact('post'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $kode): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'name'     => 'required',
            'bobot'    => 'required',
        ]);

        //get post by ID
        Gejala::where('kode', $kode)->update([
            'name'     => $request->name,
            'bobot'    => $request->bobot,
        ]);
        //redirect to index
        return redirect('gejala')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($kode)
    {
        //get post by ID delete post
        Gejala::where('kode', $kode)->delete();

        //redirect to index
        return redirect('gejala')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function check()
    {
        return ! is_null($this->user());
    }
}
