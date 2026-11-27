<?php
declare(strict_types=1)

if (!function_exists('e')) {
  function e(?string $value): string {
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
  }
}


$pageTitle = $pageTitle ?? null;
$pageDescription = $pageDescription ?? 'Explore the world through its history, mythology and destinations on an interactive globe.';
$bodyClass = $bodyClass ?? '';
$extraCss = $etraCss ?? [];


$fullTitle = $pageTitle ? $pageTitle . ' . Atlas & Lore' : 'Atlas & Lore . History, mythology and destinations';

$currentPage = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');

$user = function_exists('current_user') ? current_user() : null;

$navitems = [
  'index.php' => ['/', 'Globe'], 'Collection.php' => ['/collection.php', 'collection'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=  e($fullTitle) ?></title>
  <meta name = "description" content = "<?= e($pageDescription) ?>"> 
  <meta name = "theme-color" content = "#000000">

  <script> document.documentElement.classList.add('js');</script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Instrument+Serif&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap">
  <link rel="stylesheet" href="/css/shared.css">
<<?php foreach ($extraCss as $href): ?>
  <link rel = "stylesheet" href = "<?= e($href) ?>">
<?php endforeach; ?>
</head>
<body>
<a class="skip-link" href="#main-content">Skip to main content</a>
<header class="site-header">
  <div class = "site-header__inner">

    <a class = "brand" href = "/" aria-label = "Atlas &amp; Lore, home">
      <svg class = "brand__mark" viewBox = "0 0 24 24" width = "22" height = "22" fill = "none"
          stroke ="currentColor" stroke-width = "1.4" aria-hidden = "true">
        <circle cx = "12" cy = "12" r = "10">
        <ellipse cx = "12" cy = "12" rx = "4.2" ry = "10"/>
        <path d = "M2 12h20"/>
      </svg>
      <span class = "brand__name"> Atlas<em>&amp;</em> Lore</span>
    </a>



    <button class = "nav-toggle" type = "button" aria-extended = "false" aria-controls = "site-nav">
      <span class = "vissually-hidden">Menu</span>
      <span class = "nav-toggle__bars" aria-hidden = "true"></span>
    </button>

    <nav id = "site-nav" class = "site-nav" aria-label = "Main">
      <ul class = "site-nav__list">
<?php foreach ($navitems as $file => [$href, $label]): ?>
        <li>
          <a href="<?= e($href) ?>"<?= $currentPage === $file ? ' aria-current="page"' : '' ?>><?= e($label) ?></a>
        </li>
<?php endforeach; ?>
      </ul>
    </nav>
  </div>
</header>