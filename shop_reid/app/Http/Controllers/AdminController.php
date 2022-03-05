<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function getAdCapnhatSp(){
        return view('admin.page.cap_nhat_sp');
    }

    public function getAdCapnhatTt(){
        return view('admin.page.cap_nhat_tt');
    }

    public function getAdDanhmuc(){
        return view('admin.page.danh_muc');
    }

    public function getAdDonhang(){
        return view('admin.page.don_hang');
    }

    public function getAdLogin(){
        return view('admin.page.login');
    }

    public function getAdRegister(){
        return view('admin.page.register');
    }

    public function getAdSanpham(){
        return view('admin.page.san_pham');
    }

    public function getAdThanhvien(){
        return view('admin.page.thanh_vien');
    }

    public function getAdTintuc(){
    	return view('admin.page.tin_tuc');
    }
}
