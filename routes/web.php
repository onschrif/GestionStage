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
    //return redirect('esprit');
    return view('welcome');
});

Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/logout', 'MainController@logout');
Route::get('/main/successlogin', 'MainController@successlogin');
Route::post('/sendMail', 'MainController@sendMail');
Route::resource('/admin/posts', 'PostsController');


//---------------------ADMIN----------------------------------------

Route::get('/admin', 'AdminController@login');
Route::get('/admin/home', 'AdminController@AdminHome');
Route::get('/admin/newCompanys', 'AdminController@newCompanys');
Route::get('/admin/companys', 'AdminController@companys');
Route::get('/admin/companys/{id}/delete', 'AdminController@deleteCompanys');

Route::get('/admin/profile', 'AdminController@profile');
Route::get('/admin/users', 'AdminController@users');
Route::get('/admin/newCompanys/{id}/accept', 'AdminController@acceptNewCompanys');
Route::get('/admin/newCompanys/{id}/refuse', 'AdminController@refuseNewCompanys');
Route::get('/admin/validation', 'AdminController@validation');
Route::get('admin/{stage_id}/{user_id}/affectation', 'AdminController@choisirEns');
Route::post('admin/{stage_id}/{user_id}/affectation', 'AdminController@choisirEns');
Route::get('admin/{ens_id}/{stage_id}/{user_id}/affecterEnseignant', 'AdminController@affecterEns');
Route::get('/admin/uploadDocumentation', 'AdminController@uploadDocumentation');
Route::post('/admin/uploadDocumentation', 'AdminController@uploadDocumentation');
Route::post('/insertJournal', array('as'=>'insertfile','uses'=>'AdminController@uploadJournal'));
Route::post('/insertAttestation', array('as'=>'insertfile','uses'=>'AdminController@uploadAttestation'));


//------------------------------------------------------------------

//--------------------MANAGER-----------------------------------------
Route::group(['middleware' => 'revalidate'], function()
{
Route::get('main/EspaceResponsable','MainController@EspaceResponsable');
Route::get('main/EspaceResponsable/addCompany', 'ResponsableController@addCompany');
Route::post('main/EspaceResponsable/addCompany', 'ResponsableController@addCompany');
Route::get('main/EspaceResponsable/internshipList', 'ResponsableController@internshipList');
Route::get('main/EspaceResponsable/{id}/deleteInternship', 'ResponsableController@deleteInternship');
Route::get('main/EspaceResponsable/{id}/updateInternship', 'ResponsableController@updateInternship');
Route::post('main/EspaceResponsable/{id}/updateInternship', 'ResponsableController@updateInternship');

Route::get('main/EspaceResponsable/addInternship', 'ResponsableController@addInternship');
Route::post('main/EspaceResponsable/addInternship', 'ResponsableController@addInternship');
Route::get('main/EspaceResponsable/internshipsRequests', 'ResponsableController@internshipsRequests');
Route::get('main/EspaceResponsable/profile', 'ResponsableController@profile');

    Route::get('main/EspaceResponsable/{stage_id}/{user_id}/acceptInternship', 'ResponsableController@acceptInternship');
    Route::get('main/EspaceResponsable/{stage_id}/{user_id}/deleteRequest', 'ResponsableController@deleteRequest');

    Route::get('main/EspaceResponsable/{user_id}/downloadCv', 'ResponsableController@downloadCv');

    Route::post('main/EspaceResponsable/profile', 'ResponsableController@profile');
    Route::get('main/EspaceResponsable/profile', 'ResponsableController@profile');




});
//-----------------------ETUDIANT-------------------------------------------

