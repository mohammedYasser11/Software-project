<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\RegistrationData;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number'=> $request->phone_number,
            'membership_type'=> $request->membership_type,
            'subscribtion'=> $request->subscribtion
        ]);


        


        // event(new Registered($user));

        Auth::login($user);
        return redirect('/registeration-questions');

    }


    public function save_user_data(Request $request){
        $side_1 = $request->file('side_1');
        $side_1 =  $side_1->move('upload/', 'side_1_' .$side_1->getClientOriginalName());

        $side_2 = $request->file('side_2');
        $side_2 =  $side_2->move('upload/', 'side_2_'.$side_2->getClientOriginalName());

        $side_3 = $request->file('side_3');
        $side_3 =  $side_3->move('upload/','side_3_'.$side_3->getClientOriginalName());

        $side_4 = $request->file('side_4');
        $side_4 =  $side_4->move('upload/','side_4_'.$side_4->getClientOriginalName());

        $inbody = $request->file('inbody');
        $inbody =  $inbody->move('upload/','inbody_'. $inbody->getClientOriginalName());
        


        
        // return Auth::user();
        $user_data = new RegistrationData();
        $user_data->user_id = Auth::user()->id ;
        $user_data->age = $request->age ;
        $user_data->height = $request->height ;
        $user_data->weight = $request->weight ;
        $user_data->waist_size = $request->waist_size ;
        $user_data->abdominal_size = $request->abdominal_size ;
        $user_data->chest_size = $request->chest_size ;
        $user_data->acitve_rate = $request->acitve_rate ;
        $user_data->gym_per_week= $request->gym_per_week ;
        $user_data->goal= $request->goal;
        $user_data->training_goal = $request->training_goal;
        $user_data->meals_no= $request->meals_no;
        $user_data->thigh_size_r= $request->thigh_size_r;
        $user_data->thigh_size_l = $request->thigh_size_l ;
        $user_data->arm_size_l= $request->arm_size_l ;
        $user_data->arm_size_r= $request->arm_size_r ;
        $user_data->calf_size_r= $request->calf_size_r ;
        $user_data->calf_size_l = $request->calf_size_l ;
        $user_data->fat_source= $request->fat_source ;
        $user_data->carb_source= $request->carb_source ;
        $user_data->protien_source= $request->protien_source ;
        $user_data->fruit_source = $request->fruit_source ;
        $user_data->vege_source= $request->vege_source ;
        $user_data->supplements= $request->supplements;
        $user_data->allergy = $request->allergy;
        $user_data->food_disliked= $request->food_disliked;
        $user_data->side_1 = $side_1 ;
        $user_data->side_2 = $side_2 ;
        $user_data->side_3 = $side_3 ;
        $user_data->side_4 = $side_4 ;
        $user_data->inbody = $inbody ;
        
        $user_data->save();
        return redirect(RouteServiceProvider::HOME);
    }
}
