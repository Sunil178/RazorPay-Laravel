    public function payment(Request $request) {
        // dd($request->all());
        $transaction_id = "coronavirus-benefactory".time();
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
        // dd($message_data["amount"]);
        // Mail::send('corona_thank_you', ['title' => $title, 'message_data' => $message_data], function ($message) use($message_data)
        // {
        //     $message->from('sunilthakur123chor@gmail.com', 'Team Benefactory');
        //     $message->to($message_data['email'])->subject('#MaskAgainstCovid19 Donation');
        // });
        // return redirect('/')->with("status", "success");
        if ($data->save()) {
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
