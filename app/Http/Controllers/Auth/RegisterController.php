<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();

        return view('users.index',compact('users'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create()
    {
        $permissions = Permission::get();
        $roles = Role::get();

        return view('auth.register', compact('permissions','roles'));   
        
    }

    public function store(Request $request)
    {
    $data = $request->validate([
        'name' => 'required|max:191',
        'lastname' => 'required',
        'position' => 'required',
        'email' => 'required|unique:users',
        'password' => 'required',
        ]);
        
        


        $user = User::create([
            'name' => $request['name'],
            'lastname' => $request['lastname'],
            'position' => $request['position'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $user->permissions()->sync($request->get('permissions'));
        $user->roles()->sync($request->get('roles'));

        return redirect()->route('users.index')->with('info','Usuario creado con exito');
    }

    public function edit(User $user)
    {
        $permissions = Permission::get();
        $roles = Role::get();
        return view('users.edit',compact('user','permissions','roles'));
    }

    public function update(Request $request, User $user)
    {

        $user->update([
            'name' => $request['name'],
            'lastname' => $request['lastname'],
            'position' => $request['position'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $user->permissions()->sync($request->get('permissions'));
        $user->roles()->sync($request->get('roles'));

        return redirect()->route('users.index')->with('info','Rol actualizado con exito');
    }

    public function show(User $user){

        return view('users.show', compact('user'));
    }

    public function destroy($id){

        $user = User::find($id)->delete();

        return back()->with('info','Eliminado correctamente');
    }

}
