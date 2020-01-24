<?php

namespace App\Http\Controllers;

use App\Model\Admin;
use App\Model\studentList;
use Illuminate\Http\Request;

class backendController extends Controller
{
    public function dashboard()
    {
        $data['admin']=Admin::all();
        $data['student']=studentList::all();
        return view('Backend.pages.dashboard',$data);

    }

    public function addAdmin()
    {
        $admin_active = 'show';
        return view('Backend.pages.admin.addAdmin', compact('admin_active'));

    }

    public function addAdminAction(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:admins,username',
            'email' => 'required|unique:admins,email',
            'password' => 'required|confirmed|min:5'
        ]);
        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        if (Admin::create($data)) {
            return redirect(route('manageAdmin'))->with('adminCreate', 'Admin Created');
        }
        return redirect()->back()->with('fail', 'Failed');

    }

    public function manageAdmin()
    {
        $admin_active = 'show';
        $admins = Admin::orderBy('id', 'DESC')->get();
        return view('Backend.pages.admin.manageAdmin', compact('admin_active', 'admins'));
    }

    public function updateAdmin($id)
    {
        $admin_active = 'show';
        $adminData = Admin::find($id);
        return view('Backend.pages.admin.updateAdmin', compact('admin_active', 'adminData'));
    }

    public function updateAdminAction(Request $request, $id)
    {
        $request->validate([
            'username' => "required|unique:admins,username,$id",
            'email' => "required|unique:admins,email,$id",
            'password' => 'required|confirmed|min:5'
        ]);
        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        if (Admin::find($id)->update($data)) {
            return redirect(route('manageAdmin'))->with('adminCreate', 'Admin Updated');
        }
        return redirect()->back()->with('fail', 'Failed');
    }

    public function deleteAdmin($id)
    {
        Admin::find($id)->delete();
        return redirect()->back()->with('fail', 'Deleted');

    }


    public function addStudent()
    {
        $student_active = 'show';
        return view('Backend.pages.student.addStudent', compact('student_active'));
    }

    public function addStudentAction(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobileNo' => 'required|unique:student_lists,mobileNo',
            'email' => 'required|unique:student_lists,email',
            'address' => 'required',
            'position' => 'required',
            'age' => 'required',
            'bankName' => 'required'
        ]);
        $studentData = str_pad(count(studentList::all()) + 50, 4, '0', STR_PAD_LEFT);
        $data['name'] = $request->name;
        $data['mobileNo'] = $request->mobileNo;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['position'] = $request->position;
        $data['age'] = $request->age;
        $data['bankName'] = $request->bankName;
        if ($data['bankName'] === 'Best Finance') {
            $data['studentID'] = 'TA-BES' . '-' . $studentData;
        } else {
            $data['studentID'] = 'TA-BAN' . '-' . $studentData;
        }
        if (studentList::create($data)) {
            return redirect(route('addStudent'))->with('studentCreate', 'Student Added');
        }
        return redirect()->back()->with('fail', 'fail');
    }


    public function manageStudent()
    {
        $student_active = 'show';
        $students = studentList::orderBy('id', 'DESC')->get();
        return view('Backend.pages.student.manageStudent', compact('student_active', 'students'));
    }

    public function updateStudent($id)
    {
        $student_active = 'show';
        $studentData = studentList::find($id);
        return view('Backend.pages.student.updateStudent', compact('studentData', 'student_active'));

    }

    public function updateStudentAction(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'mobileNo' => "required|unique:student_lists,mobileNo,$id",
            'email' => "required|unique:student_lists,email,$id",
            'address' => 'required',
            'position' => 'required',
            'age' => 'required',
            'bankName' => 'required'
        ]);
        $studentData = str_pad(count(studentList::all()) + 50, 4, '0', STR_PAD_LEFT);
        $data['name'] = $request->name;
        $data['mobileNo'] = $request->mobileNo;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['position'] = $request->position;
        $data['age'] = $request->age;
        $data['bankName'] = $request->bankName;
        if ($data['bankName'] === 'Best Finance') {
            $data['studentID'] = 'TA-BES' . '-' . $studentData;
        } else {
            $data['studentID'] = 'TA-BAN' . '-' . $studentData;
        }
        if (studentList::find($id)->update($data)) {
            return redirect(route('manageStudent'))->with('studentCreate', 'Student Updated');
        }
        return redirect()->back()->with('fail', 'fail');

    }

    public function deleteStudent($id)
    {
        studentList::find($id)->delete();
        return redirect()->back()->with('fail', 'Deleted');
    }


    public function admitCard()
    {
        return view('Backend.pages.admitCard');
    }

}
