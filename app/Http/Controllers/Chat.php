<?php
namespace App\Http\Controllers;

use App\Models\UserAuth;

class Chat extends Controller
{
    public function chat()
    {

        $data = UserAuth::DB_GET();
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if ($user == $data[0]->user && $pass == $data[0]->pass)
        {
            return view( 'page.chat', ['data' => $data]);
        }
        else
        {
            return view('page.login');
        }        
        
    }
}
?>