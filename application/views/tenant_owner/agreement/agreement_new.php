<?php
    $this->load->view('inc/header');
    $this->load->view('inc/nav_edit')
?>
<script type="text/javascript">
    $(document).ready(function(){

        $('#cr-tenant-owner-agreement').tabs();
        $('.cr-nav-save').live('click',function(){
            //$('.cr-agreement-details-form').trigger('submit');
            //Check which tab is selected before submitting the form.
            
        });

    });

</script>

<div id="cr-tenant-owner-agreement">
    <ul>
        <li><a href="#cr-agreement-details">Agreement Details</a></li>
        <li><a href="#cr-deposit-details">Deposit Details</a></li>
        <li><a href="#cr-invoice-details">Invoice Details</a></li>
    </ul>

        <!-- * * * * * * * * * * * * * * * * *

                Tab 1: Agreement Details

        * * * * * * * * * * * * * * * * * * * * -->
    <div id="cr-agreement-details">
        <?php 
            echo validation_errors();
            echo form_open('tenancy/new_agreement',array('class'=>'cr-agreement-details-form'));
        ?>
<!--        <form action="new_agreement" method="POST" class="cr-agreement-details-form">-->
            <table>
                <tr>
                    <td><label for="t_code">Tenant/Owner</label></td>
                    <td>
                        <select name="t_code" style="cursor: pointer; width:197px;">
							<option <?php echo set_select('t_code',1)?> ></option>
                    <?php
                        foreach($t_o->result() as $row){
                            echo "<option".set_select('t_code',$row->t_code).">".$row->t_code."</option>";
                        }
                    ?>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td><label for="a_code">Agreement No.</label></td>
                    <td><input type="text" name="a_code" value="<?php echo set_value('a_code');?>" /></td>
                </tr>
                <tr>
                    <td><label for="a_date">Agreement Date</label></td>
                    <td><input type="text" name="a_date" value="<?php echo set_value('a_date');?>" /></td>
                </tr>
                <tr>
                    <td>Commences</td>
                    <td>
                        <input type="text" name="a_start" value="<?php echo set_value('a_start');?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Expires</td>
                    <td><input type="text" name="a_expiry" value="<?php echo set_value('a_expiry');?>"/></td>
                </tr>
                <tr>
                    <td><label for="ri_freg">Rental: bill every</label></td>
                    <td>
<!--						<input type="text" name="ri_freg" value="<?php echo set_value('ri_freg');?>" />-->
						<select name="ri_freg" class="cr-select-option">
							<option <?php echo set_select('ri_freg',1)?> ></option>
							<option <?php echo set_select('ri_freg',1)?> >1</option>
							<option <?php echo set_select('ri_freg',3)?> >3</option>
							<option <?php echo set_select('ri_freg',6)?> >6</option>
							<option <?php echo set_select('ri_freg',12)?> >12</option>
						</select>
					</td>
                </tr>
                <tr>
                    <td> <label for="sc_freg">Service charge: bill every</label></td>
                    <td>
<!--						<input type="text" name="sc_freg" value="<?php echo set_value('sc_freg');?>"/>-->
						<select name="sc_freg" class="cr-select-option">
							<option <?php echo set_select('sc_freg',1)?> ></option>
							<option <?php echo set_select('sc_freg',1)?> >1</option>
							<option <?php echo set_select('sc_freg',3)?> >3</option>
							<option <?php echo set_select('sc_freg',6)?> >6</option>
							<option <?php echo set_select('sc_freg',12)?> >12</option>
						</select>
					</td>
                </tr>
                <tr>
                    <td><label for="t-o">Billing apportionment formula</label></td>
                    <td>
<!--						<input type="text" name="t-o" value="<?php echo set_value('t-o');?>" />-->
						<select name="t-o" class="cr-select-option">
							<option <?php echo set_select('t-o',1)?> ></option>
							<option <?php echo set_select('t-o',1)?> >1</option>
							<option <?php echo set_select('t-o',3)?> >3</option>
							<option <?php echo set_select('t-o',6)?> >6</option>
							<option <?php echo set_select('t-o',12)?> >12</option>
						</select>
					</td>
                </tr>
                <tr>
                    <td><label for="cre_grace">Credit/Grace</label></td>
                    <td>
<!--						<input type="text" name="cre_grace" value="<?php echo set_value('cre_grace');?>" />-->
						<select name="cre_grace" class="cr-select-option">
							<option <?php echo set_select('cre_grace',1)?> ></option>
							<option <?php echo set_select('cre_grace',1)?> >Credit</option>
							<option <?php echo set_select('cre_grace',3)?> >Grace</option>							
						</select>
					</td>
                </tr>
                <tr>
                    <td><label for="int_or">Charge interest until date received?</label></td>
                    <td>
    <!--						<input type="text" name="int_or" value="<?php echo set_value('int_or');?>" />-->
                            <select name="int_or" class="cr-select-option">
                                  <option <?php echo set_select('int_or',1)?> ></option>
                                  <option <?php echo set_select('int_or',3)?> >YES</option>
                                  <option <?php echo set_select('int_or',6)?> >NO</option>

                            </select>
                      </td>
                </tr>                
                <tr>
                    <td><label for="no_lots">No of lots covered by this agreement</label></td>
                    <td><input type="text" name="no_lots" value="<?php echo set_value('no_lots');?>" /></td>
                </tr>
            </table>
        <br style="clear:both">
        </form>

    </div>
        <!-- * * * * * * * * * * * * * * * * *  *
        *                                       *
        *        Tab 2: Deposit Details         *
        *                                       *
        * * * * * * * * * * * * * * * * * * * * -->
		
    <div id="cr-deposit-details">

    </div>

        <!-- * * * * * * * * * * * * * * * * *  *
        *                                       *
        *        Tab 3:  Invoice Details        *
        *                                       *
        * * * * * * * * * * * * * * * * * * * * -->
    <div id="cr-invoice-details">

    </div>
    
</div>


<?php
    $this->load->view('inc/footer');



      /* * * * * * * * * * * * * * * * * * * *  *
        *                                       *
        *        DEBUG      AREA                *
        *                                       *
        * * * * * * * * * * * * * * * * * * * */

//    foreach($t_o->result() as $row){
//        print_r($row);
//        echo "<hr/>";
//    }

?>