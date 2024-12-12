<?php

use App\Http\Controllers\Creators;
use App\Http\Controllers\Diplomas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
use App\Http\Controllers\AllPortfolios;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\userController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;




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
    return view('welcome',['user' => Auth::user()]);
});

Route::get('/login',[mycontroller::class,'login']);
Route::get('/register',[mycontroller::class,'register']);
Route::post('/adduser',[mycontroller::class,'adduser']);
Route::post('/login',[userController::class,'login']);


// get the portfolio form
Route::get('/portfolioForm',[mycontroller::class,'portfolioForm'])->middleware('auth');

// insert in creators table

Route::post('/store-data', function () {
    app()->make(Creators::class)->store(request());
    app()->make(Diplomas::class)->store(request());

    return view('projects');
    
});

// Route::post('/store-creators',[Creators::class,'store']);
// Route::post('/store-diplomas',[Diplomas::class,'store']);

Route::get('/templateOne',function(){
    return view('template1/template1');
});


// ajouter des projets

// Route::get('/projects',function(){
//     return view('projects');
// });
Route::post('/addProjects',[ProjectsController::class,'addProjects']);

//  ajouter les soft skills langues competences technique
Route::get('/skills',function(){
    return view('skills');
});
Route::post('/addSkills',[SkillsController::class,'addSkills']);



// afficher les profiles des createurs

// Route::get('/profiles-creator', function(){
//     return view('profilesCreators');
// });
Route::get('/profiles-creator',[Creators::class,'selectProfiles'])->middleware('auth');

// afficher les donnes de chaque createur
Route::get('/afficherData', [Creators::class,'afficherData'])->middleware('auth');


// logout
Route::get('/logout',[userController::class,'logout']);

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// show the forgot password form
Route::get('/forgot-password',[ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
// Send password reset email //
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Show the reset password form //
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');

// Reset password //
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');


Route::get('/template2',function(){
    return view('template1/template2');
});

Route::get('/portfolios', function(){
    return view('portfolios');
});




// Route::get('/templateOne',[AllPortfolios::class,'template1']);
// Route::get('/templateTwo',[AllPortfolios::class,'template2']);


// ajouter la template choisie
Route::post('/addTepmlate',[AllPortfolios::class, 'addTemplate']);
// affcicher les details de chaque createur
Route::get('/afficher-details/{id}',[DetailsController::class,'afficherDetails']);





// page de modification

Route::get('/edit-form', [Creators::class, 'editForm'])->middleware('auth');

Route::post('/update-data', [Creators::class, 'updatedForm'])->middleware('auth');



// settings view
Route::get('/settings', function(){
    return view('settings');
})->middleware('auth');

// formulaire pour changer la template du portfolio

Route::get('/edit-portfolio', [AllPortfolios::class, 'editTemplateForm'])->middleware('auth');

Route::post('/update-template',[AllPortfolios::class, 'updateTemplate'])->middleware('auth');


// telechrger un cv format pdf 

Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);

Route::get('/cv',function(){
    return view('cvPdf');
});


// delete portfolio 

Route::delete('/delete-portfolio', [Creators::class, 'deletePortfolio']);
