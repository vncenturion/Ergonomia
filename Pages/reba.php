<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Eng. Vinicius B. C. Centurion">
    <title>APOexp REBA</title>
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
                <h2>Formulário Rapid Entire Body Assessment - REBA</h2>
			</div>
			<div class="py-3 text-justify">
                <p class="lead">O desenvolvimento do REBA teve como objetivo: a) desenvolver um sistema de análise postural sensíveis aos riscos músculo-esqueléticas em uma variedade de tarefas; b) dividir o corpo em segmentos a serem codificados individualmente, com referência aos planos de movimento; c) fornecer um sistema de pontuação para a atividade muscular causada por estática, dinâmica, rápida mudança ou posturas instáveis; d) refletir que o acoplamento é importante no manuseio de cargas, mas pode não ser sempre via as mãos; e) apontar um nível de ação com uma indicação de urgência; f) requerer equipamento mínimo: método de caneta e papel.</p>
            </div>

            <form class="container" action="rebaRelatorio.php" method="POST" target="_blank">
                
                
                <p class="lead font-weight-bold">GRUPO A: TRONCO, PESCOÇO E PERNAS</P>
                
				<div class="row  py-3">
                    
					<div class="col-6 text-center">
                        <p class="lead">TRONCO</p>
						<label for="reba-trunk" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/reba/trunk1.png"><br>
                        </label>
                        <label for="reba-trunk">Selecione posição</label>
                        <select class="custom-select d-block w-100 text-wrap " id="reba-trunk" name = "trunk" required>
                            <option value="">Escolha...</option>
                            <option value="1">1: Posição neutra</option>
                            <option value="2">2: Extensão inferior a 20°</option>
							<option value="3">3: Extensão superior a 20°</option>
							<option value="2">2: Flexão inferior a 20°</option>
							<option value="3">3: Flexão de 20° a 60°</option>
                            <option value="4">4: Flexão superior a 60°</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
						<br>
                        <label for="tTwist">Torção ou Flexão lateral (tronco)?</label>
                        <select class="custom-select d-block w-100" id="tTwist" name="tTwist" required>
                        <option value="">Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    
                    </div>

					<div class="col-6 text-center">
						<p class="lead">PESCOÇO</p>
                        <label for="reba-neck" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/reba/neck1.png"><br>
                        </label>
                        <label for="reba-neck">Selecione posição</label>
                        <select class="custom-select d-block w-100" id="reba-neck" name = "neck" required>
                            <option value="">Escolha...</option>
                            <option value="1">1: Flexão inferior a 20°</option>
                            <option value="2">2: Flexão superior a 20°</option>
							<option value="2">2: Extensão superior a 0°</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
						<br>
                        <label for="nTwist">Torção ou Flexão lateral (pescoço)?</label>
                        <select class="custom-select d-block w-100" id="nTwist" name="nTwist" required>
                        <option value="">Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>
				</div>

				<div class="row py-3">

					<div class="col-6 text-center">
						<p class="lead">PERNAS</p>
                        <label for="reba-legs1" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/reba/legs1.png"><br>
                        </label>
                        <label for="reba-legs1">Selecione posição</label>
                        <select class="custom-select d-block w-100" id="reba-legs1" name = "legs" required>
                            <option value="">Escolha...</option>
                            <option value="1">1: Peso distribuido bilateralmente</option>
							<option value="1">1: Caminhando ou sentado</option>
							<option value="2">2: Peso distribuido unilateralmente</option>
							<option value="2">2: Posição instável</option>
							<option value="2">2: Um dos pés não apoiado ou semi apoiado</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>

					<div class="col-6 text-center">
						<p class="lead">JOELHOS</p>
                        <label for="reba-knee1" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/reba/knee1.png"><br>
                        </label>
                        <label for="reba-knee1">Selecione posição</label>
                        <select class="custom-select d-block w-100" id="reba-knee1" name = "knee" required>
                            <option value="">Escolha...</option>
                            <option value="0">0: Flexão inferior a 30°</option>
							<option value="1">1: Flexão de 30° a 60°</option>
                            <option value="2">2: Flexão superior a 60°</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    </div>
                </div>

				<hr class="mb-4">

				<div class="row">
                    
					<div class="col">
                        
						<label for="force">FORÇA OU CARREGAMENTO</label>
                        <select class="custom-select d-block w-100" id="force" value="force" required>
                            <option value="">Escolha...</option>
                            <option>0:  menor que 5 kg</option>
                            <option>1: entre 5 kg e 10 kg</option>
                            <option>2: maior que 10 kg</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
						
                    </div>
					<div class="col">
                        
                        <label for="shockForce">Carga ou força em aumento rápido ou em ação de solavanco?</label>
                        <select class="custom-select d-block w-100" id="shockForce" name="shockForce" required>
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

				<p class="lead font-weight-bold pb-3">GRUPO B: BRAÇO, ANTEBRAÇO E PUNHO</P>
                
				<div class="row py-3">
                    
					<div class="col-6 text-center">

                        <p class="lead">BRAÇO</p>
						<label for="reba-uparm1" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/reba/uparm1.png"><br>
                        </label>
                        <label for="reba-uparm1">Selecione posição</label>
                        <select class="custom-select d-block w-100 text-wrap" id="reba-uparm1" name="upArm" required>
                            <option value="">Escolha...</option>
                            <option value="1">1: Extensão inferior a 20°</option>
                            <option value="1">1: Flexão inferior a 20°</option>
							<option value="2">2: Extensão superior a 20°</option>
							<option value="2">2: Flexão de 20° a 45°</option>
							<option value="3">3: Flexão de 45° a 90°</option>
                            <option value="4">4: Flexão superior a 90°</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
                    
                    </div>

					<div class="col-6 text-center">

						<p class="lead">ANTEBRAÇO</p>
                        <label for="reba-lwarm1" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/reba/lwarm1.png"><br>
                        </label>
                        <label for="reba-lwarm1">Selecione posição</label>
                        <select class="custom-select d-block w-100" id="reba-lwarm1" name="lwArm" required>
                            <option value="">Escolha...</option>
                            <option value="1">1: Flexão de 60° a 100°</option>
                            <option value="2">2: Flexão inferior a 60°</option>
							<option value="2">2: Flexão superior a 100°</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
						
                    </div>

				</div>

				<div class="row py-3">

					<div class="col-6">
						
						<label for="shoulder">Ombro elevado?</label>
                        <select class="custom-select d-block w-100" id="shoulder" name = "shoulder" required>
                            <option value="">Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
						<br>
						<label for="uaAbducted">Braço em abdução (afastado lateralmente do corpo)?</label>
                        <select class="custom-select d-block w-100" id="uaAbducted" name = "uaAbducted" required>
                            <option value="">Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
						<br>
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

					<div class="col-6 text-center">
						<p class="lead">PUNHO</p>
                        <label for="reba-wrist1" class="d-block">
                            <img class="img-thumbnail" src="../Imagens/reba/wrist1.png"><br>
                        </label>
                        <label for="reba-wrist1">Selecione posição</label>
                        <select class="custom-select d-block w-100" id="reba-wrist1" name="wrist" required>
                            <option value="">Escolha...</option>
                            <option value="1">1: Flexão de 0° a 15°</option>
							<option value="1">1: Extensão de 0° a 15°</option>
							<option value="2">2: Flexão superior a 15°</option>
							<option value="2">2: Extensão superior a 15°</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
						<br>
                        <label for="wTwist">Torção ou desvio lateral (punho)?</label>
                        <select class="custom-select d-block w-100" id="wTwist" name="wTwist" required>
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

                <div class="row">
                    
					<div class="col">

						<label for="coupling">QUALIDADE DA PEGA/AGARRE</label>
                        <select class="custom-select d-block w-100" id="coupling" name="coupling" required>
                            <option value="">Escolha...</option>
                            <option value="0">0: (boa) Agarre manual bem ajustado para pega, permitindo força de preensão.</option>
                            <option value="1">1: (razoável) Agarre manual aceitável, mas não ideal ou a pega é aceitável por adequação de outras partes do corpo.</option>
                            <option value="2">2: (pobre) Agarre manual não aceitável, embora possível.</option>
                        	<option value="3">3: (inadeguada) Preensão inadequada e insegura, sem agarre manual; Pega é inaceitável, utilizando outras partes do corpo.</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>
						<p> 
                    </div>
                </div>

                <hr class="mb-4">

                <p class="lead font-weight-bold pb-3">ATIVIDADE DE MUSCULATURA</p>
				
				<div class="row">

					<div class="col-4">
						
						<label for="static">Uma ou mais partes do corpo estão em postura estática (mantidas por mais de 1 minuto)?</label>
                        <select class="custom-select d-block w-100" id="static" name = "static" required>
                            <option value="">Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>

					</div>
					<div class="col-4">

						
						<label for="repeated">Ações repetitivas em pequena amplitude (repetidas mais de 4 vezes por minuto, exceto caminhar)?</label>
                        <select class="custom-select d-block w-100" id="repeated" name = "repeated" required>
                            <option value="">Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <div class="invalid-feedback">
                            Favor inserir uma entrada válida.
                        </div>

					</div>
					<div class="col-4">
						
						<label for="pChanges">Ações que causa mudanças rápidas de grande amplitude nas posturas ou postura com base instável?</label>
                        <select class="custom-select d-block w-100" id="pChanges" name = "pChanges" required>
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

                <button class="btn btn-primary btn-lg btn-block" type="submit">Gerar relatório REBA</button>
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