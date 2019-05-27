<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\Department;
use App\Municipality;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        //dd($this->show(1));
        return view('admin.principal',[
            'countries'=> $countries,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $users = User::with('municipality.department.country')->get();
        //$users = User::with('municipality','department')->get();
        return response()->json([
            'users'=>$users,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()){
            if (!$this->validateEmailExistent($request->post('email'))){
                return response()->json([
                    'email_tomado'=>'email ya fue tomado',
                ]);
            }
            $user = new User();
            $user->name=$request->post('name');
            $user->email=$request->post('email');
            $user->municipality_id=$request->post('municipality_id');
            $user->password=bcrypt($request->post('password'));
            $user->save();

            return response()->json([
                'mensaje'=>'Usuario Registrado con éxito!',
                'user' => $request->post(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return response()->json([
            'infoUser'=>$user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->ajax()){
            $user = User::find($id);
            if(!$this->validateEmailExistent($request->post('email'),$id)){
                return response()->json([
                    'email_tomado'=>'email ya fue tomado',
                ]);
            }
            $user->name=$request->post('name');
            $user->email=$request->post('email');
            $user->municipality_id=$request->post('municipality_id');
            $user->password=bcrypt($request->post('password'));
            $user->save();
            return response()->json([
                'mensaje'=>$id,
                'email'=>$user->email,
                'id'=>$user->id
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json([
            'mensaje'=>'usuario Eliminado Con éxito!',
        ]);
    }

    private function validateEmailExistent($email,$id=null){
        if($id){
            $user = User::find($id);
            $userEmail=$user->email;
            $infoEmails = User::where('email', '<>', $userEmail)->get();
        }else{
            $infoEmails = User::all('email');
        }
        foreach ($infoEmails as $info){
            if ($email == $info['email']){
                return false;
            }
        }
        return true;
    }
}
