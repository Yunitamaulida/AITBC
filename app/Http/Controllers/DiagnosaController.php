<?php

namespace App\Http\Controllers;

//import Model "User
use App\Models\Diagnosa;
use App\Models\Penyakit;
use App\Models\Gejala;
use App\Models\Kasus;
use DB;
//return type View
use Illuminate\View\View;
//return type redirectResponse
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{

    /**
     * index
     *
     * @return View
     */
    public function index()
    {
        //get posts
        $penyakit = Penyakit::all();
        //render view with posts
        return view('guest.index', compact('penyakit'));
    }
    /**
     * index
     *
     * @return View
     */
    public function konsultasi()
    {
        //get posts
        $gejala = Gejala::all();
        //render view with posts
        return view('guest.diagnosa', compact('gejala'));
    }
    public function datadiri(Request $request): RedirectResponse
    {

        //redirect to index
        return view('guest.index', compact('posts', 'bobots'));
    }
    public function konsultasiPost(Request $request)
    {
        $result = $this->kalkulasiDiagnosa($request->inputs);
        $gejala = array_keys($result['gejala_terpilih']);
        $penyakit = $result['cf_max']['kodePenyakit'];
        $persentase = $result['cf_max']['nilai_diagnosa'];
        return $result;
        // //validate form
        $this->validate($request, [
            'nama'     => 'required',
            'email'     => 'required',
            'bb'   => 'required',
            'bt'   => 'required',
            'jenis'   => 'required',
            'alamat'   => 'required|min:5',
        ]);
        //create post
        Diagnosa::create([
            // 'image'     => $image->hashName(),
            'name'     => $request->nama,
            'email'     => $request->email,
            'jenis_kelamin'   => $request->jenis,
            'bb'   => $request->bb,
            'bt'   => $request->bt,
            'alamat'   => $request->alamat,
            'gejala_terpilih'   => implode("|", $gejala),
            'penyakit'   => $penyakit,
            'persentase' => $persentase,
        ]);
        //redirect to index
        return view('guest.hasil', compact('result'));
    }

    function kalkulasiDiagnosa($data)
    {
        //storage data
        $penyakit = [];
        $gejalaTerpilih = [];
        $kasus = Kasus::all();
        foreach ($kasus as $ks) {
            if (empty($penyakit[$ks->penyakit])) {
                $penyakit[$ks->penyakit] = [$ks['gejala'] => $ks['bobot']];
            } else {
                $penyakit[$ks->penyakit][$ks['gejala']] = $ks['bobot'];
            }
        }
        foreach ($data as $input) {
            if (empty($input)) {
                continue;
            }
            if (empty($input['milih'])) {
                continue;
            }
            $gejalaTerpilih[$input['kode']] =
                [
                    'name' => $input['name'],
                    'terpilih' => $input['milih'],
                ];
        }
        $berat = 0;
        $kesamaan = 0;
        $penyakitPrakira = [];
        $perhitunganAwal = [];
        $hasilDiagnosa = [];
        $hasil = [];
        foreach ($penyakit as $key => $value) {
            foreach ($value as $data) {
                $berat = $berat + $data;
            }
            if (empty($penyakitPrakira[$key])) {
                $penyakitPrakira[$key] = [];
            }
            foreach ($gejalaTerpilih as $key2 => $value2) {
                if (!empty($value[$key2])) {
                    $kesamaan = $kesamaan + $value[$key2];
                    $penyakitPrakira[$key][$key2] = $value[$key2];
                }
            }
            $perhitunganAwal[$key]['berat'] = $berat;
            $perhitunganAwal[$key]['kesamaan'] = $kesamaan;
        }
        foreach ($perhitunganAwal as $key => $value) {
            $hasil[$key] = ($value['kesamaan'] / 25) * 100;
        }
        $sama = 0;
        $keyakinan = 0;
        foreach ($penyakit as $key => $value) {
            $data = Penyakit::where('kode', $key)->get();
            foreach ($data as $six) {
                $hasilDiagnosa[$six->kode]['nama'] = $six->name;
                $hasilDiagnosa[$six->kode]['deskripsi'] = $six->deskipsi;
                $hasilDiagnosa[$six->kode]['solusi'] = $six->solusi;
                $hasilDiagnosa[$six->kode]['perkiraan_diagnosa'] = $hasil[$key];
            }
        }

        $cfMax = null;
        $kemungkinan = 0.01;
        foreach ($hasilDiagnosa as $key => $value) {
            if ($kemungkinan < $value['perkiraan_diagnosa']) {
                $kemungkinan = $value['perkiraan_diagnosa'];
                $cfMax = ["kodePenyakit" => $key, "penyakit" => $value['nama'], 'deskripsi' => $value['deskripsi'], 'solusi' => $value['solusi'], "nilai_diagnosa" => $value['perkiraan_diagnosa']];
            }
        }

        return [
            'hasil_diagnosa' => $hasilDiagnosa,
            'gejala_terpilih' => $gejalaTerpilih,
            'cf_max' => $cfMax,
            'kesamaan' => $kesamaan,
            'berat' => $berat,
            'penyakit' => $penyakit


        ];
    }

    function filterArray($value1, $value2)
    {
        return ($value1 == $value2);
    }
}
