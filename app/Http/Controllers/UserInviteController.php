<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvitedUser;
use App\Role;
use App\Department;

class UserInviteController extends Controller
{
    //Controls the sending and verifying of user invites

    public function index() {
      //First page the user sees when they enter this section via the menu
      $roles = Role::pluck('name', 'id');
      $departments = Department::pluck('name', 'id');
      return view('dashboard.invite.index', compact('roles','departments'));
    }

    public function create(Request $request) {
      //save the details of the invite and send the request tot eh email function
      //TODO make the email for invite unique
      //TODO Actually send the emails to the invitee

      $input = $request->all();
      $input['active'] = 1; //set outgoing invites as active by default
      $input['key'] = md5($input['email']); //make the invite key as an MD5 of the email

      InvitedUser::create($input);

      session()->flash('success_message','Invitation for '.$input['name'].' created successfully');
      return redirect(route('invite.index'));



    }

    public function import() {
      // Accept a CSV file containing the names and emails of all users you wish to invite.
      // this method only supports importing users as a default user, for security reasons.
      // If you wish to bulk import someone and assign them a different tole, this will have
      // to be done manually.
    }

}
