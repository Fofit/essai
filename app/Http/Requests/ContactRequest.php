<?php
    namespace App\Http\Requests;
    class ContactRequest extends Request{
        public function authorize(){
            return true;
        }
       
        public function rules(){
            return[
                'name'=>'required|min:5|max:20|alpha',
                'email'=>'required|email',
                'text'=>'required|max:250'
            ];
        }
    }
