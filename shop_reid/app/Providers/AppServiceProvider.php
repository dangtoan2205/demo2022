<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ProductType;
use App\Models\Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    //
    public function boot()
    {
        view()->composer('page.shop',function($view){
            $loai_sp = ProductType::get();
            $view->with(['loai_sp',$loai_sp]);
        });

        view()->composer('header',function($view){
            if (Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items, 'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });

        view()->composer('page.hoa_don',function($view){
            if (Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'product_cart_item'=>$cart->items, 'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });
    }
    //
    public function register()
    {
        //
    }
}
