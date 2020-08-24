<html>
	<body>


	<?php
		//1 задание

		$a=-12;
		$b=45;

		if ($a>0 && $b>0){
			echo $a-$b;	
		}
		elseif ($a<0 && $b<0) {
			echo $a*$b;
		}
		else  {
			echo $a+$b;
		}
	?>	
		<br>
	<?php
		//2 задание 
		$a=25;
		switch ($a) {
			case 0:
				echo	"0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15";
				break;
				case 1:
				echo	"1,2,3,4,5,6,7,8,9,10,11,12,13,14,15";
				break;
				case 2:
				echo	"2,3,4,5,6,7,8,9,10,11,12,13,14,15";
				break;
				case 3:
				echo	"3,4,5,6,7,8,9,10,11,12,13,14,15";
				break;
				case 4:
				echo	"4,5,6,7,8,9,10,11,12,13,14,15";
				break;
				case 5:
				echo	"5,6,7,8,9,10,11,12,13,14,15";
				break;
				case 6:
				echo	"6,7,8,9,10,11,12,13,14,15";
				break;
				case 7:
				echo	"7,8,9,10,11,12,13,14,15";
				break;
				case 8:
				echo	"8,9,10,11,12,13,14,15";
				break;
				case 9:
				echo	"9,10,11,12,13,14,15";
				break;
				case 10:
				echo	"10,11,12,13,14,15";
				break;
				case 11:
				echo	"11,12,13,14,15";
				break;
				case 12:
				echo	"12,13,14,15";
				break;
				case 13:
				echo	"13,14,15";
				break;
				case 14:
				echo	"14,15";
				break;
				case 15:
				echo	"15";
				break;

			default:
				echo "incorrect digit";
				break;
		}

	?>
	<br>
	<?php

	//3 задание
		function add_($a=1,$b=1){
			return $a+$b;
		}
		function diff_($a=1,$b=1){
			return $a-$b;
		}
		function mult_($a=1,$b=1){
			return $a*$b;
		}
		function div_($a=1,$b=1){
			return $a/$b;
		}

	// 4 задание
		function mathOperation($arg1,$arg2,$operation){
			if (is_numeric($arg1) && is_numeric($arg2)){
				switch ($operation) {
					case 'add':
						return $arg1+$arg2;
							break;
					case 'dif':
						return $arg1-$arg2;
						break;
					case 'mult':
						return $arg1*$arg2;
						break;
					case 'div':
						return $arg1/$arg2;
						break;
					default:
						return	'incorrect operator';
						break;
				}
			}
			else{		
				echo 'incorrect argument';	
			}
		}
		echo mathOperation	(1,2,"mds");
		echo '<br>';

	// 6 задание
			//не сработает только -1 степень
		function power($val,$pow){
			if (is_numeric($val) && is_numeric($pow)){
				switch (true) {
					case $pow==1:
						return $val;
						break;
					case $pow>1:
						return $val *power($val,$pow-1);
						break;
					case $pow ==0:
						return 0;
						break;	
					case $pow <-1:
						return (1/$val) *(1/power($val,$pow+1));
						break;	
					case $pow ==-1:
						return  $val;
						break;
				}
				

			} else {
				echo 'incorrect val or pow';
			}
				
		}


		echo power(3,0);
		echo "<br>";

		// 7
				function timeViewer($hh,$mm)
			{		

				switch(true){
					case ($hh >=5 && $hh <=20) || ($hh==0):
						$str_hh ="часов";
						break;	
					case ($hh==1) || ($hh%2==1):
					    $str_hh ="час";
					    break;
					case ($hh>1 && $hh<5) || ($hh>=22 && $hh<=23):
						$str_hh ="часа";
						break;
					default:
							return "incorrect hour format";
				}
				switch(true){
					case ($mm >=5 && $mm <=20) || ($mm%10==0) || ($mm%10>=5):
						$str_mm ="минут";
						break;
					case $mm ==1:
						$str_mm ="минута";
						break;
					case ($mm >1 && $mm <5) || ($mm%10<5):
						$str_mm ="минут";
						break;
					default:	
							return "incorrect minute format";	
				}
				return $hh." ".$str_hh." ".$mm." ".$str_mm;	
			}
			echo timeViewer	(0,13)	



	?>


	</body>
</html>