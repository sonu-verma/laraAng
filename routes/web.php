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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email_test', function(Request $request)
{
    echo "hi";
    \Mail::send('emails.test', [], function($message) {
        $message->from(env('ADMIN_EMAIL'), env('ADMIN_EMAIL_NAME'));
        $message->to('sonu@evolutionco.com', 'rahul')->subject("MHRIL | Testing");
    });

// $abc = '$2y$10$A9ozAMtYZ/pzexi4dfG.8.MQ.A0/BsASh4QpMIKT33uG11ecZXj5q';
// $def = bcrypt("kapil@12345");
// $sess = session()->all();
// print_r($sess);
// echo "<hr />";
// $sessq = session()->put('abcd', '1234');
// print_r($sessq);
//session()->flush();
//$sess = session()->all();
// Via a request instance...
//$request->session()->put('key', 'value');
// Via the global helper...
//session(['key' => 'value']);
//$request->session()->push('user.teams', 'developers');
//$value = $request->session()->pull('key', 'default');
//$request->session()->flash('status', 'Task was successful!');
//$request->session()->reflash();//
//$request->session()->keep(['username', 'email']);
//$request->session()->forget('key');//
//$request->session()->flush();
//$request->session()->regenerate();

//return view('emails.auth.activate');
});
// Testing routes
