
    <?php
    ini_set('session.save_path', 'tmp');  
    session_start();
    //including the database connection file
    include_once("config.php");
    if ($_SESSION['logged'] == 1) { 
      try {
        $mes1 = mysqli_real_escape_string($mysqli, $_POST['mes']);
        $ano1 = mysqli_real_escape_string($mysqli, $_POST['ano']);

        $queryContaLancheMensal = "SELECT COUNT(*) as mensal FROM lanche_dia WHERE MONTH(data) = '$mes1' AND YEAR(data) = '$ano1';";
        $queryContaLancheTotal = "SELECT COUNT(*) as geral FROM lanche_dia;";
        $queryAlunosQueLancharam = "SELECT aluno.nome, COUNT(lanche_dia.id) as contagem from aluno, lanche_dia WHERE aluno.id = lanche_dia.idAluno AND MONTH(data) = '$mes1' AND YEAR(data) = '$ano1' GROUP BY lanche_dia.data ORDER BY lanche_dia.data, aluno.nome;";
        

        $valorContaLancheMensal = mysqli_query($mysqli, $queryContaLancheMensal);
        $valorContaLancheTotal = mysqli_query($mysqli, $queryContaLancheTotal);
        $alunosQueLancharam = mysqli_query($mysqli, $queryAlunosQueLancharam);
       
        $totalMensal = mysqli_fetch_array($valorContaLancheMensal);
        $totalGeral =  mysqli_fetch_array($valorContaLancheTotal);

        $_SESSION['lancheMensal'] =  $totalMensal['mensal'];
        $_SESSION['lancheTotal'] = $totalGeral['geral'];
        
        $alunos = "<table>";
            while($res = mysqli_fetch_array($alunosQueLancharam))
            {
              $nome = $res['nome'];
              $contagem = $res['contagem'];
              
              $alunos .= "<pre><tr> <td> ".$nome." </td><td> ".$contagem." </td></tr></pre>";
            }
            $alunos .= "</table>";
            $_SESSION['listaAlunos'] = $alunos;
            $_SESSION['mesAno'] = $mes1. " - ".$ano1;
        
        header("Location: visualizaRelatorio.php");
        
        } catch (mysqli_sql_exception $e) { 
          echo $queryAlunosQueLancharam;
          //header("Location: erro_banco.html");
        }
      } else {
        header("Location: acessonegado.php");
      }
      
    ?>