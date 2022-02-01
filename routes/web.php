<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/clear-cache', function() {
//     Artisan::call('cache:clear');
//     return "Cache is cleared";
// });



Route::get('/','FrontController@index')->name('/');
Route::get('contact','ContactController@index')->name('contact');
Route::get('about','AboutController@index')->name('about');
Route::get('members','AboutController@Members')->name('members');
Route::get('mechanic','FrontController@Mechanic')->name('allmechanic');
Route::get('catmech/{id}/{category_name}','FrontController@Mech_by_cat')->name('catmech');
Route::get('area_mech/{id}/{area_name}','FrontController@Mech_by_area')->name('area_mech');
Route::get('singleMech/{id}/{cat}/{area}','FrontController@MechSingle')->name('singleMech');
Route::get('hire/{id}','FrontController@Hire')->name('hire');
Route::get('src_mech','FrontController@MechanicSrc')->name('src_mech');


//Customer authentication
Route::get('customer_register','CustomerController@Register')->name('customer_register');
Route::post('new_customer','CustomerController@NewCustomer')->name('new_customer');
Route::get('verify_customer/{code}','CustomerController@Verify')->name('verify_customer');
Route::get('customer_login','CustomerController@Login')->name('customer_login');
Route::post('login_cust','CustomerController@LoginCustomer')->name('login_cust');
Route::get('custLogout','CustomerController@LogoutCustomer')->name('custLogout');

//End customer authentication

Route::post('rating','FrontController@store')->name('rating');

Auth::routes();

Route::group(['middleware' => 'protectauth'],function(){
    Route::get('/home', 'AdminController@index')->name('home');
    //Area
    Route::get('/admin/area', 'AreaController@area')->name('area');
    Route::post('/admin/area_new', 'AreaController@NewArea')->name('area_new');
    Route::get('/admin/area/delete/{id}', 'AreaController@DeleteArea')->name('delete');
    //modal edit data
    Route::get('/admin/area_details/{id}', 'AreaController@DetailArea');
    //modal edit data
    Route::post('/admin/update_area', 'AreaController@UpdateArea')->name('update_area');
    Route::get('/admin/area/changestatus', 'AreaController@StatusChange')->name('changestatus');
    //End Area

    //Category
    Route::get('/admin/category', 'CategoryController@Category')->name('category');
    Route::post('/admin/newcategory', 'CategoryController@CategoryNew')->name('newcat');
    Route::get('/admin/cat_details/{id}', 'CategoryController@DetailCat');
    Route::post('/admin/update_cat', 'CategoryController@UpdateCat')->name('update_cat');
    Route::get('/admin/category/deletecat/{id}', 'CategoryController@DeleteCat')->name('deletecat');

    Route::get('/admin/category/changestatuscat', 'CategoryController@StatusChangeCat')->name('changestatuscat');
    //End Category

    //Mechanic
    Route::get('/admin/mechanic','MechanicController@Mechanic')->name('mechanic');
    Route::post('/admin/saveMech','MechanicController@MechSave')->name('saveMech');
    Route::get('/admin/mechEdit/{id}','MechanicController@EditMechanic')->name('mechEdit');
    Route::post('/admin/updatemechanic','MechanicController@MechUpdate')->name('updatemechanic');
    Route::get('/admin/mechanic/changestatusmech', 'MechanicController@StatusChangeMech')->name('changestatusmech');
    Route::get('/admin/mechanic/deletemech/{id}', 'MechanicController@DeleteMech')->name('deletemech');
    //End Mechanic

    Route::get('/admin/allhire','HireController@index')->name('allhire');

    Route::get('/admin/seen/{id}','HireController@Seen')->name('seen');
    Route::get('/admin/unseen/{id}','HireController@Unseen')->name('unseen');
    Route::get('/admin/finishwork/{id}','HireController@Finishwork')->name('finishwork');

});