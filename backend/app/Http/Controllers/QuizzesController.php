<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizzesController extends Controller
{
public function getQuizzes(Request $request)
    {   
        //$id = $request->input('id');
        $id = 3;
        
        $quizzes = DB::table('quizzes')
            ->join('nation_quiz', 'quizzes.id', '=', 'nation_quiz.quiz_id')
            ->join('nations', 'nation_quiz.nation_id', '=', 'nations.id')
            ->where('quizzes.id', $id)
            ->select('quizzes.id', 'quizzes.answer', 'nations.code', 'nations.name')
            ->get();

        $processed_quizzes = [$quizzes[0]->id, $quizzes[0]->answer];

        foreach ($quizzes as $index => $quiz) {
            $extracted_quizzes = ["code" => $quiz->code,"name" => $quiz->name];
            $processed_quizzes[] = $extracted_quizzes;
        };
        
        return $processed_quizzes;
    }

    /*
    public function index(Request $request)
    {   
        $id = $request->input('id');
        
        return Section::all();
    }
    
    public function getSection(Request $request)
    {   
        $id = $request->input('id');
        
        return Section::with([
                 'quizzes:id,section_id,order,image_src,correct',
                 'quizzes.choices:id,quiz_id,choice'
               ])->where('id', $id)->get(['id', 'title']);
    }
    */
}
