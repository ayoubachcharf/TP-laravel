<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use App\Models\Offreemploi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Stroage;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $employees = Employee::latest()->paginate(5);

        return view('employees.index', compact('employees'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
   
    }
    function dashboard(){
       $offreemploi= Offreemploi::all();
       
        $data =['LoggedUserInfo'=>Employee::where('id','=', session('LoggedUser'))->first()];
        return view('employees.dashboard', compact('offreemploi'),$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }
    public function home()
    {
        return view('employees.home');
    }

    public function login()
    {
        return view('employees.login');
    }
    public function register()
    {
        return view('employees.register');
    }
    public function logout()
    {
        if(session()->has("LoggedUser")){
            session()->pull("LoggedUser");
            
        return redirect('/');
        }else{
            return redirect('/');
        }

    }


    function admin(Request $request){
        
        //Validate requests
        $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:4|max:12'
        ]);

        $userInfo = User::where('email','=', $request->email)->first(); 
        
        if(!$userInfo ){
             
            return back()->with('fail','We do not recognize your email address Or your password');
        }else{
            //check password
       
            if( $userInfo = User::where('password','=', $request->password)->first()  ){
           
                return redirect()->route('postulers.index');  
            }
        
        else{ 
            return back()->with('fail','Incorrect password');
            } 
        }
    }




    function check(Request $request){
        //Validate requests
        $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:4|max:12'
        ]);

        $userInfo = Employee::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
          $request->session()->put('LoggedUser', $userInfo->id);
               
                return redirect()->route('employees.dashboard');
            }else{
                return back()->with('fail','Incorrect password');
            }
        }
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
            'nom' => 'required',
            'tel' => 'required',
            'email' => 'required|email|unique:employees',
            'password' => 'required',
            'cv' => 'required'
        ]);
        
			
        $employee = new Employee;
        $cv=$request->cv;
		 $cvname=time().'.'.$cv->getClientOriginalExtension();
        $request->cv->move('assets',$cvname);
        $employee->cv=$cvname;
        $employee->nom = $request->nom;
        $employee->tel = $request->tel;
        $employee->email = $request->email;
        $employee->password = Hash::make($request->password);
        //$employee->cv = $request->cv;
        $save = $employee->save();

        if($save){
           return back()->with('success','New Employee has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
        
    }
    
    
    public function download(Request $request,$cv)
    {
   
        return response()->download(public_path('assets/'.$cv));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'password' => 'required',
            'cv' => 'required',
        ]);
        $employee->update($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete(); 
        return redirect()->route('employees.index')
            ->with('success', 'employe deleted successfully');
    }
}
