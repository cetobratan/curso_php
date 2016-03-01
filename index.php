<?php 


$_comidas = [		'chaufita'

					'Sopa de Mote'
					'Arroz con pato'
					'Arroz con pato'




	];
	echo "<hr>";

	echo $_comidas[0]."<br>";
	echo $_comidas[1]."<br>";
	echo $_comidas[2]."<br>";
	echo $_comidas[3]."<br>";
	$_comidas[] = 'Caldo de gallina';
	
	array_push($_comidas,['Seco de cabrito','Lomito Saltado']);

$_html = '<ul>';

$_html .= '<li>A</li>';

$_html .= '<li>B/li>';

$_html .= '<li>C</li>';

$_html .= '</ul>';

echo $_html;
echo"<hr>LISTADO</hr>";
foreach ($_comidas as $key => $v):

		if(is_array($_comidas[$key])) :
					$_vector = $_comidas[$key];
				foreach ($vector as $value ):
				
					echo | $value.'<br>';
				endforeach;

				else:

					echo $key. '=>'. $v '<br>';	

					endif;


	
echo $v. '<br>';

endforeach;







echo "<pre>";
print_r($_comidas);	



























 ?>