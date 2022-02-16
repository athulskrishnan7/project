<?php /* Smarty version 2.6.26, created on 2022-02-13 10:30:56
         compiled from admin/admin_userview.tpl */ ?>
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
                  <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                    <tr >
                  
                    <td><?php echo $this->_tpl_vars['d']['name']; ?>
</td>              
                              <td><?php echo $this->_tpl_vars['d']['contact']; ?>
</td>
                              <td><?php echo $this->_tpl_vars['d']['email']; ?>
</td>

                              <?php if ($this->_tpl_vars['d']['status'] == 0): ?>

                              <td><a href="admin_userapprove.php?key=<?php echo $this->_tpl_vars['d']['loginkey']; ?>
"><button type="button" style="background: green;color: white">Approve</button></a></td>
                             <td> <a href="admin_userreject.php?key=<?php echo $this->_tpl_vars['d']['loginkey']; ?>
"><button type="button" style="background: red; color: white">Reject</button></a></td>
                             <?php elseif ($this->_tpl_vars['d']['status'] == 1): ?>
                              <td>Approved</a></td>
                             <td> <a href="admin_userreject.php?key=<?php echo $this->_tpl_vars['d']['loginkey']; ?>
"><button type="button" style="background: red; color: white">Reject</button></a></td>
                             <?php else: ?>
                              <td><a href="admin_userapprove.php?key=<?php echo $this->_tpl_vars['d']['loginkey']; ?>
"><button type="button" style="background: green;color: white">Approve</button></a></td>
                             <td> Rejected</a></td>
                             <?php endif; ?>


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





            <a href="advanced_table.php" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  