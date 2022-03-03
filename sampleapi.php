<?php
header("Content-Type:application/json");
$first_num = $_GET['num1'];
$second_num = $_GET['num2'];
$operator = $_GET['operator'];
if ($first_num && $second_num && $operator)
{
  $result = '';
  if (is_numeric($first_num) && is_numeric($second_num)) 
  {
    switch ($operator) 
	{
        case "+":
           $result = $first_num + $second_num;
            break;
        case "-":
           $result = $first_num - $second_num;
            break;
        case "*":
            $result = $first_num * $second_num;
            break;
        case "/":
            $result = $first_num / $second_num;
			break;
		default:
		    $result = $first_num / $second_num;
			
    }
	response($result, 100, "Success");
  }
  else
  {
	  response(NULL, 400,"Invalid Request");
  }
}
else
{
	response(NULL, 400,"Invalid Request");
}

function response($result,$response_code,$response_desc){
	$response['output'] = $result;
	$response['response_code'] = $response_code;
	$response['response_desc'] = $response_desc;
	$json_response = json_encode($response);
	echo $json_response;
}
?>