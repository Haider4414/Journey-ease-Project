<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\booking;
use Session;
use Stripe;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(Request $data)
    {
        $bill=$data->input('bill');
        $fullname=$data->input('fullname');
        $phone=$data->input('phone');
        $address=$data->input('address');
        return view('client.stripe',compact('bill','fullname','phone','address'));
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([
                "amount" => $request->input('bill')* 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "New Order Payment Received successfully."
        ]);

        Session::flash('success', 'Payment successful!');
        if (session()->has('id')) {
            $booking = booking::where('cusId', session()->get('id'))->first();
            $booking->status = "Paid";
            $booking->save();
            return redirect('/mybookings')->with('success', 'congratulations! Your order has been placed successfully');
        }

        return back();
    }
}
