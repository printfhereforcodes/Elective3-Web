<?php

try {
    $pdo = require __DIR__ . '/config/database.php';
    $result = $pdo->query('SELECT 1')->fetchColumn();

    echo $result == 1 ? 'Connected to Supabase!' : 'Connection check failed.';
} catch (Throwable $e) {
    http_response_code(500);
    echo 'Connection failed: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');
}
