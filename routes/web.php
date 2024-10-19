<?php

use App\Http\Controllers\Admin\AnnancesController;
use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\AnnanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\EmploisController;
use App\Http\Controllers\EmployeurController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileemployeurController;
use App\Models\Annance;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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


Route::get('/admin', function () {
    return view('Admin.auth.formloginadmin');
})->middleware('guest:admin')->name('formloginadmin');

Route::get('/admin/index', function () {

$utilisateurcount=User::all()->count();
$annancespublieecount=Annance::where('etat','publiée')->count();
$annancesenattentecount=Annance::where('etat','en attente')->count();
$annancesfermeecount=Annance::where('etat','fermée')->count();
    return view('admin.index',compact('utilisateurcount','annancespublieecount','annancesenattentecount','annancesfermeecount'));
})->name("admin.dashboard")->middleware(['auth.admin']);



Route::post('/admin/login',[AuthAdminController::class,'login'])->name('loginadmin');
Route::post('logout/admin',  [AuthAdminController::class,"logout"])->name('logoutadmin');



Route::middleware(['auth.admin'])->group(function () {
Route::get('/admin/annances',[AnnancesController::class,'lesannances'])->name('lesannances');
Route::post('/admin/updatetat/{annance}',[AnnancesController::class,'updatetat'])->name('updatetat');
});









Route::get('/', function () {
    $toutlesemploiscount=Annance::all()->count();
    $dernieresannances = Annance::where('etat','publiée')->latest()->take(5)->get();
 return view('index',compact('toutlesemploiscount','dernieresannances'));
    })->name('index');



Route::controller(AuthController::class)->middleware(['guest'])->group(function () {
Route::get('/login/form', 'formlogin')->name('formlogin');
Route::post('/login', 'login')->name('login');

Route::get('/register/form', 'formregister')->name('formregister');
Route::post('/register', 'register')->name('register');

});



Route::post('logout', [AuthController::class,'logout'])->name('logout');






Route::controller(EmploisController::class)->group(function () {
Route::post('/emplois','emplois')->name('emplois');
Route::get('/annance/{slug}','showemplois')->name('showemplois');
});







Route::get('/profile/postuler/{annance}', [ProfileController::class,'postuleremplois'])
->name('postuleremplois')->middleware('auth');



Route::controller(ProfileemployeurController::class)->middleware(['auth'])->group(function () {
Route::get('/profile','monprofileemployeur') ->name('monprofile');
Route::get('/profile/ajouter-entreprise', 'ameliorerprofileemployeur')
->name('ajouterentreprise');

Route::get('/profile/ameliorer-profile', 'ameliorerprofile')
->name('ameliorerprofile');

Route::get('profile/mesentreprises/{user}','mesentreprises') ->name('mesentreprises');
Route::get('profile/mesannances/{user}','mesannances') ->name('mesannances');


});



Route::get('/publierannance',[AnnanceController::class,'publierannance'])
->name('publierannance')->middleware('auth');



Route::controller(EmployeurController::class)->middleware(['auth'])->group(function () {
Route::post('/profile/store-entreprise','store')->name('store.entreprise');
Route::post('/profile/store-annance','storeannance')->name('store.annance');
Route::get('/profile/messageannance','messageannance')->name('messageannance');
Route::post('/profile/update','update') ->name('update.profile');

});



Route::post('/candidature/store/{annance}',[CandidatureController::class,'store'])
->name('store.candidature')->middleware('auth');

Route::get('/candidature/message',[CandidatureController::class,'messagecandidature'])
->name('messagecandidature')
->middleware('auth');



Route::get('/candidatures/index',[CandidatureController::class,'index'])
->name('lescandidatures')
->middleware('auth');


Route::post('/candidatures/update/{candidature}',[CandidatureController::class,'updatetatcandidature'])
->name('updatetatcandidature')
->middleware('auth');
