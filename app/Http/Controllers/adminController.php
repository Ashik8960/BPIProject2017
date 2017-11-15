<?php

namespace App\Http\Controllers;

use App\Mail\PasswordResetMail;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Mockery\Exception;
use App\Models\Admin;

class adminController extends Controller
{




    public function showAdminForm(){
if (Auth::check()) {


    return view('administrator.addAdmin');

}else{
    return redirect('admin');
}


    }
    public function showAdminData(Request $request){
        if (Auth::check()) {


            $data['admins'] = User::orderBy('id', 'desc')->where('id', '>', '3')->paginate(1);

            return view('administrator.adminData')->with($data);
        }else{
            return redirect('admin');
        }

    }

    public function addAdminData(Request $request){

if (Auth::check()) {


    $this->validate($request, [
        'first_name' => 'required|min:3|max:50',
        'last_name' => 'nullable|min:3|max:30',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:4|max:100',
        'retype_password' => 'required|same:password',
        'image' => 'required|mimes:jpeg,jpg,png|min:1|max:2000'
    ]);
    try {
        $admin = new User();

        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);

        $uploadObject = $request->file('image');
        $filename = $uploadObject->getFilename() . str_random(15);
        $file_ext = $uploadObject->getClientOriginalExtension();

        if ($uploadObject->move(public_path(), $filename . '.' . $file_ext)) {
            $photo_file = $filename . '.' . $file_ext;

        } else {
            return $uploadObject->getErrorMessage();


        }

        $admin->photo = $photo_file;

        $admin->save();
        $request->session()->flash('success', 'Signup Successfully done');
    } catch (Exception $exception) {
        $request->session()->flash('error', 'Signup not Successfully');

    }

    return redirect()->back();
}else{
        return redirect('admin');
}

    }

 //admin data edit

    public function adminDataEdit(Request $request){
if (Auth::check()) {


    $data['admin'] = User::find($request->id);

    return view('administrator.adminEdit')->with($data);

}else{
    return redirect('admin');
}
    }

public function adminDataUpdate(Request $request){
if (Auth::check()) {


    $this->validate($request, [
        'first_name' => 'required|min:3|max:50',
        'last_name' => 'nullable|min:3|max:30',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:4|max:100',
        'retype_password' => 'required|same:password',
        'image' => 'required|mimes:jpeg,jpg,png|min:1|max:2000'
    ]);


    try {
        $admin = User::find($request->id);

        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);

        $uploadObject = $request->file('image');
        $filename = $uploadObject->getFilename() . str_random(15);
        $file_ext = $uploadObject->getClientOriginalExtension();

        if ($uploadObject->move(public_path(), $filename . '.' . $file_ext)) {
            $photo_file = $filename . '.' . $file_ext;

        } else {
            return $uploadObject->getErrorMessage();


        }
        $admin->photo = $photo_file;

        $admin->update();
        $request->session()->flash('success', 'Admin data updata Successfully done');
    } catch (Exception $exception) {
        $request->session()->flash('error', 'Admin data updata failed');

    }

    return redirect()->back();

}else{
    return redirect('admin');
}
}
//admin data delete

public function adminDataDelete(Request $request){
if (Auth::check()) {


    $admin = User::find($request->id);
    $res = $admin->delete();
    if ($res) {
        $request->session()->flash('success', 'Admin Data delete Successfully');
        return redirect()->back();
    } else {
        $request->session()->flash('error', 'Admin Data delete Successfully');
        return redirect()->back();
    }

}else{
    return redirect('admin');
}
}







public function viewFontPage(){
    return view('visitors.fontPage');
}
public function viewDataSearch(Request $request){

    $this->validate($request,[
        'search'=>'required|min:4'
    ]);
try{
    $builder=Member::query();


    if(Input::has('search')){
        $queryString=Input::get('search');
        $builder->where('file_no','LIKE',"%$queryString%")->orWhere('mobile_no','LIKE',"%$queryString%")->orWhere('email','LIKE',"%$queryString%");




    }

    if(empty($data['searchData']=$builder->get()->first())){
        $res=$request->search;
        $request->session()->flash('error','Your file or mobile or email no not valid != '.$res);

        return redirect()->back();
    }else{
        $request->session()->flash('success','Your Result here...');
        return view('visitors.resultPage')->with($data);
    }


}catch (Exception $exception) {
    return redirect()->back();
}
}

public function viewDataS(){
    return view('visitors.fontPageS');
}



//password reset

public function passwordLinkSent(){
    return view('administrator.forgottenPassword');
}

public function passwordResetLink(Request $request){
    $this->validate($request,[
        'email'=>'required|email'
    ]);

    $user=User::where('email',$request->input('email'))->first();
    if($user!=null){
        $reset_token=str_random(64).md5($request->input('email'));
        $user->reset_token=$reset_token;

        $user->update();

      Mail::to($request->input('email'))->send(new PasswordResetMail($user));



        $request->session()->flash('success','Mail reset link Sent successfully');
        return redirect()->back();
    }else{
        $request->session()->flash('error','your email is not matching?');
        return redirect()->back();
    }

}

public function resetProcess($token){

  $user=User::where('reset_token',$token)->first();

  if($user!=null){
      return view('mail.newPassword',['id'=>$user->id,'token'=>$token]);
  }else{
      session()->flash('error','Invalid reset link');
      return redirect('admin');
  }

}

public function updatePassword($token,Request $request){

$user=User::where('reset_token',$token)->first();
$this->validate($request,[
    'password'=>'required|confirmed|min:4'
]);
$user->password=bcrypt($request->password);
$user->update();


if($user){
    $request->session()->flash('success','Password reset successfully');
    return redirect('admin');
}else{
    $request->session()->flash('error','Password reset invalid');
    return redirect()-back();
}

}




}


