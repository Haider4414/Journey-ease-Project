<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Vehicle;
use App\Models\booking;
use Illuminate\Support\Facades\DB;

class SellerController extends Controller
{

    public function index()
    {
        if(session()->has('type')&& session()->get('type')=="Seller")
        {
            return view('seller.index');
        }

    }


    public function users($type) {
        if(session()->has('type') && session()->get('type')=="Seller")
        {
            $users=User::where('type',$type)->get();
        return view('admin.users',compact("type",'users'));
        }
        return redirect()->back();
    }


    public function changeStatus($status,$id) {
        if(session()->has('type') && session()->get('type')=="Seller")
        {
            $user=User::find($id);
            $user->status=$status;
            $user->save();
        }
        return redirect()->back();
    }



    public function addhotel(Request $data)
    {

            $hotel=new Hotel();
            $hotel->title=$data->input('title');
            $hotel->area=$data->input('area');
            $hotel->description=$data->input('description');
            $hotel->city=$data->input('city');
            $hotel->areaCode=$data->input('areacode');
            $hotel->status="Available";
            $hotel->sellerId=session()->get('id');
            $hotel->picture=$data->file('file')->getClientOriginalName();
            $data->file('file')->move('uploads/hotels/',$hotel->picture);

            $hotel->save();

            return redirect()->back()->with('success','Congratulations! your hotel list is addded successfully.');

    }




    public function updatehotel(Request $data)
    {
            $hotel=Hotel::find($data->input('id'));
            $hotel->title=$data->input('title');
            $hotel->area=$data->input('area');
            $hotel->description=$data->input('description');
            $hotel->city=$data->input('city');
            $hotel->areaCode=$data->input('areacode');
if($data->file('file')!=null)
{
    $hotel->picture=$data->file('file')->getClientOriginalName();
    $data->file('file')->move('uploads/hotels/',$hotel->picture);

}
            $hotel->save();

            return redirect()->back()->with('success','Congratulations! your hotel list is updated successfully.');

    }





    public function addnewVehicle(Request $data)
    {
            $vehicle=new Vehicle ();
            $vehicle->title=$data->input('title');
            $vehicle->type=$data->input('type');
            $vehicle->price=$data->input('price');
            $vehicle->driverId=$data->input('driverId');
            $vehicle->hotelId=$data->input('hotelId');
            $vehicle->status="Available";
            $vehicle->picture=$data->file('file')->getClientOriginalName();
            $data->file('file')->move('uploads/vehicals/',$vehicle->picture);
            $vehicle->save();
            return redirect()->back()->with('success','Congratulations! your vehicle list is addded successfully.');

    }




    public function updateVehicle(Request $data)
    {

            $vehicle=Vehicle::find($data->input('id'));
            $vehicle->title=$data->input('title');
            $vehicle->type=$data->input('type');
            $vehicle->price=$data->input('price');

if($data->file('file')!=null)
{
    $vehicle->picture=$data->file('file')->getClientOriginalName();
    $data->file('file')->move('uploads/vehicals/',$vehicle->picture);

}
            $vehicle->save();

            return redirect()->back()->with('success','Congratulations! your Vehicle list is updated successfully.');

    }





    public  function deletevehicle($id)
    {
        $vehicle=Vehicle ::find($id);
        $vehicle->delete();
        return redirect()->back()->with('success','Congratulations! your Vehicle list is deleted successfully.');
    }






    public function addrooms(Request $data)
    {

            $room=new Room ();
            $room->title=$data->input('title');
            $room->type=$data->input('type');
            $room->price=$data->input('price');
            $room->hotelId=$data->input('hotelId');
            $room->extraservices=$data->input('extraservices');
            $room->status="Available";
            $room->picture=$data->file('file')->getClientOriginalName();
            $data->file('file')->move('uploads/rooms/',$room->picture);
            $room->save();
            return redirect()->back()->with('success','Congratulations!New hotel room  is added successfully.');

    }








