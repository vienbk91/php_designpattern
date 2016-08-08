<?php

class PayPal {
    public function __construct() {

    }

    public function sendPayment($amount) {
        echo "So tien ban phai tra la: " . $amount . "<br>";
    }
}

// Su dung lan 1
$paypal1 = new PayPal();
$paypal1->sendPayment('1234');


// Su dung lan 2
$paypal2 = new PayPal();
$paypal2->sendPayment('1234');


// Su dung lan 3
$paypal3 = new PayPal();
$paypal3->sendPayment('1234');


// Su dung lan 4
$paypal4 = new PayPal();
$paypal4->sendPayment('1234');

/*
Van de phat sinh: Neu chung ta thay doi ten method sendPayment thi co nghia la
ta cung se phai thay doi o tat ca cac lop co khai bao den no. 
Nhu vay neu trong 1 du an co ma nguon thay doi lien tuc (o day chinh la class PayPal) 
thi co giai phap nao giai quyet van de do ?
*/
?>