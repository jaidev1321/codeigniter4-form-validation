<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function form(): string
    {
        return view('form');
    }
    public function formHandler(): string
    {
        try {
            //code...
            helper(['form']);
            $rules = [
                'name' => 'required|min_length[3]',
                'email' => 'required|valid_email',
                'phone' => 'required|numeric|max_length[10]',
                'age' => 'required|numeric'
            ];
            if($this->validate($rules)){
                echo "input is correct";
            }
            else{
                // if need to check validation error in controller
                // echo "<pre>";
                // print_r($this->validator->getErrors());
                // die;

                // else forward the errors to view file
                $data['validation'] = $this->validator;
                return view('form', $data);
            }
        } catch (\Throwable $th) {
            //throw $th;
            print_r($th);
        }
    }
}
