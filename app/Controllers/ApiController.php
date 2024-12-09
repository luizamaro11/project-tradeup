<?php 

namespace App\Controllers;

class ApiController {
    public function consultZipcode($zipcode) {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'viacep.com.br/ws/'. $zipcode . '/json/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        $response = curl_exec($curl);

        curl_close($curl);
        
        $responseArray = json_decode($response, true);

        if (empty($responseArray)) {
            header('Content-Type: application/json');
            http_response_code(400);
            echo json_encode([
                'success' => false,
                'error' => 'Formato do CEP inválido!'
            ]);
            exit;
        }

        if (!empty($responseArray['erro'])) {
            header('Content-Type: application/json');
            http_response_code(404);
            echo json_encode([
                'success' => false,
                'error' => 'CEP não encontrado!'
            ]);
            exit;
        }

        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode($responseArray);
    }
}