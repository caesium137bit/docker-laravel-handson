<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizzesController extends Controller
{
    public function getQuizzes(Request $request)
    {
        $ids = $request->input('ids');

        $quizzes = DB::table('quizzes')
            ->select('quizzes.id', 'quizzes.answer', 'quizzes.image_src', 'nations.code', 'nations.name')
            ->join('nation_quiz', 'quizzes.id', '=', 'nation_quiz.quiz_id')
            ->join('nations', 'nation_quiz.nation_id', '=', 'nations.id')
            ->whereIn('quizzes.id', $ids)
            ->orderby('quizzes.id')
            ->orderby('nations.code')
            ->get();

        $processed_quizzes = [];
        $id_flag = 0;

        foreach ($ids as $id) {
            $nation_array = [];
            foreach ($quizzes as $quiz) {
                if ($id == $quiz->id) {
                    if ($id_flag != $quiz->id) {
                        $temp_obj = (object) [
                            'correct' => $quiz->answer,
                            'image_src' => $quiz->image_src
                        ];
                        $id_flag = $quiz->id;
                    }
                    $nation_obj = (object) [
                        'code' => $quiz->code,
                        'name' => $quiz->name
                    ];
                    $nation_array[] = $nation_obj;
                }
            }
            $temp_obj->nations = $nation_array;
            $processed_quizzes[] = $temp_obj;
        }

        return $processed_quizzes;

        /*
        foreach ($ids as $id) {
            $quiz = DB::table('quizzes')
            ->select('quizzes.id', 'quizzes.answer', 'nations.code', 'nations.name')
            ->join('nation_quiz', 'quizzes.id', '=', 'nation_quiz.quiz_id')
            ->join('nations', 'nation_quiz.nation_id', '=', 'nations.id')
            ->where('quizzes.id', $id)
            ->orderby('quizzes.id')
            ->orderby('nations.code')
            ->get();

            $processed_quizzes = ['correct' => $quiz[0]->answer];
        
            foreach ($quiz as $index => $nations) {
                $nation_obj_array[] = (object) [
                    'code' => $nations->code,
                    'name' => $nations->name
                ];
            };
            $processed_quizzes[] = ['nations' => $nation_obj_array];       
        }   
        return $processed_quizzes;  
        */
    }
}
