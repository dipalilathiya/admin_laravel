<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Tblemployee;
use Illuminate\Http\Request;
use App\Models\Tbltask;
class employeecontroller extends Controller
{  
    public function emp_login(Request $req)
    {
       if ($req->session()->has('e_id')) {
            return redirect('/employee_view'); 
       }
          if (isset($req->submit)) {
               $email = $req->email;
               $password = $req->password;
               
               $data = Tblemployee::where('email', $email)->first();
             if ($data->password != $password) {
                echo "<h1>Wrong Password</h1>";
             } else {
                session(['e_id' => $data->id]);
                return redirect('/emp/empviewdata');
             }
          }
          return view('/Employee/employee_login');
    } 
    public function emp_viewdata(Request $req) 
    {
        if($req->session()->has('e_id')) {
            $id = session('e_id');
            $data = Tbltask::where("empid",$id)->join('tblemployee', 'tblemployee.id', '=','tbltask.empid')
            ->join('tbladmin', 'tbltask.assignby', '=', 'tbladmin.id')
            ->select('task_name', 'description', 'date', 'name','assignby','a_name','tbltask.id')->paginate(3);
            // print_r($data);die();
            }
            else{
                return redirect('/emp/employee_login');
            }
            return view('/Employee/viewdata')->with('data' ,$data);  
        }  
        public function logout1(Request $req)
        {
           if($req->session()->has('e_id')) {
                   $req->session()->flush();
              return redirect('/emp/employee_login');
           }
        }     
}
