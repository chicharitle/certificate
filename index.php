<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>โปรแกรมดาวน์โหลดเกียรติบัตรออนไลน์</title>
    
    <!-- Font Support -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- CSS Link -->
    <link rel="stylesheet" href="assets/style.css">

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="https://www.bpk.ac.th/bpknews/assets/images/img/logobaner.png" width="300" height="70" class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="https://www.bpk.ac.th/bpknews" aria-current="page"><u>กลับสู่หน้าหลัก</u><span class="visually-hidden">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="mt-3">
            <div class="pt-5 my-5 text-center">
                <h3>โปรแกรมดาวน์โหลดเกียรติบัตรออนไลน์ โรงเรียนบางปะกอกวิทยาคม</h3>
            </div>
           <form method="post">
                <div class="pt-2 text-center">
                    <div class="col-xs-2">
                        <input
                            type="text"
                            class="form-control"
                            name="search"
                            id="student-id"
                            maxlength="5"
                            placeholder="เลขประจำตัวนักเรียน"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                            required/>
                    </div>
                    <div class="search mt-5">
                        <button type="submit" name="submit-form" class="btn btn-dark px-3" id="btn-search" onclick="clickSearch()">ค้นหา
                            <i class="fas fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
           </form>
        </div>
    </div>

<div class="container pb-4 px-2" id="table-result">
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>เลขประจำตัวนักเรียน</th>
                    <th>ชื่อ - นามสกุล</th>
                    <th>ระดับชั้น</th>
                    <th>เกียรติบัตร</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($results as $r): ?>
                    <tr>
                        <td><?php echo $r["s_id"]; ?></td>
                        <td><?php echo $r["s_name"]; ?></td>
                        <td><?php echo $r["s_class"]; ?></td>
                        <td><a href="<?php echo $r["s_link"]; ?>" target="_blank">Certificate.pdf</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <body class="d-flex flex-column min-vh-100">
        <div class="wrapper flex-grow-1"></div>
            <footer class="text-white text-center py-2 bg-dark px-5">
                <p class="mt-3"><b>จัดทำโดย</b>
                    <li>นายสรวิชญ์ สิทธิบวรสกุล ม.6/10 เลขที่ 11</li>
                    <li>นายวงศ์วริศ ชัยกุลประดิษฐ์ ม.6/10 เลขที่ 13</li>
                </p>
            </footer>
    </body>

<script>

// Enter to show table result
var input = document.getElementById("student-id");
input.addEventListener("keypress", function(event) {
  if (event.key === "Enter") {
    document.getElementById("btn-search").click();
  }
});
</script>

</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>