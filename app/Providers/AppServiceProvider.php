<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ProductType;
use App\Models\Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $loai_sp = ProductType::all();

            $view->with('loai_sp',$loai_sp);
        });





        //truyen ttin gio hang di, in ra cho sp 
        view()->composer('header',function($view){           
            //giohang
            if(Session('cart')){
                $oldCart = Session::get('cart');//ktra gio hien tai co sp dc mua chua
                $cart = new Cart($oldCart);//ktra gio co hay chua, neu co thi gan vao cart moi
                $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });
    }
}
