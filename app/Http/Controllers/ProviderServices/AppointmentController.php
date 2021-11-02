<?php

namespace App\Http\Controllers\ProviderServices;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AppointmentStatus;
use App\Models\Appointments;
use Illuminate\Support\Facades\Session;

class AppointmentController extends Controller
{
    //
 public function index(){
     $items=Appointments::all();
     return view('provider.appointment.index')->withItems( $items);

 }
 public function create(){
     $status=AppointmentStatus::all();
     $customers=Customer::all();

   return view ('provider.appointment.create',compact('status','customers'));
}
public function store(Request $request)
{


   /* $Appointments = $request->newLine();
    $Appointments=new Appointments();

    for($i = 0; $i < count($Appointments); $i++) {
        $Appointments['notes'] = $request->notes;
        $Appointments['from'] = $request->from;
        $Appointments['to'] = $request->to;
        $Appointments['status_id'] = $request->status_id;

      }
    */

    //$images = $request->all();
    /*$posts = $request->all();
    $data = [];
    if(is_array($posts)){
    foreach($posts as $id) {
      $data[] = [
        'notes' => $request->notes,
        'from' => $request->from,
        'to' => $request->to,
      ];
    }
}*/
$data=$request->all();

    Appointments::create($data);


    Session::flash("msg","تمت عملية الاضافة بنجاح");
    return redirect(route("appointment.create"));
}

}

