<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="เว็บไซต์ที่มีการตกแต่งด้วย K2D CSS และรองรับมือถือ">
  <meta name="keywords" content="HTML, CSS, Responsive, K2D">
  <title>เว็บไซต์ของใคร</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/k2d@latest/dist/k2d.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="script.js" defer></script>
  <style>
    body {
      font-family: 'K2D', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }
    .container {
      max-width: 1200px;
      margin: auto;
      padding: 20px;
    }

    /* เมนูในแนวนอนจากซ้ายไปขวา */
    nav {
      background: #007bff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px; /* เพิ่มระยะห่างซ้ายขวา */
      position: relative;
      z-index: 10;
      width: 100%;
    }

    /* ให้ลิงก์ในเมนูมีพื้นที่และสวยงาม */
    nav a {
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      display: inline-block;
      font-size: 18px;
      font-weight: bold;
      transition: background-color 0.3s ease, transform 0.3s ease;
      margin: 0 10px; /* เพิ่มระยะห่างระหว่างเมนู */
    }

    nav a:hover {
      background-color: #0056b3;
      border-radius: 5px;
      transform: scale(1.1); /* ขยายขนาดเมื่อ hover */
    }

    /* กำหนดระยะห่างจากเนื้อหาด้านล่าง */
    .table-container {
      margin-top: 40px;
    }

    /* ตั้งชื่อสำหรับตาราง */
    .table-title {
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 20px;
      padding: 10px;
      background: #007bff;
      color: white;
      border-radius: 8px;
    }

    /* รูปแบบตาราง */
    table {
      width: 100%;
      border-collapse: collapse;
      background: #ffffff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: left;
    }

    th {
      background: #007bff;
      color: white;
    }

    tr:nth-child(even) {
      background: #f2f2f2;
    }

    tr:hover {
      background: #ddd;
    }

    /* ปรับแต่งสำหรับหน้าจอขนาดเล็ก */
    @media (max-width: 768px) {
      nav {
        flex-direction: row; /* เรียงเมนูในแนวนอน */
        justify-content: space-between; /* ให้เมนูจัดระยะห่างให้พอดี */
        padding: 10px 15px;
      }
      nav a {
        font-size: 16px; /* ปรับขนาดฟอนต์ให้เล็กลงบนมือถือ */
        padding: 8px 12px; /* ปรับพื้นที่ในเมนูให้เหมาะสม */
      }
    }

    /* ปรับตำแหน่งคำอธิบายให้อยู่กึ่งกลางจอล่างสุด */
    .footer-description {
      position: fixed;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      background-color: rgba(0, 0, 0, 0.7);
      color: white;
      padding: 10px;
      width: 100%;
      text-align: center;
    }
  </style>
</head>
<body>
  <!-- Navigation Bar (เมนูการนำทาง) -->
  <nav>
    <a href="index.php"><i class="bi bi-house"></i> หน้าแรก</a>
    <a href="wed.php"><i class="bi bi-cart"></i> หน้าสอง</a>
    <a href="wed.php"><i class="bi bi-telephone"></i> หน้าสาม</a>
    <a href="https://line.me" target="_blank"><i class="bi bi-chat-dots"></i> หน้าสี่</a>
  </nav>

  <!-- Container สำหรับเนื้อหาหลัก -->
  <div class="container">
    <!-- ตารางแสดงข้อมูล -->
    <div class="table-container">
      <div class="table-title">ตารางแสดงข้อมูลสมาชิก</div>
      <table>
        <thead>
          <tr>
            <th>ชื่อ-สกุล</th>
            <th>จังหวัด</th>
            <th>อำเภอ</th>
            <th>เบอร์โทรศัพท์</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>นายสมชาย</td>
            <td>กรุงเทพฯ</td>
            <td>บางเขน</td>
            <td>081-1234567</td>
          </tr>
          <tr>
              
      
        </tbody>
        <tfoot>
          <tr>
            <td colspan="4">รวม 1 คน</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <!-- Footer Section ที่แสดงคำอธิบายที่กลางจอล่างสุด -->
  <div class="footer-description">
    <p>&copy; 2025 เว็บไซต์ของฉัน | All rights
เครดิต จาก น้องสุดหล่อ ผู้ชายใจดี reserved</p>
  </div>
  
</body>
</html>
