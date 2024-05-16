<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Vehicle;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index()
    {
        if(session()->has('type') && session()->get('type')=="Admin")
        {
            $totalusers=User::where('type','Customer')->count();
            $totaldrivers=User::where('type','Driver')->count();
            $totalhotels=Hotel::all()->count();
            $hotel=DB::table('hotels')
            ->join('users','users.id','hotels.sellerId')
            ->select('hotels.*','users.fullname')
            ->get();
            $user=User::all();
            return view('admin.index',compact('totalusers','totaldrivers','totalhotels','hotel','user'));
        }

    }
    public function users($type) {
        if(session()->has('type') && session()->get('type')=="Admin")
        {
            $users=User::where('type',$type)->get();
        return view('admin.users',compact("type",'users'));
        }
        return redirect()->back();
    }
    public function changeUserStatus($status,$id) {
        if(session()->has('type') && session()->get('type')=="Admin")
        {
            $user=User::find($id);
            $user->status=$status;
            $user->save();
        }
        return redirect()->back();
    }
    public function changehotelStatus($status,$id) {
        if(session()->has('type') && session()->get('type')=="Admin")
        {
            $hotels=Hotel::find($id);
            $hotels->status=$status;
            $hotels->save();
        }
        return redirect()->back();
    }
    public function hotels() {
        if(session()->has('type') && session()->get('type')=="Admin")
        {

            $hotels=DB::table('hotels')
            ->join('users','users.id','hotels.sellerId')
            ->select('hotels.*','users.fullname')
            ->get();
        return view('admin.hotels',compact('hotels'));
        }
        return redirect()->back();
    }
    public function singleHotel($id)
    {
        if(session()->has('type') && session()->get('type')=="Admin")
        {
           $hotels=Hotel::find($id);
           $rooms=Room::where('hotelId',$id)->get();
        return view('admin.singleHotel',compact('hotels','rooms'));
        }
        return redirect()->back();
    }
    public function vehicals() {
        if(session()->has('type') && session()->get('type')=="Admin")
        {
            $vehicle=Vehicle::all();
        return view('admin.allVehicals',compact('vehicle'));
        }
        return redirect()->back();
    }
    public function profile() {
        if(session()->has('type') && session()->get('type')=="Admin")
        {
            $user=User::find(session()->get('id'));
        return view('admin.profile',compact('user'));
        }
        return redirect()->back();
    }
    public function updateprofile(Request $data) {
        if(session()->has('type') && session()->get('type')=="Admin")
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
}
