<?php

// // AND harus bernilai benar
// var_dump(true && true); // true
// var_dump(true && false); // false

// // OR salah satu harus bernilai benar 
// var_dump(true || false); // true
// var_dump(true || true); // true

// // XOR salah satu harus bernilai salah
// var_dump(true xor false); // true
// var_dump(true xor true); // false

// var_dump(true != 'true'); //false
// var_dump(true !== 'true'); // true

// if(true){
//     echo "He is Budi";
// }else{
//     echo "He is not Budi";
// }
// echo (true) ? "Budi father's": "Not Budi father's";

// for($x=1;$x<=10;$x++){
//     for($y=1;$y<=10;$y++){
//         // echo $x. "x". $y. "=". $x*$y. "\n";
//     }
// }

foreach(range(1,10) as $num){
    // echo $num.PHP_EOL;
}
echo PHP_EOL;
while(true){
    $num=rand(1,10);
    if($num==9){
        exit('lucky nine');
    }else{
        echo "Losser,your number is ".$num.PHP_EOL;
    }
}
