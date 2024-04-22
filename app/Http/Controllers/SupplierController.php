<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
use App\Mail\SupplierMail;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $supplier = Supplier::all();
    //     return response()->json([
    //         'status' =>true,
    //         'supplier' => $supplier
    //     ]);       }

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
    public function store(SupplierRequest $request)
    {
        try {
            $supplier = Supplier::create($request->all());
    
            Mail::to('info@supermarchedina.com')->send(new SupplierMail($supplier->name,$supplier->enterprise_adress,$supplier->tel,$supplier->email,$supplier->enterprise_site,$supplier->production_capacity,$supplier->type_products,$supplier->category_products,$supplier->description));
            return response()->json([
                'status' => true,
                'message' => "Formulaire envoyé avec succès !",
                'supplier' => $supplier
            ],200);
        }catch (Throwable $th) {
            Log::info($th->getMessage());
            return response()->json([
                'status' => false,
                'message' => "Une erreur est survenue !",
                'supplier' => null
            ],500); 
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
