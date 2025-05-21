<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Models\Parish;
use App\Models\Diocese;
use Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Carbon\Carbon;

class ParishController extends Controller
{
    public function index(Request $request) {
      $p_count=$request->p_count;
      $page_no=$request->page;

      $search_keyword=$request->search_keyword;
      $search_status=$request->search_status;

      if($p_count!='')
        $paginate_value =$request->p_count;
      else
        $paginate_value=20;

        $details_parish=Parish::query();
        if($search_keyword!='')
        {
          $details_parish->where('parish_name', 'LIKE', '%' . $search_keyword . '%');
        }
        if($search_status!='')
        {
          $details_parish->where('status', '=', $search_status);
        }

      if($p_count!='')
      {
        $details_parish=$details_parish->select("id","parish_name","diocese_id","status","created_at")->where('status','!=',2)->orderBy('id','desc')->paginate($paginate_value);
        return View('admin.parish.manage_parish_data_load',['details_parish'=>$details_parish],compact('page_no'));

      }
      else {
        $details_parish=$details_parish->select("id","parish_name","diocese_id","status","created_at")->where('status','!=',2)->orderBy('id','desc')->paginate($paginate_value);
        return View('admin.parish.manage_parish',['details_parish'=>$details_parish],compact('page_no'));
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

    $details_parish=Parish::query();
    if($search_keyword!='')
    {
      $details_parish->where('parish_name', 'LIKE', '%' . $search_keyword . '%');
    }
    if($search_status!='')
    {
      $details_parish->where('status', '=', $search_status);
    }

    $details_parish=$details_parish->select("id","parish_name","diocese_id","status","created_at")->where('status','!=',2)->orderBy('donate_order_no','desc')->paginate($paginate_value);
    return View('admin.parish.manage_parish_data_load',['details_parish'=>$details_parish],compact('page_no'));

  }
}

  public function create() {

   return view('admin.parish.add_parish');

  }

  public function store(Request $request) {


     $request->validate(['parish_name'=>'required|max:500','diocese_id'=>'required']);

     $max=Parish::max('diocese_order_no');
     $diocese_order=$max+1;

     $insert=new Parish;


     $insert->parish_name=$request->parish_name;
     $insert->diocese_id=(int)$request->diocese_id;
     $insert->diocese_order_no=$diocese_order;
     $insert->status=1;
     $insert->save();

     return redirect()->action('App\Http\Controllers\Admin\ParishController@index')->with('message', 'You have successfully added the details!');
  }

  public function edit($id) {

    $parish_details=Parish::find($id);

    return view('admin.parish.edit_parish',['parish_details'=>$parish_details]);
  }

  public function update(Request $request,$id) {

    $validator=Validator::make($request->all(),['parish_name'=>'required|max:500','diocese_id'=>'required']);
    if($validator->fails())
    {
      return redirect('admin/parish/'.$id.'/edit')->withInput()->withErrors($validator);
    }

    $update_parish_details=Parish::find($id);
    $update_parish_details->parish_name=$request->parish_name;

    $update_parish_details->diocese_id=(int)$request->diocese_id;


    $update_parish_details->save();

    return redirect()->action('App\Http\Controllers\Admin\ParishController@index')->with('message', 'You have successfully submitted the details!!!!');
  }



  public function action_status_parish(Request $request)
  {
    $id=$request->id;
    $update_status=Parish::find($id);
    if($update_status!=NULL)
    {
      $current_status=$update_status->status;
      if($current_status==1)
      {
        $update_status->status=0;
        $update_status->save();
      }
      elseif($current_status==0)
      {
        $update_status->status=1;
        $update_status->save();
      }
    }
  }

  public function parish_tbl_sortable(Request $request)
  {
    $ids=$request->ids;
    $strArray = explode(",", $ids);
    $strlength=count($strArray);
    $count=1;
    for($i=0;$i<$strlength;$i++)
    {
      $user=Parish::where('id','=',$strArray[$i])->update(['parish_order_no'=>$count]);
      $count++;
    }
    return $ids;
  }

  public function destroy(Request $request)
  {
    $id=$request->id;
    $delete=Parish::find($id);
    $delete->status='2';
    $delete->save();

    return 'success';
  }

  public function fetch_diocese(Request $request){
    $diocese_list = Diocese::where('status', 1)->get();
    return response()->json($diocese_list);

  }



}
