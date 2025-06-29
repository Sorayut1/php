<?php
// เริ่มต้นไฟล์ PHP
?>
<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ศูนย์ฝึกวิชาชีพ - LRU</title>
  <link rel="stylesheet" href="index.css" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <style>
    

    .navbar {
      background-color: #111;
      color: #f0f0f0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 40px;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 100;
      box-shadow: 0 2px 8px rgba(255, 255, 255, 0.05);
    }

    .navbar .logo img {
      height: 50px;
    }

    .navbar .nav-links {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    .navbar .nav-links li a {
      color: #f0f0f0;
      text-decoration: none;
      font-weight: 500;
      padding: 8px 12px;
      border-radius: 6px;
      transition: 0.3s;
    }

    .navbar .nav-links li a:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }
  </style>
</head>

<body>
  <!-- Navbar -->
    <nav class="navbar">
    <div class="logo">
      <a href="index.php"><img src="images/logoNav.png" alt="LRU Logo" /></a>
    </div>
    <ul class="nav-links">
      <li><a href="index.php">หน้าหลัก</a></li>
      <!-- <li><a href="courses.php">คอร์สอบรม</a></li> -->
      <li><a href="performance.php">ผลงานและบริการ</a></li>
      <li><a href="./auth/login.php">เข้าสู่ระบบ / ลงทะเบียน</a></li>
    </ul>
  </nav>


  <!-- Section Content -->
  <section class="main-section" id="hero">
    <div class="content">
      <h1>ยินดีต้อนรับสู่ศูนย์ฝึกวิชาชีพทางด้านวิทยาการคอมพิวเตอร์</h1>
      <p>เรามุ่งมั่นในการพัฒนาทักษะอาชีพ เพิ่มโอกาสในการเรียนรู้ และเติบโตในสายงานเทคโนโลยีสารสนเทศ</p>
      <a href="./auth/login.php" class="btn">เข้าสู่ระบบ / ลงทะเบียน</a>
    </div>
  </section>

  <section class="featured-project">
    <div class="featured-content">
      <div class="featured-image">
        <img src='https://uknowva.com/images/employeetrainingprogram.jpg' alt="รูปโครงการอบรม" />
      </div>
      <div class="featured-details">
        <h2>อบรม HTML/CSS</h2>
        <p>เรียนรู้การสร้างหน้าเว็บด้วย HTML และตกแต่งด้วย CSS สำหรับผู้เริ่มต้น</p>
        <p><strong>สถานที่:</strong> ห้องปฏิบัติการคอมพิวเตอร์ อาคารวิทยาศาสตร์ ชั้น 3</p>
        <a href="#" class="register-btn" onclick="openModal()">ลงทะเบียน</a>

        <!-- Modal -->
        <div id="registerModal" class="modal">
          <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>ฟอร์มลงทะเบียนเข้าร่วมอบรม</h2>
            <form method="post" action="register_training.php">
              <label for="fullname" style="color: black;">ชื่อ-นามสกุล</label>
              <input type="text" id="fullname" name="fullname" required>

              <label for="phone" style="color: black;">เบอร์โทรศัพท์</label>
              <input type="tel" id="phone" name="phone" required>

              <label for="email" style="color: black;">อีเมล</label>
              <input type="email" id="email" name="email" required>

              <button type="submit">ส่งข้อมูล</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Training Projects -->
  <section class="training-projects">
    <div class="training-container">
      <div class="section-title">
        <div class="text-white text-3xl">โครงการอบรมที่กำลังจะเกิดขึ้น</div>
      </div>
      <div class="training-list" id="show-training-comming-soon">
        <?php
        // ตัวอย่างข้อมูลจากฐานข้อมูล (สามารถดึงจริงด้วย MySQL ได้)
        for ($i = 0; $i < 3; $i++) {
        ?>
          <div class="training-card">
            <img src='https://uknowva.com/images/employeetrainingprogram.jpg' alt="training image" class="training-img" />
            <div class="training-content">
              <h3>อบรม HTML/CSS</h3>
              <p>เรียนรู้การสร้างหน้าเว็บด้วย HTML และตกแต่งด้วย CSS สำหรับผู้เริ่มต้น</p>
              <p><strong>สถานที่:</strong> ห้องปฏิบัติการคอมพิวเตอร์ อาคารวิทยาศาสตร์ ชั้น 3</p>
              <a href="#details" class="btn">ดูรายละเอียด</a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- Info Section -->
  <section class="info-section-alt">
    <div class="section-title">
      <h2>🧠 เกี่ยวกับเว็บไซต์ศูนย์ฝึกวิชาชีพ</h2>
    </div>

    <div class="info-item left">
      <p>🧑‍🏫 <strong>แหล่งเรียนรู้:</strong> เรารวบรวมสื่อการเรียนรู้ด้านไอที...</p>
    </div>
    <div class="info-item right">
      <p>📁 <strong>ผลงานนักศึกษา:</strong> ชมตัวอย่างโปรเจกต์จริงจากนักศึกษา...</p>
    </div>
    <div class="info-item left">
      <p>🛠️ <strong>ให้คำปรึกษา:</strong> หากคุณมีคำถามเกี่ยวกับสายงาน...</p>
    </div>
    <div class="info-item right">
      <p>🌐 <strong>ระบบอบรมออนไลน์:</strong> คุณสามารถเข้าร่วมคอร์สต่างๆ ผ่านระบบออนไลน์</p>
    </div>
  </section>

  <!-- Thank You Section -->
  <section class="thankyou-section">
    <div class="container">
      <h2 class="thankyou-title">ขอบคุณที่เข้ามาเยี่ยมชมเว็บไซต์ของเรา</h2>
      <p class="thankyou-text">หวังว่าเนื้อหาและบริการที่เราจัดเตรียมไว้จะเป็นประโยชน์...</p>
    </div>
  </section>

  <!-- Footer -->
<?php include './includes/footer.php'; ?>

<!-- Facebook SDK ควรวางไว้ด้านล่างสุดของ body -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
  src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v22.0"></script>

  <!-- JavaScript -->
  <script>
    const images = [
      'https://images.unsplash.com/photo-1742827871480-4962b0653e1d?...',
      'https://plus.unsplash.com/premium_photo-1663075847012-c781e0d194ce?...',
      'https://images.unsplash.com/photo-1742827871480-4962b0653e1d?...',
    ];
    let index = 0;
    const section = document.getElementById('hero');

    function changeBackground() {
      section.style.backgroundImage = `url('${images[index]}')`;
      section.style.backgroundSize = 'cover';
      section.style.backgroundPosition = 'center';
      section.style.transition = 'background-image 1s ease-in-out';
      index = (index + 1) % images.length;
    }

    setInterval(changeBackground, 5000);
    changeBackground();

    function openModal() {
      document.getElementById("registerModal").style.display = "block";
    }

    function closeModal() {
      document.getElementById("registerModal").style.display = "none";
    }

    window.onclick = function (event) {
      const modal = document.getElementById("registerModal");
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- <script src="../env.js"></script>
  <script src="../header-users.js"></script>
  <script src="../auth.js"></script> -->
</body>

</html>
