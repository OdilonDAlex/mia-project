<?php

namespace App\Http\Controllers;

use App\Enums\Survey\AnswerType;
use App\Models\Survey;
use App\Models\Survey\Item;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SurveyController extends Controller
{
    
    public function index(){
        return view('survey.index', [
            'surveys' => Survey::all(),
        ]);
    }

    public function create(Request $request){

        $data = $request->validate([
            'survey_id' => 'nullable|exists:surveys,id'
        ]);

        /**
         * @var $user User
         */
        $user = Auth::user();
        $unpublishedSurveys = $user->surveys()->where('published', false)->orderBy('created_at', 'DESC')->get();
        $publishedSurveys = $user->surveys()->where('published', true)->orderBy('created_at', 'DESC')->get();

        try {
            $selectedSurvey = Survey::find((int)$data['survey_id']);
        }
        catch(Exception $_){
            $selectedSurvey = null;
        }

        try {

            if($selectedSurvey == null){
                $selectedSurvey = $unpublishedSurveys[0] ?? null;
            }
            $selectedSurveyItems = $selectedSurvey->items()->get() ?? null;
        }
        catch(Exception $e){
            $selectedSurveyItems = null;
        }

        return view('survey.create', [
            'unpublishedSurveys' => $unpublishedSurveys,
            'publishedSurveys' => $publishedSurveys,
            'selectedSurvey' => $selectedSurvey,
            'selectedSurveyItems' => $selectedSurveyItems,
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

    public function storeItem(Request $request){

        $data = $request->validate([
            'survey_id' => ['required', 'integer', 'exists:surveys,id'],
            'answers_type' => [
                'required',
                'regex:/(' 
                        .   AnswerType::boolean->value . '|'
                        .   AnswerType::numeric->value . '|'
                        .   AnswerType::date->value    . '|'
                        .   AnswerType::text->value    . ')/'
                ],
            'question' => 'required|string|min:3',
            'answers' => 'required|array',
        ]);


        /**
         * @var $user User
         */

        $user = Auth::user();

        $survey = $user->surveys()->find((int)$data['survey_id']);

        $item = $survey->items()->create([
            'answers_type' => $data['answers_type']
            ]
        );

        $item->question()->create(['content' => $data['question']]);

        foreach($data['answers'] as $answer){
            $item->answers()->create(['content' => $answer]);
        }

        return json_encode(['status' => 200, 'response' => 'Ok']);
    }

    public function deleteItem(Request $request){
        $data = $request->validate([
            'id' => [
                'required',
                'exists:items,id'
            ]
            ]);

        /**
         * @var $user User
         */
        $user = Auth::user();
        $item = Item::find((int)$data['id']);
        $survey = $item->survey;
        
        if($user == $survey->author){
            $question = $item->question()->first();
            $answers = $item->answers()->get();

            $question->delete();
            foreach($answers as $answer){ $answer->delete(); }
            $item->delete();

            return json_encode(['status' => 200, 'response' => 'OK']);
        }

        return json_encode(['status' => 200, 'response' => 'internal Server error']);
    }
}
