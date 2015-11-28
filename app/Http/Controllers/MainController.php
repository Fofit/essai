<?php
    namespace App\Http\Controllers;
    class MainController extends Controller{
        public function index(){
            return view('accueil');
        }
        public function signin(){
            return view('accueil');
        }
        public function events(){
            return view('evenements');
        }
    }
?>
