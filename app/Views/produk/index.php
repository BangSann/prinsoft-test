<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <header class="bg-blue-600 text-white py-4 shadow-md">
        <div class="container mx-auto px-5 flex justify-between items-center">
            <h1 class="text-xl font-bold">Manajemen Produk</h1>
            <nav class="flex gap-4 items-center">
                <a href="/" class="hover:underline">Home</a>
                <a href="<?= site_url('produk') ?>" class="hover:underline">Produk</a>
                <a href="/transaksi" class="hover:underline">Transaksi</a>
                <a href="/logout" class="py-2 px-3 bg-red-500 text-white rounded-md" >Logout</a>
            </nav>
        </div>
    </header>
    <section class="container mx-auto">
        <div class="flex justify-between items-center mt-3">

            <form method="get" action="<?= site_url('produk') ?>" class="flex gap-2 w-1/3">
                <input type="text" name="searchProdukParams" id="searchProdukParams" value="<?= esc($keyword) ?>"
                    class="border border-gray-300 rounded-md px-3 py-2 w-full" placeholder="Search...">
                <button type="submit" class="py-2 px-3 bg-blue-500 text-white rounded-md">Cari</button>
            </form>
            <a href="<?= site_url('produk/create') ?>" class="py-2 px-3 bg-blue-500 text-white rounded-md">Tambah
                Produk</a>
        </div>
        <table class="w-full mt-5 border border-gray-300 rounded-lg overflow-hidden shadow-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Nama</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Kategori</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Jenis</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Harga</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Deskripsi</th>
                    <th class="px-4 py-2 text-center text-sm font-semibold text-gray-700">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php foreach ($produk as $p): ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-800"><?= esc($p['nama']) ?></td>
                        <td class="px-4 py-2 text-sm text-gray-600"><?= esc($p['kategori']) ?></td>
                        <td class="px-4 py-2 text-sm text-gray-600"><?= esc($p['jenis_formula']) ?></td>
                        <td class="px-4 py-2 text-sm font-medium text-green-700">
                            Rp <?= number_format($p['satuan'], 0, ',', '.') ?>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-500"><?= esc($p['deskripsi']) ?></td>
                        <td class="px-4 py-2 text-center">
                            <a href="<?= site_url('produk/edit/' . $p['id']) ?>"
                                class="inline-block px-3 py-1 text-sm bg-blue-500 text-white rounded-md hover:bg-blue-600">Edit</a>
                            <a href="<?= site_url('produk/delete/' . $p['id']) ?>"
                                onclick="return confirm('Hapus produk ini?')"
                                class="inline-block px-3 py-1 text-sm bg-red-500 text-white rounded-md hover:bg-red-600 ml-2">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>

</body>

</html>