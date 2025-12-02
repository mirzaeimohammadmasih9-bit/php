<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<title>لیست کاربران کارتونی</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;600&display=swap');

body {
    background: linear-gradient(135deg, #ffd6e8, #ff69b4);
    font-family: 'Vazirmatn', Tahoma, sans-serif;
    margin: 0;
    padding: 50px;
    text-align: center;
    color: #fff;
    overflow-x: hidden;
}

h2 {
    font-size: 28px;
    margin-bottom: 25px;
    animation: wiggle 1.5s infinite;
}

@keyframes wiggle {
  0%,100% { transform: rotate(0deg); }
  25% { transform: rotate(3deg); }
  50% { transform: rotate(-3deg); }
  75% { transform: rotate(2deg); }
}

.table-container {
    background: #ff85c1;
    border-radius: 20px;
    padding: 25px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.3);
    width: 90%;
    max-width: 900px;
    margin: auto;
    overflow-x: auto;
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
  0%,100% { transform: translateY(0); }
  50% { transform: translateY(-15px); }
}

table {
    width: 100%;
    border-collapse: collapse;
    font-size: 15px;
}

th {
    background: linear-gradient(135deg, #ff1493, #ff69b4);
    color: #fff;
    padding: 12px;
    border-radius: 10px;
    animation: thColor 3s infinite alternate;
}

@keyframes thColor {
  0% { background: #ff1493; }
  50% { background: #ff69b4; }
  100% { background: #ff1493; }
}

td {
    border-bottom: 1px solid #ffb6c1;
    padding: 10px;
    text-align: center;
    transition: transform 0.2s, background 0.2s;
    animation: cellBounce 4s infinite;
}

@keyframes cellBounce {
  0%,100% { transform: translateY(0); }
  25% { transform: translateY(-5px); }
  50% { transform: translateY(2px); }
  75% { transform: translateY(-3px); }
}

tr:nth-child(even) { background-color: #ff82b2; }
tr:hover { 
    background-color: #ff69b4cc;
    transform: scale(1.08) rotate(-2deg);
}

a { color:#fff; text-decoration:none; font-weight:700; }
a:hover { text-decoration:underline; }

.no-data { color: #fff; padding: 20px; font-weight: 600; }

</style>
</head>
<body>

<h2>📋 لیست کاربران کارتونی 💖</h2>

<div class="table-container">
<?php
// اتصال به دیتابیس
$conn = new mysqli("localhost", "root", "", "ma30");
if ($conn->connect_error) {
    die("❌ خطا در اتصال به دیتابیس: " . $conn->connect_error);
}

// گرفتن کاربران
$sql = "SELECT id, first_name, last_name, father_name, user_name FROM mirza ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>
            <th>ردیف</th>
            <th>نام 😺</th>
            <th>نام خانوادگی</th>
            <th>نام پدر</th>
            <th>نام کاربری</th>
          </tr>";

    $i = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>💖 " . $i++ . "</td>";
        echo "<td>😺 " . htmlspecialchars($row['first_name']) . "</td>";
        echo "<td>✨ " . htmlspecialchars($row['last_name']) . "</td>";
        echo "<td>🌸 " . htmlspecialchars($row['father_name']) . "</td>";
        echo '<td><a href="grades.php?id=' . $row['id'] . '">' . htmlspecialchars($row['user_name']) . '</a></td>';
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<div class='no-data'>هیچ کاربری ثبت نشده است ❌</div>";
}
$conn->close();
?>
</div>

</body>
</html>
