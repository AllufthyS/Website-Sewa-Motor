<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Redirect;
use View;

class UserController extends Controller
{

     public function tambahdata()
     {
         $data = array(
             'nama' => request()->get('nama'),
             'jenis_kelamin' => request()->get('jk'),
             'alamat' => request()->get('alamat'),
             'no_telp' => request()->get('tlp'),
             'email' => request()->get('email'),
            
         );
         DB::table('users_table')->insert($data);
         return Redirect::to('/customer')->with('message', 'Berhasil Menambah Data');
     }
     public function lihatdata()
    {
        $data = DB::table('users_table')->get();
        return view::make('Pelanggan/read')->with('users_table', $data);
    }

    public function hapusdata($id_customer)
    {
        DB::table('users_table')->where('id_customer', '=', $id_customer)->delete();
        return Redirect::to('/customer')->with('message', 'Berhasil Menghapus Data');
    }

    public function editdata($id_customer)
    {
        $data = DB::table('users_table')->where('id_customer', '=', $id_customer)->first();
        return View::make('Pelanggan/edit')->with('users_table', $data);
    }

    public function prosesupdate()
    {
        $data = array(
           
            'nama' => request()->get('nama'),
            'jenis_kelamin' => request()->get('jenis_kelamin'),
            'alamat' => request()->get('alamat'),
            'email' => request()->get('email'),
            'no_telp' => request()->get('no_telp'),
        );

         DB::table('users_table')->where('id_customer', '=', request()->get('id_customer'))->update($data);
         return Redirect::to('/customer')->with('message', 'Berhasil mengedit data');
    }
}