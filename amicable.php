
<body style="background: #D2B4DE">
<center><h4> Amicable Numbers</h4>

<form method="get">
		
	<input type="number" name="n1"><br><br>
	<input type="number" name="n2"><br><br>
	<input type="submit">
</form>

<?php 

  if(!empty($_REQUEST['n1']) && !empty($_REQUEST['n2']))
  {

  	function divSum( $n) 
	{ 

    $result = 0; 
  
    // find all divisors  

    for ($i = 2; $i <= sqrt($n); $i++) 
    { 
          
        // if 'i' is divisor of 'n' 
        if ($n % $i == 0) 
        { 
              
            // if both divisors are same 
            // then add it once else add 
            // both 
            if ($i == ($n / $i)) 
                $result += $i; 
            else
                $result += ($i + $n / $i); 
        } 
    } 
  
    return ($result + 1); 
} 
  
function areAmicable($x, $y) 
{ 
    if (divSum($x) != $y) 
        return false; 
          
    return (divSum($y) == $x); 
} 


    $x = $_REQUEST['n1'];
    $y = $_REQUEST['n2'];
    if (areAmicable($x, $y)) 
        echo "Yes $x and $y are Amicable"; 
    else
        echo "No $x and $y are not Amicable"; 

}

?>  </center>