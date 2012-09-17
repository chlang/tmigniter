<?php
    $this->load->view('inc/header');
    $this->load->view('inc/nav_edit');
?>
<script type="text/javascript">
$(function(){
    $('.cr-nav-save').live('click',function(){
        $('.ten_own_particular').trigger('submit');        
    });
    $('.cr-nav-apply').live('click',function(){
        $('.ten_own_particular').trigger('submit');
    });

});//main function
</script>

<!--* * * * * * * * * * * * * * * * * * * * * * * * * * *
*    when the state is new we load the empty foam       *
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->
<?php
    $form_attr = array('class'=>'tenant-owner ten_own_particular');
    echo validation_errors();
    echo form_open("tenancy/new_particular",$form_attr);
?>
    <label for="Code">Code</label>    
    <input name="Code" type ="text" value="<?php echo set_value('Code');?>" />
    <br style="clear:both"/>
<?php echo form_label('Name:', 'Name');?>
    <input name="Name" type="text" value="<?php echo set_value('Name');?>"/>
    <br style='clear:both'>
    <label for="Type">Type:</label>
    <select name="Type">
<?php
    foreach($type->result() as $row){
        echo "<option value='$row->t_type'".set_select('Type', $row->t_type).">".$row->t_type."</option>";
    }
?>
    </select>    
    <br style="clear:both">
    <?php echo form_label('Address:', 'Address'),
     form_textarea(array('value'=>set_value('Address'),'name'=>'Address'))?>
    <br style="clear:both">
    <?php echo form_label('Phone:', 'Phone'),
     form_input(array('name'=>'Phone','value'=>set_value('Phone')))?>
    <br style="clear:both">
    <?php echo form_label('Fax:', 'Fax'),
     form_input(array('name'=>'Fax','value'=>set_value('Fax')))?>
    <br style="clear:both">
    <?php
        echo form_label('Contact:', 'Contact');
        echo form_input(array('name'=>'Contact','value'=>set_value('Contact')))?>
    <br style="clear:both">
    <?php 
        echo form_label('Position:', 'Position');
        echo form_input(array('name'=>'Position','value'=>set_value('Position')));
    ?>
    <br style="clear:both">
<?php
    echo form_label('&nbsp;');
//    echo form_submit('submit', 'Submit');
    echo form_close();
    $this->load->view('inc/footer');
?>
