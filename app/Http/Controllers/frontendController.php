<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Location;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class frontendController extends Controller
{
    public function index() {
        $allCars = Car::all();
        return view('frontend.index', ['allCars' => $allCars]);
    }
    public function location() {
        return view('frontend.location');
    }
    public function detail($id) {
        $theCar = Car::findOrFail($id);
        return view('frontend.detail', ['car'=> $theCar]);
    }

    public function rendre($id, Request $request){
        //dd(Location::where('id', $id)->first()->Car()->id);
        Location::where('id', $id)->update([
            "restorer"=>1]);
        Car::where('id', Location::where('id', $id)->first()->Car()->id)->update(['quantiteDispo' => (Car::where('id', Location::where('id', $id)->first()->Car()->id)->first()->quantiteDispo + 1)]);

        return redirect()->back();
    }

    public function detailPost($id, Request $request) {
        $request->validate([
            "debut"=>['required'],
            "fin"=>['required'],
        ]);
        $idCar = Car::findOrFail($id);
        $debut = strtotime($request->debut);
        $fin = strtotime($request->fin);

        //compter nombre de jours
        $d = new DateTime($request->debut);
        $f = new DateTime($request->fin);
        $diff = $f->diff($d);
        $nbreJours =  $diff->days;
        //dd($nbreJours);
        if($fin < $debut)
        {
            return redirect()->back()->with('statut', 'la date de rendu n\'est pas valide.');
        }else
        {
            Location::create([
                "dateLocation"=>$request->debut,
                "dateFinLocation"=>$request->fin,
                "restorer" => 0,
                "car_id"=> $idCar->id,
                "user_id"=> Auth::id(),
               ]);
               //Location->car()->quantiteDispo;
               Car::where('id', $idCar->id)->update(['quantiteDispo' => (Car::where('id', $idCar->id)->first()->quantiteDispo - 1)]);
         return redirect()->back()->with(['statut'=>'Votre venez de faire une location de', 'nbreJours'=>$nbreJours]);
        }

    }

    public function about() {
        return view('frontend.about');
    }

    public function offers() {
        $allCars = Car::all();
        return view('frontend.offers', ['allCars' => $allCars]);
    }


    function team() {
        return view('frontend.team');
    }
    function contact() {
        return view('frontend.contact');
    }

    function testimonial() {
        return view('frontend.testimonial');
    }

    function login() {
        return view('frontend.login');
    }

    function register() {
        return view('frontend.register');
    }


    public function listLocation()
    {
        $total = Location::count();
        $allLocations = Location::where('user_id', auth()->user()->id)->get();
        //dd();
        $i=1;
        return view('frontend.listLocation', ['locations'=>$allLocations, 'i'=>$i]);
    }


}
