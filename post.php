<?php

/****************** Post data on sell.do *******************/
          if(!empty($_REQUEST['email']) && !empty($_REQUEST['mobile'])){
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['countryCode'].$_REQUEST['mobile'];
$note = $_REQUEST['message'];

$srd = isset($_REQUEST['srd']) ? $_REQUEST['srd'] : '61979857c8256106f601394b';
//$form_id = isset($_REQUEST['form_id']) ? $_REQUEST['form_id'] : '123456789012345678901234';
$project_id = isset($_REQUEST['project_id']) ? $_REQUEST['project_id'] : '';

$min_budget = $_REQUEST['min_budget'];
$locations = $_REQUEST['locations'];
$bhk = $_REQUEST['bhk'];
$bhkArr = explode(',',$bhk);
$source = isset($_REQUEST['source']) ? $_REQUEST['source'] : 'Seo';
//echo '<pre>';print_r($_REQUEST);die;
 $data = array (
  'form_id' => '123456789012345678901234',
  'sell_do' => 
  array (
    'campaign' => 
    array (
      'srd' => $srd,
      'campaign_id' => '',
    ),
    "analytics"=>
      array (
        "keyword"=> $_SERVER['REMOTE_ADDR'],
      ),
    'form' => 
    array (
      'lead' => 
      array (
        'name' => $name,
        'email' => $email,
        'phone' => $mobile,
        'project_id' => $project_id,
        'campaign_id' => '',
        'sales' => '',
        'sub_source'=> $subject,  
        'profile' => 
        array (
          'company' => '',
        ),
      ),
      'custom' => 
      array (
        'c_one' => 'c one',
      ),
      'note' => 
      array (
        'content' => $note,
      ),
      'requirement' => 
      array (
        'bhk' => $bhkArr,
        'property_type' => 'Apartments',
        'purpose' => 'end_use',
        'locations' => $locations,
        'min_budget' => $min_budget,
        'max_budget' => '',
        'min_possession' => '',
        'max_possession' => '',
      ),
    ),
  ),
  'api_key' => '288f1bea1b8ffe52a74cb7eb5bbad974',
);
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://app.sell.do//api/leads/create.json');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Cache-Control: no-cache';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    //echo '<pre>';print($result);die;
 }
        /****************** End of post sell.do data **************/