<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

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

//mailing part
Route::get('/email', function (){
    Mail::to('captcha2002@gmail.com')->send(new WelcomeMail());
    return new WelcomeMail();
});

//define routing
Route::get('/approach',         function () { return view('approach'); });
Route::get('/career',           function () { return view('career'); });
Route::get('/commitment',       function () { return view('commitment'); });
Route::get('/contact', 'ContactUsController@index')->name('contact');
Route::post('/contact', 'ContactUsController@store')->name('contactus_store');
Route::get('/',                 function () { return view('index'); });
Route::get('/matesglobal',      function () { return view('matesglobal'); });
Route::get('/mission',          function () { return view('mission'); });
Route::get('/privacy',          function () { return view('privacy'); });
Route::get('/safety',           function () { return view('safety'); });
Route::get('/safety_policy',    function () { return view('safety_policy'); });
Route::get('/team',             function () { return view('team'); });
Route::get('/terms',            function () { return view('terms'); });
Route::get('/vision',           function () { return view('vision'); });
Route::get('/why_choose',       function () { return view('why_choose'); });
Route::get('/workforce',        function () { return view('workforce'); });


//.............>>>Category MG AGRICULTURE STAFF<<<..................
Route::get('/fruit-picking-recruitment',                function () { return view('fruit-picking-recruitment'); });
Route::get('/agriculture-recruitment',              function () { return view('agriculture-recruitment'); });
Route::get('/agriculture-staff-recruitment',            function () { return view('agriculture-staff-recruitment'); });
Route::get('/farm-hand-recruitment',                    function () { return view('farm-hand-recruitment'); });
Route::get('/chicken-catcher-recruitment',              function () { return view('chicken-catcher-recruitment'); });
//.............>>>Category MG CONSTRUCTION STAFF<<<..................

//.............>>>Category MG OFFICE STAFF<<<..................
//...............................Accounting
Route::get('/accounts-payable-officer-recruitment',     function () { return view('accounts-payable-officer-recruitment'); });
Route::get('/assistant-accountant-recruitment',         function () { return view('assistant-accountant-recruitment'); });
Route::get('/bookkeeping-recruitment',                  function () { return view('bookkeeping-recruitment'); });
Route::get('/financial-analyst-recruitment',            function () { return view('financial-analyst-recruitment'); });
//...............................Administration
Route::get('/office-administrator-recruitment',         function () { return view('office-administrator-recruitment'); });
Route::get('/customer-services-officer-recruitment',    function () { return view('customer-services-officer-recruitment'); });
//...............................IT and Technology
Route::get('/it-business-analyst-recruitment',          function () { return view('it-business-analyst-recruitment'); });
Route::get('/systems-engineer-recruitment',             function () { return view('systems-engineer-recruitment'); });
Route::get('/network-administrator-recruitment',        function () { return view('network-administrator-recruitment'); });
Route::get('/database-developer-recruitment',           function () { return view('database-developer-recruitment'); });
//...............................Recruitment and selection


Route::get('/payroll-officer-recruitment',              function () { return view('payroll-officer-recruitment'); });
Route::get('/payroll-recruitment',              function () { return view('payroll-recruitment'); });
Route::get('/it-recruitment',              function () { return view('it-recruitment'); });
Route::get('/construction-staff-recruitment',           function () { return view('construction-staff-recruitment'); });
Route::get('/construction-recruitment',              function () { return view('construction-recruitment'); });
Route::get('/receptionist-recruitment',                 function () { return view('receptionist-recruitment'); });
Route::get('/office-staff-recruitment',                 function () { return view('office-staff-recruitment'); });
Route::get('/office-support-recruitment',              function () { return view('office-support-recruitment'); });
Route::get('/international-staff-recruitment',          function () { return view('international-staff-recruitment'); });
Route::get('/international-recruitment',              function () { return view('international-recruitment'); });
Route::get('/coordinator-recruitment',                  function () { return view('coordinator-recruitment'); });
Route::get('/executive-assistant-recruitment',          function () { return view('executive-assistant-recruitment'); });
Route::get('/helpdesk-officer-recruitment',             function () { return view('helpdesk-officer-recruitment'); });
Route::get('/mail-sorter-recruitment',                  function () { return view('mail-sorter-recruitment'); });
//.............>>>Category MG IT STAFF<<<.................
//.............>>>Category Industries<<<..................
Route::get('/warehouse-staff-recruitment',              function () { return view('warehouse-staff-recruitment'); });
Route::get('/warehouse-recruitment',              function () { return view('warehouse-recruitment'); });
Route::get('/garden-maintenance-staff-recruitment ',    function () { return view('garden-maintenance-staff-recruitment'); });
Route::get('/casual-labour-hire',              function () { return view('casual-labour-hire'); });
Route::get('/process-worker-recruitment',               function () { return view('process-worker-recruitment'); });
//.............>>>Category MG TRANSPORT STAFF<<<..................
Route::get('/forklift-driver-recruitment',              function () { return view('forklift-driver-recruitment'); });
Route::get('/truck-driver-recruitment',                 function () { return view('truck-driver-recruitment'); });
Route::get('/transport-staff-recruitment',              function () { return view('transport-staff-recruitment'); });
Route::get('/transport-recruitment',              function () { return view('transport-recruitment'); });
//.............>>>Category MG ENGINEERING STAFF<<<..................
Route::get('/engineering-recruitment',              function () { return view('engineering-recruitment'); });
//.............>>>Category MG SHIPBUILDING<<<..................
Route::get('/shipbuilding-staff-recruitment',           function () { return view('shipbuilding-staff-recruitment'); });
Route::get('/shipbuilding-recruitment',              function () { return view('shipbuilding-recruitment'); });
//.............>>>Category MG GLOBAL STAFF<<<..................
//.............>>>Category MG WAREHOUSE STAFF<<<..................
//.............>>>Category MG MAINTENANCE STAFF<<<..................
//.............>>>Category MG LABOURER<<<..................


Route::get('/security-guard-recruitment',               function () { return view('security-guard-recruitment'); });
Route::get('/land-surveyor-recruitment',                function () { return view('land-surveyor-recruitment'); });
Route::get('/electrical-lineman-recruitment',           function () { return view('electrical-lineman-recruitment'); });
Route::get('/maintenance-recruitment',              function () { return view('maintenance-recruitment'); });
Route::get('/labour-hire-company',              function () { return view('labour-hire-company'); });

//changed code here

//Route::get('test', function () {
//
//    $user = [
//        'name' => 'Mahedi Hasan',
//        'info' => 'Laravel Developer'
//    ];
//
//    \Mail::to('mail@codechief.org')->send(new \App\Mail\WelcomeMail($user));
//
//    dd("success");
//
//});
//Route::post('/contact', 'ContactUsController@send')->name('');

