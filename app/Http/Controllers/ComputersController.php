<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Assignments;
use App\Computers;
use App\Clients;
use App\Hours;

class ComputersController extends Controller
{
     
    public function all(){
        $assignments = Assignments::all();
        $computers = Computers::all(['id','number']);
        $clients = Clients::all(['id','firstname']);
        $hours = Hours::all(['id','start_at','end_at']);
        return view('computers.computers',['assignments'=>$assignments, 'computers' => $computers,'clients' => $clients, 'hours'=>$hours]);
        
    }

    public function show($assignmentId){
        $assignment = Assignments::find($assignmentId);
        return view('computers.computer');

    
    }

    public function new(){
        return view('computers.computer-form');

    }

    public function create(Request $request){
        $input = $request->all();
        $assignment = new Assignments();
        $assignment ->client_id = $input['client_id'];
        $assignment ->computer_id = $input['computer_id'];
        $assignment ->hour_id = $input['hour_id'];
        $assignment ->save();
        return view('computers.computer-create-confirmation');
    }
    
    public function destroy($assignmentId){
        $assignments = Assignments::find($assignmentId);
        $assignments ->delete();
        return view('computers.computer-delete');
    }
}