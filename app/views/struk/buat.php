<div class="bg-white dark:bg-gray-700 p-4 sm:ml-64 bg-white ">
      <div class="">
         <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mb-5" >
            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
        </button>
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
        Hai, <?= $_SESSION['nama_pegawai'] ?>
        </h5>
        <center>
         <h1 class="mb-10 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Buat Struk Penjualan</h1>
        </center>
         <div class="grid grid-cols-1 gap-4 mb-4">
            <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-black-100">  
                <div class="container flex justify-center flex-warp ">
                    <div class="w-1/2">
                        <form action="<?= BASEURL; ?>/struk/add/<?= $data['nota']['id_nota'] ?> " method="post">
                           <div class="flex m-2">
                              <div class="w-1/2 m-2">
                                 <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Barang</label>
                                 <input name="id_barang" type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              </div>
                              <div class="w-1/2 m-2">
                                 <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Barang</label>
                                 <input name="jumlah_barang" value="1" type="number" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              </div>
                           </div>
                           <div class="flex justify-center">
                              <button type="submit" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Inputkan</button>
                           </div>
                        </form>
                    </div>
                    <div class="w-1/2">
                        <div class="font-extrabold leading-none tracking-tight text-gray-900 dark:text-white mb-2">
                           Kode struk : <?= $data['nota']['id_nota'] ?>
                     </div>
                        <div class="relative overflow-x-auto">
                           <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                              <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                 <tr>
                                       <th scope="col" class="px-6 py-3 ">Nama Produk</th>
                                       <th scope="col" class="px-6 py-3 text-center">Jumlah Barang</th>
                                       <th scope="col" class="px-6 py-3 text-center">Total Harga</th>
                                       <th scope="col" class="px-6 py-3 text-center">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php foreach ($data['item'] as $list) : ?>
                                       <tr class="bg-white dark:bg-gray-800">
                                          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                             <?= $list['nama_barang'] ?>
                                          </th>
                                          <td class="px-6 py-4">
                                             <?= $list['jumlah_barang'] ?>
                                          </td>
                                          <td class="px-6 py-4">
                                             <?= $list['total_harga'] ?>
                                          </td>
                                          <td>
                                             <?php if($data['nota']['total_harga'] == NULL) { ?>
                                                <a href="<?= BASEURL; ?>/struk/delitem/<?= $data['nota']['id_nota'] ?>/<?= $list['id_barang'] ?>" class="flex justify-center">
                                                <svg class="mt-4 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                   <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                                                 </svg>
                                             <?php } ?>
                                             </a>
                                          </td>
                                       </tr>
                                 <?php endforeach ?>
                              </tbody>
                              <tfoot>
                                 <form action="<?= BASEURL; ?>/struk/bayar/<?= $data['nota']['id_nota'] ?>" method="POST">
         
                                       <tr class="font-semibold text-gray-900 dark:text-white">
                                          <th scope="row" class="px-6 py-3 text-base">Total</th>
                                          <td class="px-6 py-3"></td>
                                          <td class="px-6 py-3"><?= $data['harga']['detail_harga'] ?></td>
                                       </tr>
                                       <tr class="font-semibold text-gray-900 dark:text-white">
                                          <th scope="row" class="px-6 py-3 text-base">Uang</th>
                                          <td class="px-6 py-3"><input name="total" value="<?= $data['harga']['detail_harga'] ?>" type="hidden"></td>
                                          <td class="px-6 py-3"><input name="uang" type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                                          <td class="px-6 py-3">
                                             <button type="submit" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Inputkan</button>
                                          </td>
                                       </tr>
                                       <tr class="font-semibold text-gray-900 dark:text-white">
                                          <th scope="row" class="px-6 py-3 text-base">Kembalian</th>
                                          <td class="px-6 py-3"></td>
                                          <td class="px-6 py-3"><?= $data['nota']['kembalian'] ?></td>
                                       </tr>
         
                                 </form>
         
                              </tfoot>
                           </table>
                        </div>
         
                        <button onclick="navigasiDanCetak()" type="button" class=" mt-5text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Cetak</button>
               
               
                           <a href="<?= BASEURL; ?>/struk/delete/<?= $data['nota']['id_nota'] ?>">
                                 <button type="button" class=" mt-5 text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Cancel</button>
                           </a>
                    </div>
                </div>
            </div>
         </div>
      </div>
   </div>
   <script>
       function navigasiDanCetak() {
      // Navigasi ke halaman berikutnya
      window.location.href = '<?= BASEURL; ?>/struk/cetak/<?= $data['nota']['id_nota'] ?>';

      // Tunggu sebentar sebelum mencetak (opsional)
      setTimeout(function() {
          // Cetak halaman setelah navigasi
          window.print();
      }, 1000); // Tunggu 1 detik (1000 milidetik) sebelum mencetak (opsional)
  }
   </script>