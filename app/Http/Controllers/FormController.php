<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'upload-image' => 'required|image|mimes:jpeg,jpg,png',
            'pet-name' => 'required|string|max:255',
            'pet-species' => 'required|string|max:255',
            'pet-breed' => 'required|string|max:255',
            'pet-age' => 'required|integer|min:1',
            'pet-weight' => 'required|numeric|min:0.1',
        ];

        // Custom validation messages
        $messages = [
            'upload-image.required' => 'Please upload an image.',
            'pet-age.min' => 'The pet age must be at least 1 year.',
            'pet-weight.min' => 'The pet weight must be at least 0.1 kg.',
        ];

        $validatedData = $request->validate($rules, $messages);
        return redirect()->route('success')->with('success', 'Form submitted successfully.');
    }
}
