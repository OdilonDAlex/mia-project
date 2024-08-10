<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SurveyController extends Controller
{
    
    public function index(){
        return view('survey.index', [
            'surveys' => Survey::all(),
        ]);
    }

    public function create(){
        return view('survey.create');
    }

    public function store(Request $request){
        $data  = $request->validate([
            'title' => ['required', 'string', 'min:3'],
            'description' => ['required', 'string', 'min:10']
        ]);

        /**
         * @var $user User
         */
        $user = Auth::user();

        $survey = $user->surveys()->create([
            'title' => $data['title'],
            'description' => $data['description']
        ]);

        if($survey !== null){
            return json_encode(['result' => 'Ok', 'status' => 200]);
        }

        return json_encode(['result' => 'error', 'status' => 500]);
    }
}
