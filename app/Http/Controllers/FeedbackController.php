<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(){
        return view('index');
    }
    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request){
        $request->validate([
            'satisfaction'=>'required'
        ]);
        $feedback=new Feedback;
        $feedback->satisfaction=$request->satisfaction;
        $feedback->save();
        return redirect('/')
        ->with ("success","Merci pour votre réponse. Demain je serai meilleure qu'aujourd'hui !");
    }

}
