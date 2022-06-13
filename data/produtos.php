<?php 
  $data = [
    array('id' => 1, 'nome' => 'banana', 'valor' => 5.5),
    array('id' => 2, 'nome' => 'maça', 'valor' => 7.5),
    array('id' => 3, 'nome' => 'pera', 'valor' => 8.5),
    array('id' => 4, 'nome' => 'goiaba', 'valor' => 2.5),
  ];

  echo json_encode($data);
?>