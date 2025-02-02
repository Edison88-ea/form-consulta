<?php
require_once("../database/conexao.php");

$nome = filter_input(INPUT_POST, "nome");
$nomePet = filter_input(INPUT_POST, "nomePet");
$especie = filter_input(INPUT_POST, "especie");
$agendar = filter_input(INPUT_POST, "agendar");
$motivo = filter_input(INPUT_POST, "motivo");
$data = filter_input(INPUT_POST, "data");
$horario = filter_input(INPUT_POST, "horario");


$sql = $pdo->prepare("INSERT INTO consulta(nome, nomePet, especie, agendar, motivo, data, horario) values(:nome, :nomePet, :especie, :agendar, :motivo, :data, :horario)");
$sql->bindValue("nome", $nome);
$sql->bindValue("nomePet", $nomePet);
$sql->bindValue("especie", $especie);
$sql->bindValue("agendar", $agendar);
$sql->bindValue("motivo", $motivo);
$sql->bindValue("data", $data);
$sql->bindValue("horario", $horario);
$sql->execute();

header("Location: /index.php");
exit;



