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
              <th onclick="sortTable(1)">{{ __('Title') }}
                <span class="sortTableIcon"></span>
              </th>
              <th onclick="sortTable(1)">{{ __('Name') }}
                <span class="sortTableIcon"></span>
              </th>

              <th style="text-align: center;">{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
          @if($details_diocese_events->count()==0)
            <td colspan="5" class="text-center" style="border-bottom: 1px solid #c1b7b7;">Empty record</td>
          @endif
          @foreach ($details_diocese_events as $key => $value)
            <tr id="{{$value->id}}" @if($value->status==0) class="row_deactive" @endif>
              <td class="text-center">{{ $key+1}} </td>
              <td>{{$value->title}}</td>
              <td>{{$value->name}}</td>
              <!-- action -->
              <td class="text-center">
              <a data-placement="top" data-toggle="tooltip" title="Edit" href="{{url('admin/diocese/'.$value->id.'/edit')}}" class="btn btn-xs"><i class="fas fa-pencil-alt"></i></a>
              @if($value->status==1)
              <a data-placement="top" data-toggle="tooltip" title="Deactivate" onclick="action_status({{$value->id}})" class="btn btn-xs"><i class="fas fa-minus-circle"></i></a>
              @else
              <a data-placement="top" data-toggle="tooltip" title="Activate" onclick="action_status({{$value->id}})" class="btn btn-xs"><i class="fas fa-check-circle" ></i></a>
              @endif
              <a data-placement="top" data-toggle="tooltip" title="Delete" onclick="delete_item({{$value->id}})" class="btn btn-xs"><i class="fas fa-trash"></i></a>

              



                {{-- <a onclick="return confirm('{{ __('Are you sure you want to send notification?') }}')"
                    href="{{ url('admin/push_notification', encrypt($value->id)) }}"
                    class="btn btn-xs" title="Send notification">
                    <i class="fas fa-bell"></i>
                </a> --}}
                {{--<a onclick="return confirm('{{ __('Are you sure you want to send notification?') }}')"
    href="{{ url('admin/push_notification', ['id' => encrypt($value->id), 'type' => 'news']) }}"
    class="btn btn-xs" title="Send notification">
    <i class="fas fa-bell"></i>
</a>--}}







             </td>
            </tr>
            @endforeach
        </tbody>

    </table>
<input type="hidden" name="page_no" id="page_no" value="{{$page_no}}">
<div style="font-size: 1.3rem;"> {{$details_diocese_events->links()}}</div>

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
