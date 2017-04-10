<?php

namespace app\admin\controller;

class Member {
     public function memberlist(){
        return view('member-list');
      }
      public function memberdel(){
        return view('member-del');
      }
      public function memberlevel(){
        return view('memberlevel');
      }
      public function memberscoreoperation(){
        return view('member-score-operation');
      }
      public function memberrecordbrowse(){
        return view('member-record-browse');
      }
      public function memberrecorddownload(){
        return view('member-record-download');
      }
      public function memberrecordshare(){
        return view('member-record-share');
      }
}
