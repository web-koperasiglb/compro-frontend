<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function aboutUs() {
        return view('pages.about-us');
    }

    public function contactUs() {
        return view('pages.contact-us');
    }

    public function news() {
        return view('pages.news');
    }

    public function catalog() {
        return view('pages.catalog');
    }

    public function languageSwitch(Request $request) {
        $language = $request->input('language');

        session(['language' => $language]);
        return redirect()->back()->with(['language_switched' => $language]);
    }

    public function submitContact(Request $request) {
        // dd($request->all());
        // \Log::info($request->all());
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telp' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        if (!$validate) {
            return response()->json(['success' => true, 'message' => 'Contact form submitted successfully.']);
        }

        $baseURL = "https://script.google.com/macros/s/AKfycbxNJunD93rNUkozxZgJf5iqqyguL42_-uNqDSk6kJrl_8sgdLAiQSl-EZvLIGPZwmv9/exec";

        $googleDocUrl = $baseURL
            . "?name=" . urlencode($request->input('name'))
            . "&email=" . urlencode($request->input('email'))
            . "&telp=" . urlencode($request->input('telp'))
            . "&subject=" . urlencode($request->input('subject'))
            . "&message=" . urlencode($request->input('message'));

        // access to spreadsheet
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $googleDocUrl);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); // Follow any redirects

        $response = curl_exec($curl);

        if ($response === false) {
            echo 'cURL Error: ' . curl_error($curl);
        }

        curl_close($curl);

        return $response;
    }
}
