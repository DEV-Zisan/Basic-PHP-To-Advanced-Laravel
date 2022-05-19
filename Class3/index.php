 <?php
 
$mony = 21;
//   data type + variavle chack  
if ($mony === 50){
    echo "Yes";

} else {
    echo "No";
};

echo "<br>";
$HTML = true;
$CSS = true;

 if ($HTML == true && $CSS == true) { 
     echo "welcome to php";
    };
echo "<br>";

// + - * /
$pay = 2;
$pay1 = 11;

echo "Hello pial your buget $pay";
echo "<br>";
echo $pay + $pay1;
echo "<br>";
echo $pay**2;

//bagses
$price = 11;
$dalivery = 2;

echo $price % $dalivery; 


//assignmwnt  Operator

$name = "Zisan";

// += Ar kaj 
$number1 = 1;
$number2 = 2;
$number3 = 3;

$number1 = $number2 + $number3;
echo $number1;

// We have 10 product on our inventory 10, 15, 5, 8, 7, 3,
// Caculate total price of all product
//Niyom 1

echo"<br>";
$price = [10, 15, 5, 8, 7,3];

$total_price = 0;

foreach ($price as $myprice) {
    $total_price = $total_price + $myprice;
}
echo "Total Price: $total_price";

//Niyom 2
echo "<br>";

$price = [10, 1, 3, 4, 3];
$total_price= 0;

foreach ($price as $my_price) {
    $total_price +=  $my_price;
}
echo"Total Price:  $total_price";

echo "<br>";

$mony = 500;

if ($mony <= 510){
    echo "Go to Dhaka";
} else {
    echo "Go back to bari";
};

echo "<br>";
// যদি এইচটিএমএল ও সত্যি হয় পিএইচপি ও সত্যি  হয় তাহলে ইয়েস হবে 
$html= 'true';
$php= 'true';

if ($html == 'true' && $php =='true') {
    echo "Yes";
} else {
    echo "no";
};

echo "<br>";
// যে কোন একটা জানলেই হবে 
$html= 'true';
$php= 'true';

if ($html == 'true' || $php =='false') {
    echo "Yes";
} else {
    echo "no";
};

echo "<br>";
$pyton = true;
$java = true;

if ( !$pyton ){
    echo "yes";
}else{
    echo "no";
};

// যদি ১৮ তেকে হয় বড় তাহলে তাহলে you are welcome to anyting jodi 18-13 ar bitore take tahole you are welcome on my website; jodi ai 2 condation ar bitore na pore tahole  you are not welcome
echo "<br>";
 
$age = 25;

if ($age >18) {
    echo "you are welcome to anyting";
} else if ($age <18 && $age >13) {
    echo "you are welcome on my website";
} else {
    echo "you are not welcome";
}

//switch cash
echo  '<br>';

$fan_no = 3;


switch ($fan_no){
    case '1':
        echo "start fan1";
        break;
    case '2':
        echo "start fan2";
        break;
    case '3':
        echo "start fan3";
        break;
    case '4':
         echo "start fan4";
         break;
    default:
        echo'plese enter valid fan';
        break;
}

print "<br>";
$string="s";
var_dump($string);
 ?> 