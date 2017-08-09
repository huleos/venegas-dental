<?php
return function($site, $pages, $page) {
  $alert = null;
  if(r::is('post') && get('submit')) {
  // if(get('submit')) {
    if(!empty(get('website'))) {
      // lets tell the bot that everything is ok
      go($page->url());
      exit;
    }
    $data = array(
      'fullName'  => get('fullName'),
      'emailAddress' => get('emailAddress'),
      'cityOfResidence'  => get('cityOfResidence'),
      'contactNumber'  => get('contactNumber'),
      'message'  => get('message')
    );
    $rules = array(
      'fullName'  => array('required'),
      'emailAddress' => array('required', 'email'),
      'contactNumber' => array('required', 'num'),
      'message'  => array('required', 'min' => 3, 'max' => 3000)
    );
    $messages = array(
      'fullName'  => 'Please enter your name',
      'emailAddress' => 'Please enter a valid email address',
      'contactNumber' => 'Please enter your contact number',
      'message'  => 'Please enter a text between 3 and 3000 characters'
    );
    // some of the data is invalid
    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    // the data is fine, let's send the email
    } else {
      // create the body from a simple snippet
      $body  = snippet('contactmail', $data, true);
      // build the email
      $email = email(array(
        'to' => $site->contactTo(),
        'from' => $site->contactFrom(),
        'subject' => 'New email from {fullName}',
        'replyTo' => $data['emailAddress'],
        'body'    => $body
      ));
      // try to send it and redirect to the
      // thank you page if it worked
      if($email->send()) {
        go('thank-you');
      // add the error to the alert list if it failed
      } else {
        $alert = array($email->error());
      }
    }
  }
  return compact('alert');
};