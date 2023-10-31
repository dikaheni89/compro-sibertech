<?php

use App\Models\Konfigurasi_model;

$konfigurasi = new Konfigurasi_model();
$site        = $konfigurasi->listing();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="<?= strip_tags($description) ?>" name="description">
  <meta content="<?= $keywords ?>, <?= keywords() ?>" name="keywords">
  <meta property="og:site_name" content="Sibernet">
  <meta property="og:url" content="https://heloshape.com/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= strip_tags($description) ?>">
  <meta name='og:image' content='<?= base_url('assets/upload/image/' . $site['icon']) ?>'>
  <!-- For IE -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- For Resposive Device -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- For Window Tab Color -->
  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#913BFF">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#913BFF">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#913BFF">
  <title><?= $title ?></title>
  <!-- Favicons -->
  <link href="<?= base_url('assets/upload/image/' . $site['icon']) ?>" rel="icon">
  <link href="<?= base_url('assets/upload/image/' . $site['icon']) ?>" rel="apple-touch-icon">
  <!-- Main style sheet -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/frontend/css/style.css" media="all">
  <!-- responsive style sheet -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/frontend/css/responsive.css" media="all">
</head>

<body>
  <div class="main-page-wrapper">