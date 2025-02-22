
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelajari Lebih Lanjut</title>
    
</head>
<body>

    <h2>Pelajari Lebih Lanjut</h2>
    <img src="images/mendali.jpg " class="btn-lebih-lanjut"
   style="width: 900px; height: 500px;" /></img>

    <button onclick="loadFile()">Langkah Kecil, Wawasan Besar
Dunia penuh dengan ilmu yang menunggu untuk ditemukan. Di halaman ini,
<p> kami mengajak Anda untuk mendalami lebih jauh tentang [topik lomba],
</p> melihatnya dari perspektif baru, dan menemukan jawaban atas pertanyaan-pertanyaan yang mungkin belum terpikirkan sebelumnya.

<p>Mengapa penting untuk belajar lebih lanjut?</p>
<h2>✅ Menambah wawasan dan pemahaman baru</h2>
<h2>✅ Menghubungkan teori dengan realitas</h2>
<h2>✅ Menginspirasi langkah-langkah perubahan</h2>

<p>Mari terus menggali, karena setiap jawaban akan membuka pintu ke pertanyaan baru yang lebih besar!</p>
<p>Temukan Peluang dan Tantangan dalam Lomba Ini!</p>

<p>Mengikuti lomba bukan sekadar ajang untuk bersaing, tetapi juga kesempatan untuk belajar dan berkembang. Setiap tantangan yang dihadapi akan mengasah kreativitas, keterampilan, dan ketahanan mental. Lomba ini dirancang bagi mereka yang ingin menguji kemampuan serta membuktikan bahwa mereka mampu bersinar di bidangnya masing-masing.</p>

<p>Dengan berbagai kategori yang tersedia, peserta dapat memilih kompetisi yang sesuai dengan minat dan bakat mereka. Selain hadiah menarik, setiap peserta juga akan mendapatkan pengalaman berharga yang dapat menjadi bekal di masa depan. Jangan lewatkan kesempatan emas ini untuk mengembangkan diri dan menjadi bagian dari komunitas yang penuh dengan semangat kompetitif dan inovasi.</p>


</button>
    <div id="content" style="border: 1px solid #ccc; padding: 10px; margin-top: 10px;"></div>
  
    <script>
        function loadFile() {
            fetch('pelajari-lebih-lanjut.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('content').innerHTML = data;
            })
            .catch(error => console.log('Gagal memuat file:', error));
        }
    </script>

</body>
</html>