<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
class AgentController extends Controller
{
    public function index()
    {
        return Agent::where('isActive','1')->get();
    }

    public function state($name){
        return Agent::where("state","like", "%".$name."%")->get();
    }

}
