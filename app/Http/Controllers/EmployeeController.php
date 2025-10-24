<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employes = Employee::all();
        return view("employees",compact("employes"));
    }

    public function store(Request $request){
        $employe = Employee::create(
            [
                "nom"=>$request->nom,
                "prenom"=>$request->prenom,
                "email"=>$request->email,
                "poste"=>$request->poste,
               
            ]
        );
         return redirect()->route('index');
    }

     public function update(Request $request  ,$id){
        $employe = Employee::find($id);
       if ($employe) {
        $employe->nom= $request->nom;
        $employe->prenom= $request->prenom;
        $employe->email= $request->email;
    
            
        return redirect()->route('index');
        }
}
   public function edit($id) {
        $employe = Employee::findOrFail($id);
        return view("edit", compact("employe"));
    }

 public function destroy($id){
        $employe = Employee::find($id);
       if ($employe) {
        $employe->delete();
            return "delete with sucssess";
        }
        return "introuvable";
      }
    


}