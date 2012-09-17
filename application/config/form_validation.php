<?php

$config = array(
    'tenancy/new_particular'=>array(
            array(
                'field'   => 'Code',
                'label'   => 'Code',
                'rules'   => 'required|xss_clean|min_length[4]'
            ),
            array(
                'field'=>'Contact',
                'label'=>'Contact',
                'rules'=>'required'
            ),
            array(
                'field'=>'Address',
                'label'=>'Address',
                'rules'=>'required'
            ),
            array(
                'field'=>'Fax',
                'label'=>'Fax',
                'rules'=>'required'
            ),
            array(
                'field'=>'Name',
                'label'=>'Name',
                'rules'=>'required'
            ),
            array(
                'field'=>'Phone',
                'label'=>'Phone',
                'rules'=>'required'
            ),
            array(
                'field'=>'Type',
                'label'=>'Type',
                'rules'=>'required'
            ),
            array(
                'field'=>'Position',
                'label'=>'Position',
                'rules'=>'required|xss_clean|min_length[5]'
            )

	  ),//new particular
        'tenancy/edit_particular'=>array(
            array(
                'field'   => 'Code',
                'label'   => 'Code',
                'rules'   => 'required'
            ),
            array(
                'field'=>'Contact',
                'label'=>'Contact',
                'rules'=>'required'
            ),
            array(
                'field'=>'Address',
                'label'=>'Address',
                'rules'=>'required'
            ),
            array(
                'field'=>'Fax',
                'label'=>'Fax',
                'rules'=>'required'
            ),
            array(
                'field'=>'Name',
                'label'=>'Name',
                'rules'=>'required'
            ),
            array(
                'field'=>'Phone',
                'label'=>'Phone',
                'rules'=>'required'
            ),
            array(
                'field'=>'Type',
                'label'=>'Type',
                'rules'=>'required'
            ),
            array(
                'field'=>'Position',
                'label'=>'Position',
                'rules'=>'required|xss_clean|min_length[5]'
            )

	  ),//end edit particular
	  'tenancy/new_agreement'=>array(
		  array(
			  'field'=>'a_code',
			  'label'=>'Agreement No',
			  'rules'=>'required'
		  ),
		  array(
			  'field'=>'a_date',
			  'label'=>'Agreement date',
			  'rules'=>'required'
		  ),
		  array(
			  'field'=>'a_expiry',
			  'label'=>'Expires',
			  'rules'=>'required'
		  ),
		  array(
			  'field'=>'a_start',
			  'label'=>'Commence',
			  'rules'=>'required'
		  ),
		  array(
			  'field'=>'cre_grace',
			  'label'=>'Credit/Grace',
			  'rules'=>'required'
		  ),
		  array(
			  'field'=>'int_or',
			  'label'=>'Charge Interest until date',
			  'rules'=>'required'
		  ),
		  array(
			  'field'=>'no_lots',
			  'label'=>'Number of Lots',
			  'rules'=>'required'
		  ),
		  array(
			  'field'=>'ri_freg',
			  'label'=>'Rental bill',
			  'rules'=>'required'
		  ),
		  array(
			  'field'=>'sc_freg',
			  'label'=>'Service charge bill',
			  'rules'=>'required'
		  ),
		  array(
			  'field'=>'t_code',
			  'label'=>'Tenant/Owner',
			  'rules'=>'required'
		  ),
		  array(
			  'field'=>'t-o',
			  'label'=>'Billing apportionment formula',
			  'rules'=>'required'
		  )
		  
		
	  )//new_agreement
    );





?>
