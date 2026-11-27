<?php
require __DIR__ . '/../includes/header.php';
?>

<style>
  /* Temporary preview styles */
  .preview-stage {
    position: relative;
    display: grid;
    place-items: center;
    min-height: calc(100vh - var(--header-h));
    overflow: hidden;
  }
  .preview-globe {
    width: var(--globe-size);
    aspect-ratio: 1;
    border-radius: 50%;
    background:
      radial-gradient(circle at 32% 28%, #3a3a3a 0%, #111 45%, #000 75%);
    box-shadow: 0 0 0 1px var(--border-strong), 0 0 120px rgba(255,255,255,0.12);
  }
  .preview-copy {
    position: absolute;
    inset: auto 0 var(--space-12) 0;
    text-align: center;
    pointer-events: none;
  }
</style>

<main class="preview-stage">
  <div class="preview-globe" aria-hidden="true"></div>
  <div class="preview-copy container">
    <p class="eyebrow">Atlas &amp; Lore</p>
    <h1>Spin the world. Find its stories.</h1>
    <p><a class="btn btn--primary" href="#" style="pointer-events:auto">Start exploring</a></p>
  </div>
</main>

<?php
require __DIR__ . '/../includes/footer.php';