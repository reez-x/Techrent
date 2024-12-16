<x-header>Diskon</x-header>

<body>
    <x-sidebar></x-sidebar>

    <div class="mt-20 max-w-4xl mx-auto p-8 bg-gray-100 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Generate Diskon Produk</h2>

        <!-- Form untuk generate diskon -->
        <form>
            <div class="space-y-6">

                <!-- Input Nama Produk -->
                <div>
                    <label for="product-name" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                    <input type="text" id="product-name" name="product-name" required
                        class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 shadow-sm"
                        placeholder="Masukkan nama produk">
                </div>

                <!-- Input Besar Diskon (Persentase) -->
                <div>
                    <label for="discount-value" class="block text-sm font-medium text-gray-700">Besar Diskon (%)</label>
                    <input type="number" id="discount-value" name="discount-value" required
                        class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 shadow-sm"
                        placeholder="Masukkan besar diskon">
                </div>

                <!-- Input Tanggal Berakhir Diskon -->
                <div>
                    <label for="discount-expiry" class="block text-sm font-medium text-gray-700">Tanggal Berakhir
                        Diskon</label>
                    <input type="date" id="discount-expiry" name="discount-expiry" required
                        class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 shadow-sm">
                </div>

                <!-- Tombol Submit -->
                <div class="flex justify-center mt-8">
                    <button type="submit"
                        class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Terapkan Diskon
                    </button>
                </div>
            </div>
        </form>
    </div>


    {{-- speed dial  --}}
    <x-speedDeal></x-speedDeal>


    {{-- js --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>
