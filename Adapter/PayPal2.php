<?php
class PayPal2 {
    public function __construct() {

    }

    // old method
    /*
    public function sendPayment($amount) {
        echo "So tien ma ban phai tra la: " . $amount . "<br>";
    }
    */

    // new method 
    public function payAmount($amount) {
        echo "So tien ma ban phai tra la: " . $amount . "<br>";
    }


}

/*
Tao 1 interface co chua giao dien cua cac method thuong xuyen thay doi
*/
interface paymentAdapter{
    public function pay($amount);
}

/*
Tao 1 lop Adapter su dung lop interface va ke thua lai noi dung cua cac method hay thay doi 
*/
class paypalAdapter implements paymentAdapter {
    private $paypal;

    public function __construct(PayPal2 $paypal) {
        $this->paypal = $paypal;
    }

    public function pay($amount) {
        //$this->paypal->sendPayment($amount);
        $this->paypal->payAmount($amount);
    }
}


$paypal1 = new paypalAdapter(new PayPal2());
$paypal1->pay('1234');

$paypal2 = new paypalAdapter(new PayPal2());
$paypal2->pay('1234');

$paypal3 = new paypalAdapter(new PayPal2());
$paypal3->pay('1234');

$paypal4 = new paypalAdapter(new PayPal2());
$paypal4->pay('1234');

/*
Nhu vay van de da duoc giai quyet va ta chi viec thay doi code trong lop paypalAdapter
ma khong can chinh sua gi code o cac phan khac.
*/
?>