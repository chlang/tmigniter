
<script type="text/javascript">
$(function(){
    var Address,Contact,Fax,Name,Phone,Type,Code;
    $('.cr-nav-apply').live('click',function(){
        //href='".base_url()."index.php/".$this->uri->segment(1)."/".$this->uri->segment(2)."/save'
        //alert($("input[name=Code]").val());
        Address = $("textarea[name=Address]").val();
        Contact = $("input[name=Contact]").val();
        Fax = $("input[name=Fax]").val();
        Name = $("input[name=Name]").val();
        Phone = $("input[name=Phone]").val();
        Type = $("select[name=Type]").val();
        Code = $("input[name=Code").val();

        $.ajax({
            url:"process_particular",
            type:"POST",
            //dataType:"json",
            data:({'type':'apply'}),
            success: function(msg){
                //alert(msg);
            }
        });//end ajax
        
    });

    $('.cr-nav-save').live('click',function(){
        //href='".base_url()."index.php/".$this->uri->segment(1)."/".$this->uri->segment(2)."/save'
		$('.ten_own_particular-edit').trigger('submit');
		$('.ten_own_particular').trigger('submit');
    });
});//main function

</script>
<div id="cr-tenant-owner_particular" style="">

<!--    load the form with $data from database when the state is Edit-->
<?php

    /*****************************************
     * Get the type options from database
     * select_t_type()
     */
    $type = $this->tenant_owner_class->select_t_type();
    //print_r($type->row());

    //we dont use this array ... *************************
    $type_opt = array();
   
    foreach ($type->result() as $row){
        array_push ($type_opt,$row->t_type);
    }
?>

<!--if the $data is set, the state is edit so load the form with data-->
    <?php if(isset($data)):?>
<?php
	$form_attr = array('class'=>'tenant-owner ten_own_particular-edit');
echo form_open("tenancy",$form_attr)?>
<!--    <form class="tenant-owner ten_own_particular" method="post" action="http://www.google.com">-->
    <label for="Code">Code</label>
    <input name="Code" type ="text" disabled="true" value="<?=$this->uri->segment(4)?>"/>
    <br style="clear:both"/>

<?php
    echo
	form_label('Name:', 'Name'),
	form_input('Name', $data[0][0]->name)
?>
    <br style='clear:both'>
    <label for="Type">Type:</label>
    <select name="Type">
<?php   
    $selected = "";
    foreach($type->result() as $row){
        if($row->t_type == $data[0][0]->t_type)
            $selected = "selected='selected'";
        else $selected = '';
        echo "<option {$selected} value='$row->t_type'>".$row->t_type."</option>";
    }
?>
    </select>

	<br style="clear:both">

	<?php echo form_label('Address:', 'Address'),
	   form_textarea('Address',$data[0][0]->address1)?>
	<br style="clear:both">
	<?php echo form_label('Phone:', 'Phone'),
	   form_input('Phone', $data[0][0]->phone1)?>
	<br style="clear:both">
	<?php echo form_label('Fax:', 'Fax'),
	   form_input('Fax', $data[0][0]->fax1)?>
	<br style="clear:both">
	<?php echo form_label('Contact:', 'Contact'),
	   form_input('Contact', $data[0][0]->contact1)?>
	<br style="clear:both">
	<?php echo form_label('Position:', 'Position'),
	   form_input('Position', $data[0][0]->cont1_posn)?>

    <br style="clear:both">
<?php
    //echo form_label('&nbsp;'),
    //form_submit('submit', 'Submit')?>

<!--    </form>-->
<?php echo form_close();?>

<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    when the state is new we load the empty foam
* * * * * * * * * * * * * * * * * * * * * * * * * * * * -->
      <?php else: ?>
<?php
    $form_attr = array('class'=>'tenant-owner ten_own_particular');
    echo validation_errors();
    echo form_open("tenancy/new_particular",$form_attr);
?>
    <label for="Code">Code</label>
    <?php echo form_error('Code'); ?>
    <input name="Code" type ="text" value="<?php echo set_value('Code');?>" />
    <br style="clear:both"/>
<?php
    echo form_label('Name:', 'Name');
    echo form_input('Name', '');
?>
    <br style='clear:both'>

    <label for="Type">Type:</label>
    <select name="Type">
<?php
    foreach($type->result() as $row){
        echo "<option value='$row->t_type'>".$row->t_type."</option>";
    }
?>
    </select>
    
    <br style="clear:both">

    <?php echo form_label('Address:', 'Address'),
     form_textarea('Address','')?>
    <br style="clear:both">
    <?php echo form_label('Phone:', 'Phone'),
     form_input('Phone', '')?>
    <br style="clear:both">
    <?php echo form_label('Fax:', 'Fax'),
     form_input('Fax', '')?>
    <br style="clear:both">

    <?php
        echo form_label('Contact:', 'Contact');
        echo form_input('Contact', '')?>
    <br style="clear:both">

    <?php 
        echo form_label('Position:', 'Position');
        echo form_input('Position', '');
    ?>
    <br style="clear:both">

<?php
    echo form_label('&nbsp;');
//    echo form_submit('submit', 'Submit');
    echo form_close();
    endif;
?>
</div>

