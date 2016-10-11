<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script>
        window.addEventListener("load",function () {
            setTimeout(hideURLbar(),0);
        },false);
        function hideURLbar() {
            window.scrollTo(0,1);
        }
    </script>
</head>
<body>
    <div id="container">
        <header id="head">My blog</header>
        <div class="wrapper">
            <div id="search"></div>
            <div id="content-info">
                <div id="person">
                    <a href="" class="close"></a>
                    <img src="img/portrait.jpg" alt="">
                    <h3>Zhao Liting</h3>
                    <a href="#">
                        <h5>This Website Designer</h5>
                    </a>
                    <ul class="person-button">
                        <li>
                            <a href="" class="facebook"></a>
                        </li>
                        <li>
                            <a href="" class="twitter"></a>
                        </li>
                        <li>
                            <a href="" class="gp"></a>
                        </li>
                        <li>
                            <a href="" class="instagram"></a>
                        </li>
                        <li>
                            <a href="" class="behance"></a>
                        </li>
                    </ul>
                </div>
                <div id="product">
                    <div class="close"></div>
                </div>
            </div>

            <div id="skill-percent"></div>
            <div id="login"></div>
            <div id="internet"></div>
        </div>
        
        <footer id="foot"></footer>
    </div>
    
    <script src="js/jquery-1.12.4.min.js"></script>
    <script>
        $(function () {
            
        });
    </script>
</body>
</html>