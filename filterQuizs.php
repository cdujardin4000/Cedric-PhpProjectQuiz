<?php


function filterQuizs($needle) {
    include 'quizs.php';

    $quizsFiltered = [];
    $i = 0;
    foreach ($quizs as $quiz){
        foreach ($quiz as $key => $value){
            if (is_string($quiz[$key]) && str_contains(strtolower($quiz[$key]), strtolower($needle))) {
                $quizsFiltered[$i] = $quiz;
                break;
            }
            elseif (is_array($quiz[$key])){
                foreach ($quiz[$key] as $question){
                    if(str_contains(strtolower($question), strtolower($needle))){
                        $quizsFiltered[$i] = $quiz;
                        break;
                    }
                }
            }
        }
        $i+=1;
    }

    return $quizsFiltered;
}







