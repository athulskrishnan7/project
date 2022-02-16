<?php /* Smarty version 2.6.26, created on 2022-01-20 09:52:00
         compiled from productcategory.tpl */ ?>
<section id="main-content">
  <section class="wrapper">

    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 detailed">
        <h4 class="mb"> Category Addition</h4>
      <form method="POST">
        <input type="hidden" name="hide" value="h">
        <div class="form-group">
          <label class="col-lg-2 control-label">Category</label>
          <div class="col-lg-6">
            <input type="text" name="category"class="form-control"><br><br>

          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <button class="btn btn-theme" type="submit">Save</button>
            <button class="btn btn-theme04" type="button">Cancel</button>
          </div>
        </div>
      </form>
    </div>
    <!-- /col-lg-8 -->
  </div>
  <!-- /row -->
</div>

</section>
</section>








<!-- product category display -->












<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Product Category</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered"  >
                <thead>
                  <tr>
                    <th>Category</th>
                   
                    <th class="hidden-phone">Update</th>
                    <th class="hidden-phone">Delete</th>
                  
                       
                      </tr>
                </thead>
               <tbody>
                <tr class="gradeX">
         
                 <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?> 
                    <tr class="gradeX">
                  
                    <td><?php echo $this->_tpl_vars['d']['category']; ?>
</td> 
                   <td> <button type="button" style="background: green;color: white">Update</button></td>

                      <td><button type="button" style="background: red; color: white">Delete</button></a></td>
                      
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
  