<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Helpers\ApiResponseFormat;

class RegisteredClientController extends Controller
{
    public function register(Request $request)
    {
        $validator  = Validator::make($request->all(), [
            'clientName' => ['required', 'string', 'max:255'],
            'clientEmail' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:clients,email'],
            'clientPassword' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($validator->fails()) {
            return ApiResponseFormat::sendResponse(422, "Register validation errors.", $validator->messages()->all());
        }

        $newClient = Client::create([
            'name' => $request->clientName,
            'email' => $request->clientEmail,
            'password' => Hash::make($request->clientPassword),
        ]);

        $responseData['clientID'] = $newClient->id;
        $responseData['clientName'] = $newClient->name;
        $responseData['clientEmail'] = $newClient->email;
        $responseData['clientToken'] = $newClient->createToken('clientToken')->plainTextToken;
        return ApiResponseFormat::sendResponse(201, "Client registered successfully.", $responseData);
    }
}
