<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krisis : Home</title>
    <link rel="stylesheet" href="../krisis/main.css">
</head>
<body>
    <div class="container">
        <nav>
            <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Genre</a></li>
            <li><a href="">Forum</a></li>
            <li><a href="">Login</a></li>
            </ul>
        </nav>
        <main>
           <div class="top">
               <a href=""><h2>top article</h2></a>
               <a href=""><h3>artikel ganja</h3></a>
           </div>
            
        <div class="artikel">
        <h2 id='pagename'>featured</h2>
        <br><br><br><br>
            <section>
               <?php 
                for ($i=0; $i < 4; $i++) { 
                    # code...
                ?>
                
                <a href=""><?php echo "<h3 id='pagename'>Genre</h3>"; ?></a>
                <br>
                <br>
                <br>
                <tr>
                <?php 
                for ($j=0; $j < 3; $j++) { 
                    # code...
                ?>
                <br>
                <div class="blok">
                    <td>
                        <a href=""><img src="../krisis/src/1.jpg" alt="img artikel" class="artikelImg"></a>
                        <a href=""><p>Spiderman : Tokoh Superhero Berkekuatan Sederhana, tetapi Paling Populer di Dunia</p></a>
                    </td>
                </div>
                    <br>
                    <br>
                    <?php }  ?>
                </tr>
                <br>
                
                <?php }  ?>
                
            </section>
        </div>
        <div class="page">
            <a href=""><p>1</p></a>
            <a href=""><p>2</p></a>
            <a href=""><p>3</p></a>
        </div>
        </main>
        <footer>
            <p>copyright here</p>
            <a href=""><img src="" alt="instagram"></a>
            <a href=""><img src="" alt="email"></a>
            <a href=""><img src="" alt="twitter"></a>
            <a href=""><img src="" alt="apa kek"></a>
        </footer>
    </div>
</body>
</html>