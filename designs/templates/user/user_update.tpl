
<center>

<div class="section padding_layout_1 checkout_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="checkout-form">
          <<form>
       <div class="form-row">
         
            	<input type="hidden" name="hide" value="h">
            <div class="row">
                    {foreach from=$data item="d"}
               <div class="form-group col-md-6">
                  <label>Name</label>
                  <input type="text" name="name" value={$d.name}>
                </div>
              
             
             
             
              <div class="form-group col-md-6">
                  <label>Phone <span class="red">*</span></label>
                 <input type="text" name="contact" value={$d.contact} >
                </div>
              <br>
               <div class="form-group">
                  <label>Email address <span class="red">*</span></label>
                 <input type="email" name="email" value={$d.email}>
                </div>
              </div>
                
                <!-- <button value="{$d.key}">Update</button> --> 
         
{/foreach}
<div class="col-md-12">
                <div class="form-field">
           
  <input type="submit" name="" value="Update"> 

<!-- <center>

<form style="margin-left: auto;margin-right: auto;">
  <input type="hidden" name="hide" value="h">
  {foreach from=$data item="d"}

   <div class="form-group col-md-6">
      <label for="inputPassword4">Name</label>
      <input type="text" class="form-control" id="inputPassword4"  name="name" value={$d.name}>
    </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">contact</label>
      <input type="text" class="form-control" id="inputEmail4"name="contact" value={$d.contact} >
    </div>
   
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputAddress">Email</label>
    <input type="email" class="form-control" id="inputAddress" name="email" value={$d.email}>
  </div>
</div>
 <div class="form-group col-md-6">
 </div>

<div class="col-md-12">
                <div class="form-field">
                <input type="submit" name="" value="Update"> 
              </div>
            </div>
             {/foreach}
          </form>

</center> -->
    </div>
        </div>
              <!-- <div class="col-md-6">
                <div class="form-field">
                  <input name="ck" type="checkbox">
                  <span class="crte-ac">Create an account?</span> </div>
              </div> -->
            </div>
            
         
        </div>
      </div>
  </div>
</div>
</div>

  </center>   
      
</div>
</div>