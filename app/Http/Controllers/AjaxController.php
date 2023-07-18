<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentFormRequest;
use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function iletisimkaydet(ContentFormRequest $request){

      /*  $validationdata = $request->validate([
            'name'=>'required|string|min:30',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ],[
            'name.required'=>'İsim Soyisim Zorunlu',
            'name.string'=>'İsim Soyisim Karakterlerden oluşmalı',
            'name.min'=>'İsim Soyisim Minumum 3 Karaakterden Oluşmalıdır',
            'email.required'=>'E-posta Zorunlu',
            'email.email'=>'Konu kısmı boş geçilmez',
            'message.required'=>'Mesaj kısmı boş geçilmez'
        ]);*/




       /*  $data = $request->all();
         $data['ip'] = $request->ip();*/

        $newdata =[
           'name'=> Str::title($request->name),
           'email'=>$request->name,
           'subject'=>$request->subject,
           'message'=>$request->message,
           'ip'=>request()->ip(),
        ];

        $sonkaydedilen= Contact::create($newdata);

        return back()->with(['message'=>'Başarıyla Gönderildi']);
    }
}
