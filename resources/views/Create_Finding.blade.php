  @extends('master.Layout_master')
  @section('content')

    <x-notify::notify />
    @notifyJs
    

  <form action="{{ url('/api/Create_Finding') }}" method="POST" enctype="multipart/form-data">
    @method('post')
    @csrf
        <!-- Content Start -->
        <div class="w-full border-b border-primary pb-4">
       
          <h3
            class="text-white text-[2.5rem] font-sans font-normal tracking-wider"
          >
            Create Finding
          </h3>
          <p class="text-white text-[1rem] font-sans font-thin tracking-wider">
            Integrate Information From the Discovered Bug
          </p>
        </div>

        <!-- Insert Severity Start -->
        <div class="my-8">
          <p
            class="text-white text-[1rem] font-sans font-normal tracking-wider mb-2"
            
          >
            Title :
          </p>
          <input
            class="w-full input-bundle py-3 px-6"
            type="text"
            placeholder="Bug Title"
            name="title"
            id="title"
          />
        </div>
        <!-- gap -->
        <div class="my-8">
          <p
            class="text-white text-[1rem] font-sans font-normal tracking-wider mb-2"
          >
            Asset Name :
          </p>
          <select
            class="w-full input-bundle rounded-md text-white text-[1rem] font-sans font-normal py-3 px-4"
            name="asset_name"
            id="asset_name"
            title="asset_name"
          >
            <option value="" disabled selected hidden>
              Choose an Asset Name
            </option>
            <option value="E-learning">E-Learning</option>
            <option value="Silam">SILAM</option>
            <option value="SID">SID</option>
            <option value="Polibatam.ac.id">Polibatam.ac.id</option>
          </select>
        </div>
        <!-- gap -->
        <!-- ////////// Risk Calculator Start ////////// -->
        <div class="my-8">
          <p
            class="text-white text-[1rem] font-sans font-normal tracking-wider mb-2"
          >
            Severity :
          </p>
          <div class="flex gap-4">
            <div class="w-[35rem] bg-secondary rounded-lg px-8 pt-6 pb-8 mb-4">
              <p
                class="border-b border-primary text-primary text-[1.2rem] font-sans font-medium tracking-wider pb-2 mb-4"
              >
                Risk Calculator
              </p>
              <!-- Start -->
              <div class="flex justify-between items-center">
                <div class="flex flex-col gap-4">
                  <div
                    class="dropdown-container w-[14rem] border-b-2 flex flex-row border-white py-1"
                  >
                    <button
                      class="dropdown-button w-full text-white text-start font-['Poppins'] pr-[5.3rem]"
                      data-dropdown="attackVector"
                      type="button"
                    >
                      Attack Vector
                    </button>
                    <img
                      src="src/img/icon/chevron-down-regular-24.png"
                      alt=""
                      class="rotate-icon cursor-pointer"
                    />
                    <div
                      id="dropdown--Content-attackVector"
                      class="dropdown-content absolute hidden w-[10rem] mt-8 bg-black"
                    >
                      <div
                        class="flex flex-col gap-5 text-white p-2"
                        role="none"
                      >
                        <a
                          href="#"
                          onclick="selectOption(0,'N','Network')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Komponen yang rentan terikat pada tumpukan jaringan dan kumpulan kemungkinan penyerang melampaui opsi lain yang tercantum di bawah ini, hingga dan termasuk seluruh Internet. Kerentanan seperti itu sering disebut 'dapat dieksploitasi dari jarak jauh' dan dapat dianggap sebagai serangan yang dapat dieksploitasi pada tingkat protokol satu atau atau lebih lompatan jaringan (misalnya, di satu atau lebih router). Contoh dari sebuah serangan jaringan adalah penyerang yang menyebabkan penolakan layanan (DoS) dengan mengirimkan paket TCP yang dibuat secara khusus di jaringan area luas (misalnya, CVE-2004-0230)."
                        >
                          Network</a
                        >
                        <a
                          href="#"
                          onclick="selectOption(0,'A','Adjacent')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Komponen yang rentan terikat pada tumpukan jaringan, tetapi serangannya terikat terbatas pada tingkat protokol pada topologi yang berdekatan secara logis. Ini bisa berarti sebuah serangan harus diluncurkan dari jaringan fisik bersama yang sama (misalnya, Bluetooth atau IEEE 802.11) atau jaringan logis (misalnya subnet IP lokal), atau dari dalam jaringan yang aman atau jika tidak, domain administratif terbatas (misalnya, MPLS, VPN aman ke zona jaringan administratif). Salah satu contoh serangan yang berdekatan adalah Banjir ARP (IPv4) atau penemuan tetangga (IPv6) yang menyebabkan penolakan layanan aktif segmen LAN lokal (mis., CVE-2013-6014)"
                        >
                          Adjacent</a
                        >
                        <a
                          href="#"
                          onclick="selectOption(0,'L','Local')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Komponen yang rentan tidak terikat pada tumpukan jaringan dan milik penyerang jalurnya adalah melalui kemampuan baca/tulis/eksekusi. Salah satu: • penyerang mengeksploitasi kerentanan dengan mengakses sistem target secara lokal (misalnya, keyboard, konsol), atau dari jarak jauh (misalnya, SSH); • penyerang mengandalkan Interaksi Pengguna oleh orang lain untuk melakukan tindakan yang diperlukan untuk mengeksploitasi kerentanan (misalnya, menggunakan rekayasa sosial teknik untuk mengelabui pengguna yang sah agar membuka dokumen berbahaya)."
                          >Local</a
                        >
                        <a
                          href="#"
                          onclick="selectOption(0,'P','Physical')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Serangan tersebut mengharuskan penyerang untuk menyentuh atau memanipulasi pihak yang rentan secara fisik komponen. Interaksi fisik mungkin singkat (misalnya, serangan pembantu jahat1) atau gigih. Contoh dari serangan tersebut adalah serangan cold boot dimana sebuah penyerang mendapatkan akses ke kunci enkripsi disk setelah mengakses secara fisik sistem sasaran. Contoh lainnya termasuk serangan periferal melalui FireWire/USB Akses Memori Langsung (DMA)."
                        >
                          Physical</a
                        >
                      </div>
                    </div>
                  </div>
                  <!-- gap -->
                  <div
                    class="dropdown-container border-b-2 flex flex-row border-white w-[14rem] py-1"
                  >
                    <button
                      class="dropdown-button w-full text-white font-['Poppins'] text-start pr-[3rem]"
                      data-dropdown="attackComplexity"
                      type="button"
                    >
                      Attack Complexity
                    </button>
                    <img
                      src="src/img/icon/chevron-down-regular-24.png"
                      alt=""
                      class="rotate-icon cursor-pointer"
                    />
                    <div
                      id="dropdown--Content-attackComplexity"
                      class="dropdown-content absolute hidden w-[10rem] mt-8 bg-black"
                    >
                      <div
                        class="flex flex-col gap-5 text-white p-2"
                        role="none"
                      >
                        <a
                          href="#"
                          onclick="selectOption(1,'L','Low')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Kondisi akses khusus atau keadaan khusus tidak ada. Sebuah Penyerang dapat mengharapkan keberhasilan yang berulang ketika menyerang pihak yang rentan komponen."
                        >
                          Low</a
                        >
                        <a
                          href="#"
                          onclick="selectOption(1,'H','High')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Keberhasilan serangan bergantung pada kondisi di luar kendali penyerang. Itu Artinya, serangan yang berhasil tidak dapat dilakukan sesuka hati, tetapi membutuhkan penyerang untuk berinvestasi dalam sejumlah upaya terukur dalam persiapan atau pelaksanaan terhadap komponen rentan sebelum serangan berhasil diharapkan.2 Misalnya, keberhasilan serangan mungkin bergantung pada penyerangnya mengatasi salah satu kondisi berikut: • Penyerang harus mengumpulkan pengetahuan tentang lingkungan di mana ada target/komponen yang rentan. Misalnya saja syarat untuk mengumpulkan detail tentang pengaturan konfigurasi target, nomor urut, atau dibagikan rahasia. • Penyerang harus mempersiapkan lingkungan target untuk meningkatkan eksploitasi keandalan. Misalnya eksploitasi berulang-ulang untuk memenangkan suatu kondisi perlombaan, atau mengatasi teknik mitigasi eksploitasi tingkat lanjut. • Penyerang harus memasukkan dirinya ke jalur jaringan logis antara target dan sumber daya yang diminta oleh korban untuk membaca dan/atau memodifikasi komunikasi jaringan (misalnya, seorang pria di tengah menyerang)."
                        >
                          High</a
                        >
                      </div>
                    </div>
                  </div>
                  <!-- gap -->
                  <div
                    class="dropdown-container border-b-2 flex flex-row border-white w-[14rem] py-1"
                  >
                    <button
                      class="dropdown-button w-full text-white font-['Poppins'] text-start pr-[2.2rem]"
                      data-dropdown="Previleges Required"
                      type="button"
                    >
                      Previleges Required
                    </button>
                    <img
                      src="src/img/icon/chevron-down-regular-24.png"
                      alt=""
                      class="rotate-icon cursor-pointer"
                    />
                    <div
                      id="dropdown--Content-PrevilegesRequired"
                      class="dropdown-content absolute hidden w-[10rem] mt-8 bg-black"
                    >
                      <div
                        class="flex flex-col gap-5 text-white p-2"
                        role="none"
                      >
                        <a
                          href="#"
                          onclick="selectOption(2,'N','None')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Penyerang tidak memiliki izin sebelum menyerang, dan oleh karena itu tidak memerlukannya akses apa pun ke pengaturan atau file dari sistem yang rentan untuk melakukan menyerang."
                        >
                          None</a
                        >
                        <a
                          href="#"
                          onclick="selectOption(2,'L','Low')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Penyerang memerlukan hak istimewa yang memberikan kemampuan dasar pengguna itu biasanya hanya dapat memengaruhi pengaturan dan file milik pengguna. Kalau tidak, penyerang dengan hak istimewa rendah hanya memiliki kemampuan untuk mengakses yang tidak sensitif sumber daya."
                        >
                          Low</a
                        >
                        <a
                          href="#"
                          onclick="selectOption(2,'H','High')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Penyerang memerlukan hak istimewa yang memberikan hak istimewa yang signifikan (misalnya administratif) kontrol atas komponen yang rentan memungkinkan akses ke seluruh komponen pengaturan dan file."
                        >
                          High</a
                        >
                      </div>
                    </div>
                  </div>
                  <!-- gap -->
                  <div
                    class="dropdown-container border-b-2 flex flex-row border-white w-[14rem] py-1"
                  >
                    <button
                      class="dropdown-button w-full text-white font-['Poppins'] text-start pr-[4.2rem]"
                      data-dropdown="User Interaction"
                      type="button"
                    >
                      User Interaction
                    </button>
                    <img
                      src="src/img/icon/chevron-down-regular-24.png"
                      alt=""
                      class="rotate-icon cursor-pointer"
                    />
                    <div
                      id="dropdown--Content-UserInteraction"
                      class="dropdown-content absolute hidden w-[10rem] mt-8 bg-black"
                    >
                      <div
                        class="flex flex-col gap-5 text-white p-2"
                        role="none"
                      >
                        <a
                          href="#"
                          onclick="selectOption(3,'N','None')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Sistem yang rentan dapat dieksploitasi tanpa interaksi dari pengguna mana pun."
                        >
                          None</a
                        >
                        <a
                          href="#"
                          onclick="selectOption(3,'R','Required')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Keberhasilan eksploitasi kerentanan ini mengharuskan pengguna untuk mengambil beberapa tindakan sebelum kerentanan dapat dieksploitasi. Misalnya saja yang sukses eksploitasi hanya dapat dilakukan selama instalasi aplikasi oleh a administrator sistem."
                        >
                          Required</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <!-- gap -->
                <div class="flex flex-col justify-center items-center gap-4">
                  <div
                    class="dropdown-container border-b-2 flex flex-row border-white w-[14rem] py-1"
                  >
                    <button
                      class="dropdown-button w-full text-white font-['Poppins'] text-start pr-[4.2rem]"
                      data-dropdown="Scope"
                      type="button"
                    >
                      Scope
                    </button>
                    <img
                      src="src/img/icon/chevron-down-regular-24.png"
                      alt=""
                      class="rotate-icon cursor-pointer"
                    />
                    <div
                      id="dropdown--Content-Scope"
                      class="dropdown-content absolute hidden w-[10rem] mt-8 bg-black"
                    >
                      <div
                        class="flex flex-col gap-5 text-white p-2"
                        role="none"
                      >
                        <a
                          href="#"
                          onclick="selectOption(4,'U','Unchanged')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Kerentanan yang dieksploitasi hanya dapat memengaruhi sumber daya yang dikelola oleh pihak yang sama otoritas keamanan. Dalam hal ini, komponen yang rentan dan yang terkena dampak komponennya sama, atau keduanya dikelola oleh keamanan yang sama otoritas."
                        >
                          Unchanged</a
                        >
                        <a
                          href="#"
                          onclick="selectOption(4,'C','Changed')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Kerentanan yang dieksploitasi dapat memengaruhi sumber daya di luar cakupan keamanan dikelola oleh otoritas keamanan komponen yang rentan. Pada kasus ini, komponen rentan dan komponen terdampak berbeda dan dikelola oleh otoritas keamanan yang berbeda."
                        >
                          Changed</a
                        >
                      </div>
                    </div>
                  </div>
                  <!-- gap -->
                  <div
                    class="dropdown-container border-b-2 flex flex-row border-white w-[14rem] py-1"
                  >
                    <button
                      class="dropdown-button w-full text-white text-start font-['Poppins'] pr-2"
                      data-dropdown="ConfidentialityImpact"
                      type="button"
                    >
                      Confidentiality
                    </button>
                    <img
                      src="src/img/icon/chevron-down-regular-24.png"
                      alt=""
                      class="rotate-icon cursor-pointer"
                    />
                    <div
                      id="dropdown--Content-ConfidentialityImpact"
                      class="dropdown-content absolute hidden w-[10rem] mt-8 bg-black"
                    >
                      <div
                        class="flex flex-col gap-5 text-white p-2"
                        role="none"
                      >
                        <a
                          href="#"
                          onclick="selectOption(5,'H','High')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Ada hilangnya kerahasiaan total, yang mengakibatkan semua sumber daya di dalamnya komponen yang terkena dampak diungkapkan kepada penyerang. Alternatifnya, akses ke hanya beberapa informasi terbatas yang diperoleh, tetapi informasi yang diungkapkan memberikan dampak langsung dan serius. Misalnya, seorang penyerang mencuri kata sandi administrator, atau kunci enkripsi pribadi server web."
                        >
                          High</a
                        >
                        <a
                          href="#"
                          onclick="selectOption(5,'L','Low')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Ada beberapa hilangnya kerahasiaan. Akses ke beberapa informasi terbatas diperoleh, tetapi penyerang tidak memiliki kendali atas informasi apa yang ada diperoleh, atau jumlah atau jenis kerugiannya terbatas. Keterbukaan informasi tidak menimbulkan kerugian langsung dan serius terhadap komponen yang terkena dampak."
                        >
                          Low</a
                        >
                        <a
                          href="#"
                          onclick="selectOption(5,'N','None')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Tidak ada hilangnya kerahasiaan dalam komponen yang terkena dampak."
                        >
                          None</a
                        >
                      </div>
                    </div>
                  </div>
                  <!-- gap -->
                  <div
                    class="dropdown-container border-b-2 flex flex-row border-white w-[14rem] py-1"
                  >
                    <button
                      class="dropdown-button w-full text-white text-start font-['Poppins'] pr-2"
                      data-dropdown="IntegrityImpact"
                      type="button"
                    >
                      Integrity
                    </button>
                    <img
                      src="src/img/icon/chevron-down-regular-24.png"
                      alt=""
                      class="rotate-icon cursor-pointer"
                    />
                    <div
                      id="dropdown--Content-IntegrityImpact"
                      class="dropdown-content absolute hidden w-[10rem] mt-8 bg-black"
                    >
                      <div
                        class="flex flex-col gap-5 text-white p-2"
                        role="none"
                      >
                        <a
                          href="#"
                          onclick="selectOption(6,'H','High')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Ada hilangnya integritas total, atau hilangnya perlindungan sepenuhnya. Untuk Misalnya, penyerang dapat memodifikasi semua file yang dilindungi oleh komponen yang terkena dampak. Alternatifnya, hanya beberapa file yang dapat dimodifikasi, namun modifikasi yang berbahaya akan menimbulkan konsekuensi langsung dan serius terhadap komponen yang terkena dampak."
                        >
                          High</a
                        >
                        <a
                          href="#"
                          onclick="selectOption(6,'L','Low')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Modifikasi data dimungkinkan, tetapi penyerang tidak memiliki kendali atas data tersebut konsekuensi modifikasi, atau jumlah modifikasi terbatas. Modifikasi data tidak mempunyai dampak langsung dan serius terhadap komponen yang terkena dampak."
                        >
                          Low</a
                        >
                        <a
                          href="#"
                          onclick="selectOption(6,'N','None')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Tidak ada hilangnya integritas dalam komponen yang terkena dampak."
                        >
                          None</a
                        >
                      </div>
                    </div>
                  </div>
                  <!-- gap -->
                  <div
                    class="dropdown-container border-b-2 flex flex-row border-white w-[14rem] py-1"
                  >
                    <button
                      class="dropdown-button w-full text-white text-start font-['Poppins'] pr-2"
                      data-dropdown="AvailabilityImpact"
                      type="button"
                    >
                      Availability
                    </button>
                    <img
                      src="src/img/icon/chevron-down-regular-24.png"
                      alt=""
                      class="rotate-icon cursor-pointer"
                    />
                    <div
                      id="dropdown--Content-AvailabilityImpact"
                      class="dropdown-content absolute hidden w-[10rem] mt-8 bg-black"
                    >
                      <div
                        class="flex flex-col gap-5 text-white p-2"
                        role="none"
                      >
                        <a
                          href="#"
                          onclick="selectOption(7,'H','High')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Ada hilangnya ketersediaan total, sehingga penyerang dapat melakukannya sepenuhnya menolak akses terhadap sumber daya di komponen yang terkena dampak; kerugian ini juga berkelanjutan (sementara penyerang terus melancarkan serangan) atau terus-menerus (the kondisinya tetap ada bahkan setelah serangan selesai). Alternatifnya, itu penyerang memiliki kemampuan untuk menolak beberapa ketersediaan, namun kehilangan ketersediaan menimbulkan konsekuensi langsung dan serius terhadap komponen yang terkena dampak (misalnya, Penyerang tidak dapat mengganggu koneksi yang sudah ada, namun dapat mencegah koneksi baru koneksi; penyerang dapat berulang kali mengeksploitasi kerentanan itu, di setiap kerentanan contoh serangan yang berhasil, hanya membocorkan sejumlah kecil memori, namun setelah eksploitasi berulang menyebabkan layanan menjadi sepenuhnya tidak tersedia)."
                        >
                          High</a
                        >
                        <a
                          href="#"
                          onclick="selectOption(7,'L','Low')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Performa berkurang atau ada gangguan pada ketersediaan sumber daya. Sekalipun eksploitasi berulang terhadap kerentanan mungkin terjadi, penyerang tetap melakukannya tidak memiliki kemampuan untuk sepenuhnya menolak layanan kepada pengguna yang sah. Itu sumber daya di komponen yang terkena dampak tersedia sebagian atau seluruhnya waktu, atau tersedia sepenuhnya hanya sebagian waktu, tetapi secara keseluruhan tidak ada langsung, dampak serius terhadap komponen yang terkena dampak."
                        >
                          Low</a
                        >
                        <a
                          href="#"
                          onclick="selectOption(7,'N','None')"
                          class="w-full hover:bg-white hover:text-secondary"
                          title="Tidak ada dampak terhadap ketersediaan dalam komponen yang terkena dampak"
                        >
                          None</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End -->
            </div>
            <!-- gap -->
            <div>
              <div class="w-[13.5rem] bg-[#449693] rounded-md px-6 py-2 mb-4">
                <p
                  class="text-white text-[1.5rem] font-sans font-light tracking-wider"
                >
                  Risk Score
                </p>
                <p
                  id="score"
                  class="text-white text-[1.5rem] font-sans font-medium tracking-wider"
                >
                  0
                </p>
              </div>
              <div class="w-[13.5rem] bg-[#449693] rounded-md px-6 py-2 my-4">
                <p
                  class="text-white text-[1.5rem] font-sans font-light tracking-wider"
                >
                  Severity
                </p>
                <p
                  id="result"
                  class="text-white text-[1.5rem] font-sans font-medium tracking-wider"
                >
                  None
                </p>
              </div>
            </div>
          </div>
          <div class="my-4">
            <button
              onclick="calculateCVSS()"
              type="button"
              class="bg-[#53adaa] hover:bg-[#121312] hover:shadow-[0_0_40px_0_rgba(24,209,203,1)_inset] outline-none hover:outline hover:outline-2 hover:outline-offset-4 hover:outline-[#21a49f] active:scale-90 transition-all duration-300 ease-out text-[#EBF0F9] text-[1rem] font-['Montserrat'] font-medium tracking-wider rounded-md py-3 px-8"
            >
              Calculate
            </button>
          </div>
        </div>
        <div class="my-4">
          <p
            class="text-gray-500 text-[1rem] font-sans font-normal tracking-wider mb-2"
          >
            Insert Severity
          </p>
          <div class="flex gap-4">
            <select
              class="input-bundle rounded-md text-white text-[1rem] font-sans font-normal py-3 px-4"
              name="severity"
              id="severity"
              title="severity"
            >
              <option value="" disabled selected hidden>
                Choose the severity level
              </option>
              <option value="low">LOW</option>
              <option value="medium">MEDIUM</option>
              <option value="high">HIGH</option>
              <option value="critical">CRITICAL</option>
            </select>
            <input
              class="w-[12rem] rounded-md input-bundle py-3 px-6"
              type="text"
              placeholder="score (ex:8.2)"
              pattern="^(?:10(?:\,0)?|\d(?:\.\d)?)$"
              title="Please enter a valid score up to 10.0"
              name="severity_score"
              id="severity_score"
            />
          </div>
        </div>
        <!-- ////////// Risk Calculator End ////////// -->
        <!-- gap -->
        <div class="my-8">
          <p
            class="text-white text-[1rem] font-sans font-normal tracking-wider mb-2"
          >
            Description :
          </p>
          <!-- <input class="w-full input-bundle py-3 px-6" type="text" /> -->
          <textarea
            class="w-full h-[16rem] input-bundle py-3 px-4"
            name="description"
            id="description"
            placeholder="Description about the finding ..."
          ></textarea>
        </div>
        <!-- gap -->
        <div class="my-8">
          <p
            class="text-white text-[1rem] font-sans font-normal tracking-wider mb-2"
          >
            Proof of Concept (ex: Screenshot, *max:2mb) :
          </p>
          <input
            class="input-bundle py-3 px-6"
            id="foto_bukti" name="foto_bukti" type="file" accept=".jpg, .png, .svg, .jpeg, .gif"
          />
        </div>
        <!-- gap -->
        <div class="my-8">
          <p
            class="text-white text-[1rem] font-sans font-normal tracking-wider mb-2"
          >
            POC video url (optional) :
          </p>
          <input
            class="w-full input-bundle py-3 px-6"
            type="text"
            name="url_video"
            id="url_video"
            placeholder="YouTube source or public access link"
          />
        </div>
        <!-- Insert Severity End -->
        <div class="flex gap-4 my-6">
          <button class="button-bundle rounded-md px-10 py-3" type="submit">
            Submit
          </button>
          <button
            onclick="reloadPage()"
            class="bg-[#3f4746] hover:bg-[#121312] outline-none hover:outline hover:outline-2 hover:outline-offset-4 hover:outline-[#3f4746] active:scale-90 transition-all duration-300 ease-out text-[#EBF0F9] text-[1rem] font-['Montserrat'] font-medium tracking-wider rounded-md py-3 px-8"
          >
            Clear
          </button>
        </div>
  </form>
    <script src="script/js/calculator.js"></script>
@endsection 