<?php
$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.WzQ5MjgxLCJkMGI2NGNhODNlYTAzMzM2Y2QwNGVmMDkyNzY3MWNlYSIsIjIwMjMtMDYtMjMiLCJzaW5hcHNlLnByZXNjcmljYW8iLCJwYXJ0bmVyLjMuNDQ1NTUiXQ.my2OvxGDd8IjGxPi13qhwy1dxUahjOvfjgTRaXTkwng"; // Substitua pelo token real obtido via API

echo '<script type="text/javascript" src="https://integrations.memed.com.br/modulos/plataforma.sinapse-prescricao/build/sinapse-prescricao.min.js" data-token="' . $token . '"></script>';
?>
