<?php

namespace App\Http\Controllers;

use App\Models\SSLCommerzCredential;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;

class SSLCredentailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = SSLCommerzCredential::first();
        return Inertia::render('Settings/Settings', ['setting' => $setting]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'store_id' => 'required|string',
                'store_password' => 'required|string',
                'currency' => 'required|string',
                'success_url' => 'required|string',
                'fail_url' => 'required|string',
                'cancel_url' => 'required|string',
                'ipn_url' => 'required|string',
                'init_url' => 'required|string',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'errors' => $validator->errors(),
                ], 422);
            }

            $setting = SSLCommerzCredential::first();
            $setting->store_id = $request->store_id;
            $setting->store_password = $request->store_password;
            $setting->currency = $request->currency;
            $setting->success_url = $request->success_url;
            $setting->fail_url = $request->fail_url;
            $setting->cancel_url = $request->cancel_url;
            $setting->ipn_url = $request->ipn_url;
            $setting->init_url = $request->init_url;
            $setting->save();

            return redirect()->back()->with('success', 'Settings updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
