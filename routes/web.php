<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\careersController;
use App\Http\Controllers\contactFormController;
use App\Http\Controllers\leadsController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\newsLetterController;
use App\Http\Controllers\projectController;
use App\Models\newsLetterContent;
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


Route::get('/', [mainController::class, 'index']);
Route::get('/about', [mainController::class, 'about']);
Route::get('/projects/{type?}', [mainController::class, 'projects']);
Route::get('/blogs', [mainController::class, 'blogs']);
Route::get('/contact', [mainController::class, 'contact']);
Route::get('/testimonials', [mainController::class, 'testimonials']);
Route::get('/careers', [mainController::class, 'careers']);
Route::get('/newsletter', [mainController::class, 'newsLetter']);
Route::get('/privacy_policy', [mainController::class, 'privacyPolicy']);

// seo pages
Route::get('/residential-interior-designers-in-bangalore', [mainController::class, 'residentialinterior']);
Route::get('/modular-kitchen-designers-in-bangalore', [mainController::class, 'modularkitchendesigners']);
Route::get('/interior-design-firms-in-bangalore', [mainController::class, 'interiorfirmdesign']);
Route::get('/3-bhk-interior-design-studio-in-bangalore', [mainController::class, 'bestinteriorcost']);

//blogs 
Route::get('/blogoneperfectinteriordesign', [blogController::class, 'blog1']);
Route::get('/blogtwoDIYinteriordesigning', [blogController::class, 'blog2']);
Route::get('/Theartofchoice', [blogController::class, 'blog3']);
Route::get("/psychologyofcolours", [blogController::class, 'blog4']);
Route::get('/playingwithwarmneutraltones', [blogController::class, 'blog5']);
Route::get('/sustainability', [blogController::class, 'blog6']);
Route::get('/cozyhomehaven', [blogController::class, 'blog7']);
Route::get('/textureandspace', [blogController::class, 'blog8']);
Route::get('/minimalistIDT', [blogController::class, 'blog9']);
Route::get('/indoorplants', [blogController::class, 'blog10']);
Route::get('/petfriendlyinteriors', [blogController::class, 'blog11']);
Route::get('/yearroundbrilliance', [blogController::class, 'blog12']);
Route::get('/terracotta', [blogController::class, 'blog13']);
Route::get('/textilesandfabrics', [blogController::class, 'blog14']);
Route::get('/colorpsychology', [blogController::class, 'blog15']);
Route::get('/invitingspaces', [blogController::class, 'blog16']);
Route::get('/circulationspaces', [blogController::class, 'blog17']);
Route::get('/homeoffice', [blogController::class, 'blog18']);
Route::get('/yearround', [blogController::class, 'blog19']);
Route::get('/invitingspace', [blogController::class, 'blog20']);
Route::get('/masteringcirculation', [blogController::class, 'blog21']);
Route::get('/constructionproject', [blogController::class, 'blog22']);
Route::get('/blogs/creative-bedroom-interior-designing-ideas-to-transform-your-space', [blogController::class, 'blog23']);
Route::get('/blogs/how-to-choose-the-perfect-wall-colour-for-every-room-in-your-home', [blogController::class, 'blog24']);
Route::get('/blogs/top-interior-design-trends-for-2025-whats-in-and-whats-out', [blogController::class, 'blog25']);
Route::get('/blogs/creating-functional-beauty-tips-for-designing-your-dream-space', [blogController::class, 'blog26']);
Route::get('/blog/{id}', [blogController::class, 'dynamicBlog']);
//adminblog
Route::post('/addBlogValidation', [blogController::class, 'blogValidation']);
Route::get('/addBlogs', [blogController::class, 'addBlog']);




//project
Route::get('/paladianpanacheone', [projectController::class, 'project1']);
Route::get('/velvetaffairtwo', [projectController::class, 'project2']);
Route::get('/serenadeofnaturethree', [projectController::class, 'project3']);
Route::get('/refinedmodernityfour', [projectController::class, 'project4']);
Route::get('/warmreflectionsfive', [projectController::class, 'project5']);
Route::get('/serenityintealsix', [projectController::class, 'project6']);
Route::get('/timelesscharmseven', [projectController::class, 'project7']);
Route::get('/artdecorevivaleight', [projectController::class, 'project8']);
Route::get('/craftedincanenine', [projectController::class, 'project9']);
Route::get('/gracefulharmonyten', [projectController::class, 'project10']);
Route::get('/craftedcomfortseleven', [projectController::class, 'project11']);
Route::get('/project12', [projectController::class, 'project12']);
Route::get('/project13', [projectController::class, 'project13']);



//careers
Route::get('/adsExecutive', [careersController::class, 'AdsExecutive']);
Route::get("/siteSupervisor", [careersController::class, 'siteSupervisor']);
Route::get("/productionManager", [careersController::class, 'productionManager']);
Route::get("/HR", [careersController::class, 'HR']);
Route::get("/serviceEngineer", [careersController::class, 'serviceEngineer']);
Route::get("/assistantManager", [careersController::class, 'assistantManager']);
Route::get("/graphicDesigner", [careersController::class, 'graphicDesigner']);
Route::get("/draftPerson", [careersController::class, 'draftPerson']);
Route::get("/interiorDesigner", [careersController::class, 'interiorDesigner']);
Route::get("/salesExecutive", [careersController::class, 'salesExecutive']);

//Admin related
//Admin auth
Route::get('/adminlogin', [authController::class, 'adminLogin']);
Route::post('/admincheck', [authController::class, 'admin_check']);
Route::get('/logout', [authController::class, 'logout']);
Route::get('/forgetPassword', [authController::class, 'forgetPassword']);


//admin index page
Route::get('/adminindex', [adminController::class, 'adminindex']);


//lead form
Route::get('/leads', [leadsController::class, 'leads']);
Route::get('/contactedLeads', [leadsController::class, 'contactedLeads']);
Route::post('/contact_submit', [leadsController::class, 'createLead']);
Route::get('/changeStatus/{id}', [leadsController::class, 'changeStatus']);


//User
Route::get('/viewUser', [adminController::class, 'viewUser']);
Route::post('/addUserValidate', [adminController::class, 'addUserValidate']);
Route::get('/deleteUser/{id}', [adminController::class, 'deleteUser']);


//newsLetter
Route::get('/addNewsLetter', [newsLetterController::class, 'addNewsLetter']);
Route::get('/viewNewsLetter', [newsLetterController::class, 'viewNewsLetter']);
Route::post('/newsLetterValidation', [newsLetterController::class, 'newsLetterValidation']);
Route::get('/{id}', [newsLetterController::class, 'newsLetterPage']);
