<?php

namespace App\Http\Controllers;
use App\Bookings;
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

    protected function bookTable(Request $request)
    {
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
}
