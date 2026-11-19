<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'SeaSupply — Marketplace UMKM Olahan Laut. Temukan produk olahan laut berkualitas dari pengusaha lokal Indonesia.')">
    <title>@yield('title', 'SeaSupply') — Marketplace UMKM Olahan Laut</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Noto+Serif:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Design System CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @stack('styles')
</head>
<body>

@yield('content')

@stack('scripts')
<script>
// Quantity selector logic
document.querySelectorAll('.qty-selector').forEach(function(sel) {
    const minusBtn = sel.querySelector('[data-qty="minus"]');
    const plusBtn  = sel.querySelector('[data-qty="plus"]');
    const valEl    = sel.querySelector('.qty-selector__val');

    if (!valEl) return;
    let qty = parseInt(valEl.textContent) || 1;

    if (minusBtn) {
        minusBtn.addEventListener('click', function() {
            if (qty > 1) { qty--; valEl.textContent = qty; }
        });
    }
    if (plusBtn) {
        plusBtn.addEventListener('click', function() {
            qty++;
            valEl.textContent = qty;
        });
    }
});

// Modal logic
document.querySelectorAll('[data-modal-open]').forEach(function(btn) {
    btn.addEventListener('click', function() {
        const id = btn.getAttribute('data-modal-open');
        const overlay = document.getElementById(id);
        if (overlay) overlay.classList.add('open');
    });
});
document.querySelectorAll('[data-modal-close]').forEach(function(btn) {
    btn.addEventListener('click', function() {
        const overlay = btn.closest('.modal-overlay');
        if (overlay) overlay.classList.remove('open');
    });
});
document.querySelectorAll('.modal-overlay').forEach(function(overlay) {
    overlay.addEventListener('click', function(e) {
        if (e.target === overlay) overlay.classList.remove('open');
    });
});

// Chip/filter toggle
document.querySelectorAll('.chip[data-filter]').forEach(function(chip) {
    chip.addEventListener('click', function() {
        const group = chip.getAttribute('data-group');
        document.querySelectorAll('.chip[data-group="' + group + '"]').forEach(function(c) {
            c.classList.remove('active');
        });
        chip.classList.add('active');
    });
});

// Active nav link
(function() {
    const path = window.location.pathname;
    document.querySelectorAll('.navbar__nav-link, .sidebar-nav__link').forEach(function(link) {
        if (link.getAttribute('href') === path) {
            link.classList.add('active');
        }
    });
})();
</script>
</body>
</html>
