<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamera - Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800 text-white">
    <header class="bg-gray-900 py-4">
        <div class="container mx-auto flex justify-between items-center">
            <img src="/Asset/whats_app_image_20240821_at_133050847_d_5286_removebg_preview_1.png" alt="Kamera Logo" class="h-12">
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:text-red-500 transition-colors">Home</a></li>
                    <li><a href="#" class="hover:text-red-500 transition-colors">About</a></li>
                    <li><a href="#" class="hover:text-red-500 transition-colors">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero bg-cover bg-center py-20 relative" style="background-image: url('/Asset/film-tape-near-cameras.jpg');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="container mx-auto text-center relative z-10">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Kamera</h1>
                <p class="text-lg md:text-xl mb-6">Selamat datang di Photo studio, destinasi utama untuk semua kebutuhan fotografi Anda. Kami menyediakan beragam pilihan kamera berkualitas tinggi, lensa, dan aksesori fotografi dari merek-merek terkenal.</p>
                <a href="#" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-3 px-6 rounded-md transition duration-300">Beli Sekarang</a>
            </div>
        </section>

        <section class="testimonial bg-gray-700 py-12 text-center">
            <blockquote class="text-xl italic mb-4">"Kamera ini sangat mudah digunakan dan menghasilkan foto yang luar biasa!"</blockquote>
            <cite class="text-lg font-bold">- Pengguna Setia</cite>
        </section>

        <section class="features container mx-auto py-12">
            <h2 class="text-3xl font-bold text-center mb-8">Fitur Unggulan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="feature bg-gray-800 p-6 rounded-lg flex items-center">
                    <i class="feature-icon text-4xl mr-4">&#x1F4F8;</i>
                    <div>
                        <h3 class="text-2xl font-semibold">Resolusi Tinggi</h3>
                        <p>Kamera kami dilengkapi dengan sensor resolusi tinggi untuk hasil foto yang menakjubkan.</p>
                    </div>
                </div>
                <div class="feature bg-gray-800 p-6 rounded-lg flex items-center">
                    <i class="feature-icon text-4xl mr-4">&#x23F1;</i>
                    <div>
                        <h3 class="text-2xl font-semibold">Kecepatan Shutter</h3>
                        <p>Tangkap momen-momen cepat dengan kecepatan shutter yang responsif.</p>
                    </div>
                </div>
                <!-- Tambahkan fitur unggulan lainnya di sini -->
            </div>
        </section>
    </main>
</body>
</html>