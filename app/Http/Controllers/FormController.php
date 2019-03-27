<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function email_post(Request $request) {
        $rules = [
            'email' => ['required', 'regex:/^\S+@\S+\.\S+$/']
        ];

        $this->validate($request, $rules);

        return dd('success');
    }

    public function password_post(Request $request) {
        $rules = [
            'password' => ['required', 'regex:/^[a-zA-Z0-9]+$/'] //半角英数字
        ];

        $this->validate($request, $rules);

        return dd('success');
    }

    public function date_post(Request $request) {
        $rules = [
            'date' => ['required', 'date_format:Y-m-d']
        ];

        $this->validate($request, $rules);

        return dd('success');
    }

    public function url_post(Request $request) {
        $rules = [
            'url' => ['required', 'regex:^(http|https)://([\w-]+\.)+[\w-]+(/[\w-./?%&=]*)?$']
        ];

        $this->validate($request, $rules);

        return dd('success');
    }

    public function check_post(Request $request) {
        $rules = [
            'gender' => ['required'],
            'select' => ['required']
        ];

        $this->validate($request, $rules);

        return dd('success');
    } 
}
