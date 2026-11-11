<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Service;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
   public function index(Request $request){
       
     $data = $request->all();
    
       
    
       
       Mail::send('emails.contact-message',[
           'name'=>$request->name,
           'email'=>$request->email,
           'mobile'=>$request->mobile,
           'address'=>$request->address,
           'msg'=>$request->comment
       ],function($mail) use($request){
           $mail->from($request->email,$request->name);
            $mail->to("delhifurniture18@gmail.com")->subject('Enquiry mail from Star Furniture');
              $mail->cc("perfectwebexperts@gmail.com")->subject('Enquiry mail from Star Furniture');        
              $mail->cc("virusman.143@gmail.com")->subject('Enquiry mail from Star Furniture');        
                      
       });
       
          return redirect()->back()->with('flash_message','Thank You, We  will contact u soon!!');
     }
}
