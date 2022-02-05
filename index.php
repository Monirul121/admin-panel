<?php require("body.php"); ?>
<body>
    <?php require("head.php"); ?>
    <section id="content-flex">
        <div class="content-flex">
            <div class="site-bar">
                <?php require("site-bar.php"); ?>    
            </div>
            <div class="content-area">
                <div class="Dashboard">
                    <p>Dashboard</p>
                </div>
                <div class="content-section">
                   <?php require("dex.php"); ?>
                </div>
        </div>
    </section>
</body>
</html>