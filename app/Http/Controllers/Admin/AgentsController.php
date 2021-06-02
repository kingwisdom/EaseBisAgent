<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agent;

class AgentsController extends Controller
{
    //
    public function index()
    {
        $res = Agent::orderBy('created_at', 'desc')->get();
        return view('agents.index', compact('res'));
    }

    public function create(){
        $res = Agent::where('email',auth()->user()->email)->first();
        if($res == []){
        dd($res);
        return view('agents.create');
        }
        else{
            //dd($res);
            return view('agents.edit', compact('res'));
        }
    }
    public function saveAgent(Request $req)
    {
        $res = new Agent;
        $this->validate($req, [
            $req->phone,
            $req->email,
            $req->photoUrl,
            $req->idUrl
        ]);
        $photoReq = $req->file('photoUrl')->store('images'); 
        $idReq = $req->file('idUrl')->store('ids'); 

        $digits = 6;
        $code = rand(pow(10, $digits-1), pow(10, $digits)-1);

        $res->fullName = auth()->user()->name;
        $res->phone = $req->phone;
        $res->email = auth()->user()->email;
        $res->address = $req->address;
        $res->companyName = $req->companyName;
        $res->city = $req->city;
        $res->state = $req->state;
        $res->bio = $req->bio;
        $res->photoUrl = $photoReq;
        $res->idUrl = $idReq;
        $res->unique_code = $code;
        
        $res->save();
        return redirect(route('allAgents'));
    }

    public function updateAgent(Request $req, $id){

        // $prop = Property::whereId($id)->update();
        $images ="";
        
        $res = Agent::findOrFail($id);
        $photoReq = $res->photoReq;
        $idReq = $res->idReq;
        //  if($req->file('file') != null){
        //      foreach($req->file('file') as $image)
        //      {
        //          $imageName=$image->getClientOriginalName();
        //          $image->move(public_path().'/images/', $imageName);  
        //          $fileNames[] = $imageName;
        //      }
        //      $img = $fileNames[0];
        //      $images = json_encode($fileNames);
        //  }
         
        if($req->file('photoUrl') != null){
            $photoReq = $req->file('photoUrl')->store('images'); 
        }
        if($req->file('idUrl') != null){
            $idReq = $req->file('idUrl')->store('ids'); 
        }


       // $res->fullName = auth()->user()->name;
        $res->phone = $req->phone;
        //$res->email = auth()->user()->email;
        $res->address = $req->address;
        $res->companyName = $req->companyName;
        $res->city = $req->city;
        $res->state = $req->state;
        $res->bio = $req->bio;
        $res->photoUrl = $photoReq;
        $res->idUrl = $idReq;
        
 
         $res->save();
         return redirect()->back()->with('success', 'Your Data has been updated');
     } 
 


    function delete($id){
        $device = Agent::findOrFail($id);
        $result = $device->delete();

        return redirect()->back();
        // if($result){
        //     return ['result' => 'Data delete successfully'];
        // }
        // else{
        //     return ['result' => 'Data failed to delete'];
        // }
    }

    public function approve($id){
        $users = Agent::findOrFail($id);
        $users->isActive = 1;
        $users->save();
        return redirect()->back()->with('success','Successful');
    }
    public function disapprove($id){
        $users = Agent::findOrFail($id);
        $users->isActive = 0;
        $users->save();
        return redirect()->back()->with('success','Successful');
    }

    public function suspend($id){
        $users = Agent::findOrFail($id);
        $users->isSuspended = 1;
        $users->save();
        return redirect()->back()->with('success','Successful');
    }
    public function unsuspend($id){
        $users = Agent::findOrFail($id);
        $users->isSuspended = 0;
        $users->save();
        return redirect()->back()->with('success','Successful');
    }

}
