<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Application Form</title>
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
                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <h6>{{ $error }}</h6>
                        @endforeach
                    </ul>
                </div>
                @endif --}}
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 ">
                <h2>Job Application Form</h2><br><hr>
                <form action="{{ route('applyjob') }}" method="post">
                    @csrf
                    <fieldset style="border: 1px solid black;paddind:15px">
                        <legend >Basic Detail</legend>
                        <div class="row p-3">
                            <div class="col-md-6">
                                <label for="firstname">First Name</label><span style="color: red;margin-left:4px;">*</span>
                                @error('firstname')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">
                                
                                
                                <label for="lastname">Last Name</label><span style="color: red;margin-left:4px;">*</span>
                                @error('lastname')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="text"  class="form-control" name="lastname" value="{{ old('lastname') }}">
                
                                <label for="email">Email</label><span style="color: red;margin-left:4px;">*</span>
                                @error('email')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                                
                                <label for="designation">Designation</label><span style="color: red;margin-left:4px;">*</span>
                                @error('designation')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="text" class="form-control" name="designation" value="{{ old('designation') }}">

                                <label for="dob">Date Of Birth</label><span style="color: red;margin-left:4px;">*</span>
                                @error('dob')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="date" class="form-control" name="dob" value="{{ old('dob') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="address1">Address 1</label><span style="color: red;margin-left:4px;">*</span>
                                @error('address1')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="text" class="form-control" name="address1" value="{{ old('address1') }}">
    
                                <label for="address2">Address 2</label>
                                <input type="text" class="form-control" name="address2" value="{{ old('address2') }}">
    
                                <label for="city">City</label><span style="color: red;margin-left:4px;">*</span>
                                @error('city')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="text" class="form-control" name="city" value="{{ old('city') }}">
    
                                <label for="state">State</label><span style="color: red;margin-left:4px;">*</span>
                                @error('state')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="text" class="form-control" name="state" value="{{ old('state') }}">
    
                                <label for="zipcode">Zip code</label><span style="color: red;margin-left:4px;">*</span>
                                @error('zipcode')
                                <span class="error" style="color: red;">{{ $message }}</span>
                                @enderror
                                <input type="text" class="form-control" name="zipcode" value="{{ old('zipcode') }}">
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
                                        <input type="text" class="form-control" name="sscboard" value="{{ old('sscboard') }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="sscpassingyear">Passiong Year</label>
                                        <input type="text"  class="form-control" name="sscpassingyear" value="{{ old('sscpassingyear') }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="sscpercentage">Percentage</label>
                                        <input type="text" class="form-control" name="sscpercentage" value="{{ old('sscpercentage') }}">
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
                                        <input type="text" class="form-control" name="hscboard" value="{{ old('hscboard') }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="hscpassingyear">Passiong Year</label>
                                        <input type="text"  class="form-control" name="hscpassingyear" value="{{ old('hscpassingyear') }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="hscpercentage">Percentage</label>
                                        <input type="text" class="form-control" name="hscpercentage" value="{{ old('hscpercentage') }}">
                                    </div>
                                </div>
                            </div>
                        </div><hr>
                        <div class="row p-3">
                            <div class="col-md-12">
                                <h6>bachelor degree</h6>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="bachelorboard">Name Of board</label>
                                        <input type="text" class="form-control" name="bachelorboard" value="{{ old('bachelorboard') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="bachelorpassingyear">Passing Year</label>
                                        <input type="text"  class="form-control" name="bachelorpassingyear" value="{{ old('bachelorpassingyear') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="bacheloruniversity">University</label>
                                        <input type="text" class="form-control" name="bacheloruniversity" value="{{ old('bacheloruniversity') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="bachelorpercentage">Percentage</label>
                                        <input type="text" class="form-control" name="bachelorpercentage" value="{{ old('bachelorpercentage') }}">
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
                                        <input type="text" class="form-control" name="masterboard" value="{{ old('masterboard') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="masterpassingyear">Passing Year</label>
                                        <input type="text"  class="form-control" name="masterpassingyear" value="{{ old('masterpassingyear') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="masteruniversity">University</label>
                                        <input type="text" class="form-control" name="masteruniversity" value="{{ old('masteruniversity') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="masterpercentage">Percentage</label>
                                        <input type="text" class="form-control" name="masterpercentage" value="{{ old('masterpercentage') }}">
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
                                <input type="text" class="form-control" name="companyname1" value="{{ old('companyname1') }}">
                            </div>
                            <div class="col-md-3">
                                <label for="designation1">Designation</label>
                                <input type="text"  class="form-control" name="designation1" value="{{ old('designation1') }}">
                            </div>
                            <div class="col-md-3">
                                <label for="fromdate1">From</label>
                                <input type="date" class="form-control" name="fromdate1" value="{{ old('fromdate1') }}">
                            </div>
                            <div class="col-md-3">
                                <label for="todate1">To</label>
                                <input type="date" class="form-control" name="todate1" value="{{ old('todate1') }}">
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-md-3">
                                <label for="companyname2">Company name</label>
                                <input type="text" class="form-control" name="companyname2" value="{{ old('companyname2') }}">
                            </div>
                            <div class="col-md-3">
                                <label for="designation2">Designation</label>
                                <input type="text"  class="form-control" name="designation2" value="{{ old('designation2') }}">
                            </div>
                            <div class="col-md-3">
                                <label for="fromdate2">From</label>
                                <input type="date" class="form-control" name="fromdate2" value="{{ old('fromdate2') }}">
                            </div>
                            <div class="col-md-3">
                                <label for="todate2">To</label>
                                <input type="date" class="form-control" name="todate2" value="{{ old('todate2') }}">
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-md-3">
                                <label for="companyname3">Company name</label>
                                <input type="text" class="form-control" name="companyname3" value="{{ old('companyname3') }}">
                            </div>
                            <div class="col-md-3">
                                <label for="designation3">Designation</label>
                                <input type="text"  class="form-control" name="designation3" value="{{ old('designation3') }}">
                            </div>
                            <div class="col-md-3">
                                <label for="fromdate3">From</label>
                                <input type="date" class="form-control" name="fromdate3" value="{{ old('fromdate3') }}">
                            </div>
                            <div class="col-md-3">
                                <label for="todate">To</label>
                                <input type="date" class="form-control" name="todate3" value="{{ old('todate3') }}">
                            </div>
                        </div>
                    </fieldset><br><br>

                    <div class="row ">
                        <div class="col-md-6">
                           
                            <fieldset style="border: 1px solid black;paddind:15px">
                                <legend>Language Known</legend>

                                <div class="row p-3">
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="hindi">
                                        <label for="hindi">Hindi</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="h_read">
                                        <label for="read">Read</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="h_write">        
                                        <label for="write">Write</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="h_speak">
                                        <label for="speak">Speak</label>&nbsp;&nbsp;
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="english">
                                        <label for="english">English</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="e_read">
                                        <label for="read">Read</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="e_write">        
                                        <label for="write">Write</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="e_speak">
                                        <label for="speak">Speak</label>&nbsp;&nbsp;
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="gujarati">
                                        <label for="gujarati">Gujarati</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="g_read">
                                        <label for="read">Read</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="g_write">        
                                        <label for="write">Write</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="languages[]" value="g_speak">
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
                                        <input type="checkbox"  name="technologies[php][]" value="php">
                                        <label for="php">PHP</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[php][]" value="p_beginer">
                                        <label for="beginer">Beginer</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[php][]" value="p_mideator">        
                                        <label for="mideator">Mideator</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[php][]" value="p_expert">
                                        <label for="expert">Expert</label>&nbsp;&nbsp;
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="technologies[mysql][]" value="mysql">
                                        <label for="mysql">Mysql</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[mysql][]" value="m_beginer">
                                        <label for="beginer">Beginer</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[mysql][]" value="m_mideator">        
                                        <label for="mideator">Mideator</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[mysql][]" value="m_expert">
                                        <label for="expert">Expert</label>&nbsp;&nbsp;
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="technologies[laravel][]" value="laravel">
                                        <label for="laravel">Laravel</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[laravel][]" value="l_beginer">
                                        <label for="beginer">Beginer</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[laravel][]" value="l_mideator">        
                                        <label for="mideator">Mideator</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[laravel][]" value="l_expert">
                                        <label for="expert">Expert</label>&nbsp;&nbsp;
                                    </div>
                                </div>   
                                <div class="row p-3">
                                    <div class="col-md-3">
                                        <input type="checkbox"  name="technologies[oracle][]" value="oracle">
                                        <label for="oracle">Oracle</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[oracle][]" value="o_beginer">
                                        <label for="oracle">Beginer</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[oracle][]" value="o_mideator">        
                                        <label for="oracle">Mideator</label>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio"  name="technologies[oracle][]" value="o_expert">
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
                                <input type="text" class="form-control" name="refname1" value="{{ old('refname1') }}">
                            </div>
                            <div class="col-md-4">
                                <label for="refcontact1">Contact Number</label>
                                <input type="text"  class="form-control" name="refcontact1" value="{{ old('refcontact1') }}">
                            </div>
                            <div class="col-md-4">
                                <label for="refrelation1">Relation</label>
                                <input type="text" class="form-control" name="refrelation1" value="{{ old('refrelation1') }}">
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-md-4">
                                <label for="refname2">Name</label>
                                <input type="text" class="form-control" name="refname2" value="{{ old('refname2') }}">
                            </div>
                            <div class="col-md-4">
                                <label for="refcontact2">Contact Number</label>
                                <input type="text"  class="form-control" name="refcontact2" value="{{ old('refcontact2') }}">
                            </div>
                            <div class="col-md-4">
                                <label for="refrelation2">Relation</label>
                                <input type="text" class="form-control" name="refrelation2" value="{{ old('refrelation2') }}">
                            </div>
                        </div>
                        
                            
                    </fieldset><br><br>

                    <fieldset style="border: 1px solid black;paddind:15px">
                        <legend>Preferances</legend>
                        <div class="row p-3">
                            <div class="col-md-4">
                                <label for="prelocation">Preferd location</label>
                                <select name="prelocation" class="form-control" id="">
                                    <option value="item1">item 1</option>
                                    <option value="item2">item 2</option>
                                    <option value="item3">item 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="prenoticeperiod">Notice period</label>
                                <input type="text"  class="form-control" name="prenoticeperiod" value="{{ old('prenoticeperiod') }}">

                                <label for="preectc">Expacted CTC</label>
                                <input type="text"  class="form-control" name="preectc" value="{{ old('preectc') }}">

                                <label for="precctc">Current CTC</label>
                                <input type="text"  class="form-control" name="precctc" value="{{ old('precctc') }}">
                            </div>
                            <div class="col-md-4">
                                <label for="department">Department</label>
                                <select name="predepartment" class="form-control" id="">
                                    <option value="development">Development</option>
                                    <option value="design">Design</option>
                                    <option value="marketing">Marketing</option>
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