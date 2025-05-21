<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diocese;
use App\Models\countries;
use App\Models\Parish;
use App\Models\PaymentDetail;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\Writer\PngWriter;



class PaymentController extends Controller
{
    public function index()
    {

        return view('user.payment');
    }
    public function generateUpiQr(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        $upiId = '9847969021@ybl';
        $payeeName = 'Thomas P Y';
        $amount = number_format($request->amount, 2, '.', '');

        $upiUri = "upi://pay?pa={$upiId}&pn=" . urlencode($payeeName) . "&am={$amount}&cu=INR";

        $result = Builder::create()
            ->writer(new PngWriter())
            ->data($upiUri)
            ->encoding(new Encoding('UTF-8'))
            ->size(300)
            ->margin(10)
            ->build();
        return response()->json(['qrcode' => $result->getDataUri()]);
    }
    public function fetch_diocese_list()
    {
        $diocese_list = Diocese::where('status', 1)->get();
        return response()->json($diocese_list);
    }
    public function fetch_countries_list()
    {
        $countries = countries::all();
        return response()->json($countries);
    }
    public function fetch_parishes_by_diocese($diocese_id)
    {
        return response()->json(Parish::where('diocese_id', $diocese_id)->get(['id', 'parish_name']));
    }
    public function submitPayment(Request $request)
    {
        
        $section_id = (int)$request['selection'] ?? '';
        $country_code = $request['country_code'] ?? '';
        $country_code = $request['country_code'] ?? '';
        $mobile_number_without_country_code = $request['mobile_number_without_country_code'] ?? '';
        $full_mobile_number = $country_code . $mobile_number_without_country_code;
        $fisrt_name = $request['fisrt_name'] ?? '';
        $last_name = $request['last_name'] ?? '';
        $email = $request['email'] ?? '';
        $pan_no = $request['pan'] ?? '';
        $dob = $request['dob'] ?? '';
        $address = $request['address'] ?? '';
        $country_id = $request['country_id'] ?? '';
        $pincode  = (int)$request['pincode'] ?? '';
        $diocese_id  = (int)$request['diocese_id'] ?? '';
        $parish_id = (int)$request['parish_id'] ?? '';
        $amount_to_pay = (float)$request['amount'] ?? '';

        $transaction_id = '';
        $payment_status = 'pending';

        $payment_detail = new PaymentDetail();
        $payment_detail->selection_id = $section_id;
        $payment_detail->first_name = $fisrt_name;
        $payment_detail->last_name = $last_name;
        $payment_detail->mobile_no = $full_mobile_number;
        $payment_detail->email = $email;
        $payment_detail->pan = $pan_no;
        $payment_detail->dob = date('Y-m-d', strtotime($dob));
        $payment_detail->address = $address;
        $payment_detail->country_code = $country_code;
        $payment_detail->payment_mode = '';
        $payment_detail->pincode = (int)$pincode;
        $payment_detail->diocese_id = (int)$diocese_id;
        $payment_detail->parish_id = (int)$parish_id;
        $payment_detail->amount = (float)$amount_to_pay;
        $payment_detail->order_id = '';
        $payment_detail->transaction_id = (string)$transaction_id;
        $payment_detail->payment_status = (string)$payment_status;
        $payment_detail->save();
        return response()->json([
            'message' => 'Payment details saved successfully'
        ]);
    }
}
