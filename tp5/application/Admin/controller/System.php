<?php

namespace app\admin\controller;

class System {
      public function systembase(){
        return view('system-base');
    }
      public function systemcategory(){
        return view('system-category');
    }
      public function systemdata(){
        return view('system-data');
    }
      public function systemshielding(){
        return view('system-shielding');
    }
      public function systemlog(){
        return view('system-log');
    }
}
