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

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();
$apiKey = $_ENV['OPENROUTER_API_KEY'] ?? '';

if (empty($apiKey)) {
    http_response_code(500);
    echo json_encode(['error' => 'API key tidak dijumpai dalam .env']);
    exit;
}

// model yang kene cetas
$models = [
    'meta-llama/llama-3.1-8b-instruct:free',
    'anthropic/claude-haiku-4-5',
    'mistralai/mistral-7b-instruct:free',
    'google/gemma-3-4b-it:free',
    'qwen/qwen3-8b:free',
    'openrouter/auto'
];

$text = '';

$debugLog = [];

foreach ($models as $model) {
    $payload = json_encode([
        'model'    => $model,
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

    // ── TAMBAH BARIS DEBUG NI ──────────────────────────────
    $debugLog[] = [
        'model'    => $model,
        'httpCode' => $httpCode,
        'curlErr'  => $curlErr,
        'response' => json_decode($response, true),
    ];

    // skip model ni kalau ada error
    if ($curlErr || $response === false || $httpCode !== 200) continue;

    $result = json_decode($response, true);
    $text   = trim($result['choices'][0]['message']['content'] ?? '');

    // dapat response, stop loop
    if (!empty($text)) break;
}

if (empty($text)) {
    http_response_code(500);
    // ── TUKAR error message jadi include debug log ──
    echo json_encode([
        'error' => 'Semua model gagal',
        'debug' => $debugLog,   // <-- tengok output ni
    ]);
    exit;
}

echo json_encode(['mesej' => $text]);
