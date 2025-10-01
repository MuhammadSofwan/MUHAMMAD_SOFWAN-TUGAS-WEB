# 📱💻 Pertanyaan Reflektif Desain Layout Instagram Clone

## 1️⃣ Mengapa memilih konfigurasi **col tertentu** untuk tiap breakpoint?
-  **Mobile (col-12 / col-4):** Supaya konten tetap terbaca jelas, elemen ditampilkan penuh atau grid lebih sederhana.  
-  **Tablet (col-md-6 / col-md-4):** Layar lebih lebar, jadi elemen bisa mulai disusun sejajar.  
-  **Desktop (col-lg-3 / col-lg-4):** Ruang besar → grid bisa menampilkan lebih banyak item per baris.  
Intinya: setiap breakpoint dipilih agar layout tetap **rapi, konsisten, dan nyaman dibaca** di berbagai perangkat.  

---

## 2️⃣ Bagaimana memastikan tombol **Follow / Edit Profile** tetap mudah dijangkau di mobile?
-  Gunakan **utility responsive classes** seperti `d-sm-none`, `d-none d-sm-block`, `w-100`.  
-  Di **mobile** → tombol diposisikan di bawah foto profil, lebar penuh (mudah ditekan jempol).  
-  Di **desktop** → tombol sejajar dengan nama/username.  
 Dengan begitu, tombol tetap **intuitif dan mudah diakses** pada semua ukuran layar.  

---

## 3️⃣ Jika postingan bertambah jadi **50**, apa potensi masalah & solusi grid?
- **Masalah**:  
  - Loading halaman jadi lambat.  
  - Scroll sangat panjang → user cepat bosan.  
  - Grid penuh sesak.  
-  **Solusi**:  
  - Grid Bootstrap tetap **wrap otomatis** sehingga layout rapi.  
  - Tambahkan `loading="lazy"` pada `<img>` untuk hemat bandwidth.  
  - Gunakan **pagination** atau **infinite scroll** agar pengalaman pengguna lebih nyaman.  

---
