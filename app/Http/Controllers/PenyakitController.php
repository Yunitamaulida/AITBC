<?php

namespace App\Http\Controllers;

//import Model "User
use App\Models\Penyakit;

//return type View
use Illuminate\View\View;
//return type redirectResponse
use App\Http\Controllers\Controller;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PenyakitController extends Controller
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
        $posts = Penyakit::all();
        //render view with posts
        return view('admin.penyakit.table', compact('posts'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.penyakit.add');
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
            'kode'     => 'required|min:1',
            'name'     => 'required|min:1',
        ]);

        //create post
        Penyakit::create([
            // 'image'     => $image->hashName(),
            'kode'     => $request->kode,
            'name'     => $request->name,
        ]);

        //redirect to index
        return redirect('penyakit')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $post = Penyakit::where('kode', $kode)->firstorfail();

        //render view with post
        return view('admin.penyakit.edit', compact('post'));
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
        ]);

        //get post by ID
        $post = Penyakit::where('kode', $kode)->update([
            'name'     => $request->name,
        ]);

        //redirect to index
        return redirect('penyakit')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($kode): RedirectResponse
    {
        //get post by ID delete post
        $post = Penyakit::where('kode', $kode)->delete();

        //redirect to index
        return redirect('penyakit')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function check()
    {
        return ! is_null($this->user());
    }
}
