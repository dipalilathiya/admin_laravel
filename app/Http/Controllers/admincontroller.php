<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Tblbrance;
use App\Models\Tbltask;
use Illuminate\Http\Request;
use App\Models\Tbladmin;
use App\Models\Tblemployee;

class admincontroller extends Controller
{
   public function a_register(Request $req)
   {
      if ($req->session()->has('id')) {
         if (isset($req->submit)) {
            $a_name = $req->a_name;
            $password = $req->password;
            $email = $req->email;
            $data = Tbladmin::where('email', $email)->first();
            if (!$data) {
               $arr = array('a_name' => $a_name, 'email' => $email, 'password' => $password);
               Tbladmin::insert($arr);
               return redirect('a_login');
            } else {
               echo "<h1>Email already exit</h1>";
            }
         }
         return view('admin_register');
      }
   }
   public function a_login(Request $req)
   {
      // if($req->session()->has('id'))
      // {
      if (isset($req->submit)) {

         $email = $req->email;
         $password = $req->password;
         $data = Tbladmin::where('email', $email)->first();
         // print_r($data);die();

         if ($data->password != $password) {
            echo "<h1>Wrong Password</h1>";
         } else {
            session(['id' => $data->id]);
            session(['name' => $data->a_name]);

            return redirect('/emp/emp_view');
         }
         // }
      }
      return view('admin_login');
   }
   // -------------------------------------------------------------
   public function emp_register(Request $req)
   {
      if ($req->session()->has('id')) {
         if (isset($req->submit)) {
            $name = $req->name;
            $password = $req->password;
            $email = $req->email;
            $branch = $req->branch;
            //  echo $branch;die();
            $add_by = session('name');

            $data = Tblemployee::where('email', $email)->first();
            if (!$data) {
               $arr = array('name' => $name, 'add_by' => $add_by, 'email' => $email, 'password' => $password, 'branch' => $branch);
               Tblemployee::insert($arr);
               return redirect('/emp/emp_view');
            } else {
               echo "<h1>Email already exit</h1>";
            }
         }
         //  $data =Tblemployee::get();
         //  echo '<pre>';
         $branch = Tblbrance::get();
         $data = Tblemployee::join('tblbrance', 'tblemployee.branch', '=', 'tblbrance.id')->select('tblemployee.id', 'tblemployee.name', 'tblemployee.email', 'tblemployee.password', 'tblemployee.add_by', 'tblbrance.branch')->get();

         //  echo '<pre>';
         //  print_r($data);die();
         return view('employee_register')->with('data', $data)->with('branch', $branch);
      }
   }
   public function delete1(Request $req, $id)
   {
      // if($req->session()->has('id'))
      // {
      Tbladmin::where('id', $id)->delete();
      return redirect('/admin_view');
      // }
   }
   public function update1(Request $req, $id)
   {
      if ($req->session()->has('id')) {
         if (isset($req->submit)) {
            $a_name = $req->a_name;
            $password = $req->password;
            $email = $req->email;
            $arr = array('a_name' => $a_name, 'email' => $email, 'password' => $password);
            $data = Tbladmin::where('id', $id)->update($arr);

            return redirect('/admin_view');

         }
         $data = Tbladmin::where('id', $id)->first();
         return view('admin_update')->with('data', $data);
      }
   }
   public function delete(Request $req, $id)
   {

      Tblemployee::where('id', $id)->delete();
      return redirect("/emp/emp_view");
   }
   public function update(Request $req, $id)
   {
      if ($req->session()->has('id')) {
         if (isset($req->submit)) {
            $name = $req->name;
            $password = $req->password;
            $email = $req->email;
            $branch = $req->branch;
            $arr = array('name' => $name, 'email' => $email, 'password' => $password, 'branch' => $branch);
            $data = Tblemployee::where('id', $id)->update($arr);
            return redirect('/emp/emp_view');
         }
         $data = Tblemployee::where('id', $id)->first();
         return view('update')->with('data', $data);
      }
   }
   // ---------
   public function logout(Request $req)
   {
      if ($req->session()->has('id')) {
         $req->session()->flush();
         return redirect('/');
      }
   }
   public function a_view(Request $req)
   {
      if ($req->session()->has('id')) {
         $data = Tbladmin::get();
         return view('admin_view')->with('data', $data);
      }
   }
   public function emp_view(Request $req)
   {
      if ($req->session()->has('id')) {
         $data = Tblemployee::paginate(3);
         return view('emp_view')->with('data', $data);
      } else {
         return redirect('/');
      }
   }
   public function add_task(Request $req, $id)
   {
      if ($req->session()->has('id')) {
         if (isset($req->submit)) {
            $task_name = $req->task_name;
            $description = $req->description;
            $date = $req->date;

            $assignby = (int) session('id');
            $arr = array('task_name' => $task_name, 'description' => $description, 'date' => $date, 'empid' => $id, 'assignby' => $assignby);
            $data = Tbltask::insert($arr);
            return redirect('/admin/task/view_task');
         }
         // $data = Tbltask::get();
         return view('add_task');
      }
   }
   public function taskview(Request $req)
   {
      // $data = Tbltask::get();
      if($req->session()->has('id')){
      $data = Tbltask::join('tblemployee', 'tblemployee.id', '=', 'tbltask.empid')
                     ->join('tbladmin', 'tbltask.assignby', '=', 'tbladmin.id')
                     ->select('task_name', 'description', 'date', 'name', 'assignby', 'a_name','tbltask.id')->paginate(2);
                        return view('taskview')->with('data', $data);
     }
   }
   public function deleteT(Request $req, $id)
   {
      // if($req->session()->has('id'))
      // {
      Tbltask::where('id', $id)->delete();
      return redirect('/admin/task/view_task');
      // }
   }
   public function updateT(Request $req, $id)
   {
      // if ($req->session()->has('id')) {
         if (isset($req->submit)) {
            $task_name = $req->task_name;
            $description = $req->description;
            $date = $req->date;
            $arr = array('task_name' => $task_name, 'description' => $description, 'date' => $date);
            $data = Tbltask::where('id', $id)->update($arr);
            return redirect('/admin/task/view_task');
         }
         $data = Tbltask::where('id', $id)->first();
         return view('update_task')->with('data', $data);
      }
   // }
}
