<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePayslipRequest;
use App\Http\Requests\UpdatePayslipRequest;
use App\Models\Payslip;
use Illuminate\Http\Request;

class PayslipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $id = $id;
        $payslips = Payslip::all();
        return view('payslip.index', compact('payslip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payslip.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePayslipRequest $request, $id)
    {
        $request->validated();
        $payslip = new Payslip([
            'personal_detail_id' => $id,
            'payment_month' => $request->get('payment_month'),
            'document_name' => $request->get('document_name'),
        ]);

        $payslip->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $payslip = Payslip::where('id','=',$id)->firstOrFail();
       
        return view('payslip.show', compact('payslip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payslip = Payslip::where('id','=',$id)->first();
       
        return view('biodata.edit', compact('payslip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePayslipRequest $request, $id)
    {
        
        $validated = $request->validated();
        $payslip = Payslip::where('id','=',$id)->firstOrFail();

        $payslip->update($validated);
        return view('personal.details.edit', compact('payslip'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payslip = Payslip::findOrFail($id);

        $payslip->delete();
    }
}
