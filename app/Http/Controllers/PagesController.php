<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{
    public function index()
    {
        // DB::table('users')->chunk('10', function ($users) {
        //     return $users;
        // });

        // $users = DB::table('users')->where('id', '>',  2)->where('id', '<', 5)->orWhere('id', '10')->get();
        // DB::table('posts')->insert(['name' => 'Sunday OPeyemi', 'email' => 'Niyi@niyiit.com']);
        // DB::table('posts')->where('id', 1)->update(['email' => 'Sunday@gmail.com']);
        // DB::table('posts')->where('id', 1)->delete();
        // foreach ($users as $user) {
        //     echo $user->email . "<br/>";
        // }

        // $users = DB::select("select * from users WHERE email=?", ['foster17@example.net']);
        // DB::insert("INSERT INTO posts(name, email) values(?,?)", ['OSUN STATE', 'Mujeeb@oichub.org']);

        // foreach ($users as $user) {
        //     return $user->name;
        // }
        // foreach ($users as $user) {
        //     echo   $user->name . "<br/>";
        // }
        //return  view('pages.index');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function about()
    {

        // $users = User::where('id', '>', 2)->orderBy('id', 'asc')->paginate(5);
        // return $users;

        // $users = new User();
        // $users->name = "Mujeeb";
        // $users->email = "mujeeb@oichub.org";
        // $users->password = Hash::make('mujeeb');
        // $users->save();

        // Picture::insert([
        //     'name' => "OgaNiyi.jpg"
        // ]);
        // Picture::where('id', 2)->delete();
        Picture::where('id', 2)->destroy();
        // Picture::create([
        //     'name' => "OgaNiyi.jpg"
        // ]);
        // return view('pages.about');
    }
}
