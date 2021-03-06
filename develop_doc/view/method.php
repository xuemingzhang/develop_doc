<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>在线接口列表<?php echo ' | ' . PRODUCT_NAME; ?></title>
    <link rel="stylesheet" href="static/css/semantic.min.css">
</head>
<body>
    <div class="ui large top fixed menu transition visible" style="display: flex !important;">
        <div class="ui container">
            <div class="header item"><?echo PRODUCT_NAME;?></div>
            <?php doc_page_nav(); ?>
        </div>
    </div>
    <div class="ui text container" style="max-width: none !important; margin-top: 50px;">
        <div class="ui floating message">
            <h1 class="ui header">接口列表</h1>
            <table class="ui black celled striped table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>接口服务</th>
                    <th>接口名称</th>
                    <th>更多说明</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $num = 1;
                if (!empty($methods)) {
                    foreach ($methods as $key => $item) {
                        if (substr($item['service'], -8) == ".testing") {
                            continue;
                        }
                        $NO = $num++;
                        echo '<tr>';
                        echo '<td>' . $NO . '</td>';
                        echo '<td><a href="index.php?c=doc&f=' .  $file . '&fc=' . $fileData['file_name'] . '&m=' . $item['service'] . '" target="_blank">' . $item['service'] . '</a></td>';
                        echo '<td>' . $item['title'] . '</td>';
                        echo '<td>' . $item['desc'] . '</td>';
                        echo "</tr>";
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
        <p><?php echo COPYRIGHT ?><p>
    </div>
</body>
</html>