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
        return view('payslip.index', compact('payslips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=null)
    {
        $id = $id;
        $payslips = Payslip::all();
        return view('forms.fourth', compact('payslips', 'id'));

    }

    /**QW2
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePayslipRequest $request, $id)
    {


            $request->validated();

            $payments = $request->date;

            foreach ($payments as $key => $payment) {
                $employeePayment = Payslip::create([
                    'personal_detail_id' => $id,
                    'payment_month' => $payment,
                    'basic_salary' => $request->basic_salary[$key],
                    'total_earnings' => $request->total_earnings[$key],
                    'pf_number' => $request->pf_number[$key],
                    'tax_pin' => $request->tax_pin[$key],
                    'name' => $request->name[$key],
                    'station_name' => $request->station_name[$key],
                    'station_code' => $request->station_code[$key],
                    'desig_code' => $request->desig_code[$key],
                    'desig_name' => $request->desig_name[$key],
                    'id_no' => $request->id_no[$key],
                    'phone' => $request->phone[$key],
                    'email' => $request->email[$key],
                    'comments' => $request->message[$key],
                ]);


            }

            return redirect()->route('personal.details.index')->with('success', 'Profile has been Completed');



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
        return redirect()->route('personal.details.create')
        ->with('success','Payment Details updated successfully');

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
