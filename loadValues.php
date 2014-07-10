<?php
error_reporting( E_ALL );
ini_set('display_errors', 1);
$formattedArr = array();
$filename = "excel.csv";
if (($handle = fopen($filename, "r")) !== FALSE) {
    $key = 0;
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        $count = count($data);
        for ($i=0; $i < $count; $i++) {
            $formattedArr[$key][$i] = $data[$i];
        }
        $key++;
    }
    fclose($handle);
}

$response_array = array();

//ECO
//bez 90
$response_array['eco']['bez']['90']['16']['3'] = $formattedArr[5][2];
$response_array['eco']['bez']['90']['16']['4'] = $formattedArr[6][2];
$response_array['eco']['bez']['90']['16']['5'] = $formattedArr[7][2];
$response_array['eco']['bez']['90']['16']['6'] = $formattedArr[8][2];
$response_array['eco']['bez']['90']['16']['7'] = $formattedArr[9][2];
$response_array['eco']['bez']['90']['16']['8'] = $formattedArr[10][2];
$response_array['eco']['bez']['90']['16']['9'] = $formattedArr[11][2];
$response_array['eco']['bez']['90']['16']['10'] = $formattedArr[12][2];

$response_array['eco']['bez']['90']['18']['3'] = $formattedArr[5][3];
$response_array['eco']['bez']['90']['18']['4'] = $formattedArr[6][3];
$response_array['eco']['bez']['90']['18']['5'] = $formattedArr[7][3];
$response_array['eco']['bez']['90']['18']['6'] = $formattedArr[8][3];
$response_array['eco']['bez']['90']['18']['7'] = $formattedArr[9][3];
$response_array['eco']['bez']['90']['18']['8'] = $formattedArr[10][3];
$response_array['eco']['bez']['90']['18']['9'] = $formattedArr[11][3];
$response_array['eco']['bez']['90']['18']['10'] = $formattedArr[12][3];

$response_array['eco']['bez']['90']['20']['3'] = $formattedArr[5][4];
$response_array['eco']['bez']['90']['20']['4'] = $formattedArr[6][4];
$response_array['eco']['bez']['90']['20']['5'] = $formattedArr[7][4];
$response_array['eco']['bez']['90']['20']['6'] = $formattedArr[8][4];
$response_array['eco']['bez']['90']['20']['7'] = $formattedArr[9][4];
$response_array['eco']['bez']['90']['20']['8'] = $formattedArr[10][4];
$response_array['eco']['bez']['90']['20']['9'] = $formattedArr[11][4];
$response_array['eco']['bez']['90']['20']['10'] = $formattedArr[12][4];

//bez 45
$response_array['eco']['bez']['45']['16']['3'] = $formattedArr[5][7];
$response_array['eco']['bez']['45']['16']['4'] = $formattedArr[6][7];
$response_array['eco']['bez']['45']['16']['5'] = $formattedArr[7][7];
$response_array['eco']['bez']['45']['16']['6'] = $formattedArr[8][7];
$response_array['eco']['bez']['45']['16']['7'] = $formattedArr[9][7];
$response_array['eco']['bez']['45']['16']['8'] = $formattedArr[10][7];
$response_array['eco']['bez']['45']['16']['9'] = $formattedArr[11][7];
$response_array['eco']['bez']['45']['16']['10'] = $formattedArr[12][7];

$response_array['eco']['bez']['45']['18']['3'] = $formattedArr[5][8];
$response_array['eco']['bez']['45']['18']['4'] = $formattedArr[6][8];
$response_array['eco']['bez']['45']['18']['5'] = $formattedArr[7][8];
$response_array['eco']['bez']['45']['18']['6'] = $formattedArr[8][8];
$response_array['eco']['bez']['45']['18']['7'] = $formattedArr[9][8];
$response_array['eco']['bez']['45']['18']['8'] = $formattedArr[10][8];
$response_array['eco']['bez']['45']['18']['9'] = $formattedArr[11][8];
$response_array['eco']['bez']['45']['18']['10'] = $formattedArr[12][8];

$response_array['eco']['bez']['45']['20']['3'] = $formattedArr[5][9];
$response_array['eco']['bez']['45']['20']['4'] = $formattedArr[6][9];
$response_array['eco']['bez']['45']['20']['5'] = $formattedArr[7][9];
$response_array['eco']['bez']['45']['20']['6'] = $formattedArr[8][9];
$response_array['eco']['bez']['45']['20']['7'] = $formattedArr[9][9];
$response_array['eco']['bez']['45']['20']['8'] = $formattedArr[10][9];
$response_array['eco']['bez']['45']['20']['9'] = $formattedArr[11][9];
$response_array['eco']['bez']['45']['20']['10'] = $formattedArr[12][9];

