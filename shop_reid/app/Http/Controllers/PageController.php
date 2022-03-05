<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Content;
use App\Models\Product;
use App\Models\Cart;
use Session;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\User;
use App\Models\BlogComment;
use App\Models\Comment;
use Hash;
use Auth;


class PageController extends Controller
{
    protected $limit = 25;

    public function getIndex(){
        $slide = Slide::get();
       //  $content = Content::all();
       //  $total = [];
       // foreach($content as $key => $c) {
       //      $item = [
       //          'slide' => $slide[$key],
       //          'content' => $c,
       //      ];
       //      array_push($total, $item);
       // }
        $new_product = Product::get();
        $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->get();
        // dd($new_product);
        return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));
    }

    public function getShop(){
        $main_product = Product::get();
        return view('page.shop',compact('main_product'));
    }  

    public function getChitiet(Request $req){
        $sanpham = Product::where('id',$req->id)->first();
        $sp_tuongtu = Product::where('id_type',$sanpham->id_type)->get();
        return view('page.chitiet_sanpham',compact('sanpham','sp_tuongtu'));
    }

    public function getLogin(){
        return view('page.dang_nhap');
    }

    public function getSignin(){
        return view('page.dang_ki');
    }

    public function getDiachi(){
        return view('page.dia_chi');
    }

    public function postDiachi(Request $req){
        $cmtbl = new Comment;
        $cmtbl->full_name = $req->name;
        $cmtbl->email = $req->email;
        $cmtbl->note = $req->note;
        $cmtbl->save();
        return redirect()->back();
    }

    public function getGioithieu(){
        return view('page.gioi_thieu');
    }

    public function getTintuc(){
        $blognew = BlogComment::get();
        return view('page.tin_tuc',compact('blognew'));
    }

    public function postTintuc(Request $req){
        $blogcmt = new BlogComment;
        $blogcmt->full_name = $req->name;
        $blogcmt->email = $req->email;
        $blogcmt->phone_number = $req->phone;
        $blogcmt->note = $req->comment;
        $blogcmt->save();
        return redirect()->route('tintuc')->with('themthanhcong','Thêm tin thành công');
    }

    public function getHoadon(){
        return view('page.hoa_don');
    }  

    public function getAddtoCart(Request $req,$id){
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }

    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function postCheckout(Request $req){
        $cart = Session::get('cart');

        $customer = new Customer;
        $customer->name = $req->name;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone;
        $customer->note = $req->notes;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->unit_price = ($value['price']/$value['qty']);
            $bill_detail->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công');
    }

    public function postSignin(Request $req){
        $this->validate($req,
            [   
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:8|max:20',
                'fullname'=>'required',
                're_password'=>'required|same:password',
                'phone'=>'required'
            ],
            [
                'email.required'=>'Vui lòng nhập Email',
                'email.email'=>'Email Không đúng định dạng',
                'fullname.required'=>'Vui lòng nhập tên của bạn',
                'email.unique'=>'Email đã có người dùng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                're_password.required'=>'Vui lòng nhập lại mật khẩu',
                'password.min'=>'Mật khẩu có ít nhất 8 kí tự',
                'phone.required'=>'Vui lòng nhập số điện thoại'
            ]);
        $user = new User();
        $user->full_name = $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->save();
        return redirect()->route('trangchu')->with('thanhcong','Tạo tài khoản thành công');
    }

    public function postLogin(Request $req){
        $this->validate($req,
        [
            'email' => 'required|email',
            'password' =>'required|min:8|max:20'
        ],
        [
            'email.required'=>'Vui lòng nhập Email',
            'email.email'=>'Email không đúng định dạng',
            'password.required'=>'Vui lòng nhập mật khâủ',
            'password.min'=>'Mật khẩu có ít nhất 8 kí tự',
            'password.max'=>'Mật khẩu không quá 20 kí tự'
        ]);
        // $remember = $req->has('remember') ?true : false;
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        if(Auth::attempt($credentials)){
            return redirect()->route('trangchu')->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }  
    }

    public function postLogout(){
        Auth::logout();
        return redirect()->route('trangchu');
    }
}
