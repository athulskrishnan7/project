admin_<!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>User </h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered">
                <thead>
                  <tr>
                   
                    <th>Name</th>
                   
                   
                     <th class="hidden-phone">Contact</th>
                     <th>Email</th>
                     <th> Approve</th>
                     <th>Reject</th>



                  </tr>
                </thead>
               <tbody>
                  {foreach from = $data item="d"}
                    <tr >
                  
                    <td>{$d.name}</td>              
                              <td>{$d.contact}</td>
                              <td>{$d.email}</td>

                              {if $d.status==0}

                              <td><a href="admin_userapprove.php?key={$d.loginkey}"><button type="button" style="background: green;color: white">Approve</button></a></td>
                             <td> <a href="admin_userreject.php?key={$d.loginkey}"><button type="button" style="background: red; color: white">Reject</button></a></td>
                             {elseif $d.status==1}
                              <td>Approved</a></td>
                             <td> <a href="admin_userreject.php?key={$d.loginkey}"><button type="button" style="background: red; color: white">Reject</button></a></td>
                             {else}
                              <td><a href="admin_userapprove.php?key={$d.loginkey}"><button type="button" style="background: green;color: white">Approve</button></a></td>
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
  