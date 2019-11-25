<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image as Image;
class ProfileController extends Controller
{
   
    public function index(\App\User $user)
    {
        $follows=(auth()->user()) ? auth()->user()->following->contains($user->id) : false;
      
        return view('profiles.index', compact('user','follows'));
       
    }
    public function indextest(\App\User $user)
    {
        $follows=(auth()->user()) ? auth()->user()->following->contains($user->id) : false;
      
        return view('layouts.test', compact('user','follows'));
       
    }
    public function edit(\App\User $user)
    {

        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }


    public function update(\App\User $user)
    {
        $this->authorize('update', $user->profile);
        $data= request()->validate([
            
           
           
        ]);
      ///fsdkfsl
     
        ///fsdfd
  
          auth()->user()->profile->update($data);
          if (request('image')){

          
            $originalImage=request('image');
            $name=$originalImage->getClientOriginalName();
            $extension=$originalImage->getClientOriginalExtension();
           
            $name=time(); 
         
            $fullname=$name.'.'.$extension;
            $thumbnailImage = Image::make($originalImage);
            $originalPath = public_path().'/uploads/';
            $image=Image::make($originalImage)->fit(1000,1000);
            $image->save($originalPath.$fullname);
             auth()->user()->profile->update(['image'=>$fullname]);
          } 
          auth()->user()->profile->update($data);
          if (request('image_cover')){

            $originalImage= request('image_cover');
            $name=$originalImage->getClientOriginalName();
            $extension=$originalImage->getClientOriginalExtension();
           
            $name=time(); 
         
            $fullname=$name.'.'.$extension;
            $originalPath = public_path().'/uploads/';
            $image=Image::make($originalImage)->fit(1030,430);
            $image->save($originalPath.$fullname);
             auth()->user()->profile->update(['cover'=>$fullname]);
          } 
         
         

          return redirect("/profile/{$user->id}");
    }
    
    
}
