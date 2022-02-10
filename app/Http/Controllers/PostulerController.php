<?php

namespace App\Http\Controllers; 
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Postuler;
use App\Models\Employee;
use DB;
use App\Models\Offreemploi;
use Illuminate\Http\Request;

class PostulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
      $postulers = Postuler::latest()->paginate(5);
     //    $postulers=Postuler::with('Offreemploi')->get();
        $data = DB::table("postulers")->count();
        $data1 = DB::table("offreemplois")->count();
       
        return view('postulers.index', compact('data','data1','postulers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_emp , $id_offre,$nom_offre,$nom_emp)
        {
            
            return view('postulers.create', ['id_emp' => $id_emp,'id_offre' => $id_offre ,'nom_offre'=>$nom_offre,'nom_emp'=>$nom_emp] );
        }
     
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'offreemploi_id' => 'required',
            'employee_id' => 'required',
            'date' => 'required' 
        ]);  
        
     $pos=   Postuler::create($request->all()); 
if(!$pos){
    return redirect()->route('employees.home');  
         
    }else{
    Alert::success('Success', 'Vous avez postuler a l offre');

        return redirect()->route('employees.dashboard');  


    }

}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function show(Postuler $postuler)
    {
        return view('postulers.show', compact('postuler'));
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function edit(Postuler $postuler)
    {
        return view('postulers.edit', compact('postuler'));
        
    }

    public function admin()
    {
        return view('postulers.index');
        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postuler $postuler)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'etat' => 'required' 
        ]);
        $postuler->update($request->all());
        return redirect()->route('postulers.index')
            ->with('success', 'postulers updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postuler $postuler)
    {
       
        $postuler->delete();

        return redirect()->route('postulers.index')
             ->with('success','bien supprimer');
    }
}