//s 90
$response_array['eco']['s']['90']['16']['3'] = $formattedArr[19][2];
$response_array['eco']['s']['90']['16']['4'] = $formattedArr[20][2];
$response_array['eco']['s']['90']['16']['5'] = $formattedArr[21][2];
$response_array['eco']['s']['90']['16']['6'] = $formattedArr[22][2];
$response_array['eco']['s']['90']['16']['7'] = $formattedArr[23][2];
$response_array['eco']['s']['90']['16']['8'] = $formattedArr[24][2];
$response_array['eco']['s']['90']['16']['9'] = $formattedArr[25][2];
$response_array['eco']['s']['90']['16']['10'] = $formattedArr[26][2];

$response_array['eco']['s']['90']['18']['3'] = $formattedArr[19][3];
$response_array['eco']['s']['90']['18']['4'] = $formattedArr[20][3];
$response_array['eco']['s']['90']['18']['5'] = $formattedArr[21][3];
$response_array['eco']['s']['90']['18']['6'] = $formattedArr[22][3];
$response_array['eco']['s']['90']['18']['7'] = $formattedArr[23][3];
$response_array['eco']['s']['90']['18']['8'] = $formattedArr[24][3];
$response_array['eco']['s']['90']['18']['9'] = $formattedArr[25][3];
$response_array['eco']['s']['90']['18']['10'] = $formattedArr[26][3];

$response_array['eco']['s']['90']['20']['3'] = $formattedArr[19][4];
$response_array['eco']['s']['90']['20']['4'] = $formattedArr[20][4];
$response_array['eco']['s']['90']['20']['5'] = $formattedArr[21][4];
$response_array['eco']['s']['90']['20']['6'] = $formattedArr[22][4];
$response_array['eco']['s']['90']['20']['7'] = $formattedArr[23][4];
$response_array['eco']['s']['90']['20']['8'] = $formattedArr[24][4];
$response_array['eco']['s']['90']['20']['9'] = $formattedArr[25][4];
$response_array['eco']['s']['90']['20']['10'] = $formattedArr[26][4];

//bez 45
$response_array['eco']['s']['45']['16']['3'] = $formattedArr[19][7];
$response_array['eco']['s']['45']['16']['4'] = $formattedArr[20][7];
$response_array['eco']['s']['45']['16']['5'] = $formattedArr[21][7];
$response_array['eco']['s']['45']['16']['6'] = $formattedArr[22][7];
$response_array['eco']['s']['45']['16']['7'] = $formattedArr[23][7];
$response_array['eco']['s']['45']['16']['8'] = $formattedArr[24][7];
$response_array['eco']['s']['45']['16']['9'] = $formattedArr[25][7];
$response_array['eco']['s']['45']['16']['10'] = $formattedArr[26][7];

$response_array['eco']['s']['45']['18']['3'] = $formattedArr[19][8];
$response_array['eco']['s']['45']['18']['4'] = $formattedArr[20][8];
$response_array['eco']['s']['45']['18']['5'] = $formattedArr[21][8];
$response_array['eco']['s']['45']['18']['6'] = $formattedArr[22][8];
$response_array['eco']['s']['45']['18']['7'] = $formattedArr[23][8];
$response_array['eco']['s']['45']['18']['8'] = $formattedArr[24][8];
$response_array['eco']['s']['45']['18']['9'] = $formattedArr[25][8];
$response_array['eco']['s']['45']['18']['10'] = $formattedArr[26][8];

$response_array['eco']['s']['45']['20']['3'] = $formattedArr[19][9];
$response_array['eco']['s']['45']['20']['4'] = $formattedArr[20][9];
$response_array['eco']['s']['45']['20']['5'] = $formattedArr[21][9];
$response_array['eco']['s']['45']['20']['6'] = $formattedArr[22][9];
$response_array['eco']['s']['45']['20']['7'] = $formattedArr[23][9];
$response_array['eco']['s']['45']['20']['8'] = $formattedArr[24][9];
$response_array['eco']['s']['45']['20']['9'] = $formattedArr[25][9];
$response_array['eco']['s']['45']['20']['10'] = $formattedArr[26][9];

