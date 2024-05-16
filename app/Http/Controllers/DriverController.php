<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vehicle;
use App\Models\booking;
class DriverController extends Controller
{
    public function index()
    {
        if(session()->has('type')&& session()->get('type')=="Driver")
        {
            return view('driver.index');
        }
    }
    public function profile()
    {
        if(session()->has('type')&& session()->get('type')=="Driver")
        {
             return view('driver.profile');
        }
        return redirect()->back();
    }
    public function bookings($type)
    {
        if(session()->has('type')&& session()->get('type')=="Driver")
        {
            $booking=DB::table('users')
                        ->join('bookings','users.id','bookings.cusId')
                        ->join('vehicles','vehicles.id','bookings.productId')
                        ->select('bookings.*','users.fullname','users.city','users.picture','users.phone','vehicles.title','vehicles.picture as vehpic')
                        ->get();
            return view('driver.bookings',compact('type','booking'));
        }
        return redirect()->back();
    }
    public  function changebookstatus($id)
    {
        if(session()->has('type')&& session()->get('type')=="Driver"){
        $booking=booking::find($id);
        $booking->status="Confirmed";
        $booking->save();
        $vehicle = Vehicle::find($booking->productId);
        if ($vehicle) {
            $vehicle->status ='Booked';
            $vehicle->save();
        }
        return redirect()->back()->with('success','Congratulations! your booking has been confirmed successfully.');
    }
    return redirect()->back();
}
}
