<?php /* Smarty version 2.6.26, created on 2022-01-19 08:02:29
         compiled from subadminfooter.tpl */ ?>
<?php echo '
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="subadmin/js/jquery.nicescroll.js"></script>
		<script src="subadmin/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="subadmin/js/bootstrap.js"> </script>
'; ?>

<!-- mother grid end here-->
</body>
</html>                     