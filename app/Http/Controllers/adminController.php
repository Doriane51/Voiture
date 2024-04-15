<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function login_admin_post(Request $request){
        $data = $request->validate([
            "email"=>['required'],
            "password"=>['required'],
        ]);
        if(!Auth::attempt($data)){
            return redirect()->back()->with('message', 'mauvais identifiants');
        }else{
            $user = Auth::user();
            if($user->estAdmin){
                session()->regenerate();
                return redirect()->route('indexAdmin');
            }else{
                return redirect()->back()->with('message', 'vous n\'êtes pas admin');
            }
        }
    }
    public function login_admin_view(){
        return view('admin.login');
    }
    function indexAdmin() {
        $allCars = Car::count();
        $loc = Location::count();
        return view('admin.indexAdmin', ['cars'=>$allCars, 'loc'=>$loc]);
    }

    function ajout() {
        return view('admin.ajout');
    }

    function ajoutPost(Request $request) {
        $request->validate(
            [
                "nom"=>['required'],
                "marque"=>['required'],
                "description"=>['required'],
                "prix"=>['required'],
                "quantite"=>['required']
            ]);
    $path = $request->file('img')->store('images');
            Car::create([
                "nom"=>$request->nom,
                "marque"=>$request->marque,
                "photo"=>$path,
                "description"=>$request->description,
                "prixLocation"=>$request->prix,
                "quantiteDispo"=>$request->quantite
            ]);
            return redirect()->back()->with('statut', 'Voiture ajoutée!');
           // dd($request->all());
    }

    function read() {
        $lists = Car::all();
        return view('admin.read', ['lists'=>$lists]);
    }


    function update($id) {
        $car = Car::findOrFail($id);
        return view('admin.update', ['car'=>$car]);
    }

    function updatePost($id, Request $request) {
        $request->validate(
            [
                "nom"=>['required'],
                "marque"=>['required'],
                "description"=>['required'],
                "prix"=>['required'],
                "quantite"=>['required']
            ]);
            $path = $request->file('img')->store('images');

            Car::where('id', $id)->update([
                "nom"=>$request->nom,
                "marque"=>$request->marque,
                "photo"=>$path,
                "description"=>$request->description,
                "prixLocation"=>$request->prix,
                "quantiteDispo"=>$request->quantite
            ]);
            return redirect()->back()->with('statut', 'Modification effectué!');
    }

    function delete($id) {
        Car::where('id', $id)->delete();
        return redirect()->back()->with('statut', 'Suppression effectué!');
    }

    function enLocation() {
        $lists = Car::join('locations', 'car_id', '=', 'cars.id')->where('locations.restorer', '=', 0)->get();
        //dd($lists);
        return view('admin.enLocation', ['lists'=>$lists]);
    }
    function voituresDispo() {
        $lists = Car::join('locations', 'car_id', '=', 'cars.id')->where('locations.restorer', '=', 1)->get();
        //dd($lists);
        return view('admin.voituresDispo', ['lists'=>$lists]);
    }

    function ajoutAdmin() {
        return view('admin.ajoutAdmin');
    }

    public function ajoutAdminPost(Request $request)
    {
        $request->validate(
            [
                'nom' => ['required'],
                'prenom' => ['required'],
                'adresse' => ['required'],
                'mail' => ['required', 'email', 'unique:users,email'],
                'password' => ['required']
            ]
        );
        User::create([
            'nom' => $request->nom,
                'prenom' => $request->prenom,
                'adresse' => $request->adresse,
                'estAdmin' => 1,
                'email' => $request->mail,
                'password' => Hash::make($request->password),
        ]);
        return redirect()->route('ajoutAdmin');
    }

}


