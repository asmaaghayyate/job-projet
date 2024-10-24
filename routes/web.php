<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnnancesController;
use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\Admin\UtilisateurController;
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

    return view('admin.index',compact('utilisateurcount',
    'annancespublieecount','annancesenattentecount','annancesfermeecount'));
})->name("admin.dashboard")->middleware(['auth.admin']);





Route::post('/admin/login',[AuthAdminController::class,'login'])->name('loginadmin');
Route::post('logout/admin',  [AuthAdminController::class,"logout"])->name('logoutadmin');



Route::controller(AnnancesController::class)->middleware(['auth.admin'])->group(function () {
Route::get('/admin/annances','index')->name('admin.lesannances');

Route::get('/admin/annances/en-attente','indexenattente')->name('admin.lesannances.enattente');
Route::get('/admin/annances/publiee','indexpubliee')->name('admin.lesannances.publiee');
Route::get('/admin/annances/fermee','indexfermee')->name('admin.lesannances.fermee');


Route::delete('/admin/annances/destroy/{annance}','destroy')->name('admin.annances.destroy');
Route::post('/admin/updatetat/{annance}','updatetat')->name('updatetat');
});



Route::controller(UtilisateurController::class)->middleware(['auth.admin'])->group(function () {
Route::get('/admin/utilisateurs','index')->name('admin.utilisateurs');
Route::delete('/admin/utilisateur/destroy/{user}','destroy')->name('admin.utilisateur.destroy');
Route::post('/admin/utilisateur/{user}/toggle-block',  'toggleBlock')->name('admin.utilisateur.toggle-blockd');

});


Route::resource('admin' , AdminController::class)->middleware(['auth.admin']);




// Route::middleware(['auth.admin'])->group(function () {
//     Route::get('/admin/annances',[AnnancesController::class,'lesannances'])->name('lesannances');
//     });






Route::get('/', function () {
    $toutlesemploiscount=Annance::where('etat','publiée')->count();
    $dernieresannances = Annance::where('etat','publiée')->latest()->take(5)->get();
 return view('index',compact('toutlesemploiscount','dernieresannances'));
    })->name('index');



Route::controller(AuthController::class)->middleware(['guest'])->group(function () {
Route::get('/login/form', 'formlogin')->name('formlogin');
Route::post('/login', 'login')->name('login');

Route::get('/auth/google', 'redirect')->name('google-auth');
Route::get('/auth/google/call-back', 'callbackgoogle')->name('callbackgoogle');



Route::get('/register/form', 'formregister')->name('formregister');
Route::post('/register', 'register')->name('register');

});



Route::post('logout', [AuthController::class,'logout'])->name('logout');






Route::controller(EmploisController::class)->group(function () {
Route::post('/emplois','emplois')->name('emplois');
Route::get('/annance/{slug}','showemplois')->name('showemplois');
});










Route::controller(ProfileController::class)
->middleware(['auth','CheckUserBlocked'])->group(function () {
Route::get('/profile','monprofile') ->name('monprofile');
Route::get('/profile/ajouter-entreprise', 'ameliorerprofileemployeur')
->name('ajouterentreprise');

Route::get('/profile/ameliorer-profile', 'ameliorerprofile')
->name('ameliorerprofile');

Route::get('profile/mesentreprises','mesentreprises') ->name('mesentreprises');
Route::get('profile/mesannances','mesannances') ->name('mesannances');
});





Route::get('/publierannance',[AnnanceController::class,'publierannance'])
->name('publierannance')->middleware(['auth','CheckUserBlocked']);



Route::controller(EmployeurController::class)->middleware(['auth','CheckUserBlocked'])->group(function () {
Route::post('/profile/store-entreprise','store')->name('store.entreprise');
Route::post('/profile/store-annance','storeannance')->name('store.annance');
Route::get('/profile/messageannance','messageannance')->name('messageannance');
Route::post('/profile/update','update') ->name('update.profile');

});



Route::controller(CandidatureController::class)->middleware(['auth','CheckUserBlocked'])->group(function () {

 Route::get('/profile/postuler/{annance}', 'postuleremplois')
 ->name('postuleremplois')->middleware('Verifypostule');

 Route::post('/candidature/store/{annance}','store')
    ->name('store.candidature');

Route::get('/candidature/message','messagecandidature')->name('messagecandidature');

Route::get('/candidatures/index','index')->name('lescandidatures');
Route::get('/mescandidatures/index','mescandidatures')->name('mescandidatures');

Route::post('/candidatures/update/{candidature}','updatetatcandidature')
->name('updatetatcandidature');



});
