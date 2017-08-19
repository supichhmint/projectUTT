@extends('layouts.headindex') @section('title', 'log in') @section('content')

<head>
  <link href="css/login.css" rel="stylesheet">
  <script src="js/regis.js"></script>
</head>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
 
    
<body>
  <div class="container">
    <!-- LOGIN FORM -->
    <div class="text-center" style="padding:100px 0">
      <div class="logo">register for new tourist</div>
      <!-- Main Form -->
       <div class="row">
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab"><i class="glyphicon glyphicon-folder-open"></i>
                        </span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <form role="form" action="/profileagency" method="POST" name="id">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h3><strong>Step 1 </strong> - Basic Information</h3>
                        <div class="step1">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">ชื่อจริง</label>
                                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="ชื่อจริง" onChange="myFirstname()">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">นามสกุล</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="นามสกุล" onChange="myLastname()">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">เพศ</label>
                                   <select id="gender" name="gender" onchange="myGender()">
                                        <option value="ชาย">ชาย
                                        <option value="หญิง">หญิง
                                        </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">อีเมลล์</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="อีเมลล์" onChange="myEmail()">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">รหัสผ่าน</label>
                                    <input type="text" class="form-control" name="	password" id="password" placeholder="กรุณากรอกอีเมลล์เพื่อยืนยันอีกครั้ง" >
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3><strong>Step 2 </strong>Information</h3>
                        <div class="step2">
                            <div class="row" id='controls'>
                                <div class="col-md-6">
                                    <label>รหัสประชาชน</label>
                                    <input class="form-control start_day" name="nationnal_id" type="text" 
                                         id="nationnal" oninvalid="this.setCustomValidity('กรุณากรอกวันเริ่มเดินทาง')"
                                        oninput="setCustomValidity('')" placeholder="รหัสประชาชน" onChange="myNationnal()"> 
                                </div>
                                <div class="col-md-6">
                                    <label>วันเกิด</label>
                                    <input class="form-control start_day" name="birthday" id="birthday" type="text" 
                                         id="nationnal" oninvalid="this.setCustomValidity('กรุณากรอกวันเริ่มเดินทาง')"
                                        oninput="setCustomValidity('')" placeholder="รหัสประชาชน" onChange="myBirthday()"> 
                                </div>
                                <div class="col-md-6">
                                    <label>ที่อยู่</label>
                                    <input class="form-control Departure_Date" name="address" id="address" type="text" oninvalid="this.setCustomValidity('กรุณากรอกวันสิ้นสุดการเดินทาง')"
                                        oninput="setCustomValidity('')" placeholder="ที่อยู่" onChange="myAddress()">
                                </div>
                                <br>
                                <div class="col-md-3">
                                    <label>จังหวัด</label>
                                    <input class="form-control Departure_Date" name="country" id="country" type="text" oninvalid="this.setCustomValidity('กรุณากรอกจังหวัด)"
                                        oninput="setCustomValidity('')" placeholder="จังหวัด" onChange="myCountry()">
                                </div>
                                <div class="col-md-3">
                                    <label>รหัสไปรษณีย์</label>
                                    <input class="form-control Departure_Date" name="zipcode" id="zipcode" type="text" oninvalid="this.setCustomValidity('กรุณากรอกวันสิ้นสุดการเดินทาง')"
                                        oninput="setCustomValidity('')" placeholder="วันสิ้นสุดการเดินทาง" onChange="myZipcode()">
                                </div>
                                <div class="col-md-3">
                                    <label>เบอร์โทรศัพท์</label>
                                    <input class="form-control Departure_Date" name="phone" id="phone" type="text" oninvalid="this.setCustomValidity('กรุณากรอกวันสิ้นสุดการเดินทาง')"
                                        oninput="setCustomValidity('')" placeholder="เบอร์โทรศัพท์" onChange="myPhone()">
                                </div>
                            </div>
                            

                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Complete</h3>
                        

                        <hr>
                        <div class="row" >
                            <div class="col-md-5">
                                <label>ชื่อจริง</label>

                                <p id="firstn"></p>
                            </div>
                            <div class="col-md-5">
                                <label>นามสกุล</label>
                                <p id="lastn"></p>
                            </div>
                            <div class="col-md-5">
                                <label>เพศ</label>
                                <p id="gen"></p>
                            </div>
                            <div class="col-md-5">
                                <label>อีเมลล์</label>

                                <p id="mail"></p>
                            </div>
                            <div class="col-md-5">
                                <label>รหัสประชาชน</label>

                                <p id="nation"></p>
                            </div>
                            <div class="col-md-5">
                                <label>วันเกิด</label>
                                <p id="birth"></p>
                            </div>
                            <div class="col-md-5">
                                <label>ที่อยู่</label>
                                <p id="adr"></p>
                            </div>
                            <br>
                            <div class="col-md-5">
                                <label>จังหวัด</label>
                                <p id="coun"></p>
                            </div>
                            <div class="col-md-5">
                                <label>รหัสไปรษณีย์</label>
                                <p id="zip"></p>
                            </div>
                            <div class="col-md-2">
                                <label>เบอร์โทรศัพท์</label>
                                <p id="phonen"></p>
                            </div>
                        </div>
                        
                        <br>

                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="submit" class="btn btn-primary">ตกลง</button></li>

                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
      <!-- <div class="login-form-1">
        <form id="register-form" class="text-left">
          <div class="login-form-main-message"></div>
          <div class="main-login-form">
            <div class="login-group">
              <div class="form-group">
                <label for="reg_username" class="sr-only">Email address</label>
                <input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username">
              </div>
              <div class="form-group">
                <label for="reg_password" class="sr-only">Password</label>
                <input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
              </div>
              <div class="form-group">
                <label for="reg_password_confirm" class="sr-only">Password Confirm</label>
                <input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
              </div>

              <div class="form-group">
                <label for="reg_email" class="sr-only">Email</label>
                <input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email">
              </div>
              <div class="form-group">
                <label for="reg_fullname" class="sr-only">Full Name</label>
                <input type="text" class="form-control" id="reg_fullname" name="reg_fullname" placeholder="full name">
              </div>

              <div class="form-group login-group-checkbox">
                <input type="radio" class="" name="reg_gender" id="male" placeholder="username">
                <label for="male">male</label>

                <input type="radio" class="" name="reg_gender" id="female" placeholder="username">
                <label for="female">female</label>
              </div>

              <div class="form-group login-group-checkbox">
                <input type="checkbox" class="" id="reg_agree" name="reg_agree">
                <label for="reg_agree">i agree with <a href="#">terms</a></label>
              </div>
            </div>
            <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
          </div>
          <div class="etc-login-form">
            <p>already have an account? <a href="#">login here</a></p>
          </div>
        </form>
      </div> -->
      <!-- end:Main Form -->
    </div>
    </div>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    $(document).ready(function () {
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }
     function myFirstname() {
        var fn = document.getElementById("firstname").value;
        document.getElementById('firstn').innerHTML = fn;
    }
    function myLastname() {
        var ln = document.getElementById("lastname").value;
        document.getElementById('lastn').innerHTML = ln;
    }
    function myGender() {
        var fn = document.getElementById("gender").value;
        document.getElementById('gen').innerHTML = fn;
    }
    function myEmail() {
        var fn = document.getElementById("email").value;
        document.getElementById('mail').innerHTML = fn;
    }
    function myNationnal() {
        var fn = document.getElementById("nationnal").value;
        document.getElementById('nation').innerHTML = fn;
    }
    function myAddress() {
        var fn = document.getElementById("address").value;
        document.getElementById('adr').innerHTML = fn;
    }
    function myCountry() {
        var fn = document.getElementById("country").value;
        document.getElementById('coun').innerHTML = fn;
    }
    function myZipcode() {
        var fn = document.getElementById("zipcode").value;
        document.getElementById('zip').innerHTML = fn;
    }
    function myPhone() {
        var fn = document.getElementById("phone").value;
        document.getElementById('phonen').innerHTML = fn;
    }
    function myBirthday() {
        var fn = document.getElementById("birthday").value;
        document.getElementById('birth').innerHTML = fn;
    }

</script>




@endsection

</body>

</html>