<title>Company - General Setup</title>
<?php 
	$title = "Company - General Setup";
	$this->load->view('inc/header'); 
	$this->load->view('inc/nav_edit')
?>

<script type='text/javascript'>
	$(function() {
		$( "#company_gs" ).tabs({
			ajaxOptions: {
				error: function( xhr, status, index, anchor ) {
					$( anchor.hash ).html("Couldn't load this tab. We'll try to fix this as soon as possible.");
				}
			}
		});

		$('.cr-nav-save').live('click',function(){
			
			//Get the tab index (which one is selected)
			//Number started from 0 (first tab)
			var index = $("#company_gs").tabs("option", "selected");
			
			//If it is 1 submit form 1
			switch(index){
				case 0:
					$('.company_particular').trigger('submit');
					break;
				case 1:
					$('.gl_setting').trigger('submit');
					break;

			}// end switch


		});

		$('.cr-nav-cancel').live('click',function(){
			alert('cancel');
		});

	});//main function
</script>


<div>
	<div id='company_gs'>
		<ul>
			<li>
				<a href='<?php echo base_url()?>application/views/general_setup/company.php'>
					Company Particulars
				</a>
			</li>
			<li>
				<a href='<?php echo base_url()?>application/views/general_setup/gl_setting.php'>
					GL Settings
				</a>
			</li>
		</ul>
	</div>
</div>

<?php $this->load->view('inc/footer');?>
