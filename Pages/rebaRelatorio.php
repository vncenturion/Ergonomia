<html>

  	<head>
    	<title>Relatório REBA</title>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta name="description" content="">
    	<meta name="author" content="Eng. Vinicius B. C. Centurion">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<style> 
			@media print 
			{
    			.pagebreak { page-break-before: always; } /* page-break-after works, as well */
			}	
		</style>
  	</head>

  	<body class="container">
		
		<h2 class="text-center">RELATÓRIO REBA - Rapid Entire Body Assessment</h2>
		<br>
		<br>
		<?php include 'cabecalhoRelatorio.php';?>

		<div class="row">

			<div class="col">
			
				<?php

					echo "<br>";

					function resultadoTabelaA ($trunk, $neck, $legs)
					{
						
						$tabelaA = array ( //trunk, neck, leg
							1 => array (
								1 => array (
									1 => 1,
									2 => 2, 
									3 => 3,
									4 => 4
								),
								2 => array (
									1 => 1,
									2 => 2, 
									3 => 3,
									4 => 4
								),
								3 => array (
									1 => 3,
									2 => 3, 
									3 => 5,
									4 => 6
								)
							),
							2 => array (
								1 => array (
									1 => 2,
									2 => 3,
									3 => 4,
									4 => 5
								),
								2 => array (
									1 => 3,
									2 => 4,
									3 => 5,
									4 => 6
								),
								3 => array (
									1 => 4,
									2 => 5,
									3 => 6,
									4 => 7
								)
							),
							3 => array (
								1 => array (
									1 => 2,
									2 => 4,
									3 => 5,
									4 => 6
								),
								2 => array (
									1 => 4,
									2 => 5,
									3 => 6,
									4 => 7
								),
								3 => array (
									1 => 5,
									2 => 6,
									3 => 7,
									4 => 8
								)
							),
							4 => array (
								1 => array (
									1 => 3,
									2 => 5,
									3 => 6,
									4 => 7
								),
								2 => array (
									1 => 5,
									2 => 6,
									3 => 7,
									4 => 8
								),
								3 => array (
									1 => 6,
									2 => 7,
									3 => 8,
									4 => 9
								)
							),
							5 => array (
								1 => array (
									1 => 4,
									2 => 6,
									3 => 7,
									4 => 8
								),
								2 => array (
									1 => 6,
									2 => 7,
									3 => 8,
									4 => 9
								),
								3 => array (
									1 => 7,
									2 => 8, 
									3 => 9,
									4 => 9
								)
							)
						);

						$scoreA = $tabelaA[$trunk][$neck][$legs];
						if ($scoreA != 0)
						{ 
							return $scoreA;
						}
						else
						{
							return ("parametros inválidos");
						}
					}

					function resultadoTabelaB ($upArm, $lwArm, $wrist)
					{
						
						$tabelaB = array (
							1 => array (
								1 => array (
									1 => 1,
									2 => 2,
									3 => 2
								),
								2 => array (
									1 => 1,
									2 => 2,
									3 => 3
								)
							),
							2 => array (
								1 => array (
									1 => 1,
									2 => 2,
									3 => 3
								),
								2 => array (
									1 => 2,
									2 => 3,
									3 => 4
								)
							),
							3 => array (
								1 => array (
									1 => 3,
									2 => 4,
									3 => 5
								),
								2 => array (
									1 => 4,
									2 => 5,
									3 => 5
								)
							),
							4 => array (
								1 => array (
									1 => 4,
									2 => 5,
									3 => 5
								),
								2 => array (
									1 => 5,
									2 => 6,
									3 => 7
								)
							),
							5 => array (
								1 => array (
									1 => 6,
									2 => 7,
									3 => 8
								),
								2 => array (
									1 => 7,
									2 => 8,
									3 => 8
								)
							),
							6 => array (
								1 => array (
									1 => 7,
									2 => 8,
									3 => 8
								),
								2 => array (
									1 => 8,
									2 => 9,
									3 => 9
								)
							)
						);

						$scoreB = $tabelaB[$upArm][$lwArm][$wrist];
						if ($scoreB != 0)
						{ 
							return $scoreB;
						}
						else
						{
							return ("parametros inválidos");
						}
					}

					function resultadoTabelaC ($totalA, $totalB)
					{
						if ($totalA>=12)
						{
							$totalA=12;
						}
						if ($totalB>=12)
						{
							$totalB=12;
						}

						$tabelaC = array (
							1 => array (
								1 => 1,
								2 => 1,
								3 => 1,
								4 => 2,
								5 => 3, 
								6 => 3,
								7 => 4,
								8 => 5,
								9 => 6,
								10 => 7,
								11 => 7,
								12 => 7
							),
							2 => array (
								1 => 1,
								2 => 2,
								3 => 2,
								4 => 3,
								5 => 4,
								6 => 4,
								7 => 5,
								8 => 6,
								9 => 6,
								10 => 7,
								11 => 7,
								12 => 8
							),
							3 => array (
								1 => 2,
								2 => 3,
								3 => 3,
								4 => 3,
								5 => 4, 
								6 => 5,
								7 => 6,
								8 => 7,
								9 => 7,
								10 => 8,
								11 => 8,
								12 => 8
							),
							4 => array (
								1 => 3,
								2 => 4,
								3 => 4,
								4 => 4,
								5 => 5, 
								6 => 6,
								7 => 7,
								8 => 8,
								9 => 8,
								10 => 9,
								11 => 9,
								12 => 9
							),
							5 => array (
								1 => 4,
								2 => 4,
								3 => 4,
								4 => 5,
								5 => 6,
								6 => 7,
								7 => 8,
								8 => 8,
								9 => 9,
								10 => 9,
								11 => 9,
								12 => 9
							),
							6 => array (
								1 => 6,
								2 => 6,
								3 => 6,
								4 => 7,
								5 => 8,
								6 => 8,
								7 => 9,
								8 => 9,
								9 => 10,
								10 => 10,
								11 => 10,
								12 => 10
							),
							7 => array (
								1 => 7,
								2 => 7,
								3 => 7,
								4 => 8,
								5 => 9,
								6 => 9,
								7 => 9,
								8 => 10,
								9 => 10,
								10 => 11,
								11 => 11,
								12 => 11
							),
							8 => array (
								1 => 8,
								2 => 8,
								3 => 8,
								4 => 9,
								5 => 10,
								6 => 10,
								7 => 10,
								8 => 10,
								9 => 10,
								10 => 11,
								11 => 11,
								12 => 11
							),
							9 => array (
								1 => 9,
								2 => 9,
								3 => 9,
								4 => 10,
								5 => 10,
								6 => 10,
								7 => 11,
								8 => 11,
								9 => 11,
								10 => 12,
								11 => 12,
								12 => 12
							),
							10 => array (
								1 => 10,
								2 => 10,
								3 => 10,
								4 => 11,
								5 => 11,
								6 => 11,
								7 => 11,
								8 => 12,
								9 => 12,
								10 => 12,
								11 => 12,
								12 => 12
							),
							11 => array (
								1 => 11,
								2 => 11,
								3 => 11,
								4 => 11,
								5 => 12,
								6 => 12,
								7 => 12,
								8 => 12,
								9 => 12,
								10 => 12,
								11 => 12,
								12 => 12
							),
							12 => array (
								1 => 12,
								2 => 12,
								3 => 12,
								4 => 12,
								5 => 12,
								6 => 12,
								7 => 12,
								8 => 12,
								9 => 12,
								10 => 12,
								11 => 12,
								12 => 12
							)
						);

						$scoreC = $tabelaC[$totalA][$totalB];
						return $scoreC;
					}

					$trunk = $_POST['trunk'];
					$tTwist = $_POST['tTwist'];
					$trunkTotal = $trunk+$tTwist;

					$neck = $_POST['neck'];
					$nTwist = $_POST['nTwist'];
					$neckTotal = $neck+$nTwist;

					$legs = $_POST['legs'];
					$knee = $_POST['knee'];
					$legsTotal = $legs+$knee;

					$force = $_POST['force'];
					$shockForce = $_POST['shockForce'];

					$upArm = $_POST['upArm'];
					$shoulder = $_POST['shoulder'];
					$uaAbducted = $_POST['uaAbducted'];
					$leaning = $_POST['leaning'];
					$upArmTotal = $upArm+$shoulder+$uaAbducted-$leaning;
					if ($upArmTotal==0)
					{ 
						$upArmTotal = 1;
					}

					$lwArm = $_POST['lwArm'];

					$wrist = $_POST['wrist'];
					$wTwist = $_POST['wTwist'];
					$wristTotal = $wrist+$wTwist;

					$coupling = $_POST['coupling'];
					
					echo '<h4 class="text-center">RESUMO<br>GRUPO A: Tronco, pescoço e pernas</h2><br><br>';

					echo "Posição do tronco: ".$trunk."<br>";
					echo "Tronco em torção ou flexão: ".$tTwist."<br>";
					echo 'Total tronco: '.$trunkTotal.'<br>';
					echo "<br>";
					echo 'Posição pescoço: '.$neck.'<br>';
					echo "Pescoço em torção ou flexão: ".$nTwist."<br>";
					echo 'Total pescoço: '.$neckTotal.'<br>';
					echo "<br>";
					
					echo "Posição das pernas: ".$legs."<br>";
					echo "Joelhos em flexão: ".$knee."<br>";
					echo 'Total pernas: '.$legsTotal.'<br>';
					echo "<br>";

					echo '<p class= "font-weight-bold" >RESULTADO TABELA A para ['.$trunkTotal.']['.$neckTotal.']['.$legsTotal.']: '.resultadoTabelaA($trunkTotal,$neckTotal,$legsTotal).'</p>';
					echo "<br>";
					echo 'Força ou Carregamento GRUPO A: '.$force.'<br>';
					$totalA = resultadoTabelaA($trunkTotal,$neckTotal,$legsTotal)+$force;
					echo "<br>";
					echo '<p class= "font-weight-bold" >TOTAL GRUPO A: '.$totalA.'</p>';
					
				?>
			</div>
			<div class="col">

				<?php
					echo "<br>";
					echo '<h4 class="text-center">RESUMO<br>GRUPO B: Braço, antebraço e punho</h2><br><br>';
								

					echo 'Posição braço: '.$upArm.'<br>';
					echo "Ombros elevados: ".$shoulder."<br>";
					echo "Braço em abdução: ".$uaAbducted."<br>";
					echo "Operador inclinado ou com o braço apoiado : ".$leaning."<br>";
					echo "Total braço: ".$upArmTotal."<br>";
					echo "<br>";

					echo "Posição antebraço: ".$lwArm."<br>";
					echo "<br>";

					echo "Posição punho: ".$wrist."<br>";
					echo "Torção ou desvio lateral: ".$wTwist."<br>";
					echo "Total punho: ".$wristTotal."<br>";
					echo "<br>";

					echo '<p class= "font-weight-bold" >RESULTADO TABELA B para ['.$upArmTotal.']['.$lwArm.']['.$wristTotal.']: '.resultadoTabelaB($upArmTotal,$lwArm,$wristTotal).'</p>';
					echo "<br>";

					echo "Qualidade de pega/agarre GRUPO B: ".$coupling."<br>";
					$totalB = resultadoTabelaB($upArmTotal,$lwArm,$wristTotal)+$coupling;
					echo "<br>";
					echo '<p class= "font-weight-bold" >TOTAL GRUPO B: '.$totalB.'</p>';
				?>
			</div>

		</div>
		
		<br>
		<hr class="mb-4">
		<br>
		
		<div class="pagebreak"> </div>

		<h3 class="text-center">RESULTADO FINAL<br>Fatores de Risco para Distúrbios Osteomusculares</h2>
		<br>
		<br>

		<div class="row">

			<div class="col m-4">

				<?php 

					function comentarioResultado($totalC)
					{
						$mensagem;
						switch ($totalC)
						{ 
							case "1":
								$mensagem = "Posturas e ações de trabalho com pontuação geral 1 são consideradas aceitáveis se não forem mantidas ou repetidas por longos períodos.";
								break;
							case "2":
							case "3":
								$mensagem = "Uma pontuação geral de 2 ou 3 será dada às posturas de trabalho que estão fora das faixas de movimento adequadas, conforme definido na literatura, e também às posturas de trabalho que estão dentro das faixas de movimento adequadas, mas onde ações repetitivas, carga estática ou o exercício de força são necessários . São necessárias análises posteriores para essas operações e mudanças podem ser necessárias.";
								break;
							case "4":	
							case "5":
							case "6":
							case "7":
								$mensagem = "Uma pontuação geral de 4 a 7 indica aquelas posturas de trabalho que não estão dentro das faixas de movimento adequadas: o operador é obrigado a realizar movimentos repetitivos e/ou trabalho muscular estático e pode haver necessidade de exercer força.<br>Sugere-se que essas operações sejam investigadas em breve e mudanças feitas no curto prazo, enquanto medidas de longo prazo para reduzir os níveis de exposição aos fatores de risco são planejadas.";
								break;
							case "8":
							case "9":
							case "10":
							case "11":
							case "12":
							case "13":
							case "14":
							case "15":
								$mensagem = "Uma pontuação geral maior ou igual a 8 é atribuída a quaisquer posturas de trabalho no limite, ou próximo ao limite, de amplitude de movimento onde ações repetitivas ou estáticas são necessárias. Quaisquer posturas em que as forças ou cargas possam ser excessivas também estão incluídas neste grupo.<br>A investigação e modificação dessas operações são necessárias imediatamente para reduzir a carga excessiva do sistema musculoesquelético e o risco de lesões ao operador.";
								break;
						}
						return $mensagem;
					}
				?>
				
				<h4>
					<?php 
						$static = $_POST['static'];
						$repeated = $_POST['repeated'];
						$pChanges = $_POST['pChanges'];

						$parcialC = resultadoTabelaC($totalA, $totalB);
						echo 'RESULTADO TABELA C para grupo A ['.$totalA.'] grupo B ['.$totalB.']: '.$parcialC;
						echo '<br><br>';
						echo 'Postura estática: +'.$static.'<br>';
						echo "Ações repetitivas: +".$repeated."<br>";
						echo "Mudanças de posturas: +".$pChanges."<br>";

						$totalC = $parcialC+$static+$repeated+$pChanges;
						echo '<br> RESULTADO FINAL REBA ['.$totalA.']['.$totalB.']: '.$totalC;

					?>
				</h4>
				<br>
				<p class="lead text-justify"><?php echo (comentarioResultado($totalC)); ?><p>


			</div>

			<div class="col">

				<div class="p-0 m-0 border border-secondary rounded">

					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Pontuação Final</th>
								<th scope="col">Nível de risco para distúrbios osteomusculares</th>
							</tr>
						</thead>
						<tbody>
							<tr <?php if ($totalC==1){ echo 'class="bg-success"';}?>>
								<th class="text-center" scope="row">1</th>
								<td >Risco insignificante, nenhuma ação necessária</td>
							</tr>
							<tr <?php if ($totalC>=2 && $totalC<=3){ echo 'class="bg-info"';}?>>
								<th class="text-center" scope="row">2-3</th>
								<td >Risco baixo, ação pode ser necessária a depender de análises posteriores</td>
							</tr>
							<tr <?php if ($totalC>=4 && $totalC<=7){ echo 'class="bg-warning"';}?>>
								<th class="text-center" scope="row">4-7</th>
								<td>Risco médio, ações e novas análises são necessárias</td>
							</tr>
							<tr <?php if ($totalC>=8 && $totalC<=10){ echo 'class="bg-danger"';}?>>
								<th class="text-center" scope="row">8-10</th>
								<td>Alto risco, ação BREVE necessária, além de novas análises</td>
							</tr>
							<tr <?php if ($totalC>=11 && $totalC<=15){ echo 'class="bg-danger"';}?>>
								<th class="text-center" scope="row">11-15</th>
								<td>Altíssmo risco, ação IMEDIATA necessária, além de novas análises</td>
							</tr>
						</tbody>
					</table>

				</div>

			</div>
		</div>
		
		<br>

		
	
  	</body>

</html>