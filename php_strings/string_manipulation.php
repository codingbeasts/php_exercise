<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $choice = htmlspecialchars($_POST['mCh']);
    $response = "";

    // Check the selected radio button and handle accordingly
    switch ($choice) {
        case 'str_len':
            $response = [ "res" => "$choice", "nInput" => 1, "type" => "text", "props" => "_strValue", "label" => "Enter String for Length Calculation" ];
            break;
        case 'wrd_cnt':
            $response = [ "res" => "$choice", "nInput" => 1, "type" => "text", "props" => "_strValue", "label" => "Enter String to count" ];
            break;
        case 'sub_str_pos':
            $response = [ "res" => "$choice", "nInput" => 2, "type" => "text", "props" => ["_strValue", "_posValue"], "label" => ["Enter String Value", "Enter Word for the Position"] ];
            break;
        case 'str_upp':
            $response = [ "res" => "$choice", "nInput" => 1, "type" => "text", "props" => "_strValue", "label" => "Enter Lower String Value" ];
            break;
        case 'sub_str_extr':
            $response = [ "res" => "$choice", "nInput" => 3, "type" => "text", "props" => ["_strValue", "_startPos", "_len"], "label" => ["Enter string value", "Enter starting position", "Enter length for extracting"] ];
            break;
        case 'rep_wrd':
            $response = [ "res" => "$choice", "nInput" => 3, "type" => "text", "props" => ["_strValue", "_findWrd", "_wrdRepl"], "label" => ["Enter string value", "Find Word", "Enter word to replace"] ];
            break;
        case 'rev_wrd':
            $response = [ "res" => "$choice", "nInput" => 1, "type" => "text", "props" => "_strValue", "label" => "Enter string to reverse" ];
            break;
        case 'html_cnv':
            $response = [ "res" => "$choice", "nInput" => 1, "type" => "text", "props" => "_strValue", "label" => "Enter HTML code" ];
            break;
        case 'split_join':
            $response = [ "res" => "$choice", "nInput" => 1, "type" => "text", "props" => "_strValue", "label" => "Enter sentence" ];
            break;
        case 'sub_str_cnt':
            $response = [ "res" => "$choice", "nInput" => 2, "type" => "text", "props" => ["_strValue", "_subStr"], "label" => ["Enter sentence", "Enter substring to count"] ];
            break;
        default:
            $response = 'Nothing is being Selected!!!.';
    }
    // Return the response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

