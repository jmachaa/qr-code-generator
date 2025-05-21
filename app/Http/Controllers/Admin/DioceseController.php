<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Models\Diocese;
use Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Carbon\Carbon;

class DioceseController extends Controller
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

        $details_diocese_events=Diocese::query();
        if($search_keyword!='')
        {
          $details_diocese_events->where('title', 'LIKE', '%' . $search_keyword . '%');
        }
        if($search_status!='')
        {
          $details_diocese_events->where('status', '=', $search_status);
        }

      if($p_count!='')
      {
        $details_diocese_events=$details_diocese_events->select("id","title","name","status","created_at")->where('status','!=',2)->orderBy('id','desc')->paginate($paginate_value);
        return View('admin.diocese.manage_diocese_data_load',['details_diocese'=>$details_diocese_events],compact('page_no'));

      }
      else {
        $details_diocese_events=$details_diocese_events->select("id","title","name","status","created_at")->where('status','!=',2)->orderBy('id','desc')->paginate($paginate_value);
        return View('admin.diocese.manage_diocese',['details_diocese_events'=>$details_diocese_events],compact('page_no'));
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

    $details_diocese_events=Diocese::query();
    if($search_keyword!='')
    {
      $details_diocese_events->where('title', 'LIKE', '%' . $search_keyword . '%');
    }
    if($search_status!='')
    {
      $details_diocese_events->where('status', '=', $search_status);
    }

    $details_diocese_events=$details_diocese_events->select("id","title","name","status","created_at")->where('status','!=',2)->orderBy('id','desc')->paginate($paginate_value);
        return View('admin.diocese.manage_diocese_data_load',['details_diocese_events'=>$details_diocese_events],compact('page_no'));

  }
}

  public function create() {

   return view('admin.diocese.add_diocese_content');

  }

  public function store(Request $request) {

     $validator=Validator::make($request->all(),['title'=>'required|max:500','name'=>'required|max:500']);
     $insert=new Diocese;


     $insert->title=$request->title;
     $insert->name=$request->name;
     $insert->status=1;
     $insert->save();
     
     return redirect()->action('App\Http\Controllers\Admin\DioceseController@index')->with('message', 'You have successfully added the details!');
  }

  public function edit($id) {

    $donate_events_details=Diocese::find($id);
    return view('admin.diocese.edit_diocese_content',['donate_events_details'=>$donate_events_details]);
  }

  public function update(Request $request,$id) {

    $validator=Validator::make($request->all(),['title'=>'required|max:500','name'=>'required|max:500']);
    if($validator->fails())
    {
      return redirect('admin/diocese/'.$id.'/edit')->withInput()->withErrors($validator);
    }

    $update_donate_events=Diocese::find($id);
    $update_donate_events->title=$request->title;

    $update_donate_events->name=$request->name;
    $update_donate_events->save();

    return redirect()->action('App\Http\Controllers\Admin\DioceseController@index')->with('message', 'You have successfully submitted the details!!!!');
  }



  public function action_status_diocese(Request $request)
  {
    $id=$request->id;
    $update_status=Diocese::find($id);
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

  public function donate_tbl_sortable(Request $request)
  {
    $ids=$request->ids;
    $strArray = explode(",", $ids);
    $strlength=count($strArray);
    $count=1;
    for($i=0;$i<$strlength;$i++)
    {
      $user=DonateContent::where('id','=',$strArray[$i])->update(['donate_order_no'=>$count]);
      $count++;
    }
    return $ids;
  }

  public function destroy(Request $request)
  {
    $id=$request->id;
    $delete=Diocese::find($id);
    $delete->status='2';
    $delete->save();

    $filename1 = storage_path('app/public/datafolder/donate_content/icon/'.$id);

    if(\File::exists($filename1)) {
    \File::deleteDirectory($filename1);
    }
    return 'success';
  }



  public function delete_file(Request $request)
  {
    $id=$request->id;
    $lang=$request->lang;

    $update_donate_events=DonateContent::query();
    $update_donate_events->where('id','=',$id)->update(['donate_file_name'=>'','donate_file_mime_type'=>'']);

    $filename1 = storage_path('app/public/datafolder/donate_content/file/'.$id);

    if(\File::exists($filename1)) {
    \File::deleteDirectory($filename1);
    }
  }
}
