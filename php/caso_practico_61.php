<!DOCTYPE html>
<html>
<head>
   <title>caso practico 6.1</title>
</head>
<body>
<?php

$euros = 23.6;
$dolares = 569.8;

conversion($euros,"EURO","USD");
/*printf(" %.2f  € son  %.2f  $ ", $euros, EurosDolares($euros));
echo "<br>";
DolaresEuros($dolares);
*/

function EurosDolares($number){

    $res =  $number * 1.06175 ;
    return $res;
}

function DolaresEuros($number){
   $res = $number * 0.9418413 ;
   printf("%.2f $ son  %.4f   €", $number , $res);


}

function conversion($number , $from , $to){
     if("EURO"==$from){
          if("USD" == $to){
            $res =  $number * 1.06175 ;
             printf(" %.2f €  son  %.2f  $ ",$number,$res);
         }
          if("GBP" == $to){
            $res =  $number * 0,809125 ;
             printf(" %.2f €  son  %.2f  £ ",$number,$res);
         }
      }
      if("USD"==$from){

            if("EURO" == $to){
            $res = $number * 0.9418413 ;
            printf(" %.2f $  son  %.2f  € ",$number,$res);
            }
            if("GBP" == $to){
            $res =  $number * 0,80068 ;
             printf(" %.2f $  son  %.2f  £. ",$number,$res);
         }

      }
      if("GBP"==$from){

            if("EURO" == $to){
            $res = $number * 1,178082 ;
            printf(" %.2f £  son  %.2f  € ",$number,$res);
            }
            if("USD" == $to){
            $res =  $number * 1,245645 ;
             printf(" %.2f £  son  %.2f  $ ",$number,$res);
         }

      }

}

?>

</body>
</html>