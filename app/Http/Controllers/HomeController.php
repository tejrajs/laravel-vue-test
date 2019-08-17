<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    /**
     * Show the application contactus.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contactus()
    {
        return view('contactus');
    }
    
    /**
     * Fetch People from Api.
     */
    public function peoples()
    {
        $client = new Client();
        
        $response = $client->request('GET', 'https://swapi.co/api/people/');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        
        return $body;
    }
    /**
      * Hire employee send email.
    */
    public function hire(Request $request)
    {
        Mail::to($request)->send(new SendMail($request));
        
        if (Mail::failures()) {
            return response()->json(['success' => '0'], 401);
        }else{
            return response()->json(['success' => '1'], 200);
        }
        //return $request;
    }
}
