<!DOCTYPE html>
<html>
<head>
 <?php
 include 'shared/head.php';
 ?>    
</head>
<body>
  <header>
    <?php
    include 'shared/nav.php';
    ?>
  </header>
  <main>

    <div class="container" style="margin-top: 70px">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:5px;">
          <img class="img-responsive" style="width:80px;" src="shared/images/libr-logo.png">
          <span style="font-size:12pt;font-weight:600;color:#0e2f44;">Central Library</span>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6" style="margin-bottom:5px;">
          <div class="panel panel-default">
            <div class="panel-body"><i class="fa fa-user-circle fa-2x pull-left fa-lg" style="color:#329999;"></i>
              <span style="font-size:10pt;font-weight:600;color:#329999">Members</span><br>
              <span class="pull-right" style="font-size:15pt;font-weight:600;color:#329999">24</span>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6" style="margin-bottom:5px;">
          <div class="panel panel-default">
            <div class="panel-body"><i class="fa fa-user fa-2x pull-left" style="color:#49639a;"></i><span style="font-size:10pt;font-weight:600;color:#49639a;">Staffs</span><br><span class="pull-right" style="font-size:15pt;font-weight:600;color:#49639a;">7</span>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 col-lg-offset-3 col-md-offset-3" style="margin-bottom:5px;">
          <div class="panel panel-default">
            <div class="panel-body">
              <i class="fa fa-clock-o fa-lg pull-left" style="color:#468499;"></i>
              <span onload="stertTime" id="MyClockDisplay" class="pull-right" style="font-size:12pt;font-weight:600;color:#468499;"></span><br>
              <span class="pull-right" style="font-size:15pt;font-weight:600;color:#468499;">08-Dec-2018</span>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-6">
          <div class="panel panel-default" style="background:#b6577b;border:0.5px solid #b6577b;">
            <div class="panel-body" style="padding-top:5px;padding-bottom:5px;">
              <span style="color:#fff;font-size:13pt;font-weight:600;">Total Members</span><br><span style="color:#fff;font-size:13pt;font-weight:600;" class="pull-right"><span style="font-size:15pt;"><i class="fab fa-android fa-lg"></i> 546</span></span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-3 col-xs-6 ">
          <div class="panel panel-default" style="background:#a4c639;border:0.5px solid #a4c639;">
            <div class="panel-body" style="padding-top:5px;padding-bottom:5px;">
              <span style="color:#fff;font-size:13pt;font-weight:600;">Total issued books</span>
              <br>
              <span style="color:#fff;font-size:13pt;font-weight:600;" class="pull-right">
                <span style="font-size:15pt;"></span> 1876</span>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="panel panel-default" style="background:#266782;border:0.5px solid #266782;">
              <div class="panel-body" style="padding-top:5px;padding-bottom:5px;">
                <span style="color:#fff;font-size:13pt;font-weight:600;">Total fine to collect</span>
                <br>
                <span style="color:#fff;font-size:13pt;font-weight:600;" class="pull-right"><i class="fa fa-inr"></i> 5487<span style="font-size:15pt;"></span>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-sm-2 col-xs-6">
            <div class="panel panel-default" style="background:#FF3400;border:0.5px solid #FF3400;">
              <div class="panel-body" style="padding-top:5px;padding-bottom:5px;">
              <span style="color:#fff;font-size:13pt;font-weight:600;">Total Books</span>
              <br>
              <span style="color:#fff;font-size:13pt;font-weight:600;" class="pull-right">
                <span style="font-size:15pt;"></span> <i class="fas fa-book"></i> 20515</span>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-sm-2 col-xs-6 ">
            <div class="panel panel-default" style="background:#00CCCC;border:0.5px solid #00CCCC;">
              <div class="panel-body" style="padding-top:5px;padding-bottom:5px;">
                <span style="color:#fff;font-size:11pt;font-weight:600;">Total manuscripts</span>
                <br>
                <span style="color:#fff;font-size:13pt;font-weight:600;" class="pull-right">
                  <span style="font-size:15pt;"></span> 400 
              </span>
            </div>
          </div>
        </div>
      </div> 
      
      <div class="row">
        <div  class="col-md-3 col-sm-6 col-xs-12" style="border:3px solid #ff4500; border-radius: 10px" >
          <div class="row">
            <div class="col-12">
              <a href="pages/aboutus.php" target="_blank"><h4 class="text-center">
               About Us</h4></a>
              <hr style="height: 1px; background-color: blue;">
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <a href="pages/aim_of_lib.php" target="_blank"><h4 class="text-center">Aim of the Library</h4></a>
              <hr style="height: 1px; background-color: blue;">
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <a href="#"><h4 class="text-center">Message from VC</h4></a>
              <hr style="height: 1px; background-color: blue;">
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <a href="#"><h4 class="text-center">Administrators</h4></a>
              <hr style="height: 1px; background-color: blue;">
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <a href="pages/library_rule_book.php" target="_blank"><h4 class="text-center">Library Rule Book</h4></a>
              <hr style="height: 1px; background-color: blue;">
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <a href="#"><h4 class="text-center"></h4></a>
              <hr style="height: 1px; background-color: blue; margin-bottom: 40px">
            </div>
          </div>
          
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12 col-md-offset-1">
          <div class="panel" style="border: 1px solid blue">
            <div class="panel-body" >
              <span style="font-size:15pt;font-weight:500;color:#329999;font-family: comic sans"><i class="far fa-calendar-check fa-lg"></i> SMART LIBRARY MANAGEMENT</span>
              <br>
              <br>
              <br>
              <span style="padding-left: 20px">scan the barcode available on the id card of the members to see their profile details.</span>
              <br><br><br><br>
              <div class="row" style="padding-bottom: 200px">
                <div class="col-md-offset-3 col-md-6">
                  <div class="input-group">
                    <input id="msg" type="text" class="form-control" name="barcode" placeholder="Scan Card">
                    <span class="input-group-addon btn btn-primary" style="color: white">Check</span>
                  </div>
                </div>
              </div>
              
            </div>
            
          </div>
          
        </div>
      </div>

        <!--Member Modal -->
        <div class="modal fade" id="member_Modal" role="dialog">
          <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">New Member</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">First Name <sup><i class="fa fa-star" style="color:#ff6666;"></i></sup></span><br><input type="text" name="m_f_name" class="form-control" style="font-size:9pt;" placeholder="Example:Sujit">
                  </div>

                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Middle Name</span><br>
                    <input type="text" name="m_m_name" class="form-control" style="font-size:9pt;" placeholder="Example: Kumar">
                  </div>

                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Last Name <sup><i class="fa fa-star" style="color:#ff6666;"></i></sup></span><br>
                    <input type="text" name="m_l_name" class="form-control" style="font-size:9pt;" placeholder="Example: Vishwas">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Gender<sup><i class="fa fa-star" style="color:#ff6666;"></i></sup></span></span><br>
                    <select id="member_gender" class="form-control" style="font-size:9pt;">
                      <option selected="" disabled="">---Select Gender---</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>

                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Date of Birth <sup><i class="fa fa-star" style="color:#ff6666;"></i></sup></span><br>
                    <input type="date" max="2018-12-11" name="member_dob" id="member_dob" class="form-control" style="font-size:9pt;" placeholder="Example: 1991-05-02 (YYYY-MM-DD)">
                  </div>

                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Marital Status <sup><i class="fa fa-star" style="color:#ff6666;"></i></sup></span><br>
                    <select id="member_marital_status" class="form-control" style="font-size:9pt;">
                      <option selected="" disabled="">---Select Marital Status---</option>
                      <option>Unmarried</option>
                      <option>Married</option>
                      <option>Windowed</option>
                      <option>Divorced</option>
                    </select>
                  </div>
                  <div class="col-md-12 col-xs-12 col-sm-12">
                    <hr>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Contact Number <sup><i class="fa fa-star" style="color:#ff6666;"></i></sup></span><br><input type="hidden" id="member_contact_validation" value="0">
                    <input type="text" id="teacher_contact" class="form-control" style="font-size:9pt;" placeholder="Example: 9876543210">
                  </div>

                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Email <sup><i class="fa fa-star" style="color:#ff6666;"></i></sup></span><br>
                    <input type="text" id="member_email" class="form-control" style="font-size:9pt;" placeholder="Example: member@school.com">
                  </div>

                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Designation <sup><i class="fa fa-star" style="color:#ff6666;"></i></sup></span><br>
                    <select id="member_designation" class="form-control" style="font-size:9pt;">
                      <option selected="" disabled="">---Select Designation---</option>
                      <option>Principal/Head Master</option>
                      <option>Teacher</option>
                      <option>Asst. Teacher</option>
                      <option>Para Teacher</option>
                    </select>
                  </div>
                  <div class="col-md-12 col-xs-12 col-sm-12">
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Fingerprint</span></span> <br>No
                  </div>
                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Fingerprint ID</span><br>
                    N/A
                  </div>
                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Fingerprint Machine ID</span><br>
                    N/A
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <span class="btn btn-primary pull-left" style="font-weight:600;font-size:9pt;">Add Member</span>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <!--Staff Model -->
        <div class="modal fade" id="staff_Modal" role="dialog">
          <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">New staff</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">First Name <sup><i class="fa fa-star" style="color:#ff6666;"></i></sup></span><br><input type="text" name="s_f_name" class="form-control" style="font-size:9pt;" placeholder="Example:Sujit">
                  </div>

                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Middle Name</span><br>
                    <input type="text" name="s_m_name" class="form-control" style="font-size:9pt;" placeholder="Example: Kumar">
                  </div>

                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Last Name <sup><i class="fa fa-star" style="color:#ff6666;"></i></sup></span><br>
                    <input type="text" name="s_l_name" class="form-control" style="font-size:9pt;" placeholder="Example: Vishwas">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Gender<sup><i class="fa fa-star" style="color:#ff6666;"></i></sup></span></span><br>
                    <select id="staff_gender" class="form-control" style="font-size:9pt;">
                      <option selected="" disabled="">---Select Gender---</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>

                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Date of Birth <sup><i class="fa fa-star" style="color:#ff6666;"></i></sup></span><br>
                    <input type="date" max="2018-12-11" name="staff_dob" id="staff_dob" class="form-control" style="font-size:9pt;" placeholder="Example: 1991-05-02 (YYYY-MM-DD)">
                  </div>

                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Marital Status <sup><i class="fa fa-star" style="color:#ff6666;"></i></sup></span><br>
                    <select id="staff_marital_status" class="form-control" style="font-size:9pt;">
                      <option selected="" disabled="">---Select Marital Status---</option>
                      <option>Unmarried</option>
                      <option>Married</option>
                      <option>Windowed</option>
                      <option>Divorced</option>
                    </select>
                  </div>
                  <div class="col-md-12 col-xs-12 col-sm-12">
                    <hr>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Contact Number <sup><i class="fa fa-star" style="color:#ff6666;"></i></sup></span><br><input type="hidden" id="staff_contact_validation" value="0">
                    <input type="text" id="teacher_contact" class="form-control" style="font-size:9pt;" placeholder="Example: 9876543210">
                  </div>

                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Email <sup><i class="fa fa-star" style="color:#ff6666;"></i></sup></span><br>
                    <input type="text" id="staff_email" class="form-control" style="font-size:9pt;" placeholder="Example: staff@school.com">
                  </div>

                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Designation <sup><i class="fa fa-star" style="color:#ff6666;"></i></sup></span><br>
                    <select id="staff_designation" class="form-control" style="font-size:9pt;">
                      <option selected="" disabled="">---Select Designation---</option>
                      <option>Principal/Head Master</option>
                      <option>Teacher</option>
                      <option>Asst. Teacher</option>
                      <option>Para Teacher</option>
                    </select>
                  </div>
                  <div class="col-md-12 col-xs-12 col-sm-12">
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Fingerprint</span></span> <br>No
                  </div>
                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Fingerprint ID</span><br>
                    N/A
                  </div>
                  <div class="col-md-4 col-xs-6 col-sm-12" style="margin-bottom:8px;">
                    <span style="font-weight:600;font-size:8pt;">Fingerprint Machine ID</span><br>
                    N/A
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <span class="btn btn-primary pull-left" style="font-weight:600;font-size:9pt;">Add staff</span>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

  
      <h2 class="text-center" style="font-family:comic sans">Design and developed by Onibus Techologies Pvt. Ltd </h2>
    </div>
  </main>
  <footer>
  </footer>
 <script type="text/javascript">
    function startTime() {
 
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById("MyClockDisplay").innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of  numbers < 10
    return i;
   }
   startTime();
 </script> 
</body>
</html>