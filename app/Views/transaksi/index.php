<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Transaksi</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>
    <header class="bg-blue-600 text-white py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Manajemen Produk</h1>
            <nav class="flex gap-4 items-center">
                <a href="/" class="hover:underline">Home</a>
                <a href="<?= site_url('produk') ?>" class="hover:underline">Produk</a>
                <a href="/transaksi" class="hover:underline">Transaksi</a>
                <a href="/logout" class="py-2 px-3 bg-red-500 text-white rounded-md">Logout</a>
            </nav>
        </div>
    </header>

    <section class="container mx-auto">
        <div class="grid grid-cols-4">

            <?php foreach ($produk as $p): ?>
                <div class="p-3 rounded-sm shadow-md flex justify-between items-center">

                    <div class="space-y-2">
                        <div class="text-xl text-gray-800"><?= esc($p['nama']) ?></div>
                        <p class="text-sm font-semibold"><?= esc($p['satuan']) ?></p>
                    </div>
                    <div>
                        <a class="p-2 bg-green-500" href="<?= site_url('transaksi/produk/' . $p['id']) ?>">Buy</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>

</html>