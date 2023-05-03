<?php

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=> array(
					array(
						'nome_cargo'=>'Gerente de vendas'
					)
			),
			)

				array(
					'nome_cargo'=>'Diretor Financeiro',
					'subordinados'=> array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=>array(
							'nome_cargo'=>'Supervisor de Pagamentos'
						)
				)
						),
			array(
				'nome_cargo'=>'Gerente de Compras',
				'subordinados'=>array(
				array(
					'nome_cargo'=>'Supervisor de Suprimentos'
				)
				//	Termino: Supervisor de Suprimentos
				)
	)	
	)
		)
	)

);