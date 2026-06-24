<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPMB SMK AL MUJAHID TAHUN 2026/2027</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f3f4f6; }
        .input-field {
            width: 100%; border-radius: 0.5rem; border: 1px solid #d1d5db; padding: 0.75rem 1rem;
            margin-top: 0.25rem; font-size: 0.875rem; transition: all 0.2s; background-color: #f9fafb;
        }
        .input-field:focus { border-color: #3b82f6; outline: none; box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2); background-color: #ffffff; }
        .label-text { font-size: 0.875rem; font-weight: 600; color: #374151; }
        .required-mark { color: #ef4444; }
        
        /* Transition styles */
        .step-content { display: none; animation: fadeIn 0.4s ease-in-out; }
        .step-content.active { display: block; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
        
        .page-section { display: none; animation: fadeIn 0.5s; }
        .page-section.active-page { display: block; }

        /* Hide arrows on number inputs */
        input::-webkit-outer-spin-button, input::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0; }
        input[type=number] { -moz-appearance: textfield; }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #c1c1c1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #a8a8a8; }
    </style>
</head>
<body class="bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] bg-fixed text-gray-800 min-h-screen py-8 px-4 sm:px-6 lg:px-8 flex items-center justify-center">

    <div class="w-full max-w-5xl">
        
        <!-- ================= HEADER GLOBAL ================= -->
        <div class="bg-gradient-to-br from-blue-700 via-indigo-800 to-blue-900 p-8 text-center text-white relative overflow-hidden rounded-t-3xl shadow-2xl">
            <!-- Dekorasi background header -->
            <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-20 pointer-events-none">
                <div class="absolute -top-10 -left-10 w-40 h-40 bg-white rounded-full mix-blend-overlay filter blur-2xl"></div>
                <div class="absolute bottom-0 right-0 w-64 h-64 bg-blue-400 rounded-full mix-blend-overlay filter blur-3xl"></div>
            </div>

            <div class="relative z-10 flex flex-col items-center">
                <!-- GANTI URL SRC DI BAWAH DENGAN URL LOGO SEKOLAH -->
                <img src="https://smkamd.my.id/logo.png" alt="Logo SMK Al Mujahid" class="w-24 h-24 md:w-28 md:h-28 object-contain mb-4 bg-white rounded-full p-2 shadow-xl ring-4 ring-white/20">
                <h1 class="text-2xl md:text-3xl font-bold tracking-wide uppercase drop-shadow-md">Sistem Penerimaan Murid Baru</h1>
                <h2 class="text-xl md:text-2xl font-bold text-yellow-400 mt-1 uppercase drop-shadow-md">SMK Al Mujahid Tasikmalaya</h2>
                <div class="mt-5 inline-block px-6 py-2 bg-white/10 rounded-full text-sm md:text-base font-semibold border border-white/20 backdrop-blur-md shadow-lg">
                    <i class="fa-regular fa-calendar-check mr-2 text-yellow-400"></i> Tahun Ajaran 2026/2027
                </div>
            </div>
        </div>

        <!-- ================= HALAMAN 1: LANDING PAGE (MENU) ================= -->
        <div id="landingPage" class="page-section active-page bg-white/90 backdrop-blur-sm rounded-b-3xl shadow-2xl p-8 sm:p-12 text-center border-t-4 border-yellow-400">
            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-2">Selamat Datang di Portal SPMB</h3>
            <p class="text-gray-500 mb-10">Silahkan pilih portal layanan pendaftaran di bawah ini sesuai dengan kebutuhan Anda.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                
                <!-- Tombol 1: Daftar Siswa (Wajib Isi) -->
                <button onclick="startRegisterSiswa()" class="group relative flex flex-col items-center justify-start p-8 bg-gradient-to-b from-blue-50 to-white border-2 border-blue-200 rounded-2xl hover:border-blue-500 hover:shadow-2xl transition-all duration-300 cursor-pointer transform hover:-translate-y-2">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-blue-600 transition-colors shadow-inner">
                        <i class="fa-solid fa-user-graduate text-4xl text-blue-600 group-hover:text-white transition-colors"></i>
                    </div>
                    <span class="text-lg font-bold text-blue-900">Pendaftaran Baru</span>
                    <span class="text-sm text-gray-500 mt-2 text-center">Pendaftaran mandiri oleh calon murid</span>
                    <div class="mt-auto pt-4 w-full"><span class="block w-full py-2 bg-blue-100 text-blue-700 font-semibold rounded-lg group-hover:bg-blue-600 group-hover:text-white transition-colors">Masuk <i class="fa-solid fa-arrow-right ml-1"></i></span></div>
                </button>

                <!-- Tombol 2: Daftar Panitia (Tidak Wajib) -->
                <button onclick="startRegisterPanitia()" class="group relative flex flex-col items-center justify-start p-8 bg-gradient-to-b from-green-50 to-white border-2 border-green-200 rounded-2xl hover:border-green-500 hover:shadow-2xl transition-all duration-300 cursor-pointer transform hover:-translate-y-2">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-green-600 transition-colors shadow-inner">
                        <i class="fa-solid fa-user-graduate text-4xl text-green-600 group-hover:text-white transition-colors"></i>
                    </div>
                    <span class="text-lg font-bold text-purple-900">Pendaftaran Baru Panitia</span>
                    <span class="text-sm text-gray-500 mt-2 text-center">Pendaftaran Oleh Panitia SPMB</span>
                    <div class="mt-auto pt-4 w-full"><span class="block w-full py-2 bg-green-100 text-green-700 font-semibold rounded-lg group-hover:bg-green-600 group-hover:text-white transition-colors">Masuk <i class="fa-solid fa-user-shield ml-1"></i></span></div>
                </button>

                <!-- Tombol 3: Update Data -->
                <button onclick="openSearch()" class="group relative flex flex-col items-center justify-start p-8 bg-gradient-to-b from-amber-50 to-white border-2 border-amber-200 rounded-2xl hover:border-amber-500 hover:shadow-2xl transition-all duration-300 cursor-pointer transform hover:-translate-y-2">
                    <div class="w-20 h-20 bg-amber-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-amber-500 transition-colors shadow-inner">
                        <i class="fa-solid fa-file-pen text-4xl text-amber-500 group-hover:text-white transition-colors"></i>
                    </div>
                    <span class="text-lg font-bold text-amber-900">Update Data Murid Baru</span>
                    <span class="text-sm text-gray-500 mt-2 text-center">Cari dan ubah data yang telah didaftarkan sebelumnya</span>
                    <div class="mt-auto pt-4 w-full"><span class="block w-full py-2 bg-amber-100 text-amber-700 font-semibold rounded-lg group-hover:bg-amber-500 group-hover:text-white transition-colors">Cari Data <i class="fa-solid fa-search ml-1"></i></span></div>
                </button>
            </div>
        </div>

        <!-- ================= HALAMAN 2: CARI DATA (UPDATE) ================= -->
        <div id="searchPage" class="page-section bg-white rounded-b-3xl shadow-2xl p-8 sm:p-12">
            <div class="max-w-lg mx-auto text-center">
                <div class="w-24 h-24 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-6 shadow-inner">
                    <i class="fa-solid fa-magnifying-glass text-5xl text-amber-500"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Cari Formulir Anda</h3>
                <p class="text-gray-500 mb-8">Masukkan NIK Calon Murid untuk mencari dan memperbarui data pendaftaran Anda.</p>
                
                <input type="text" id="keyword" class="input-field text-center text-xl font-bold mb-8 py-4 shadow-inner" placeholder="Ketik NIK Calon Murid Baru">
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button onclick="goHome()" class="px-8 py-3 bg-gray-200 text-gray-700 font-bold rounded-xl hover:bg-gray-300 transition-colors w-full sm:w-auto shadow-sm"><i class="fa-solid fa-arrow-left mr-2"></i> Kembali</button>
                    <button onclick="searchData()" class="px-8 py-3 bg-gradient-to-r from-amber-500 to-orange-500 text-white font-bold rounded-xl hover:from-amber-600 hover:to-orange-600 transition-all shadow-lg transform hover:-translate-y-1 w-full sm:w-auto"><i class="fa-solid fa-search mr-2"></i> Cari Formulir</button>
                </div>
            </div>
        </div>

        <!-- ================= HALAMAN 3: FORMULIR MULTI-STEP ================= -->
        <div id="formPage" class="page-section bg-white rounded-b-3xl shadow-2xl p-6 sm:p-10">
            
            <!-- Judul & Tombol Batal -->
            <div class="flex justify-between items-center mb-6 border-b-2 border-gray-100 pb-4">
                <h3 class="text-xl md:text-2xl font-bold text-gray-800" id="formTitleText">Formulir Pendaftaran</h3>
                <button type="button" onclick="confirmCancel()" class="text-red-500 hover:text-white hover:bg-red-500 border border-red-500 font-semibold text-sm px-4 py-2 rounded-lg transition-colors"><i class="fa-solid fa-times mr-1"></i> Batal</button>
            </div>

            <!-- Banner Info Mode (Update / Panitia) -->
            <div id="infoBanner" class="hidden rounded-xl mb-8 font-semibold flex flex-col sm:flex-row items-start sm:items-center justify-between p-4 gap-3 shadow-sm">
                <div id="infoBannerIconText" class="flex items-center text-sm md:text-base"></div>
                <div id="infoBannerBadge" class="hidden px-4 py-2 rounded-lg text-sm shadow-inner border"></div>
            </div>

            <!-- Stepper Progress UI -->
            <div class="mb-10 px-2 sm:px-8">
                <div class="flex items-center justify-between relative">
                    <!-- Garis abu-abu background -->
                    <div class="absolute left-0 top-1/2 transform -translate-y-1/2 w-full h-1.5 bg-gray-200 z-0 rounded-full"></div>
                    <!-- Garis biru progress -->
                    <div id="progress-bar" class="absolute left-0 top-1/2 transform -translate-y-1/2 h-1.5 bg-blue-600 z-0 transition-all duration-500 ease-in-out rounded-full" style="width: 0%;"></div>
                    
                    <div class="step-indicator relative z-10 flex flex-col items-center group active" data-step="1">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center font-bold border-4 transition-all duration-500 bg-blue-600 border-blue-200 text-white step-circle shadow-md"><i class="fa-solid fa-user"></i></div>
                        <span class="text-[10px] md:text-xs font-bold mt-2 text-blue-600 step-text transition-colors">Data Murid</span>
                    </div>
                    <div class="step-indicator relative z-10 flex flex-col items-center group" data-step="2">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center font-bold border-4 transition-all duration-500 bg-white border-gray-300 text-gray-400 step-circle"><i class="fa-solid fa-map-location-dot"></i></div>
                        <span class="text-[10px] md:text-xs font-bold mt-2 text-gray-400 step-text transition-colors">Alamat</span>
                    </div>
                    <div class="step-indicator relative z-10 flex flex-col items-center group" data-step="3">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center font-bold border-4 transition-all duration-500 bg-white border-gray-300 text-gray-400 step-circle"><i class="fa-solid fa-users"></i></div>
                        <span class="text-[10px] md:text-xs font-bold mt-2 text-gray-400 step-text transition-colors">Ortu/Wali</span>
                    </div>
                    <div class="step-indicator relative z-10 flex flex-col items-center group" data-step="4">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center font-bold border-4 transition-all duration-500 bg-white border-gray-300 text-gray-400 step-circle"><i class="fa-solid fa-school"></i></div>
                        <span class="text-[10px] md:text-xs font-bold mt-2 text-gray-400 step-text transition-colors">Sekolah</span>
                    </div>
                    <div class="step-indicator relative z-10 flex flex-col items-center group" data-step="5">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center font-bold border-4 transition-all duration-500 bg-white border-gray-300 text-gray-400 step-circle"><i class="fa-solid fa-check-double"></i></div>
                        <span class="text-[10px] md:text-xs font-bold mt-2 text-gray-400 step-text transition-colors">Selesai</span>
                    </div>
                </div>
            </div>

            <!-- FORM START -->
            <form id="formPPDB">
                <!-- HIDDEN INPUTS UNTUK BACKEND -->
                <input type="hidden" name="action" id="formAction" value="register">
                <input type="hidden" name="row_index" id="formRowIndex" value="">
                <input type="hidden" name="No_Pendaftaran" id="No_Pendaftaran" value="">
                <input type="hidden" name="modePanitia" id="modePanitia" value="false">

                <!-- ================= STEP 1. DATA CALON MURID ================= -->
                <div class="step-content active" id="step1">
                    <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 mb-6 rounded-r-lg">
                        <h2 class="text-lg font-bold text-indigo-800"><i class="fa-regular fa-id-card mr-2"></i>A. Data Diri Calon Murid Baru</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div><label class="label-text">Nama Lengkap Sesuai Ijazah <span class="required-mark">*</span></label><input type="text" name="Nama_Siswa" class="input-field" required placeholder="Contoh: AHMAD FAUZAN"></div>
                        
                        <!-- NISN: Pasti 10 Digit -->
                        <div><label class="label-text">NISN <span class="required-mark">*</span></label>
                            <input type="text" inputmode="numeric" class="input-field only-number" data-length="10" maxlength="10" name="NISN" required placeholder="10 Digit NISN (Cth: 0012345678)">
                        </div>
                        
                        <!-- NIK: Pasti 16 Digit -->
                        <div><label class="label-text">NIK Calon Murid <span class="required-mark">*</span></label>
                            <input type="text" inputmode="numeric" class="input-field only-number" data-length="16" maxlength="16" name="NIK_Siswa" required placeholder="16 Digit NIK">
                        </div>
                        
                        <!-- KK: Pasti 16 Digit -->
                        <div><label class="label-text">No Kartu Keluarga <span class="required-mark">*</span></label>
                            <input type="text" inputmode="numeric" class="input-field only-number" data-length="16" maxlength="16" name="No_KK" required placeholder="16 Digit No KK">
                        </div>
                        
                        <div>
                            <label class="label-text">Jenis Kelamin <span class="required-mark">*</span></label>
                            <select name="Jenis_Kelamin" class="input-field" required>
                                <option value="">-- Pilih --</option><option value="Laki-laki">Laki-laki</option><option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div><label class="label-text">Tempat Lahir <span class="required-mark">*</span></label><input type="text" name="Tempat_Lahir" class="input-field" required placeholder=" "></div>
                        
                        <div class="md:col-span-2 grid grid-cols-1 sm:grid-cols-3 gap-3 bg-gray-50 p-4 rounded-xl border border-gray-200">
                            <div><label class="label-text">Tanggal Lahir<span class="required-mark">*</span></label><select name="Tanggal_Lahir" id="tglLahirSiswa" class="input-field" required><option value="">Pilih Tanggal</option></select></div>
                            <div><label class="label-text">Bulan Lahir<span class="required-mark">*</span></label><select name="Bulan_Lahir" id="blnLahirSiswa" class="input-field" required><option value="">Pilih Bulan</option></select></div>
                            <div><label class="label-text">Tahun Lahir<span class="required-mark">*</span></label><select name="Tahun_Lahir" id="thnLahirSiswa" class="input-field" required><option value="">Pilih Tahun</option></select></div>
                        </div>
                        
                        <div>
                            <label class="label-text">Agama <span class="required-mark">*</span></label>
                            <select name="Agama" class="input-field" required>
                                <option value="">-- Pilih Agama --</option>
                                <option value="Islam">Islam</option><option value="Kristen">Kristen</option><option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option><option value="Buddha">Buddha</option><option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        
                        <!-- No HP Siswa: 10 s.d 13 Digit -->
                        <div><label class="label-text">No HP Calon Murid (Aktif) <span class="required-mark">*</span></label>
                            <input type="text" inputmode="numeric" class="input-field only-number" data-min="10" data-max="13" maxlength="13" name="No_HP_Siswa" required placeholder="08xxxxxxxxxx (10-13 digit)">
                        </div>
                    </div>
                </div>

                <!-- ================= STEP 2. DATA ALAMAT ================= -->
                <div class="step-content" id="step2">
                    <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 mb-6 rounded-r-lg">
                        <h2 class="text-lg font-bold text-indigo-800"><i class="fa-solid fa-map-location-dot mr-2"></i>B. Alamat Tempat Tinggal</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="md:col-span-2"><label class="label-text">Nama Jalan/Kp/Dusun <span class="required-mark">*</span></label><input type="text" name="Nama_Jalan" class="input-field" required placeholder="Contoh: Jl. Merdeka No. 10 / Kp. Sukamaju"></div>
                        <div><label class="label-text">RT <span class="required-mark">*</span></label><input type="text" inputmode="numeric" name="RT" class="input-field only-number" required placeholder="Contoh: 001"></div>
                        <div><label class="label-text">RW <span class="required-mark">*</span></label><input type="text" inputmode="numeric" name="RW" class="input-field only-number" required placeholder="Contoh: 002"></div>
                        <div><label class="label-text">Desa/Kelurahan <span class="required-mark">*</span></label><input type="text" name="Desa_Kelurahan" class="input-field" required></div>
                        <div><label class="label-text">Kecamatan <span class="required-mark">*</span></label><input type="text" name="Kecamatan" class="input-field" required></div>
                        <div><label class="label-text">Kabupaten/Kota <span class="required-mark">*</span></label><input type="text" name="Kabupaten_Kota" class="input-field" required></div>
                        <div><label class="label-text">Provinsi <span class="required-mark">*</span></label><input type="text" name="Provinsi" class="input-field" required></div>
                        <div class="md:col-span-2">
                            <label class="label-text">Saat ini Tinggal Bersama <span class="required-mark">*</span></label>
                            <select name="Tinggal_Bersama" class="input-field" required>
                                <option value="">-- Pilih --</option>
                                <option value="Orang Tua">Orang Tua</option><option value="Wali">Wali</option>
                                <option value="Asrama/Pesantren">Asrama/Pesantren</option><option value="Kos">Kos</option><option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- ================= STEP 3. DATA ORANG TUA / WALI ================= -->
                <div class="step-content" id="step3">
                    <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 mb-6 rounded-r-lg">
                        <h2 class="text-lg font-bold text-indigo-800"><i class="fa-solid fa-people-roof mr-2"></i>C. Data Orang Tua & Wali</h2>
                    </div>
                    
                    <!-- Form Ayah -->
                    <div class="bg-blue-50/50 p-5 rounded-2xl mb-6 border border-blue-100 shadow-sm">
                        <h3 class="font-bold text-blue-800 mb-4 border-b pb-2"><i class="fa-solid fa-user-tie mr-2"></i>Data Ayah Kandung</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div><label class="label-text">Nama Ayah <span class="required-mark">*</span></label><input type="text" name="Nama_Ayah" class="input-field" required></div>
                            <div><label class="label-text">Status Ayah <span class="required-mark">*</span></label>
                                <select name="Status_Ayah" class="input-field" required><option value="">-- Pilih Status --</option><option value="Masih Hidup">Masih Hidup</option><option value="Sudah Meninggal">Sudah Meninggal</option></select>
                            </div>
                            <!-- NIK Ayah: 16 Digit -->
                            <div><label class="label-text">NIK Ayah <span class="required-mark">*</span></label>
                                <input type="text" inputmode="numeric" class="input-field only-number" data-length="16" maxlength="16" name="NIK_Ayah" required>
                            </div>
                            <div><label class="label-text">Tahun Lahir <span class="required-mark">*</span></label><select name="Tahun_Lahir_Ayah" id="thnLahirAyah" class="input-field" required><option value="">Pilih Tahun</option></select></div>
                            <div><label class="label-text">Pendidikan Terakhir <span class="required-mark">*</span></label><select name="Pendidikan_Ayah" class="input-field sel-pendidikan" required><option value="">Pilih</option></select></div>
                            <div><label class="label-text">Pekerjaan Utama <span class="required-mark">*</span></label><select name="Pekerjaan_Ayah" class="input-field sel-pekerjaan" required><option value="">Pilih</option></select></div>
                            <div class="md:col-span-2"><label class="label-text">Penghasilan Rata-rata per Bulan <span class="required-mark">*</span></label><select name="Penghasilan_Ayah" class="input-field sel-penghasilan" required><option value="">Pilih</option></select></div>
                        </div>
                    </div>

                    <!-- Form Ibu -->
                    <div class="bg-pink-50/50 p-5 rounded-2xl mb-6 border border-pink-100 shadow-sm">
                        <h3 class="font-bold text-pink-800 mb-4 border-b pb-2"><i class="fa-solid fa-user mr-2"></i>Data Ibu Kandung</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div><label class="label-text">Nama Ibu <span class="required-mark">*</span></label><input type="text" name="Nama_Ibu" class="input-field" required></div>
                            <div><label class="label-text">Status Ibu <span class="required-mark">*</span></label>
                                <select name="Status_Ibu" class="input-field" required><option value="">-- Pilih Status --</option><option value="Masih Hidup">Masih Hidup</option><option value="Sudah Meninggal">Sudah Meninggal</option></select>
                            </div>
                            <!-- NIK Ibu: 16 Digit -->
                            <div><label class="label-text">NIK Ibu <span class="required-mark">*</span></label>
                                <input type="text" inputmode="numeric" class="input-field only-number" data-length="16" maxlength="16" name="NIK_Ibu" required>
                            </div>
                            <div><label class="label-text">Tahun Lahir <span class="required-mark">*</span></label><select name="Tahun_Lahir_Ibu" id="thnLahirIbu" class="input-field" required><option value="">Pilih Tahun</option></select></div>
                            <div><label class="label-text">Pendidikan Terakhir <span class="required-mark">*</span></label><select name="Pendidikan_Ibu" class="input-field sel-pendidikan" required><option value="">Pilih</option></select></div>
                            <div><label class="label-text">Pekerjaan Utama <span class="required-mark">*</span></label><select name="Pekerjaan_Ibu" class="input-field sel-pekerjaan" required><option value="">Pilih</option></select></div>
                            <div class="md:col-span-2"><label class="label-text">Penghasilan Rata-rata per Bulan <span class="required-mark">*</span></label><select name="Penghasilan_Ibu" class="input-field sel-penghasilan" required><option value="">Pilih</option></select></div>
                        </div>
                    </div>

                    <!-- Form Wali -->
                    <div class="bg-gray-50 p-5 rounded-2xl mb-4 border border-gray-200">
                        <h3 class="font-bold text-gray-700 mb-4 border-b pb-2"><i class="fa-solid fa-users mr-2"></i>Data Wali <span class="text-xs font-normal text-gray-500 bg-gray-200 px-2 py-1 rounded-md ml-2">Tidak Wajib</span></h3>
                        <p class="text-xs text-gray-500 mb-4 italic">Kosongkan bagian ini jika murid tinggal dan diurus langsung oleh orang tua kandung.</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div><label class="label-text">Nama Wali</label><input type="text" name="Nama_Wali" class="input-field"></div>
                            <!-- NIK Wali: 16 Digit -->
                            <div><label class="label-text">NIK Wali</label>
                                <input type="text" inputmode="numeric" class="input-field only-number" data-length="16" maxlength="16" name="NIK_Wali">
                            </div>
                            <div><label class="label-text">Tahun Lahir</label><select name="Tahun_Lahir_Wali" id="thnLahirWali" class="input-field"><option value="">Pilih Tahun</option></select></div>
                            <div><label class="label-text">Pendidikan</label><select name="Pendidikan_Wali" class="input-field sel-pendidikan"><option value="">Pilih</option></select></div>
                            <div><label class="label-text">Pekerjaan</label><select name="Pekerjaan_Wali" class="input-field sel-pekerjaan"><option value="">Pilih</option></select></div>
                            <div><label class="label-text">Penghasilan</label><select name="Penghasilan_Wali" class="input-field sel-penghasilan"><option value="">Pilih</option></select></div>
                            <div class="md:col-span-2"><label class="label-text">Alamat Lengkap Wali</label><input type="text" name="Alamat_Wali" class="input-field"></div>
                        </div>
                    </div>
                    
                    <div class="mt-8 bg-green-50 p-5 rounded-xl border border-green-200">
                        <!-- No HP Ortu: 10 s.d 13 Digit -->
                        <label class="label-text text-green-800 font-bold text-lg"><i class="fa-brands fa-whatsapp mr-2"></i>No HP Orang Tua / Wali (Aktif WhatsApp) <span class="required-mark">*</span></label>
                        <p class="text-sm text-green-700 mb-2">Nomor ini akan dihubungi oleh panitia sekolah untuk informasi penting.</p>
                        <input type="text" inputmode="numeric" class="input-field only-number border-green-300 focus:border-green-500 text-lg py-3" data-min="10" data-max="13" maxlength="13" name="No_HP_Ortu" required placeholder="08xxxxxxxxxx (10-13 digit)">
                    </div>
                </div>

                <!-- ================= STEP 4. DATA SEKOLAH & BANTUAN ================= -->
                <div class="step-content" id="step4">
                    <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 mb-6 rounded-r-lg">
                        <h2 class="text-lg font-bold text-indigo-800"><i class="fa-solid fa-school mr-2"></i>D. Riwayat Sekolah & Bantuan</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-8 bg-white p-5 rounded-2xl border border-gray-200 shadow-sm">
                        <h3 class="font-bold text-gray-700 mb-2 md:col-span-2 border-b pb-2">Riwayat Pendidikan Terakhir</h3>
                        
                        <div><label class="label-text">Asal Sekolah SD/MI/Paket A <span class="required-mark">*</span></label><select name="Asal_SD_MI" class="input-field" required><option value="">-- Pilih --</option><option value="SDN">SD Negeri</option><option value="MIN">MI Negeri</option><option value="SD">SD</option><option value="MI">MI</option><option value="PKBM">Paket A / PKBM</option></select></div>
                        <div><label class="label-text">Nama Sekolah SD/MI/Paket A <span class="required-mark">*</span></label><input type="text" name="Nama_Sekolah_SD" class="input-field" required placeholder="Cth: SDN 1 TASIKMALAYA"></div>
                        
                        <div><label class="label-text">Asal Sekolah SMP/MTs/Paket B <span class="required-mark">*</span></label><select name="Asal_SMP_MTs" class="input-field" required><option value="">-- Pilih --</option><option value="SMP Negeri">SMP Negeri</option><option value="MTsN">MTs Negeri</option><option value="SMP">SMP</option><option value="MTs">MTs</option><option value="PKBM">Paket B / PKBM</option></select></div>
                        <div><label class="label-text">Nama Sekolah SMP/MTs/Paket B <span class="required-mark">*</span></label><input type="text" name="Nama_Sekolah_SMP" class="input-field" required placeholder="Cth: SMPN 2 TASIKMALAYA"></div>
                        
                        <div class="md:col-span-2"><label class="label-text">Tahun Lulus SMP/MTs/Paket B <span class="required-mark">*</span></label><select name="Tahun_Lulus_SMP" id="thnLulus" class="input-field w-full md:w-1/2" required><option value="">Pilih Tahun Kelulusan</option></select></div>
                    </div>

                    <div class="bg-yellow-50 p-5 rounded-2xl border border-yellow-200 shadow-sm">
                        <h3 class="font-bold text-yellow-800 mb-4 border-b border-yellow-200 pb-2"><i class="fa-solid fa-hand-holding-dollar mr-2"></i>Program Bantuan Pemerintah <span class="text-xs font-normal bg-yellow-200 px-2 py-1 rounded-md ml-2 text-yellow-800">Opsional</span></h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div><label class="label-text">Punya Bantuan Pemerintah?</label><select name="Punya_Bantuan" class="input-field"><option value="">-- Pilih --</option><option value="Ya">Ya, Memiliki</option><option value="Tidak">Tidak Memiliki</option></select></div>
                            <div><label class="label-text">Jenis Bantuan</label><select name="Jenis_Bantuan" class="input-field"><option value="-">-- Pilih Jenis --</option><option value="PIP/KIP">PIP / KIP</option><option value="PKH">PKH</option><option value="KPS/KKS">KPS / KKS</option><option value="Lainnya">Lainnya</option></select></div>
                            <div><label class="label-text">Nomor Kartu Bantuan</label><input type="text" name="No_Kartu_Bantuan" class="input-field" placeholder="Isi nomor kartu jika ada"></div>
                            <div><label class="label-text">Nama Tertera di Kartu</label><input type="text" name="Atas_Nama_Bantuan" class="input-field" placeholder="Isi nama sesuai kartu"></div>
                        </div>
                    </div>
                </div>

                <!-- ================= STEP 5. JURUSAN & KONFIRMASI ================= -->
                <div class="step-content" id="step5">
                    <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 mb-6 rounded-r-lg">
                        <h2 class="text-lg font-bold text-indigo-800"><i class="fa-solid fa-check-double mr-2"></i>E. Pemilihan Jurusan & Validasi</h2>
                    </div>

                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border-2 border-blue-300 p-6 md:p-8 rounded-2xl mb-8 shadow-md">
                        <label class="label-text text-center block mb-4 font-bold text-blue-900 text-lg md:text-xl">Pilih Kompetensi Keahlian (Jurusan) <span class="required-mark">*</span></label>
                        <select name="Pilihan_Jurusan" class="input-field border-blue-400 focus:ring-blue-600 focus:border-blue-600 text-base md:text-lg py-4 font-semibold text-gray-700 shadow-inner" required>
                            <option value="">-- SILAHKAN PILIH JURUSAN --</option>
                            <option value="Teknik Komputer dan Jaringan (TKJ)">Teknik Komputer dan Jaringan (TKJ)</option>
                            <option value="Teknik Sepeda Motor (TSM)">Teknik Sepeda Motor (TSM)</option>
                        </select>
                    </div>

                    <div id="pernyataanBox" class="bg-red-50 border-2 border-red-200 p-5 md:p-6 rounded-2xl flex items-start shadow-sm transition hover:bg-red-100 cursor-pointer">
                        <input type="checkbox" name="Pernyataan" id="pernyataanData" class="mt-1 mr-4 w-6 h-6 text-red-600 rounded cursor-pointer" required>
                        <label for="pernyataanData" class="text-sm md:text-base text-gray-800 cursor-pointer leading-relaxed">
                            <strong class="text-red-700 block mb-2 text-lg"><i class="fa-solid fa-triangle-exclamation mr-2"></i>PERNYATAAN KEABSAHAN DATA</strong>
                            Saya menyatakan dengan sesungguhnya bahwa seluruh data yang saya isikan dalam formulir pendaftaran ini adalah <strong>BENAR</strong> dan sesuai dengan dokumen asli yang sah. Apabila di kemudian hari ditemukan bahwa data yang saya berikan adalah palsu/tidak benar, saya bersedia menerima sanksi berupa pembatalan status penerimaan sebagai murid SMK Al Mujahid.
                        </label>
                    </div>
                </div>

                <!-- ================= NAVIGASI BAWAH ================= -->
                <div class="flex flex-col-reverse sm:flex-row justify-between items-center mt-12 pt-6 border-t border-gray-200 gap-4">
                    <button type="button" id="btnPrev" class="px-6 py-3 rounded-xl font-bold text-gray-600 bg-gray-100 hover:bg-gray-200 transition-colors hidden w-full sm:w-auto text-center shadow-sm"><i class="fa-solid fa-arrow-left mr-2"></i> Tahap Sebelumnya</button>
                    
                    <div class="w-full sm:w-auto sm:ml-auto flex flex-col sm:flex-row gap-3">
                        <button type="button" id="btnNext" class="bg-blue-600 text-white px-10 py-3 rounded-xl font-bold hover:bg-blue-700 transition-all shadow-md w-full sm:w-auto text-center text-lg">Lanjut <i class="fa-solid fa-arrow-right ml-2"></i></button>
                        <button type="button" id="btnSubmitFake" class="bg-gradient-to-r from-green-500 to-emerald-600 text-white px-10 py-3 rounded-xl font-bold hover:from-green-600 hover:to-emerald-700 transition-all shadow-xl hidden w-full sm:w-auto text-center text-lg transform hover:-translate-y-1">
                            <i class="fa-solid fa-paper-plane mr-2"></i> Kirim Formulir
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Scripts Javascript Aplikasi -->
    <script>
        // =====================================================================
        // KONFIGURASI URL SCRIPT (WAJIB DIGANTI SEBELUM DIPAKAI)
        // =====================================================================
        const scriptURL = 'https://script.google.com/macros/s/AKfycbx1BZDvBD23ox9TlfDSHpN2gfOZnSMZOEY8CsSofx4FFCigRlcaslLaK_jTBXvS3X75lA/exec'; 
        const linkGrupWA = 'https://chat.whatsapp.com/LvBXtvDEvZZGmUVdNqE33M?s=cl&p=a&mlu=2';
        const KODE_PANITIA = '20268808'; // Kode PIN untuk masuk mode Panitia

        // Variabel Global
        let requiredElementsList = [];
        let isModePanitia = false;

        // =====================================================================
        // 1. POPULATE DROPDOWNS (Otomatis buat pilihan dropdown)
        // =====================================================================
        const optPendidikan = '<option value="">Pilih</option><option value="Tidak Sekolah">Tidak Sekolah</option><option value="SD/Sederajat">SD/Sederajat</option><option value="SMP/Sederajat">SMP/Sederajat</option><option value="SMA/SMK/Sederajat">SMA/SMK/Sederajat</option><option value="D1/D2/D3">D1/D2/D3</option><option value="S1/D4">S1/D4</option><option value="S2">S2</option><option value="S3">S3</option>';
        const optPekerjaan = '<option value="">Pilih</option><option value="Tidak Bekerja">Tidak Bekerja</option><option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option><option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option><option value="Karyawan Swasta">Karyawan Swasta</option><option value="Wiraswasta">Wiraswasta</option><option value="Petani/Peternak">Petani/Peternak</option><option value="Buruh">Buruh</option><option value="Nelayan">Nelayan</option><option value="Lainnya">Lainnya</option>';
        const optPenghasilan = '<option value="">Pilih</option><option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option><option value="Kurang dari Rp 1.000.000">Kurang dari Rp 1.000.000</option><option value="Rp 1.000.000 - Rp 2.000.000">Rp 1.000.000 - Rp 2.000.000</option><option value="Rp 2.000.000 - Rp 5.000.000">Rp 2.000.000 - Rp 5.000.000</option><option value="Lebih dari Rp 5.000.000">Lebih dari Rp 5.000.000</option>';
        const namaBulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

        document.querySelectorAll('.sel-pendidikan').forEach(el => el.innerHTML = optPendidikan);
        document.querySelectorAll('.sel-pekerjaan').forEach(el => el.innerHTML = optPekerjaan);
        document.querySelectorAll('.sel-penghasilan').forEach(el => el.innerHTML = optPenghasilan);

        let htmlTgl = '<option value="">Pilih</option>'; for(let i=1; i<=31; i++) htmlTgl += `<option value="${i}">${i}</option>`; document.getElementById('tglLahirSiswa').innerHTML = htmlTgl;
        let htmlBln = '<option value="">Pilih</option>'; namaBulan.forEach(bln => htmlBln += `<option value="${bln}">${bln}</option>`); document.getElementById('blnLahirSiswa').innerHTML = htmlBln;
        
        let thnCurrent = new Date().getFullYear();
        let htmlThnSiswa = '<option value="">Pilih</option>'; for(let i=thnCurrent-12; i>=thnCurrent-22; i--) htmlThnSiswa += `<option value="${i}">${i}</option>`; document.getElementById('thnLahirSiswa').innerHTML = htmlThnSiswa;
        let htmlThnLulus = '<option value="">Pilih</option>'; for(let i=thnCurrent; i>=thnCurrent-5; i--) htmlThnLulus += `<option value="${i}">${i}</option>`; document.getElementById('thnLulus').innerHTML = htmlThnLulus;
        let htmlThnOrtu = '<option value="">Pilih</option>'; for(let i=thnCurrent-15; i>=1950; i--) htmlThnOrtu += `<option value="${i}">${i}</option>`; 
        document.getElementById('thnLahirAyah').innerHTML = htmlThnOrtu; document.getElementById('thnLahirIbu').innerHTML = htmlThnOrtu; document.getElementById('thnLahirWali').innerHTML = htmlThnOrtu;

        // Ambil list semua element yang "required" secara default di awal loading
        window.addEventListener('DOMContentLoaded', () => {
            requiredElementsList = Array.from(document.querySelectorAll('#formPPDB [required]'));
        });


        // =====================================================================
        // 2. TEXT & NUMBER FORMATTING (Mencegah input selain angka)
        // =====================================================================
        const upperFields = ['Nama_Siswa', 'Nama_Ayah', 'Nama_Ibu', 'Nama_Wali', 'Nama_Sekolah_SD', 'Nama_Sekolah_SMP'];
        document.querySelectorAll('input[type="text"]').forEach(input => {
            if(upperFields.includes(input.name)) {
                // Huruf besar semua untuk Nama
                input.addEventListener('input', function() { this.value = this.value.toUpperCase(); });
            } else if(!input.classList.contains('only-number') && input.id !== 'keyword') {
                // Huruf besar di awal kata (Proper Case) untuk text biasa
                input.addEventListener('blur', function() { this.value = this.value.toLowerCase().replace(/\b\w/g, s => s.toUpperCase()); });
            }
        });

        // Filter validasi input khusus Angka (No HP, NIK, NISN)
        document.querySelectorAll('.only-number').forEach(input => {
            input.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, ''); // Hapus text jika diketik
            });
        });


        // =====================================================================
        // 3. PAGE NAVIGATION & MODE SWITCHING
        // =====================================================================
        function switchPage(pageId) {
            document.querySelectorAll('.page-section').forEach(el => el.classList.remove('active-page'));
            document.getElementById(pageId).classList.add('active-page');
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // FUNGSI: Mengubah mode form menjadi Wajib (Murid) atau Tidak Wajib (Panitia)
        function setRequiredState(isWajib) {
            isModePanitia = !isWajib;
            
            requiredElementsList.forEach(el => {
                if (isWajib) el.setAttribute('required', 'required');
                else el.removeAttribute('required');
            });
            
            // Sembunyikan tanda bintang merah jika Panitia
            document.querySelectorAll('.required-mark').forEach(mark => {
                mark.style.display = isWajib ? 'inline' : 'none';
            });

            // Sembunyikan box pernyataan mutlak jika mode Panitia
            document.getElementById('pernyataanBox').style.display = isWajib ? 'flex' : 'none';
        }

        function goHome() {
            document.getElementById('formPPDB').reset();
            switchPage('landingPage');
        }

        function confirmCancel() {
            Swal.fire({
                title: 'Batalkan Pengisian?', text: "Semua data yang telah diketik akan hilang.", icon: 'warning',
                showCancelButton: true, confirmButtonColor: '#d33', cancelButtonColor: '#3085d6', confirmButtonText: 'Ya, Batalkan!', cancelButtonText: 'Lanjut Mengisi'
            }).then((result) => {
                if (result.isConfirmed) goHome();
            });
        }

        // --- TOMBOL 1: DAFTAR MURID (NORMAL) ---
        function startRegisterSiswa() {
            document.getElementById('formPPDB').reset();
            setRequiredState(true); // Mode Normal: Wajib Isi
            document.getElementById('modePanitia').value = 'false';
            document.getElementById('formAction').value = 'register';
            document.getElementById('formRowIndex').value = '';
            document.getElementById('No_Pendaftaran').value = '';
            document.getElementById('formTitleText').innerText = 'Pendaftaran Mandiri Murid Baru';
            document.getElementById('infoBanner').classList.add('hidden');
            
            currentStep = 1; updateUI();
            switchPage('formPage');
        }

        // --- TOMBOL 2: DAFTAR PANITIA (DENGAN PIN) ---
        function startRegisterPanitia() {
            Swal.fire({
                title: 'Akses Panitia',
                text: 'Silahkan Masukkan Kode Akses',
                input: 'password',
                inputAttributes: { autocapitalize: 'off' },
                showCancelButton: true, confirmButtonText: 'Buka Formulir', cancelButtonText: 'Batal',
                confirmButtonColor: '#32CD32' // Purple
            }).then((result) => {
                if (result.isConfirmed) {
                    if (result.value === KODE_PANITIA) {
                        
                        document.getElementById('formPPDB').reset();
                        setRequiredState(false); // Mode Panitia: TIDAK Wajib Isi
                        document.getElementById('modePanitia').value = 'true';
                        document.getElementById('formAction').value = 'register';
                        document.getElementById('formRowIndex').value = '';
                        document.getElementById('No_Pendaftaran').value = '';
                        document.getElementById('formTitleText').innerText = 'Input Data Oleh Panitia';
                        
                        // Banner Ungu
                        const banner = document.getElementById('infoBanner');
                        banner.className = 'bg-green-100 border border-green-300 text-green-800 rounded-xl mb-8 font-semibold flex flex-col sm:flex-row items-start sm:items-center justify-between p-4 gap-3 shadow-sm';
                        document.getElementById('infoBannerIconText').innerHTML = '<i class="fa-solid fa-user-shield mr-2 text-lg"></i> PANITIA SPMB SMK AL MUJAHID';
                        document.getElementById('infoBannerBadge').classList.add('hidden');
                        
                        currentStep = 1; updateUI();
                        switchPage('formPage');
                        
                        Swal.fire({ toast: true, position: 'top-end', icon: 'success', title: 'Akses Panitia', showConfirmButton: false, timer: 3000 });
                    } else {
                        Swal.fire('Akses Ditolak', 'Kode Akses yang Anda masukkan salah!', 'error');
                    }
                }
            });
        }

        // --- TOMBOL 3: UPDATE DATA ---
        function openSearch() {
            document.getElementById('keyword').value = '';
            switchPage('searchPage');
        }

        function searchData() {
            const keyword = document.getElementById('keyword').value.trim();
            if (!keyword) { Swal.fire('Perhatian', 'Silahkan ketik NIK atau No Pendaftaran terlebih dahulu!', 'warning'); return; }

            Swal.fire({ title: 'Mencari Data...', html: 'Menghubungkan ke server database...', allowOutsideClick: false, didOpen: () => Swal.showLoading() });

            const formData = new FormData();
            formData.append('action', 'search');
            formData.append('keyword', keyword);

            fetch(scriptURL, { method: 'POST', body: formData })
            .then(res => res.json())
            .then(response => {
                if(response.result === 'success') {
                    Swal.close();
                    
                    document.getElementById('formPPDB').reset();
                    setRequiredState(true); // Edit defaultnya dikembalikan ke mode wajib isi murid
                    document.getElementById('modePanitia').value = 'false';
                    
                    // Isi form dengan data dari server
                    Object.keys(response.data).forEach(key => {
                        const el = document.getElementById('formPPDB').elements[key];
                        if(el) {
                            if(el.type === 'checkbox') el.checked = true;
                            else el.value = response.data[key];
                        }
                    });

                    document.getElementById('formAction').value = 'update';
                    document.getElementById('formRowIndex').value = response.data.row_index;
                    document.getElementById('No_Pendaftaran').value = response.data.No_Pendaftaran;
                    document.getElementById('formTitleText').innerText = 'Perbarui Data Pendaftaran';
                    
                    // Banner Kuning Update
                    const banner = document.getElementById('infoBanner');
                    banner.className = 'bg-amber-100 border border-amber-300 text-amber-800 rounded-xl mb-8 font-semibold flex flex-col sm:flex-row items-start sm:items-center justify-between p-4 gap-3 shadow-sm';
                    document.getElementById('infoBannerIconText').innerHTML = '<i class="fa-solid fa-file-pen mr-2 text-lg"></i> Anda sedang berada dalam mode Update Formulir';
                    const badge = document.getElementById('infoBannerBadge');
                    badge.classList.remove('hidden');
                    badge.className = 'bg-amber-200 border-amber-400 border px-4 py-2 rounded-lg text-sm shadow-inner text-amber-900';
                    badge.innerHTML = `No Register: <span class="font-bold tracking-wide">${response.data.No_Pendaftaran}</span>`;
                    
                    currentStep = 1; updateUI();
                    switchPage('formPage');
                } else {
                    Swal.fire('Tidak Ditemukan', 'Mohon maaf, NIK atau No Pendaftaran tidak ditemukan dalam sistem kami.', 'error');
                }
            })
            .catch(error => {
                Swal.fire('Error Server', 'Gagal memuat data. Periksa jaringan internet atau URL script Anda.', 'error');
            });
        }


        // =====================================================================
        // 4. MULTI-STEP FORM LOGIC & VALIDASI ANGKA
        // =====================================================================
        let currentStep = 1; const totalSteps = 5;
        const btnNext = document.getElementById('btnNext'); 
        const btnPrev = document.getElementById('btnPrev');
        const btnSubmitFake = document.getElementById('btnSubmitFake'); 
        const progressBar = document.getElementById('progress-bar');
        const indicators = document.querySelectorAll('.step-indicator');

        function updateUI() {
            document.querySelectorAll('.step-content').forEach(el => el.classList.remove('active'));
            document.getElementById(`step${currentStep}`).classList.add('active');

            btnPrev.style.display = currentStep > 1 ? 'block' : 'none';
            if (currentStep === totalSteps) { 
                btnNext.style.display = 'none'; 
                btnSubmitFake.style.display = 'block'; 
            } else { 
                btnNext.style.display = 'block'; 
                btnSubmitFake.style.display = 'none'; 
            }

            progressBar.style.width = ((currentStep - 1) / (totalSteps - 1)) * 100 + '%';

            indicators.forEach((ind, index) => {
                let circle = ind.querySelector('.step-circle'); let text = ind.querySelector('.step-text');
                if (index + 1 <= currentStep) {
                    circle.classList.add('bg-blue-600', 'border-blue-200', 'text-white', 'shadow-md'); 
                    circle.classList.remove('bg-white', 'border-gray-300', 'text-gray-400');
                    text.classList.add('text-blue-600'); text.classList.remove('text-gray-400');
                } else {
                    circle.classList.remove('bg-blue-600', 'border-blue-200', 'text-white', 'shadow-md'); 
                    circle.classList.add('bg-white', 'border-gray-300', 'text-gray-400');
                    text.classList.remove('text-blue-600'); text.classList.add('text-gray-400');
                }
            });
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Custom Validation Pengecekan Jumlah Digit
        function validateStep() {
            // Jika panitia, bebas lanjut tanpa validasi wajib
            if (isModePanitia) return true;

            const stepContainer = document.getElementById(`step${currentStep}`);
            let isValid = true;
            let firstErrorElement = null;

            // 1. Cek Field Mandatory (Kosong atau tidak)
            const inputs = stepContainer.querySelectorAll('[required]');
            for (let input of inputs) {
                if (!input.value.trim() || (input.type === 'checkbox' && !input.checked)) {
                    input.classList.add('border-red-500', 'ring-1', 'ring-red-500');
                    isValid = false;
                    if(!firstErrorElement) firstErrorElement = input;
                } else {
                    input.classList.remove('border-red-500', 'ring-1', 'ring-red-500');
                }
            }

            // 2. Cek Ketepatan Jumlah Digit (Hanya jika field ada isinya)
            const numInputs = stepContainer.querySelectorAll('.only-number');
            for(let input of numInputs) {
                let val = input.value.trim();
                if(val !== "") {
                    let exactLength = input.getAttribute('data-length');
                    let minLength = input.getAttribute('data-min');
                    let maxLength = input.getAttribute('data-max');

                    // Validasi NISN / NIK persis harus sekian digit
                    if(exactLength && val.length != exactLength) {
                        Swal.fire('Jumlah Angka Belum Sesuai', `Isian <b>${input.previousElementSibling.innerText.replace('*','').trim()}</b> diwajibkan harus pas <b>${exactLength} digit angka</b>.<br><br><small>Yang Anda masukkan baru ${val.length} digit.</small>`, 'warning');
                        input.classList.add('border-red-500', 'ring-1', 'ring-red-500');
                        return false; // Hentikan dan cegah lanjut step
                    }
                    
                    // Validasi No HP (Min 10, Max 13)
                    if(minLength && val.length < minLength) {
                        Swal.fire('Nomor Terlalu Pendek', `Isian <b>${input.previousElementSibling.innerText.replace('*','').trim()}</b> minimal harus <b>${minLength} digit angka</b>.<br><br><small>Yang Anda masukkan baru ${val.length} digit.</small>`, 'warning');
                        input.classList.add('border-red-500', 'ring-1', 'ring-red-500');
                        return false;
                    }
                    if(maxLength && val.length > maxLength) {
                        Swal.fire('Nomor Terlalu Panjang', `Isian <b>${input.previousElementSibling.innerText.replace('*','').trim()}</b> maksimal hanya <b>${maxLength} digit angka</b>.`, 'warning');
                        input.classList.add('border-red-500', 'ring-1', 'ring-red-500');
                        return false;
                    }
                }
            }

            // Jika ada field wajib yang kosong
            if (!isValid && firstErrorElement) {
                firstErrorElement.focus();
                Swal.fire({toast: true, position: 'top-end', icon: 'error', title: 'Mohon lengkapi data yang ditandai dengan bintang merah (*)', showConfirmButton: false, timer: 3000});
            }

            return isValid;
        }

        btnNext.addEventListener('click', () => { if (validateStep()) { currentStep++; updateUI(); } });
        btnPrev.addEventListener('click', () => { currentStep--; updateUI(); });


        // =====================================================================
        // 5. PROSES PENGIRIMAN DATA KE GOOGLE SHEET
        // =====================================================================
        
        // Buat trigger click dari button fake ke form submit asli
        btnSubmitFake.addEventListener('click', () => {
            if (validateStep()) document.getElementById('formPPDB').dispatchEvent(new Event('submit'));
        });

        document.getElementById('formPPDB').addEventListener('submit', e => {
            e.preventDefault();
            const actionType = document.getElementById('formAction').value;
            const modePan = document.getElementById('modePanitia').value;
            
            Swal.fire({ title: 'Menyimpan Data...', text: 'Mengirim formulir ke server sekolah, mohon tunggu sebentar.', allowOutsideClick: false, didOpen: () => Swal.showLoading() });

            fetch(scriptURL, { method: 'POST', body: new FormData(document.getElementById('formPPDB')) })
            .then(res => res.json())
            .then(response => {
                if(response.result === 'success') {
                    let msgTitle = actionType === 'register' ? 'Pendaftaran Sukses!' : 'Update Sukses!';
                    let noPend = response.no_pendaftaran;
                    
                    let htmlContent = `<p class="mb-4 text-gray-600">Data pendaftaran telah berhasil diverifikasi dan dicatat di database sekolah.</p>`;
                    
                    if(actionType === 'register') {
                        htmlContent += `
                        <div class="bg-blue-50 border-2 border-dashed border-blue-300 p-5 rounded-xl my-5 text-center">
                            <span class="text-blue-800 text-sm font-bold block mb-1">Nomor Pendaftaran Anda:</span>
                            <span class="text-3xl font-black text-blue-600 tracking-widest">${noPend}</span>
                            <p class="text-xs text-red-500 mt-3 font-semibold">*WAJIB: Simpan/Screenshot nomor ini untuk keperluan Update Data nantinya.</p>
                        </div>`;
                    }
                    
                    // Jika yang mengisi panitia, selesai tanpa grup WA
                    if (modePan === 'true') {
                        Swal.fire({
                            icon: 'success', title: 'Input Panitia Sukses', html: htmlContent,
                            confirmButtonColor: '#9333ea', confirmButtonText: 'Kembali ke Menu', allowOutsideClick: false
                        }).then(() => { goHome(); });
                    } else {
                        // Jika murid mandiri, arahkan gabung Grup WA
                        htmlContent += `<p class="font-bold text-green-700 mt-4 mb-2"><i class="fa-brands fa-whatsapp text-xl mr-1"></i> Jangan lupa bergabung dengan grup WhatsApp calon siswa baru!</p>`;
                        Swal.fire({
                            icon: 'success', title: msgTitle, html: htmlContent, showCancelButton: true, width: '32em',
                            confirmButtonColor: '#25D366', cancelButtonColor: '#4f46e5',
                            confirmButtonText: '<i class="fa-brands fa-whatsapp text-lg mr-1"></i> Gabung Grup WA',
                            cancelButtonText: 'Selesai & Tutup', reverseButtons: true, allowOutsideClick: false
                        }).then((result) => {
                            if (result.isConfirmed) window.open(linkGrupWA, '_blank');
                            window.location.href = 'https://spmb.smkamd.my.id';
                        });
                    }
                } else {
                    Swal.fire('Gagal Menyimpan', 'Terjadi kesalahan sistem di server Spreadsheet.', 'error');
                }
            })
            .catch(error => { Swal.fire('Error Jaringan', 'Gagal mengirim data. Pastikan koneksi internet stabil dan URL Web App Google Script sudah benar.', 'error'); });
        });

    </script>
</body>
</html>