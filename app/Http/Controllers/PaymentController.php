<?php

namespace App\Http\Controllers;

use Razorpay\Api\Api;
use Illuminate\Http\Request;
use App\Order;
use Mail;
// require('razorpay-php/Razorpay.php');

class PaymentController extends Controller
{
    public function payment(Request $request) {
        // dd($request->all());
        $transaction_id = "coronavirus-technomatrix".time();
        $input = $request->all();
        $data = new Order();
        $data->name = $input["fname"] . " " . $input['lname'];
        $data->email = $input["email"];
        $data->contact_number = $input["mobile"];
        $data->amount = $input["amount"];
        $data->transaction_id = $transaction_id;
        $data->order_id = $input["order_id"];
        $data->payment_id = $input["payment_id"];
        $data->pancard = ($input["pancard"]=="")?"null":$input["pancard"];
        // $data->save();
        $amount = $input["amount"];
        $title="User Registration";
        $message = "Thank you Donating.";
        // $email = $req->email;
        $name = $input["fname"];
        $message_data = ["message" => $message, "email"=>$input["email"], "amount"=>$amount, "name"=> $name] ;
        if ($data->save()) {
        dd($message_data["amount"]);
        Mail::send('corona_thank_you', ['title' => $title, 'message_data' => $message_data], function ($message) use($message_data)
        {
            $message->from('sunilthakur123chor@gmail.com', 'Team TechnoMatrix');
            $message->to($message_data['email'])->subject('#MaskAgainstCovid19 Donation');
        });
        return redirect('/')->with("status", "success");
            $response["status"]="success";
            // $response["data"] = IndiaFloodsContribution::orderBy('amount', 'DESC')->get();
            $response["total_amount"] = Order::sum('amount');
            $response['Data'] = $data;
            # code...
            return $response;
        }
        else {
            $response["status"]="failed";
        }
        // return $input;
    }

    public function paymentStart (Request $request) {

        $input = $request->all();


        $name = $input['fname'] . " " . $input['lname'];
        $email = $input['email'];
        $mobile = $input['mobile'];
        $pancard = $input['pancard'];
        $country = $input['country'];
        $amount = $input['amount'];

        $keyId = env('RAZORPAY_KEY');
        $keySecret = env('RAZORPAY_SECRET');
        $displayCurrency = 'INR';

        // Create the Razorpay Order


        $api = new Api($keyId, $keySecret);

        $orderData = [
            'receipt'         => 3456,
            'amount'          => $amount * 100, // 2000 rupees in paise
            'currency'        => 'INR',
            'payment_capture' => 1 // auto capture
        ];

        $razorpayOrder = $api->order->create($orderData);

        $razorpayOrderId = $razorpayOrder['id'];

        $_SESSION['razorpay_order_id'] = $razorpayOrderId;

        $displayAmount = $amount = $orderData['amount'];

        if ($displayCurrency !== 'INR')
        {
            $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
            $exchange = json_decode(file_get_contents($url), true);

            $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
        }

        $data = [
            "key"               => $keyId,
            "amount"            => $amount,
            "name"              => $name,
            "description"       => "Donation for Corona",
            "image"             => "https://img.etimg.com/thumb/msid-65041692,width-300,imgsize-64464,resizemode-4/razorpay.jpg",
            "prefill"           => [
            "name"              => $name,
            "email"             => $email,
            "contact"           => $mobile,
            ],
            "notes"             => [
            "address"           => "Hello World",
            "merchant_order_id" => "12312321",
            ],
            "theme"             => [
            "color"             => "#F37254"
            ],

            "order_id"          => $razorpayOrderId,
            // "redirect"          => "true",
            // "callback_url"      => "/again",
        ];

        if ($displayCurrency !== 'INR')
        {
            $data['display_currency']  = $displayCurrency;
            $data['display_amount']    = $displayAmount;
        }

        $json = json_encode($data);

        return $json;

    }

    public function again (Request $request) {
        echo $request->razorpay_payment_id . "<br>";
        echo $request->razorpay_order_id . "<br>";
        echo $request->razorpay_signature . "<br>";

        return json_encode($request);

    }

}
