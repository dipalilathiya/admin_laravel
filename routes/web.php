<?php
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\employeecontroller;
use Illuminate\Support\Facades\Route;

Route::any('admin/a_register',[admincontroller::class ,'a_register']);
Route::get('/admin_view' ,[admincontroller::class, 'a_view']);
Route::get('/emp/emp_view' ,[admincontroller::class, 'emp_view']);
Route::any('/',[admincontroller::class ,'a_login'])->name('a_login');
Route::any('/emp/emp_register',[admincontroller::class ,'emp_register'])->name('reg');

Route::any('/d/{id}',[admincontroller::class ,'delete']);
Route::any('/update/{id}',[admincontroller::class ,'update']);
Route::any('/{id}',[admincontroller::class ,'delete1']);
Route::any('/update1/{id}',[admincontroller::class ,'update1']);
Route::get('/admin/logout',[admincontroller::class,'logout'])->name('logout');
Route::any('/task/{id}',[admincontroller::class,'add_task'])->name('add');
Route::any('/admin/task/view_task',[admincontroller::class,'taskview'])->name('tview');
Route::any('/td/{id}',[admincontroller::class ,'deleteT']);
Route::any('/updateT/{id}',[admincontroller::class ,'updateT'])->name('updatetask');

Route::any('/emp/employee_login',[employeecontroller::class ,'emp_login'])->name('emplogin');
Route::any('/emp/empviewdata',[employeecontroller::class , 'emp_viewdata'])->name('empdata');
Route::get('/emp/logout',[employeecontroller::class,'logout1'])->name('logout1');
Route::any('/admin/menubar',function(){
      return view('menubar');
});
