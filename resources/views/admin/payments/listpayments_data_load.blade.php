<?php
if(isset($_COOKIE['TimeFormatIsc']))
$userTimezone=$_COOKIE['TimeFormatIsc'];
else
$userTimezone='UTC';
?>
<style>
.table tr td:nth-child(1) { width: 100px}  /* col width, total width=1000px*/
.table tr td:nth-child(2) { width: 400px}
.table tr td:nth-child(3) { width: 150px}
.table tr td:nth-child(4) { width: 150px}
.table tr td:nth-child(5) { width: 200px}
table tr{
  cursor: move;
  }
</style>

    <table id="table_sort" class="table table-striped table-bordered">
        <thead>
            <tr>
              <th onclick="sortTable(0)" class="text-center">{{ __('Sl. No') }}
                <span class="sortTableIcon"></span>
              </th>
              <th onclick="sortTable(1)">{{ __('Name') }}
                <span class="sortTableIcon"></span>
              </th>

              <th onclick="sortTable(2)">{{ __('Mobile No.') }} <span class="sortTableIcon"></span></th>
              <th onclick="sortTable(3)">{{ __('Email') }} <span class="sortTableIcon"></span></th>
              <th onclick="sortTable(4)">{{ __('PAN No.') }} <span class="sortTableIcon"></span></th>
              <th onclick="sortTable(5)">{{ __('Date of Birth') }} <span class="sortTableIcon"></span></th>
              <th onclick="sortTable(6)">{{ __('Amount') }} <span class="sortTableIcon"></span></th>
              <th onclick="sortTable(7)">{{ __('status of Payment') }} <span class="sortTableIcon"></span></th>
              <th onclick="sortTable(9)">{{ __('Transaction Id') }} <span class="sortTableIcon"></span></th>
              <th onclick="sortTable(12)">{{ __('Date') }} <span class="sortTableIcon"></span></th>
            </tr>
        </thead>
        <tbody>
          @if($payment_details->count()==0)
            <td colspan="5" class="text-center" style="border-bottom: 1px solid #c1b7b7;">Empty record</td>
          @endif

          @foreach ($payment_details as $key => $value)
            <tr id="{{$value->id}}" >
              <td class="text-center">{{ $key+1}} </td>
              <td>{{$value->first_name .' '. $value->last_name}}</td>
              <td>{{$value->mobile_no}}</td>
              <td>{{$value->email}}</td>
              <td>{{$value->pan}}</td>
              <td>{{$value->dob}}</td>
              <td>{{$value->amount}}</td>
              <td>{{$value->payment_status}}</td>
              <td>{{$value->transaction_id}}</td>
              {{-- <td>{{$value->response == null ? '' : $value->response}}</td> --}}
              <td>{{$value->created_at}}</td>


            </tr>
            @endforeach
        </tbody>

    </table>
<input type="hidden" name="page_no" id="page_no" value="{{$page_no}}">
<div style="font-size: 1.3rem;"> {{$payment_details->links()}}</div>

{{-- ----------------sortable------------------ --}}
<script src="{{asset('admin/js/sortable.js')}}"></script>
<script>
$('tbody').sortable();
    $(function() {
       $('tbody').sortable({
          update: function(event, tbody) {
          var productOrder = $(this).sortable('toArray').toString();
             $.ajax({
               url:'{{ URL::asset('/admin/donate_tbl_sortable') }}',
                           type: 'POST',
                           data: { ids: productOrder },
                success:function(data){
                   var page_no=$('#page_no').val();
                   fetch_data(page_no);
                }
             });
          }
       });
    });
 </script>
 <script>
    function sendNotification(event) {
        if (confirm('{{ __('Are you sure you want to send notification?') }}')) {
            event.preventDefault(); // Prevent the default action (navigation)

            // Submit the form
            document.getElementById('notificationForm').submit();
        }
    }
</script>
 {{-- ----------------end sortable------------------ --}}

 {{-- htlm table sort --}}
  <script src="{{asset('admin/js/html-table-sort.js')}}"></script>
   {{-- htlm table sort end--}}
