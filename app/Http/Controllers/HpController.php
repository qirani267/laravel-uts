<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\List_;

class HpController extends Controller
{
    public function list()
    {
        $hasil = DB::select('select * from table_handphone');
        return view('list-hp', ['data' => $hasil]);
    }
    public function simpan(Request $req)
    {
        DB::insert(

            'insert into hp (merk_hp, tahun, type_hp) values (?, ?, ?)',
            [$req->merk_hp, $req->tahun, $req->type_hp]
        );
        $hasil = DB::select('select * from table_handphone');
        return view('list-hp', ['data' => $hasil]);
    }
    public function hapus($req)
    {
        Log::info('proses hapus dengan id=' . $req);
        DB::delete('delete from hp where id = ?', [$req]);

        $hasil = DB::select('select * from table_handphone');
        return view('list-hp', ['data' => $hasil]);
    }
    public function ubah($req)
    {
        $hasil = DB::select('select * from table_handphone where id = ?', [$req]);
        return view('form-ubah', ['data' => $hasil]);
    }
    public function rubah(Request $req)
    {
        Log::info('Hallo');
        Log::info($req);
        DB::update(
            'update table_handphone set ' .
                'merk_hp=?, ' .
                'tahun=?, ' .
                'type_hp=? where id=? ',
            [
                $req->merk_hp,
                $req->tahun,
                $req->type_hp,
                $req->id
            ]
        );
        $hasil = DB::select('select * from table_handphone');
        return view('list-hp', ['data' => $hasil]);
    }
}

