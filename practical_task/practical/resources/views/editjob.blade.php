<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Job Application Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <style>
        
        legend {
            border: 1px solid #000;
            border-radius: 4px;
            font-size: 17px;
            padding:10px;
            width: auto;
        }

    </style>
</head>
<body>
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 justify-content-md-center">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <h6>{{ $error }}</h6>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 ">
                <h2>Edit Job Application Form</h2><br><hr>
                <form action="{{ url('jobupdate/'.$job['id']) }}" method="post">
                    @csrf
                    <fieldset style="border: 1px solid black;paddind:15px">
                        <legend >Basic Detail</legend>
                        <div class="row p-3">
                            <div class="col-md-6">
                                <label for="firstname">First Name</label><span style="color: red;margin-left:4px;">*</span>
                                @error('firstname')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="text" class="form-control" name="firstname" value="{{ $job['firstname'] }}">
                                
                                <label for="lastname">Last Name</label><span style="color: red;margin-left:4px;">*</span>
                                @error('lastname')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="text"  class="form-control" name="lastname" value="{{ $job['lastname'] }}">
                
                                <label for="email">Email</label><span style="color: red;margin-left:4px;">*</span>
                                @error('email')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="text" class="form-control" name="email" value="{{ $job['email'] }}">
                                
                                <label for="designation">Designation</label><span style="color: red;margin-left:4px;">*</span>
                                @error('designation')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="text" class="form-control" name="designation" value="{{ $job['designation'] }}">

                                <label for="dob">Date Of Birth</label><span style="color: red;margin-left:4px;">*</span>
                                @error('dob')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="date" class="form-control" name="dob" value="{{ $job['dob'] }}">
                            </div>
                            <div class="col-md-6">
                                <label for="address1">Address 1</label><span style="color: red;margin-left:4px;">*</span>
                                @error('address1')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="text" class="form-control" name="address1" value="{{ $job['address1'] }}">
    
                                <label for="address2">Address 2</label>
                                <input type="text" class="form-control" name="address2" value="{{ $job['address2'] }}">
    
                                <label for="city">City</label><span style="color: red;margin-left:4px;">*</span>
                                @error('city')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="text" class="form-control" name="city" value="{{ $job['city'] }}">
    
                                <label for="state">State</label><span style="color: red;margin-left:4px;">*</span>
                                @error('state')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="text" class="form-control" name="state" value="{{ $job['state'] }}">
    
                                <label for="zipcode">Zip code</label><span style="color: red;margin-left:4px;">*</span>
                                @error('zipcode')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="text" class="form-control" name="zipcode" value="{{ $job['zipcode'] }}">
                            </div>
                        </div>
                           
                    </fieldset><br><br>

                    <fieldset style="border: 1px solid black;paddind:15px">
                        <legend>Education Detail</legend>
                        <div class="row p-3">
                            <div class="col-md-12">
                                <h6>SSC result</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="sscboard">Name Of board</label>
                                        <input type="text" class="form-control" name="sscboard" value="{{ $job['sscboard'] }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="sscpassingyear">Passiong Year</label>
                                        <input type="text"  class="form-control" name="sscpassingyear" value="{{ $job['sscpassingyear'] }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="sscpercentage">Percentage</label>
                                        <input type="text" class="form-control" name="sscpercentage" value="{{ $job['sscpercentage'] }}">
                                    </div>
                                </div>
                            </div>
                        </div><hr>
                        <div class="row p-3">
                            <div class="col-md-12">
                                <h6>HSC/Diploma Result</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="hscboard">Name Of board</label>
                                        <input type="text" class="form-control" name="hscboard" value="{{ $job['hscboard'] }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="hscpassingyear">Passiong Year</label>
                                        <input type="text"  class="form-control" name="hscpassingyear" value="{{ $job['hscpassingyear'] }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="hscpercentage">Percentage</label>
                                        <input type="text" class="form-control" name="hscpercentage" value="{{ $job['hscpercentage'] }}">
                                    </div>
                                </div>
                            </div>
                        </div><hr>
                        <div class="row p-3">
                            <div class="col-md-12">
                                <h6>bachelor degree</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="bachelorboard">Name Of board</label>
                                        <input type="text" class="form-control" name="bachelorboard" value="{{ $job['bachelorboard'] }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="bachelorpassingyear">Passing Year</label>
                                        <input type="text"  class="form-control" name="bachelorpassingyear" value="{{ $job['bachelorpassingyear'] }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="bacheloruniversity">University</label>
                                        <input type="text" class="form-control" name="bacheloruniversity" value="{{ $job['bacheloruniversity'] }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="bachelorpercentage">Percentage</label>
                                        <input type="text" class="form-control" name="bachelorpercentage" value="{{ $job['bachelorpercentage'] }}">
                                    </div>
                                </div>
                            </div>
                        </div><hr>
                        <div class="row p-3">
                            <div class="col-md-12">
                                <h6>Master degree</h6>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="masterboard">Name Of Board</label>
                                        <input type="text" class="form-control" name="masterboard" value="{{ $job['masterboard'] }}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="masterpassingyear">Passing Year</label>
                                        <input type="text"  class="form-control" name="masterpassingyear" value="{{ $job['masterpassingyear'] }}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="masteruniversity">University</label>
                                        <input type="text" class="form-control" name="masteruniversity" value="{{ $job['masteruniversity'] }}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="masterpercentage">Percentage</label>
                                        <input type="text" class="form-control" name="masterpercentage" value="{{ $job['masterpercentage'] }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </fieldset><br><br>

                    <fieldset style="border: 1px solid black;paddind:15px">
                        <legend>Work Experience</legend>
                        <div class="row p-3">
                            <div class="col-md-3">
                                <label for="companyname1">Company name</label>
                                <input type="text" class="form-control" name="companyname1" value="{{ $job['companyname1'] }}">
                            </div>
                            <div class="col-md-3">
                                <label for="designation1">Designation</label>
                                <input type="text"  class="form-control" name="designation1" value="{{ $job['designation1'] }}">
                            </div>
                            <div class="col-md-3">
                                <label for="fromdate1">From</label>
                                <input type="date" class="form-control" name="fromdate1" value="{{ $job['fromdate1'] }}">
                            </div>
                            <div class="col-md-3">
                                <label for="todate1">To</label>
                                <input type="date" class="form-control" name="todate1" value="{{ $job['todate1'] }}">
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-md-3">
                                <label for="companyname2">Company name</label>
                                <input type="text" class="form-control" name="companyname2" value="{{ $job['companyname2'] }}">
                            </div>
                            <div class="col-md-3">
                                <label for="designation2">Designation</label>
                                <input type="text"  class="form-control" name="designation2" value="{{ $job['designation2'] }}">
                            </div>
                            <div class="col-md-3">
                                <label for="fromdate2">From</label>
                                <input type="date" class="form-control" name="fromdate2" value="{{ $job['fromdate2'] }}">
                            </div>
                            <div class="col-md-3">
                                <label for="todate2">To</label>
                                <input type="date" class="form-control" name="todate2" value="{{ $job['todate2'] }}">
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-md-3">
                                <label for="companyname3">Company name</label>
                                <input type="text" class="form-control" name="companyname3" value="{{ $job['companyname3'] }}">
                            </div>
                            <div class="col-md-3">
                                <label for="designation3">Designation</label>
                                <input type="text"  class="form-control" name="designation3" value="{{ $job['designation3'] }}">
                            </div>
                            <div class="col-md-3">
                                <label for="fromdate3">From</label>
                                <input type="date" class="form-control" name="fromdate3" value="{{ $job['fromdate3'] }}">
                            </div>
                            <div class="col-md-3">
                                <label for="todate">To</label>
                                <input type="date" class="form-control" name="todate3" value="{{ $job['todate3'] }}">
                            </div>
                        </div>
                    </fieldset><br><br>

                    <div class="row ">
                        <div class="col-md-6">
                           
                            <fieldset style="border: 1px solid black;paddind:15px">
                                <legend>Language Known</legend>
                                    
                                <div class="row p-3">
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="hindi" @if(($languages) && in_array("hindi", $languages) ) checked @endif>
                                        <label for="hindi">Hindi</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="h_read" @if(($languages) && in_array("h_read", $languages)) checked @endif>
                                        <label for="read">Read</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="h_write" @if(($languages) && in_array("h_write", $languages)) checked @endif>        
                                        <label for="write">Write</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="h_speak" @if(($languages) && in_array("h_speak", $languages)) checked @endif>
                                        <label for="speak">Speak</label>&nbsp;&nbsp;
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="english"  @if(($languages) && in_array("english", $languages)) checked @endif>
                                        <label for="english">English</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="e_read"  @if(($languages) && in_array("e_read", $languages)) checked @endif>
                                        <label for="read">Read</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="e_write"  @if(($languages) && in_array("e_write", $languages)) checked @endif>        
                                        <label for="write">Write</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="e_speak"  @if(($languages) && in_array("e_speak", $languages)) checked @endif>
                                        <label for="speak">Speak</label>&nbsp;&nbsp;
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="gujarati"  @if(($languages) && in_array("gujarati", $languages)) checked @endif>
                                        <label for="gujarati">Gujarati</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="g_read"  @if(($languages) && in_array("g_read", $languages)) checked @endif>
                                        <label for="read">Read</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="g_write"  @if(($languages) && in_array("g_write", $languages)) checked @endif>        
                                        <label for="write">Write</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="g_speak"  @if(($languages) && in_array("g_speak", $languages)) checked @endif>
                                        <label for="speak">Speak</label>&nbsp;&nbsp;
                                    </div>
                                    
                                </div>
                                 
                            </fieldset><br><br>
                        </div>
                        <div class="col-md-6">
                            <fieldset style="border: 1px solid black;paddind:15px">
                                <legend>Technologies you know</legend>
                                <div class="row p-3">
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="technologies[php][]" value="php"  @if((!empty($technologies->php)) && $technologies->php[0] == 'php') checked @endif>
                                        <label for="php">PHP</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[php][]" value="p_beginer" @if((!empty($technologies->php)) && $technologies->php[1] == 'p_beginer') checked @endif>
                                        <label for="beginer">Beginer</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[php][]" value="p_mideator" @if((!empty($technologies->php)) && $technologies->php[1] == 'p_mideator') checked @endif>        
                                        <label for="mideator">Mideator</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[php][]" value="p_expert" @if((!empty($technologies->php)) && $technologies->php[1] == 'p_expert') checked @endif>
                                        <label for="expert">Expert</label>&nbsp;&nbsp;
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="technologies[mysql][]" value="mysql" @if((!empty($technologies->mysql)) && $technologies->mysql[0] == 'mysql') checked @endif>
                                        <label for="mysql">Mysql</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[mysql][]" value="m_beginer" @if((!empty($technologies->mysql)) && $technologies->mysql[1] == 'm_beginer') checked @endif>
                                        <label for="beginer">Beginer</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[mysql][]" value="m_mideator" @if((!empty($technologies->mysql)) && $technologies->mysql[1] == 'm_mideator') checked @endif>        
                                        <label for="mideator">Mideator</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[mysql][]" value="m_expert" @if((!empty($technologies->mysql)) && $technologies->mysql[1] == 'm_expert') checked @endif>
                                        <label for="expert">Expert</label>&nbsp;&nbsp;
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="technologies[laravel][]" value="laravel" @if((!empty($technologies->laravel)) && $technologies->laravel[0] == 'laravel') checked @endif>
                                        <label for="laravel">Laravel</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[laravel][]" value="l_beginer" @if((!empty($technologies->laravel)) && $technologies->laravel[1] == 'l_beginer') checked @endif>
                                        <label for="beginer">Beginer</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[laravel][]" value="l_mideator" @if((!empty($technologies->laravel)) && $technologies->laravel[1] == 'l_mideator') checked @endif>        
                                        <label for="mideator">Mideator</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[laravel][]" value="l_expert" @if((!empty($technologies->laravel)) && $technologies->laravel[1] == 'l_expert') checked @endif>
                                        <label for="expert">Expert</label>&nbsp;&nbsp;
                                    </div>
                                </div>   
                                <div class="row p-3">
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="technologies[oracle][]" value="oracle" @if((!empty($technologies->oracle)) && $technologies->oracle[0] == 'oracle') checked @endif>
                                        <label for="oracle">Oracle</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[oracle][]" value="o_beginer" @if((!empty($technologies->oracle)) && $technologies->oracle[1] == 'o_beginer') checked @endif>
                                        <label for="oracle">Beginer</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[oracle][]" value="o_mideator" @if((!empty($technologies->oracle)) && $technologies->oracle[1] == 'o_mideator') checked @endif>        
                                        <label for="oracle">Mideator</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[oracle][]" value="o_expert" @if((!empty($technologies->oracle)) && $technologies->oracle[1] == 'o_expert') checked @endif>
                                        <label for="oracle">Expert</label>&nbsp;&nbsp;
                                    </div>
                                </div>   
                            </fieldset><br><br>
                        </div>
                    </div>


                    <fieldset style="border: 1px solid black;paddind:15px">
                        <legend>Referance Contact</legend>
                        <div class="row p-3">
                            <div class="col-md-4">
                                <label for="refname1">Name</label>
                                <input type="text" class="form-control" name="refname1" value="{{ $job['refname1'] }}">
                            </div>
                            <div class="col-md-4">
                                <label for="refcontact1">Contact Number</label>
                                <input type="text"  class="form-control" name="refcontact1" value="{{ $job['refcontact1'] }}">
                            </div>
                            <div class="col-md-4">
                                <label for="refrelation1">Relation</label>
                                <input type="text" class="form-control" name="refrelation1" value="{{ $job['refrelation1'] }}">
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-md-4">
                                <label for="refname2">Name</label>
                                <input type="text" class="form-control" name="refname2" value="{{ $job['refname2'] }}">
                            </div>
                            <div class="col-md-4">
                                <label for="refcontact2">Contact Number</label>
                                <input type="text"  class="form-control" name="refcontact2" value="{{ $job['refcontact2'] }}">
                            </div>
                            <div class="col-md-4">
                                <label for="refrelation2">Relation</label>
                                <input type="text" class="form-control" name="refrelation2" value="{{ $job['refrelation2'] }}">
                            </div>
                        </div>
                        
                            
                    </fieldset><br><br>

                    <fieldset style="border: 1px solid black;paddind:15px">
                        <legend>Preferances</legend>
                        <div class="row p-3">
                            <div class="col-md-4">
                                <label for="prelocation">Preferd location</label>
                                <select name="prelocation" class="form-control" id="">
                                    <option value="item1" @if($job['prelocation'] == 'item1' ) selected @endif>item 1</option>
                                    <option value="item2" @if($job['prelocation'] == 'item2' ) selected @endif>item 2</option>
                                    <option value="item3" @if($job['prelocation'] == 'item3' ) selected @endif>item 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="prenoticeperiod">Notice period</label>
                                <input type="text"  class="form-control" name="prenoticeperiod" value="{{ $job['prenoticeperiod'] }}">

                                <label for="preectc">Expacted CTC</label>
                                <input type="text"  class="form-control" name="preectc" value="{{ $job['preectc'] }}">

                                <label for="precctc">Current CTC</label>
                                <input type="text"  class="form-control" name="precctc" value="{{ $job['precctc'] }}">
                            </div>
                            <div class="col-md-4">
                                <label for="department">Department</label>
                                <select name="predepartment" class="form-control" id="">
                                    <option value="development" @if($job['predepartment'] == 'development' ) selected @endif>Development</option>
                                    <option value="design" @if($job['predepartment'] == 'design' ) selected @endif>Design</option>
                                    <option value="marketing" @if($job['predepartment'] == 'marketing' ) selected @endif>Marketing</option>
                                </select>
                            </div>
                        </div>      
                        
                    </fieldset>
                    <br>
                    <br>
                    <input type="submit" class="btn btn-primary float-right">
                    <br>
                    <br>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>