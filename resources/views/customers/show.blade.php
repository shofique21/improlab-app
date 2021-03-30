<x-app-layout>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Improlab </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('customers') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                   Back Customer List </a>
            </div>
        </div>
    </div>
    <div class="box-body">
        <div class="box-header with-border" style="background-color: #0ab3b3;">
            <h3 class="box-title" style="color:#fff">Customer details</h3><br>
        </div>
        <div class="row">
                                    <div class="col">
                                        <label>Name: </label><span>{{ $customer->fullName }}</span>
                                    </div>
                                    <div class="col">
                                        <label>Contact Person:</label><span>{{ $customer->contact_person }}</span>
                                       
                                    </div>
                                    <div class="col">
                                        <label>Identification No:</label><span>{{ $customer->ident_no }}</span>
                                    </div>
                                    <div class="col">
                                        <label>Designation:</label> <span>{{ $customer->designation }}</span>
                                       
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>Mobile No:</label><span>{{ $customer->mobile_no }}</span>
                                        
                                    </div>
                                    <div class="col">
                                        <label>Alternative Mobile / Phone No:</label><span>{{ $customer->alt_phone }}</span>
                                        
                                    </div>
                                    <div class="col">
                                        <label>Email:</label><span>{{ $customer->email }}</span>
                                    </div>
                                    <div class="col">
                                        <label>Status:</label><span>{{ $customer->status }}</span>
                                    </div>
                                </div>


                                <div class="box-body">
                                    <div class="box-header with-border" style="background-color: #0ab3b3;">
                                        <h3 class="box-title" style="color:#fff">Address</h3><br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="district">District Name:</label><span>{{ $customer->district }}</span>
                                    </div>
                                    <div class="col">
                                        <label for="thana">Thana Name:</label><span>{{ $customer->thana }}</span>
                                    </div>
                                    <div class="col">
                                        <label for="userType">User Type:</label><span>{{ $customer->userType }}</span>
                                    </div>
                                    <div class="col">
                                        <label for="area">Area:</label><span>{{ $customer->area }}</span>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <label>Address Details:</label><span>{{ $customer->address }}</span>
                                    </div>
                                    <div class="col">
                                        <label for="conectionType">Connection Type:</label><span>{{ $customer->conectionType }}</span>
                                    </div>
                                    <div class="col">
                                        <label for="mikrotikName">Mikrotik Name:</label><span>{{ $customer->mikrotikName }}</span>
                                    </div>
                                    <div class="col">
                                        <label for="billingType">Billing Type:</label><span>{{ $customer->billingType }}</span>
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="box-header with-border" style="background-color: #0ab3b3;">
                                        <h3 class="box-title" style="color:#fff">Internet</h3><br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>ID No.:</label><span>{{ $customer->idNo }}</span>
                                        
                                    </div>
                                    <div class="col">
                                        <label for="package">Package:</label><span>{{ $customer->package }}</span>
                                       
                                    </div>
                                    <div class="col">
                                        <label>Mikrotik/Radius:</label><span>{{ $customer->mikroTikRadius }}</span>
                                       
                                    </div>
                                    <div class="col">
                                        <label>Date:</label><span>{{ $customer->startDate }}</span>
                                       
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>Expire Date</label><span>{{ $customer->expireDate }}</span>
                                      
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="box-header with-border" style="background-color: #0ab3b3;">
                                        <h3 class="box-title" style="color:#fff">Billing</h3><br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>Monthly Bill:</label><span>{{ $customer->monthlyBill }}</span>
                                       
                                    </div>
                                    <div class="col">
                                        <label>Line charge:</label><span>{{ $customer->lineCharge }}</span>
                                       
                                    </div>
                                    <div class="col">
                                        <label>Discount:</label><span>{{ $customer->discount }}</span>
                                       
                                    </div>
                                    <div class="col">
                                        <label>Total:</label><span>{{ $customer->total }}</span>
                                       
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="box-header with-border" style="background-color: #0ab3b3;">
                                        <h3 class="box-title" style="color:#fff">Product</h3><br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>Fiber Meter:</label><span>{{ $customer->fiberMeter }}</span>
                                        
                                    </div>
                                    <div class="col">
                                        <label>Fiber Code:</label><span>{{ $customer->fiberCode }}</span>
                                       
                                    </div>
                                    <div class="col">
                                        <label>Rj45 Meter:</label><span>{{ $customer->rjMeter }}</span>
                                       
                                    </div>
                                    <div class="col">
                                        <label>Box No:</label><span>{{ $customer->boxNo }}</span>
                                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>Device:</label><span>{{ $customer->device }}</span>
                                       
                                    </div>
                                    <div class="col">
                                        <label>Device MAC:</label><span>{{ $customer->deviceMac }}</span>
                                       
                                    </div>
                                    <div class="col">
                                        <label>Device Warrenty:</label><span>{{ $customer->deviceWarrenty }}</span>
                                    </div>
                                    <div class="col">
                                        <label>Deposit Device TK:</label><span>{{ $customer->deposit }}</span>
                                       
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>Router:</label><span>{{ $customer->router }}</span>
                                       
                                    </div>
                                    <div class="col">
                                        <label>Router MAC:</label><span>{{ $customer->routerMac }}</span>
                                        
                                    </div>
                                    <div class="col">
                                        <label>Router Warrenty:</label><span>{{ $customer->routerWarranty }}</span>
                                       
                                    </div>
                                    <div class="col">
                                        <label>Router Selling Price:</label><span>{{ $customer->sellingPrice }}</span>
                                        
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="box-header with-border" style="background-color: #0ab3b3;">
                                        <h3 class="box-title" style="color:#fff">Official Information</h3><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Reference:</label><span>{{ $customer->reference }}</span>
                                    </div>
                                    <div class="col">
                                        <label>Reseller:</label><span>{{ $customer->reseller }}</span>
                                       
                                    </div>
                                    <div class="col">
                                        <label>Note:</label><span>{{ $customer->note }}</span>
                                       
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>Assigned Lineman Name:</label><span>{{ $customer->lineMan }}</span>
                                       
                                    </div>
                                    <div class="col">
                                        <label>Security Deposit:</label><span>{{ $customer->securityDeposit }}</span>
                                       
                                    </div>
                                    <div class="col">
                                        <label>Distributed Location Point:</label><span>{{ $customer->locationPoint }}</span>
                                    </div>
                                </div>

    </div>
</x-app-layout>