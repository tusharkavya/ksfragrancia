<?php
       $result=$_POST['square'];
	   $new=$result*$result;
	   echo 'square='.$new.' ';
	   echo '<br><br>';
	   
	   $add=$result*$result*$result;
	   echo 'cube='.$add.' ';
	   echo '<br><br>';
	   
	   $fact=1;
	   for($i=$result;$i>1;$i--)
	   {
	   $fact=$fact*$i;
	   
	   }
	   echo 'factorial='.$fact.' ';
	?>   
	   