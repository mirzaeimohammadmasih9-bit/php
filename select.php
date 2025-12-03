<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// اتصال به دیتابیس
$conn = new mysqli("localhost", "root", "", "ma30");
if ($conn->connect_error) {
    die("❌ خطا در اتصال به دیتابیس: " . $conn->connect_error);
}

// گرفتن کاربران
$sql = "SELECT id, first_name, last_name, father_name, user_name FROM mirza ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>🌸 لیست کاربران ناز و گوگولی 🌸</title>
    
    <!-- فونت زیبا -->
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;600;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- آیکون‌های ناز -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: linear-gradient(135deg, #ffe6f0 0%, #ffcce0 50%, #ffb3d9 100%);
        font-family: 'Vazirmatn', 'Poppins', sans-serif;
        min-height: 100vh;
        padding: 30px 20px;
        color: #ff66a3;
        text-align: center;
        position: relative;
        overflow-x: hidden;
    }

    /* قلب‌های شناور در پس‌زمینه */
    body::before {
        content: "♥ ♥ ♥";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        font-size: 120px;
        color: rgba(255, 182, 193, 0.1);
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
        pointer-events: none;
        z-index: -1;
    }

    /* عنوان اصلی */
    .main-title {
        background: linear-gradient(145deg, #ff66a3, #ff3385);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-size: 42px;
        font-weight: 800;
        margin-bottom: 40px;
        text-shadow: 3px 3px 0px rgba(255, 255, 255, 0.8);
        position: relative;
        display: inline-block;
        padding: 0 20px;
    }

    .main-title::before,
    .main-title::after {
        content: "🌸";
        font-size: 32px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    .main-title::before {
        right: -40px;
    }

    .main-title::after {
        left: -40px;
    }

    /* کانتینر جدول */
    .table-container {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 30px;
        padding: 35px;
        box-shadow: 
            0 20px 60px rgba(255, 105, 180, 0.3),
            inset 0 1px 0 rgba(255, 255, 255, 0.8),
            0 0 0 4px #ffccdd;
        width: 90%;
        max-width: 1200px;
        margin: 0 auto 50px;
        overflow: hidden;
        position: relative;
        border: 3px dashed #ff99cc;
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }

    /* افکت نور */
    .table-container::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.3) 1%, transparent 20%);
        animation: rotate 20s linear infinite;
        z-index: 0;
    }

    @keyframes rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* جدول */
    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        font-size: 16px;
        position: relative;
        z-index: 1;
        border-radius: 20px;
        overflow: hidden;
    }

    /* سرستون‌ها */
    th {
        background: linear-gradient(145deg, #ff99cc, #ff66a3);
        color: white;
        padding: 22px 15px;
        text-align: center;
        font-weight: 700;
        font-size: 18px;
        position: relative;
        border-bottom: 4px solid #ff3385;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        letter-spacing: 0.5px;
    }

    th:first-child {
        border-top-right-radius: 20px;
    }

    th:last-child {
        border-top-left-radius: 20px;
    }

    th i {
        margin-left: 8px;
        font-size: 20px;
    }

    /* سلول‌ها */
    td {
        border-bottom: 2px solid #ffe6f0;
        padding: 20px 15px;
        text-align: center;
        color: #ff3385;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        background: rgba(255, 255, 255, 0.9);
    }

    /* ردیف‌های زوج */
    tr:nth-child(even) td {
        background: rgba(255, 230, 240, 0.7);
    }

    /* هاور روی ردیف */
    tr:hover td {
        background: rgba(255, 153, 204, 0.3) !important;
        transform: translateX(10px);
        box-shadow: inset 5px 0 0 #ff66a3;
    }

    /* لینک نام کاربری */
    .user-link {
        display: inline-block;
        background: linear-gradient(145deg, #ff66a3, #ff3385);
        color: white !important;
        padding: 10px 25px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 700;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(255, 102, 163, 0.4);
        position: relative;
        overflow: hidden;
    }

    .user-link:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 10px 25px rgba(255, 102, 163, 0.6);
        text-decoration: none;
    }

    .user-link::after {
        content: '👈';
        position: absolute;
        right: -20px;
        opacity: 0;
        transition: all 0.3s;
    }

    .user-link:hover::after {
        right: 15px;
        opacity: 1;
    }

    /* پیام خالی */
    .no-data {
        background: linear-gradient(145deg, #ffccdd, #ff99cc);
        color: #ff3385;
        padding: 40px;
        border-radius: 25px;
        font-size: 22px;
        font-weight: 700;
        margin: 30px auto;
        box-shadow: 0 10px 30px rgba(255, 102, 163, 0.2);
        border: 3px dotted #ff66a3;
        position: relative;
    }

    .no-data i {
        font-size: 40px;
        display: block;
        margin-bottom: 15px;
        color: #ff3385;
    }

    /* شماره ردیف */
    .row-number {
        display: inline-block;
        background: #ff66a3;
        color: white;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50%;
        font-weight: 800;
        box-shadow: 0 4px 10px rgba(255, 102, 163, 0.5);
    }

    /* دکمه بازگشت (اگر نیاز داری) */
    .back-btn {
        display: inline-block;
        background: linear-gradient(145deg, #ff99cc, #ff66a3);
        color: white;
        padding: 15px 40px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 700;
        font-size: 18px;
        margin-top: 30px;
        box-shadow: 0 10px 25px rgba(255, 102, 163, 0.4);
        transition: all 0.3s ease;
        border: 3px solid white;
    }

    .back-btn:hover {
        transform: translateY(-5px) rotate(-2deg);
        box-shadow: 0 15px 35px rgba(255, 102, 163, 0.6);
    }

    /* افکت برف صورتی */
    .snow {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: -1;
    }

    .flake {
        position: absolute;
        background: rgba(255, 182, 193, 0.7);
        border-radius: 50%;
        animation: fall linear infinite;
    }

    @keyframes fall {
        to { transform: translateY(100vh) rotate(360deg); }
    }
    </style>
</head>
<body>

    <!-- برف صورتی -->
    <div class="snow" id="snow"></div>

    <h1 class="main-title">
        <i class="fas fa-heart"></i>
        لیست کاربران ناز و گوگولی
        <i class="fas fa-heart"></i>
    </h1>

    <div class="table-container">
        <?php
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>
                    <th><i class='fas fa-hashtag'></i> ردیف</th>
                    <th><i class='fas fa-user'></i> نام</th>
                    <th><i class='fas fa-users'></i> نام خانوادگی</th>
                    <th><i class='fas fa-user-tie'></i> نام پدر</th>
                    <th><i class='fas fa-user-circle'></i> نام کاربری</th>
                  </tr>";

            $i = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td><span class='row-number'>" . $i++ . "</span></td>";
                echo "<td>" . htmlspecialchars($row['first_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['last_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['father_name']) . "</td>";
                // لینک به صفحه نمره گذاری با استایل ناز
                echo '<td><a class="user-link" href="grades.php?id=' . $row['id'] . '">
                        <i class="fas fa-star"></i> ' . 
                        htmlspecialchars($row['user_name']) . 
                      '</a></td>';
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<div class='no-data'>
                    <i class='fas fa-heart-broken'></i>
                    <br>
                    هیچ کاربری ثبت نشده است 
                    <br>
                    <small>اول یک کاربر ناز اضافه کنید! 💖</small>
                  </div>";
        }
        $conn->close();
        ?>
    </div>

    <!-- دکمه بازگشت (اختیاری) -->
    <a href="#" class="back-btn">
        <i class="fas fa-arrow-right"></i> بازگشت به صفحه اصلی
    </a>

    <script>
    // ایجاد برف صورتی
    function createSnow() {
        const snowContainer = document.getElementById('snow');
        const flakeCount = 50;
        
        for (let i = 0; i < flakeCount; i++) {
            const flake = document.createElement('div');
            flake.classList.add('flake');
            
            // اندازه تصادفی
            const size = Math.random() * 10 + 5;
            flake.style.width = size + 'px';
            flake.style.height = size + 'px';
            
            // موقعیت تصادفی
            flake.style.left = Math.random() * 100 + 'vw';
            
            // انیمیشن با سرعت تصادفی
            const duration = Math.random() * 10 + 10;
            const delay = Math.random() * 5;
            flake.style.animationDuration = duration + 's';
            flake.style.animationDelay = delay + 's';
            
            // شفافیت تصادفی
            flake.style.opacity = Math.random() * 0.5 + 0.3;
            
            snowContainer.appendChild(flake);
        }
    }

    // اجرا بعد از لود صفحه
    document.addEventListener('DOMContentLoaded', createSnow);

    // افکت کلیک روی ردیف‌ها
    document.querySelectorAll('tr').forEach(row => {
        row.addEventListener('click', function() {
            this.style.transform = 'scale(0.98)';
            setTimeout(() => {
                this.style.transform = '';
            }, 200);
        });
    });
    </script>

</body>
</html>