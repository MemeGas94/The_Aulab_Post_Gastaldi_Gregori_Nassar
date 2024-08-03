<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\CareerMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home(){
        $articles=Article::where('is_accepted',true)->orderby('created_at','desc')->take(3)->get();
        return view('welcome', compact('articles'));
    }

    public function career(){
        return view('careerpage');
    }

    public function postcareer(Request $request){
        $request->validate([
            'email'=>'required|email',
            'text'=>'required',
            'role'=>'required',
        ]);
      
        $user=Auth::user();
        $email=$request->email;
        $messaggio=$request->text;   
        $role=$request->role;
        $info=compact('email','messaggio','role');
Mail::to('admin@theaulabpost.it')->send(new CareerMail($info));



        switch($role)
{
        case 'admin';
              $user->is_admin=NULL;
               break;

        case 'revisor';
               $user->is_revisor=NULL;
                break;     

        case 'writer';
              $user->is_writer=NULL;
                break;

}
    $user->update();

return redirect(route('homepage'))->with('sessionn','richiesta inviata con successo');

    }
}
