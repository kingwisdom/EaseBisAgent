<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    // function lists(){
    //     return Device::all();
    // }

    function list($id= null){
        return $id ? Device::where('id',$id)->get() : Device::all();
    }

    function create(Request $req){
       $device = new Device;
       $device->name = $req->name;
       $device->price = $req->price;
       $device->year = $req->year;
       
       $result = $device->save();

        if($result){
            return ['result' => 'Data saved successfully'];
        }
        else{
            return ['result' => 'Data failed to save'];
        } 
    }

    function update(Request $req){
        $device = Device::find($req->id);

        $device->name = $req->name;
        $device->price = $req->price;
        $device->year = $req->year;
       
        $result = $device->save();

        if($result){
            return ['result' => 'Data updated successfully'];
        }
        else{
            return ['result' => 'Data failed to update'];
        }
    }

    function delete($id){
        $device = Device::find($id);
        $result = $device->delete();

        if($result){
            return ['result' => 'Data delete successfully'];
        }
        else{
            return ['result' => 'Data failed to delete'];
        }
    }

    function search($name){
        return Device::where("name","like", "%".$name."%")->get();
    }
}
