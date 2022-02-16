<section id="main-content">
  <section class="wrapper">

    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 detailed">
        <h4 class="mb"> Sub-Category Addition</h4>
      <form method="POST">
        <input type="hidden" name="hide" value="h">
        <div class="form-group">
            <label class="col-lg-2 control-label">Category</label>
            <div class="col-lg-6">
                <select name="category">
                  <option value="">--select--</option>
                    {foreach from="$view" item="d"}
                    <option value="{$d.id}">{$d.category}</option>
                    {/foreach}
                </select>    
              </div><br>
              </div>
              
              <div class="form-group">
          <label class="col-lg-2 control-label">Sub category</label>
          <div class="col-lg-6">
            <input type="text" name="sub"class="form-control"><br><br>

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
        <h3><i class="fa fa-angle-right"></i> Product Sub-Category</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered"  >
                <thead>
                  <tr>
                    
                    <th>Sub category</th>
                   <th>Category</th>
                    <th class="hidden-phone">Delete</th>
                  
                       
                      </tr>
                </thead>
               <tbody>
                <tr class="gradeX">
         
                 {foreach from=$data item="d"} 
                    <tr class="gradeX">
                  
                   
                    <td>{$d.subcategory}</td>
                     <td>{$d.category}</td> 

                      <td><a href="gst_productsubdel.php?key={$d.catkey}"><button type="button" style="background: red; color: white">Delete</button></a></td>
                      
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
  