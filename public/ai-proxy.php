<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

$body   = json_decode(file_get_contents('php://input'), true);
$subjek = trim($body['subjek'] ?? '');

if (!$subjek) {
    http_response_code(400);
    echo json_encode(['error' => 'Subjek diperlukan']);
    exit;
}

// ── Letakkan API key anda di sini ──────────────────────────────────────────
$apiKey = getenv('OPENROUTER_API_KEY');
// ──────────────────────────────────────────────────────────────────────────

$payload = json_encode([
    'model'    => 'openrouter/auto',
    'messages' => [
        [
            'role'    => 'system',
            'content' => 'Anda adalah pembantu yang membantu pengguna menulis mesej profesional dalam Bahasa Melayu. Tulis mesej ringkas, sopan, dan terus kepada tujuan. Teks biasa sahaja, tiada markdown, tiada bullet point.'
        ],
        [
            'role'    => 'user',
            'content' => 'Tulis mesej untuk dihantar kepada profesor berdasarkan subjek ini: "' . addslashes($subjek) . '". Tulis dalam Bahasa Melayu, 2-3 ayat sahaja, sopan dan profesional.'
        ],
    ],
    'max_tokens'  => 200,
    'temperature' => 0.7,
]);

$ch = curl_init('https://openrouter.ai/api/v1/chat/completions');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $payload,
    CURLOPT_TIMEOUT        => 30,
    CURLOPT_HTTPHEADER     => [
        'Authorization: Bearer ' . $apiKey,
        'Content-Type: application/json',
        'HTTP-Referer: http://localhost',
        'X-Title: Portfolio Contact Form',
    ],
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlErr  = curl_error($ch);
curl_close($ch);

if ($curlErr || $response === false) {
    http_response_code(500);
    echo json_encode(['error' => 'Gagal sambung ke AI: ' . $curlErr]);
    exit;
}

$result = json_decode($response, true);

if ($httpCode !== 200) {
    http_response_code($httpCode);
    echo json_encode(['error' => $result['error']['message'] ?? 'AI error']);
    exit;
}

$text = $result['choices'][0]['message']['content'] ?? '';

if (empty(trim($text))) {
    http_response_code(500);
    echo json_encode(['error' => 'AI pulangkan respons kosong. Cuba lagi.']);
    exit;
}

echo json_encode(['mesej' => trim($text)]);
