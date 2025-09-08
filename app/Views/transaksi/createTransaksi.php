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

    <section class="container mx-auto flex justify-center items-center h-[70vh]">
        <div class="p-6 rounded-md shadow-md min-w-[350px] bg-white">
            <div class="flex justify-between mb-2">
                <p class="font-semibold">Nama Produk</p>
                <p><?= $produk["nama"] ?></p>
            </div>

            <div class="flex justify-between mb-2">
                <p class="font-semibold">Harga</p>
                <p id="harga"><?= $produk["satuan"] ?></p>
            </div>

            <div class="flex justify-between mb-2">
                <p class="font-semibold">Satuan</p>
                <p><?= $produk["jenis_formula"] ?></p>
            </div>

            <div class="flex justify-between mb-2">
                <p class="font-semibold">Jumlah</p>
                <p id="jumlah">1</p>
            </div>

            <div class="flex justify-between mb-2">
                <p class="font-semibold">Total</p>
                <p id="total"><?= $produk["satuan"] ?></p>
            </div>

            <!-- Tombol -->
            <div class="flex gap-3 mt-4 justify-between">
                <button onclick="kurangi()"
                    class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Kurangi</button>
                <button onclick="tambah()"
                    class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">Tambah</button>
            </div>

            <div class="mt-4">
                <button onclick="checkout()"
                    class="w-full px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Checkout</button>
            </div>
            <div class="mt-4 w-full">
                <a href="../"
                    class="w-full px-4 py-2 bg-slate-100 outline rounded-md hover:bg-blue-700">Kembali</a>
            </div>
        </div>
    </section>

    <script>
        let harga = <?= $produk["satuan"] ?>;  // Harga dari produk
        let jumlah = 1;

        function updateTotal() {
            document.getElementById("jumlah").textContent = jumlah;
            document.getElementById("total").textContent = harga * jumlah;
        }

        function tambah() {
            jumlah++;
            updateTotal();
        }

        function kurangi() {
            if (jumlah > 1) {
                jumlah--;
                updateTotal();
            }
        }

        function checkout() {
            alert("Checkout berhasil!\nProduk: <?= $produk["nama"] ?>\nJumlah: " + jumlah + "\nTotal: Rp " + (harga * jumlah));
        }
    </script>

</body>

</html>