<?php


class UserController extends BaseController {

  
  public function getUser($user = null, $subsec='home'){
    if($user==null){
      return Redirect::to('/')->with('message', 'Access Denied');
    }
    
    $userdata = DB::table('user_accounts')->select('username')->where('userid', $user)->first();
    
    return View::make('test')
      ->with('user', $userdata);
  }
}
