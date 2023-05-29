<header>
        Internet Based Programming
        <div class="menu">
            <ul>
                <?php
                    $sql = "select * from menu";
                    $result = $connection->query($sql);
                    $count = $result->num_rows;

                    for($i = 0; $i < $count; $i++){
                        $row = $result->fetch_assoc();
                        $text = "<li><a href='index.php?page=" . $row["menuLink"] . "'>" . $row["menuName"] . "</a></li>";
                        echo $text;
                    }
                ?>
            </ul>
        </div>
        
    </header>