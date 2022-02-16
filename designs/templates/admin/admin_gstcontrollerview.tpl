<!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>GST controller</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th class="hidden-phone">Pincode</th>
                    <th class="hidden-phone">District</th>
                    <th class="hidden-phone">Gender</th>
                     <th class="hidden-phone">DOB</th>
                      <th class="hidden-phone">Office Address</th>
                       <th class="hidden-phone">City</th>
                        <th class="hidden-phone">Contact</th>
                        <th class="hidden-phone">Approve</th>
                        <th class="hidden-phone">Rejected</th>



                  </tr>
                </thead>
               <tbody>
                {foreach from = $data item="d"}
                    <tr >
                  
                    <td>{$d.name}</td>              
                      <td>{$d.address}</td>
                      <td>{$d.pincode}</td>
                      <td>{$d.district}</td>
                      <td>{$d.gender}</td>
                        <td>{$d.dob}</td>
                          <td>{$d.officeaddress}</td>
                            <td>{$d.city}</td>
                              <td>{$d.contact}</td>
                              {if $d.status==0}
                              <td><a href="admin_approvecontroller.php?key={$d.loginkey}"><button type="button" style="background: green;color: white">Approve</button></a></td>
                             <td> <a href="admin_rejectcontroller.php?key={$d.loginkey}"><button type="button" style="background: red; color: white">Reject</button></a></td>
                             {elseif $d.status==1}
                              <td>Approved</a></td>
                             <td> <a href="admin_rejectcontroller.php?key={$d.loginkey}"><button type="button" style="background: red; color: white">Reject</button></a></td>
                             {else}
                              <td><a href="admin_approvecontroller.php?key={$d.loginkey}"><button type="button" style="background: green;color: white">Approve</button></a></td>
                             <td> Rejected</a></td>
                             {/if}


                 </tr>
                 {/foreach}

               </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->





            <a href="advanced_table.php" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  