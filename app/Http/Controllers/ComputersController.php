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
        $assignments = Assignments::select('assignments.id as id','clients.id as client_id',
        'clients.firstname as firstname', 'computers.id as computer_id',
        'computers.number as name_pc', 'hours.id as hour_id',
        'hours.start_and_end_at as hour_range')
        ->join('clients','clients.id','assignments.client_id')
        ->join('computers','computers.id','assignments.computer_id')
        ->join('hours','hours.id','assignments.hour_id')
        ->orderBy('assignments.id', 'asc')
        ->get();
        return view('computers.computers')->with(['assignments' => $assignments]);
        
    }

    public function show($assignmentId){
        $assignment = Assignments::find($assignmentId);
        return view('computers.computer');

    
    }

    public function new(){
        $assignment = Assignments::all();
        $client = Clients::pluck('firstname');
        $computer = Computers::where('computers.availability',0)->pluck('number');
        $hour = Hours::pluck('start_and_end_at');
        return view('computers.computer-form',['assignment' => $assignment,'client' => $client, 'computer' => $computer, 'hour' => $hour]);

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