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
    <style>
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
                <span>Follow me on</span>
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
                <input type="text" name="name" id="sendername" placeholder="Siapa Namamu?" class="w-full max-w-md p-4 pl-12 bg-gray-50 border-2 border-gray-300 rounded-lg shadow-sm text-sm focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Input untuk Pesan -->
            <div class="relative mb-4">
                <i class="fas fa-comment-alt absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                <textarea name="message" rows="4" class="w-full max-w-md p-4 pl-12 bg-gray-50 border-2 border-gray-300 rounded-lg shadow-sm text-sm focus:ring-2 focus:ring-blue-500" placeholder="Apa yang ada di hatimu? (Tuliskan apa saja yang ingin kamu ungkapkan)" required></textarea>
            </div>

            <!-- Tombol Kirim Pesan -->
            <button type="submit" class="mt-4 px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition-all duration-200 ease-in-out" id="contact-button">
                <i class="fas fa-heart mr-2"></i> Kirimkan Pesan Cinta
            </button>
        </form>
        <p class="mt-4 text-gray-600" id="contact-note">Tulis apa saja yang ingin kamu sampaikan, biar hati kita lebih dekat!</p>
    </div>

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
            }
        });
    </script>
    </div>     
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
                title.innerHTML = '<i class="fas fa-heart text-red-500"></i> Pikeun Anjeun, Mutiara Perwitasari, Anu Pangsaéna Dina Jagat Raya!';
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
            }
        
            // Update button text based on selected language
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

</body>
</html>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$statusMessage = '';  // Initialize status message

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

            // Recipients
            $mail->setFrom('ibrahimahmadfalatin@gmail.com', 'Ibrahim');  // Your email address
            $mail->addAddress('ibrahimahmadfalatin@gmail.com', 'Ibrahim');  // Recipient's email

            $mail->isHTML(true);
            $mail->Subject = 'Pesan Baru Dari ' . $name;
            
            // Beautified HTML Body with Romantic Theme
            $mail->Body    = '
                <html>
                <head>
                    <style>
                        body {
                            font-family: "Georgia", serif;
                            background-color: #f9f3f3;
                            margin: 0;
                            padding: 0;
                            color: #4e4e4e;
                        }
                        .container {
                            width: 100%;
                            max-width: 700px;
                            margin: 30px auto;
                            padding: 40px;
                            background-color: #ffffff;
                            border-radius: 12px;
                            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
                            border-top: 5px solid #ff99cc;
                        }
                        h3 {
                            color: #d76d7e;
                            font-size: 2em;
                            text-align: center;
                            margin-bottom: 30px;
                            font-style: italic;
                            letter-spacing: 2px;
                        }
                        .message-content {
                            font-size: 1.1em;
                            color: #555555;
                            line-height: 1.8;
                            text-align: center;
                            margin-bottom: 30px;
                            padding: 20px;
                            background-color: #fff1f4;
                            border-radius: 8px;
                        }
                        .footer {
                            font-size: 0.9em;
                            color: #b3b3b3;
                            text-align: center;
                            margin-top: 40px;
                            padding-top: 15px;
                            border-top: 1px dashed #ff99cc;
                        }
                        .button {
                            display: inline-block;
                            padding: 12px 30px;
                            background-color: #ff69b4;
                            color: #ffff;
                            text-decoration: none;
                            border-radius: 8px;
                            font-weight: bold;
                            font-size: 1.1em;
                            text-transform: uppercase;
                            margin-top: 20px;
                            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                            transition: background-color 0.3s ease;
                        }
                        .button:hover {
                            background-color: #ff3385;
                            text-decoration: none;
                        }
                        .signature {
                            font-family: "Lucida Handwriting", cursive;
                            font-size: 1.2em;
                            color: #d76d7e;
                            text-align: center;
                            margin-top: 30px;
                            font-style: italic;
                        }
                        .heart {
                            color: #ff4d8d;
                            font-size: 1.5em;
                            text-align: center;
                            margin-top: 10px;
                        }
                    </style>
                </head>
                <body>
                    <div class="container">
                        <h3>Pesan Cinta Baru Dari: ' . $name . '</h3>
                        <div class="message-content">
                            <p><strong>Pesan:</strong><br>' . nl2br($message) . '</p>
                            <p><strong>Nama Pengirim:</strong> ' . $name . '</p>
                        </div>
                        <div class="footer">
                            <p>Terima kasih telah mengirimkan pesan hati Anda!</p>
                            <a href="https://wa.me/6285885848027" class="button">Balas Pesan</a>
                        </div>
                        <div class="signature">
                            <p>Kubuat Dengan Cinta,</p>
                            <p>Ibrahim Ahmad Falathin</p>
                        </div>
                        <div class="heart">
                            <p>❤️</p>
                        </div>
                    </div>
                </body>
                </html>';
            
            // Send the email
            $mail->send();
            $statusMessage = "<script>alert('Pesan berhasil terkirim!');</script>"; // Display success message
        } catch (Exception $e) {
            $statusMessage = "<script>alert('Gagal mengirim pesan. Error: " . $mail->ErrorInfo . "');</script>"; // Display error message
        }
    } else {
        $statusMessage = "<script>alert('Harap isi semua kolom sebelum mengirim pesan.');</script>"; // Display validation message
    }
}
?>