<?php
    class Pages extends Controller
    {
        public function __construct(){

        }

        public function index(){
            // $this->view('Hello'); // cool that works.
            
        }

        public function about($id){
            echo $id;
        }
    }