Route::group(['middleware' => 'revalidate'], function()
{


    Route::get('main/EspaceEtudiant','EtudiantController@EspaceEtudiant');
    Route::get('main/EspaceEtudiant/addCompany', 'EtudiantController@addCompany');
    Route::post('main/EspaceEtudiant/addCompany', 'EtudiantController@addCompany');
    Route::get('main/EspaceEtudiant/internshipList', 'EtudiantController@internshipList');
    Route::get('main/EspaceEtudiant/{id}/deleteInternship', 'EtudiantController@deleteInternship');

    Route::post('main/EspaceEtudiant/{id}/updateInternship', 'EtudiantController@updateInternship');

    Route::get('main/EspaceEtudiant/addInternship', 'EtudiantController@addInternship');
    Route::post('main/EspaceEtudiant/addInternship', 'EtudiantController@addInternship');
    Route::get('main/EspaceEtudiant/internshipsRequests', 'EtudiantController@internshipsRequests');


    Route::get('main/EspaceEtudiant/{id}/send', 'EtudiantController@send');
    Route::get('main/EspaceEtudiant/profileEtud', 'EtudiantController@profileEtud');
    Route::post('main/EspaceEtudiant/updateprofile', 'EtudiantController@updateprofile');
    Route::get('main/EspaceEtudiant/uploadfile', 'EtudiantController@uploadfile');
    Route::post('/insertfile', array('as'=>'insertfile','uses'=>'EtudiantController@insertfile'));
    Route::get('main/EspaceEtudiant/{stage_id}/{user_id}/deleteRequest', 'EtudiantController@deleteRequest');

    Route::get('main/EspaceEtudiant/Documentation', 'EtudiantController@Documentation');
    Route::post('main/EspaceEtudiant/Documentation', 'EtudiantController@Documentation');
    Route::post('main/EspaceEtudiant/demandeStage', 'EtudiantController@demandeStage');
    Route::post('main/EspaceEtudiant/convention', 'EtudiantController@convention');


    Route::get('main/EspaceEtudiant/test', 'EtudiantController@test');


    Route::post('main/EspaceEtudiant/affectation', 'EtudiantController@lettreAffectation');
    Route::post('main/EspaceEtudiant/journal', 'EtudiantController@journal');
    Route::post('main/EspaceEtudiant/assurance', 'EtudiantController@assurance');
    Route::post('main/EspaceEtudiant/attestation', 'EtudiantController@attestation');

    Route::get('main/EspaceEtudiant/Validation', 'EtudiantController@Validation');

    Route::get('main/EspaceEtudiant/{stage_id}/{user_id}/demandevalidation', 'EtudiantController@validationRequest');
    Route::post('/insertfilerapport', array('as'=>'insertfilerapport','uses'=>'EtudiantController@insertfilerapport'));
    Route::post('/insertJournalEtudiant/{stage_id}', array('as'=>'insertfile','uses'=>'EtudiantController@validationRequest'));

    Route::get('main/EspaceEtudiant/addSheet', 'EtudiantController@addSheet');
    Route::post('main/EspaceEtudiant/addSheet', 'EtudiantController@addSheet');


});
//--------------------ENSEIGNANT-----------------------------------------
Route::group(['middleware' => 'revalidate'], function()
{
    Route::get('main/EspaceEnseignant/','MainController@index');
    Route::get('main/EspaceEnseignant/internshipValidation', 'EnseignantController@internshipValidation');
    Route::post('main/EspaceEnseignant/internshipValidation', 'EnseignantController@internshipValidation');
    Route::get('main/EspaceEnseignant/internshipList', 'EnseignantController@internshipList');
    Route::get('main/EspaceEnseignant/{id}/deleteInternship', 'EnseignantController@deleteInternship');
    Route::get('main/EspaceEnseignant/{id}/updateInternship', 'EnseignantController@updateInternship');
    Route::post('main/EspaceEnseignant/{id}/updateInternship', 'EnseignantController@updateInternship');

    Route::get('main/EspaceEnseignant/{stage_id}/{user_id}/acceptInternship', 'EnseignantController@acceptInternship');
    Route::get('main/EspaceEnseignant/{stage_id}/{user_id}/deleteRequest', 'EnseignantController@deleteRequest');

    Route::get('main/EspaceEnseignant/{user_id}/downloadCv', 'EnseignantController@downloadCv');

    Route::post('main/EspaceEnseignant/updatePassword', 'EnseignantController@profile');
    Route::get('main/EspaceEnseignant/updatePassword', 'EnseignantController@profile');

    Route::get('main/EspaceEnseignant/addInternship', 'EnseignantController@addInternship');
    Route::post('main/EspaceEnseignant/addInternship', 'EnseignantController@addInternship');
    Route::get('main/EspaceEnseignant/internshipsRequests', 'EnseignantController@internshipsRequests');
    Route::get('main/EspaceEnseignant/profile', 'EnseignantController@profile');
    Route::get('main/EspaceEnseignant/{stage_id}/{user_id}/downloadRapport', 'EnseignantController@downloadRapport');
    Route::get('main/EspaceEnseignant/{stage_id}/{user_id}/downloadJournal', 'EnseignantController@downloadJournal');

    Route::get('main/EspaceEnseignant/validation/{stage_id}/{user_id}', 'EnseignantController@validation');
    Route::post('main/EspaceEnseignant/validation/{stage_id}/{user_id}', 'EnseignantController@validation');





});
//------------------------------------------------------------------

//------------------------------------------------------------------

Route::get("esprit", function () {
    return view('index');
});


Route::group(['middleware' => 'revalidate'], function()
{
    Route::get('main/EspaceEtudiant','MainController@EspaceEtudiant');
    Route::get('main/EspaceEtudiant/profile','MainController@EspaceEtudiantProfile');
    Route::get('main/EspaceEnseignant', 'MainController@EspaceEnseignant');
    Route::get('main/redirect', 'MainController@redirect');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
