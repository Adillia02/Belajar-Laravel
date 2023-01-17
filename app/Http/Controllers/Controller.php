<?php

namespace App\Http\Controllers;

use App\Models\AnggotaModel;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function readbarang()
    {
        $xx = new AnggotaModel();
        $barang = $xx->ReadBarang();
        return view('databarang', ['barang' => $barang]);
    }
    public function tambahbarang()
    {
        return view('tambahbarang');
    }

    public function simpanbarang(Request $x)
    {
        $xx = new AnggotaModel();
        $xx->Simpanbarang($x);
        return redirect('/barang');
    }

    public function editbarang($kodebr)
    {
        $xx = new AnggotaModel();
        $barang = $xx->Editbarang($kodebr);
        return view('editbarang', ['barang' => $barang]);
    }

    public function edittbarang(Request $x)
    {
        $xx = new AnggotaModel();
        $xx->Edittbarang($x);
        return redirect('/barang');
    }

    public function hapusbarang($kodebr)
    {
        $xx = new AnggotaModel();
        $xx->Hapusbarang($kodebr);
        return redirect('/barang');
    }
}
