<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showAllUsers()
     {
         $users = User::all();
         return view('users', compact('users'));
         //return response()->json(User::all());
        //dd("test");
         //dd($users);
    }

    public function showUsersAll()
    {
        return response()->json(User::all());
        //dd("test");
        //dd($users);
    }
//
//    public function showOneUsers($id)
//    {
//        $users = User::all();
//        //return view('users');
//        return response()->json(User::find($id));
//        //dd("test");
//    }
    //


    public function create()
    {
        return view('create');

    }
        public
        function store(Request $request)
        {
            $request->validate((array)$request, [
                'fist_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);

            $form_data = array(
                'fist_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => $request->password,
            );

            User::create($form_data);
            return redirect('users')->with('success', 'new');
        }




        public function update($id, Request $request)
        {
            //dd($request);
            $this->validate($request, [
                'fist_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'password' => 'require',
            ]);

            if ($this->validate()) {
                $this->addFlash(
                    'notice',
                    'Your changes were saved, now you got a better user, this is great!'
                );
            }

            //update record
            $user = User::findOrFail($id);
            $user->update($request->all());
            return response()->json($user, 200);
}

        public function delete($id){
            dd($id);
            User::findOrFail($id)->delete();

            return response("deleted sucefully", 200);

        }
}
