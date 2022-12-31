<?php

namespace App\Http\Controllers;
use App\Models\contrats;
use Illuminate\Http\Request;

class contratsController extends Controller
{
    public function contractall(){ return response()->json(contrats::all(),200);    
    }
    public function deletecontract(Request $request,$id){         $client= contrats::find($id); if(is_null($client)){ return response()->json(['message' => 'client not fond'],404);         }         $client->delete(); return response()->json(null,204);     } 
    public function updatecontract(Request $request,$id){         $client= contrats::find($id); if(is_null($client)){ return response()->json(['message' => 'client not fond'],404);         }         $client->update($request->all()); return response($client,200);     } 
    public function addcontract(Request $request){         $client= contrats::create($request->all()); return response($client,201);     }  
    public function getcontractById($id){         $client= contrats::find($id); if(is_null($client)){ return response()->json(['message' => 'client not fond'],404);         } return response()->json($client::find($id),200);     } 
}
