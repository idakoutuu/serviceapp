<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Prefecture;
use App\Profession;
use App\Photograph;
use App\Hobby;

class UsersController extends Controller
{
    public function usertop()
    {
        return view('user.usertop');
    }

    public function mypage(Request $request)
    {
        $auth = Auth::user();
        $hobbies = ($auth->hobby)->pluck('hobby', 'id')->toArray();
        return view('user.mypage', ['auth' => $auth, 'hobbies' => $hobbies]);
    }

    public function anypage(Request $request)
    {
        $users = User::all();
        $photograph = Photograph::all()->toArray();
        
        return view('user.anypage', ['users' => $users, 'photograph' => $photograph]);
    }

    public function otheruser($id)
    {
        $user = User::find($id);
        $hobbies = ($user->hobby)->pluck('hobby', 'id')->toArray();
        return view('user.otheruser', ['user' => $user , 'hobbies' => $hobbies]);
    }

    public function edit(Prefecture $prefecture, Hobby $hobby, Profession $profession)
    {
        $auth = Auth::user();
        $prefectures = $prefecture->all();
        $professions = $profession->all();
        $hobbies = $hobby->all();
        $hob = ($auth->hobby)->pluck('hobby', 'id')->toArray();
        return view('user.edit', ['auth' => $auth, 'prefectures' => $prefectures, 'hobbies' => $hobbies, 'professions' => $professions, 'hob' => $hob]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'photo' => ['required', 'file', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);
    }

    public function update(Request $request, User $user, Photograph $photograph)
    {
        //ばりデートからばりテートメソッド$this->velidator($request->all())
        $this->validate($request,[
            'name' => ['required', 'max:10', 'string'],
            'photo' => ['required','file', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048']
            ]);
        $auth = Auth::user();
        $inputs = $request->input();
        $pref = Prefecture::find($request->prefecture_id);
        $hobbies = Hobby::find($request->hobby)->pluck('hobby', 'id')->toArray();
        $professions = Profession::find($request->profession_id);
        $uploadedFile = $this->saveImage($request->file('photo'));
        if($request->file('photo')) {
            $files = $auth->photograph['photo'];
            Storage::delete('public/images/' . $files);
            $path = $request->file('photo')->storeAs('', $request->file('photo')->hashName());
            $photograph->where('user_id', '=', $auth->id)->delete();
            $photograph->photo = str_replace('public/images/', '', $path);
            $photograph->user_id = auth()->id();
            $photograph->save();
            
            $user = User::find($auth->id);
            $form = $request->input();
            $user->update($form);
            unset($form['_token']);
            unset($form['hobby']);
            $user->save();
            $user->hobby()->detach();
            foreach ($request->hobby as $hob) {
                $user->hobby()->attach(
                    ['user_id' => $auth->id],
                    ['hobby_id' => $hob]
                );
            };
        }
        //更新した際のプロフィールの更新、写真の表示
        return view('user.update' , [ 'auth' => $auth,'inputs' => $inputs, 'pref' => $pref, 'hobbies' => $hobbies, 'professions' => $professions, 'uploadedFile' => str_replace('public', 'storage', $uploadedFile),
        ]);
    }

    public function saveImage($file)
    {
        return $file->storeAs('public/images', $file->hashName());
    }

}
