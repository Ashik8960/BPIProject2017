<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Mockery\Exception;

class memberController extends Controller
{

 public function search(Request $request){
     if (Auth::check()){



    $data['singledata']=Member::orderBy('file_no','asc')->where('status','=','current')->paginate(15);

        return view('adminpanel.dashboard')->with($data);
     }else{
         return redirect('admin');
     }



 }
public function serchData(Request $request){
if (Auth::check()) {


    try {


        $builder = Member::query();
        if (Input::has('search')) {
            $queryString = Input::get('search');
            $builder->where('file_no', 'LIKE', "%$queryString%")->orWhere('mobile_no', 'LIKE', "%$queryString%");


        }

        if (empty($data['s'] = $builder->get()->first())) {
            $res = $request->search;
            $request->session()->flash('error', 'Please enter valid number != ' . $res);

            return redirect('/dashboard');
        } else {
            $request->session()->flash('success', 'Your Result here...');
            return view('adminpanel.searchInformation')->with($data);
        }


    } catch (Exception $exception) {
        return redirect()->back();
    }
}else{
    return redirect('admin');
}
}




    public function showMemberForm(){
    if (Auth::check()){


         return view('adminpanel.memberAdd');

    }else{
        return redirect('admin');
    }


    }

    public function insertMemberData(Request $request){
        if (Auth::check()) {


            $this->validate($request, [
                'first_name' => 'required|min:3|max:50',
                'last_name' => 'nullable|min:3|max:50',
                'email' => 'nullable|unique:members|email',
                'mobile_no' => 'nullable|unique:members|min:11|numeric|regex:/^01[0-9]/',
                'file_no' => 'required|unique:members|min:3|max:60',
                'department' => 'nullable|min:3|max:100',
                'designation' => 'required',
                'status' => 'required',
                'dateOfBirth' => 'nullable',
                'firstJointOfDate' => 'nullable',
                'presentJointOfDate' => 'nullable',
                'dateOfReturn' => 'nullable',
                'remarks' => 'nullable|min:10|max:300',
                'image' => 'required|mimes:jpeg,jpg,png|size:2000',
                'education_qualification' => 'nullable|min:3|max:50',
                'home_district' => 'nullable|min:3|max:60',

            ]);
            try {


                $member = new Member();

                $member->first_name = $request->first_name;
                $member->last_name = $request->last_name;
                $member->email = $request->email;
                $member->mobile_no = $request->mobile_no;
                $member->file_no = $request->file_no;
                $member->department = $request->department;
                $member->designation = $request->designation;
                $member->status = $request->status;
                $member->dateOfBirth = $request->dateOfBirth;
                $member->firstJointOfDate = $request->firstJointOfDate;
                $member->presentJointOfDate = $request->presentJointOfDate;
                $member->dateOfReturn = $request->dateOfReturn;
                $member->remarks = $request->remarks;
                $member->education_qualification = $request->education_qualification;
                $member->home_district = $request->home_district;


                $uploadObject = $request->file('image');
                $filename = $uploadObject->getFilename() . str_random(20);
                $file_ext = $uploadObject->getClientOriginalExtension();

                if ($uploadObject->move(public_path(), $filename . '.' . $file_ext)) {
                    $photo_file = $filename . '.' . $file_ext;

                } else {
                    return $uploadObject->getErrorMessage();


                }
                $member->photo = $photo_file;

                $member->save();
                $request->session()->flash('success', 'Data insert Successfully done');

            } catch (Exception $exception) {

                $request->session()->flash('error', 'Data insert failed');

            }
            return redirect()->back();
        }else{
            return redirect('admin');
        }
    }

//current staff data

    public function currentPrincipleData(){
        if (Auth::check()) {


            $data['currentPrinciple'] = Member::orderBy('id', 'desc')->where('designation', '=', 'principle')->where('status', '=', 'current')->paginate(12);

            return view('adminpanel.currentPrinciple')->with($data);

        }else{
            return redirect('admin');
        }


    }


    public function currentViceprincipleData(){
        if (Auth::check()) {


            $data['currentViceprinciple'] = Member::orderBy('id', 'desc')->where('designation', '=', 'viceprinciple')->where('status', '=', 'current')->paginate(12);


            return view('adminpanel.currentViceprinciple')->with($data);
        }else{
            return redirect('admin');
        }

    }


    public function currentChiefinstructorData(){
        if (Auth::check()) {


            $data['currentChiefinstructor'] = Member::orderBy('id', 'desc')->where('designation', '=', 'chiefinstructor')->where('status', '=', 'current')->paginate(12);

            return view('adminpanel.currentChiefinstructor')->with($data);
        }else{
            return redirect('admin');
        }

    }

