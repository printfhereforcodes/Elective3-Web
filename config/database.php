<?php

$pdo = require __DIR__ . '/config/database.php';

$stmt = $pdo->query(
    'SELECT users.full_name, users.email, applicants.contact_number, applicants.files
     FROM public.applicants
     JOIN public.users ON users.id = applicants.user_id
     ORDER BY users.id'
);

$applicants = $stmt->fetchAll();

foreach ($applicants as $applicant) {
    echo '<p>'
        . htmlspecialchars($applicant['full_name'], ENT_QUOTES, 'UTF-8')
        . ' — '
        . htmlspecialchars($applicant['email'], ENT_QUOTES, 'UTF-8')
        . '</p>';
}
