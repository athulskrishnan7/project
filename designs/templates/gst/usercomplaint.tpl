

<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Complaints</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered"  >
                <thead>
                  <tr>
                    <th width="20%">Bill no</th>
                    <th width="20%">Subject</th>
                   <th width="45%">Complaint</th>
                    <th>PASS TO ADMIN</th>

                  <!--   <th class="hidden-phone">Update</th>
                    <th class="hidden-phone">Delete</th>
                  
                        -->
                      </tr>
                </thead>
               <tbody>
                       
                 {foreach from=$view item="d"} 
                    <tr >
                   <td>{$d.billno}</td>
                    <td>{$d.subject}</td> 
                   
                     <td>{$d.complaint}</td>

                  <!--  <td> <button type="button" style="background: green;color: white">Update</button></td>

                      <td><button type="button" style="background: red; color: white">Delete</button></a></td> -->
                      


                              {if $d.status==0}
                                <td><a href="gst_usercomplaintpass.php?id={$d.id}"><button type="button" style="background: green;color: white" class="form-control">Pass</button></a></td>
                               
                              
                               
                               {else}
                                
                               <td>Passed</a></td>
                               {/if} 






                            <!-- {if $d.status==0}
                                <td><a href="shopapprove.php?key={$d.loginkey}"><button type="button" style="background: green;color: white">Update</button></a></td>
                               <td> <a href="shopreject.php?key={$d.loginkey}"><button type="button" style="background: red; color: white">Delete</button></a></td>
                               {elseif $d.status==1}
                                <td>Updated</a></td>
                               <td> <a href="shopreject.php?key={$d.loginkey}"><button type="button" style="background: red; color: white">Delete</button></a></td>
                               {else}
                                <td><a href="shopapprove.php?key={$d.loginkey}"><button type="button" style="background: green;color: white">Update</button></a></td>
                               <td>Deleted</a></td>
                               {/if} -->

                           
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





            <a href="admin/a_table.php" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  