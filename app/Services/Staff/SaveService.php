<?php

namespace App\Services\Staff;

use App\Models\User;
use App\Models\Setting;
use App\Models\UserProfile;
use App\Models\SchoolCampus;
use App\Models\LocationRegion;
use App\Models\LocationProvince;
use App\Traits\HandlesImage;
use App\Http\Resources\Staff\IndexResource;

class SaveService
{
    use HandlesImage;

    public function staff($request){
        $password = rand(1000000000,9999999999);
        $data = User::create(array_merge($request->all(), ['password' => bcrypt($password), 'temp_password' => $password]));
        $id = $data->id;

        $profile = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'middlename' => $request->middlename,
            'suffix' => $request->suffix,
            'gender' => $request->gender,
            'mobile' => $request->mobile,
            'user_id' => $id
        ];
        ($request->img != '') ? $this->handleImage($id,$request->img,$request->username) : '';
        return new IndexResource($data);
    }

    public static function edit($request){
        $user = User::findOrFail($request->id)->update($request->except('img', 'editable'));
        $profile = UserProfile::where('user_id', $request->id)->first()->update($request->except('email', 'role', 'is_active', 'img', 'editable'));
        $data = User::with('profile.agency.region')->where('id',$request->id)->first();
        return new IndexResource($data);
    }

    public function token($request){
        $user = User::findOrFail($request->id);
        $user->tokens()->delete();
        $token = $user->createToken('kradworkz')->plainTextToken;
        $id = $user->profile->agency->id;
        $url = $request->url;
        $data = $id.' '.$url.' '.$token;
        return $this->simpleEncrypt($data);
    }

    public function simpleEncrypt($data) {
        $key = "KradWorkZ";
        $result = '';
        for ($i = 0; $i < strlen($data); $i++) {
            $result .= $data[$i] ^ $key[$i % strlen($key)];
        }
        return base64_encode($result);
    }
}
