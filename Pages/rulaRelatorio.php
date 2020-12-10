<html>

  	<head>
    	<title>Relatório RULA</title>
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
		
		<h2 class="text-center">RELATÓRIO RULA - Rapid Upper Limb Assessment</h2>
		<br>
		<br>

		<?php include 'cabecalhoRelatorio.php';?>

		<div class="row">

			<div class="col">
			
				<?php

					echo "<br>";

					function resultadoTabelaA ($upArm, $lwArm, $wrist, $wTwist)
					{
						
						$tabelaA = array (
							1 => array (
								1 => array (
									1 => array (
										1 => 1,
										2 => 2),
									2 => array (
										1 => 2,
										2 => 2), 
									3 => array (
										1 => 2,
										2 => 3),
									4 => array (
										1 => 3,
										2 => 3)
								),
								2 => array (
									1 => array (
										1 => 2,
										2 => 2),
									2 => array (
										1 => 2,
										2 => 2), 
									3 => array (
										1 => 3,
										2 => 3),
									4 => array (
										1 => 3,
										2 => 3)
								),
								3 => array (
									1 => array (
										1 => 2,
										2 => 3),
									2 => array (
										1 => 3,
										2 => 3), 
									3 => array (
										1 => 3,
										2 => 3),
									4 => array (
										1 => 4,
										2 => 4)
								)
							),
							2 => array (
								1 => array (
									1 => array (
										1 => 2,
										2 => 3),
									2 => array (
										1 => 3,
										2 => 3), 
									3 => array (
										1 => 3,
										2 => 4),
									4 => array (
										1 => 4,
										2 => 4)
								),
								2 => array (
									1 => array (
										1 => 3,
										2 => 3),
									2 => array (
										1 => 3,
										2 => 3), 
									3 => array (
										1 => 3,
										2 => 4),
									4 => array (
										1 => 4,
										2 => 4)
								),
								3 => array (
									1 => array (
										1 => 3,
										2 => 4),
									2 => array (
										1 => 4,
										2 => 4), 
									3 => array (
										1 => 4,
										2 => 4),
									4 => array (
										1 => 5,
										2 => 5)
								)
							),
							3 => array (
								1 => array (
									1 => array (
										1 => 3,
										2 => 3),
									2 => array (
										1 => 4,
										2 => 4), 
									3 => array (
										1 => 4,
										2 => 4),
									4 => array (
										1 => 5,
										2 => 5)
								),
								2 => array (
									1 => array (
										1 => 3,
										2 => 4),
									2 => array (
										1 => 4,
										2 => 4), 
									3 => array (
										1 => 4,
										2 => 4),
									4 => array (
										1 => 5,
										2 => 5)
								),
								3 => array (
									1 => array (
										1 => 4,
										2 => 4),
									2 => array (
										1 => 4,
										2 => 4), 
									3 => array (
										1 => 4,
										2 => 5),
									4 => array (
										1 => 5,
										2 => 5)
								)
							),
							4 => array (
								1 => array (
									1 => array (
										1 => 4,
										2 => 4),
									2 => array (
										1 => 4,
										2 => 4), 
									3 => array (
										1 => 4,
										2 => 5),
									4 => array (
										1 => 5,
										2 => 5)
								),
								2 => array (
									1 => array (
										1 => 4,
										2 => 4),
									2 => array (
										1 => 4,
										2 => 4), 
									3 => array (
										1 => 4,
										2 => 5),
									4 => array (
										1 => 5,
										2 => 5)
								),
								3 => array (
									1 => array (
										1 => 4,
										2 => 4),
									2 => array (
										1 => 4,
										2 => 5), 
									3 => array (
										1 => 5,
										2 => 5),
									4 => array (
										1 => 6,
										2 => 6)
								)
							),
							5 => array (
								1 => array (
									1 => array (
										1 => 5,
										2 => 5),
									2 => array (
										1 => 5,
										2 => 5), 
									3 => array (
										1 => 5,
										2 => 6),
									4 => array (
										1 => 6,
										2 => 7)
								),
								2 => array (
									1 => array (
										1 => 5,
										2 => 6),
									2 => array (
										1 => 6,
										2 => 6), 
									3 => array (
										1 => 6,
										2 => 7),
									4 => array (
										1 => 7,
										2 => 7)
								),
								3 => array (
									1 => array (
										1 => 6,
										2 => 6),
									2 => array (
										1 => 6,
										2 => 7), 
									3 => array (
										1 => 7,
										2 => 7),
									4 => array (
										1 => 7,
										2 => 8)
								)
							),
							6 => array (
								1 => array (
									1 => array (
										1 => 7,
										2 => 7),
									2 => array (
										1 => 7,
										2 => 7), 
									3 => array (
										1 => 7,
										2 => 8),
									4 => array (
										1 => 8,
										2 => 9)
								),
								2 => array (
									1 => array (
										1 => 8,
										2 => 8),
									2 => array (
										1 => 8,
										2 => 8), 
									3 => array (
										1 => 8,
										2 => 9),
									4 => array (
										1 => 9,
										2 => 9)
								),
								3 => array (
									1 => array (
										1 => 9,
										2 => 9),
									2 => array (
										1 => 9,
										2 => 9), 
									3 => array (
										1 => 9,
										2 => 9),
									4 => array (
										1 => 9,
										2 => 9)
								)
							),
						);

						$scoreA = $tabelaA[$upArm][$lwArm][$wrist][$wTwist];
						if ($scoreA != 0)
						{ 
							return $scoreA;
						}
						else
						{
							return ("parametros inválidos");
						}
					}

					function resultadoTabelaB ($neck, $trunk, $legs)
					{
						
						$tabelaB = array (
							1 => array (
								1 => array (
									1 => 1,
									2 => 3
								),
								2 => array (
									1 => 2,
									2 => 3
								),
								3 => array (
									1 => 3,
									2 => 4
								),
								4 => array (
									1 => 5,
									2 => 5
								),
								5 => array (
									1 => 6,
									2 => 6
								),
								6 => array (
									1 => 7,
									2 => 7
								)
							),
							2 => array (
								1 => array (
									1 => 2,
									2 => 3
								),
								2 => array (
									1 => 2,
									2 => 3
								),
								3 => array (
									1 => 4,
									2 => 5
								),
								4 => array (
									1 => 5,
									2 => 5
								),
								5 => array (
									1 => 6,
									2 => 7
								),
								6 => array (
									1 => 7,
									2 => 7
								)
							),
							3 => array (
								1 => array (
									1 => 3,
									2 => 3
								),
								2 => array (
									1 => 3,
									2 => 4
								),
								3 => array (
									1 => 4,
									2 => 5
								),
								4 => array (
									1 => 5,
									2 => 6
								),
								5 => array (
									1 => 6,
									2 => 7
								),
								6 => array (
									1 => 7,
									2 => 7
								)
							),
							4 => array (
								1 => array (
									1 => 5,
									2 => 5
								),
								2 => array (
									1 => 5,
									2 => 6
								),
								3 => array (
									1 => 6,
									2 => 7
								),
								4 => array (
									1 => 7,
									2 => 7
								),
								5 => array (
									1 => 7,
									2 => 7
								),
								6 => array (
									1 => 8,
									2 => 8
								)
							),
							5 => array (
								1 => array (
									1 => 7,
									2 => 7
								),
								2 => array (
									1 => 7,
									2 => 7
								),
								3 => array (
									1 => 7,
									2 => 8
								),
								4 => array (
									1 => 8,
									2 => 8
								),
								5 => array (
									1 => 8,
									2 => 8
								),
								6 => array (
									1 => 8,
									2 => 8
								)
							),
							6 => array (
								1 => array (
									1 => 8,
									2 => 8
								),
								2 => array (
									1 => 8,
									2 => 8
								),
								3 => array (
									1 => 8,
									2 => 8
								),
								4 => array (
									1 => 8,
									2 => 9
								),
								5 => array (
									1 => 9,
									2 => 9
								),
								6 => array (
									1 => 9,
									2 => 9
								)
							)
						);

						$scoreB = $tabelaB[$neck][$trunk][$legs];
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
						if ($totalA>=8)
						{
							$totalA=8;
						}
						if ($totalB>=7)
						{
							$totalB=7;
						}

						$tabelaC = array (
							1 => array (
								1 => 1,
								2 => 2,
								3 => 3,
								4 => 3,
								5 => 4, 
								6 => 5,
								7 => 5
							),
							2 => array (
								1 => 2,
								2 => 2,
								3 => 3,
								4 => 4,
								5 => 4, 
								6 => 5,
								7 => 5
							),
							3 => array (
								1 => 3,
								2 => 3,
								3 => 3,
								4 => 4,
								5 => 4, 
								6 => 5,
								7 => 6
							),
							4 => array (
								1 => 3,
								2 => 3,
								3 => 3,
								4 => 4,
								5 => 5, 
								6 => 6,
								7 => 6
							),
							5 => array (
								1 => 4,
								2 => 4,
								3 => 4,
								4 => 5,
								5 => 6, 
								6 => 7,
								7 => 7
							),
							6 => array (
								1 => 4,
								2 => 4,
								3 => 5,
								4 => 6,
								5 => 6, 
								6 => 7,
								7 => 7
							),
							7 => array (
								1 => 5,
								2 => 5,
								3 => 6,
								4 => 6,
								5 => 7, 
								6 => 7,
								7 => 7
							),
							8 => array (
								1 => 5,
								2 => 5,
								3 => 6,
								4 => 7,
								5 => 7, 
								6 => 7,
								7 => 7
							)
						);

						$scoreC = $tabelaC[$totalA][$totalB];
						return $scoreC;
					}

					$shoulder = $_POST['shoulder'];
					$uaAbducted = $_POST['uaAbducted'];
					$leaning = $_POST['leaning'];
					$upArm = $_POST['upArm'];
					$upArmTotal = $upArm+$shoulder+$uaAbducted-$leaning;
					$midline = $_POST['midline'];
					$lwArm = $_POST['lwArm'];
					$lwArmTotal = $lwArm+$midline;
					$wBent = $_POST['wBent'];
					$wrist = $_POST['wrist'];
					$wristTotal = $wrist+$wBent;
					$wTwist = $_POST['wTwist'];
					$forceA = $_POST['forceA'];
					$muscleA = $_POST['muscleA'];

					echo '<h4 class="text-center">RESUMO<br>GRUPO A: Braço, antebraço e punho</h2><br><br>';

					echo 'Posição braço: '.$upArm.'<br>';
					echo "Ombros elevados: ".$shoulder."<br>";
					echo "Braço em abdução: ".$uaAbducted."<br>";
					echo "Operador inclinado ou com o braço apoiado : ".$leaning."<br>";
					echo "Total braço: ".$upArmTotal."<br>";
					echo "<br>";
					echo "Posição antebraço: ".$lwArm."<br>";
					echo "Trabalhando além da linha média do corpo ou fora das linhas laterais: ".$midline."<br>";
					echo "Total antebraço: ".$lwArmTotal."<br>";
					echo "<br>";
					echo "Posição punho: ".$wrist."<br>";
					echo "Trabalhando fora da linha média: ".$wBent."<br>";
					echo "Total punho: ".$wristTotal."<br>";
					echo "<br>";
					echo "Torção de punho: ".$wTwist."<br>";
					echo "<br>";

					echo '<p class= "font-weight-bold" >RESULTADO TABELA A para ['.$upArmTotal.']['.$lwArmTotal.']['.$wristTotal.']['.$wTwist.']: '.resultadoTabelaA($upArmTotal,$lwArmTotal,$wristTotal,$wTwist).'</p>';
					echo "<br>";
					echo 'Força ou Carregamento GRUPO A: '.$forceA.'<br>';
					echo "Uso de musculatura GRUPO A: ".$muscleA."<br>";
					$totalA = resultadoTabelaA($upArmTotal,$lwArmTotal,$wristTotal,$wTwist)+$forceA+$muscleA;
					echo "<br>";
					echo '<p class= "font-weight-bold" >TOTAL GRUPO A: '.$totalA.'</p>';
					
				?>
			</div>
			<div class="col">

				<?php
					echo "<br>";
					echo '<h4 class="text-center">RESUMO<br>GRUPO B: Pescoço, tronco e pernas</h2><br><br>';
					
					$neck = $_POST['neck'];
					$nTwist = $_POST['nTwist'];
					$nSideBend = $_POST['nSideBend'];
					$neckTotal = $neck + $nTwist + $nSideBend;
					$trunk = $_POST['trunk'];
					$tTwist = $_POST['tTwist'];
					$tSideBend = $_POST['tSideBend'];
					$trunkTotal = $trunk + $tTwist + $tSideBend;
					$legs = $_POST['legs'];
					$forceB = $_POST['forceB'];
					$muscleB = $_POST['muscleB'];

					echo 'Posição pescoço: '.$neck.'<br>';
					echo "Pescoço em torção: ".$nTwist."<br>";
					echo "Pescoço em flexão lateral: ".$nSideBend."<br>";
					echo 'Total pescoço: '.$neckTotal.'<br>';
					echo "<br>";
					echo "Posição tronco: ".$trunk."<br>";
					echo "Tronco em torção: ".$tTwist."<br>";
					echo "Tronco em flexão lateral: ".$tSideBend."<br>";
					echo 'Total tronco: '.$trunkTotal.'<br>';
					echo "<br>";
					echo "Pernas: ".$legs."<br>";	
					echo "<br>";

					echo '<p class= "font-weight-bold" >RESULTADO TABELA B para ['.$neckTotal.']['.$trunkTotal.']['.$legs.']: '.resultadoTabelaB($neckTotal,$trunkTotal,$legs).'</p>';
					echo "<br>";
					echo 'Força ou Carregamento GRUPO B: '.$forceB.'<br>';
					echo "Uso de musculatura GRUPO B: ".$muscleB."<br>";
					$totalB = resultadoTabelaB($neckTotal,$trunkTotal,$legs)+$forceB+$muscleB;
					echo "<br>";
					echo '<p class= "font-weight-bold" >TOTAL GRUPO B: '.$totalB.'</p>';
				?>
			</div>

		</div>
		<br>
		<hr class="mb-4">
		<br>
		<h4 class="text-center">RESUMO DAS POSIÇÕES SELECIONADAS</h4>
		<br>		
		<div class="row">
			<div class="col-2 text-center mx-auto d-block"> 
				<p>Braço</p>
				<img class="img-thumbnail" <?php include 'resgataFigura.php'; echo resgataUparm($upArm);?>>
			</div>
			<div class="col-2 text-center mx-auto d-block"> 
				<p>Antebraço</p>
				<img class="img-thumbnail" <?php echo resgataLwarm($lwArm);?>>
			</div>
			<div class="col-2 text-center mx-auto d-block"> 
				<p>Punho</p>
				<img class="img-thumbnail" <?php echo resgataWrist($wrist);?>>
			</div>
			<div class="col-2 text-center mx-auto d-block"> 
				<p>Pescoço</p>
				<img class="img-thumbnail" <?php echo resgataNeck($neck);?>>
			</div>
			<div class="col-2 text-center mx-auto d-block"> 
				<p>Tronco</p>
				<img class="img-thumbnail" <?php echo resgataTrunk($trunk);?>>
			</div>
		</div>
		<br>
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
							case "2":
								$mensagem = "Posturas e ações de trabalho com pontuação geral 1 ou 2 são consideradas aceitáveis se não forem mantidas ou repetidas por longos períodos.";
								break;
							case "3":
							case "4":
								$mensagem = "Uma pontuação geral de 3 ou 4 será dada às posturas de trabalho que estão fora das faixas de movimento adequadas, conforme definido na literatura, e também às posturas de trabalho que estão dentro das faixas de movimento adequadas, mas onde ações repetitivas, carga estática ou o exercício de força são necessários . São necessárias análises posteriores para essas operações e mudanças podem ser necessárias.";
								break;
							case "5":
							case "6":
								$mensagem = "Uma pontuação geral de 5 ou 6 indica aquelas posturas de trabalho que não estão dentro das faixas de movimento adequadas: o operador é obrigado a realizar movimentos repetitivos e/ou trabalho muscular estático e pode haver necessidade de exercer força.<br>Sugere-se que essas operações sejam investigadas em breve e mudanças feitas no curto prazo, enquanto medidas de longo prazo para reduzir os níveis de exposição aos fatores de risco são planejadas.";
								break;
							case "7":
								$mensagem = "Uma pontuação geral de 7 é atribuída a quaisquer posturas de trabalho no limite, ou próximo ao limite, de amplitude de movimento onde ações repetitivas ou estáticas são necessárias. Quaisquer posturas em que as forças ou cargas possam ser excessivas também estão incluídas neste grupo.<br>A investigação e modificação dessas operações são necessárias imediatamente para reduzir a carga excessiva do sistema musculoesquelético e o risco de lesões ao operador.";
								break;
						}
						return $mensagem;
					}
				?>
				
				<h4><?php 
						$totalC = resultadoTabelaC($totalA, $totalB);
						echo 'RESULTADO TABELA C para ['.$totalA.']['.$totalB.']: '.$totalC;
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
							<tr <?php if ($totalC==2){ echo 'class="bg-success"';}?>>
								<th class="text-center" scope="row">2</th>
								<td>Risco insignificante, nenhuma ação necessária</td>
							</tr>
							<tr <?php if ($totalC==3){ echo 'class="bg-info"';}?>>
								<th class="text-center" scope="row">3</th>
								<td>Baixo risco, a mudança pode ser necessária</td>
							</tr>
							<tr <?php if ($totalC==4){ echo 'class="bg-info"';}?>>
								<th class="text-center" scope="row">4</th>
								<td>Baixo risco, a mudança pode ser necessária</td>
							</tr>
							<tr <?php if ($totalC==5){ echo 'class="bg-warning"';}?>>
								<th class="text-center" scope="row">5</th>
								<td>Risco médio, investigação adicional necessária, mudança breve requerida</td>
							</tr>
							<tr <?php if ($totalC==6){ echo 'class="bg-warning"';}?>>
								<th class="text-center" scope="row">6</th>
								<td>Risco médio, investigação adicional necessária, mudança breve requerida</td>
							</tr>
							<tr <?php if ($totalC==7){ echo 'class="bg-danger"';}?>>
								<th class="text-center" scope="row">7</th>
								<td>Risco muito alto, implemente a mudança imediatamente</td>
							</tr>
						</tbody>
					</table>

				</div>

			</div>
		</div>
		
		<br>

		
	
  	</body>

</html>