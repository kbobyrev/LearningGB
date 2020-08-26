<html>
	<body>


	<?php
		//1 задание

		$a=-12;
		$b=45;

		if ($a>=0 && $b>=0){
			echo ($a-$b);	
		}
		elseif ($a<0 && $b<0) {
			echo ($a*$b);
		}
		else  {
			echo ($a+$b);
		}
	?>	
		<br>
	<?php
		//2 задание 
        function digits($dig){
            $temp_str='';
            switch ($dig) {
                case 0:
                    $temp_str.="0<br>";
                    case 1:
                    $temp_str.="1<br>";
                    case 2:
                    $temp_str.="2<br>";
                    case 3:
                    $temp_str.="3<br>";
                    case 4:
                    $temp_str.="4<br>";
                    case 5:
                    $temp_str.="5<br>";
                    case 6:
                    $temp_str.="6<br>";
                    case 7:
                    $temp_str.="7<br>";
                    case 8:
                    $temp_str.="8<br>";
                    case 9:
                    $temp_str.="9<br>";
                    case 10:
                    $temp_str.="10<br>";
                    case 11:
                    $temp_str.="11<br>";
                    case 12:
                    $temp_str.="12<br>";
                    case 13:
                    $temp_str.="13<br>";
                    case 14:
                    $temp_str.="14<br>";
                    case 15:
                    $temp_str.="15<br>";
                    break;
                default:
                    echo "incorrect digit";
                    break;
            }
            return $temp_str;
        }
        echo digits(2);
        
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
            if ($b=0){
                return 'division by zero is prohibited';
            }else{
			return $a/$b;
            }
		}

	// 4 задание
		function mathOperation($arg1,$arg2,$operation){ 
			if (is_numeric($arg1) && is_numeric($arg2)){
				switch ($operation) {
					case 'add':
						return add_($arg1,$arg2);
						break;
					case 'dif':
						return diff_($arg1,$arg2);
						break;
					case 'mult':
						return mult_($arg1,$arg2);
						break;
					case 'div':
						return div_($arg1,$arg2);
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
		function power($val,$pow){
			if (is_numeric($val) && is_numeric($pow)){
				switch (true) {
					case $pow==1:
						return $val;
					case $pow>1:
						return $val *power($val,$pow-1);
					case $pow ==0: 
						return 1;	
					case $pow <-0:
						return (1/$val) *(1/power($val,$pow+1));
				}
				

			} else {
				echo 'incorrect val or pow';
			}
				
		}


		echo power(2,-1);
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