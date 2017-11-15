<?php

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


Route::get('/dashboard','memberController@search');
Route::get('/information','memberController@serchData');




//member info

Route::get('/add','memberController@showMemberForm');
Route::post('/addInfo','memberController@insertMemberData');

//Current staff

Route::get('/currentPrinciple','memberController@currentPrincipleData');
Route::get('/currentViceprinciple','memberController@currentViceprincipleData');
Route::get('/currentChiefinstructor','memberController@currentChiefinstructorData');
Route::get('/currentCraftinstructor','memberController@currentCraftinstructorData');
Route::get('/currentInstructor','memberController@currentInstructorData');
Route::get('/currentJuniorinstructor','memberController@currentJuniorinstructorData');
Route::get('/currentOfficestaff','memberController@currentOfficestaffData');


//ex staff
Route::get('/exPrinciple','memberController@exPrincipleData');
Route::get('/exViceprinciple','memberController@exViceprincipleData');
Route::get('/exChiefinstructor','memberController@exChiefinstructorData');
Route::get('/exCraftinstructor','memberController@exCraftinstructorData');
Route::get('/exInstructor','memberController@exInstructorData');
Route::get('/exJuniorinstructor','memberController@exJuniorinstructorData');
Route::get('/exOfficestaff','memberController@exOfficestaffData');

//staff detiles
Route::get('/staffDetiles/{id}','memberController@showStaffDetiles');

//staff data edit

Route::get('/staffDataEdit/{id}','memberController@staffDataEdit');
Route::post('/staffDataUpdate/{id}','memberController@staffDataUpdate');

//staff data delete

Route::get('/staffDataDelete/{id}','memberController@staffDataDelete');

//staff data move
Route::get('/moveOnEx/{id}','memberController@memberMoveOnEx');
Route::post('/moveOnEx/{id}','memberController@memberMoveOnExUpdate');
//staff move and return
Route::get('/moveOnExAndReturn/{id}','memberController@memberMoveOnExAndReturn');
Route::post('/moveOnExAndReturn/{id}','memberController@memberMoveOnExAndReturnUpdate');

//staff move again current
Route::get('/moveOnCurrent/{id}','memberController@memberMoveOnAgainCurrent');
Route::post('/moveOnCurrent/{id}','memberController@memberMoveOnAgainCurrentUpdate');


//admin data
Route::get('/addAdmin','adminController@showAdminForm');
Route::post('/adminAdd','adminController@addAdminData');
Route::get('/adminData','adminController@showAdminData');
Route::get('/adminEdit/{id}','adminController@adminDataEdit');
Route::post('/adminUpdate/{id}','adminController@adminDataUpdate');
Route::get('/adminDelete/{id}','adminController@adminDataDelete');





////font page

Route::get('/','adminController@viewFontPage');
Route::get('/fontPageDataSearch','adminController@viewDataSearch');

Route::get('/fontPageS','adminController@viewDataS');


//loging system

Route::group(['middleware'=>['web']],function (){
    Route::get('/admin',['as'=>'login','uses'=>'AuthController@login']);
    Route::post('/handleLogin',['as'=>'handleLogin','uses'=>'AuthController@handleLogin']);
    Route::get('/logOut',['as'=>'logOut','uses'=>'AuthController@logOut']);
});

//password reset

Route::get('/forgottenPassword','adminController@passwordLinkSent');
Route::post('/passwordResetLink','adminController@passwordResetLink');
Route::get('/reset/{token}','adminController@resetProcess');
Route::post('/reset/{token}','adminController@updatePassword');


//all current staffa category data report

Route::get('/CurrentPrincipleReport','memberController@CurrentPrincipleReport');

Route::get('/allCurrentViceprincipleReport','memberController@allCurrentViceprincipleReport');
Route::get('/allCurrentChiefinstructorReport','memberController@allCurrentChiefinstructorReport');
Route::get('/allCurrentCraftinstructorReport','memberController@allCurrentCraftinstructorReport');
Route::get('/allCurrentInstructorReport','memberController@allCurrentInstructorReport');
Route::get('/allCurrentJuniorinstructorReport','memberController@allCurrentJuniorinstructorReport');
Route::get('/allCurrentOfficestaffReport','memberController@allCurrentOfficestaffReport');

//all ex staffa category data report

Route::get('/allExPrincipleReport','memberController@allExPrincipleReport');
Route::get('/allExViceprincipleReport','memberController@allExViceprincipleReport');
Route::get('/allExChiefinstructorReport','memberController@allExChiefinstructorReport');
Route::get('/allExCraftinstructorReport','memberController@allExCraftinstructorReport');
Route::get('/allExInstructorReport','memberController@allExInstructorReport');
Route::get('/allExJuniorinstructorReport','memberController@allExJuniorinstructorReport');
Route::get('/allExOfficestaffReport','memberController@allExOfficestaffReport');

//soft list all

Route::get('/softList','memberController@softList');

//mail send single staff


Route::get('/mailSend/{id}','SendController@mailSend');
Route::post('/mailSend/{id}','SendController@mailSendProcess');

//MAIL_DRIVER=smtp
//MAIL_HOST=smtp.mailtrap.io
//MAIL_PORT=2525
//MAIL_USERNAME=1cbed11b74b597
//MAIL_PASSWORD=4daed2a552c524
//MAIL_ENCRYPTION=tls
