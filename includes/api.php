<?php
require_once __DIR__ . '/bootstrap.php';
require_once __DIR__ . '/database.php';
header('Content-Type: application/json; charset=utf-8');
set_exception_handler(function (Throwable $error): void {
    error_log((string)$error);
    json_response(['error' => 'The server could not complete this request. Check the database setup and server log.'], 500);
});

function json_response(array $body, int $status = 200): never {
    http_response_code($status);
    echo json_encode($body, JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
    exit;
}

function require_method(array $methods): void {
    if (!in_array($_SERVER['REQUEST_METHOD'], $methods, true)) {
        header('Allow: ' . implode(', ', $methods));
        json_response(['error' => 'Method not allowed.'], 405);
    }
}

function json_body(): array {
    if (stripos($_SERVER['CONTENT_TYPE'] ?? '', 'application/json') !== 0) {
        json_response(['error' => 'Send an application/json request.'], 415);
    }
    $raw = file_get_contents('php://input', false, null, 0, 8193);
    if ($raw === false || strlen($raw) > 8192) json_response(['error' => 'Request is too large.'], 413);
    try { $body = json_decode($raw, true, 32, JSON_THROW_ON_ERROR); }
    catch (JsonException $error) { json_response(['error' => 'Invalid JSON.'], 400); }
    if (!is_array($body)) json_response(['error' => 'Expected a JSON object.'], 400);
    return $body;
}

function string_field(array $body, string $key): string {
    return isset($body[$key]) && is_string($body[$key]) ? $body[$key] : '';
}