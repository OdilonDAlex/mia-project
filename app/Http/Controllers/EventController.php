<?php

namespace App\Http\Controllers;

use App\Models\EventModel;
use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index(){
        return view('event.index', [
            'activated' => EventModel::first(),
            'events' => EventModel::all()
        ]);
    }
}
