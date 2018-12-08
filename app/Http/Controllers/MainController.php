<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Validator;
use Auth;
use App\User;


class MainController extends Controller
{
    function index(){
        return view('login');
}
    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:8'
        ]);



        if(Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password'), 'type' => $request->get('type')]))
        {
            if($request->get('type')=='etudiant'){
                return redirect('main/EspaceEtudiant');
            }
            else if($request->get('type')=='enseignant'){
                return redirect('main/EspaceEnseignant/internshipValidation');

            }else if($request->get('type')=='admin'){
                return redirect('admin/dashboard');
            }else if($request->get('type')=='responsable'){
                return redirect('main/EspaceResponsable/addCompany');
            }
            }




        else
        {
            return back()->with('error', 'Wrong Login Details');
        }

    }
    function EspaceEtudiant()
    {
        $user=Auth::User();

        return view('Etudiant/documentation',compact('user'));
    }
    function EspaceResponsable()
    {

        return view('manager/addCompany');
    }
    function EspaceEtudiantProfile()
    {

        return view('template/user');
    }

    function redirect(){
        $type = $email = Auth::user()->type;
        if($type=='etudiant'){
            return redirect('main/EspaceEtudiant');
        }else if($type=='enseignant'){
            return redirect('main/EspaceEnseignant');
    }else if($type=='responsable'){
            return redirect('main/EspaceResponsable');
        }
    }

    function EspaceEntreprise()
    {
        return view('EspaceEntreprise');
    }
    function successlogin()
    {
        return view('redirect');
    }


    function EspaceEnseignant()
    {
        return view('/enseignant/internshipValidation');
    }

    function logout()
    {
        Auth::logout();
        return redirect('esprit');
    }
    function sendMail(Request $request)
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $password=implode($pass);

        $mail=$request->get('email');

        Mail::send('mail',['password' => $password], function($message)use($mail) {
            $message->to($mail,'')->subject
            ('password');


        });
        $user= User::where('email',$mail) -> first();
        $user->password = bcrypt($password);
        $user->save();

        return redirect('esprit');
      //  return view('mail');
    }
}
