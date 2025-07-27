<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Flyout Dropdown</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/uikit@3.17.10/dist/css/uikit.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.10/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.10/dist/js/uikit-icons.min.js"></script>
  <style>
    /* === Custom Dropdown === */
    .flyout-wrapper {
      position: relative;
      display: inline-block;
    }

    .flyout-button {
      background: none;
      border: none;
      font-weight: 600;
      font-size: 16px;
      cursor: pointer;
    }

.flyout-content {
  display: none;
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translateX(-50%);
  margin-top: 16px;
  width: 360px;
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
  z-index: 1000;
  animation: flyoutFade 0.2s ease-out forwards;
}

    .flyout-content.show {
      display: block;
    }

    .flyout-item {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      padding: 16px;
      border-radius: 12px;
      transition: background 0.2s ease;
    }

    .flyout-item:hover {
      background: #f9fafb;
    }

    .flyout-icon {
      flex: none;
      background: #f1f5f9;
      padding: 10px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .flyout-title {
      font-weight: 600;
      margin: 0;
    }

    .flyout-desc {
      margin: 4px 0 0;
      color: #6b7280;
      font-size: 14px;
    }

    .flyout-footer {
      display: grid;
      grid-template-columns: 1fr 1fr;
      border-top: 1px solid #e5e7eb;
    }

    .flyout-footer a {
      padding: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      text-decoration: none;
      font-weight: 600;
      color: #111827;
      transition: background 0.2s;
    }

    .flyout-footer a:hover {
      background: #f9fafb;
    }

    @keyframes flyoutFade {
      0% {
        opacity: 0;
        transform: translate(-50%, 8px);
      }
      100% {
        opacity: 1;
        transform: translate(-50%, 0);
      }
    }

    .flyout-content svg {
      width: 20px;
      height: 20px;
      color: #4b5563;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
<div class="uk-section uk-section-default uk-text-center">
  <div class="flyout-wrapper">
    <button class="flyout-button" onclick="toggleFlyout()">Solutions ▾</button>
    <div class="flyout-content" id="flyoutMenu">
      <div class="uk-padding-small">
        <!-- Analytics -->
        <div class="flyout-item">
          <div class="flyout-icon"><span uk-icon="icon: search"></span></div>
          <div>
            <p class="flyout-title">Analytics</p>
            <p class="flyout-desc">Get a better understanding of your traffic</p>
          </div>
        </div>

      </div>

      <div class="flyout-footer">
        <a href="#"><span uk-icon="icon: play-circle"></span> Watch demo</a>
        <a href="#"><span uk-icon="icon: receiver"></span> Contact sales</a>
      </div>
    </div>
  </div>
</div>

<script>
  function toggleFlyout() {
    document.getElementById("flyoutMenu").classList.toggle("show");
  }

  // Optional: Close if click outside
  document.addEventListener("click", function (e) {
    const menu = document.getElementById("flyoutMenu");
    const button = document.querySelector(".flyout-button");
    if (!menu.contains(e.target) && !button.contains(e.target)) {
      menu.classList.remove("show");
    }
  });
</script>

  <!-- Hero Section -->
  <section class="uk-section uk-section-large uk-flex uk-flex-middle uk-background-muted" style="min-height: 80vh;">
    <div class="uk-container">
      <div class="uk-grid-large uk-child-width-1-2@m" uk-grid>
        <div>
          <h1 class="uk-heading-medium">Grow your business with insight</h1>
          <p class="uk-text-lead">Powerful tools to help you understand your audience and scale smarter.</p>
          <a class="uk-button uk-button-primary uk-margin-small-right" href="#">Get Started</a>
          <a class="uk-button uk-button-default" href="#">Watch Demo</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1526628953301-3e589a6a8b74?q=80&w=500&auto=format&fit=crop" alt="Illustration" class="uk-border-rounded">
        </div>
      </div>
    </div>
  </section>

 

  <!-- Footer -->
  <footer class="uk-section uk-section-small uk-background-secondary uk-light">
    <div class="uk-container uk-text-center">
      <p>&copy; 2025 MyBrand. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
