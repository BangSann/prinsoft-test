<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <section class="w-full h-screen flex flex-col justify-center items-center">
        <?php if (session()->getFlashdata('error')): ?>
            <p style="color:red;"><?= session()->getFlashdata('error') ?></p>
        <?php endif; ?>
        <form action="<?= site_url('auth/loginProcess') ?>" method="post"
            class="w-1/3 p-5 border border-gray-300 rounded-md shadow-md flex flex-col gap-5">
            <div>
                <label for="password" class="text-sm font-light">username</label>
                    <input type="text" name="username" id="username"
                        class="w-full border border-gray-300 rounded-md px-3 py-2">
            </div>
            <div>
                <label for="password" class="text-sm font-light">password</label>
                <input type="password" name="password" id="password"
                    class="w-full border border-gray-300 rounded-md px-3 py-2">
            </div>

            <button type="submit" class="py-3 w-full bg-blue-500 text-white rounded-md">Login</button>

        </form>
    </section>
</body>

</html>