<?php
if (isset($_POST['num1']) && $_POST['num1']!="" && isset($_POST['num2']) && $_POST['num2']!="" && isset($_POST['ope']) && $_POST['ope']!="") {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$ope = $_POST['ope'];
    if ($ope == "+")
    {
	    $ope = "%2B";
    }
	
	$url = "http://10.35.1.78/knccshamel/sampleapi.php?num1=$num1&num2=$num2&operator=$ope";
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result1 = json_decode($response);
	
	echo "<table border='1'>";
	echo "<tr><td  colspan='2' align='center'><font color='blue'>OUTPUT</font></td></tr>";
	echo "<tr><td>Result:</td><td>$result1->output</td></tr>";
	echo "<tr><td>Response Code:</td><td>$result1->response_code</td></tr>";
	echo "<tr><td>Response Desc:</td><td>$result1->response_desc</td></tr>";
	echo "</table>";
	echo "<br>";
	echo "<br>";
}
?>
<form action="" method="POST">
<label>Enter First Number :</label><br />
<input type="text" name="num1" placeholder="Enter First Number" required/>
<br /><br />
<label>Enter Second Number :</label><br />
<input type="text" name="num2" placeholder="Enter Second Number" required/>
<br /><br />
<label>Enter Operator (+ | - | / | *) :</label><br />
<input type="text" name="ope" placeholder="Enter Operator" required/>
<br /><br />
<button type="submit" name="submit">Submit</button>
</form>