<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Redirect;
use View;


class MotorController extends Controller
{
    public function tambahdatamotor()
     {
         $data = array(
             'nama_motor' => request()->get('motor'),
             'harga_sewa' => request()->get('harga_sewa'),
         );
         DB::table('jenis_motor')->insert($data);
         return Redirect::to('/read_motor')->with('message', 'Berhasil Menambah Data');
     }
     public function lihatdatamotor()
    {
        $data = DB::table('jenis_motor')->get();
        return view::make('Jenis_Motor/read_motor')->with('jenis_motor', $data);
    }

    public function hapusdatamotor($id_jenis_motor)
    {
        DB::table('jenis_motor')->where('id_jenis_motor', '=', $id_jenis_motor)->delete();
        return Redirect::to('/read_motor')->with('message', 'Berhasil Menghapus Data');
    }

    public function editdatamotor($id_jenis_motor)
    {
        $data = DB::table('jenis_motor')->where('id_jenis_motor', '=', $id_jenis_motor)->first();
        return View::make('Jenis_Motor/edit_motor')->with('jenis_motor', $data);
    }

    public function prosesupdatemotor()
    {
        $data = array(
            'nama_motor' => request()->get('motor'),
            'harga_sewa' => request()->get('harga_sewa'),
          
        );

         DB::table('jenis_motor')->where('id_jenis_motor', '=', request()->get('id_jenis_motor'))->update($data);
         return Redirect::to('/read_motor')->with('message', 'Berhasil mengedit data');
    }
}
