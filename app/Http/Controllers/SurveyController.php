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
        $unpublishedSurveys = Survey::where('published', false)->orderBy('created_at', 'DESC')->get();
        $publishedSurveys = Survey::where('published', true)->orderBy('created_at', 'DESC')->get();

        return view('survey.create', [
            'unpublishedSurveys' => $unpublishedSurveys,
            'publishedSurveys' => $publishedSurveys,
            'selectedSurvey' => $unpublishedSurveys[0] ?? null,
            'selectedSurveyItems' => $unpublishedSurveys[0]->items()->get() ?? null,
        ]);
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
