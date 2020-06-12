<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Product;

class PageController extends BaseController
{
    public function index() {

      $products = Product::all();
      $i = 0;
      $nuevos = [];
      $descuentos = [];
      $masvendidos = [];
      while ($i <= 14) {

        $i = $i+1;
          if ($i<=5) {
                array_push($nuevos,$products[$i]);
                //$nuevos =$products[$i];
          }
          else if ($i<=10) {
            array_push($descuentos,$products[$i]);
              //$descuentos = $products[$i];
          }
          else {
            array_push($masvendidos,$products[$i]);
             // $masvendidos = $products[$i];
          }
          
      }
      
      return view('welcome',[
          'products' => $products,
          'nuevos' => $nuevos,
          'descuentos' => $descuentos,
          'masvendidos' => $masvendidos,
      ]);
    }

    public function about() {        
        return view('pages/about');
    }
    
    public function services() {
        return view('pages/services');
    }

    public function login() {
        return view('pages/user/login');
    }

    public function register() {
        return view('pages/user/register');
    }

    public function product() {
        return view('pages/product/product');
        
    }
}
