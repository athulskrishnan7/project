<?php /* Smarty version 2.6.26, created on 2022-02-05 06:42:03
         compiled from gst/gst_shoptaxview.tpl */ ?>

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
                       
                 <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?> 
                    <tr >
                   <td><?php echo $this->_tpl_vars['d']['currentdate']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['currentyear']; ?>
</td> 
                   
                     <td><?php echo $this->_tpl_vars['d']['taxreport']; ?>
</td>

                  <!--  <td> <button type="button" style="background: green;color: white">Update</button></td>

                      <td><button type="button" style="background: red; color: white">Delete</button></a></td> -->
                      







                              
                           
                 </tr>
                  <?php endforeach; endif; unset($_from); ?> 
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
  