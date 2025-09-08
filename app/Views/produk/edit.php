<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk | Update</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <section class="container mx-auto p-5 flex justify-center items-center h-screen">
        <section class="w-1/3 p-5 border border-gray-300 rounded-md shadow-md">
            <h2 class="mb-6 text-lg font-semibold">Update Produk</h2>
            <form action="<?= site_url('produk/store') ?>" method="post" class="space-y-4">
                <label>Nama</label>
                <input type="text" name="nama" value="<?= esc($produk['nama']) ?>" class="w-full border border-gray-300 rounded-md px-3 py-2" required>

                <label>Kategori</label>
                <input type="text" name="kategori" value="<?= esc($produk['kategori']) ?>" class="w-full border border-gray-300 rounded-md px-3 py-2" required>

                <label>Jenis Formula</label>
                <input type="text" name="jenis_formula" value="<?= esc($produk['jenis_formula']) ?>" class="w-full border border-gray-300 rounded-md px-3 py-2"
                    required>

                <label>Harga (Rp)</label>
                <input type="number" name="satuan" value="<?= esc($produk['satuan']) ?>" class="w-full border border-gray-300 rounded-md px-3 py-2" required>

                <label>Deskripsi</label><br>
                <textarea name="deskripsi"  class="w-full border border-gray-300 rounded-md px-3 py-2"><?= esc($produk['deskripsi']) ?></textarea>

                <button type="submit" class="py-2 px-3 bg-blue-500 text-white rounded-md">Update</button>
                <a href="/produk" class="py-2 px-3 bg-red-500 text-white rounded-md">close</a>
            </form>

        </section>


    </section>

</body>

</html>