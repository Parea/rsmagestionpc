<?php

namespace App\Http\Controllers;

use App\Clients;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientsController extends Controller
{
    
    public function all(){
        $users = Auth::user()->id=1;
        if($users == 1):
            $clients = Clients::all();
            return view('clients.clients',['clients' => $clients]);
        else:
            return("Vous n'avez pas accés a ces informations car vous êtes pas admin");
        endif; 
        
    }
    public function show($clientId){
        $users = Auth::user()->id=1;
        if($users):
            $client = Clients::find($clientId);
            return view('clients.client');
        else:
            return("Vous n'avez pas accés a ces informations car vous êtes pas admin");
        endif; 
    
    }
    public function new(){
        $users = Auth::user()->id=1;
        if($users):
            return view('clients.client-form');
        else:
            return("Vous n'avez pas accés a ces informations car vous êtes pas admin");
        endif; 
        
    }
    public function create(Request $request){
        $input = $request->all();
        $client = new Clients();
        $client ->lastname = $input['lastname'];
        $client ->firstname = $input['firstname'];
        $client ->number_phone = $input['number_phone'];
        $client ->save();
        return view('clients.client-create-confirmation');
    }
    public function destroy($clientId){
        $users = Auth::user()->id=1;
        if($users):
            $clients = Clients::find($clientId);
            $clients ->delete();
            return view('clients.client-delete');
        else:
            return("Vous n'avez pas accés a ces informations car vous êtes pas admin");
        endif; 
    }
}
