<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers =  DB::table('customers')->select('id','fullName','mobile_no','district', 'email as user_email','status')
        ->get();
        return view('customers.index')->with(array('customers'=>$customers));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullName' => ['required', 'string', 'max:255'],
            'mobile_no' => ['required', 'string', 'max:13'],
            'status' => ['required', 'string', 'max:13'],
            'district' => ['required', 'string', 'max:255'],
            'thana' => ['required', 'string', 'max:255'],
            'userType' => ['required', 'string', 'max:255'],
            'area' => ['required', 'string', 'max:255'],
            'conectionType' => ['required', 'string', 'max:255'],
            'mikrotikName' => ['required', 'string', 'max:255'],
            'idNo' => ['required', 'string', 'max:255'],
            'package' => ['required', 'string', 'max:255'],
            ]);
          if ($validator->fails()) {
             $error = $validator->messages()->get('*');
              return  $error;
          }
          
          $customer = new Customer([
            'fullName' => $request->get('fullName'),
            'contact_person' => $request->get('contact_person'),
            'ident_no' => $request->get('ident_no'),
            'designation' => $request->get('designation'),
            'mobile_no' => $request->get('mobile_no'),
            'alt_phone' => $request->get('alt_phone'),
            'email' => $request->get('email'),
            'status' => $request->get('status'),
            'district' => $request->get('district'),
            'thana' => $request->get('thana'),
            'userType' => $request->get('userType'),
            'area' => $request->get('area'),
            'address' => $request->get('address'),
            'conectionType' => $request->get('conectionType'),
            'mikrotikName' => $request->get('mikrotikName'),
            'billingType' => $request->get('billingType'),
            'idNo' => $request->get('idNo'),
            'package' => $request->get('package'),
            'mikroTikRadius' => $request->get('mikroTikRadius'),
            'startDate' => $request->get('startDate'),
            'password' =>  Hash::make($request->get('password')),
            'expireDate' => $request->get('expireDate'),
            'monthlyBill' => $request->get('monthlyBill'),
            'lineCharge' => $request->get('lineCharge'),
            'discount' => $request->get('discount'),
            'total' => $request->get('total'),
            'fiberMeter' => $request->get('fiberMeter'),
            'fiberCode' => $request->get('fiberCode'),
            'rjMeter' => $request->get('rjMeter'),
            'boxNo' => $request->get('boxNo'),
            'device' => $request->get('device'),
            'deviceMac' => $request->get('deviceMac'),
            'deviceWarrenty' => $request->get('deviceWarrenty'),
            'deposit' => $request->get('deposit'),
            'router' => $request->get('router'),
            'routerMac' => $request->get('routerMac'),
            'routerWarranty' => $request->get('routerWarranty'),
            'sellingPrice' => $request->get('sellingPrice'),
            'reference' => $request->get('reference'),
            'reseller' => $request->get('reseller'),
            'note' => $request->get('note'),
            'lineMan' => $request->get('lineMan'),
            'securityDeposit' => $request->get('securityDeposit'),
            'locationPoint' => $request->get('locationPoint'),
            'contact_person' => $request->get('contact_person'),
          ]);
          $customer->save();
          return back()->with('success', 'Customer created successfully.');
          //return response()->json('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //return view('projects.show', compact('project'));
        return view('customers.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
       
        $validator = Validator::make($request->all(), [
            'fullName' => ['required', 'string', 'max:255'],
            'mobile_no' => ['required', 'string', 'max:13'],
            'status' => ['required', 'string', 'max:13'],
            'district' => ['required', 'string', 'max:255'],
            'thana' => ['required', 'string', 'max:255'],
            'userType' => ['required', 'string', 'max:255'],
            'area' => ['required', 'string', 'max:255'],
            'conectionType' => ['required', 'string', 'max:255'],
            'mikrotikName' => ['required', 'string', 'max:255'],
            'idNo' => ['required', 'string', 'max:255'],
            'package' => ['required', 'string', 'max:255'],
            ]);
          if ($validator->fails()) {
             $error = $validator->messages()->get('*');
              return  $error;
          }

        $customer->update($request->all());

        return redirect()->route('customers.index')
            ->with('success', 'Customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')
            ->with('success', 'Customer deleted successfully');
    }
}
