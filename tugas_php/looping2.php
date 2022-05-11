<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP | Looping 2</title>
    <style>
        .td{
            background-color: #eee;
        }
    </style>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr style="background-color: brown;">
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
            </tr>
        </thead>
        
        <tbody>
            <?php $no = 1; ?>
            <?php  for ($i = 1, $a = 10; $i <= 10, $a >= 1  ; $i++, $a--) { ?>
                <?php if($i % 2 == 1) : ?>
                    <tr class="td">
                <?php else: ?>
                    <tr>
                <?php endif; ?>
                    <td><?php echo $no; ?></td>
                    <td>Nama ke <?php echo $i; ?></td>
                    <td>Kelas ke <?php echo $a; ?></td>
                </tr>
    
            <?php $no++; } ?>
        </tbody>
    </table>

</body>
</html>