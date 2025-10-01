# 📌 Pertanyaan Reflektif Tailwind Instagram Clone

## 1️ Jelaskan keputusan **grid-cols/gap** di tiap breakpoint — kenapa begitu?
-  **Mobile (grid-cols-1)** → feed 1 kolom agar gambar memenuhi lebar layar dan mudah di-scroll.  
-  **Tablet (sm:grid-cols-2)** → layar lebih lebar, ditampilkan 2 kolom supaya efisien.  
-  **Medium (md:grid-cols-3)** → laptop/layar sedang, tampilkan 3 foto per baris agar mirip layout Instagram asli.  
-  **Desktop (lg:grid-cols-4)** → layar besar, gunakan 4 kolom untuk memaksimalkan ruang.  
-  **gap-2** → memberi jarak antar gambar supaya tidak menempel, menjaga kerapian & keterbacaan visual.  

---

## 2️ Bagaimana memanfaatkan **utility responsive Tailwind** untuk memecahkan masalah layout di mobile?
-  **Tombol Follow/Edit** → ukurannya berbeda per device (`px-3 py-1` di mobile → `md:px-5 md:py-2` di desktop) → tetap nyaman ditekan.  
-  **Flex direction** → `flex-col md:flex-row` → di mobile elemen menumpuk ke bawah, di desktop jadi horizontal agar efisien.  
-  **Text size** → `text-sm md:text-base` → teks tetap terbaca jelas sesuai ukuran device.  
 Dengan prefix responsif (`sm:`, `md:`, `lg:`), setiap elemen bisa otomatis menyesuaikan **tanpa bikin CSS tambahan**.  

---

## 3 Jelaskan trade-off antara memakai **utility classes** vs membuat **component CSS tersendiri**.
### 🛠 Utility Classes (Tailwind)
-  Cepat, styling langsung di HTML.  
-  Konsisten, mudah diatur per breakpoint.  
-  HTML bisa jadi ramai (class menumpuk).  

###  Custom Component CSS
-  HTML lebih bersih (cukup pakai 1 class).  
-  Bisa dipakai ulang di banyak tempat.  
-  Perlu maintain file CSS terpisah.  
-  Styling responsif lebih ribet dibanding Tailwind utilities.  

 **Trade-off**:  
- 🔹 Proyek kecil/medium → **utility classes lebih praktis & cepat**.  
- 🔹 Proyek besar dengan banyak elemen berulang → **component CSS lebih scalable & mudah dikelola**.  

---
