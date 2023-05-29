<article>
    <?php
        if(!isset($_GET["page"])){
    ?>

    This is content.
    <div class="box1">Box 1</div>
    <div class="box2">Box 2</div>

    <?php
    
        } 
        else if(isset($_GET["page"]) && $_GET["page"] == "index"){
            header("Location: index.php");
        }else{
            $page = $_GET["page"];
            $sql = "select * from pages where pageName = '" . $page . "'";
            $result = $connection->query($sql);

            $row = $result->fetch_assoc();

            echo $row["content"];
        }
        ?>
</article>