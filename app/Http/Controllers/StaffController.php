<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * Staff view with route
     */
    public function index(){
        $staff = Staff::latest() -> get();
        return view('staff.index', [
            'all_staff' => $staff
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * Staff Add Page
     */
    public function create(){
        return view('staff.create');
    }

    /**
     * Staff Data Store In Database
     * With Validation
     */
    public function store(Request $request){
        $this->validate($request, [
            'name'              =>      'required',
            'email'             =>      'required | unique:staff',
            'cell'              =>      'required | unique:staff',
            'uname'             =>      'required | max:15 | min:4 | unique:staff'
        ],[
            'name.required'     =>  'নামের ঘরে নাম লিখুন',
            'email.required'    =>  'ইমেইল ঘরে ইমেইল লিখুন',
        ]);

        /**
         * File Upload in Database
         *
         */
        $unique_name="";
        if ( $request ->hasFile('photo') ) {
            $file = $request ->file('photo');
            $unique_name = md5(time().rand()) .".".$file -> getClientOriginalExtension();
            $file -> move( public_path('media/staff'), $unique_name);
        }


        Staff::create([
            'name'               =>  $request -> name,
            'email'              =>  $request -> email,
            'cell'               =>  $request -> cell,
            'uname'              =>  $request -> uname,
            'password'           =>  password_hash($request -> password, PASSWORD_DEFAULT),
            'age'                =>  $request -> age,
            'photo'              =>  $unique_name
        ]);
        return redirect() -> back() -> with('success', 'Staff added successful !');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * Single Data Show
     */
    public function show($id){
        $staff = Staff::find($id);
        return view('staff.show', [
            'staff' => $staff
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * Delete Data From Database
     */
    public function delete($id){
        $delete = Staff::find($id);
        $delete -> delete();
        /**
         * If file exists then delete from the media folder
         */
        if ( file_exists('media/staff/'.$delete -> photo) ) {
            unlink('media/staff/'.$delete -> photo);
        }

        return redirect()->back()->with('success', 'Staff deleted successful!');
    }
    /**
     * Edit Data
     *
     */

    public function edit($id){
        $edit_data = Staff::find($id);
        return view('staff.edit', [
            'edit_data' => $edit_data
        ]);
    }

    /**
     * Update Data in Database
     */

    public function update(Request $request, $id)
    {

        if ($request-> hasFile('new_photo')) {
            $file_name = $request -> file('new_photo');
            $unique_name = md5(time().rand()).'.'.$file_name-> getClientOriginalExtension();
            $file_name -> move(public_path('media/staff'), $unique_name);

            if (file_exists('media/staff/'. $request->old_photo)) {
                unlink('media/staff/'. $request->old_photo);
            }
        }else{
            $unique_name = $request -> old_photo;
        }

        $update_data = Staff::find($id);
        $update_data -> name = $request -> name;
        $update_data -> email = $request -> email;
        $update_data -> cell = $request -> cell;
        $update_data -> uname = $request -> uname;
        $update_data -> age = $request -> age;
        $update_data -> photo = $unique_name;
        $update_data ->update();

        return redirect() -> back() -> with('success', 'Staff updated successful!');
    }
}
