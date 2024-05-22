<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use View;

class DetailJenisMotorController extends Controller
{
    public function tambahdetailmotor()
     {
         $data = array(
             
            'id_jenis_motor' => request()->get('id_jenis_motor'),
             'no_polisi' => request()->get('nopol'),
             'warna' => request()->get('warna'),
             'masa_berlaku_stnk' => request()->get('tglstnk'),
             'status' => request()->get('status'),
             
         );
         DB::table('detail_jenis_motor')->insert($data);
         return Redirect::to('/detailmotor')->with('message', 'Berhasil Menambah Data');
     }
     public function lihatdetailmotor()
    {
        $data = DB::table('detail_jenis_motor')
        ->join('jenis_motor','jenis_motor.id_jenis_motor','=','detail_jenis_motor.id_jenis_motor')
        ->get();
        return view::make('Detail_Jenis/read_detail_motor')->with('detail_jenis_motor', $data);
    }

    public function lihatjenismotor()
    {
        $data = DB::table('jenis_motor')->get();
        return view::make('Detail_Jenis/detail_jenis_motor')->with('jenis_motor', $data);
    }

    public function hapusdetailmotor($id_motor)
    {
        DB::table('detail_jenis_motor')->where('id_motor', '=', $id_motor)->delete();
        return Redirect::to('/detailmotor')->with('message', 'Berhasil Menghapus Data');
    }

    public function editdetailmotor($id_motor)
    {
        $data = DB::table('detail_jenis_motor')
        ->join('jenis_motor','jenis_motor.id_jenis_motor','=','detail_jenis_motor.id_jenis_motor')
        ->where('id_motor', '=', $id_motor)->first();
        return View::make('Detail_Jenis/edit_detail_motor')->with('jenis_motor', $data);
    }

    public function prosesupdatemotor()
    {
        $data = array(
            'id_jenis_motor' => request()->get('id_jenis_motor'),
             'no_polisi' => request()->get('nopol'),
             'warna' => request()->get('warna'),
             'masa_berlaku_stnk' => request()->get('tglstnk'),
             'status' => request()->get('status'),
          
        );

         DB::table('detail_jenis_motor')->where('id_motor', '=', request()->get('id_motor'))->update($data);
         return Redirect::to('/detailmotor')->with('message', 'Berhasil mengedit data');
    }
}
