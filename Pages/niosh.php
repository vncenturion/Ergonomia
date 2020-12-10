<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Eng. Vinicius B. C. Centurion">
    <title>ANÁLISE POSTURAL</title>
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
            <a class="navbar-brand" href="../index.php">AVALIAÇÃO POSTURAL OCUPACIONAL express®</a>
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
                <h2>Formulário Equação de levantamento manual de carga NIOSH</h2>
                <p class="lead">Instruções.</p>
            </div>

            <form class="container">
                
                <p class="lead">Variáveis mensuráveis</p>

                <div class="row">

                    <div class="col">
                        
                        <label for="h_location">H - Horizontal location of the object relative to the body:</label>
                        <input class="d-block w-100" type="number" id="h_location" name="h_location" min="0" required>

                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col">

                        <label for="h_location">H - Horizontal location of the object relative to the body:</label>
                        <input class="d-block w-100" type="number" id="h_location" name="h_location" min="0" required>

                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col">

                        <label for="v_location">V - Vertical location of the object relative to the floor:</label>
                        <input class="d-block w-100" type="number" id="v_location" name="v_location" min="0" required>

                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col">

                        <label for="v_location">V - Vertical location of the object relative to the floor:</label>
                        <input class="d-block w-100" type="number" id="v_location" name="v_location" min="0" required>

                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col">

                        <label for="asymmetry">A - Asymmetry angle or twisting requirement:</label>
                        <input class="d-block w-100" type="number" id="asymmetry" name="asymmetry" min="0" required>

                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col">

                        <label for="asymmetry">A - Asymmetry angle or twisting requirement:</label>
                        <input class="d-block w-100" type="number" id="asymmetry" name="asymmetry" min="0" required>

                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>

                </div>


                <div class="row">

                    <div class="col">

                        <label for="v_distance">D - Distance the object is moved vertically:</label>
                        <input class="d-block w-100" type="number" id="v_distance" name="v_distance" min="0" required>

                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                        
                    </div>

                </div>

                <div class="row">

                    <div class="col">

                        <label for="frequency">F - Frequency and duration of lifting activity:</label>
                        <input class="d-block w-100" type="number" id="frequency" name="frequency" min="0.2" max="15" required>

                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col">

                        <label for="coupling">C - Coupling or quality of the workers grip on the object:</label>
                        <select class="custom-select d-block w-100" id="coupling" required>
                            <option value="">Escolha...</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>

                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col">

                        <label for="duration">Dur - Duration:</label>
                        <select class="custom-select d-block w-100" id="duration" required>
                            <option value="">Escolha...</option>
                            <option>1</option>
                            <option>2</option>
                            <option>8</option>
                        </select>

                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>

                </div>

                <hr class="mb-4">

                <p class="lead">Variáveis informadas</p>

                <div class="row">

                    <div class="col">

                        <label for="a_weight">L(a) - Average weight of the objects lifted:</label>
                        <input class="d-block w-100" type="number" id="a_weight" name="a_weight" min="0" required>

                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>

                </div>

                <div class="row">

                        <div class="col">

                        <label for="max_weight">L(max) - Maximum weight of the objects lifted:</label>
                        <input class="d-block w-100" type="number" id="max_weight" name="max_weight" min="0" required>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>

                </div>

                <hr class="mb-4">

                <button class="btn btn-primary btn-lg btn-block" type="submit">Gerar relatório NIOSH RWL & LI</button>

            </form>

        </div>
        
    </main>
	
    <hr class="mb-4">

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