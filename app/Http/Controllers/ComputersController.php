<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Assignments;
use App\Computers;
use App\Clients;
use App\Hours;
use DB;

class ComputersController extends Controller
{
     
    public function all(){
        $assignments = Assignments::all();
        $client = Clients::pluck('firstname');
        $computer = Computers::all();
        $hour = Hours::pluck('start_at');
        return view('computers.computers',['assignments' => $assignments, 'client' => $client, 'computer' => $computer, 'hour' => $hour]);
        
    }

    public function show($assignmentId){
        $assignment = Assignments::find($assignmentId);
        return view('computers.computer');

    
    }

    public function new(){
        $client = Clients::pluck('firstname');
        $computer = Computers::pluck('number');
        $hour = Hours::pluck('start_at','end_at');
        return view('computers.computer-form',['client' => $client, 'computer' => $computer, 'hour' => $hour]);

    }

    public function create(Request $request){
        $input = $request->all();
        $assignment = new Assignments();
        $assignment ->client_id = $input['client_id'];
        $assignment ->computer_id = $input['computer_id'];
        $assignment ->hour_id = $input['hour_id'];
        DB::update('update computers set availability = 1 where id = ?',[$assignment ->computer_id = $input['computer_id']]);
        $assignment ->save();
        return view('computers.computer-create-confirmation');
    }
    
    public function destroy($assignmentId){
        $assignments = Assignments::find($assignmentId);
        DB::update('update computers set availability = 0 where id = ?',[$assignments->computer_id]);
        $assignments ->delete();
        return view('computers.computer-delete');
    }
}