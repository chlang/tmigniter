<?php
    $this->load->view('inc/header');
    $this->load->view('inc/nav_edit');
?>
<script type="text/javascript">
$(function(){
    $('.cr-nav-save').live('click',function(){
        $('.ten_own_particular').trigger('submit');
    });
//    $('.cr-nav-apply').live('click',function(){
//        $('.ten_own_particular').trigger('submit');
//    });
    $('.cr-nav-cancel').live('click',function(){
        self.location='<?php echo base_url()."index.php/".$this->uri->segment(1)."/tenant_owner_particulars";?>';
        
    });

});//main function
</script>

<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    when the state is new we load the empty foam
* * * * * * * * * * * * * * * * * * * * * * * * * * * * -->
<?php
    $form_attr = array('class'=>'tenant-owner ten_own_particular');
    $action = current_url();
    echo validation_errors();
    echo form_open($action,$form_attr);
?>
    <label for="Code">Code:</label>    
    <input name="Code" readonly type="text" value="<?php echo $t_particu->row()->t_code?>"/>
    <br style="clear:both"/>
<?php echo form_label('Name:', 'Name');?>
    <input name="Name" type="text" value="<?php echo $t_particu->row()->name;?>"/>
    <br style='clear:both'>
    <label for="Type">Type:</label>
    <select name="Type">
<?php
    foreach($type->result() as $row){
        echo "<option value='$row->t_type'>".$row->t_type."</option>";
    }?>
    </select>
    <br style="clear:both">
    <?php echo form_label('Address:', 'Address'),
     form_textarea(array('value'=>$t_particu->row()->address1,'name'=>'Address'))?>
    <br style="clear:both">
    <?php echo form_label('Phone:', 'Phone'),
     form_input(array('name'=>'Phone','value'=>$t_particu->row()->phone1))?>
    <br style="clear:both">
    <?php echo form_label('Fax:', 'Fax'),
     form_input(array('name'=>'Fax','value'=>$t_particu->row()->fax1))?>
    <br style="clear:both">
    <?php
        echo form_label('Contact:', 'Contact');
        echo form_input(array('name'=>'Contact','value'=>$t_particu->row()->contact1))?>
    <br style="clear:both">
    <?php
        echo form_label('Position:', 'Position');
        echo form_input(array('name'=>'Position','value'=>$t_particu->row()->cont1_posn));
    ?>
    <br style="clear:both">
<?php
    echo form_label('&nbsp;');
//    echo form_submit('submit', 'Submit');
    echo form_close();
?>


    <?php
        //print_r($t_particu->row());
        //echo $t_particu->row()->t_code;
    ?>