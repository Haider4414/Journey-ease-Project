<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Room;
use App\Models\Vehicle;
use App\Models\User;
use App\Models\booking;
use App\Mail\Authentication;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
class MainController extends Controller
{
    //
    // public function index()
    // {
    //     $product=new product();
    //     $product->Name="XYZ";
    //     $product->type="Room";
    //     $product->category_id="123";
    //     $product->description="sdfsjlfsdf sdk fksldj fsldkf ";
    //     $product->quantity="123";
    //     $product->price="123";
    //     $product->picture="abc.png";
    //     $product->save();
    //     return view('index');
    // }

    public function index()
    {
        $rooms=Room::all();
        $vehicle=Vehicle::all();
        return view('client.index',compact('rooms','vehicle'));
    }




    public function login()
    {
        return view('client.login');
    }




    public function register()
    {
        return view('client.register');
    }





    public function About()
    {
        return view('client.about');
    }




    public function myprofile()
    {
        if(session()->has('type')&& session()->get('type')=="Customer")
        {
            $user=User::find(session()->get('id'));
            return view('client.myprofile',compact('user'));
        }
        return redirect()->back();
    }






    public function updatecustomerprofile(Request $data) {
        if(session()->has('type') && session()->get('type')=="Customer")
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




    public function mybookings()
{
    if (session()->has('type') && session()->get('type') == "Customer")
    {
        $userId=session()->get('id');
        $roomBookings = DB::table('bookings')
            ->join('users', 'users.id', 'bookings.cusId')
            ->join('rooms', 'rooms.id', 'bookings.productId')
            ->select('bookings.*', 'users.fullname', 'rooms.price')
            ->where('bookings.bookingtype', 'Room')
            ->where('bookings.cusId', $userId)
            ->get();

        $vehicleBookings = DB::table('bookings')
            ->join('users', 'users.id', 'bookings.cusId')
            ->join('vehicles', 'vehicles.id', 'bookings.productId')
            ->select('bookings.*', 'users.fullname', 'vehicles.price')
            ->where('bookings.bookingtype', 'Vehicle')
            ->where('bookings.cusId', $userId)
            ->get();

        return view('client.mybookings', compact('roomBookings', 'vehicleBookings'));
    }

    return redirect()->back();
}




    public function changebooking($status,$id)
     {
        if(session()->has('type')&& session()->get('type')=="Customer")
        {
            if($status=='CheckedIn')
            {
                $booking=booking::find($id);
                $booking->status=$status;
                $booking->save();
            }
            else{
                $booking=booking::find($id);
                $booking->status=$status;
                $booking->save();
                $room = Room::find($booking->productId);
            if($room){
                $room->status ='Available';
                $room->save();
            }
        }
            return redirect()->back();
        }
        return redirect()->back();

    }





    public function deletebooking($id,$status)
     {
        if(session()->has('type')&& session()->get('type')=="Customer")
        {
            $booking=booking::find($id);
            $booking->delete();
            $room = Room::find($booking->productId);
            if($room){
                $room->status =$status;
                $room->save();
            return redirect()->back();
        }
        return redirect()->back();
    }
}





    public function OurRoom()
    {
        $rooms=Room::all();
        return view('client.room',compact('rooms'));
    }




    public function Gallery()
    {
        $vehicle=Vehicle::all();
        return view('client.gallery',compact('vehicle'));
    }




    public function Blog()
    {
        return view('client.blog');
    }





    public function ContactUs()
    {
        return view('client.contact');
    }




    public function singleVehical($id)
    {
        if (session()->has('type') && session()->get('type') == "Customer"){
        $vehicle=Vehicle::find($id);
        return view('client.singleVehical',compact('vehicle'));
        }
        return redirect()->back();
    }





    public function singleRoom($id)

    {
        if (session()->has('type') && session()->get('type') == "Customer"){
        $room=Room::find($id);
        return view('client.singleRoom',compact('room'));
        }
        return redirect()->back();
    }





    public function registerUser(Request $data)
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

            return redirect('login')->with('success','Congratulations! Your Account is Ready.');
        }
        else
        {
            return redirect()->back()->with('error','Warning! Your Account is already Existed.');
        }





    }
    // public function booking(Request $data)
    // {
    //     if(session()->has('type')&& session()->get('type')=="Customer")
    //     {
    //         $booking=new booking();
    //         $booking->startdate=$data->input('startdate');
    //         $booking->enddate=$data->input('enddate');
    //         $booking->days=$data->input('days');
    //         $booking->bookingtype=$data->input('bookingtype');
    //         $booking->productId=$data->input('productId');
    //         $booking->cusId=session()->get('id');
    //         $booking->status="Pending";
    //         $booking->save();
    //         return redirect()->back()->with('success','Congratulations ! your booking request is sent successfully.');
    //     }
    //     return redirect()->back();
    //     }
    public function booking(Request $data)
{
    if (session()->has('type') && session()->get('type') == "Customer") {
        // $productId = $data->input('productId');
        // $startDate = $data->input('startdate');
        // $existingBooking = Booking::where('productId', $productId)
        //     ->where('startdate', $startDate)
        //     // ->where('startdate','>', $startDate)
        //     // ->where('enddate','<', $startDate)
        //     ->first();

        $productId = $data->input('productId');
        $startDate = $data->input('startdate');
        $endDate = $data->input('enddate');

        $currentDate = now(); // Get the current date and time using Carbon

        if ($startDate >= $currentDate) {
            $existingBooking = Booking::where('productId', $productId)
                ->where(function ($query) use ($startDate, $endDate) {
                    $query->where(function ($query) use ($startDate, $endDate) {
                        $query->where('startdate', '<=', $startDate)
                              ->where('enddate', '>=', $startDate);
                    })->orWhere(function ($query) use ($startDate, $endDate) {
                        $query->where('startdate', '<=', $endDate)
                              ->where('enddate', '>=', $endDate);
                    });
                })
                ->first();

                if (!$existingBooking) {
                                $startDate = Carbon::parse($data->input('startdate'));
                                $endDate = Carbon::parse($data->input('enddate'));
                                $days = $startDate->diffInDays($endDate);

                                $booking = new Booking();
                                $booking->startdate = $startDate;
                                $booking->enddate = $data->input('enddate');
                                $booking->days = $days;
                                $booking->bookingtype = $data->input('bookingtype');
                                $booking->productId = $productId;
                                $booking->cusId = session()->get('id');
                                $booking->status = "Pending";
                                $booking->save();

                                return redirect()->back()->with('success', 'Congratulations! Your booking request is sent successfully.');
                            }
                            else
                            {
                                return redirect()->back()->with('error', 'this room is already booked.');
                            }
        } else {
            return redirect()->back()->with('error', 'the start date must be equal or greaer than the current date.Try Again.');
        }
    }

    return redirect()->back();
}
    public function logout()
    {
        session()->forget('id');
        session()->forget('type');
        return redirect('login');
    }





    public function loginUser(Request $data)
    {
        $user=User::where('email',$data->input('email'))->where('password',$data->input('password'))->where('status',"Active")->first();
        if($user)
        {
            // $details=[
            //         'title'=>"Login Notification",
            //         'message'=>"Dear ".$user->fullname.', Your account is logged in successfully.',
            //     ];
            //     Mail::to($data->input('email'))->send(new Authentication($details));
            session()->put('id',$user->id);
            session()->put('type',$user->type);
            if($user->type=='Customer')
            {
                return redirect('/');
            }
            else if($user->type=='Seller')
            {
                return redirect('/seller');
            }
            else if($user->type=='Admin')
            {
                return redirect('/dashboard');
            }
            else if($user->type=='Driver')
            {
                return redirect('/driver');
            }
        }
        else
        {
            return redirect()->back()->with('error','Sorry! Your Email/Password is incorrect.');
        }

    }





    public function search(Request $data)
    {
        // $rooms=Room::where('type','like','%'.$data->input('type').'%')->get();
        $vehicle=Vehicle::where('type','like','%'.$data->input('type').'%')->get();
       return view('client.gallery',compact('vehicle'));
    }
    public function sendEmail(Request $data)
    {
             $admin=User::where('type','Admin')->first();
                $details=[
                'title'=>$data->input('email'),
                'message'=>$data->input('message'),
                ];
                Mail::to($admin->email)->send(new Authentication($details));
               return  redirect()->back();
    }


}
