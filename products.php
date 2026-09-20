<?php
require_once 'functions.php';
$products = getProducts();
?>

<div class="row">
    <?php if (empty($products)): ?>
        <div class="col-12"><p class="text-muted">Belum ada data produk.</p></div>
    <?php else: ?>
        <?php foreach ($products as $item): ?>
            <div class="col-md-4 mb-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($item['name']); ?></h5>
                        <p class="card-text text-success fw-bold">Rp <?= number_format($item['price'], 0, ',', '.'); ?></p>
                        <p class="card-text"><small class="text-muted">Stok: <?= $item['stock']; ?></small></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>