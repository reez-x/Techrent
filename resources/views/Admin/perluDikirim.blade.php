<x-header>Halaman Pesanan</x-header>
<body style="height: 100%;">
    {{--Navbar--}}
    <x-sidebar></x-sidebar>

    {{-- Menu Pesanan --}}
<div class="p-4 my-16 sm:ml-64">
    <div class="mx-auto p-8 bg-gray-100 rounded-lg shadow-lg">
        <h2 class="text-black text-2xl font-bold">Perlu Dikirim</h2>

        {{-- Menu Pesanan --}}
        <x-menuPesanan></x-menuPesanan>
    

        <div>
            {{-- search --}}
            <x-searchPesanan></x-searchPesanan>
        
            {{--Table Head Pesanan--}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                No Pesanan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Produk 
                            </th>
                            <th scope="col" class="px-6 py-3">
                               Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                               Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jasa Kirim
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="w-4 p-4">
                                00001
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="flex items-center w-[140px]">
                                    <img src="{{ asset('img/halamanhome/kategori/Kamera.jpg') }}" alt="" class="w-[30px] mr-4 rounded-full">
                                    <div>
                                        <span class="font-semibold text-white">Canon 700D</span>
                                        <p class="text-sm text-gray-500">Peminjaman: 1 minggu</p>
                                    </div>
                                </div>
                            </th>                            
                            <td class="px-6 py-4">
                                Ahmad
                            </td>
                            <td class="px-6 py-4">
                                Rp 30000
                            </td>
                            <td class="px-6 py-4">
                                Perlu Dikirim
                            </td>
                            <td class="px-6 py-4">
                                Gojek/Gosen
                            </td>
                            <td class="px-6 py-4">
                                {{-- button konfirmasi --}}
                                    <button type="button" data-modal-target="default-modal" data-modal-toggle="default-modal" class="focus:outline-none  text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-9 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        Kirim
                                    </button>
                                    <button type="button" data-modal-target="modal-cancel" data-modal-toggle="modal-cancel" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        Muat Ulang
                                    </button>

                                    {{-- modal Button Kirim --}}
                                        <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                            Pembokingan Pengiriman
                                                        </h3>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="p-4 md:p-5 space-y-4">
                                                        <p class="text-2xl text-center leading-relaxed text-gray-500 dark:text-gray-400">
                                                           No Resi
                                                        </p>
                                                        <p class=" text-4xl font-bold text-center leading-relaxed text-gray-500 dark:text-gray-400">
                                                            20139284480417
                                                         </p>
                                                        <p class="text-base text-center leading-relaxed text-gray-500 dark:text-gray-400">
                                                           Dimohon untuk mencetak nomor resi ini sebelum pengiriman 
                                                        </p>
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                        <a href="dikirim">
                                                            <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                Kirim
                                                            </button>
                                                        </a>
                                                        <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancle</button>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Modal Cancel --}}
                                            
                                            <div id="modal-cancel" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative p-4 w-full max-w-md max-h-full">
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                                                            <a href="perluDikirim">
                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                            </svg>
                                                            </a>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="p-4 md:p-5 text-center">
                                                           <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                            </svg>
                                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin memuat ulang pesanan ini</h3>
                                                            <a href="pesananSemua"><button data-modal-hide="modal-cancel" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                Yes, Muat Ulang
                                                            </button></a>
                                                            <button data-modal-hide="modal-cancel" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, Kembali</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
            
            


{{-- js --}}
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>