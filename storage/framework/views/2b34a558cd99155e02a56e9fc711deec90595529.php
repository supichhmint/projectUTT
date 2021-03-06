 <?php $__env->startSection('title', 'Page Title'); ?> <?php $__env->startSection('content'); ?>
<div class="container">
    <header2>
        <h2>Add Trip</h2>
    </header2>
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
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                            <i class="glyphicon glyphicon-picture"></i>
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
            <form role="form" action="/agency" method="POST" name="id">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h3><strong>Step 1 </strong> - Basic Information</h3>
                        <div class="step1">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Trip Name</label>
                                    <input type="text" class="form-control" name="trips_name" id="tripName" placeholder="Trip Name" onChange="myTripname()">
                                </div>
                                <div class="col-md-2">
                                    <label for="exampleInputEmail1">Day(s)</label>
                                    <input type="text" class="form-control" name="trip_nday" id="tripDay" placeholder="Day(s)" onChange="myTripDay()">
                                </div>
                                <div class="col-md-2">
                                    <label for="exampleInputEmail1">Night(s)</label>
                                    <input type="text" class="form-control" name="trip_nnight" id="tripNight" placeholder="Night(s)" onChange="myTripnight()">
                                </div>
                                <div class="col-md-2">
                                    <label for="exampleInputEmail1">Meal(s)</label>
                                    <input type="text" class="form-control" name="trip_meal" id="tripMeal" placeholder="Meal(s)" onChange="myTripmeal()">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea rows="5" cols="10" class="form-control" name="trip_description" id="tripdescription" required data-validation-required-message="Please enter your description"
                                        maxlength="999" style="resize:none" onChange="myTripdescription()"></textarea>
                                </div>

                                <div class="col-md-3">
                                    <label for="exampleInputEmail1">Province</label>
                                    <input type="text" class="form-control" name="trip_province" id="tripPro" placeholder="จังหวัด" onChange="myTrippro()">
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3><strong>Step 2 </strong> - Round Information</h3>
                        <div class="step2">
                            <div class="row" id='controls'>
                                <div class="col-md-3">
                                    <label>วันเริ่มเดินทาง</label>
                                    <input class="form-control start_day" name="start_date[]" type="date" oninvalid="this.setCustomValidity('กรุณากรอกวันเริ่มเดินทาง')"
                                        oninput="setCustomValidity('')" placeholder="วันเริ่มเดินทาง" onChange="myStartdate()">
                                </div>
                                <div class="col-md-3">
                                    <label>วันสิ้นสุดการเดินทาง</label>
                                    <input class="form-control Departure_Date" name="departure_date[]" type="date" oninvalid="this.setCustomValidity('กรุณากรอกวันสิ้นสุดการเดินทาง')"
                                        oninput="setCustomValidity('')" placeholder="วันสิ้นสุดการเดินทาง" onChange="myDepardate()">
                                </div>
                                <div class="col-md-2">
                                    <label>ราคาของเด็ก</label>
                                    <input type="text" class="form-control" name="price_child[]" oninvalid="this.setCustomValidity(ราคาเด็ก)" oninput="setCustomValidity('')"
                                        placeholder="ราคาของเด็ก" onChange="myPchild()">
                                </div>
                                <div class="col-md-2">
                                    <label>ราคาของผู้ใหญ่</label>
                                    <input type="text" class="form-control" name="price_adult[]" oninvalid="this.setCustomValidity('กรุณากรอกราคาของผู้ใหญ่')"
                                        oninput="setCustomValidity('')" placeholder="ราคาของผู้ใหญ่" onChange="myPadult()">
                                </div>
                                <div class="col-md-2">
                                    <label>จำนวนที่นั่งทั้งหมด </label>
                                    <input type="text" class="form-control" name="amount_seats[]" oninvalid="this.setCustomValidity('กรุณากรอกจำนวนที่นั่ง')"
                                        oninput="setCustomValidity('')" placeholder="จำนวนที่นั่ง" onChange="myAseats()">
                                </div>

                            </div>
                            <label>
                            <button type="button" class="btn btn-primary" id='btn' >เพิ่มรอบถัดไป</button>
                            </label>

                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Step 3 - Activity information</h3>
                        <div class="row">
                            <div class="col-md-12" id='days'>
                                <label>รายละเอียดทัวร์</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>วันที่</label>
                                        <input class="form-control" name='schedule_day[]' type="text" value="1" onChange="mySday()">
                                    </div>
                                    <div class="col-md-3">
                                        <label>เวลา</label>
                                        <input class="form-control" name='schedule_time[]' type="time" onChange="myStime()">
                                    </div>
                                    <div class="col-md-3">
                                        <label>สถานที่</label>
                                        <input class="form-control" name='schedule_place[]' type="text" onChange="mySplace()">
                                    </div>
                                    <div class="col-md-3">
                                        <label>รายละเอียด</label>
                                        <input class="form-control" name='schedule_description[]' type="text" onChange="mySdes()">
                                    </div>

                                </div>


                            </div>
                            <label><button type="button" class="btn btn-primary" id='nextday'>เพิ่มกิจกรรมถัดไป</button></label>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>

                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Complete</h3>
                        <p>You have successfully completed all steps.</p>

                        <table class="table">
                            <tr>
                                <td> ชื่อทริป : </td>
                                <td id="name"></td>
                            </tr>
                            <tr>
                                <td> วัน : </td>
                                <td id="day"></td>
                            </tr>
                            <tr>
                                <td> คืน : </td>
                                <td id="night"></td>
                            </tr>
                            <tr>
                                <td> จังหวัด : </td>
                                <td id="prov"></td>
                            </tr>
                            <tr>
                                <td> รายละเอียด : </td>
                                <td id="tripdes"></td>
                            </tr>
                        </table>
                        <hr>
                        <div class="row" >
                            <div class="col-md-2">
                                <label>วันเริ่มเดินทาง</label>

                                <p id="startdate"></p>
                            </div>
                            <div class="col-md-2">
                                <label>วันสิ้นสุดการเดินทาง</label>

                                <p id="depdate"></p>
                            </div>
                            <div class="col-md-2">
                                <label>ราคาของเด็ก</label>

                                <p id="pchild"></p>
                            </div>
                            <div class="col-md-2">
                                <label>ราคาของผู้ใหญ่</label>

                                <p id="padult"></p>
                            </div>
                            <div class="col-md-2">
                                <label>จำนวนที่นั่งทั้งหมด </label>

                                <p id="aseat"></p>
                            </div>

                        </div>


                        <hr>
                        <div class="row" >
                            <div class="col-md-3">
                                <label>วันที่</label>
                                <p id="date"></p>
                            </div>
                            <div class="col-md-3">
                                <label>เวลา</label>
                                <p id="time"></p>
                            </div>
                            <div class="col-md-3">
                                <label>สถานที่</label>
                                <p id="pleace"></p>
                            </div>
                            <div class="col-md-3">
                                <label>รายละเอียด</label>
                                <p id="desa"></p>
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
</div>
<script>
    function myTripname() {
        var x = document.getElementById("tripName").value;
        document.getElementById("name").innerHTML = x;
    }

    function myTripDay() {
        var x = document.getElementById("tripDay").value;
        document.getElementById("day").innerHTML = x;
    }

    function myTripnight() {
        var x = document.getElementById("tripNight").value;
        document.getElementById("night").innerHTML = x;
    }

    function myTrippro() {
        var x = document.getElementById("tripPro").value;
        document.getElementById("prov").innerHTML = x;
    }

    function myTripmeal() {
        var x = document.getElementById("tripMeal").value;
        document.getElementById("meal").innerHTML = x;
    }

    function myTripdescription() {
        var x = document.getElementById("tripdescription").value;
        document.getElementById("tripdes").innerHTML = x;
    }

    function myStartdate() {
        var date = document.getElementsByName("start_date[]");
        var text = "";
        var i;
        for (i = 0; i < date.length; i++) {
            text += date[i].value + "<hr>";
        }
        document.getElementById('startdate').innerHTML = text;
    }

    function myDepardate() {
        var date = document.getElementsByName("departure_date[]");
        var text = "";
        var i;
        for (i = 0; i < date.length; i++) {
            text += date[i].value + "<hr>";
        }
        document.getElementById('depdate').innerHTML = text;

    }

    function myPchild() {
        var date = document.getElementsByName("price_child[]");
        var text = "";
        var i;
        for (i = 0; i < date.length; i++) {
            text += date[i].value + "<hr>";
        }
        document.getElementById('pchild').innerHTML = text;

    }

    function myPadult() {
        var date = document.getElementsByName("price_adult[]");
        var text = "";
        var i;
        for (i = 0; i < date.length; i++) {
            text += date[i].value + "<hr>";
        }
        document.getElementById('padult').innerHTML = text;

    }

    function myAseats() {
        var date = document.getElementsByName("amount_seats[]");
        var text = "";
        var i;
        for (i = 0; i < date.length; i++) {
            text += date[i].value + "<hr>";
        }
        document.getElementById('aseat').innerHTML = text;

    }

    function mySday() {
        var date = document.getElementsByName("schedule_day[]");
        var text = "";
        var i;
        for (i = 0; i < date.length; i++) {
            text += date[i].value + "<hr>";
        }
        document.getElementById('date').innerHTML = text;

    }

    function myStime() {
        var date = document.getElementsByName("schedule_time[]");
        var text = "";
        var i;
        for (i = 0; i < date.length; i++) {
            text += date[i].value + "<hr>";
        }
        document.getElementById('time').innerHTML = text;

    }

    function mySplace() {
        var date = document.getElementsByName("schedule_place[]");
        var text = "";
        var i;
        for (i = 0; i < date.length; i++) {
            text += date[i].value + "<hr>";
        }
        document.getElementById('pleace').innerHTML = text;

    }

    function mySdes() {
        var date = document.getElementsByName("schedule_description[]");
        var text = "";
        var i;
        for (i = 0; i < date.length; i++) {
            text += date[i].value + "<hr>";
        }
        document.getElementById('desa').innerHTML = text;

    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#btn").click(function () {
            $("#controls").append(
                '<div class="col-md-3"><label>วันเริ่มเดินทาง</label><input class="form-control start_day" name="start_date[]" type="date" value="" required data-validation-required-message="Please enter your ROUND TRIP" onChange="myStartdate()"></div><div class="col-md-3">                                <label>วันเดินทางกลับ</label><input class="form-control Departure_Date" name="departure_date[]" type="date" value="" required data-validation-required-message="Please enter your ROUND TRIP" onChange="myDepardate()"></div><br><div class="col-md-2">                               <label>ราคาเด็ก</label>                                <input type="text" class="form-control" name="price_child[]" onChange="myPchild()">                            </div>                            <div class="col-md-2">         <label>ราคาผู้ใหญ่</label>                                <input type="text" class="form-control" name="price_adult[]" required data-validation-required-message="Please enter Price_ADUIT " onChange="myPadult()">                            </div>                            <div class="col-md-2">                                <label>จำนวนที่นั้งทั้งหมด </label>                                <input type="text" class="form-control" name="amount_seats[]" required data-validation-required-message="Please enter Price_ADUIT " onChange="myAseats()" >                            </div>'
            );
        })
    })
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#nextday").click(function () {
            $("#days").append(
                '<div class="col-md-3"><label>วันที่</label><input class="form-control" name="schedule_day[]" type="text"  onChange="mySday()"></div><div class="col-md-3"><label>เวลา</label><input class="form-control" name="schedule_time[]" type="time" onChange="myStime()"></div><div class="col-md-3"><label>สถานที่</label><input class="form-control" name="schedule_place[]" type="text" onChange="mySplace()"></div><div class="col-md-3"><label>รายละเอียด</label><input class="form-control" name="schedule_description[]" type="text" onChange="mySdes()"></div>'
            );
        })
    })
</script>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
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
</script>
<?php $__env->stopSection(); ?>

</body>

</html>
<?php echo $__env->make('layouts.headlogo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>