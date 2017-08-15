@extends('layouts.headindex') 
@section('title', 'booking') 
@section('content')

<!-- newedit About Section -->
<!--<section id="about" align="center"  padding-top= "50%">-->
<!--<div class="container">-->
<div class="welcome about">
    <div class="container" align="center">
        <div class="row">
            <div>
                <h2>เขื่อนป่าสักชลสิทธิ์</h2>
                <h6>โดย บริษัท</h6>
                <!--<p class="item-intro text-muted">จังหวัด<br>โดย "$บริษัททัวร์"</p>-->
                <p>ระยะเวลา วัน คืน</p>
                <img class="img-responsive img-centered" src="/img/portfolio/trip1_00.jpg" alt="">
                <p>"$คำอธิบายทริป"</p>
            </div>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <ul class="list-inline">
                        <table class="table">
                            <tr>
                                <th>รอบวันที่</th>
                                <th>จำนวนผู้ใหญ่</th>
                                <th>จำนวนเด็ก</th>
                                <th>จำนวนที่ว่าง</th>
                            </tr>
                            <!-- edit add loop select for db -->
                            <tr>
                                <td>
                                    <select name="tripround">
                                        
                                        <option value="saab">2017/10/01</option>
                                        <option value="fiat">2017/11/01</option>
                                        <option value="audi">2017/12/01</option>
                                      </select>
                                </td>

                                <td>
                                    <select name="cars">
                                      <!--
                                        <option value="volvo">ลูปตามจำนวนที่ว่างในรอบนั้น</option>
                                        -->
                                        <option value="volvo">1</option>
                                        <option value="saab">2</option>
                                        <option value="fiat">3</option>
                                        <option value="audi">4</option>
                                      </select>
                                </td>

                                <td>
                                    <select name="cars">
                                         <option value="volvo">1</option>
                                        <option value="saab">2</option>
                                        <option value="fiat">3</option>
                                        <option value="audi">4</option>
                                      </select>
                                </td>

                                <td>
                                    $จำนวนที่ว่าง
                                </td>


                            </tr>
                        </table>
                        <!-- end loop -->
                    </ul>
                </div>
                <div class="col-md-3"></div>
            </div>
            <a href="/bookingsum">
                <button type="button" class="btn btn-primary" data-dismiss="modal" href={{url( '/bookingsum')}}>  จองตอนนี้</button>
                </a>
        </div>
    </div>
</div>






<!--</section>-->

<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb"
    crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="js/agency.min.js"></script>

</body>

</html>

@endsection('content')