    public function currentCraftinstructorData(){
        if (Auth::check()) {


            $data['currentCraftinstructor'] = Member::orderBy('id', 'desc')->where('designation', '=', 'craftinstructor')->where('status', '=', 'current')->paginate(12);

            return view('adminpanel.currentCraftinstructor')->with($data);

        }else{
            return redirect('admin');
        }
    }

    public function currentInstructorData(){
        if (Auth::check()) {


            $data['currentInstructor'] = Member::orderBy('id', 'desc')->where('designation', '=', 'instructor')->where('status', '=', 'current')->paginate(12);


            return view('adminpanel.currentInstructor')->with($data);

        }else{
            return redirect('admin');
        }
    }

    public function currentJuniorinstructorData(){
        if (Auth::check()) {


            $data['currentJuniorinstructor'] = Member::orderBy('id', 'desc')->where('designation', '=', 'juniorinstructor')->where('status', '=', 'current')->paginate(12);


            return view('adminpanel.currentJuniorinstructor')->with($data);
        }else{
            return redirect('admin');
        }

    }

    public function currentOfficestaffData(){
        if (Auth::check()) {


            $data['currentOfficestaff'] = Member::orderBy('id', 'desc')->where('designation', '=', 'officestaff')->where('status', '=', 'current')->paginate(12);


            return view('adminpanel.currentOfficestaff')->with($data);
        }else{
            return redirect('admin');
        }

    }











//ex staff data

    public function exPrincipleData(){
if (Auth::check()) {


    $data['exPrinciple'] = Member::orderBy('id', 'desc')->where('designation', '=', 'principle')->where('status', '=', 'ex')->paginate(12);

    return view('adminpanel.exPrinciple')->with($data);
}else{
    return redirect('admin');
}

    }

    public function exViceprincipleData(){
        if (Auth::check()) {


            $data['exViceprinciple'] = Member::orderBy('id', 'desc')->where('designation', '=', 'viceprinciple')->where('status', '=', 'ex')->paginate(12);;

            return view('adminpanel.exViceprinciple')->with($data);
        }else{
                return redirect('admin');
        }

    }
    public function exChiefinstructorData()
    {
        if (Auth::check()) {


        $data['exChiefinstructor'] = Member::orderBy('id', 'desc')->where('designation', '=', 'chiefinstructor')->where('status', '=', 'ex')->paginate(12);

        return view('adminpanel.exChiefinstructor')->with($data);
    }else {
            return redirect('admin');
        }
    }


    public function exCraftinstructorData(){
        if (Auth::check()) {


            $data['exCraftinstructor'] = Member::orderBy('id', 'desc')->where('designation', '=', 'craftinstructor')->where('status', '=', 'ex')->paginate(12);

            return view('adminpanel.exCraftinstructor')->with($data);
        }else{
            return redirect('admin');
        }

    }
    public function exInstructorData(){
if (Auth::check()) {


    $data['exInstructor'] = Member::orderBy('id', 'desc')->where('designation', '=', 'instructor')->where('status', '=', 'ex')->paginate(12);

    return view('adminpanel.exInstructor')->with($data);
}else{
    return redirect('admin');
}

    }
    public function exJuniorinstructorData(){
        if (Auth::check()) {


            $data['exJuniorinstructor'] = Member::orderBy('id', 'desc')->where('designation', '=', 'juniorinstructor')->where('status', '=', 'ex')->paginate(12);

            return view('adminpanel.exJuniorinstructor')->with($data);

        }else{
            return redirect('admin');
        }

    }

    public function exOfficestaffData(){
if (Auth::check()) {


    $data['exOfficestaff'] = Member::orderBy('id', 'desc')->where('designation', '=', 'officestaff')->where('status', '=', 'ex')->paginate(12);

    return view('adminpanel.exOfficestaff')->with($data);
}else{
    return redirect('admin');
}

    }
  //member data edit

    public function staffDataEdit(Request $request){
        if (Auth::check()) {


            $data['singleStaffData'] = Member::find($request->id);

            return view('adminpanel.staffDataEdit')->with($data);

        }else{
            return redirect('admin');
        }
    }

