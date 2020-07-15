<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Razorpaycontroller extends Controller
{
    //
  public function paymet(){

  return view('razor');

  }

  public function charge(Request $request){

/*
 $input = $request->all();

 
print_r($input);
exit;
*/



$d[] = '{
  "amount": $request->Amount,
  "currency": "INR",
  "payment_capture": 1,
  "transfers": [
    {
      "account": "acc_EjmC00U3yvBLF0",
      "amount": 1000,
      "currency": "INR",
      "notes": {
        "branch": "Acme Corp Bangalore North",
        "name": 	anitha privite limitedr"
      },
      "linked_account_notes": [
        "branch"
      ],
      "on_hold": 0,
      
    },
    {
      "account": "acc_EjmLd5QEyY87eZ",
      "amount": 1000,
      "currency": "INR",
      "notes": {
        "branch": "Acme Corp Bangalore South",
        "name": "	anitha privite limited"
      },
      "linked_account_notes": [
        "branch"
      ],
      "on_hold": 0
    }
  ]
}';






foreach($d as $da){

  $pp[] = $da;
  


}
$url = ' https://api.razorpay.com/v1/orders';
$key_id = 'rzp_test_64J0Udq8H9suOs';
$key_secret ='pFFFG4CP6vHGsE7AcLd8UAHG';

    $str = http_build_query($pp);
       
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, '$url');
    curl_setopt($curl, CURLOPT_USERPWD, $key_id . ':' . $key_secret);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $str);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    echo $result;
    curl_close($curl);

    

    }

}
