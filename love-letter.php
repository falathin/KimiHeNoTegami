<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><text x='0' y='24' font-size='24'>💌</text></svg>" type="image/svg+xml">
    <title>ムティアラ・ペルウィタサリへのラブレター</title>
    <script src="https://cdn.jsdelivr.net/npm/@heroicons/react@1.0.6/outline/index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
 /* Animasi Berputar untuk Ikon Melodi */
        .animate-spin-slow {
            animation: spin 3s linear infinite;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        /* Animasi Mengambang untuk Sakura */
        .animate-float {
            animation: float 5s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        .fade-in {
            opacity: 0;
            animation: fadeIn 3s forwards;
        }

        .fade-in-btn {
            opacity: 0;
            animation: fadeIn 100s forwards;
        }

        .fade-in:nth-child(1) {
            animation-delay: 1s;
        }

        .fade-in:nth-child(2) {
            animation-delay: 3s;
        }

        .fade-in:nth-child(3) {
            animation-delay: 5s;
        }

        .fade-in:nth-child(4) {
            animation-delay: 7s;
        }

        .fade-in:nth-child(5) {
            animation-delay: 8s;
        }

        .fade-in:nth-child(6) {
            animation-delay: 10s;
        }

        .fade-in:nth-child(7) {
            animation-delay: 12s;
        }

        .fade-in:nth-child(8) {
            animation-delay: 14s;
        }

        .fade-in:nth-child(9) {
            animation-delay: 16s;
        }

        .fade-in:nth-child(10) {
            animation-delay: 18s;
        }

        .slide-in {
            transform: translateX(-10px);
            opacity: 0;
            animation: slideIn 12s forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
    .animate-float {
        animation: float 4s infinite ease-in-out alternate;
    }
    @keyframes float {
        0% {
            transform: translateY(0) rotate(0);
        }
        100% {
            transform: translateY(20px) rotate(10deg);
        }
    }
    </style>    

</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="relative w-full max-w-md p-6 bg-white shadow-lg rounded-lg letter">
        <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-400 via-pink-400 to-purple-400 rounded-t-lg"></div>

        <div class="flex flex-col sm:flex-row justify-between items-center space-y-4 sm:space-y-0 sm:space-x-4 p-4 bg-gray-50 rounded-lg shadow-md">
            <label for="language" class="text-lg font-semibold text-gray-700 flex items-center space-x-2">
                <span>Pilih Bahasa:</span>
                <span class="text-gray-500">(Choose Language)</span>
            </label>
            <select id="language" class="w-full sm:w-auto p-2 bg-white border-2 border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 text-sm hover:border-blue-400 transition-all duration-200 ease-in-out" onchange="if(this.value == 'id') window.location.reload();">
                <option value="su" class="flex items-center space-x-2 hover:bg-blue-50 transition-all duration-200">
                    <span class="text-lg">🇮🇩</span><span class="font-medium">Sunda</span>
                </option>
                <option value="en" class="flex items-center space-x-2 hover:bg-blue-50 transition-all duration-200">
                    <span class="text-lg">🇬🇧</span><span class="font-medium">English</span>
                </option>
                <option value="jp" class="flex items-center space-x-2 hover:bg-blue-50 transition-all duration-200">
                    <span class="text-lg">🇯🇵</span><span class="font-medium">日本語 (Japanese)</span>
                </option>
                <option value="ko" class="flex items-center space-x-2 hover:bg-blue-50 transition-all duration-200">
                    <span class="text-lg">🇰🇷</span><span class="font-medium">한국어 (Korean)</span>
                </option>
                <option value="id" class="flex items-center space-x-2 hover:bg-blue-50 transition-all duration-200" selected>
                    <span class="text-lg">🇮🇩</span><span class="font-medium">Indonesian (Default)</span>
                </option>
            </select>
        </div>              

        <h1 id="title" class="text-2xl font-bold text-center text-gray-800 mt-4 fade-in">
            <span class="inline-block mr-2"><i class="text-red-500 fas fa-heart"></i></span> 
            Untukmu, Mutiara Perwitasari
        </h1>
        <p id="greeting" class="mt-4 text-gray-600 fade-in">
            <span class="inline-block mr-2"><i class="fas fa-envelope"></i></span>
            Hei, Muti-San! Gimana kabarnya? Semoga hari-harimu selalu menyenangkan dan penuh kebahagiaan, bukan stres ya wkwkwk!
        </p>

        <p id="content" class="mt-2 text-gray-600 fade-in">
            <span class="inline-block mr-2"><i class="fas fa-comment-dots"></i></span>
            Aku cuma pengen ngobrol sedikit, ya. Jadi, setelah kamu bilang kalau kamu masih nganggep aku temen, aku jadi mikir, deh. Kan kita udah pacaran, ya? Atau mungkin aku yang terlalu mikir, jadi aku bingung. 
        </p>

        <p id="content-2" class="mt-2 text-gray-600 fade-in">
            <span class="inline-block mr-2"><i class="fas fa-heart"></i></span>
            Tapi jangan salah paham, aku nggak marah sama sekali! Aku cuma pengen tahu, sebenarnya kamu merasa gimana. Aku sayang banget sama kamu dan pengen hubungan ini jadi sesuatu yang berarti buat kita berdua. Aku siap kok kalau kamu butuh waktu atau ruang, aku nggak akan buru-buru.
        </p>

        <p id="content-3" class="mt-2 text-gray-600 fade-in">
            <span class="inline-block mr-2"><i class="fas fa-question-circle"></i></span>
            Denger jawaban kamu, aku sih udah puas. Tapi ya tetep aja, aku tetap cinta kamu, gapapa jijik, kamu anggap aja aku temen aja aku udah seneng kok.
        </p>        

        <!-- New Paragraphs Added -->
        <p id="content-4" class="mt-2 text-gray-600 fade-in">
            <span class="inline-block mr-2"><i class="fas fa-thumbs-up"></i></span>
            Terima kasih udah nerima aku apa adanya. Aku cuma pengen jadi yang terbaik buat kamu, biar kita bisa saling mendukung dan pengertian.
        </p>

        <p id="content-5" class="mt-2 text-gray-600 fade-in">
            <span class="inline-block mr-2"><i class="fas fa-sad-tear"></i></span>
            Aku sadar mungkin aku pernah bikin kamu capek atau nggak nyaman, dan aku minta maaf kalau itu terjadi. Aku nggak berharap kamu selalu ngerti perasaanku, yang penting hubungan kita tetap terikat.
        </p>

        <p id="closing" class="mt-4 text-right text-gray-800 slide-in">
            <span class="inline-block mr-2"><i class="fas fa-laugh"></i></span>
            Terima kasih untuk segala perhatian dan masa seru yang kamu beri. Aku jadi kangen masa-masa kita bareng<br><br><strong>- Falathin</strong>
        </p>

        <div class="mt-6 text-center fade-in-btn">
            <button id="buttonText" class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition-all duration-200 ease-in-out">
                Sebenarnya aku lagi galau in kamu
            </button>
        </div>

        <p class="mt-4 text-center text-gray-500 text-sm">
            <span class="text-gray-400">Designed with <i class="text-red-500 fas fa-heart"></i> by</span>
            <a href="https://www.linkedin.com/in/ibrahim-ahmad-falathin-b57243334/" target="_blank" class="text-blue-500 font-semibold hover:text-blue-700 transition duration-300 ease-in-out transform hover:scale-105 hover:underline flex items-center justify-center space-x-2">
                <span>Connect me on</span>
                <span class="text-blue-600">LinkedIn</span>
                <i class="fab fa-linkedin-in text-blue-600"></i>
            </a>
        </p>        
        <br><hr><br>
        <div class="absolute bottom-0 left-0 w-full h-2 bg-gradient-to-r from-blue-400 via-pink-400 to-purple-400 rounded-b-lg"></div>
        <!-- Contact Form -->
        <div class="mt-6 text-center transition-all duration-200 ease-in-out">
            <h2 class="text-xl font-semibold text-gray-800 mb-4" id="contact-title">Ada yang ingin kamu sampaikan dari hati? Kirimkan Pesan Cinta!</h2>
            <form id="contact-form" method="POST">
                <!-- Input untuk Nama Pengirim -->
                <div class="relative mb-4">
                    <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    <input type="text" name="name" id="sendername" 
                        value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" 
                        placeholder="Siapa Namamu?" 
                        class="w-full max-w-md p-4 pl-12 bg-gray-50 border-2 border-gray-300 rounded-lg shadow-sm text-sm focus:ring-2 focus:ring-blue-500" 
                        required>
                </div>

                <!-- Input untuk Pesan -->
                <div class="relative mb-4">
                    <i class="fas fa-comment-alt absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    <textarea name="message" rows="4" 
                            class="w-full max-w-md p-4 pl-12 bg-gray-50 border-2 border-gray-300 rounded-lg shadow-sm text-sm focus:ring-2 focus:ring-blue-500" 
                            placeholder="Apa yang ada di hatimu? (Tuliskan apa saja yang ingin kamu ungkapkan)" 
                            required><?= isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                </div>

                <!-- Tombol Kirim Pesan -->
                <button type="submit" class="mt-4 px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition-all duration-200 ease-in-out" id="contact-button">
                    <i class="fas fa-heart mr-2"></i> Kirimkan Pesan Cinta
                </button>
            </form>
            <p class="mt-4 text-gray-600" id="contact-note">Tulis apa saja yang ingin kamu sampaikan, biar hati kita lebih dekat!</p>
        </div>
    <br>
    <hr>
    <br>
    <footer>
    <div class="rounded-lg p-2 shadow-sm flex items-center space-x-3 max-w-sm mx-auto mt-8 mb-4 border-t border-blue-400 hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105 relative bg-cover bg-center group" 
        style="background-image: url('https://i.ytimg.com/vi/DR43SQx8Ybc/maxresdefault.jpg');">
        <div class="absolute inset-0 bg-blue-900 bg-opacity-30 rounded-lg group-hover:bg-opacity-40 transition duration-300"></div>
        <div class="relative z-10 flex items-center w-full space-x-3">
            <div class="w-10 h-10 bg-blue-300 rounded-md flex items-center justify-center relative overflow-hidden group-hover:bg-gradient-to-br group-hover:from-blue-500 group-hover:to-purple-500 transition duration-300">
                <div class="absolute inset-0 bg-blue-300 blur-md group-hover:opacity-50 transition duration-300"></div>
                <i class="fas fa-umbrella text-white text-xl relative z-10 group-hover:scale-110 transition-transform duration-300"></i>
            </div>
            <div class="flex-1">
                <p class="text-white font-medium text-sm group-hover:text-blue-200 transition duration-300">
                    <marquee behavior="scroll" direction="left" scrollamount="6">Oh! Asmara (Instrumental) ~ ♫</marquee>
                </p>
                <p class="text-white text-xs group-hover:text-blue-100 transition duration-300">
                    <marquee behavior="scroll" direction="left" scrollamount="6">☂ Kobo Kanaeru ☂</marquee>
                </p>
            </div>
        <button id="playButton" class="bg-transparent text-white rounded-md w-8 h-8 flex items-center justify-center border-2 border-white transition-transform duration-300 ease-in-out hover:scale-125 hover:bg-blue-400 hover:text-blue-200">
            <i class="fas fa-music text-white animate-spin-slow"></i> <!-- Ikon Melodi -->
        </button>
        </div>
        <div class="absolute inset-0 overflow-hidden opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
            <svg class="absolute w-8 h-8 text-pink-300 animate-float top-5 left-14 hover:text-pink-400 transition duration-300 ease-in-out" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M12 2c1.1 0 2 .9 2 2v4h4c1.1 0 2 .9 2 2s-.9 2-2 2h-4v4c0 1.1-.9 2-2 2s-2-.9-2-2v-4H6c-1.1 0-2-.9-2-2s.9-2 2-2h4V4c0-1.1.9-2 2-2zm0 12c.83 0 1.5-.67 1.5-1.5S12.83 11 12 11s-1.5.67-1.5 1.5S11.17 14 12 14z"/>
            </svg>
            <svg class="absolute w-10 h-10 text-pink-400 animate-float top-3 right-12 hover:text-pink-500 transition duration-300 ease-in-out transform hover:rotate-12" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M12 2c1.1 0 2 .9 2 2v4h4c1.1 0 2 .9 2 2s-.9 2-2 2h-4v4c0 1.1-.9 2-2 2s-2-.9-2-2v-4H6c-1.1 0-2-.9-2-2s.9-2 2-2h4V4c0-1.1.9-2 2-2zm0 12c.83 0 1.5-.67 1.5-1.5S12.83 11 12 11s-1.5.67-1.5 1.5S11.17 14 12 14z"/>
            </svg>
            <svg class="absolute w-6 h-6 text-pink-200 animate-float top-3 left-10 hover:text-pink-300 transition duration-300 ease-in-out transform hover:scale-110" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M12 2c1.1 0 2 .9 2 2v4h4c1.1 0 2 .9 2 2s-.9 2-2 2h-4v4c0 1.1-.9 2-2 2s-2-.9-2-2v-4H6c-1.1 0-2-.9-2-2s.9-2 2-2h4V4c0-1.1.9-2 2-2zm0 12c.83 0 1.5-.67 1.5-1.5S12.83 11 12 11s-1.5.67-1.5 1.5S11.17 14 12 14z"/>
            </svg>
            <svg class="absolute w-7 h-7 text-pink-300 opacity-80 animate-float top-2 right-8 hover:text-pink-400 transition duration-300 ease-in-out transform hover:scale-125" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M12 2c1.1 0 2 .9 2 2v4h4c1.1 0 2 .9 2 2s-.9 2-2 2h-4v4c0 1.1-.9 2-2 2s-2-.9-2-2v-4H6c-1.1 0-2-.9-2-2s.9-2 2-2h4V4c0-1.1.9-2 2-2zm0 12c.83 0 1.5-.67 1.5-1.5S12.83 11 12 11s-1.5.67-1.5 1.5S11.17 14 12 14z"/>
            </svg>
        </div>
    </div>
    </footer>

    <audio id="audioPlayer" autoplay loop>
        <source src="Oh! Asmara （Instrumental）.mp4" type="audio/mp4">
    </audio>

    <!-- Mute/Unmute Button -->
    <button id="muteButton" 
        class="bg-blue-500 text-white px-6 py-2 rounded-full shadow-lg hover:bg-blue-600 transition focus:outline-none">
        🔈 Mute
    </button>
    <br><br>

    <p class="text-gray-500">Maybe your browser doesn't support mute audio (╥﹏╥)</p>

    <script>
        const audioPlayer = document.getElementById('audioPlayer');
        const muteButton = document.getElementById('muteButton');

        // Toggle mute/unmute
        muteButton.addEventListener('click', () => {
            if (audioPlayer.muted) {
                audioPlayer.muted = false;
                muteButton.textContent = '🔈 Mute';
            } else {
                audioPlayer.muted = true;
                muteButton.textContent = '🔇 Unmute';
            }
        });
    </script>

    <br>

    <footer>
        <p class="mt-4 text-center text-gray-500 text-sm">
            <span class="text-gray-400">Designed with <i class="text-red-500 fas fa-heart"></i> by</span>
            <a href="https://www.instagram.com/p/DCJp7uuTbJg/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" class="text-blue-500 font-semibold hover:text-blue-700 transition duration-300 ease-in-out transform hover:scale-105 hover:underline flex items-center justify-center space-x-2">
                <span>Follow me on</span>
                <span class="text-blue-600">Instagram</span>
                <i class="fab fa-instagram text-blue-600"></i>
            </a>
            <span class="text-gray-400"> and like our internship post!</span>
        </p>
    </footer>

        <!-- Modal Pop-Up dengan Tema Hujan -->
        <div id="modal" class="fixed inset-0 bg-blue-900 bg-opacity-70 flex justify-center items-center hidden">
            <div id="modalContent" class="bg-white p-4 sm:p-6 rounded-lg shadow-xl max-w-lg w-full transform transition-all duration-300 ease-in-out relative overflow-hidden cursor-grab">
                <!-- Efek Hujan -->
                <div class="absolute inset-0 bg-[url('https://i.pinimg.com/736x/9e/59/45/9e59459cb08bb77da287584102ef9e4a.jpg')] opacity-30 pointer-events-none"></div>

                <!-- Tombol Tutup -->
                <button id="closeModal" class="absolute top-2 right-2 text-blue-400 hover:text-blue-600 text-xl sm:text-2xl transition transform duration-200 hover:scale-125 z-10">
                    <i class="fas fa-times-circle"></i>
                </button>

                <!-- Header Modal -->
                <h2 class="text-blue-600 font-bold text-lg sm:text-2xl mb-4 flex items-center z-10">
                    <i class="fas fa-cloud-rain text-blue-400 text-2xl sm:text-3xl mr-2"></i> Lirik Lagu "Oh! Asmara~☂"
                </h2>

                <!-- Konten Lirik -->
                <div class="bg-blue-50 p-4 rounded-lg shadow-inner relative z-10 overflow-y-auto max-h-[70vh] sm:max-h-[75vh]">
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                        Dag-dig-dug hatiku<br>
                        Saat aromamu lewati hidungku<br>
                        Melotot mataku<br>
                        Melihatmu lewat di depanku<br>
                        Seorang biasa saja<br>
                        Apa pantas 'tuk bersanding denganmu? (Denganmu)<br>
                        Overthinking, tapi gak mau ambil pusing<br>
                        Karena aku bukan kaum mendang-mending<br>
                        Oh, asmara berdebar rasanya ku di dekatmu<br>
                        Oh, asmara dengar bisikan cinta, lirih matamu<br>
                        Hantam jantungku (oh, oh, asmara)
                    </p>
                    <p class="text-gray-600 mt-2 text-sm sm:text-base leading-relaxed">
                        Hari ke sekian<br>
                        Masih tak berhasil mendekatimu<br>
                        Ugh, bagaimana melelehkan beku hatimu?<br>
                        Ugh!<br>
                        "Mending nyerah, dah?" Oh, tentu tidak (tidak)<br>
                        Demi gapai impian, kita harus terus belajar<br>
                        Belajar memahami bahasa cintamu<br>
                        Ehe!<br>
                        Oh, asmara berdebar rasanya (rasanya) ku di dekatmu (di dekatmu)<br>
                        Oh, asmara dengar bisikan cinta, lirih matamu, hu-uh-uuh<br>
                        Oh, asmara balas sinyal cinta ku, sekali saja<br>
                        Oh, asmara tidak adakah ruang dalam hatimu, hu-uh-uuh<br>
                        Tersisa untukku?
                    </p>
                    <p class="text-gray-600 mt-2 text-sm sm:text-base leading-relaxed">
                        Sore itu<br>
                        Tumben-tumbenan kau duluan<br>
                        Yang datang menghampiriku (oh, asmara datanglah padaku)<br>
                    </p>
                    <p class="text-gray-600 mt-2 text-sm sm:text-base leading-relaxed">
                        Oh, asmara berdebar rasanya ku di dekatmu<br>
                        Oh, asmara dengar bisikan cinta, lirih matamu, hu-uh-uuh, hoo<br>
                    </p>
                    <p class="text-gray-600 mt-2 text-sm sm:text-base leading-relaxed">
                        Oh, asmara berdebar rasanya (rasanya) ku di dekatmu<br>
                        Oh, asmara dengar bisikan cinta, lirih matamu, hu-uh-uuh<br>
                        Oh, asmara (berdebar rasanya), di-ba-ri-ba-ri-di, da-ra-da (ku di dekatmu)<br>
                        Oh, asmara terjawab semua sudah teka-tekimu, hmm-mm (teka-tekimu)<br>
                        Karena kini ku telah menjadi<br>
                    </p>
                    <p class="text-gray-600 mt-2 text-sm sm:text-base leading-relaxed">
                        Milikmu (milikmu, milikmu, milikmu, milikmu)<br>
                        Milikmu<br>
                        Milikmu<br>
                    </p>
                </div>

                <div class="text-center mt-4 sm:mt-6 relative z-10">
                    <button id="lovecloseModal" class="flex items-center justify-center w-10 h-10 bg-red-500 text-white rounded-full shadow-lg hover:bg-red-600 transition-all duration-200">
                        <i class="fas fa-heart text-lg"></i>
                    </button>
                </div>

                <script>
                    // Tombol lovecloseModal
                    const lovecloseModal = document.getElementById('lovecloseModal');

                    // Fungsi menampilkan alert cantik
                    lovecloseModal.addEventListener('click', function () {
                        Swal.fire({
                            title: '好き好き好き!!',
                            text: 'とても大好きでたまらない!!',
                            icon: 'success', // Ikon berupa centang
                            confirmButtonText: 'わかりました!',
                            confirmButtonColor: '#f43f5e',
                            backdrop: `rgba(0, 0, 0, 0.6)`,
                        });
                    });
                </script>

            </div>
        </div>

        <script>
            const playButton = document.getElementById('playButton');
            const modal = document.getElementById('modal');
            const closeModal = document.getElementById('closeModal');

            playButton.addEventListener('click', function () {
                modal.classList.remove('hidden');
            });

            closeModal.addEventListener('click', function () {
                modal.classList.add('hidden');
            });

            window.addEventListener('click', function(event) {
                if (event.target === modal) {
                    modal.classList.add('hidden');
                }
            });
        </script>

    </div>     
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Language switch functionality
        document.getElementById('language').addEventListener('change', function() {
            const lang = this.value;

            const contactTitle = document.getElementById('contact-title');
            const contactButton = document.getElementById('contact-button');
            const contactNote = document.getElementById('contact-note');
            const textarea = document.querySelector('textarea[name="message"]');
            const inputName = document.querySelector('input[name="name"]');

            if (lang === 'su') {
                contactTitle.innerHTML = 'Naha anjeun gaduh curahan hate? Kirimkeun pesen pinuh ku asih!';
                contactButton.innerHTML = '<i class="fas fa-heart mr-2"></i>Kirim Pesen Asih';
                contactNote.innerHTML = 'Tulis naon waé anu hoyong anjeun ungkabkeun, supaya hate urang tiasa langkung deukeut!';
                textarea.placeholder = 'Nanya, Curhat, Atanapi Sampaikan? (Gratis, ti hate!)';
                inputName.placeholder = 'Saha nami asih anjeun?';
            } else if (lang === 'en') {
                contactTitle.innerHTML = 'Got Something to Share? Send Your Love!';
                contactButton.innerHTML = '<i class="fas fa-heart mr-2"></i>Send Love Message';
                contactNote.innerHTML = 'Type what’s in your heart, let’s get closer!';
                textarea.placeholder = 'Ask, Pour Your Heart Out, Share Your Thoughts? (From the Heart)';
                inputName.placeholder = 'What’s Your Name, My Love?';
            } else if (lang === 'jp') {
                contactTitle.innerHTML = '伝えたいことがありますか？愛のメッセージを送ってください！';
                contactButton.innerHTML = '<i class="fas fa-heart mr-2"></i>愛のメッセージを送信';
                contactNote.innerHTML = 'あなたの心からの言葉を書いてください、もっと近くなりましょう！';
                textarea.placeholder = '質問、伝えたいこと、心の中の思いはありますか？（心を込めて）';
                inputName.placeholder = 'あなたの名前は何ですか？愛する人？';
            } else if (lang === 'ko') {
                contactTitle.innerHTML = '공유하고 싶은 것이 있나요? 사랑의 메시지를 보내세요!';
                contactButton.innerHTML = '<i class="fas fa-heart mr-2"></i>사랑의 메시지 보내기';
                contactNote.innerHTML = '마음속에 있는 말을 적어주세요, 더 가까워져요!';
                textarea.placeholder = '질문, 마음 털어놓기, 또는 생각 나누기? (진심으로)';
                inputName.placeholder = '당신의 이름은 무엇인가요? 사랑하는 사람?';
            }
        });
    </script>
    <script>
        document.getElementById('language').addEventListener('change', function() {
            const lang = this.value;

            const title = document.getElementById('title');
            const greeting = document.getElementById('greeting');
            const content = document.getElementById('content');
            const content2 = document.getElementById('content-2');
            const content3 = document.getElementById('content-3');
            const content4 = document.getElementById('content-4');
            const content5 = document.getElementById('content-5');
            const closing = document.getElementById('closing');

            if (lang === 'su') {
                title.innerHTML = '<i class="fas fa-heart text-red-500"></i> Pikeun Anjeun, Mutiara Perwitasari, Anu Pangsaena Dina Jagat Raya!';
                greeting.innerHTML = '<i class="fas fa-envelope"></i> Euy, Muti-San! Kumaha kabarna? Abdi rindu pisan ka anjeun, dupi anjeun teu bingung?';
                content.innerHTML = '<i class="fas fa-comment-dots"></i> Aya hal anu teu bisa abdi simpen deui! Naha anjeun sadar kumaha perasaan abdi? Urang geus babarengan, tapi nalika anjeun nyarios yén anjeun masih nganggep abdi rerencangan, abdi jadi teu bisa ngaduga naon anu kudu dipilampah!';
                content2.innerHTML = '<i class="fas fa-heart"></i> Nanging, ulah hariwang, abdi teu ambek! Abdi ngan hayang terang, kumaha haté anjeun sabenerna? Abdi bener-bener nyaah pisan ka anjeun, jeung abdi miharep hubungan urang tiasa langkung bermakna tina sakadar status, anu salawasna!';
                content3.innerHTML = '<i class="fas fa-question-circle"></i> Tapi, jujur, abdi butuh pisan kajelasan. Mun urang terus-terusan saling ragu, ieu mah teu asik pisan! Hayu, urang ngobrol sacara jujur, supaya hubungan urang jadi leuwih kuat, luar biasa, sareng pangalusna!';
                content4.innerHTML = '<i class="fas fa-thumbs-up"></i> Hatur nuhun pikeun nampi abdi dina sagala kaayaan, abdi bakal tetep janten anu pangsaéna pikeun anjeun.';
                content5.innerHTML = '<i class="fas fa-sad-tear"></i> Abdi terang anjeun capé, tapi abdi ogé capé ngan nepi ka anjeun angkat tanpa kabar!';
                closing.innerHTML = '<i class="fas fa-laugh"></i> Ngirimkeun sagala asih, asih, asih! Falathin, anu moal bisa mundur tina cinta ieu!';
            } else if (lang === 'en') {
                title.innerHTML = '<i class="fas fa-heart text-red-500"></i> To You, Mutiara Perwitasari, The Best Thing That Ever Happened to Me!';
                greeting.innerHTML = '<i class="fas fa-envelope"></i> Hey, Muti-San! How’s everything? I miss you so much, are you as confused as I am?';
                content.innerHTML = '<i class="fas fa-comment-dots"></i> There’s something I’ve been meaning to talk to you about, it’s been on my mind for a while! Do you even realize how much I care about you?';
                content2.innerHTML = '<i class="fas fa-heart"></i> But don’t worry, I’m not mad! I just wanna know what’s really going on in your heart. I care so much about you, and I want our relationship to be more than just a label!';
                content3.innerHTML = '<i class="fas fa-question-circle"></i> Honestly, I just need some clarity here! If we keep doubting each other, nothing’s gonna work! Let’s talk openly, so we can make this relationship stronger and better!';
                content4.innerHTML = '<i class="fas fa-thumbs-up"></i> Thanks for accepting me for who I am, I’ll always do my best for you!';
                content5.innerHTML = '<i class="fas fa-sad-tear"></i> I know you’re tired, but I’m also drained just thinking about you being so far away!';
                closing.innerHTML = '<i class="fas fa-laugh"></i> Naturally you all my love, love, love! Falathin, who can never stop loving you!';
            } else if (lang === 'jp') {
                title.innerHTML = '<i class="fas fa-heart text-red-500"></i> 君への手紙に、ムティアラ・ペルウィタサリ、私の全て！<i class="fas fa-heart text-red-500"></i>';
                greeting.innerHTML = '<i class="fas fa-envelope"></i> こんにちは、ムティさん！お元気ですか？あなたがいないと心が引き裂かれるほど寂しいよ！あなたのことを想うたびに胸がいっぱいになる！';
                content.innerHTML = '<i class="fas fa-comment-dots"></i> ずっと伝えたかったことがあるんだ！あなたに会うたびに心が溶けそうで、どうしても伝えなきゃならない！あなたが「友達」と言ったとき、私は心が破裂しそうだった！';
                content2.innerHTML = '<i class="fas fa-heart-broken"></i> でも心配しないで、私は怒ってないよ！ただ、あなたが私をどう思っているのか知りたくてたまらないんだ！あなたを愛してやまないから、心の中であなたが全てなんだ！';
                content3.innerHTML = '<i class="fas fa-question-circle"></i> でも正直に言うと、私はどうしてもはっきりさせたい！お互いに迷っている時間が無駄に感じて、私はもう耐えられない！心を開いて、私たちの関係を永遠に強くするために話し合おう！';
                content4.innerHTML = '<i class="fas fa-hands-clapping"></i> あなたが私をそのまま受け入れてくれるその愛、私は一生守るよ！あなたのために何もかも捧げる覚悟があるんだ、私たちの愛をもっと深く大きく育てたい！';
                content5.innerHTML = '<i class="fas fa-sad-tear"></i> あなたが疲れているのはわかっているよ、でも私もあなたがいないと心が引き裂かれるほど寂しい！お願い、あなたを感じていたい、毎分、毎秒あなたと一緒にいたい！';
                closing.innerHTML = '<i class="fas fa-laugh-wink"></i> 愛を込めて、愛、愛！<i class="fas fa-heart text-red-500"></i> ファラティン、あなたを永遠に愛し続ける！<i class="fas fa-heart text-red-500"></i>';
            } else if (lang === 'ko') {
                title.innerHTML = '<i class="fas fa-heart text-red-500"></i> 당신에게, 무티아라 페르위타사리, 나의 모든 것!';
                greeting.innerHTML = '<i class="fas fa-envelope"></i> 안녕하세요, 무티님! 어떻게 지내세요? 저는 당신이 너무 보고 싶어요, 저처럼 혼란스러우신가요?';
                content.innerHTML = '<i class="fas fa-comment-dots"></i> 오랫동안 말하고 싶었던 게 있어요! 당신은 제가 얼마나 당신을 생각하고 있는지 아시나요?';
                content2.innerHTML = '<i class="fas fa-heart"></i> 걱정 마세요, 화가 난 게 아니에요! 저는 단지 당신의 마음이 진짜로 어떤지 알고 싶어요. 저는 당신을 정말 소중히 생각하고 있고, 우리의 관계가 단순한 명칭 이상이었으면 좋겠어요!';
                content3.innerHTML = '<i class="fas fa-question-circle"></i> 솔직히 말해서, 저는 명확한 답변이 필요해요! 우리가 계속 서로를 의심한다면, 아무것도 제대로 되지 않을 거예요! 우리 솔직하게 이야기해봐요, 우리의 관계를 더 강하고 훌륭하게 만들기 위해!';
                content4.innerHTML = '<i class="fas fa-thumbs-up"></i> 저를 있는 그대로 받아주셔서 감사합니다. 저는 항상 당신을 위해 최선을 다할게요!';
                content5.innerHTML = '<i class="fas fa-sad-tear"></i> 당신도 지친 걸 알고 있어요, 하지만 당신이 멀리 떠나 있는 것만 생각해도 너무 힘들어요!';
                closing.innerHTML = '<i class="fas fa-laugh"></i> 모든 사랑을 담아, 사랑, 사랑! 당신을 절대 그만 사랑할 수 없는 팔라틴!';
            }

            updateButtonText(lang);
        });

        function updateButtonText(lang) {
            const buttonText = document.getElementById('buttonText');

            if (lang === 'su') {
                buttonText.innerHTML = "Sakumaha anu ku abdi rasakeun, memang kuring deui galau ka anjeun";
            } else if (lang === 'en') {
                buttonText.innerHTML = "Actually, I’m always thinking about you";
            } else if (lang === 'jp') {
                buttonText.innerHTML = "実は、あなたについて迷っています";
            }
        }


    </script>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$statusMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'], $_POST['message'])) {
        $name = htmlspecialchars($_POST['name']);
        $message = htmlspecialchars($_POST['message']);

        // Send email using PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';  // Set the SMTP server to Gmail
            $mail->SMTPAuth = true;
            $mail->Username = 'ibrahimahmadfalatin@gmail.com';  // Your Gmail email address
            $mail->Password = 'nbtz jfbf oann xvwu';  // Your Gmail App Password (not your regular Gmail password)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;  // Use port 587 for TLS

            $mail->setFrom('ibrahimahmadfalatin@gmail.com', 'Ibrahim');  // Your email address
            $mail->addAddress('ibrahimahmadfalatin@gmail.com', 'Ibrahim');  // Recipient's email

            $mail->isHTML(true);
            $mail->Subject = 'Pesan Baru Dari ' . $name;

            $mail->Body = '
            <html>
            <head>
                <style>
                    body {
                        font-family: "Georgia", serif;
                        background-color: #fff0f0;
                        margin: 0;
                        padding: 0;
                        color: #444;
                    }
                    .container {
                        width: 100%;
                        max-width: 750px;
                        margin: 20px auto;
                        background-color: #ffffff;
                        border: 2px solid #ffb3b3;
                        border-radius: 15px;
                        padding: 30px;
                        box-shadow: 0 8px 20px rgba(255, 102, 102, 0.3);
                        position: relative;
                        overflow: hidden;
                    }
                    .background-heart {
                        position: absolute;
                        top: -50px;
                        left: -50px;
                        height: 200px;
                        width: 200px;
                        background-size: contain;
                        opacity: 0.2;
                        z-index: -1;
                    }
                    .header {
                        text-align: center;
                        margin-bottom: 25px;
                    }
                    .header img {
                        height: 100px;
                    }
                    .header h1 {
                        font-size: 2.5em;
                        color: #ff4d4d;
                        margin: 15px 0;
                        font-family: "Cursive", sans-serif;
                    }
                    .content {
                        margin: 25px 0;
                    }
                    .content h3 {
                        font-size: 1.8em;
                        color: #ff6666;
                        margin-bottom: 15px;
                    }
                    .message-content {
                        font-size: 1.3em;
                        color: #555;
                        line-height: 1.8;
                        margin-bottom: 25px;
                        padding: 20px;
                        background-color: #fff0f0;
                        border-radius: 10px;
                        border: 2px solid #ffe0e0;
                    }
                    .footer {
                        font-size: 1em;
                        color: #777;
                        text-align: center;
                        margin-top: 30px;
                        padding-top: 15px;
                        border-top: 2px solid #ffe0e0;
                    }
                    .signature {
                        font-family: "Georgia", serif;
                        font-size: 1.2em;
                        color: #ff4d4d;
                        margin-top: 25px;
                        font-style: italic;
                        text-align: right;
                    }
                    .heart {
                        color: #ff4d4d;
                        font-size: 1.8em;
                        margin: 0 5px;
                    }
                    .button {
                        display: inline-block;
                        padding: 12px 25px;
                        background-color: #ff4d4d;
                        color: #ffffff;
                        text-decoration: none;
                        border-radius: 8px;
                        font-weight: bold;
                        transition: background-color 0.3s ease;
                        margin-top: 20px;
                    }
                    .button:hover {
                        background-color: #e03e3e;
                    }
                </style>
            </head>
            <body>
            <div class="container">
                <div class="background-heart"></div>
                <div class="header">
                    <img src="https://png.pngtree.com/png-clipart/20230313/original/pngtree-love-letter-valentines-day-png-image_8985328.png" alt="Love Logo">
                    <h1>あなたへのラブレター</h1>
                </div>
                <div class="content">
                    <h3>差出人: ' . $name . '</h3>
                    <div class="message-content">
                        <p><strong><span class="heart">❤</span> メッセージ:</strong><br>' . nl2br($message) . '</p>
                    </div>
                </div>
                <div class="footer">
                    <p>この人生で特別な存在になってくれてありがとう。<br> 愛を込めて返信してください！</p>
                    <a href="https://wa.me/6285885848027" class="button">メッセージに返信する</a>
                </div>
                <div class="signature">
                    いつもあなたを愛しています、<br>
                    <strong>イブラヒム・アハマド・ファラシン</strong><br>
                    <span class="heart">❤</span>
                </div>
            </div>
        </body>
        </html>';

            $mail->send();

            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Pesan Terkirim!',
                    text: 'Pesan cinta kamu sudah berhasil dikirim!',
                    confirmButtonText: 'OK'
                });
            </script>";
        } catch (Exception $e) {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal Mengirim!',
                    text: 'Terjadi kesalahan: {$mail->ErrorInfo}',
                    confirmButtonText: 'Coba Lagi'
                });
            </script>";
        }
    } else {
        echo "<script>
            Swal.fire({
                icon: 'warning',
                title: 'Input Tidak Lengkap!',
                text: 'Harap isi semua kolom sebelum mengirim pesan.',
                confirmButtonText: 'OK'
            });
        </script>";
    }
}
?>