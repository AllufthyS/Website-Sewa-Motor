<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use View;

class PenyewaanController extends Controller
{
    public function tambahsewa()
     {
         $data = array(
            
            'id_customer' => request()->get('pelanggan'), 
            'id_jenis_motor' => request()->get('jenis_motor'), 
            'harga_sewa' => request()->get('harga'), 
            'tgl_sewa' => request()->get('tglsewa'), 
            'tgl_kembali' => request()->get('tglkembali'), 
         );
         DB::table('penyewaan')->insert($data);
        
         $datapenyewaan = DB::table('penyewaan')
         ->select(DB::raw('max(id_penyewaan) as id_penyewaan'))
         ->get(); 
        
        $tgl_sewa;
        $tgl_kembali;
        $harga=0;
        $i=0;
      
            $tgl_sewa=date_create( request()->get('tglsewa'));
            $tgl_kembali=date_create( request()->get('tglkembali'));
            $harga= request()->get('harga');

            $dif=date_diff($tgl_sewa,$tgl_kembali);
            $totalharga=$harga*$dif->d;
            foreach($datapenyewaan as $p){
                $id_penyewaan=$p->id_penyewaan;
            }
       
         $detaildata = array(
            
            'id_penyewaan' => $id_penyewaan ,
            'id_customer' => request()->get('pelanggan'), 
            'total_harga' => $totalharga 
            
            
         );
         DB::table('detail_penyewaan')->insert($detaildata);
         
          return Redirect::to('readsewa')->with('message', 'Berhasil Menambah Data');
     }
     public function lihatdetailsewa()
    {
        
       $penyewaan = DB::table('penyewaan')
        ->join('jenis_motor','penyewaan.id_jenis_motor','=','jenis_motor.id_jenis_motor')
        ->join('users_table','penyewaan.id_customer','=','users_table.id_customer')
        ->join('detail_penyewaan','penyewaan.id_penyewaan','=','detail_penyewaan.id_penyewaan')
        ->get();
       
         return view::make('Transaksi/read')->with(['penyewaan'=> $penyewaan]);
    }

    public function lihatcus()
    {
        $datacus = DB::table('users_table')->get();
        $jenis = DB::table('jenis_motor')->pluck("nama_motor","id_jenis_motor");
        return view::make('Transaksi.transaksi')->with(['namacus' => $datacus, 'motor' => $jenis]);
    }

    public function getharga($id_jenis_motor) 
    {        
        $databil = DB::table("jenis_motor")->where("id_jenis_motor",$id_jenis_motor)->pluck("id_jenis_motor","harga_sewa");
            return json_encode($databil);
    }

    public function hapussewa($id_penyewaan)
    {
        DB::table('detail_penyewaan')->where('id_penyewaan', '=', $id_penyewaan)->delete();
        DB::table('penyewaan')->where('id_penyewaan', '=', $id_penyewaan)->delete();
        return Redirect::to('/readsewa')->with('message', 'Berhasil Menghapus Data');
    }

    public function editsewa($id_penyewaan)
    {
        $data = DB::table('penyewaan')
        ->join('jenis_motor','penyewaan.id_jenis_motor','=','jenis_motor.id_jenis_motor')
        ->join('users_table','penyewaan.id_customer','=','users_table.id_customer')
        ->where('id_penyewaan', '=', $id_penyewaan)->first();
        return View::make('Transaksi/edit')->with('penyewaan', $data);
    }

    public function prosesupdatesewa()
    {
        $data = array(
            
            'id_customer' => request()->get('pelanggan'), 
            'id_jenis_motor' => request()->get('jenis_motor'), 
            'harga_sewa' => request()->get('harga'), 
            'tgl_sewa' => request()->get('tglsewa'), 
            'tgl_kembali' => request()->get('tglkembali'), 
         );
         DB::table('penyewaan')->where('id_penyewaan', '=', request()->get('id_penyewaan'))->update($data);
        
         $datapenyewaan = DB::table('penyewaan')
         ->select(DB::raw('max(id_penyewaan) as id_penyewaan'))
         ->get(); 
        
        $tgl_sewa;
        $tgl_kembali;
        $harga=0;
        $i=0;
      
            $tgl_sewa=date_create( request()->get('tglsewa'));
            $tgl_kembali=date_create( request()->get('tglkembali'));
            $harga= request()->get('harga');

            $dif=date_diff($tgl_sewa,$tgl_kembali);
            $totalharga=$harga*$dif->d;
            foreach($datapenyewaan as $p){
                $id_penyewaan=$p->id_penyewaan;
            }
       
         $detaildata = array(
            
            'id_penyewaan' => $id_penyewaan ,
            'id_customer' => request()->get('pelanggan'), 
            'total_harga' => $totalharga 
            
            
         );
         DB::table('detail_penyewaan')->where('id_penyewaan', '=', request()->get('id_penyewaan'))->update($detaildata);
         
          return Redirect::to('readsewa')->with('message', 'Berhasil Mengupdate Data');
     }
}

