<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>التحقق من Domain Spoofing</title>
    <style>
        body { /* */
            font-family: 'Arial', sans-serif;
            background-color: #f9fafc;
            color: #333;
            margin: 0;
            padding: 0;
            direction: rtl; 
        }
        .container {
            width: 90%;
            max-width: 700px;
            margin: 100px auto;
            padding:50px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            font-size: 1.8;
            color: #007bff;
            margin-bottom: 20px;
        }
        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin: 20px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 12px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }
     
        .result {
            margin-top: 20px;
            font-size: 1.2em;
            padding: 10px;
            border-radius: 5px;
        }
        .result p {
            margin: 10;
        }
        .result.success {
            background-color: #d4edda;
            color: #155724;
        }
        .result.fail {
            background-color: #f8d7da;
            color: #721c24;
        }
        .ai-result { 
        margin-top: 20px;
        font-size: 1.2em;
        padding: 10px;
        border-radius: 5px;
        background-color: #e2e3e5;
        color: #383d41; 
    }
    </style>
</head>
<body>

<div class="container">  
    <h1>التحقق من Domain Spoofing</h1> 
    <form action="" method="POST"> 
        <input type="text" name="website" placeholder="أدخل رابط الموقع" required>
        <input type="submit" value="تحقق"> 
    </form>
    <div class="result">
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $website = trim($_POST['website']); 

           
            if (!preg_match("~^(?:f|ht)tps?://~i", $website)) {
                $website = "https://" . $website;
            }

            
            $parsed_url = parse_url($website, PHP_URL_HOST);
            if (!$parsed_url) {
                $parsed_url = parse_url("https://" . $website, PHP_URL_HOST);
            }

           
            $parsed_url_without_www = preg_replace('/^www\./', '', $parsed_url);

           
            $servername = "localhost"; 
            $username = "root";  
            $password = ""; 
            $dbname = "spoofing_db"; 

            
            $conn = new mysqli($servername, $username, $password, $dbname);

           
            if ($conn->connect_error) {
                die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
            }

            
            $stmt = $conn->prepare("SELECT site_url FROM trusted_sites WHERE site_url = ? OR site_url = CONCAT('www.', ?)");
            $stmt->bind_param("ss", $parsed_url_without_www, $parsed_url);
            $stmt->execute();
            $stmt->store_result();



            if ($stmt->num_rows > 0) {
                echo "<div class='result success'><p>الرابط غير احتيالي.</p></div>";
            } else {
                echo "<div class='result fail'><p>الرابط احتيالي أو غير معروف!</p></div>";
            }

$apiKey = '5b78bae889a4fb53ab1dc622eab8bddc2f617089cfab97177bd797d031e8032d';
$url = 'https://www.virustotal.com/api/v3/domains/' . urlencode($parsed_url);

$options = [
    "http" => [
        "header" => "accept: application/json\r\n" .
                    "x-apikey: $apiKey\r\n",
    ],
];
$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$domainData = json_decode($response, true); 


if (isset($domainData['data'])) { 
    $attributes = $domainData['data']['attributes'];
    $creation_date = isset($attributes['creation_date']) ? date('Y-m-d', $attributes['creation_date']) : 'غير متوفر';
    $registrar = isset($attributes['registrar']) ? $attributes['registrar'] : 'غير متوفر';
    $categories = isset($attributes['categories']) ? implode(', ', $attributes['categories']) : 'غير متوفر';
    $reputation = isset($attributes['reputation']) ? $attributes['reputation'] : 'غير متوفر';

    echo "<h4 style='text-align: right;'>تفاصيل الدومين:</h4>";
    echo "<p style='text-align: right;'>تاريخ الإنشاء: $creation_date</p>";
    echo "<p style='text-align: right;'>الشركة المسجلة: $registrar</p>";
    echo "<p style='text-align: right;'>التصنيف: $categories</p>";
    echo "<p style='text-align: right;'>التقييم العام: $reputation</p>";
} else {
    echo "<div class='result fail'><p>حدث خطأ أثناء الحصول على البيانات من API.</p></div>"; 
}


            $stmt->close();
            $conn->close();;
            $api_key = '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'; 
               $url = 'https://api.openai.com/v1/chat/completions';
               $data = array(
                   "model" => "gpt-3.5-turbo",
                   "messages" => [
                       array("role" => "system", "content" => "أنت مساعد خبير في تحليل الدومين."), 
                       array("role" => "user", "content" => " تحقق من الدومين التالي للتأكد مما إذا كان هناك أي تغيير أو تزوير. إذا كان هناك تغيير، يرجى توضيح الحروف الزائدة أو الناقصة، وتصحيح الرابط إن أمكن: " . $parsed_url_without_www . ".") 
                    ],
                   "max_tokens" => 250 
               );
   
               $options = array(
                   'http' => array(
                       'header'  => "Content-type: application/json\r\nAuthorization: Bearer " . $api_key . "\r\n", 
                       'method'  => 'POST',   
                       'content' => json_encode($data),
                   ),
               );
   
               $context  = stream_context_create($options);
               $result = file_get_contents($url, false, $context);  
               if ($result === FALSE) { 
                   echo "<div class='ai-result'><p>فشل التحقق باستخدام الذكاء الاصطناعي.</p></div>"; 
               } else {
                   $response = json_decode($result, true); 
                   $ai_response = $response['choices'][0]['message']['content']; 
                   
                   echo "<div class='ai-result'><p>نتيجة الذكاء الاصطناعي: " . $ai_response . "</p></div>"; 
               }
        }
        ?>
    </div>
</div>

</body>
</html>