    public function staffDataUpdate(Request $request){
        if (Auth::check()) {


            $this->validate($request, [
                'first_name' => 'required|min:3|max:50',
                'last_name' => 'nullable|min:3|max:50',
                'email' => 'nullable|email',
                'mobile_no' => 'nullable|min:11|numeric|regex:/^01[0-9]/',
                'file_no' => 'required|min:3|max:60',
                'department' => 'nullable|min:3|max:100',
                'designation' => 'required',
                'status' => 'required',
                'dateOfBirth' => 'nullable',
                'firstJointOfDate' => 'nullable',
                'presentJointOfDate' => 'nullable',
                'dateOfReturn' => 'nullable',
                'remarks' => 'nullable|min:10|max:300',
                'image' => 'required|mimes:jpeg,jpg,png|size:2000',
                'education_qualification' => 'nullable|min:3|max:50',
                'home_district' => 'nullable|min:3|max:60',

            ]);
            try {
                $member = Member::find($request->id);

                $member->first_name = $request->first_name;
                $member->last_name = $request->last_name;
                $member->email = $request->email;
                $member->mobile_no = $request->mobile_no;
                $member->file_no = $request->file_no;
                $member->department = $request->department;
                $member->designation = $request->designation;
                $member->status = $request->status;
                $member->dateOfBirth = $request->dateOfBirth;
                $member->firstJointOfDate = $request->firstJointOfDate;
                $member->presentJointOfDate = $request->presentJointOfDate;
                $member->dateOfReturn = $request->dateOfReturn;
                $member->remarks = $request->remarks;
                $member->education_qualification = $request->education_qualification;
                $member->home_district = $request->home_district;


                $uploadObject = $request->file('image');
                $filename = $uploadObject->getFilename() . str_random(20);
                $file_ext = $uploadObject->getClientOriginalExtension();

                if ($uploadObject->move(public_path(), $filename . '.' . $file_ext)) {
                    $photo_file = $filename . '.' . $file_ext;

                } else {
                    return $uploadObject->getErrorMessage();


                }
                $member->photo = $photo_file;

                $member->update();
                $request->session()->flash('success', 'Data Update Successfully');
            } catch (Exception $exception) {
                $request->session()->flash('error', 'Data Update Failed');
            }
            return redirect()->back();
        }else{
            return redirect('admin');
        }
    }

 //member data delete

   public function staffDataDelete(Request $request){
        if (Auth::check()) {


            $member = Member::find($request->id);
            $result = $member->delete();
            if ($result) {
                $request->session()->flash('success', 'Data Delete Successfully');
            } else {
                $request->session()->flash('error', 'Data delete Successfully');
            }
            return redirect()->back();
        }else{
            return redirect('admin');
        }
   }

   //member move ex

    public function memberMoveOnEx(Request $request){
       if (Auth::check()) {


           $data['moveOnEx'] = Member::find($request->id);

           return view('adminpanel.moveOnEx')->with($data);

       }else{
           return redirect('admin');
       }

    }
    public function memberMoveOnExUpdate(Request $request){
        if (Auth::check()) {


            try {


                $member = Member::find($request->id);

                $member->status = $request->status;
                $member->update();
                $request->session()->flash('success', 'This staff Move On Ex Successfully..');
            } catch (Exception $exception) {
                $request->session()->flash('error', 'This staff can not Move On Ex..');
            }
            return redirect()->back();
        }else{
            return redirect('admin');
        }

    }

//member move on ex and also return

public function memberMoveOnExAndReturn(Request $request){
        if (Auth::check()) {


            $data['moveOnExAndReturn'] = Member::find($request->id);

            return view('adminpanel.moveOnExAndReturn')->with($data);

        }else{
            return redirect('admin');
        }
}


public function memberMoveOnExAndReturnUpdate(Request $request){
    if (Auth::check()) {


        $this->validate($request, [
            'status' => 'required',
            'dateOfReturn' => 'nullable'
        ]);
        try {


            $member = Member::find($request->id);
            $member->status = $request->status;
            $member->dateOfReturn = $request->dateOfReturn;
            $member->update();
            $request->session()->flash('success', 'This member returnment data Successfully Update');
        } catch (Exception $exception) {
            $request->session()->flash('error', 'This member returnment data failed Update');
        }
        return redirect()->back();
    }else{
        return redirect('admin');
    }
}
//member move again current
public function memberMoveOnAgainCurrent(Request $request){
    if (Auth::check()) {


        $data['moveOnCurrent'] = Member::find($request->id);
        return view('adminpanel.moveOnCurrent')->with($data);
    }else{
        return redirect('admin');
    }
}

public function memberMoveOnAgainCurrentUpdate(Request $request){
    if (Auth::check()) {


        try {


            $member = Member::find($request->id);

            $member->status = $request->status;
            $member->update();
            $request->session()->flash('success', 'This staff Move On Current onces again Successfully..');
        } catch (Exception $exception) {
            $request->session()->flash('error', 'This staff Move On Current onces again failed..');
        }
        return redirect()->back();
    }else{
        return redirect('admin');
    }
}

//member detiles

public function showStaffDetiles(Request $request){
    if (Auth::check()) {


        $data['staffDetiles'] = Member::find($request->id);

        return view('adminpanel.staffDetiles')->with($data);
    }else{
        return redirect('admin');
    }


}
//all current strap


public function CurrentPrincipleReport(){
if (Auth::check()) {


    $data['allStraff'] = Member::orderBy('id', 'desc')->where('designation', '=', 'principle')->where('status', '=', 'current')->get();

    return view('printPanel.CurrentPrincipleReport')->with($data);
}else{
    return redirect('admin');
}
}

