<?php /* Smarty version 2.6.26, created on 2022-02-02 11:52:56
         compiled from admin/admin_shoptaxview.tpl */ ?>

<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Shop Tax Reports</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered"  >
                <thead>
                  <tr>
                    <th width="20%">Date</th>
                    <th width="20%">Year</th>
                   <th width="60%">Tax Report</th>
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
                      








                            <!-- <?php if ($this->_tpl_vars['d']['status'] == 0): ?>
                                <td><a href="shopapprove.php?key=<?php echo $this->_tpl_vars['d']['loginkey']; ?>
"><button type="button" style="background: green;color: white">Update</button></a></td>
                               <td> <a href="shopreject.php?key=<?php echo $this->_tpl_vars['d']['loginkey']; ?>
"><button type="button" style="background: red; color: white">Delete</button></a></td>
                               <?php elseif ($this->_tpl_vars['d']['status'] == 1): ?>
                                <td>Updated</a></td>
                               <td> <a href="shopreject.php?key=<?php echo $this->_tpl_vars['d']['loginkey']; ?>
"><button type="button" style="background: red; color: white">Delete</button></a></td>
                               <?php else: ?>
                                <td><a href="shopapprove.php?key=<?php echo $this->_tpl_vars['d']['loginkey']; ?>
"><button type="button" style="background: green;color: white">Update</button></a></td>
                               <td>Deleted</a></td>
                               <?php endif; ?> -->

                           
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
  