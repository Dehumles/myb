<?php
header('Content-Type: application/json');

$apiKey = getenv('OPENAI_API_KEY');


$data = json_decode(file_get_contents('php://input'), true);
$userMessage = $data['userMessage'];

function getDistance($loadingPlace, $deliveryPlace) {
    // You would ideally call an external API like Google Maps or some geolocation service
    // For now, we are using a dummy value.
    return 200; // Return a sample distance in kilometers (adjust this with real data)
}

function calculateFTLPrice($distance) {
    return $distance * 1.35; // FTL price per kilometer
}

function getContactByCountry($country) {
    $contacts = [
        'Italy' => 'Rok Makovec - r.makovec@transmakovec.si',
        'Slovenia' => 'Tomaž Grum - t.grum@transmakovec.si',
        'Spain' => 'Mitja Birsa - m.birsa@transmakovec.si',
        'default' => 'Neli Tominec - n.tominec@transmakovec.si'
    ];

    return $contacts[$country] ?? $contacts['default'];
}

// Example logic for processing FTL inquiries
if (stripos($userMessage, 'FTL') !== false) {
    $loadingPlace = 'Ljubljana'; // For now, set fixed places (you can later enhance this with real input)
    $deliveryPlace = 'Maribor';
    $country = 'Slovenia'; // You can also enhance this by detecting country from input

    $distance = getDistance($loadingPlace, $deliveryPlace);
    $approxPrice = calculateFTLPrice($distance);
    $contact = getContactByCountry($country);

    $responseMessage = "Okvirna cena prevoza FTL od $loadingPlace do $deliveryPlace je približno $approxPrice EUR. 
                        Za natančno ceno, prosimo kontaktirajte: $contact.";

    echo json_encode(['completion' => $responseMessage]);
    exit();
}

// Send the message to OpenAI API if it's a general query
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    'model' => 'gpt-3.5-turbo',
    'messages' => [
        ['role' => 'system', 'content' => 'Please respond in Slovenian.'],
        ['role' => 'user', 'content' => $userMessage]
    ]
]));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: ' . 'Bearer ' . $apiKey
]);

$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo json_encode(['error' => curl_error($ch)]);
} else {
    echo $response;  // Return the OpenAI API response
}

curl_close($ch);
?>