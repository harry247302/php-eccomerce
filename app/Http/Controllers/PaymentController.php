<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Package;
use App\Model\Cmspage;


class PaymentController extends Controller
{
   public function index(){
      $page_pay_now = Cmspage::Where('url', 'like', '%' . 'pay' . '%')->where('page_status','enable')->first();
        return view('pay_now_form',compact('page_pay_now'));
     }
    
    
}
