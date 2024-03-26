<?php
ob_start(); // Start output buffering
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางค้นหา</title>
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
</body>
</html>
<?php
$table_output = ob_get_clean(); // Get the buffered output and clean the buffer
?>  