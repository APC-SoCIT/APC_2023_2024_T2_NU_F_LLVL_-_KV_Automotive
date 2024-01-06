<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


 
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
           // Check if the user is an admin
           if (Auth::user()->isAdmin()) {
            // Redirect the admin to the '/vehicle' route
            return Redirect::route('vehicle.index');
        }

        // If not an admin, continue with your existing logic for admin home
        return view('adminHome');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function staffHome()
    {
                   // Check if the user is an admin
                   if (Auth::user()->isStaff()) {
                    // Redirect the admin to the '/vehicle' route
                    return Redirect::route('vehicle.index');
                }
        return view('staffHome');
    }
}