//kominove dvierka
$response_array['eco']['komDvere'] = $formattedArr[5][12];

//ECOPLUS
//bez 90
$response_array['ecoplus']['bez']['90']['14']['3'] = $formattedArr[32][2];
$response_array['ecoplus']['bez']['90']['14']['4'] = $formattedArr[33][2];
$response_array['ecoplus']['bez']['90']['14']['5'] = $formattedArr[34][2];
$response_array['ecoplus']['bez']['90']['14']['6'] = $formattedArr[35][2];
$response_array['ecoplus']['bez']['90']['14']['7'] = $formattedArr[36][2];
$response_array['ecoplus']['bez']['90']['14']['8'] = $formattedArr[37][2];
$response_array['ecoplus']['bez']['90']['14']['9'] = $formattedArr[38][2];
$response_array['ecoplus']['bez']['90']['14']['10'] = $formattedArr[39][2];

$response_array['ecoplus']['bez']['90']['16']['3'] = $formattedArr[32][3];
$response_array['ecoplus']['bez']['90']['16']['4'] = $formattedArr[33][3];
$response_array['ecoplus']['bez']['90']['16']['5'] = $formattedArr[34][3];
$response_array['ecoplus']['bez']['90']['16']['6'] = $formattedArr[35][3];
$response_array['ecoplus']['bez']['90']['16']['7'] = $formattedArr[36][3];
$response_array['ecoplus']['bez']['90']['16']['8'] = $formattedArr[37][3];
$response_array['ecoplus']['bez']['90']['16']['9'] = $formattedArr[38][3];
$response_array['ecoplus']['bez']['90']['16']['10'] = $formattedArr[39][3];

$response_array['ecoplus']['bez']['90']['18']['3'] = $formattedArr[32][4];
$response_array['ecoplus']['bez']['90']['18']['4'] = $formattedArr[33][4];
$response_array['ecoplus']['bez']['90']['18']['5'] = $formattedArr[34][4];
$response_array['ecoplus']['bez']['90']['18']['6'] = $formattedArr[35][4];
$response_array['ecoplus']['bez']['90']['18']['7'] = $formattedArr[36][4];
$response_array['ecoplus']['bez']['90']['18']['8'] = $formattedArr[37][4];
$response_array['ecoplus']['bez']['90']['18']['9'] = $formattedArr[38][4];
$response_array['ecoplus']['bez']['90']['18']['10'] = $formattedArr[39][4];

$response_array['ecoplus']['bez']['90']['20']['3'] = $formattedArr[32][5];
$response_array['ecoplus']['bez']['90']['20']['4'] = $formattedArr[33][5];
$response_array['ecoplus']['bez']['90']['20']['5'] = $formattedArr[34][5];
$response_array['ecoplus']['bez']['90']['20']['6'] = $formattedArr[35][5];
$response_array['ecoplus']['bez']['90']['20']['7'] = $formattedArr[36][5];
$response_array['ecoplus']['bez']['90']['20']['8'] = $formattedArr[37][5];
$response_array['ecoplus']['bez']['90']['20']['9'] = $formattedArr[38][5];
$response_array['ecoplus']['bez']['90']['20']['10'] = $formattedArr[39][5];

$response_array['ecoplus']['bez']['90']['22']['3'] = $formattedArr[32][6];
$response_array['ecoplus']['bez']['90']['22']['4'] = $formattedArr[33][6];
$response_array['ecoplus']['bez']['90']['22']['5'] = $formattedArr[34][6];
$response_array['ecoplus']['bez']['90']['22']['6'] = $formattedArr[35][6];
$response_array['ecoplus']['bez']['90']['22']['7'] = $formattedArr[36][6];
$response_array['ecoplus']['bez']['90']['22']['8'] = $formattedArr[37][6];
$response_array['ecoplus']['bez']['90']['22']['9'] = $formattedArr[38][6];
$response_array['ecoplus']['bez']['90']['22']['10'] = $formattedArr[39][6];

$response_array['ecoplus']['bez']['90']['25']['3'] = $formattedArr[32][7];
$response_array['ecoplus']['bez']['90']['25']['4'] = $formattedArr[33][7];
$response_array['ecoplus']['bez']['90']['25']['5'] = $formattedArr[34][7];
$response_array['ecoplus']['bez']['90']['25']['6'] = $formattedArr[35][7];
$response_array['ecoplus']['bez']['90']['25']['7'] = $formattedArr[36][7];
$response_array['ecoplus']['bez']['90']['25']['8'] = $formattedArr[37][7];
$response_array['ecoplus']['bez']['90']['25']['9'] = $formattedArr[38][7];
$response_array['ecoplus']['bez']['90']['25']['10'] = $formattedArr[39][7];

