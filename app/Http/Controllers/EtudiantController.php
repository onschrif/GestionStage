<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Entreprise;
use App\Stage;
use App\users;
use App\Stage_Users;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
use Validator;
use Redirect;
use App\FileModel;
use Exception;
use App;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade as PDF;
class EtudiantController extends Controller
{
    //


    function validationRequest($stage_id)

    {

        $filenamjournal = Input::file('filenamjournal');
        $rules = array(
            'filenamjournal' => 'required|max:10000|mimes:doc,docx,jpeg,png,jpg,pdf'
        );


        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::to('main/EspaceEtudiant/Validation')->withInput()->withErrors($validator);

        } else if ($validator->passes()) {
            // checking file is valid.
            if ( Input::file('filenamjournal')->isValid()) {

                // upload path
                $user=Auth::user();
                $extensionjournal = Input::file('filenamjournal')->getClientOriginalExtension(); // getting  extension

                $filenamejournals = $user->firstname.'_'.$user->lastname.rand(11,99). '.' . $extensionjournal; // renameing
                $destinationPathjournal = '../storage';//its refers proj/public/files directry

            $user=Auth::user();
                $users = Stage_Users::where('user_id', '=', $user->id)->where('stage_id', '=', $stage_id)->update(['validation' =>'non affecté', 'journal' => $filenamejournals]);

                $upload_success = $filenamjournal->move($destinationPathjournal, $filenamejournals);


                $notification = array(
                    'message' => 'File Uploaded successfully!',
                    'alert-type' => 'success'
                );

                return Redirect::to('main/EspaceEtudiant/Validation')->with($notification);


            } else {

                $notification = array(
                    'message' => 'uploaded file is not valid!',
                    'alert-type' => 'error'
                );

                return Redirect::to('main/EspaceEtudiant/Validation')->with($notification);
            }


        }

