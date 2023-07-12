<?php

// Dados do usuário (médico)
$data = array(
    'data' => array(
        'type' => 'usuarios',
        'attributes' => array(
            'external_id' => '10988',
            'nome' => 'José',
            'sobrenome' => 'da Silva',
            'data_nascimento' => '01/01/1985',
            'cpf' => '59948864085',
            'uf' => 'BA',
            'sexo' => 'M',
            'crm' => '94391'
        )
    )
);

// URL da API
$url = 'https://integrations.api.memed.com.br/v1/sinapse-prescricao/usuarios?api-key=iJGiB4kjDGOLeDFPWMG3no9VnN7Abpqe3w1jEFm6olkhkZD6oSfSmYCm&secret-key=Xe8M5GvBGCr4FStKfxXKisRo3SfYKI7KrTMkJpCAstzu2yXVN4av5nmL';

// Chaves de acesso
$api_key = 'iJGiB4kjDGOLeDFPWMG3no9VnN7Abpqe3w1jEFm6olkhkZD6oSfSmYCm';
$secret_key = 'Xe8M5GvBGCr4FStKfxXKisRo3SfYKI7KrTMkJpCAstzu2yXVN4av5nmL';

// Montar cabeçalho da requisição
$headers = array(
	'Accept: application/vnd.api+json',
    'Content-Type: application/json',
    'Cache-Control: no-cache'
);

// Adicionar as chaves de acesso aos cabeçalhos
$headers[] = 'api-key: ' . $api_key;
$headers[] = 'secret-key: ' . $secret_key;

// Inicializar a requisição cURL
$ch = curl_init();

// Configurar as opções da requisição cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Executar a requisição cURL e obter a resposta
$response = curl_exec($ch);

// Verificar se houve algum erro na requisição
if (curl_errno($ch)) {
    echo 'Erro na requisição: ' . curl_error($ch);
} else {
    // Exibir a resposta da API
    echo 'Resposta da API: ' . $response;
}

// Fechar a requisição cURL
curl_close($ch);

?>
