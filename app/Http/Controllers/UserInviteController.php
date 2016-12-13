<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInviteController extends Controller
{
    //Controls the sending and verifying of user invites

    public function index() {
      //First page the user sees when they enter this section via the menu
      return view('dashboard.invite.index');
    }

    public function create() {
      //save the details of the invite and send the request tot eh email function

    }

    public function import() {
      // Accept a CSV file containing the names and emails of all users you wish to invite.
      // this method only supports importing users as a default user, for security reasons.
      // If you wish to bulk import someone and assign them a different tole, this will have
      // to be done manually.
    }

}
