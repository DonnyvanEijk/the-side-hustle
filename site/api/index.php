<?php
// use GuzzleHttp\Client;
// require '../../vendor/autoload.php';

// $retryCount = 0;
// $maxRetries = 3; // You can adjust this value
// $retryDelay = 1000; // Initial retry delay in milliseconds
// $client = new Client();

// do {
//     try {
//         $response = $client->request('GET', 'https://steamcharts.p.rapidapi.com/api/v1/games/tops', [
//             'headers' => [
//                 'X-RapidAPI-Host' => 'steamcharts.p.rapidapi.com',
//                 'X-RapidAPI-Key' => 'a0cc18034cmsh348810978530f7cp147134jsn9a0d017022b8',
//             ],
//         ]);

//         // Check the HTTP status code to ensure a successful response
//         if ($response->getStatusCode() === 200) {
//             $responseData = $response->getBody()->getContents();
//             // Process the response data here
//             echo "Response Data: " . $responseData;
//         } else {
//             // Handle non-200 HTTP status codes as needed
//             echo "HTTP Status Code: " . $response->getStatusCode();
//         }

//         break; // Exit the loop if the request is successful
//     } catch (GuzzleHttp\Exception\ServerException $e) {
//         if ($retryCount >= $maxRetries) {
//             // Maximum number of retries reached, handle the error accordingly
//             // You may want to log the error or throw an exception
//             break;
//         }

//         // Increment the retry count and apply exponential backoff
//         $retryCount++;
//         usleep($retryDelay * 1000); // Delay in microseconds (e.g., 1000ms)
//         $retryDelay *= 2; // Double the retry delay for exponential backoff
//     }
// } while (true);

$api_key = 'a0cc18034cmsh348810978530f7cp147134jsn9a0d017022b8';
$endpoint = 'https://steamcharts.p.rapidapi.com/api/v1/games/tops';

$headers = [
    'X-RapidAPI-Host: steamcharts.p.rapidapi.com',
    'X-RapidAPI-Key: ' . $api_key,
];

$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);

var_dump($response);

if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    // Process the API response (e.g., convert JSON to PHP array)
    $data = json_decode($response, true);
    
    // Now you can work with the data
    print_r($data);
}

curl_close($ch);
?>
