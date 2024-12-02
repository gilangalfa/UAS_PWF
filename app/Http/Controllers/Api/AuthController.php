<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participant;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function register(Request $request) {
         //

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'location' => 'nullable',
            'educational_level' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Error register.',
                'errors' => $validator->errors(),
            ]);
        }

        $input = $request->all();
        $user = Participant::create($input);

        $token = $user->createToken('api_token')->plainTextToken;

        return response()->json([
            'status' => true,
            'message' => "Guess successfully registered as participant",
            'data' => $input,
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
}
