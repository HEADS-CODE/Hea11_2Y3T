<?php include("data.php"); ?>
<link rel="stylesheet" href="styles.css">

<div class="container">
    <table>
        <!--Title-->
        <tr>
            <td colspan="2" class="title">
                <b>Educational Attainment</b>
            </td>
        </tr>
        <!--Content-->
        <tr>
            <td colspan="2">
                <table>
                    <tr>
                        <td><b>School</b></td>
                        <td><b>Year</b></td>
                    </tr>
                    <tr>
                        <td><?= $college; ?></td>
                        <td><?= $collegeYear; ?></td>
                    </tr>
                    <tr>
                        <td><?= $shs; ?></td>
                        <td><?= $shsYear; ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <!--Back Btn-->
        <tr>
            <td colspan="2">
                <a href="index.php">← Back to Menu</a>
            </td>
        </tr>
    </table>
</div>