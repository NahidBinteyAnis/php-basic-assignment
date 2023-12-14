<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quote change</title>
        <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="max-w-md bg-white p-8 rounded shadow-md">
        <p class="text-xl font-serif leading-8 text-blue-700 " ><?php echo getRandomQuote(); ?></p>
    </div>

    <?php
        // Function to get a random quote
        function getRandomQuote() {
            $quotes = [
                "\" আমি সেই অবহেলা,আমি সেই নতমুখ,নীরবে ফিরে যাওয়া অভিমান-ভেজা চোখ,আমাকে গ্রহণ করো । \" <br/><br/>- Rudra Mohammad Shahidullah",

                "\"যখন মানুষের খুব প্রিয় কেউ তাকে অপছন্দ,অবহেলা কিংবা ঘৃণা করে তখন প্রথম প্রথম মানুষ খুব কষ্ট পায় এবং চায় যে সব ঠিক হয়ে যাক । কিছুদিন পর সে সেই প্রিয় ব্যক্তিকে ছাড়া থাকতে শিখে যায় । আর অনেকদিন পরে সে আগের চেয়েও অনেকবেশী খুশি থাকে যখন সে বুঝতে পারে যে কারো ভালবাসায় জীবনে অনেক কিছুই আসে যায় কিন্তু কারো অবহেলায় সত্যিই কিছু আসে যায় না।  \" <br/><br/>- Humayun Ahmed",

                "\"কিছু নেই বিস্ময়ের, গ্রন্থ যদি কাটে শুধু কীটে।\"<br/><br/> - Syed Shamsul Haque"
            ];
            $randomIndex = array_rand($quotes);
            return $quotes[$randomIndex];
            
        }
    ?>

</body>
</html>
