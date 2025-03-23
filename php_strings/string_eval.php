<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $formType = isset($_GET['formType']) ? $_GET['formType'] : '';
    $strValue = isset($_GET['_strValue']) ? $_GET['_strValue'] : '';
    switch ($formType) {
        case 'str_len':
            $response = [
                "outPut" => strlen($strValue),
            ];
            break;
        case 'wrd_cnt':
            $response = [
                "outPut" => str_word_count($strValue),
            ];
            break;
        case 'sub_str_pos':
            $response = [
                "outPut" => strpos($strValue,$_GET['_posValue']),
            ];
            break;
        case 'str_upp':
            $response = [
                "outPut" => strtoupper($strValue)
            ];
            break;
        case 'sub_str_extr':
            $response = [
                "outPut" => substr($strValue,$_GET['_startPos'],$_GET['_len']),
            ];
            break;
        case 'rep_wrd':
            $response = [
                "outPut" => str_replace($_GET['_findWrd'],$_GET['_wrdRepl'],$strValue),
            ];
            break;
        case 'rev_wrd':
            $response = [
                "outPut" => strrev($strValue)
            ];
            break;
        case 'html_cnv':
            $response = [
                "outPut" => htmlentities($strValue)
            ];
            break;
        case 'split_join':
            $response = [
                "outPut" => implode(",",explode(', ',$strValue))
            ];
            break;
        case 'sub_str_cnt':
            $response = [
                "outPut" => substr_count($strValue,$_GET['_subStr']),
            ];
            break;
        default:
            $response = 'Nothing is being Selected!!!.';
    }
    header('Content-Type: application/json');
    echo json_encode($response);

    exit;
}