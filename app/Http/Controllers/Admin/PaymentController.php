<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\PaymentDetail;

class PaymentController extends Controller
{

    public function index(Request $request)
        {
        $p_count=$request->p_count;
        $page_no=$request->page;

        $search_keyword=$request->search_keyword;
        $search_status=$request->search_status;

        if($p_count!='')
            $paginate_value =$request->p_count;
        else
            $paginate_value=20;

            $payment_details=PaymentDetail::query();
            if($search_keyword!='')
            {
            $payment_details->where('order_id', 'LIKE', '%' . $search_keyword . '%');
            }
            if($search_status!='')
            {
            $payment_details->where('payment_status', '=', $search_status);
            }

        if($p_count!='')
        {
            $payment_details=$payment_details->select("id","first_name","last_name",'mobile_no',"email","pan",'dob','amount','payment_status', 'order_id', 'transaction_id','payment_mode','response','created_at')->orderBy('id','desc')->paginate($paginate_value);
            return View('admin.payments.listpayments_data_load',['details_diocese'=>$payment_details],compact('page_no'));

        }
        else {
            $payment_details=$payment_details->select("id","first_name","last_name",'mobile_no',"email","pan",'dob','amount','payment_status', 'order_id', 'transaction_id','payment_mode','response','created_at')->orderBy('id','desc')->paginate($paginate_value);
            return View('admin.payments.listpayments',['payment_details'=>$payment_details],compact('page_no'));
        }
        }

    function fetch_data(Request $request)
    {
    $p_count=$request->p_count;
    $page_no=$request->page;

    $search_keyword=$request->search_keyword;
    $search_status=$request->search_status;

    if($request->ajax())
    {
        if($p_count!='')
        {
        $paginate_value =$request->p_count;
        }
        else {
        $paginate_value=20;
        }

        $payment_details=PaymentDetail::query();
        if($search_keyword!='')
        {
        $payment_details->where('order_id', 'LIKE', '%' . $search_keyword . '%');
        }
        if($search_status!='')
        {
        $payment_details->where('payment_status', '=', $search_status);
        }

        $payment_details=$payment_details->select("id","first_name","last_name",'mobile_no',"email","pan",'dob','amount','payment_status', 'order_id', 'transaction_id','payment_mode','response','created_at')->orderBy('id','desc')->paginate($paginate_value);
                return View('admin.payments.listpayments_data_load',['payment_details'=>$payment_details],compact('page_no'));

        }
    }

        public function export_data()
        {
        $filePath = storage_path('app/public/Payment-details.xlsx');
        Excel::store(new PaymentDetailExport, 'public/Payment-details.xlsx');
        return response()->download($filePath);

        }
}
