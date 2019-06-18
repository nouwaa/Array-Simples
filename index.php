<?php 
//Declarando o array:
$alunos = array ("Matheus", "Jessica"," Ryan","Vitor");

// Novo: Usando a função var_dump para ver o conteudo do arrey
var_dump($alunos);

//Adicionar um item ao arrey
$alunos [] = "João";

echo "<hr />";
var_dump($alunos);

echo "<hr />";




$usuarios - array( array ("teste", "123"), //posição 0
                   array ("Joao", "321"),  // posição 1 
                   array ("Maria", "456") ); //posição 2

echo $usuarios[2] [0]; //acessa maria
echo $usuarios[2] [1]; //acessa 456