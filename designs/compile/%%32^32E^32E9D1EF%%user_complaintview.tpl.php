<?php /* Smarty version 2.6.26, created on 2022-02-03 09:12:59
         compiled from user/user_complaintview.tpl */ ?>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Complaint View</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Complaint View</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->

<div id="default_theme" class="it_serv_shopping_cart shopping-cart">
    <div class="section padding_layout_1 Shopping_cart_section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="product-table">
          <table class="table">
            <thead>
              <tr>
                <th class="text-center">BILL NO</th>
                <th class="text-center">Subject</th>
                <th class="text-center">Complaint</th>
            
                <th> </th>
              </tr>
            </thead>
            <tbody>
                <?php $_from = ($this->_tpl_vars['view']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                <tr>
                <td class="col-sm-8 col-md-2"><div class="media"> 
                    <div class="media-body">
                      <h4 class="media-heading text-center"><?php echo $this->_tpl_vars['d']['billno']; ?>
 </h4>
                     
                  </div></td>
             
               
                     <td class="col-sm-1 col-md-4 text-center"><p class="price_table"><?php echo $this->_tpl_vars['d']['subject']; ?>
</p></td>
                <td class="col-sm-1 col-md-6 text-center"><p class="price_table"><?php echo $this->_tpl_vars['d']['complaint']; ?>
</p></td>
                <td class="col-sm-1 col-md-2"><a href="user_complaintdel.php?key=<?php echo $this->_tpl_vars['d']['complaintkey']; ?>
"><button type="button" class="bt_main"><i class="fa fa-trash"></i> Remove</button></a></td>
              </tr>
             <?php endforeach; endif; unset($_from); ?>


        <!--  <tr>
                <td class="col-sm-8 col-md-6"><div class="media"> <a class="thumbnail pull-left" href="#"> <img class="media-object" src="images/it_service/1.jpg" alt="#"></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">Norton Internet Security</a></h4>
                      <span>Status: </span><span class="text-success">In Stock</span> </div>
                  </div></td>
                <td class="col-sm-1 col-md-1" style="text-align: center"><input class="form-control" value="3" type="email">
                </td>
                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                <td class="col-sm-1 col-md-1"><button type="button" class="bt_main"><i class="fa fa-trash"></i> Remove</button></td>
              </tr> -->

            </tbody>
          </table>
<!-- 
 -->

         
        </div>
       
      </div>
    </div>
  </div>
</div>

</div>