    public function allCurrentViceprincipleReport(){

if (Auth::check()) {


    $data['allStraff'] = Member::orderBy('id', 'desc')->where('designation', '=', 'viceprinciple')->where('status', '=', 'current')->get();

    return view('printPanel.allCurrentViceprincipleReport')->with($data);
}else{
    return redirect('admin');
}
    }


    public function allCurrentChiefinstructorReport(){

    if (Auth::check()) {


        $data['allStraff'] = Member::orderBy('id', 'desc')->where('designation', '=', 'chiefinstructor')->where('status', '=', 'current')->get();

        return view('printPanel.allCurrentChiefinstructorReport')->with($data);
    }else{
        return redirect('admin');
    }
    }
    public function allCurrentCraftinstructorReport(){

if (Auth::check()) {


    $data['allStraff'] = Member::orderBy('id', 'desc')->where('designation', '=', 'craftinstructor')->where('status', '=', 'current')->get();

    return view('printPanel.allCurrentCraftinstructorReport')->with($data);
}else{
    return redirect('admin');
}
    }
    public function allCurrentInstructorReport(){
if (Auth::check()) {


    $data['allStraff'] = Member::orderBy('id', 'desc')->where('designation', '=', 'instructor')->where('status', '=', 'current')->get();

    return view('printPanel.allCurrentInstructorReport')->with($data);
}else{
    return redirect('admin');
}
    }
    public function allCurrentJuniorinstructorReport(){

if (Auth::check()) {


    $data['allStraff'] = Member::orderBy('id', 'desc')->where('designation', '=', 'juniorinstructor')->where('status', '=', 'current')->get();

    return view('printPanel.allCurrentJuniorinstructorReport')->with($data);
}else{
    return redirect('admin');
}
    }
    public function allCurrentOfficestaffReport(){

if (Auth::check()) {


    $data['allStraff'] = Member::orderBy('id', 'desc')->where('designation', '=', 'officestaff')->where('status', '=', 'current')->get();

    return view('printPanel.allCurrentOfficestaffReport')->with($data);
}else{
    return redirect('admin');
}
    }




//all ex straff report


    public function allExPrincipleReport(){

if (Auth::check()) {


    $data['allStraff'] = Member::orderBy('id', 'desc')->where('designation', '=', 'principle')->where('status', '=', 'ex')->get();

    return view('printPanel.allExPrincipleReport')->with($data);
}else{
    return redirect('admin');
}
    }

    public function allExViceprincipleReport(){

    if (Auth::check()) {


        $data['allStraff'] = Member::orderBy('id', 'desc')->where('designation', '=', 'viceprinciple')->where('status', '=', 'ex')->get();

        return view('printPanel.allExViceprincipleReport')->with($data);
    }else{
        return redirect('admin');
    }
    }


    public function allExChiefinstructorReport(){

if (Auth::check()) {


    $data['allStraff'] = Member::orderBy('id', 'desc')->where('designation', '=', 'chiefinstructor')->where('status', '=', 'ex')->get();

    return view('printPanel.allExChiefinstructorReport')->with($data);
}else{
    return redirect('admin');
}
    }
    public function allExCraftinstructorReport(){
if (Auth::check()) {


    $data['allStraff'] = Member::orderBy('id', 'desc')->where('designation', '=', 'craftinstructor')->where('status', '=', 'ex')->get();

    return view('printPanel.allExCraftinstructorReport')->with($data);
}else{
    return redirect('admin');
}
    }
    public function allExInstructorReport(){
if (Auth::check()) {


    $data['allStraff'] = Member::orderBy('id', 'desc')->where('designation', '=', 'instructor')->where('status', '=', 'ex')->get();

    return view('printPanel.allExInstructorReport')->with($data);
}else{
    return redirect('admin');
}
    }
    public function allExJuniorinstructorReport(){

if (Auth::check()) {


    $data['allStraff'] = Member::orderBy('id', 'desc')->where('designation', '=', 'juniorinstructor')->where('status', '=', 'ex')->get();

    return view('printPanel.allExJuniorinstructorReport')->with($data);
}else{
    return redirect('admin');
}
    }
    public function allExOfficestaffReport()
    {
        if (Auth::check()) {


        $data['allStraff'] = Member::orderBy('id', 'desc')->where('designation', '=', 'officestaff')->where('status', '=', 'ex')->get();

        return view('printPanel.allExOfficestaffReport')->with($data);
    }else{
            return redirect('admin');
        }
    }


public function softList(){
  if (Auth::check()) {


      $data['softLists'] = Member::orderBy('file_no', 'asc')->where('file_no','>=','20091000')->get();

      return view('adminpanel.softListAll')->with($data);
  }else{
      return redirect('admin');
  }
}
















}
