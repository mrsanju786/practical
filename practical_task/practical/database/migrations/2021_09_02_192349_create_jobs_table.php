<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
  
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->string('designation')->nullable();
            $table->date('dob')->nullable();
            $table->text('address1')->nullable();
            $table->text('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('sscboard')->nullable();
            $table->string('sscpassingyear')->nullable();
            $table->string('sscpercentage')->nullable();
            $table->string('hscboard')->nullable();
            $table->string('hscpassingyear')->nullable();
            $table->string('hscpercentage')->nullable();
            $table->string('bachelorboard')->nullable();
            $table->string('bachelorpassingyear')->nullable();
            $table->string('bacheloruniversity')->nullable();
            $table->string('bachelorpercentage')->nullable();
            $table->string('masterboard')->nullable();
            $table->string('masterpassingyear')->nullable();
            $table->string('masteruniversity')->nullable();
            $table->string('masterpercentage')->nullable();
            $table->string('companyname1')->nullable();
            $table->string('designation1')->nullable();
            $table->date('fromdate1')->nullable()->default(null);
            $table->date('todate1')->nullable()->default(null);
            $table->string('companyname2')->nullable();
            $table->string('designation2')->nullable();
            $table->date('fromdate2')->nullable()->default(null);
            $table->date('todate2')->nullable()->default(null);
            $table->string('companyname3')->nullable();
            $table->string('designation3')->nullable();
            $table->date('fromdate3')->nullable()->default(null);
            $table->date('todate3')->nullable()->default(null);
            $table->string('languages')->nullable();
            $table->string('technologies')->nullable();
            $table->string('refname1')->nullable();
            $table->string('refcontact1')->nullable();
            $table->string('refrelation1')->nullable();
            $table->string('refname2')->nullable();
            $table->string('refcontact2')->nullable();
            $table->string('refrelation2')->nullable();
            $table->string('prelocation')->nullable();
            $table->string('prenoticeperiod')->nullable();
            $table->string('preectc')->nullable();
            $table->string('precctc')->nullable();
            $table->string('predepartment')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
