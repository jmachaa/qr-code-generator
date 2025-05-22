<?php
namespace App\Exports;

use App\Models\PaymentDetail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PaymentDetailExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        $data = PaymentDetail::select('first_name', 'last_name','mobile_no','email','pan','dob','address','country_code','pincode','amount','payment_status','transaction_id','created_at')->get();

        foreach ($data as $key => $value){
            $data[$key]['created_at'] = \Carbon\Carbon::parse($value['created_at'])->format('Y-m-d');
        }

        return $data;
    }

    public function headings(): array
    {
        return [
            'First Name',
            'Last Name',
            'Mobile No',
            'Email',
            'Pan',
            'Dob',
            'Address',
            'Country Code',
            'Pincode',
            'Amount',
            'Payment Status',
            'Transaction Id',
            'Date'
        ];
    }
}
