<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AnggotaModel extends Model
{
    public function ReadBarang()
    {
        $barang = DB::table('barang')->get();
        return $barang;
    }
    public function Simpanbarang($x)
    {
        $barang = DB::table('barang')->insert([
            'kodebrg' => $x->kode,
            'namabrg' => $x->nama,
            'satuan' => $x->satuan,
            'hargabeli' => $x->beli,
            'hargajual' => $x->jual
        ]);
    }
    public function Editbarang($kodebr)
    {
        $barang = DB::table('barang')->where('kodebrg', $kodebr)->get();
        return $barang;
    }

    public function Edittbarang($x)
    {
        $barang = DB::table('barang')->where('kodebrg', $x->kode)->update([
            'namabrg' => $x->nama,
            'satuan' => $x->satuan,
            'hargabeli' => $x->beli,
            'hargajual' => $x->jual,
        ]);
    }
    public function Hapusbarang($kodebr)
    {
        $barang = DB::table('barang')->where('kodebrg', $kodebr)->delete();
    }
}
