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

    <section class="container mx-auto flex justify-center items-center h-screen">
        <div class="p-4 rounded-md shadow-md">
            <div>
                <p>Nama Produk</p>
                <p>
                    <?= $produk["nama"] ?>
                </p>
            </div>
            <div>
                <p>Harga</p>
                <p>
                    <?= $produk["satuan"] ?>
                </p>
            </div>
            <div>
                <p>Satuan</p>
                <p>
                    <?= $produk["jenis_formula"] ?>
                </p>
            </div>

            <div>
                <p>Jumlah</p>
                <p>
                    <?= $produk["satuan"] ?>
                </p>
            </div>
        </div>

    </section>
</body>

</html>