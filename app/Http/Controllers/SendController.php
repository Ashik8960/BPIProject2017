<?php

namespace App\Http\Controllers;

use App\Mail\sendInfoMail;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendController extends Controller
{
    public function mailSend(Request $request){
    if (Auth::check()) {


        $data['s'] = Member::find($request->id);

        return view('mail.sendMail')->with($data);
    }else{
        return redirect('admin');
    }
    }

    public function mailSendProcess(Request $request){
    if (Auth::check()) {


        $this->validate($request, [
            'email' => 'required|email|min:2|max:100'
        ]);
        $data = Member::find($request->id);

        $confirm = Mail::to($request->input('email'))->send(new sendInfoMail($data));

        if ($confirm) {

            $request->session()->flash('error', 'mail is send failed');
            return redirect()->back();
        } else {

            $request->session()->flash('success', 'mail is send successfully');
            return redirect()->back();
        }

    }else{
        return redirect('admin');
    }


    }
}
