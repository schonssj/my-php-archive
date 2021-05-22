<?php

/*
    A recursive function is one that execute a self call until the defined condition has been attended.
    She's demand an elevate computational processing cost, because have to keeps her original state to be called again.
*/

function Factorial($number) {
    if($number == 1) {
        return $number;
    } else {
        return $number * Factorial($number -1);
    }
}
echo Factorial(5) . "<br>";
echo Factorial(7) . "<br>";

$hierarchy = array(
	array(
		'role'=>'CEO',
		'subordinates'=>array(
			// Start: Commercial Director.
			array(
				'role'=>'Diretor Comercial',
				'subordinates'=>array(
					// Start: Sales Manager.
					array(
						'role'=>'Sales Manager'
					)
					// End: Sales Manager.
				)
			),
			// End: Commercial Director.
			// Start: Chief Financial Officer.
			array(
				'role'=>'Chief Financial Officer',
				'subordinates'=>array(
					// Start: Accounts Payable Manager.
					array(
						'role'=>'Accounts Payable Manager',
						'subordinates'=>array(
							// Start: Payments Supervisor.
							array(
								'role'=>'Payments Supervisor'
							)
							// End: Payments Supervisor.
						)
					),
						// End: Accounts Payable Manager.
						// Start: Purchasing Manager.
						array(
							'role'=>'Purchasing Manager',
							'subordinates'=>array(
								// Start: Supplies Supervisor.
								array(
									'role'=>'Supplies Supervisor'
								)
								// End: Supplies Supervisor.
							)
						)
						// End: Purchasing Manager.
					)
				)
			)
			// End: Chief Financial Officer.
		)
    );
    
function show($roles) {
	$html = '<ul>';

	foreach ($roles as $role) {
		$html .= '<li>';
        $html .= $role['role'];
        
		if (isset($role['subordinates']) && count($role['subordinates']) > 0) {
			$html .= show($role['subordinates']);
		}
		$html .= '</li>';
	}
	$html .= '</ul>';
	return $html;
}
echo show($hierarchy);
