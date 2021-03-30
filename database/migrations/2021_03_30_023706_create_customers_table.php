<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('contact_person')->nullable();
            $table->string('ident_no');
            $table->string('designation')->nullable();
            $table->double('mobile_no');
            $table->double('alt_phone')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('status');
            $table->string('district');
            $table->string('thana');
            $table->string('userType');
            $table->string('area');
            $table->string('address')->nullable();
            $table->string('conectionType');
            $table->string('mikrotikName');
            $table->string('billingType')->nullable();
            $table->string('idNo');
            $table->string('package');
            $table->string('mikroTikRadius')->nullable();
            $table->date('startDate')->nullable();
            $table->string('password')->nullable();
            $table->date('expireDate')->nullable();
            $table->double('monthlyBill', 8, 2)->default('0');
            $table->double('lineCharge', 8, 2)->default('0');
            $table->double('discount', 8, 2)->default('0');
            $table->double('total', 8, 2)->default('0');
            $table->string('fiberMeter')->nullable();
            $table->string('fiberCode')->nullable();
            $table->string('rjMeter')->nullable();
            $table->string('boxNo')->nullable();
            $table->string('device')->nullable();
            $table->string('deviceMac')->nullable();
            $table->string('deviceWarrenty',4)->default('0');
            $table->double('deposit', 8, 2)->default('0');
            $table->string('router',20)->default('0');
            $table->string('routerMac',20)->default('0');
            $table->string('routerWarranty')->default('0');
            $table->double('sellingPrice', 8, 2)->default('0');
            $table->string('reference')->nullable();
            $table->string('reseller')->nullable();
            $table->string('note')->nullable();
            $table->string('lineMan')->nullable();
            $table->double('securityDeposit', 8, 2)->default('0');
            $table->string('locationPoint')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
