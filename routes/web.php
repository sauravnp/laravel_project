<?php
use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\Message;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session; // Import the Session facade



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $services = Service::all();
    return view('index', compact('services'));
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service', function () {
    $services = Service::all();
    return view('service', compact('services'));

});

Route::post('/contact_save', function (Request $request) {
    // reciee data from form
    // save message data to database using message model
    //redirect back to contact page
     // Receive data from the for
     Message::create($request->all());
     Session::flash('success', 'Data inserted');
     return redirect('/contact');

});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::post('/contact-save', function (Request $request) {
    message::create($request->all());
    return redirect()->back()->with('success', 'You have Successfully Registred');
});

Route::get('/admin/dashboard', function () {
    $countmessage = Message::count();

    return view('admin.dashboard', compact('countmessage'));
});
