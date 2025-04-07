<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// メンテナンスモードチェック（パスを修正）
if (file_exists($maintenance = __DIR__ . '/posting-map-test/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Composer オートローダー読み込み（パスを修正）
require __DIR__ . '/posting-map-test/vendor/autoload.php';

// アプリケーションブートとリクエスト処理（パスを修正）
(require_once __DIR__ . '/posting-map-test/bootstrap/app.php')
    ->handleRequest(Request::capture());
