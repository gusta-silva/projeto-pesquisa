<?php

require 'util/conexao.php';

if (!empty($_POST)) {
  //Erros de validação

  $p1Erro = null;
  $p2Erro = null;
  $p3Erro = null;
  $p4Erro = null;
  $p5Erro = null;
  $p6Erro = null;
  $p7Erro = null;
  $p8Erro = null;
  $p9Erro = null;
  $p10Erro = null;

  if(isset ($_POST["p1"])) {
  $p1 = $_POST['p1'];}
  if(isset ($_POST["p2"])) {
  $p2 = $_POST['p2'];}
  if(isset ($_POST["p3"])) {
  $p3 = $_POST['p3'];}
  if(isset ($_POST["p4"])) {
  $p4 = $_POST['p4'];}
  if(isset ($_POST["p5"])) {
  $p5 = $_POST['p5'];}
  if(isset ($_POST["p6"])) {
  $p6 = $_POST['p6'];}
  if(isset ($_POST["p7"])) {
  $p7 = $_POST['p7'];}
  if(isset ($_POST["p8"])) {
  $p8 = $_POST['p8'];}
  if(isset ($_POST["p9"])) {
  $p9 = $_POST['p9'];}
  if(isset ($_POST["p10"])) {
  $p10 = $_POST['p10'];}

  $validacao = true;

  if (empty($p1)) {
    $p1Erro = 'Informe a resposta da pergunta 1';
    $validacao = false;
  }

  if (empty($p2)) {
    $p2Erro = 'Informe a resposta da pergunta 2';
    $validacao = false;
  }

  if (empty($p3)) {
    $p3Erro = 'Informe a resposta da pergunta 3';
    $validacao = false;
  }

  if (empty($p4)) {
    $p4Erro = 'Informe a resposta da pergunta 4';
    $validacao = false;
  }

  if (empty($p5)) {
    $p5Erro = 'Informe a resposta da pergunta 5';
    $validacao = false;
  }

  if (empty($p6)) {
    $p6Erro = 'Informe a resposta da pergunta 6';
    $validacao = false;
  }

  if (empty($p7)) {
    $p7Erro = 'Informe a resposta da pergunta 7';
    $validacao = false;
  }

  if (empty($p8)) {
    $p8Erro = 'Informe a resposta da pergunta 8';
    $validacao = false;
  }

  if (empty($p9)) {
    $p9Erro = 'Informe a resposta da pergunta 9';
    $validacao = false;
  }

  if (empty($p10)) {
    $p10Erro = 'Informe a resposta da pergunta 10';
    $validacao = false;
  }

  if ($validacao) 
  {
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO cadp (p1, p2, p3, p4, p5, p6, p7, p8, p9, p10) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10));
    Banco::desconectar();
    header("Location: index.php");
  }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <script type="text/javascript">
    function validar(){
      var p1 = formperguntas.p1.value;
      var p2 = formperguntas.p2.value;
      var p3 = formperguntas.p3.value;
      var p4 = formperguntas.p4.value;
      var p5 = formperguntas.p5.value;
      var p6 = formperguntas.p6.value;
      var p7 = formperguntas.p7.value;
      var p8 = formperguntas.p8.value;
      var p9 = formperguntas.p9.value;
      var p10 = formperguntas.p10.value;
      if (p1 == ""){
            alert ('responda a pergunta de número 1');
            formperguntas.p1.focus()
            return false;
      }

      if (p2 == ""){
            alert ('responda a pergunta de número 2');
            formperguntas.p2.focus()
            return false;
      }

      if (p3 == ""){
            alert ('responda a pergunta de número 3');
            formperguntas.p3.focus()
            return false;
      }
      
      if (p4 == ""){
            alert ('responda a pergunta de número 4');
            formperguntas.p4.focus()
            return false;
      }
      
      if (p5 == ""){
            alert ('responda a pergunta de número 5');
            formperguntas.p5.focus()
            return false;
      }
      
      if (p6 == ""){
            alert ('responda a pergunta de número 6');
            formperguntas.p6.focus()
            return false;
      }
      
      if (p7 == ""){
            alert ('responda a pergunta de número 7');
            formperguntas.p7.focus()
            return false;
      }
      
      if (p8 == ""){
            alert ('responda a pergunta de número 8');
            formperguntas.p8.focus()
            return false;
      }

      if (p9 == ""){
            alert ('responda a pergunta de número 9');
            formperguntas.p9.focus()
            return false;
      }
      
      if (p10 == ""){
            alert ('responda a pergunta de número 10');
            formperguntas.p10.focus()
            return false;
      }
     alert("Seu questionário foi enviado com sucesso!");
        window.location.href = "index.php"; 
    }

  </script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Dash | Dash</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="static/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="static/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!--
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    -->

    <!-- Main Sidebar Container -->
    
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <img src="static/img/logo.png" width="120px" height="40px">
                <!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
                <p>
                 <!-- Ideflor-bio-->
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 2000px;">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Pesquisa Institucional</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Pesquisa</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12"><h3>
              Prezado Sr. / Sra., obrigado pela sua visita. Completar este breve questionário vai nos ajudar a obter os melhores resultados.</h3>
            </div>
          </div>
          <div class="mt-4"></div>
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Pesquisa</h3>
            </div>

            <form name="formperguntas" onsubmit="formularioperg" action="index.php" method="post">
              <div class="card-body">

                <h5>1. Você acredita que as pessoas envolvidas com a gestão possuem o conhecimento necessário para exercer o cargo?</h5>
                <div class="form-group <?php echo !empty($p1Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Sim<input type="radio" id="p1sim" name="p1" value="Sim"><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Não<input type="radio" id="p1nao" name="p1" value="Nao"/><span class="circle"></span>
                    </label><hr class="hr3">
                  </div>
                </div>

                <h5>2. A prioridade das tarefas é definida de forma clara para toda a equipe?</h5>
                <div class="form-group <?php echo !empty($p2Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Sim<input type="radio" id="p2sim" name="p2" value="Sim"/><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Não<input  type="radio" id="p2nao" name="p2" value="Nao"/><span class="circle"></span>
                    </label><hr class="hr3">
                  </div>
                </div>

                <h5>3. As pessoas envolvidas com a gestão demonstram que gostam do que fazem?</h5>
                <div class="form-group <?php echo !empty($p3Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Sim<input type="radio" id="p3sim" name="p3" value="Sim" /><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Não<input type="radio" id="p3nao" name="p3" value="Nao" /><span class="circle"></span>
                    </label><hr class="hr3">
                  </div>
                </div>
              <h5>4. As pessoas envolvidas com a gestão se dedicam ao trabalho?</h5>
                <div class="form-group <?php echo !empty($p4Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Sim<input type="radio" id="p4sim" name="p4" value="Sim" /><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Não<input type="radio" id="p4nao" name="p4" value="Nao"  /><span class="circle"></span>
                    </label><hr class="hr3">
                  </div>
                </div>

                <h5>5. O modelo atual da gestão é inspirador para você?</h5>
                <div class="form-group <?php echo !empty($p5Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Sim<input type="radio" id="p5sim" name="p5" value="Sim" /><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Não<input type="radio" id="p5nao" name="p5" value="Nao"  /><span class="circle"></span>
                    </label><hr class="hr3">
                  </div>
                </div>

                <h5>6. Você sente que há suporte para suas tarefas do dia a dia?</h5>
                <div class="form-group <?php echo !empty($p6Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Sim<input type="radio" id="p6sim" name="p6" value="Sim" /><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Não<input type="radio" id="p6nao" name="p6" value="Nao"  /><span class="circle"></span>
                    </label><hr class="hr3">
                  </div>
                </div>

                <h5>7. Você se sente alinhado à cultura organizacional?</h5>
                <div class="form-group <?php echo !empty($p7Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Sim<input type="radio" id="p7sim" name="p7" value="Sim" /><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Não<input type="radio" id="p7nao" name="p7" value="Nao"  /><span class="circle"></span>
                    </label><hr class="hr3">
                  </div>
                </div>

                <h5>8. Você acredita na oportunidade de crescimento em sua carreira?</h5>
                <div class="form-group <?php echo !empty($p8Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Sim<input type="radio" id="p8sim" name="p8" value="Sim" /><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Não<input type="radio" id="p8nao" name="p8" value="Nao"  /><span class="circle"></span>
                    </label><hr class="hr3">
                  </div>
                </div>

                <h5>9. Existe um relacionamento de cooperação entre os departamentos da empresa?</h5>
                <div class="form-group <?php echo !empty($p9Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Sim<input type="radio" id="p9sim" name="p9" value="Sim" /><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Não<input type="radio" id="p9nao" name="p9" value="Nao"  /><span class="circle"></span>
                    </label><hr class="hr3">
                  </div>
                </div>

                <h5>10. Você se sente respeitado pelo seu chefe/gestor/gerente?</h5>
                <div class="form-group <?php echo !empty($p10Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Sim<input type="radio" id="p10sim" name="p10" value="Sim" /><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Não<input type="radio" id="p10nao" name="p10" value="Nao"  /><span class="circle"></span>
                    </label><hr class="hr3">
                  </div>
                </div>

              <div class="card-footer">
               <button type="submit"  name="enviar" onclick="return validar()" value="enviar" class="btn btn-success">Enviar</button>
              </div>
            </form>

      </div>
    </div>
  </div>
</div>
       </div>


        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        NTI
      </div>
      <!-- Default to the left -->
      <strong>NTI <a href="#">Ideflor-bio</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="static/js/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="static/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="static/js/adminlte.min.js"></script>
</body>

</html>
