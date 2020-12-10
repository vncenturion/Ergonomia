<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Eng. Vinicius B. C. Centurion">
    <title>APOexp RULA</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
    </style>

</head>
<body class="bg-light">
    <main role="main" class="flex-shrink-0">

        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand text-wrap" href="../index.php">AVALIAÇÃO POSTURAL OCUPACIONAL express®</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarsExample01">
                <ul class="navbar-nav mr-auto">
					<li class="nav-item">
                        <a class="nav-link" href="../Pages/rula.php">Método RULA</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="../Pages/reba.php">Método REBA</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="../Pages/niosh.php">Método NIOSH</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Pages/Projeto.html">Sobre o projeto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Pages/Autoria.html">Autoria e orientação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Pages/Referencias.html">Referências</a>
                    </li>
                </ul>
            </div>
            
        </nav>

        <div class="container">

            
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../Imagens/doctor.svg" alt="" width="72" height="72">
                <h2>Formulário Rapid Upper Limb Assessment - RULA</h2>
            </div>
			<div class="py-3 text-justify">
                <p class="lead">A avaliação começa com a observação do operador durante vários ciclos de trabalho para selecionar as tarefas e posturas de avaliação.</p>
				<p class="lead">A seleção pode ser feita da postura mantida para a maior parte do ciclo de trabalho ou onde ocorrem as cargas mais altas. Como o RULA pode ser realizado rapidamente, pode-se fazer uma avaliação de cada postura do ciclo de trabalho.</p>
				<p class="lead">Ao usar o RULA, apenas o lado direito ou esquerdo é avaliado por vez. Depois de observar o operador, pode ser óbvio que apenas um braço está sob carga; no entanto, se indeciso, o observador avaliaria os dois lados..</p>
            </div>

            <form class="container" action="rulaRelatorio.php" method="POST" target="_blank">
                


                <p class="lead font-weight-bold py-3">BRAÇO - SELECIONE POSIÇÃO</P>
                    
				<div class="row">
                        
                    <div class="col-4 text-center">
                        <label for="rula-uparm1"><img class="img-thumbnail" src="../Imagens/rula/uparm1.png"></label>
                        <p>
                            <label for="rula-uparm1">De 20° em extensão até 20° em flexão <input type="radio" id="rula-uparm1" name="upArm" value="1"></label>
                        </p>
                    </div>

                    <div class="col-4 text-center">
                        <label for="rula-uparm2a"><img class="img-thumbnail" src="../Imagens/rula/uparm2a.png"></label>
                        <p>
                            <label for="rula-uparm2a">Extensão superior a 20° <input type="radio" id="rula-uparm2a" name="upArm" value="2"></label>
                        </p>
                    </div>

                    <div class="col-4 text-center">
                        <label for="rula-uparm2b"><img class="img-thumbnail" src="../Imagens/rula/uparm2b.png"></label>
                        <p>
                            <label for="rula-uparm2b">Flexão de 20° a 45° <input type="radio" id="rula-uparm2b" name="upArm" value="2"></label>
                        </p>
                    </div>

                    <div class="col-4 text-center">
                        <label for="rula-uparm3"><img class="img-thumbnail" src="../Imagens/rula/uparm3.png"></label>
                        <p>
                            <label for="rula-uparm3">Flexão de 45° a 90° <input type="radio" id="rula-uparm3" name="upArm" value="3"></label>
                        </p>
                    </div>

                    <div class="col-4 text-center">
                        <label for="rula-uparm4"><img class="img-thumbnail" src="../Imagens/rula/uparm4.png"></label>
                    	<p>
                            <label for="rula-uparm4">Flexão superior a 90° <input type="radio" id="rula-uparm4" name="upArm" value="4"></label>
                        </p>
                    </div>
                </div>
    
                <br>

                <div class="row">
				    
					<div class="col">
                        <label for="shoulder">Ombro elevado?</label>
                        <select class="custom-select d-block w-100" id="shoulder" name = "shoulder" required>
                            <option value="">Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>
    
                    <div class="col">
                        <label for="uaAbducted">Braço em abdução (afastado lateralmente do corpo)?</label>
                        <select class="custom-select d-block w-100" id="uaAbducted" name = "uaAbducted" required>
                            <option value="">Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>
    
                    <div class="col">
                        <label for="leaning">Operador inclinado ou com o braço apoiado?</label>
                        <select class="custom-select d-block w-100" id="leaning" name = "leaning" required>
                            <option value="">Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>
    
                </div>

                <hr class="mb-4">
                
                <p class="lead font-weight-bold">ANTEBRAÇO - SELECIONE POSIÇÃO</P>
                
				<div class="row">
                        
                    <div class="col-4 text-center">
                        <label for="rula-lwarm1" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/rula/lwarm1.png"><br>
                        </label>
                        <p>
							<label for="rula-lwarm1">Flexão de 60° a 100° <input type="radio" id="rula-lwarm1" name="lwArm" value="1"></label>
                        </p> 
                    </div>

                    <div class="col-4 text-center">
                        <label for="rula-lwarm2" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/rula/lwarm2.png"><br>
                        </label>
                        <p>
							<label for="rula-lwarm2">Flexão inferior 60°ou superior a 100° <input type="radio" id="rula-lwarm2" name="lwArm" value="2"></label>
                        </p> 
                    </div>

                    <div class="col-4 text-center">
                        <label for="rula-midline" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/rula/lwarm3.png"><br>
                        </label>
                        
						<label for="rula-midline">Trabalhando além da linha média do corpo ou fora das linhas laterais?</label>
                        
						<select class="custom-select d-block w-100" id="rula-midline" name = "midline" required>
                            <option value="">Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                        
					</div>
				</div>

                <hr class="mb-4">

				<p class="lead font-weight-bold">PUNHO - SELECIONE POSIÇÃO</P>

                <div class="row">
                        
                    <div class="col-4 text-center">
                        <label for="rula-punho1" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/rula/wrist1.png"><br>
                        </label>
                        <label for="rula-punho1">Posição neutra <input type="radio" id="rula-punho1" name="wrist" value="1"></label>
                            
                    </div>

                    <div class="col-4 text-center">
                        <label for="rula-punho2" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/rula/wrist2.png"><br>
                        </label>
                        <label for="rula-punho2">Flexão ou extensão inferior a 15° <input type="radio" id="rula-punho2" name="wrist" value="2"></label>
                            
                    </div>
					<div class="col-4 text-center">
                        <label for="rula-punho3" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/rula/wrist3.png"><br>
                        </label>
                        <label for="rula-punho3">Flexão ou extensão superior a 15° <input type="radio" id="rula-punho3" name="wrist" value="3"></label>
                            
                    </div>
				</div>
				<br>
				<div class="row">
                    <div class="col-4 text-center">
                        <label for="rula-wBent" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/rula/wrist4.png"><br>
                        </label>
                        <label for="rula-wBent">Trabalhando fora da linha média?</label>
                        <select class="custom-select d-block w-100" id="rula-wBent" name = "wBent" required>
                            <option value="">Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>
                </div>

                <hr class="mb-4">
                
				<!--
				<div class="row">
                    <div class="col">
                        <label for="state">Punho</label>
                        <select class="custom-select d-block w-100" id="wrist" name="wrist" required>
                            <option value="">Escolha...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="w_bent" name="wBent" value="1">
                    <label class="custom-control-label" for="w_bent">Punho dobrado além da linha média</label>
                </div>
				
                <hr class="mb-4">
				-->

                <div class="row">
                    <div class="col">
                        <p class="lead font-weight-bold"><label for="w_twist">TORÇÃO DE PUNHO</label></p>
                        <select class="custom-select d-block w-100" id="w_twist" name="wTwist"  required>
                            <option value="">Escolha...</option>
                            <option value="1">Neutra (polegares voltados para cima)</option>
                            <option value="2">Pronação ou supinação</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>
                </div>
                
                <hr class="mb-4">
				
				<p class="lead font-weight-bold">PESCOÇO - SELECIONE POSIÇÃO</P>

                <div class="row">
                        
                    <div class="col-6 text-center">
                        <label for="rula-neck1" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/rula/neck1.png"><br>
                        </label>
                        <label for="rula-neck1">Flexão inferior a 10° <input type="radio" id="rula-neck1" name="neck" value="1"></label>
                            
                    </div>

                    <div class="col-6 text-center">
                        <label for="rula-neck2" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/rula/neck2.png"><br>
                        </label>
                        <label for="rula-neck2">Flexão de 10° a 20° <input type="radio" id="rula-neck2" name="neck" value="2"></label>
                
                    </div>
					<div class="col-6 text-center">
                        <label for="rula-neck3" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/rula/neck3.png"><br>
                        </label>
                        <label for="rula-neck3">Flexão superior a 20°  <input type="radio" id="rula-neck3" name="neck" value="3"></label>
                            
                    </div>
					<div class="col-6 text-center">
                        <label for="rula-neck4" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/rula/neck4.png"><br>
                        </label>
                        <label for="rula-neck4">Em extensão qualquer<input type="radio" id="rula-neck4" name="neck" value="4"></label>
                            
                    </div>

                    
                </div>

				<br>

				<div class="row">
				    
					<div class="col">
                        <label for="nTwist">Pescoço em torção?</label>
                        <select class="custom-select d-block w-100" id="nTwist" name = "nTwist" required>
                            <option value="">Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>
    
                    <div class="col">
                        <label for="nSideBend">Pescoço em flexão lateral?</label>
                        <select class="custom-select d-block w-100" id="nSideBend" name = "nSideBend" required>
                            <option value="">Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>
    
                </div>

				<!--
                <div class="row">
                    <div class="col">
                        <label for="state">PESCOÇO</label>
                        <select class="custom-select d-block w-100" id="neck" name="neck" required>
                            <option value="">Escolha...</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="neck_twisting">
                    <label class="custom-control-label" for="neck_twisting">Pescoço em torção</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="neck_bending">
                    <label class="custom-control-label" for="neck_bending">Pescoço em flexão/extensão lateral</label>
                </div>
				-->

                <hr class="mb-4">

				<p class="lead font-weight-bold">TRONCO - SELECIONE POSIÇÃO</P>

                <div class="row">
                        
                    <div class="col-6 text-center">
                        <label for="rula-trunk1" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/rula/trunk1.png"><br>
                        </label>
                        <label for="rula-trunk1">Posição neutra em pé ou tronco bem apoiado enquanto sentado com ângulo tronco-quadril em 90° até 100° (extensão) <input type="radio" id="rula-trunk1" name="trunk" value="1"></label>
                            
                    </div>

                    <div class="col-6 text-center">
                        <label for="rula-trunk2" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/rula/trunk2.png"><br>
                        </label>
                        <label for="rula-trunk2">Flexão inferior a 20° ou em extensão não apoiado enquanto sentado <input type="radio" id="rula-trunk2" name="trunk" value="2"></label>
                
                    </div>
					<div class="col-6 text-center">
                        <label for="rula-trunk3" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/rula/trunk3.png"><br>
                        </label>
                        <label for="rula-trunk3">Flexão superior a 20° e inferior a 60° <input type="radio" id="rula-trunk3" name="trunk" value="3"></label>
                            
                    </div>
					<div class="col-6 text-center">
                        <label for="rula-trunk4" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/rula/trunk4.png"><br>
                        </label>
                        <label for="rula-trunk4">Flexão superior a 60° <input type="radio" id="rula-trunk4" name="trunk" value="4"></label>
                            
                    </div>

                    
                </div>
				<br>
				<div class="row">
				    
					<div class="col">
                        <label for="tTwist">Tronco em torção?</label>
                        <select class="custom-select d-block w-100" id="tTwist" name = "tTwist" required>
                            <option value="">Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>
    
                    <div class="col">
                        <label for="tSideBend">Tronco em flexão lateral?</label>
                        <select class="custom-select d-block w-100" id="tSideBend" name = "tSideBend" required>
                            <option value="">Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>
    
                </div>



				<!--
                <div class="row">
                    <div class="col">
                        <label for="state">TRONCO</label>
                        <select class="custom-select d-block w-100" id="trunk" name="trunk" required>
                            <option value="">Escolha...</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="trunk_twisting">
                    <label class="custom-control-label" for="trunk_twisting">Tronco em torção</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="trunk_bending">
                    <label class="custom-control-label" for="trunk_bending">Tronco em flexão/extensão lateral</label>
                </div>
				-->

                <hr class="mb-4">

                <div class="row">
                    <div class="col">
                        <p class="lead font-weight-bold"><label for="legs">PERNAS - SELECIONE POSIÇÃO</label></p>
                        <select class="custom-select d-block w-100" id="legs" name="legs" required>
                            <option value="">Escolha...</option>
                            <option value="1">As pernas e os pés estão bem apoiados quando sentado com o peso uniformemente equilibrado</option>
							<option value="1">Em pé com o peso corporal distribuído uniformemente em ambos os pés, com espaço para mudanças de posição;</option>
                            <option value="2">As pernas e os pés não estão apoiados ou o peso está desequilibrado.</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                </div>

                <hr class="mb-4">

				<p class="lead font-weight-bold">FORÇA OU CARREGAMENTO</P>

                <div class="row">
                    <div class="col">
						<p class="lead">GRUPO A: braço, antebraço e punho</p>
                        <label for="forceA">Selecione o tipo de carregamento</label>
                        <select class="custom-select d-block w-100" id="forceA" name="forceA" required>
                            <option value="">Escolha...</option>
                            <option value="0">Ação não oferece resistência</option>
							<option value="0">Força ou carregamento INTERMITENTE inferior a 2kg</option>
							<option value="1">Força ou carregamento ESTÁTICO inferior a 2kg</option>
							<option value="1">Força ou carregamento REPETITIVO inferior a 2kg</option>
                            <option value="1">Força ou carregamento INTERMITENTE de 2kg a 10kg</option>
                            <option value="2">Força ou carregamento ESTÁTICO de 2kg a 10kg</option>
							<option value="2">Força ou carregamento REPETITIVO de 2kg a 10kg</option>
							<option value="2">Força ou carregamento INTERMITENTE superior a 10kg</option>
                            <option value="3">Força ou carregamento ESTÁTICO superior a 10kg</option>
							<option value="3">Força ou carregamento REPETITIVO superior a 10kg</option>
							<option value="3">Carga ou força de qualquer magnitude em aumento rápido ou em ação de solavanco</option>
							
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>

					<div class="col">
						<p class="lead">GRUPO B: Pescoço, tronco e pernas</p>
                        <label for="forceB">Selecione o tipo de carregamento</label>
                        <select class="custom-select d-block w-100" id="forceB" name="forceB" required>
                            <option value="">Escolha...</option>
                            <option value="0">Ação não oferece resistência</option>
							<option value="0">Força ou carregamento INTERMITENTE inferior a 2kg</option>
							<option value="1">Força ou carregamento ESTÁTICO inferior a 2kg</option>
							<option value="1">Força ou carregamento REPETITIVO inferior a 2kg</option>
                            <option value="1">Força ou carregamento INTERMITENTE de 2kg a 10kg</option>
                            <option value="2">Força ou carregamento ESTÁTICO de 2kg a 10kg</option>
							<option value="2">Força ou carregamento REPETITIVO de 2kg a 10kg</option>
							<option value="2">Força ou carregamento INTERMITENTE superior a 10kg</option>
                            <option value="3">Força ou carregamento ESTÁTICO superior a 10kg</option>
							<option value="3">Força ou carregamento REPETITIVO superior a 10kg</option>
							<option value="3">Carga ou força de qualquer magnitude em aumento rápido ou em ação de solavanco</option>
							
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>
                    
                </div>

                <hr class="mb-4">

				<p class="lead font-weight-bold">USO DE MUSCULATURA</P>

				<div class="row">
                    <div class="col">
                        <p class="lead">GRUPO A: braço, antebraço e punho</P>
						<label for="muscleA">A postura é predominantemente estática, ou seja, mantida por mais de 1 minuto, ou a ação se repete mais de quatro vezes por minuto?</label>
                        <select class="custom-select d-block w-100" id="muscleA" name="muscleA" required>
                            <option value="">Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>

					<div class="col">
						<p class="lead">GRUPO B: Pescoço, tronco e pernas</P>
                        <label for="muscleB">A postura é predominantemente estática, ou seja, mantida por mais de 1 minuto, ou a ação se repete mais de quatro vezes por minuto?</label>
                        <select class="custom-select d-block w-100" id="muscleB" name="muscleB" required>
                            <option value="">Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>
                    
                </div>

				<!--
                <p>Uso muscular</p>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="p_static" value="1">
                    <label class="custom-control-label" for="p_static">A postura é predominantemente estática (mantida por mais de 1 minuto)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="p_repeat" value="1">
                    <label class="custom-control-label" for="p_repeat">A postura é repetida mais de 4 vezes por minuto</label>
                </div>
				-->

                <hr class="mb-4">

                <button class="btn btn-primary btn-lg btn-block" type="submit">Gerar relatório RULA</button>
				<br>
				<input type="reset" value="Apagar">

            </form>


        </div>
        
    </main>

    <footer class="footer mt-4 py-3 bg-dark">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-sm-7 text-center font-weight-light">
                    <p class="small text-light mb-0 text-uppercase">Coordenação de Pós-graduação e educação continuada</p>
                    <p class="small text-light mb-0 text-uppercase">Especialização em Engenharia de Segurança do Trabalho</p>
                    <p class="small text-light mb-0 text-uppercase">Trabalho de conclusão de curso</p>
                    <p class="small text-light mb-0 text-uppercase">João Pessoa, 2020.</p>
                </div>
                <div class="col-sm-5 text-center">
                    <span class="no-gutters"><img src="../Imagens/unipe_logo branco.png" width="250p"></span>
                </div>
            </div>
                        
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>