<?php /* Smarty version 2.6.26, created on 2022-01-19 06:41:37
         compiled from user_table.tpl */ ?>
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
                   
                   
                     <th class="hidden-phone">Contact</th>
                     <th> Approve</th>
                     <th>Reject</th>



                  </tr>
                </thead>
               <tbody>
                  <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                    <tr class="gradeX">
                  
                    <td><?php echo $this->_tpl_vars['d']['name']; ?>
</td>              
                              <td><?php echo $this->_tpl_vars['d']['contact']; ?>
</td>
                              <?php if ($this->_tpl_vars['d']['status'] == 0): ?>
                              <td><a href="userapprove.php?key=<?php echo $this->_tpl_vars['d']['loginkey']; ?>
"><button type="button" style="background: green;color: white">Approve</button></a></td>
                             <td> <a href="userreject.php?key=<?php echo $this->_tpl_vars['d']['loginkey']; ?>
"><button type="button" style="background: red; color: white">Reject</button></a></td>
                             <?php elseif ($this->_tpl_vars['d']['status'] == 1): ?>
                              <td>Approved</a></td>
                             <td> <a href="userreject.php?key=<?php echo $this->_tpl_vars['d']['loginkey']; ?>
"><button type="button" style="background: red; color: white">Reject</button></a></td>
                             <?php else: ?>
                              <td><a href="userapprove.php?key=<?php echo $this->_tpl_vars['d']['loginkey']; ?>
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
  <?php echo '
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="admin/lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="admin/lib/advanced-datatable/js/jquery.js"></script>
  <script src="admin/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="admin/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="admin/lib/jquery.scrollTo.min.js"></script>
  <script src="admin/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="admin/lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="admin/lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="admin/lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = \'<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">\';
      sOut += \'<tr><td>Rendering engine:</td><td>\' + aData[1] + \' \' + aData[4] + \'</td></tr>\';
      sOut += \'<tr><td>Link to source:</td><td>Could provide a link here</td></tr>\';
      sOut += \'<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>\';
      sOut += \'</table>\';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a \'details\' column to the table
       */
      var nCloneTh = document.createElement(\'th\');
      var nCloneTd = document.createElement(\'td\');
      nCloneTd.innerHTML = \'<img src="lib/advanced-datatable/images/details_open.png">\';
      nCloneTd.className = "center";

      $(\'#hidden-table-info thead tr\').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $(\'#hidden-table-info tbody tr\').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the \'details\' column
       */
      var oTable = $(\'#hidden-table-info\').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, \'asc\']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $(\'#hidden-table-info tbody td img\').live(\'click\', function() {
        var nTr = $(this).parents(\'tr\')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "admin/lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "admilib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), \'details\');
        }
      });
    });
  </script>
  '; ?>