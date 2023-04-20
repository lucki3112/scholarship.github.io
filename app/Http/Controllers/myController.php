<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\institute;
use App\Models\scholarship;
use App\Models\state;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class myController extends Controller
{
    public function index(Request $request)
    {
        return view('component.home');
    }
    public function signup(Request $request)
    {
        return view('component.student.student_signup');
    }
    public function login(Request $request)
    {
        return view('component.student.student_login');
    }
    public function store(Request $request)
    {
        $student = new student();
        $student->name = $request['name'];
        $student->email = $request['email'];
        $student->password = Hash::make($request->password);
        $student->mobile = $request['mobile'];
        if ($file = $request->file('img')) {
            $fname = $file->getClientOriginalName();
            if ($file->move('uploads', $fname)) {
                $student->image = 'uploads/' . $fname;
            }
        }
        $save = $student->save();
        if ($save) {
            return redirect('login')->with('success', 'Account Created successfully');
        } else {
            return back()->with('fail', 'You should enter all field');
        }
    }
    public function signin(Request $request)
    {
        $student = student::where('email', '=', $request->email)->first();
        if ($student) {
            if (Hash::check($request->password, $student->password)) {
                $request->session()->put('id', $student->id);
                return redirect('profile');
            } else {
                return back()->with('p_fail', 'Incorrect password');
            }
        } else {
            return back()->with('e_fails', 'Your email does not have any account');
        }
    }
    public function profile(Request $request)
    {
        if (session()->has('id')) {
            $student = student::where('id', '=', session()->get('id'))->first();
            $scholarship=scholarship::all();
            $sc=scholarship::where('id','=',$student->scholarship_id)->first();
            return view('component.student.student_profile')->with(compact('student'))->with(compact('scholarship'))->with(compact('sc'));
        }
    }
    public function logout(Request $request)
    {
        if (session()->has('id')) {
            $request->session()->pull('id');
            return redirect('login')->with('logout', 'Logout successfully');
        }
    }
    public function admin_login(Request $request)
    {
        return view('component.admin.admin_login');
    }
    public function admin_sigin(Request $request)
    {
        $admin = admin::where('email', '=', $request->email)->first();
        if ($admin) {
            if (Hash::check($request->password, $admin->password)) {
                $request->session()->put('admin', $admin->id);
                return redirect('admin_profile');
            }
        }
    }
    public function admin_profile(Request $request)
    {
        if (session()->has('admin')) {
            $admin = admin::where('id', '=', session()->get('admin'))->first();
            return view('component.admin.admin_profile')->with(compact('admin'));
        }
    }
    public function add_scholarship(Request $request)
    {
        return view('component.admin.add_scholarship');
    }
    public function store_scholarship(Request $request)
    {
        $scholarship = new scholarship();
        $scholarship->name = $request['name'];
        $scholarship->last_date = $request['date'];
        $scholarship->amount = $request['amount'];
        $scholarship->qualification = $request['qualification'];
        $scholarship->marks = $request['marks'];
        $save = $scholarship->save();
        if ($save) {
            return redirect('view_scholarship')->with('add_scholarship', 'Scholarship added');
        }
    }
    public function view_scholarship(Request $request)
    {
        $scholarship = scholarship::all();
        return view('component.admin.view_scholarship')->with(compact('scholarship'));
    }
    public function update_scholarship(Request $request, $id)
    {
        $scholarship = scholarship::find($id);
        return view('component.admin.edit_scholarship')->with(compact('scholarship'));
    }
    public function delete_scholarship(Request $request, $id)
    {
        $scholarship = scholarship::find($id);
        $scholarship->delete();
        return redirect('view_scholarship');
    }
    public function edit_scholarship(Request $request, $id)
    {
        $scholarship = scholarship::find($id);
        $scholarship->name = $request['name'];
        $scholarship->last_date = $request['date'];
        $scholarship->amount = $request['amount'];
        $scholarship->qualification = $request['qualification'];
        $scholarship->marks = $request['marks'];
        $save = $scholarship->update();
        if ($save) {
            return redirect('view_scholarship');
        }
    }
    public function admin_logout(Request $request)
    {
        if (session()->has('admin')) {
            $request->session()->pull('admin');
            return redirect('admin_login');
        }
    }
    public function admin_change_password(Request $request)
    {
        return view('component.admin.admin_change_password');
    }
    public function admin_password(Request $request)
    {
        if (session()->has('admin')) {
            $admin = admin::where('id', '=', session()->get('admin'))->first();
            if (Hash::check($request->old_password, $admin->password)) {
                $admin->password = Hash::make($request->new_password);
                $update = $admin->update();
                if ($update) {
                    return redirect('admin_profile');
                } else {
                    return back();
                }
            } else {
                return back();
            }
        }
    }
    public function apply(Request $request,$id){
        if(session()->has('id')){
            $student=student::where('id','=',session()->get('id'))->first();
            $scholarship=scholarship::find($id);
            return view('component.student.apply_scholarship')->with(compact('student'))->with(compact('scholarship'));
            
        }
    }
    public function apply_scholarship(Request $request){
        if(session()->has('id')){
            $student=student::where('id','=',session()->get('id'))->first();
            $student->name=$request['name'];
            $student->email=$request['email'];
            $student->mobile=$request['mobile'];
            if($file=$request->file('img')){
                $fname=$file->getClientOriginalName();
                if($file->move('uploads',$fname)){
                    $student->image='uploads/'.$fname;
                }
            }
            $student->bank_account_number=$request['account'];
            $student->bank_ifsc_code=$request['ifsc'];
            $student->address=$request['address'];
            $student->city=$request['city'];
            $student->state=$request['state'];
            $student->pin_code=$request['pin'];
            $student->university=$request['university'];
            $student->roll_number=$request['roll'];
            $student->stream=$request['stream'];
            $student->semester=$request['sem'];
            $student->marks=$request['marks'];
            $student->scholarship_id=$request['s_id'];
            $student->institute_verification=$request['i_verification'];
            $student->state_verification=$request['s_verification'];
            $student->district_verification=$request['d_verification'];
            $student->lot_number=$request['lot_number'];
            $student->payment_status=$request['p_status'];
            $update=$student->update();
            if($update){
                return redirect('profile')->with('apply',"Your scholarship is successfullt applied");
            }
            else{
                return back()->with('a_fail','sorry there was some mistake');
            }
        }
    }
    public function track(Request $request){
        if(session()->has('id')){
            $student=student::where('id','=',session()->get('id'))->first();
            $scholarship=scholarship::find($student->scholarship_id);
            return view('component.student.track_scholarship')->with(compact('student'))->with(compact('scholarship'));

        }
    }
    public function institute_signup(){
        return view('component.institute.institute_signup');
    }
    public function institute_store(Request $request){
        $ins=new institute();
        $ins->name=$request['name'];
        $ins->email=$request['email'];
        $ins->mobile=$request['mobile'];
        $ins->password=Hash::make($request->password);
        $ins->address=$request['address'];
        $save=$ins->save();
        if($save){
            return redirect('institute_login')->with('i_success','Institute registered successfully');
        }
        else{
            return back();
        }
    }
    public function institute_login(){
        return view('component.institute.institute_login');
    }
    public function institute_signin(Request $request){
        $ins=institute::where('email','=',$request->email)->first();
        if($ins){
            if(Hash::check($request->password,$ins->password)){
                $request->session()->put('ins',$ins->id);
                return redirect('institute_profile');
            }
            else{
                return back()->with('p','password error');
            }
        }
        else{
            return back()->with('e','email does not exist');
        }
    }
    public function institute_profile(Request $request){
        if(session()->has('ins')){
            $ins=institute::where('id','=',session()->get('ins'))->first();
            return view('component.institute.institute_profile')->with(compact('ins'));
        }
    }
    public function institute_logout(Request $request){
        if(session()->has('ins')){
            $request->session()->pull('ins');
            return redirect('institute_login');
        }
    }
    public function applicant(Request $request){
        if(session()->has('ins')){
            $ins=institute::where('id','=',session()->get('ins'))->first();
            $student=student::all()->where('university','=',$ins->name);
            return view('component.institute.applicant')->with(compact('student'));
        }
    }
    public function student(Request $request,$id){
        $student=student::find($id);
        $scholarship=scholarship::where('id','=',$student->scholarship_id)->first();
        return view('component.institute.student')->with(compact('student'))->with(compact('scholarship'));
    }
    public function verify(Request $request,$id){
        $student=student::find($id);
        $student->institute_verification='Verified';
        $update=$student->update();
        if($update){
            return redirect('student/'.$id);
        }
    }
    
    public function state_login(Request $request){
        return view('component.state.state_login');
    }
    public function state_signin(Request $request){
        $state=state::where('email','=',$request->email)->first();
        if($state){
            if(Hash::check($request->password,$state->password)){
                $request->session()->put('state',$state->id);
                return redirect('state_profile');
            }
            else{
                return back()->with('p','password error');
            }
        }
        else{
            return back()->with('e','email does not exist');
        }
    }
    public function state_profile(Request $request){
        if(session()->has('state')){
            $state=state::where('id','=',session()->get('state'))->first();
            return view('component.state.state_profile')->with(compact('state'));
        }
    }
    public function state_logout(Request $request){
        if(session()->has('state')){
            $request->session()->pull('state');
            return redirect('state_login');
        }
    }
    public function state_applicant(Request $request){
        if(session()->has('state')){
            $student=student::all();
            return view('component.state.student_view')->with(compact('student'));
        }
    }
    public function student_detail(Request $request,$id){
        $student=student::find($id);
        $scholarship=scholarship::where('id','=',$student->scholarship_id)->first();
        return view('component.state.student')->with(compact('student'))->with(compact('scholarship'));
    }
    public function state_verify(Request $request,$id){
        $student=student::find($id);
        $student->state_verification='Verified';
        $student->lot_number="8934761";
        $student->payment_status="Success";
        $update=$student->update();
        if($update){
            return redirect('student_detail/'.$id);
        }
    }
}
