<?php

namespace App\Http\Controllers\meal;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Meal;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use DB;

class MealController extends Controller
{
    //
    public function index(){
    	//$members = Member::paginate(15);
        $foods = Meal::all();
        return view('meal.mealView', compact('foods'));
    }
        /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        
        return view('meal.addMeal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, []);
        //$id = 0;
        $meal = new Meal();
        $meal->user_id = Auth::user()->id;
        $meal->self_meal_breakfast = Input::get('self_meal_breakfast')? 1: 0;
        $meal->self_meal_lunch = Input::get('self_meal_lunch')? 1: 0;
        $meal->self_meal_dinner = Input::get('self_meal_dinner')? 1: 0;
        $meal->guest_meal_breakfast = Input::get('guest_meal_breakfast')? 1: 0;
        $meal->guest_meal_lunch = Input::get('guest_meal_lunch')? 1: 0;
        $meal->guest_meal_dinner = Input::get('guest_meal_dinner')? 1: 0;
        $meal->extra_meal = Input::get('extra_meal');

        $meal->save();        

        Session::flash('flash_message', 'Meal added!');

        return redirect('meal/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $meal = Meal::findOrFail($id);
        return view('meal.mealView', compact('meal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $roles = Role::select('id', 'name', 'label')->get();

        $user = User::with('roles')->select('id', 'name', 'email')->findOrFail($id);
        $user_roles = [];
        foreach ($user->roles as $role) {
            $user_roles[] = $role->name;
        }

        return view('admin.users.edit', compact('user', 'roles', 'user_roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int      $id
     * @param  \Illuminate\Http\Request  $request
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['name' => 'required', 'email' => 'required', 'roles' => 'required']);

        $data = $request->except('password');
        if ($request->has('password')) {
            $data['password'] = bcrypt($request->password);
        }

        $user = User::findOrFail($id);
        $user->update($data);

        $user->roles()->detach();
        foreach ($request->roles as $role) {
            $user->assignRole($role);
        }

        Session::flash('flash_message', 'User updated!');

        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        User::destroy($id);

        Session::flash('flash_message', 'User deleted!');

        return redirect('admin/users');
    }

}
