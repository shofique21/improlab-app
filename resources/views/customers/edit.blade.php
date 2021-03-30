<x-app-layout>
<div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Improlab </h2>
            </div>
            <div class="pull-right" style="margin-bottom:15px;">
                <a class="btn btn-success" href="{{ url('customers') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                   Customer List </a>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                   
                            <h3>Create Customer</h3>
                            <form   action="{{ route('customers.update',$customer->id) }}" method="POST">
                            {{ csrf_field() }}
                            @method('PUT')
                                <div class="box-body">
                                    <div class="box-header with-border" style="background-color: #0ab3b3;">
                                        <h3 class="box-title" style="color:#fff">Personal Information</h3><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Name *</label>
                                        <input type="text" class="form-control" id="fullName" 
                                            name="fullName" value="{{ $customer->fullName }}" required>
                                    </div>
                                    <div class="col">
                                        <label>Contact Person</label>
                                        <input type="text" class="form-control" name="contact_person" value="{{ $customer->contact_person }}"
                                           >
                                    </div>
                                    <div class="col">
                                        <label>Identification No.</label>
                                        <input type="text" class="form-control" name="ident_no" value="{{ $customer->ident_no }}"
                                        >
                                    </div>
                                    <div class="col">
                                        <label>Designation</label>
                                        <input type="text" class="form-control" name="designation" value="{{ $customer->designation }}"
                                           >
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>Mobile No.*</label>
                                        <input type="number" class="form-control" id="mobile_no" 
                                            name="mobile_no" value="{{ $customer->mobile_no }}">
                                    </div>
                                    <div class="col">
                                        <label>Alternative Mobile / Phone No</label>
                                        <input type="number" class="form-control" name="alt_phone" value="{{ $customer->alt_phone }}"
                                            >
                                    </div>
                                    <div class="col">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ $customer->email }}"
                                            >
                                    </div>
                                    <div class="col">
                                        <label>Status *</label>
                                        <select id="status" name="status" class="form-control">
                                            <option value="{{ $customer->status }}" selected>{{ $customer->status }}</option>
                                            <option value="deactive">deactive</option>
                                            <option value="active">active</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="box-body">
                                    <div class="box-header with-border" style="background-color: #0ab3b3;">
                                        <h3 class="box-title" style="color:#fff">Address</h3><br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="district">District Name *</label>
                                        <select id="district"  class="form-control" name="district">
                                           <option value="{{ $customer->district }}" selected>{{ $customer->district }}</option>
                                            <option value="Kushtia">Kushtia</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="thana">Thana Name *</label>
                                        <select id="thana"  name="thana" class="form-control">
                                           <option value="{{ $customer->thana }}" selected>{{ $customer->thana }}</option>
                                            <option value="Kushtia sador">Kushtia sador</option>
                                            <option value="Kumerkhali">Kumerkhali</option>
                                            <option value="Khuksha">Khuksha</option>
                                            <option value="Veramara">Veramara</option>
                                            <option value="Duwlotpure">Duwlotpure</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="userType">User Type*</label>
                                        <select id="userType"  name="userType" class="form-control">
                                           <option value="{{ $customer->userType }}" selected>{{ $customer->userType }}</option>
                                            <option value="Home">Home</option>
                                            <option value="Office">Office</option>
                                            <option value="Dokan">Dokan</option>
                                            <option value="Educational Institute">Educational Institute</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="area">Area*</label>
                                        <select id="area"  name="area" class="form-control">
                                           <option value="{{ $customer->area }}" selected>{{ $customer->area }}</option>
                                            <option value="East">East</option>
                                            <option value="West">West</option>
                                            <option value="North">North</option>
                                            <option value="South">South</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <label>Address Details</label>
                                        <input type="text" name="address" value="{{ $customer->address }}" class="form-control"
                                          >
                                    </div>
                                    <div class="col">
                                        <label for="conectionType">Connection Type *</label>
                                        <select id="conectionType"  name="conectionType"
                                            class="form-control">
                                            <option value="{{ $customer->conectionType }}" selected>{{ $customer->conectionType }}</option>
                                            <option value="shared">shared </option>
                                            <option value="dedicated">dedicated</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="mikrotikName">Mikrotik Name*</label>
                                        <select id="mikrotikName"  name="mikrotikName"
                                            class="form-control">
                                            <option value="{{ $customer->mikrotikName }}" selected>{{ $customer->mikrotikName }}</option>
                                            <option value="CL 01">CL 01</option>
                                            <option value="CL 02">CL 02</option>
                                            <option value="CL 03">CL 03</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="billingType">Billing Type </label>
                                        <select id="billingType" name="billingType" class="form-control">
                                            <option value="{{ $customer->billingType }}" selected>{{ $customer->billingType }}</option>
                                            <option value="Pre Paid">Pre Paid</option>
                                            <option value="Post Paid">Post Paid</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="box-header with-border" style="background-color: #0ab3b3;">
                                        <h3 class="box-title" style="color:#fff">Internet</h3><br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>ID No.*</label>
                                        <input type="text" name="idNo" value="{{ $customer->idNo }}" class="form-control"
                                           >
                                    </div>
                                    <div class="col">
                                        <label for="package">Package*</label>
                                        <select id="package" name="package" class="form-control">
                                           <option value="{{ $customer->package }}" selected>{{ $customer->package }}</option>
                                            <option value="package 1">Package 1</option>
                                            <option value="package 2">Package 2</option>
                                            <option value="package 3">Package 3</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label>Mikrotik/Radius</label>
                                        <select id="mikroTikRadius" name="mikroTikRadius" class="form-control">
                                            <option value="">Select</option>
                                            <option value="{{ $customer->mikroTikRadius }}" selected>{{ $customer->mikroTikRadius }}</option>
                                            <option value="Mikrotik Yes">Mikrotik Yes</option>
                                            <option value="Mikrotik No">Mikrotik No</option>
                                            <option value="Radius Yes">Radius Yes</option>
                                            <option value="Radius No">Radius No</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label>Date</label>
                                        <input type="date" name="startDate" value="{{ $customer->startDate }}" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- <div class="col">
                                        <label>Password</label>
                                        <input type="password" name="password" value="" class="form-control"
                                            >
                                    </div> -->
                                    <div class="col">
                                        <label>Expire Date</label>
                                        <input type="date" name="expireDate" value="{{ $customer->expireDate }}" class="form-control"
                                           >
                                    </div>
                                    <div class="col">

                                    </div>
                                    <div class="col">
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="box-header with-border" style="background-color: #0ab3b3;">
                                        <h3 class="box-title" style="color:#fff">Billing</h3><br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>Monthly Bill</label>
                                        <input type="number" name="monthlyBill" value="{{ $customer->monthlyBill }}" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>Line charge</label>
                                        <input type="number" name="lineCharge" value="{{ $customer->lineCharge }}" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>Discount</label>
                                        <input type="number" name="discount" value="{{ $customer->discount }}" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>Total</label>
                                        <input type="number" name="total" value="{{ $customer->total }}" class="form-control">
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="box-header with-border" style="background-color: #0ab3b3;">
                                        <h3 class="box-title" style="color:#fff">Product</h3><br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>Fiber Meter</label>
                                        <input type="text" name="fiberMeter" value="{{ $customer->fiberMeter }}" class="form-control"
                                            >
                                    </div>
                                    <div class="col">
                                        <label>Fiber Code</label>
                                        <input type="text" name="fiberCode" class="form-control" value="{{ $customer->fiberCode }}">
                                    </div>
                                    <div class="col">
                                        <label>Rj45 Meter</label>
                                        <input type="text" name="rjMeter" value="{{ $customer->rjMeter }}" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>Box No.</label>
                                        <select id="boxNo" name="boxNo" class="form-control">
                                            <option value="">Select box</option>
                                            <option value="{{ $customer->boxNo }}" selected>{{ $customer->boxNo }}</option>
                                            <option value="Box 1">Box 1</option>
                                            <option value="Box 2">Box 2</option>
                                            <option value="Box 3">Box 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>Device</label>
                                        <input type="text" name="device" value="{{ $customer->device }}" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>Device MAC</label>
                                        <input type="text" name="deviceMac" value="{{ $customer->deviceMac }}" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>Device Warrenty</label>
                                        <input type="text" name="deviceWarrenty" value="{{ $customer->deviceWarrenty }}" class="form-control"
                                           >
                                    </div>
                                    <div class="col">
                                        <label>Deposit Device TK</label>
                                        <input type="text" name="deposit" value="{{ $customer->deposit }}" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>Router</label>
                                        <input type="text" name="router" value="{{ $customer->router }}" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>Router MAC</label>
                                        <input type="text" name="routerMac" value="{{ $customer->routerMac }}" class="form-control"
                                            >
                                    </div>
                                    <div class="col">
                                        <label>Router Warrenty</label>
                                        <input type="text" name="routerWarranty" value="{{ $customer->routerWarranty }}" class="form-control"
                                           >
                                    </div>
                                    <div class="col">
                                        <label>Router Selling Price</label>
                                        <input type="number" name="sellingPrice" value="{{ $customer->sellingPrice }}" class="form-control">
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="box-header with-border" style="background-color: #0ab3b3;">
                                        <h3 class="box-title" style="color:#fff">Official Information</h3><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Reference</label>
                                        <input type="text" name="reference" value="{{ $customer->reference }}" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>Reseller</label>
                                        <select id="reseller" name="reseller" class="form-control">
                                            <option value="">Select Reseller</option>
                                            <option value="{{ $customer->reseller }}" selected>{{ $customer->reseller }}</option>
                                            <option value="Alamin">Alamin</option>
                                            <option value="Babor">Babor</option>
                                            <option value="Sagor">Sagor</option>
                                            <option value="Rahim">Rahim</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label>Note</label>
                                        <input type="text" name="note" value="{{ $customer->note }}" class="form-control"
                                            placeholder="Gentle Customer">
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>Assigned Lineman Name*</label>
                                        <select id="lineMan" name="lineMan" class="form-control">
                                            <option value="">Select</option>
                                            <option value="{{ $customer->lineMan }}" selected>{{ $customer->lineMan }}</option>
                                            <option value="Jakir">Jakir</option>
                                            <option value="Kabir">Kabir</option>
                                            <option value="Sazzad">Sazzad</option>
                                            <option value="Sumon">Sumon</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label>Security Deposit</label>
                                        <input type="number" name="securityDeposit"  value="{{ $customer->securityDeposit }}" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>Distributed Location Point</label>
                                        <input type="text" name="locationPoint" value="{{ $customer->locationPoint }}" class="form-control"
                                            placeholder="Distributed Location Point">
                                    </div>
                                </div>

                                <div class="row sbt-row">
                                    <div class="col offset-5">
                                        <button type="submit" name="btn" class="btn btn-info margin-rt">Update</button>
                                    </div>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>