$response_array['ecoplus']['bez']['90']['30']['3'] = $formattedArr[32][8];
$response_array['ecoplus']['bez']['90']['30']['4'] = $formattedArr[33][8];
$response_array['ecoplus']['bez']['90']['30']['5'] = $formattedArr[34][8];
$response_array['ecoplus']['bez']['90']['30']['6'] = $formattedArr[35][8];
$response_array['ecoplus']['bez']['90']['30']['7'] = $formattedArr[36][8];
$response_array['ecoplus']['bez']['90']['30']['8'] = $formattedArr[37][8];
$response_array['ecoplus']['bez']['90']['30']['9'] = $formattedArr[38][8];
$response_array['ecoplus']['bez']['90']['30']['10'] = $formattedArr[39][8];

//bez 45
$response_array['ecoplus']['bez']['45']['14']['3'] = $formattedArr[32][11];
$response_array['ecoplus']['bez']['45']['14']['4'] = $formattedArr[33][11];
$response_array['ecoplus']['bez']['45']['14']['5'] = $formattedArr[34][11];
$response_array['ecoplus']['bez']['45']['14']['6'] = $formattedArr[35][11];
$response_array['ecoplus']['bez']['45']['14']['7'] = $formattedArr[36][11];
$response_array['ecoplus']['bez']['45']['14']['8'] = $formattedArr[37][11];
$response_array['ecoplus']['bez']['45']['14']['9'] = $formattedArr[38][11];
$response_array['ecoplus']['bez']['45']['14']['10'] = $formattedArr[39][11];

$response_array['ecoplus']['bez']['45']['16']['3'] = $formattedArr[32][12];
$response_array['ecoplus']['bez']['45']['16']['4'] = $formattedArr[33][12];
$response_array['ecoplus']['bez']['45']['16']['5'] = $formattedArr[34][12];
$response_array['ecoplus']['bez']['45']['16']['6'] = $formattedArr[35][12];
$response_array['ecoplus']['bez']['45']['16']['7'] = $formattedArr[36][12];
$response_array['ecoplus']['bez']['45']['16']['8'] = $formattedArr[37][12];
$response_array['ecoplus']['bez']['45']['16']['9'] = $formattedArr[38][12];
$response_array['ecoplus']['bez']['45']['16']['10'] = $formattedArr[39][12];

$response_array['ecoplus']['bez']['45']['18']['3'] = $formattedArr[32][13];
$response_array['ecoplus']['bez']['45']['18']['4'] = $formattedArr[33][13];
$response_array['ecoplus']['bez']['45']['18']['5'] = $formattedArr[34][13];
$response_array['ecoplus']['bez']['45']['18']['6'] = $formattedArr[35][13];
$response_array['ecoplus']['bez']['45']['18']['7'] = $formattedArr[36][13];
$response_array['ecoplus']['bez']['45']['18']['8'] = $formattedArr[37][13];
$response_array['ecoplus']['bez']['45']['18']['9'] = $formattedArr[38][13];
$response_array['ecoplus']['bez']['45']['18']['10'] = $formattedArr[39][13];

$response_array['ecoplus']['bez']['45']['20']['3'] = $formattedArr[32][14];
$response_array['ecoplus']['bez']['45']['20']['4'] = $formattedArr[33][14];
$response_array['ecoplus']['bez']['45']['20']['5'] = $formattedArr[34][14];
$response_array['ecoplus']['bez']['45']['20']['6'] = $formattedArr[35][14];
$response_array['ecoplus']['bez']['45']['20']['7'] = $formattedArr[36][14];
$response_array['ecoplus']['bez']['45']['20']['8'] = $formattedArr[37][14];
$response_array['ecoplus']['bez']['45']['20']['9'] = $formattedArr[38][14];
$response_array['ecoplus']['bez']['45']['20']['10'] = $formattedArr[39][14];

