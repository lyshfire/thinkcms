<?php if (!defined('THINK_PATH')) exit();?>

	<frameset rows="61,*,24" cols="*" framespacing="0" frameborder="no" border="0">
 		<frame src="<<?php echo ($url); ?>>/top" name="top" scrolling="no" noresize="noresize" />
		<frameset cols="200, *">
  			<frame src="<<?php echo ($url); ?>>/menu" name="menu" noresize="noresize" scrolling="no" />
  			<frame src="<<?php echo ($url); ?>>/main" name="main" noresize="noresize" scrolling="yes"/>
		</frameset>
  		<frame src="<<?php echo ($url); ?>>/bottom" name="bottom" scrolling="No" noresize="noresize" />
	</frameset>
</html>