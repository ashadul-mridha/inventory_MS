<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Employee Controller are here
//create Employee
Route::get('/employees/create','App\Http\Controllers\EmployeeController@create')->name('employee.create');
//store Employee
Route::post('/employees','App\Http\Controllers\EmployeeController@store')->name('employees.store');
//show all  Employee
Route::get('/employees/all','App\Http\Controllers\EmployeeController@index')->name('employees.index');
//show single employee details
Route::get('/employees/{employee_id}','App\Http\Controllers\EmployeeController@show')->name('employee.show');
//delete single employee details
Route::get('/employee-delete/{employee_id}','App\Http\Controllers\EmployeeController@destroy')->name('employee.destroy');
//edit single employee details
Route::get('/employees/{employee_id}/edit','App\Http\Controllers\EmployeeController@edit')->name('employee.edit');
//Update single employee details
Route::post('/employees/{employee_id}','App\Http\Controllers\EmployeeController@update')->name('employee.update');

// Customer Controller are here
//create Employee
Route::get('/customers/create','App\Http\Controllers\CustomerController@create')->name('customer.create');
//store Employee
Route::post('/customers','App\Http\Controllers\CustomerController@store')->name('customer.store');
//show all  Employee
Route::get('/customers/all','App\Http\Controllers\CustomerController@index')->name('customer.index');
//show single employee details
Route::get('/customers/{customer_id}','App\Http\Controllers\CustomerController@show')->name('customer.show');
//delete single employee details
Route::get('/customer-delete/{customer_id}','App\Http\Controllers\CustomerController@destroy')->name('customer.destroy');
//edit single employee details
Route::get('/customers/{customer_id}/edit','App\Http\Controllers\CustomerController@edit')->name('customer.edit');
//Update single employee details
Route::post('/customers/{customer_id}','App\Http\Controllers\CustomerController@update')->name('customer.update');

// Supplier Controller are here
//create Supplier
Route::get('/suppliers/create','App\Http\Controllers\SupplierController@create')->name('supplier.create');
// store Supplier
Route::post('/suppliers','App\Http\Controllers\SupplierController@store')->name('supplier.store');
// show all  Supplier
Route::get('/suppliers/all','App\Http\Controllers\SupplierController@index')->name('supplier.index');
//show single Supplier details
Route::get('/suppliers/{supplier_id}','App\Http\Controllers\SupplierController@show')->name('supplier.show');
//delete single Supplier details
Route::get('/supplier-delete/{supplier_id}','App\Http\Controllers\SupplierController@destroy')->name('supplier.destroy');
// edit single Supplier details
Route::get('/suppliers/{supplier_id}/edit','App\Http\Controllers\SupplierController@edit')->name('supplier.edit');
//Update single Supplier details
Route::post('/suppliers/{supplier_id}','App\Http\Controllers\SupplierController@update')->name('supplier.update');

// Salary Controller are here
//create Salary
Route::get('/salaries/create','App\Http\Controllers\SalaryController@create')->name('salary.create');
// store Salary
Route::post('/insert-advanced_salaries','App\Http\Controllers\SalaryController@store')->name('salary.store');
// show all  Salary
Route::get('/salaries/all','App\Http\Controllers\SalaryController@index')->name('salary.index');
// Pay Salary
Route::get('/salaries/pay','App\Http\Controllers\SalaryController@paysalary')->name('salary.pay');

// Category Controller are here
//create Category
Route::get('/category/create','App\Http\Controllers\CategoryController@create')->name('category.create');
// store Category
Route::post('/catagories','App\Http\Controllers\CategoryController@store')->name('category.store');
// show all  Category
 Route::get('/category/all','App\Http\Controllers\CategoryController@index')->name('category.index');
//delete single Category details
Route::get('/category-delete/{id}','App\Http\Controllers\CategoryController@destroy')->name('category.destroy');
// edit single Category details
Route::get('/category-edit/{id}','App\Http\Controllers\CategoryController@edit')->name('category.edit');
//Update single Category details
Route::post('/catagory-update','App\Http\Controllers\CategoryController@update')->name('category.update');


// Product Controller are here
//create Product
Route::get('/products/create','App\Http\Controllers\ProductController@create')->name('product.create');
// store Product
Route::post('/products','App\Http\Controllers\ProductController@store')->name('product.store');
// show all  Product
Route::get('/products/all','App\Http\Controllers\ProductController@index')->name('product.index');
//show single Product details
Route::get('/products/{id}','App\Http\Controllers\ProductController@show')->name('product.show');
//delete single Product details
Route::get('/product-delete/{id}','App\Http\Controllers\ProductController@destroy')->name('product.destroy');
// edit single Product details
Route::get('/products/{id}/edit','App\Http\Controllers\ProductController@edit')->name('product.edit');
//Update single Product details
Route::post('/products/update','App\Http\Controllers\ProductController@update')->name('product.update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
