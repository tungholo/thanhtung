<!DOCTYPE html>
<html>
<body>

<table border='1'  bordercolor='red' width='400' height='200' cellpadding='7'>
<?php
    if(isset($_POST['ve'])){
		
        $rong=$_POST['r'];
        $cao=$_POST['c'];
		$sum=1;
		if($rong>=$cao)
		{
       for($a=0;$a<$cao;$a++)
     {
		echo "<tr></tr>";
	
       for($b=0;$b<($rong-$cao)+$sum; $b++)
       {
		echo "<th></th>";
       }
	   $sum++;
     }
		}
		else
		{
			 for($a=0;$a<$cao;$a++)
			 {
				 echo "<tr></tr>";
				 if($sum>$rong)
				{
					$sum--;
				}
				 for($b=0;$b<$sum;$b++)
				{
					echo "<th></th>";
				
				}
				
					$sum++;
			 }
		}
	}
	?>
 </table>
 </body>	