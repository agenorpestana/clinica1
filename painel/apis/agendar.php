<?php
  $url = "http://api.wordmensagens.com.br/agendar-text";
  
  $data = array('instance' => $instancia,
                'to' => $telefone_envio,
                'token' => $token,
                'message' => $mensagem,
                'data' => $data_envio);


  $options = array('http' => array(
                 'method' => 'POST',
                 'content' => http_build_query($data)
  ));

  $stream = stream_context_create($options);

  $result = @file_get_contents($url, false, $stream);

  //echo $result;
?>