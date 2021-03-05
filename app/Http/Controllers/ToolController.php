<?php

namespace App\Http\Controllers;

use Html2Text\Html2Text;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function index()
    {
        return view('tools.index');
    }
    public function calculate(Request $request)
    {
        
        if ($request->isMethod('POST')) {

            if (isset($request->content)) { // Test the parameter is set.
                $html = new Html2Text($request->content); // Setup the html2text obj.
                $text = strtolower($html->getText()); 
                $totalWordCount = str_word_count($text); 
                $wordsAndOccurrence  = array_count_values(str_word_count($text, 1)); 
                arsort($wordsAndOccurrence); 
               
                $keywordDensityArray = [];
                
                foreach ($wordsAndOccurrence as $key => $value) {
                    $keywordDensityArray[] = [
                        "keyword" => $key, // keyword
                        "count" => $value, // word occurrences
                        "density" => round(($value / $totalWordCount) * 100, 2)
                    ]; 
                }
               
        
                
                 return view('tools.result',['keywords'=> $keywordDensityArray]);
            }
        }
    }
}
