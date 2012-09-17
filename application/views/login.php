<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Authorization</title>
    <link type='text/css' rel='stylesheet' href='<?=base_url()?>css/login.css'>
    <script type="text/javascript" src="<?=base_url()?>js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                    $("input[name='user']").focus();
                    $("input").keypress(function(e){
                            if(e.which == 13) $('form').submit();
                    });
                    $('input').click(function(){
                            $(this).select();
                    });
            });
    </script>
</head>
<body id="login-screen">
	<?
		$err = validation_errors();
		if(!empty($err)) echo "<div class='error'>$err</div>";
	?>
	<?=form_open('login/validate_credentials')?>
                <img alt="logo"  id="logo" src="<?=base_url()?>img/logo.gif" /><br />
		<h1>Tenancy Management System</h1>
		<?php 
                    echo form_label('Username:', 'username');
                    echo form_input('username');
                    echo "<br />";
                    echo form_label('Password:', 'password');
                    echo form_password('password');
                    echo "<br />";
                    echo form_label('&nbsp;', 'submit');
                    echo form_submit('submit', 'Login');
                 ?>
		<br style="clear:both" />
	<?=form_close()?>
	<div id="copyright">
		<p>ibmsTMS version 1.0 beta</p>
		<p><a href="http://www.sitanetwork.com/" target="_blank">Sita Network Property Management Portal</a></p>
		<p>&copy; 2011 <a href="http://www.sita.com.my/software" target="_blank">Sita Software Sdn Bhd</a></p>
	</div>
</body>
</html>
<? exit(); ?>