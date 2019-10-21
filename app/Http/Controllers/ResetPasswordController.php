<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Http\Response;

use App\Mail\ResetPasswordMail;
use Carbon\Carbon;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function sendMail(Request $request){
        if(!$this->validateEmail($request->email)){
            return $this->failedResponse();
        }else{
             $this->send($request->email);
             return $this->successResponse();

        }
    }

    public function send($email){
        $token = $this->createToken($email);

        Mail::to($email)->send(new ResetPasswordMail($token));
    }

    public function createToken($email){

        $oldToken = DB::table('password_resets')->where('email',$email)->first();

        if($oldToken){
            return $oldToken->token;
        }
        $token = str_random(60);
        $this->saveToken($email,$token);
        return $token;
    }

    public function saveToken($email,$token){
        DB::table('password_resets')->insert([
            'email'=>$email,
            'token'=>$token,
            'created_at'=> Carbon::now()
        ]);
    }
    public function validateEmail($email){
        return User::where('email',$email)->first();
    }

    public function failedResponse(){
        return response()->json([
            'error' => 'Email doesn\'t found on our database.'
            ], Response::HTTP_NOT_FOUND);
    }

    public function successResponse(){
        return response()->json([
            'error' => 'Successfully send , check ur mail.'
            ], Response::HTTP_OK);
    }




    //    -----------------------------------------------------------   Changes Password -------------------------------------------------------------


    public function changePassword(ChangePasswordRequest $request){
       return count($this->getPasswordResetTableRow($request)->get()) > 0 ?  $this->updateChangePassword($request)    : $this->tokenNotFountResponse() ;
    }

    private function getPasswordResetTableRow($request){
        return DB::table('password_resets')->where(['email'=>$request->email, 'token'=> $request->resetToken]);
    }

    private function updateChangePassword($request){
       $user = User::whereEmail($request->email);
       //dd($user);
       $user->update(['password'=>  Hash::make($request->password)]);

       $this->getPasswordResetTableRow($request)->delete();
       return response()->json([
           'data'=>'Successfully updated password.'
       ],Response::HTTP_CREATED);
    }

    private function tokenNotFountResponse(){
        return response()->json(['error'=>'Email id & Token not found.'],Response::HTTP_UNPROCESSABLE_ENTITY);
    }

}