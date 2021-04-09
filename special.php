
<body style="background: #F8C471 ">
<center><h4> Special Number</h4>

<form method="get">
		
	<input type="number" name="n1"><br><br>

	<input type="submit">
</form>

<?php 

  if(!empty($_REQUEST['n1']))
  {
  		$x=$_REQUEST['n1'];
  		$num=$_REQUEST['n1'];  

		$sum=0; $rem=0; $mul=1; 
  	
  		while($num!=0) 
 			{  
  				$rem=$num%10;  
   				$sum = $sum + $rem;  
   				$mul = $mul * $rem;  
   				$num=floor($num/10); 

  			}  
  		
   		$ans=$sum+$mul;

  		if($x==$ans)
  			echo "$x is Special Number";
  		else
  			echo "$x is not Special Number";


  }

?>