$response_array['ecoplus']['bez']['45']['22']['3'] = $formattedArr[32][15];
$response_array['ecoplus']['bez']['45']['22']['4'] = $formattedArr[33][15];
$response_array['ecoplus']['bez']['45']['22']['5'] = $formattedArr[34][15];
$response_array['ecoplus']['bez']['45']['22']['6'] = $formattedArr[35][15];
$response_array['ecoplus']['bez']['45']['22']['7'] = $formattedArr[36][15];
$response_array['ecoplus']['bez']['45']['22']['8'] = $formattedArr[37][15];
$response_array['ecoplus']['bez']['45']['22']['9'] = $formattedArr[38][15];
$response_array['ecoplus']['bez']['45']['22']['10'] = $formattedArr[39][15];

$response_array['ecoplus']['bez']['45']['25']['3'] = $formattedArr[32][16];
$response_array['ecoplus']['bez']['45']['25']['4'] = $formattedArr[33][16];
$response_array['ecoplus']['bez']['45']['25']['5'] = $formattedArr[34][16];
$response_array['ecoplus']['bez']['45']['25']['6'] = $formattedArr[35][16];
$response_array['ecoplus']['bez']['45']['25']['7'] = $formattedArr[36][16];
$response_array['ecoplus']['bez']['45']['25']['8'] = $formattedArr[37][16];
$response_array['ecoplus']['bez']['45']['25']['9'] = $formattedArr[38][16];
$response_array['ecoplus']['bez']['45']['25']['10'] = $formattedArr[39][16];

$response_array['ecoplus']['bez']['45']['30']['3'] = $formattedArr[32][17];
$response_array['ecoplus']['bez']['45']['30']['4'] = $formattedArr[33][17];
$response_array['ecoplus']['bez']['45']['30']['5'] = $formattedArr[34][17];
$response_array['ecoplus']['bez']['45']['30']['6'] = $formattedArr[35][17];
$response_array['ecoplus']['bez']['45']['30']['7'] = $formattedArr[36][17];
$response_array['ecoplus']['bez']['45']['30']['8'] = $formattedArr[37][17];
$response_array['ecoplus']['bez']['45']['30']['9'] = $formattedArr[38][17];
$response_array['ecoplus']['bez']['45']['30']['10'] = $formattedArr[39][17];

//s 90
$response_array['ecoplus']['s']['90']['14']['3'] = $formattedArr[46][2];
$response_array['ecoplus']['s']['90']['14']['4'] = $formattedArr[47][2];
$response_array['ecoplus']['s']['90']['14']['5'] = $formattedArr[48][2];
$response_array['ecoplus']['s']['90']['14']['6'] = $formattedArr[49][2];
$response_array['ecoplus']['s']['90']['14']['7'] = $formattedArr[50][2];
$response_array['ecoplus']['s']['90']['14']['8'] = $formattedArr[51][2];
$response_array['ecoplus']['s']['90']['14']['9'] = $formattedArr[52][2];
$response_array['ecoplus']['s']['90']['14']['10'] = $formattedArr[53][2];

$response_array['ecoplus']['s']['90']['16']['3'] = $formattedArr[46][3];
$response_array['ecoplus']['s']['90']['16']['4'] = $formattedArr[47][3];
$response_array['ecoplus']['s']['90']['16']['5'] = $formattedArr[48][3];
$response_array['ecoplus']['s']['90']['16']['6'] = $formattedArr[49][3];
$response_array['ecoplus']['s']['90']['16']['7'] = $formattedArr[50][3];
$response_array['ecoplus']['s']['90']['16']['8'] = $formattedArr[51][3];
$response_array['ecoplus']['s']['90']['16']['9'] = $formattedArr[52][3];
$response_array['ecoplus']['s']['90']['16']['10'] = $formattedArr[53][3];

$response_array['ecoplus']['s']['90']['18']['3'] = $formattedArr[46][4];
$response_array['ecoplus']['s']['90']['18']['4'] = $formattedArr[47][4];
$response_array['ecoplus']['s']['90']['18']['5'] = $formattedArr[48][4];
$response_array['ecoplus']['s']['90']['18']['6'] = $formattedArr[49][4];
$response_array['ecoplus']['s']['90']['18']['7'] = $formattedArr[50][4];
$response_array['ecoplus']['s']['90']['18']['8'] = $formattedArr[51][4];
$response_array['ecoplus']['s']['90']['18']['9'] = $formattedArr[52][4];
$response_array['ecoplus']['s']['90']['18']['10'] = $formattedArr[53][4];

