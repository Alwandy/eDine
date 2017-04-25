<?php

namespace App\Http\Controllers;
use App\Bookings;
use App\Reviews;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
    * Takes the booking requests and submits it to database
    * @return Bookings::create 
    */
    protected function bookTable(Request $request)
    {
        try{
        if ($request->isMethod('post')) {
            $date = $request->input('date').' '.$request->input('time');
            Bookings::create([
                'name' =>$request->input('name'),
                'email' =>$request->input('email'),
                'phone' =>$request->input('phone'),
                'amount' =>$request->input('amount'),
                'rid' => $request->input('rid'),
                'time' => $date,
            ]); 
           return redirect('/restaurant?id='.$request->input('rid').'')->with('status', 'Booking sent!');
        }
        }
        catch (Exception $e) {
            return redirect('/restaurant?id='.$request->input('rid').'')->with('status', $e->getMessage());

        }
    }

    public function submitReview(Request $request) {
        try{
        if ($request->isMethod('post')) {
            Reviews::create([
                'name' =>$request->input('name'),
                'comment' =>$request->input('comment'),
                'rating' =>$request->input('rating'),
                'rid' => $request->input('rid'),
            ]); 
           return redirect('/restaurant?id='.$request->input('rid').'')->with('status', 'Review submitted!');
        }
        }
        catch (Exception $e) {
            return redirect('/restaurant?id='.$request->input('rid').'')->with('status', $e->getMessage());

        }
    }
}
