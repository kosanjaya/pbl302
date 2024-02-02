@extends('master.layoutMaster')

@section('content')
    <form action="{{ url('/api/addFinding') }}" method="POST" enctype="multipart/form-data">
        @method('post')
        @csrf
      <div class=" flex flex-col gap-8">
        <div class="">
            <h2 class="text-[#52B788] font-light text-3xl tracking-wide">Create Finding</h2>
        </div>
        <div class="">
            <h1 class="text-white pb-2 tracking-wider">Title :</h1>
            <input type="text" name="title" class="w-full p-2 bg-transparent border border-[#d9d9d96e] text-white rounded-md">
        </div>
        <div class="">
            <h1 class="text-white pb-2">Asset Name :</h1>
            <select name="asset_name" id="asset_name" class="w-full h-[2.5rem] pl-2 bg-black text-white border border-[#d9d9d96e] rounded-md">
                <option value="E-learning">e-Learning</option>
                <option value="Silam">Silam</option>
                <option value="SID">SID</option>
                <option value="Polibatam.ac.id">Polibatam.ac.id</option>
            </select>
        </div>

        <div class="flex flex-col gap-5">
          <h1 class="text-white">Severity :</h1>
          <div class=" flex flex-row gap-5">

            <div class=" flex flex-row flex-wrap gap-5 w-[calc(60%)] ">

              <div class="dropdown-container relative items-center border-b-2 flex flex-row border-[#52B788] w-[14rem] ml-[4rem]">
                <button type="button" class="dropdown-button w-full z-10 text-[#52B788] text-start" data-dropdown="attackVector">Attack Vector</button>
                <img src="src/img/icon/chevron-down-regular-24.png" alt="" class="rotate-icon absolute cursor-pointer ml-[calc(90%)]">
                <div id="dropdown--Content-attackVector" class="dropdown-content absolute hidden z-20 w-[10rem] mt-[calc(100%)] bg-black">
                  <div class="flex flex-col gap-5 text-white p-2" role="none">
                    <a href="#" onclick="selectOption(0,'N','Network')" class="w-full hover:bg-[#52B788]" 
                    title="Komponen yang rentan terikat pada tumpukan jaringan dan kumpulan kemungkinan penyerang melampaui opsi lain yang tercantum di bawah ini, hingga dan termasuk seluruh Internet. Kerentanan seperti itu sering disebut 'dapat dieksploitasi dari jarak jauh' dan dapat dianggap sebagai serangan yang dapat dieksploitasi pada tingkat protokol satu atau atau lebih lompatan jaringan (misalnya, di satu atau lebih router). Contoh dari sebuah serangan jaringan adalah penyerang yang menyebabkan penolakan layanan (DoS) dengan mengirimkan paket TCP yang dibuat secara khusus di jaringan area luas (misalnya, CVE-2004-0230).">
                    Network</a>
                    <a href="#" onclick="selectOption(0,'A','Adjacent')" class="w-full hover:bg-[#52B788]"
                    title="Komponen yang rentan terikat pada tumpukan jaringan, tetapi serangannya terikat terbatas pada tingkat protokol pada topologi yang berdekatan secara logis. Ini bisa berarti sebuah serangan harus diluncurkan dari jaringan fisik bersama yang sama (misalnya, Bluetooth atau IEEE 802.11) atau jaringan logis (misalnya subnet IP lokal), atau dari dalam jaringan yang aman atau jika tidak, domain administratif terbatas (misalnya, MPLS, VPN aman ke zona jaringan administratif). Salah satu contoh serangan yang berdekatan adalah Banjir ARP (IPv4) atau penemuan tetangga (IPv6) yang menyebabkan penolakan layanan aktif segmen LAN lokal (mis., CVE-2013-6014)">
                      Adjacent</a>
                    <a href="#" onclick="selectOption(0,'L','Local')" class="w-full hover:bg-[#52B788]"
                    title="Komponen yang rentan tidak terikat pada tumpukan jaringan dan milik penyerang jalurnya adalah melalui kemampuan baca/tulis/eksekusi. Salah satu: • penyerang mengeksploitasi kerentanan dengan mengakses sistem target secara lokal (misalnya, keyboard, konsol), atau dari jarak jauh (misalnya, SSH); • penyerang mengandalkan Interaksi Pengguna oleh orang lain untuk melakukan tindakan yang diperlukan untuk mengeksploitasi kerentanan (misalnya, menggunakan rekayasa sosial teknik untuk mengelabui pengguna yang sah agar membuka dokumen berbahaya).">Local</a>
                    <a href="#" onclick="selectOption(0,'P','Physical')" class="w-full hover:bg-[#52B788]"
                    title="Serangan tersebut mengharuskan penyerang untuk menyentuh atau memanipulasi pihak yang rentan secara fisik komponen. Interaksi fisik mungkin singkat (misalnya, serangan pembantu jahat1) atau gigih. Contoh dari serangan tersebut adalah serangan cold boot dimana sebuah penyerang mendapatkan akses ke kunci enkripsi disk setelah mengakses secara fisik sistem sasaran. Contoh lainnya termasuk serangan periferal melalui FireWire/USB Akses Memori Langsung (DMA).">
                    Physical</a>
                  </div>
                </div>
              </div>  
              
              <div class="dropdown-container relative items-center border-b-2 flex flex-row border-[#52B788] w-[14rem] ml-[4rem]">
                <button type="button" class="dropdown-button w-full z-10 text-[#52B788] text-start" data-dropdown="attackComplexity">Attack Complexity</button>
                <img src="src/img/icon/chevron-down-regular-24.png" alt="" class="rotate-icon absolute cursor-pointer ml-[calc(90%)]">
                <div id="dropdown--Content-attackComplexity" class="dropdown-content absolute hidden z-20 w-[10rem] mt-[calc(60%)] bg-black">
                  <div class="flex flex-col gap-5 text-white p-2" role="none">
                    <a href="#" onclick="selectOption(1,'L','Low')" class="w-full hover:bg-[#52B788]"
                    title="Kondisi akses khusus atau keadaan khusus tidak ada. Sebuah Penyerang dapat mengharapkan keberhasilan yang berulang ketika menyerang pihak yang rentan komponen.">
                    Low</a>
                    <a href="#" onclick="selectOption(1,'H','High')" class="w-full hover:bg-[#52B788]"
                    title="Keberhasilan serangan bergantung pada kondisi di luar kendali penyerang. Itu Artinya, serangan yang berhasil tidak dapat dilakukan sesuka hati, tetapi membutuhkan penyerang untuk berinvestasi dalam sejumlah upaya terukur dalam persiapan atau pelaksanaan terhadap komponen rentan sebelum serangan berhasil diharapkan.2 Misalnya, keberhasilan serangan mungkin bergantung pada penyerangnya mengatasi salah satu kondisi berikut: • Penyerang harus mengumpulkan pengetahuan tentang lingkungan di mana ada target/komponen yang rentan. Misalnya saja syarat untuk mengumpulkan detail tentang pengaturan konfigurasi target, nomor urut, atau dibagikan rahasia. • Penyerang harus mempersiapkan lingkungan target untuk meningkatkan eksploitasi keandalan. Misalnya eksploitasi berulang-ulang untuk memenangkan suatu kondisi perlombaan, atau mengatasi teknik mitigasi eksploitasi tingkat lanjut. • Penyerang harus memasukkan dirinya ke jalur jaringan logis antara target dan sumber daya yang diminta oleh korban untuk membaca dan/atau memodifikasi komunikasi jaringan (misalnya, seorang pria di tengah menyerang).">
                    High</a>
                  </div>
                </div>
              </div>

              <div class="dropdown-container relative items-center border-b-2 flex flex-row border-[#52B788] w-[14rem] ml-[4rem]">
                <button type="button" class="dropdown-button w-full z-10 text-[#52B788] text-start" data-dropdown="Previleges Required">Previleges Required</button>
                <img src="src/img/icon/chevron-down-regular-24.png" alt="" class="rotate-icon absolute cursor-pointer ml-[calc(90%)]">
                <div id="dropdown--Content-PrevilegesRequired" class="dropdown-content absolute hidden z-20 w-[10rem] mt-[calc(80%)] bg-black">
                  <div class="flex flex-col gap-5 text-white p-2" role="none">
                    <a href="#" onclick="selectOption(2,'N','None')" class="w-full hover:bg-[#52B788]"
                    title="Penyerang tidak memiliki izin sebelum menyerang, dan oleh karena itu tidak memerlukannya akses apa pun ke pengaturan atau file dari sistem yang rentan untuk melakukan menyerang.">
                    None</a>
                    <a href="#" onclick="selectOption(2,'L','Low')" class="w-full hover:bg-[#52B788]"
                    title="Penyerang memerlukan hak istimewa yang memberikan kemampuan dasar pengguna itu biasanya hanya dapat memengaruhi pengaturan dan file milik pengguna. Kalau tidak, penyerang dengan hak istimewa rendah hanya memiliki kemampuan untuk mengakses yang tidak sensitif sumber daya.">
                    Low</a>
                    <a href="#" onclick="selectOption(2,'H','High')" class="w-full hover:bg-[#52B788]"
                    title="Penyerang memerlukan hak istimewa yang memberikan hak istimewa yang signifikan (misalnya administratif) kontrol atas komponen yang rentan memungkinkan akses ke seluruh komponen pengaturan dan file.">
                    High</a>
                  </div>
                </div>
              </div>

              <div class="dropdown-container relative items-center border-b-2 flex flex-row border-[#52B788] w-[14rem] ml-[4rem]">
                <button type="button" class="dropdown-button w-full z-10 text-[#52B788] text-start" data-dropdown="User Interaction">User Interaction</button>
                <img src="src/img/icon/chevron-down-regular-24.png" alt="" class="rotate-icon absolute cursor-pointer ml-[calc(90%)]">
                <div id="dropdown--Content-UserInteraction" class="dropdown-content absolute hidden z-20 w-[10rem] mt-[calc(60%)] bg-black">
                  <div class="flex flex-col gap-5 text-white p-2" role="none">
                    <a href="#" onclick="selectOption(3,'N','None')" class="w-full hover:bg-[#52B788]"
                    title="Sistem yang rentan dapat dieksploitasi tanpa interaksi dari pengguna mana pun.">
                    None</a>
                    <a href="#" onclick="selectOption(3,'R','Required')" class="w-full hover:bg-[#52B788]"
                    title="Keberhasilan eksploitasi kerentanan ini mengharuskan pengguna untuk mengambil beberapa tindakan sebelum kerentanan dapat dieksploitasi. Misalnya saja yang sukses eksploitasi hanya dapat dilakukan selama instalasi aplikasi oleh a administrator sistem.">
                    Required</a>
                  </div>
                </div>
              </div>

              <div class="dropdown-container relative items-center border-b-2 flex flex-row border-[#52B788] w-[14rem] ml-[4rem]">
                <button type="button" class="dropdown-button w-full z-10 text-[#52B788] text-start" data-dropdown="Scope">Scope</button>
                <img src="src/img/icon/chevron-down-regular-24.png" alt="" class="rotate-icon absolute cursor-pointer ml-[calc(90%)]">
                <div id="dropdown--Content-Scope" class="dropdown-content absolute hidden z-20 w-[10rem] mt-[calc(60%)] bg-black">
                  <div class="flex flex-col gap-5 text-white p-2" role="none">
                    <a href="#" onclick="selectOption(4,'U','Unchanged')" class="w-full hover:bg-[#52B788]"
                    title="Kerentanan yang dieksploitasi hanya dapat memengaruhi sumber daya yang dikelola oleh pihak yang sama otoritas keamanan. Dalam hal ini, komponen yang rentan dan yang terkena dampak komponennya sama, atau keduanya dikelola oleh keamanan yang sama otoritas.">
                    Unchanged</a>
                    <a href="#" onclick="selectOption(4,'C','Changed')" class="w-full hover:bg-[#52B788]"
                    title="Kerentanan yang dieksploitasi dapat memengaruhi sumber daya di luar cakupan keamanan dikelola oleh otoritas keamanan komponen yang rentan. Pada kasus ini, komponen rentan dan komponen terdampak berbeda dan dikelola oleh otoritas keamanan yang berbeda.">
                    Changed</a>
                  </div>
                </div>
              </div>

              <div class="dropdown-container relative items-center border-b-2 flex flex-row border-[#52B788] w-[14rem] ml-[4rem]">
                <button type="button" class="dropdown-button w-full z-10 text-[#52B788]  text-start" data-dropdown="ConfidentialityImpact">Confidentiality</button>
                <img src="src/img/icon/chevron-down-regular-24.png" alt="" class="rotate-icon absolute cursor-pointer ml-[calc(90%)]">
                <div id="dropdown--Content-ConfidentialityImpact" class="dropdown-content absolute hidden z-20 w-[10rem] mt-[calc(80%)] bg-black">
                  <div class="flex flex-col gap-5 text-white p-2" role="none">
                    <a href="#" onclick="selectOption(5,'H','High')" class="w-full hover:bg-[#52B788]"
                    title="Ada hilangnya kerahasiaan total, yang mengakibatkan semua sumber daya di dalamnya komponen yang terkena dampak diungkapkan kepada penyerang. Alternatifnya, akses ke hanya beberapa informasi terbatas yang diperoleh, tetapi informasi yang diungkapkan memberikan dampak langsung dan serius. Misalnya, seorang penyerang mencuri kata sandi administrator, atau kunci enkripsi pribadi server web.">
                    High</a>
                    <a href="#" onclick="selectOption(5,'L','Low')" class="w-full hover:bg-[#52B788]"
                    title="Ada beberapa hilangnya kerahasiaan. Akses ke beberapa informasi terbatas diperoleh, tetapi penyerang tidak memiliki kendali atas informasi apa yang ada diperoleh, atau jumlah atau jenis kerugiannya terbatas. Keterbukaan informasi tidak menimbulkan kerugian langsung dan serius terhadap komponen yang terkena dampak.">
                    Low</a>
                    <a href="#" onclick="selectOption(5,'N','None')" class="w-full hover:bg-[#52B788]"
                    title="Tidak ada hilangnya kerahasiaan dalam komponen yang terkena dampak.">
                    None</a>
                  </div>
                </div>
              </div>

              <div class="dropdown-container relative items-center border-b-2 flex flex-row border-[#52B788] w-[14rem] ml-[4rem]">
                <button type="button" class="dropdown-button w-full z-10 text-[#52B788] text-start" data-dropdown="IntegrityImpact">Integrity</button>
                <img src="src/img/icon/chevron-down-regular-24.png" alt="" class="rotate-icon absolute cursor-pointer ml-[calc(90%)]">
                <div id="dropdown--Content-IntegrityImpact" class="dropdown-content absolute hidden z-20 w-[10rem] mt-[calc(80%)] bg-black">
                  <div class="flex flex-col gap-5 text-white p-2" role="none">
                    <a href="#" onclick="selectOption(6,'H','High')" class="w-full hover:bg-[#52B788]"
                    title="Ada hilangnya integritas total, atau hilangnya perlindungan sepenuhnya. Untuk Misalnya, penyerang dapat memodifikasi semua file yang dilindungi oleh komponen yang terkena dampak. Alternatifnya, hanya beberapa file yang dapat dimodifikasi, namun modifikasi yang berbahaya akan menimbulkan konsekuensi langsung dan serius terhadap komponen yang terkena dampak.">
                    High</a>
                    <a href="#" onclick="selectOption(6,'L','Low')" class="w-full hover:bg-[#52B788]"
                    title="Modifikasi data dimungkinkan, tetapi penyerang tidak memiliki kendali atas data tersebut konsekuensi modifikasi, atau jumlah modifikasi terbatas. Modifikasi data tidak mempunyai dampak langsung dan serius terhadap komponen yang terkena dampak.">
                    Low</a>
                    <a href="#" onclick="selectOption(6,'N','None')" class="w-full hover:bg-[#52B788]"
                    title="Tidak ada hilangnya integritas dalam komponen yang terkena dampak.">
                    None</a>
                  </div>
                </div>
              </div>

              <div class="dropdown-container relative items-center border-b-2 flex flex-row border-[#52B788] w-[14rem] ml-[4rem]">
                <button type="button" class="dropdown-button w-full z-10 text-[#52B788] text-start" data-dropdown="AvailabilityImpact">Availability</button>
                <img src="src/img/icon/chevron-down-regular-24.png" alt="" class="rotate-icon absolute cursor-pointer ml-[calc(90%)]">
                <div id="dropdown--Content-AvailabilityImpact" class="dropdown-content absolute hidden z-20 w-[10rem] mt-[calc(80%)] bg-black">
                  <div class="flex flex-col gap-5 text-white px-2" role="none">
                    <a href="#" onclick="selectOption(7,'H','High')" class="w-full hover:bg-[#52B788]"
                    title="Ada hilangnya ketersediaan total, sehingga penyerang dapat melakukannya sepenuhnya menolak akses terhadap sumber daya di komponen yang terkena dampak; kerugian ini juga berkelanjutan (sementara penyerang terus melancarkan serangan) atau terus-menerus (the kondisinya tetap ada bahkan setelah serangan selesai). Alternatifnya, itu penyerang memiliki kemampuan untuk menolak beberapa ketersediaan, namun kehilangan ketersediaan menimbulkan konsekuensi langsung dan serius terhadap komponen yang terkena dampak (misalnya, Penyerang tidak dapat mengganggu koneksi yang sudah ada, namun dapat mencegah koneksi baru koneksi; penyerang dapat berulang kali mengeksploitasi kerentanan itu, di setiap kerentanan contoh serangan yang berhasil, hanya membocorkan sejumlah kecil memori, namun setelah eksploitasi berulang menyebabkan layanan menjadi sepenuhnya tidak tersedia).">
                    High</a>
                    <a href="#" onclick="selectOption(7,'L','Low')" class="w-full hover:bg-[#52B788]"
                    title="Performa berkurang atau ada gangguan pada ketersediaan sumber daya. Sekalipun eksploitasi berulang terhadap kerentanan mungkin terjadi, penyerang tetap melakukannya tidak memiliki kemampuan untuk sepenuhnya menolak layanan kepada pengguna yang sah. Itu sumber daya di komponen yang terkena dampak tersedia sebagian atau seluruhnya waktu, atau tersedia sepenuhnya hanya sebagian waktu, tetapi secara keseluruhan tidak ada langsung, dampak serius terhadap komponen yang terkena dampak.">
                    Low</a>
                    <a href="#" onclick="selectOption(7,'N','None')" class="w-full hover:bg-[#52B788]"
                    title="Tidak ada dampak terhadap ketersediaan dalam komponen yang terkena dampak">
                    None</a>
                  </div>
                </div>
              </div>

            </div>

            <div class=" text-center text-[#52B788] ">
              <p class="font-semibold text-[2rem]">Risk Score</p>
              <p id="score" class="text-white font-semibold text-[2.5rem]">0</p>
              <p class="font-semibold text-[2rem] pt-5 ">Severity</p>
              <p id="result" class="text-white font-semibold text-[2rem] ">None</p>
            </div>
          </div>

          <div class=" pl-[calc(5.5%)] text-white">
            <button type="button" class="rounded-lg px-8 py-2 bg-[#3A403E] hover:bg-[#797c7b]" onclick="test()">Clear</button>
            <button type="button" id="calculate" onclick="calculateCVSS()" class="rounded-lg px-8 py-2 ml-5 bg-[#52B788] hover:bg-[#91e9be]">Calculate</button>
            <div class="pt-4">
              <h2 class="text-[#8b8a8a]">*INSERT SEVERITY</h2>
              <input type="text" class="h-[2rem] px-2 text-white bg-transparent border border-[#d9d9d96e] rounded-md">
              <select name="severity" id="severity" class=" h-[2rem] pl-2 bg-black text-white border border-[#d9d9d96e]  rounded-md">
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
                <option value="critical">Critical</option>
              </select>
            </div>
          </div>
        </div>

        <div>
            <h1 class="text-white pb-2">Description :</h1>
            <textarea name="description" id="description" class="w-full h-[10rem] p-2 bg-transparent border border-[#d9d9d96e] text-white rounded-md"></textarea>
        </div>
        <div>
          <h1 class="text-white pb-5">Proof of Concept (ex: Screenshot) :</h1>
          <input id="foto_bukti" name="foto_bukti" type="file" class="" accept=".jpg, .png, .svg, .jpeg, .gif">
          <!-- <label for="foto_bukti" class=" bg-slate-600 text-white p-2 ">upload file </label><span class="pl-4 text-white">file selection..</span> -->
        </div>
        <div>
          <h1 class="text-white pb-2">POC video url (optional)</h1>
            <input type="text" name="url_video" id="url_video" class="w-full p-2 bg-transparent border border-[#d9d9d96e] text-white rounded-md">
        </div>
   
          <div class="">
            <button class="rounded-lg px-8 py-2 bg-[#52B788] hover:bg-[#797c7b]" type="submit">Submit</button>
          </div>
      </div>
      </form>
    <script src="script/js/calculator.js"></script>
@endsection