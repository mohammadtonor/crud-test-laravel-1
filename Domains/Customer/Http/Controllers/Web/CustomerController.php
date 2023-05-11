<?php

namespace Domains\Customer\Http\Controllers\Web;

use App\Models\Customer;
use App\Support\NormalResponseJson;
use Domains\Customer\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(NormalResponseJson $normalResponseJson)
    {
        try {
            $customers = Customer::all();
            return response()->json( $normalResponseJson::normalizeResponse($customers,false));
        }
        catch ( \Exception $ex) {
            return response()->json($normalResponseJson::normalizeResponse($ex->getMessage(),true));
        }
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
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