        // return view('Etudiant/Documentation');

    }

    function addCompany(Request $request)
    {
        if ($request->isMethod('post')) {
            $entreprise = new Entreprise();
            $entreprise->name = $request->input('name');
            $entreprise->fiscalNumber = $request->input('fiscalNumber');
            $entreprise->mail = $request->input('email');
            $entreprise->phone = $request->input('phoneNumber');
            $entreprise->address = $request->input('address');
            $entreprise->description = $request->input('description');
            $entreprise->status = 0;
            $entreprise->manager_id = Auth::user()->id;
            $entreprise->save();
        }
        return view('Etudiant/addCompany');
    }


    function internshipList(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {

        } else {

            $internships = Stage::where('nbPersons', '!=', 0)->where('status', '!=', 'etudiant')->latest()->paginate($perPage);


        }


        return view('Etudiant/internshipList', compact('internships'));
    }

    function deleteInternship($id)
    {
        Stage::destroy($id);

        return redirect('main/EspaceEtudiant/internshipList');

    }


    function addInternship(Request $request)
    {
        if ($request->isMethod('post')) {
            $stage = new Stage();
            $stage->description = $request->input('description');
            $stage->type = $request->input('type');
            $stage->startingDate = $request->input('startingDate');
            $stage->endingDate = $request->input('endingDate');
            $stage->domaine = $request->input('domaine');
            $stage->title = $request->input('title');
            $stage->nbPersons = $request->input('nbPersons');
            $stage->status = 'etudiant';
            $stage->ideator_id = Auth::user()->id;
            //$stage_id = Stage::create($stage)->id;
            $stage->save();

            $insertedId = $stage->id;


            $stage_user = new Stage_Users();
            $stage_user->user_id = Auth::user()->id;
            $stage_user->stage_id = $insertedId;
            $stage_user->validation = 'non traitée';
            $stage_user->assignment = 0;
            $stage_user->save();
        }

        return view('Etudiant/addInternship');

    }

    function updateInternship(Request $request, $id)
    {
        $internship = Stage::find($id);
        if ($internship->ideator_id == Auth::user()->id) {


            if ($request->isMethod('post')) {
                $stage = $internship;
                $stage->description = $request->input('description');
                $stage->type = $request->input('type');
                $stage->startingDate = $request->input('startingDate');
                $stage->duration = $request->input('duration');
                $stage->domaine = $request->input('domaine');
                $stage->title = $request->input('title');
                $stage->status = 'c';
                $stage->save();
                return redirect('main/EspaceEtudiant/internshipList');
            } else {

                return view('Etudiant/updateInternship', compact('internship'));
            }
        } else {
            return redirect('main/EspaceEtudiant/internshipList');
        }

    }


    function profileEtud()
    {
        $user = Auth::user();

        return view('Etudiant/profileEtud', compact('user'));


    }

    function internshipsRequests()
    {

        return view('Etudiant/internshipsRequests');
    }

    function index()
    {

        return view('Etudiant/dashboard');
    }


    function uploadfile()
    {
        return view('Etudiant/profileEtud');
    }


    function demandeStage(Request $request)
    {
        $user = Auth::User();
        $pdf = App::make('dompdf.wrapper');
        $pdf = PDF::loadView('Etudiant/demandeStage', compact('user'))->save(storage_path('demande.pdf'))->stream('demande.pdf');
        Mail::send('mail', ['password' => ""], function ($message) {
            $message->to('bensaidracem@gmail.com', '')->subject
            ('Demande de Stage');
            $message->attach(storage_path('demande.pdf'));


        });

        $notification = array(
            'message' => 'Votre Demande Sera Traitée Dans 24H!',
            'alert-type' => 'success'
        );

        return Redirect::to('main/EspaceEtudiant/Documentation')->with($notification);

    }

    function lettreAffectation(Request $request)
    {
        $user = Auth::User();
        $dateD = $request->input('dateD');
        $dateF = $request->input('dateF');
        $entreprise = $request->input('entreprise');
        $pdf = App::make('dompdf.wrapper');
        $pdf = PDF::loadView('Etudiant/affectation', compact('user', 'entreprise', 'dateD', 'dateF'))->save(storage_path('affectation.pdf'))->stream('affectation.pdf');
        Mail::send('mail', ['password' => ""], function ($message) {
            $message->to('bensaidracem@gmail.com', '')->subject
            ("lettre D'affectation Stage d'été");
            $message->attach(storage_path('affectation.pdf'));


        });

        // return response()->download(storage_path('demande.docx'));
        $notification = array(
            'message' => 'Votre Demande Sera Traitée Dans 24H!',
            'alert-type' => 'success'
        );

        return Redirect::to('main/EspaceEtudiant/Documentation')->with($notification);


    }


    function journal(Request $request)
    {


        return response()->download(storage_path('journal.docx'));

    }

    function assurance(Request $request)
    {


        return response()->download(storage_path('assurance.pdf'));

    }

    function attestation(Request $request)
    {


        return response()->download(storage_path('assurance.pdf'));

    }

    function convention(Request $request)
    {
        $user = Auth::User();
        $entreprise = $request->input('entreprise');
        $address = $request->input('address');
        $numTel = $request->input('numTel');
        $repFirstName = $request->input('repFirstName');
        $repLastName = $request->input('repLastName');
        $mailRep = $request->input('mailRep');
        $dateD = $request->input('dateD');
        $dateF = $request->input('dateF');

        $combo = $request->input('select');
        if ($combo == 'tn') {
            $pdf = App::make('dompdf.wrapper');
            $pdf = PDF::loadView('Etudiant/conventionTun', compact('user', 'address', 'entreprise', 'numTel', 'repFirstName', 'repLastName'
                , 'repLastName', 'mailRep', 'dateD', 'dateF'))->save(storage_path('convention.pdf'))->stream('convention.pdf');
            Mail::send('mail', ['password' => ""], function ($message) {
                $message->to('bensaidracem@gmail.com','')->subject
                ('convention');
                $message->attach(storage_path('convention.pdf'));


            });

            $notification = array(
                'message' => 'Votre Demande Sera Traitée Dans 24H!',
                'alert-type' => 'success'
            );

            return Redirect::to('main/EspaceEtudiant/Documentation')->with($notification);
        } else {

            $dateN = $request->input('dateN');
            $nationalite = $request->input('nationalite');
            $addressE = $request->input('addressE');
            $user->numTel = $request->input('numTelE');
            $nature = $request->input('nature');
            $numSiren = $request->input('numSiren');
            $lieu = $request->input('lieu');

            $pdf = App::make('dompdf.wrapper');
            $pdf = PDF::loadView('Etudiant/conventionFr', compact('user', 'address', 'entreprise', 'numTel', 'repFirstName', 'repLastName'
                , 'repLastName', 'mailRep', 'dateD', 'dateF', 'nationalite', 'addressE', 'nature', 'numSiren', 'lieu', 'dateN'))->save(storage_path('conventionFr.pdf'))->stream('conventionFr.pdf');
            Mail::send('mail', ['password' => ""], function ($message) {
                $message->to('bensaidracem@gmail.com', '')->subject
                ('convention');
                $message->attach(storage_path('conventionFr.pdf'));


            });

            $notification = array(
                'message' => 'Votre Demande Sera Traitée Dans 24H!',
                'alert-type' => 'success'
            );

            return Redirect::to('main/EspaceEtudiant/Documentation')->with($notification);
        }


        //return response()->download(storage_path('demande.docx'));
    }


    function insertfile()
    {

        $file = Input::file('filenam');


        $rules = array(

            'filenam' => 'required|max:10000|mimes:doc,docx,jpeg,png,jpg,pdf'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::to('main/EspaceEtudiant/profileEtud')->withInput()->withErrors($validator);

        } else if ($validator->passes()) {
            // checking file is valid.
            if (Input::file('filenam')->isValid()) {

                // upload path
                $extension = Input::file('filenam')->getClientOriginalExtension(); // getting  extension
                $filename = rand(11111, 99999) . '.' . $extension; // renameing

                $destinationPath = '../storage';//its refers proj/public/files directry

                //$file->move($destinationPath, $filename);
                $user = users::find(Auth::user()->id);


                $user->file = $filename;
                $user->save();
                // $user::insert($data);
                // $user::updating($data);

                $upload_success = $file->move($destinationPath, $filename);


                $notification = array(
                    'message' => 'File Uploaded successfully!',
                    'alert-type' => 'success'
                );

                return Redirect::to('main/EspaceEtudiant/profileEtud')->with($notification);


            } else {
                // sending back with error message.


                $notification = array(
                    'message' => 'uploaded file is not valid!',
                    'alert-type' => 'error'
                );

                return Redirect::to('main/EspaceEtudiant/profileEtud')->with($notification);
            }


        }

    }

    function updateprofile(Request $request)
    {
        $user = Auth::user();
        if ($request->isMethod('post')) {

            $user->telNumber = $request->input('telNumber');
            $user->skills = $request->input('skills');
            if (Hash::check($request->input('oldPassword'), $user->getAuthPassword()) && $request->input('password') == $request->input('confirmPassword')) {

                $user->password = Hash::make($request->input('password'));


            }
            $user->save();

            return redirect('main/EspaceEtudiant/profileEtud');
        }

    }

    function send(Request $request, $id)
    {

        $stage = Stage::find($id);
        $user = Auth::user();

        $stage_users = new Stage_Users();
        $stage_users->user_id = $user->id;
        $stage_users->stage_id = $stage->id;
        $stage_users->assignment = 0;
        $stage_users->validation = "Non traitée";
        $stage_users->save();

        return redirect('main/EspaceEtudiant/internshipList');
    }


    function deleteRequest($stage_id, $user_id)
    {


        $res = Stage_Users::where('user_id', '=', $user_id)->where('stage_id', '=', $stage_id)->delete();


        return redirect('main/EspaceEtudiant/internshipsRequests');

    }


    function Documentation(Request $request)
    {
        $user = Auth::user();
        return view('Etudiant/Documentation', compact('user'));
    }

    function Validation(Request $request)
    {

        return view('Etudiant/Validation');

    }

    function test()
    {

        return view('Etudiant/test');

    }


    function insertfilerapport()

    {
        $filerap = Input::file('filenamrap');
        $filenamjournal = Input::file('filenamjournal');
        $rules = array(
            'filenamrap' => 'required|max:10000|mimes:doc,docx,jpeg,png,jpg,pdf',
            'filenamjournal' => 'required|max:10000|mimes:doc,docx,jpeg,png,jpg,pdf'
        );


        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::to('main/EspaceEtudiant/Validation')->withInput()->withErrors($validator);

        } else if ($validator->passes()) {
            // checking file is valid.
            if (Input::file('filenamrap')->isValid() && Input::file('filenamjournal')->isValid()) {

                // upload path
                $extension = Input::file('filenamrap')->getClientOriginalExtension(); // getting  extension
                $filename = rand(11111, 99999) . '.' . $extension; // renameing
                $destinationPath = '../storage';//its refers proj/public/files directry

                $extensionjournal = Input::file('filenamjournal')->getClientOriginalExtension(); // getting  extension
                $filenamejournals = rand(11111, 99999) . '.' . $extensionjournal; // renameing
                $destinationPathjournal = '../storage';//its refers proj/public/files directry


                $users = Stage_Users::where('user_id', '=', 1)->where('stage_id', '=', 2)->update(['rapport' => $filename, 'validator_id' => 3, 'journal' => $filenamejournals]);
                $upload_success = $filerap->move($destinationPath, $filename);
                $upload_success = $filenamjournal->move($destinationPathjournal, $filenamejournals);


                $notification = array(
                    'message' => 'File Uploaded successfully!',
                    'alert-type' => 'success'
                );

                return Redirect::to('main/EspaceEtudiant/Validation')->with($notification);


            } else {

                $notification = array(
                    'message' => 'uploaded file is not valid!',
                    'alert-type' => 'error'
                );

                return Redirect::to('main/EspaceEtudiant/Validation')->with($notification);
            }


        }

        // return view('Etudiant/Documentation');

    }


    function demandevalidation($stage_id, $user_id)
    {

        $res = Stage_Users::where('user_id', '=', $user_id)->where('stage_id', '=', $stage_id)->get();

        return view('Etudiant/test', compact('res'));
    }


    function addSheet(Request $request)
    {
        if ($request->isMethod('post')) {
            $stage = new Stage();
            $stage->description = $request->input('description');
            $stage->type = $request->input('type');
            $stage->startingDate = $request->input('startingDate');
            $stage->endingDate = $request->input('endingDate');
            $stage->domaine = $request->input('domaine');
            $stage->title = $request->input('title');
            $stage->nbPersons = $request->input('nbPersons');
            $stage->status = 'etudiant';
            $stage->ideator_id = Auth::user()->id;
            //$stage_id = Stage::create($stage)->id;
            $stage->save();

            $insertedId = $stage->id;


            $stage_user = new Stage_Users();
            $stage_user->user_id = Auth::user()->id;
            $stage_user->stage_id = $insertedId;
            $stage_user->validation = 'non traitée';
            $stage_user->assignment =1;
            $stage_user->save();
        }

        return view('Etudiant/validation');

    }

}