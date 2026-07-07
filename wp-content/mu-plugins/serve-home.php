<?php
/**
 * Serveste haicuautorulota_35.html direct de pe disc pentru pagina principala.
 * Fisierul se actualizeaza automat dupa fiecare deploy FTP.
 */
add_action('template_redirect', function() {
    if (is_front_page() || is_home()) {
        $file = ABSPATH . 'haicuautorulota_35.html';
        if (file_exists($file)) {
            header('Content-Type: text/html; charset=UTF-8');
            readfile($file);
            exit;
        }
    }
});
