<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

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

    $amount = $request->input('amount');

    // Static UPI details (you can make this dynamic too)
    $upiId = 'yourname@upi';
    $name = 'Your Name';

    $upiUri = "upi://pay?pa={$upiId}&pn={$name}&am={$amount}&cu=INR";

    return response(QrCode::format('png')->size(300)->generate($upiUri))
        ->header('Content-Type', 'image/png');
}
}

