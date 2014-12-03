<?php
class UsersController extends BaseController {
    public function create(){
        return View::make('users.create');
    }
    public function store(){
        if((User::where('email','=',Input::get('email'))->first() === null) &&
            (Request::isMethod('post')))
        {
            $input = Input::only('username','email','password');
            $input['password'] = Hash::make($input['password']);
            User::create($input);
            Auth::attempt(Input::only('email','password'));
            return Redirect::to('/dashboard');
        }
        return Redirect::back()->withInput();
    }
}