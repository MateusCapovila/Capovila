<div style="padding-left: 150px" >
<h1>Tabela de informações Olimpunasp - Modalidade: Futebol</h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 700px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="200px" style="background-color: #F7F7F7"><b><center> Nome da turma</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="250px"><center>Pontos</th>

      </tr>
    </div>

<?php

require'conexaobd.php';

$sql = "SELECT pontos_futebol.turma, pontos_futebol.pontosf, turma.nome_turma FROM pontos_futebol INNER JOIN turma ON pontos_futebol.turma = turma.id_turma ORDER BY pontosf DESC";
$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  echo"
    <tr>
       <td><center>".$cont['nome_turma']."</td>
       <td><center>".$cont['pontosf']."</td>                 
    </tr>";
}
?>
</table>
</div>