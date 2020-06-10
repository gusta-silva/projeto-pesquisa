<?php

require 'util/conexao.php';

if (!empty($_POST)) {
  //Erros de validação

  $nomeErro = null;
  $lotacaoErro = null;
  $cpfErro = null;
  $matriculaErro = null;
 

  $nome = $_POST['nome'];
  $lotacao = $_POST['lotacao'];
  $cpf = $_POST['cpf'];
  $matricula = $_POST['matricula'];
 
  
  $validacao = true;

if (empty($nome)) {
    $nomeErro = 'Informe o seu nome';
    $validacao = false;
  }

  if (empty($lotacao)) {
    $plotacaoErro = 'Informe a sua lotação';
    $validacao = false;
  }

  if (empty($cpf)) {
    $cpfErro = 'Informe o seu CPF';
    $validacao = false;
  }

  if (empty($matricula)) {
    $matriculaErro = 'Informe a sua matricula';
    $validacao = false;
  }

if ($validacao) {
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO usuario (nome, lotacao, cpf, matricula) VALUES(?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($nome, $lotacao, $cpf, $matricula));
    Banco::desconectar();
    header("Location: pages/pagina.php");
  }
}
?>

<html lang="pt-BR">
<head><meta charset="utf-8"><link rel="stylesheet" href="static/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script>
function TestaCPF(elemento) {
            cpf = elemento.value;
              cpf = cpf.replace(/[^\d]+/g, '');
                  if (cpf == '') return elemento.style.backgroundColor = "tomato";
  // Elimina CPFs invalidos conhecidos    
                  if (cpf.length != 11 ||
                  cpf == "00000000000" ||
                  cpf == "11111111111" ||
                  cpf == "22222222222" ||
                  cpf == "33333333333" ||
                  cpf == "44444444444" ||
                  cpf == "55555555555" ||
                  cpf == "66666666666" ||
                  cpf == "77777777777" ||
                  cpf == "88888888888" ||
                  cpf == "99999999999")
                              return elemento.style.backgroundColor = "tomato";
                            // Valida 1o digito 
                            add = 0;
                            for (i = 0; i < 9; i++)
                              add += parseInt(cpf.charAt(i)) * (10 - i);
                            rev = 11 - (add % 11);
                            if (rev == 10 || rev == 11)
                              rev = 0;
                            if (rev != parseInt(cpf.charAt(9)))
                              return elemento.style.backgroundColor = "tomato";
                            // Valida 2o digito 
                            add = 0;
                            for (i = 0; i < 10; i++)
                              add += parseInt(cpf.charAt(i)) * (11 - i);
                            rev = 11 - (add % 11);
                            if (rev == 10 || rev == 11)
                              rev = 0;
                            if (rev != parseInt(cpf.charAt(10)))
                             return elemento.style.backgroundColor = "tomato";
                             return elemento.style.backgroundColor = "";

          } 

                                    function mascara(i){
                                       
                                       var v = i.value;
                                       
                                       if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
                                          i.value = v.substring(0, v.length-1);
                                          return;
                                       }
                                       
                                       i.setAttribute("maxlength", "14");
                                       if (v.length == 3 || v.length == 7) i.value += ".";
                                       if (v.length == 11) i.value += "-";
                                     }
                                     

  

    $("#matricula12").mask("00000000-0");



 </script> 


</head>
<body>
<!--<img class="imagem" src="logo.jpg" class="imagemcont" height="200px" width="400px">-->
<div class="container">  
  
  <form name="formcad" style="background-color: white" id="contact" action="index.php" method="post">
    
 <br><img src="static/img/logo.jpg" class="imagemcont" height="36%" width="100%"></br>

    <br><h3>Informe os dados a seguir</h3><hr></br>
    
    <fieldset>
     <input placeholder="Seu nome completo" name="nome" type="text" tabindex="1" required>
    </fieldset>
    <fieldset>
                <input placeholder="Lotação (Ex.:GEP)" type="text" name="lotacao" tabindex="2" required list="iLotacao">
                  <datalist id="iLotacao">
                     <option value="ASCOM (Assessoria de comunicação)"></option>
                      <option value="DAF (Dir. de Gestão Administrativa e Financeira)"></option>
                      <option value="Gabinete"></option>
                      <option value="GLOG (Gerência de logística)"></option>
                      <option value="GMP (Gerência de patrimônio)"></option>
                      <option value="GEP (Gerência de pessoas)"></option>
                      <option value="GOF (Gerência Orçamentária e Financeira)"></option>
                        <option value="NCI (Núcleo de Controle Interno)"></option>
                        <option value="NGEO (Núcleo de Geotecnologias)"></option>
                        <option value="NUPLAN (Núcleo de Planejamneto Articulação Institucional e Projetos Especiais"></option>
                        <option value="NTI (Núcleo de Tecnologia da Informação)"></option>
                        <option value="Presidência"></option>
                        <option value="PROJUR (Procuradoria Jurídica)"></option>
                        <option value="ST. de Contratos (Ger. de Gestão de Contratos)"></option>
                        <option value="Dir. de desenvolvimento da Cadeia Florestal"></option>
                        <option value="Dir. do Fundo de Des. Florestal"></option>
                        <option value=""></option>
                        <option value="Dir. de Gestão da Biodiversidade"></option>
                        <option value="Dir. de Gestão de Florestas Publicas de Produção"></option> 
                            <option value="Dir. de Gestão e Monitoramento de Unidades de Conservação"></option>
                            <option value="Escritório Regional Carajás (Marabá)"></option>
                            <option value="Escritório Regional Xingu (Altamira)"></option>
                            <option value="Escritório Regional Baixo Amazonas I (Santarém)"></option>
                            <option value="Escritório Regional Baixo Amazonas II (Monte Alegre)"></option> 
                            <option value="Ger. de Biodiversidade"></option>
                            <option value="Ger de Fundos e Parcerias"></option>
                            <option value="Ger. de Sociobiodiversidade"></option>
                            <option value="Ger. de Manejo Florestal Silvicultura e Extrativismo"></option>
                            <option value="Ger. de Monitoramento Florestal"></option>
                            <option value="Ger. de Planejamento e Análises Florestais"></option>
                            <option value="Ger. de Produção e Apoio Arranjos Prod. Florestais"></option>
                            <option value="Ger. de Tecnologia Florestal"></option>
                            <option value="Ger. Reg. Administrativa do Araguaia"></option>
                            <option value="Ger. Reg. Adminstrativa Belém"></option>
                            <option value="Ger. Reg. Adminstrativa Calha Norte I"></option>
                            <option value="Ger. Reg. Adminstrativa Calha Norte II"></option>
                            <option value="Ger. Reg. Adminstrativa Calha Norte III"></option>
                            <option value="Ger. Reg. Administrativa Marajó"></option>
                            <option value="Ger. Reg. Administrativa Mosaico Lago de Tucurui"></option>
                            <option value="Ger. Reg. Administrativa Nordeste Paraense"></option>
                            <option value="Ger. Reg. Administrativa Xingu"></option>

</datalist>
    </fieldset>
    <fieldset>
      <input placeholder="CPF (Somente números)" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" onblur="TestaCPF(this)" oninput="mascara(this)" type="text"  maxlength="14" tabindex="3" oninvalid="return cpf_incorreto(this);" required="cpf">
    </fieldset>
    <fieldset>
      <input placeholder="Matrícula (Número da matrícula)" id="matricula12" name="matricula" type= "text" tabindex="4" maxlength="10" required>
    </fieldset>
   
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar informações</button>
    </fieldset>  
        
</form>

</div>
</div>
</body>
</html>
