<?
    // 1 exercise
        $i=0;
        while($i<=100){
            if ($i%3==0){
                echo "$i<br>";
            }
            $i++;
        }

?>
<br>
<?
    // 2 exercise
    $i=0;
    do {
        if ($i==0){
            $dArray[]="$i - ноль<br>";
        }elseif($i==1 || ($i%2!=0)){
            $dArray[]="$i – нечетное число.<br>";
        }else{
          $dArray[]="$i – четное число.<br>";
        }
        $i++;
    }while($i<=10);
           
    echo implode('<br>',$dArray);
?>
<br>
<?
// 3 exercice
    $regions=[
        'Московская область'=>['Москва', 'Зеленоград', 'Клин'],
        'Ленинградская область' =>['Всеволожск', 'Павловск', 'Кронштадт'],
        'Рязанская область' => ['Ряжск','Михайлов','Касимов']
    ];
    foreach ($regions as $reg =>$cities_list){
        echo $reg.':<br>'.implode (',',$cities_list).'<br><br>';
        }
        


// 4

//function ru_en($string_){
//    $ru =[
//    'а','б','в','г','д','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','x','ч','щ','ъ','ы','ь','э','ю','я'
//    ];
//    $en=[
//     'a','b','v','g','d','zh','z','i','y','k','l','m','n','o','p','r','s','t','u','f','kh','ch','sch',"'",'y',"'",'e','yu','ya'
//    ];
//
//
//    $temp_str="";
//    for($l=0;$l<=strlen($string_);$l++){
//        $lit = mb_substr($string_,$l,1);
//        //echo $lit."<br>";
//        for ($i=0;$i<=count($ru);$i++){
//            if ($lit ==$ru[$i]){
//                $temp_str.=$en[$i];
//                
//                //echo $lit."<br>";
//                //echo $ru[$i]."<br>";
//                //echo $en[$i]."<br>";
//                    
//                break;
//                }
//            }
//        }
//    return $temp_str;
//    }
//
//echo ru_en('вавава');




//5
Function spaces($string_){
    return str_replace(' ','_',$string_);
}
echo spaces('а м');
?>
    