
<body style="background: #F5B7B1 ">
<center><h4> Automorphic Number</h4>

<form method="get">
		
	<input type="number" name="n1"><br><br>

	<input type="submit">
</form>

<?php 

  if(!empty($_REQUEST['n1']) )
  		{


  function isAutomorphic($N) 
{ 
   $sq = $N * $N;
	 while($N>0)
        {
            if($N % 10 != $sq % 10)
            {    
                return false;
            }
            $N = $N / 10;
            $sq = $sq / 10;
            return true;
        }
} 
  

$N = $_REQUEST['n1']; 
if(isAutomorphic($N))
     echo" $N is  Automorphic" ;
 else
 	echo"$N is Not Automorphic"; 

}
 ?>