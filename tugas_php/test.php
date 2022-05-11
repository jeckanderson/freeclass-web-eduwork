            <?php
                $no = 1;
                for($i = 1; $i <= 5; $i++) {
                    if($i % 2 == 0) :
                        echo "<tr class= 'td'>";
                        else :
                            echo "<tr>";
                        endif;
                        echo "<td>$no</td>";
                        echo "<td>Nama ke $i</td>";
                            for($j = $i; $j >= $i; $j--) {
                                echo "<td>Kelas ke $j </td>";
                                echo "<br>";
                            }
                    echo "</tr>";
                    $no++;
                }
            ?>
            <br>
            <?php $no = 1; ?>
            <?php for ($i = 5; $i >= 1; $i--) : ?>
                    <?php if($i % 2 == 0) : ?>
                            <tr class= 'td'>
                        <?php else: ?>
                            <tr>
                        <?php endif; ?>
                        <td><?= $no; ?></td>
                        <td>Nama ke <?= $i; ?></td>
                        <?php for( $j = $i; $j >= $i; $j--) : ?>
                            <td>Kelas ke <?= $j; ?></td>
                        <?php endfor; ?>
                            </tr>
                <?php $no++; ?>
            <?php endfor; ?>


            <br>

            <?php
                $no = 1;
                for($i = 1; $i <= 5; $i++) {
                    if($i % 2 == 0) :
                        echo "<tr class= 'td'>";
                        else :
                            echo "<tr>";
                        endif;
                        echo "<td>$no</td>";
                        echo "<td>Nama ke $i</td>";
                            for($j = $i; $j >= $i; $j--) {
                                echo "<td>Kelas ke $j </td>";
                                
                            }
                    echo "</tr>";
                    $no++;
                }
            ?>