$response_array['ecoplus']['s']['90']['20']['3'] = $formattedArr[46][5];
$response_array['ecoplus']['s']['90']['20']['4'] = $formattedArr[47][5];
$response_array['ecoplus']['s']['90']['20']['5'] = $formattedArr[48][5];
$response_array['ecoplus']['s']['90']['20']['6'] = $formattedArr[49][5];
$response_array['ecoplus']['s']['90']['20']['7'] = $formattedArr[50][5];
$response_array['ecoplus']['s']['90']['20']['8'] = $formattedArr[51][5];
$response_array['ecoplus']['s']['90']['20']['9'] = $formattedArr[52][5];
$response_array['ecoplus']['s']['90']['20']['10'] = $formattedArr[53][5];

//s 45
$response_array['ecoplus']['s']['45']['14']['3'] = $formattedArr[46][11];
$response_array['ecoplus']['s']['45']['14']['4'] = $formattedArr[47][11];
$response_array['ecoplus']['s']['45']['14']['5'] = $formattedArr[48][11];
$response_array['ecoplus']['s']['45']['14']['6'] = $formattedArr[49][11];
$response_array['ecoplus']['s']['45']['14']['7'] = $formattedArr[50][11];
$response_array['ecoplus']['s']['45']['14']['8'] = $formattedArr[51][11];
$response_array['ecoplus']['s']['45']['14']['9'] = $formattedArr[52][11];
$response_array['ecoplus']['s']['45']['14']['10'] = $formattedArr[53][11];

$response_array['ecoplus']['s']['45']['16']['3'] = $formattedArr[46][12];
$response_array['ecoplus']['s']['45']['16']['4'] = $formattedArr[47][12];
$response_array['ecoplus']['s']['45']['16']['5'] = $formattedArr[48][12];
$response_array['ecoplus']['s']['45']['16']['6'] = $formattedArr[49][12];
$response_array['ecoplus']['s']['45']['16']['7'] = $formattedArr[50][12];
$response_array['ecoplus']['s']['45']['16']['8'] = $formattedArr[51][12];
$response_array['ecoplus']['s']['45']['16']['9'] = $formattedArr[52][12];
$response_array['ecoplus']['s']['45']['16']['10'] = $formattedArr[53][12];

$response_array['ecoplus']['s']['45']['18']['3'] = $formattedArr[46][13];
$response_array['ecoplus']['s']['45']['18']['4'] = $formattedArr[47][13];
$response_array['ecoplus']['s']['45']['18']['5'] = $formattedArr[48][13];
$response_array['ecoplus']['s']['45']['18']['6'] = $formattedArr[49][13];
$response_array['ecoplus']['s']['45']['18']['7'] = $formattedArr[50][13];
$response_array['ecoplus']['s']['45']['18']['8'] = $formattedArr[51][13];
$response_array['ecoplus']['s']['45']['18']['9'] = $formattedArr[52][13];
$response_array['ecoplus']['s']['45']['18']['10'] = $formattedArr[53][13];

$response_array['ecoplus']['s']['45']['20']['3'] = $formattedArr[46][14];
$response_array['ecoplus']['s']['45']['20']['4'] = $formattedArr[47][14];
$response_array['ecoplus']['s']['45']['20']['5'] = $formattedArr[48][14];
$response_array['ecoplus']['s']['45']['20']['6'] = $formattedArr[49][14];
$response_array['ecoplus']['s']['45']['20']['7'] = $formattedArr[50][14];
$response_array['ecoplus']['s']['45']['20']['8'] = $formattedArr[51][14];
$response_array['ecoplus']['s']['45']['20']['9'] = $formattedArr[52][14];
$response_array['ecoplus']['s']['45']['20']['10'] = $formattedArr[53][14];

//kanonicke vyustenie

$response_array['ecoplus']['kanVyustenie']['14'] = $formattedArr[34][20];
$response_array['ecoplus']['kanVyustenie']['16'] = $formattedArr[35][20];
$response_array['ecoplus']['kanVyustenie']['18'] = $formattedArr[36][20];
$response_array['ecoplus']['kanVyustenie']['20'] = $formattedArr[37][20];
$response_array['ecoplus']['kanVyustenie']['22'] = $formattedArr[38][20];
$response_array['ecoplus']['kanVyustenie']['25'] = $formattedArr[39][20];
$response_array['ecoplus']['kanVyustenie']['30'] = $formattedArr[40][20];

//kominove dvere
$response_array['ecoplus']['komDvere'] = $formattedArr[45][20];

if(count($formattedArr) > 0){
	$response_array['status'] = "success";
}else{
	$response_array['status'] = "errorr";
}
header('Content-type: application/json');
echo json_encode($response_array);
?>