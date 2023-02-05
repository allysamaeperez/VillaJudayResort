<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span6">
          <div class="widget widget-nopad" id="target-1">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Today's Stats</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                  <h6 class="bigstats"> What happened today on VillaJuday Resort? </h6>
                  <div id="big_stats" class="cf">

                    <div class="stat"> <i class="icon-user-md"></i> <span class="value"><?php echo $employee; ?></span> <br>Employees</div>
                    <!-- .stat -->
                    
                    <div class="stat"> <i class="icon-list-alt"></i> <span class="value"><?php echo $reservation; ?></span> <br>Reservation</div>
                    <!-- .stat -->
                    
                    <div class="stat"> <i class="icon-file"></i> <span class="value"><?php echo $department; ?></span> <br>Departments</div>
                    <!-- .stat --> 

                    <div class="stat"> <i class="icon-fire"></i> <span class="value"><?php echo $count; ?></span> <br>Appointment</div>
                    <!-- .stat --> 
                  </div>
                </div>
                <!-- /widget-content --> 
                
              </div>
            </div>
          </div>
          <div class="widget widget-table action-table" id="target-3">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Most Favorite Customer</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Name </th>
                    <th> TC no </th>
                    <th> Checkin Count </th>
                    <th> Total Paid </th>
                  </tr>
                </thead>
               
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->          
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Important Shortcuts</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts">
                <a href="<?= base_url() ?>room" class="shortcut"><i class="shortcut-icon icon-home"></i><span class="shortcut-label">Rooms</span> </a>
                <a href="<?= base_url() ?>employee" class="shortcut"><i class="shortcut-icon icon-user-md"></i><span class="shortcut-label">Employees</span> </a>
                <a href="<?= base_url() ?>login/logout" class="shortcut"><i class="shortcut-icon icon-off"></i><span class="shortcut-label">Logout</span> </a>
                
              </div>
              <!-- /shortcuts --> 
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span6 -->
        <div class="span6">
          <div class="widget" id="target-2">
            <div class="widget-header"> <i class="icon-group"></i>
              <h3> Hotel's Next Week Customers</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <canvas id="area-chart" class="chart-holder" height="250" width="538"> </canvas>
              <!-- /area-chart --> 
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
          <div class="widget widget-table action-table" id="target-4">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Most Frequent Customers</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Name </th>
                    <th> TC no </th>
                    <th> Checkin Count </th>
                    <th> Total Paid </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($customer_pay_list as $k => $cust) { ?>
                  <tr>
                    <td> <?php echo $cust->customer_firstname." ".$cust->customer_lastname;?> </td>
                    <td> <?= $cust->customer_TCno?> </td>
                    <td> <?= $cust->checkin_count?></td>
                    <td> <?= $cust->total_paid?></td>
                    <!--td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td-->
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
