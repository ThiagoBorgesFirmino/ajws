<?php
declare(strict_types=1);
header('Content-Type: application/json; charset=utf-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Carrega PHPMailer manualmente
$base = __DIR__ . '/src';
if (!class_exists(PHPMailer::class)) {
    require_once $base . '/Exception.php';
    require_once $base . '/PHPMailer.php';
    require_once $base . '/SMTP.php';
}

$DEBUG = true; // << coloque false quando finalizar

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);
        echo json_encode(['status' => false, 'msg' => 'Método não permitido.']);
        exit;
    }

    $name       = trim($_POST['name'] ?? '');
    $email      = trim($_POST['email'] ?? '');
    $telefone   = trim($_POST['telefone'] ?? '');
    $message    = trim($_POST['message'] ?? '');
    $dispositivo= trim($_POST['dispositivo'] ?? '');
    $rb         = trim($_POST['rb'] ?? '');

    if ($rb !== '') { // honeypot
        echo json_encode(['status' => true, 'msg' => 'Mensagem enviada com sucesso!']);
        exit;
    }

    $erros = [];
    if ($name === '') $erros[] = 'Digite seu nome.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $erros[] = 'Digite um e-mail válido.';
    if ($message === '') $erros[] = 'Digite sua mensagem.';
    if ($erros) {
        echo json_encode(['status' => false, 'msg' => implode(' ', $erros)]);
        exit;
    }

    $html = "<div style='font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#333'>
        <h2 style=\"margin:0 0 10px\">Contato pelo site</h2>
        <p><strong>Nome:</strong> ".htmlspecialchars($name)."</p>
        <p><strong>E-mail:</strong> ".htmlspecialchars($email)."</p>
        <p><strong>Telefone:</strong> ".htmlspecialchars($telefone)."</p>
        <p><strong>Dispositivo:</strong> ".htmlspecialchars($dispositivo)."</p>
        <hr>
        <p style='white-space:pre-wrap'>".nl2br(htmlspecialchars($message))."</p>
    </div>";

    $alt = "Contato pelo site\n\nNome: $name\nE-mail: $email\nTelefone: $telefone\nDispositivo: $dispositivo\n\nMensagem:\n$message\n";

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->Host       = 'mail.smtp2go.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'naoresponderporfavor@ajung.com.br'; // TODO
    $mail->Password   = 'jLyyGO41zUx9NkMK'; // TODO
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 2525;

    if ($DEBUG) {
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = function ($str, $level) {
            error_log('[PHPMailer][SMTP]['.$level.'] '.$str);
        };
    }

    // From do mesmo domínio verificado no SMTP2GO
    $mail->setFrom('ajung@ajung.com.br', 'Site - Formulário'); // TODO
    $mail->addAddress('ajung@ajung.com.br', 'Comercial');  // TODO
    $mail->addCc('adriana@ajung.com.br', 'Comercial');  // TODO
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'Contato pelo site';
    $mail->Body    = $html;
    $mail->AltBody = $alt;

    $mail->send();

    echo json_encode(['status' => true, 'msg' => 'Mensagem enviada com sucesso!']);
} catch (Exception $e) {
    error_log('[PHPMailer][ERROR] '.$e->getMessage());
    if (isset($mail)) {
        error_log('[PHPMailer][ErrorInfo] '.$mail->ErrorInfo);
    }
    echo json_encode([
        'status' => false,
        'msg' => $DEBUG
            ? ('Erro: '.$e->getMessage().' | Info: '.($mail->ErrorInfo ?? 'n/d'))
            : 'Não foi possível enviar. Tente novamente mais tarde.'
    ]);
}
