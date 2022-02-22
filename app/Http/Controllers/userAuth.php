<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User; 

class userAuth extends Controller
{
    public function login(Request $req)
    {
        return view('UserAuth.login',['redirect'=>$req->redirect]);
    } 

    public function check_user(Request $req)
    {
        $name=$req->name;
        $password=$req->password; 

        $session = User::where('name', $name)->where('password',$password)->get();
        if(count($session)>0)
        {
            $req->session()->put('user_id',$session[0]->id);
            $req->session()->put('user_name',$session[0]->name); 

            if(isset($req->redirectto)){
                return redirect($req->redirectto);
            }
            return redirect('/Profile',['page'=>'Profile']);
        }
        else
        {
            return redirect('/login')->with('msg','User name or password does not match');
        } 

        
    } 


    public function profile(Request $req)
    {
        if($req->session()->get('user_id')=="")
        {
            return redirect('/login');
        }
        else
        {
            $username=$req->session()->get('user_name');
            $capsule =  array('username'=> $username,'page'=>'Profile Page');
            return view('UserAuth.profile')->with($capsule);
        }
    } 

    public function logout(Request $req)
    {
        $req->session()->forget('user_id');
        $req->session()->forget('user_name'); 

        return redirect('/login?redirect=Dashboard');
    }
}



?>