    public function updaterooms(Request $data)
    {

            $room=Room::find($data->input('id'));
            $room->title=$data->input('title');
            $room->type=$data->input('type');
            $room->price=$data->input('price');
            if($data->file('file')!=null){
                $room->picture=$data->file('file')->getClientOriginalName();
                $data->file('file')->move('uploads/rooms/',$room->picture);
            }
            $room->save();
            return redirect()->back()->with('success','Congratulations!room  details is updated successfully.');

    }





    public  function deleteroom($id)
    {
        $room=Room::find($id);
        $room->delete();
        return redirect()->back()->with('success','Congratulations! your room list is deleted successfully.');
    }






    public  function changebookingstatus($id)
    {
        $booking=booking::find($id);
        $booking->status="Confirmed";
        $booking->save();
        $room = Room::find($booking->productId);
        if($room){
            $room->status ='Booked';
            $room->save();
        }
        return redirect()->back()->with('success','Congratulations! your booking has been confirmed successfully.');
    }




    public function singleHotel()
    {
        if(session()->has('type')&& session()->get('type')=="Seller")
        {
        $hotel = Hotel::where('sellerId', session()->get('id'))->first();
        $rooms = Room::where('hotelId', $hotel->id)->get();
        $user = User::where('type','Driver')->get();
        return view('seller.singleHotel', compact('hotel','rooms','user'));
        }

        return redirect()->back();
    }




    public function bookings($type)
    {

        if(session()->has('type')&& session()->get('type')=="Seller")
        {
    $booking=DB::table('users')
    ->join('bookings','users.id','bookings.cusId')
    ->join('rooms','rooms.id','bookings.productId')
    ->select('bookings.*','users.fullname','users.city','users.picture','users.phone','rooms.title','rooms.picture as roomp')
    ->get();
return view('seller.bookings',compact('type','booking'));
        }
        return redirect()->back();
    }





    public function profile()
    {
        if(session()->has('type')&& session()->get('type')=="Seller")
        {
            $user=User::find(session()->get('id'));
            return view('seller.profile',compact('user'));
        }
        return redirect()->back();
    }



    
    public function vehicals()
    {
        if(session()->has('type')&& session()->get('type')=="Seller")
        {
            $hotel = Hotel::where('sellerId', session()->get('id'))->first();
            $vehicle = Vehicle::where('hotelId', $hotel->id)->get();
            return view('seller.allVehicals',compact('vehicle'));
        }
        return redirect()->back();
    }
    public function drivers()
    {
        if(session()->has('type')&& session ()->get('type')=="Seller")
        {
            $user=User::where('type','Driver')->get();
            return view('seller.drivers',compact('user'));
        }
        return redirect()->back();
    }
    public function updatesellerprofile(Request $data) {
        if(session()->has('type') && session()->get('type')=="Seller")
        {
            $user=User::find(session()->get('id'));
            $user->fullname=$data->input('fullname');
            $user->email=$data->input('email');
            $user->password=$data->input('password');
            if($data->file('file')!=null)
            {
            $user->picture=$data->file('file')->getClientOriginalName();
            $data->file('file')->move('uploads/profiles/',$user->picture);
            }
            $user->save();
            return redirect()->back()->with('success','congratulations! Your profile has been updated successfully.');

        }
        return redirect()->back();
    }
    public function registerdriver(Request $data)
    {
        $user=User::where('email',$data->input('email'))->first();
        if(!$user)
        {
            $user=new User();
            $user->fullname=$data->input('fullname');
            $user->email=$data->input('email');
            $user->password=$data->input('password');
            $user->city=$data->input('city');
            $user->area=$data->input('area');
            $user->areacode=$data->input('areacode');
            $user->ntn=$data->input('ntn');
            $user->type=$data->input('type');
            $user->phone=$data->input('phone');
            $user->cnic=$data->input('cnic');
            $user->picture=$data->file('file')->getClientOriginalName();
            $data->file('file')->move('uploads/profiles/',$user->picture);
            if($user->type=='Customer')
            {
                $user->status="Active";
            }
            else
            {
                $user->status="Pending";
            }
            $user->save();

            return redirect()->back()->with('success','congratulations! New driver is added successfully.');
        }
        else
        {
            return redirect()->back()->with('error','Warning! Your Account is already Existed.');
        }



    }
}
