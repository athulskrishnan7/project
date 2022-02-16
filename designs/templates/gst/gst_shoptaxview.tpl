
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Shop tax </h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered"  >
                <thead>
                  <tr>
                    <th width="20%">Date</th>
                    <th width="20%">Year</th>
                   <th width="45%">Tax</th>
                  
                  <!--   <th class="hidden-phone">Update</th>
                    <th class="hidden-phone">Delete</th>
                  
                        -->
                      </tr>
                </thead>
               <tbody>
                       
                 {foreach from=$view item="d"} 
                    <tr >
                   <td>{$d.currentdate}</td>
                    <td>{$d.currentyear}</td> 
                   
                     <td>{$d.taxreport}</td>

                  <!--  <td> <button type="button" style="background: green;color: white">Update</button></td>

                      <td><button type="button" style="background: red; color: white">Delete</button></a></td> -->
                      







                              
                           
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
  