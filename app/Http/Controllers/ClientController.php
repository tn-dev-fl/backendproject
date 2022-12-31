<?php

namespace App\Http\Controllers;

use App\Models\clients;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function client(){ return response()->json(clients::all(),200);    
    }
    public function deleteEmployee(Request $request,$id){         $client= clients::find($id); if(is_null($client)){ return response()->json(['message' => 'client not fond'],404);         }         $client->delete(); return response()->json(null,204);     } 
    public function updateclient(Request $request,$id){         $client= clients::find($id); if(is_null($client)){ return response()->json(['message' => 'client not fond'],404);         }         $client->update($request->all()); return response($client,200);     } 
    public function addclient(Request $request){         $client= clients::create($request->all()); return response($client,201);     }  
    public function getclientById($id){         $client= clients::find($id); if(is_null($client)){ return response()->json(['message' => 'client not fond'],404);         } return response()->json($client::find($id),200);     } 
}
