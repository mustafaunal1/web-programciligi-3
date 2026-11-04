<?php require_once 'baglan.php'; session_start(); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>OtoPusula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero { background: url('https://images.unsplash.com/photo-1617788138017-80ad40651399?auto=format&fit=crop&w=1600&q=80') center/cover; min-height: 70vh; display: flex; align-items: center; }
        .hero-overlay { background: rgba(10, 15, 30, 0.8); width: 100%; height: 100%; min-height: 70vh; display: flex; align-items: center; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <div class="container">
            <a class="navbar-brand text-info fw-bold" href="index.php">OtoPusula</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Ana Sayfa</a></li>
                    <li class="nav-item"><a class="btn btn-info ms-3 fw-bold" href="#">Giriş Yap</a></li>
                </ul>
            </div>
        </div>
    </nav>