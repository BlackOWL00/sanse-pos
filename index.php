<?php
require "config/config.php";
require "config/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Camp Boomy Cafe</title>
</head>
<body>
    <div class="header">
        <img src="img/icon.svg" alt="coffee-bean" id="icon">
        <span id="nav-label"> Camp Boomy Cafe</span>
    </div>
    <div class = "intro">
        <div class="motto">
            <h1 id="motto-text">Do It Better Than Your Best Yesterday</h1>
        </div>
        <div class="milktea">
            <img src="img/milktea.svg" alt="milktea">
        </div>
        <div class="signin">
            <span class = "signinfont">Sign In</span>
            <form method = 'POST' class="testform" action = "<?php echo $_SERVER['PHP_SELF'];?>">
                <input type="text" name = "name" placeholder = "Username">
                <input type="password" name = "pw" placeholder = "Password">
                <button type="submit" name = "submit">Submit</button>
            </form>
        </div>
    </div>
    <div class="main">
            <div class="box">
                <div class="left">
                    <img src="img/scroll.svg" alt="scroll">
                    <span class="policyheader">Mission</span>
                    <p class="policytext">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, dolor harum blanditiis quia ipsa assumenda perferendis, corporis doloremque non similique nam aspernatur necessitatibus, ea voluptatem nesciunt sint corrupti nobis? Architecto?
                        Quos facere in, quasi itaque ratione dolorem, enim doloremque rerum repellendus accusamus cupiditate recusandae sit vitae aliquam aut et. Facere, facilis maxime provident quos voluptatibus molestiae assumenda totam rem enim.
                        Iusto cupiditate ex omnis tempore distinctio voluptas molestiae esse repellendus officia provident blanditiis officiis dolorum modi, voluptatem iure culpa temporibus pariatur ab qui! Aperiam neque minima pariatur tempora quod exercitationem.
                        Quaerat molestias repudiandae laborum dolores ea minus iste voluptas aperiam, cum ipsum dolore ducimus laudantium laboriosam, consectetur et velit facilis possimus aspernatur expedita error! Iste nulla fugit omnis ducimus velit?
                    </p>
                </div>
                <div class="right">
                    <img src="img/torch.svg" alt="torch">
                    <span class ="policyheader">Vision</span>
                    <p class="policytext">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatibus quasi id, saepe at non, illo vero perferendis aspernatur expedita distinctio amet architecto laudantium maiores. Debitis mollitia velit et porro.
                        Ab modi itaque dignissimos eligendi dicta voluptas doloremque doloribus expedita quidem repudiandae molestiae ex odio delectus hic alias nostrum nulla, labore, maxime ducimus cum. Sed, dolores. Quis dolorem quidem veniam.
                        At ut nemo labore. Officia, animi mollitia? Corporis recusandae odit unde voluptas quas vel dicta commodi at magnam. Ipsa error ea quis in minus molestias corrupti aliquid doloremque ex sapiente!
                    </p>
                </div>
            </div>
    </div>
    <div class="secondary">
        <span id="aboutheader">Our Story</span>
        <p class="story">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum blanditiis quo beatae tempore, fugit iure eveniet aperiam nisi tenetur neque magni eius voluptates veritatis in. Ex placeat exercitationem ipsum consequatur!
        Nemo consectetur facere non labore. Eos provident veniam a dolores consequuntur illo porro excepturi! Dolor ratione sunt, deserunt voluptatem facere expedita! Aspernatur dolore officiis quaerat accusamus corrupti? Qui, incidunt corporis.
        Maiores quidem unde, sequi quia laudantium molestiae rerum ratione rem ut, impedit dolorem maxime quas voluptates natus aliquid, aut laborum voluptatem dolorum illum neque autem libero molestias at fuga? Exercitationem!
        Nam modi assumenda quisquam, dolores qui quo eveniet perspiciatis voluptates similique iusto magnam mollitia praesentium nisi corrupti! Facere quia minus perferendis accusantium atque mollitia, autem, asperiores vitae dolore voluptas nam.
        Magni labore veritatis magnam voluptatibus, maxime quidem fuga corrupti iusto! Doloribus corporis maiores nisi distinctio, nemo sit reiciendis eligendi quam harum necessitatibus quasi consectetur iusto consequatur quidem velit facilis alias?
        Ipsa dignissimos pariatur assumenda, ullam nobis ipsum itaque! Ullam rem vitae consectetur beatae similique voluptatum nobis magnam, et earum! Quasi deleniti corrupti et nam voluptas, explicabo voluptate nobis architecto excepturi.
        Dolorem quo veniam voluptate quos debitis quia qui obcaecati delectus libero, non hic amet at ullam minima magnam id reprehenderit, voluptatem repudiandae accusantium! Quae dolores nam quod inventore obcaecati sapiente.
        Perspiciatis excepturi veniam non nobis voluptate debitis labore mollitia consequuntur veritatis! Rem alias quibusdam ullam dolores? Ipsa, nostrum a. Minima corrupti quae ut porro magnam illum sapiente amet voluptatem eum!
        Dignissimos iste, pariatur exercitationem dolores quibusdam praesentium voluptatem quos rem beatae aliquam asperiores reiciendis, minus accusantium quasi architecto ullam illum quam ex sed porro ducimus magnam magni ipsa? Perspiciatis, ex?
        Soluta natus aspernatur ipsa architecto odio! Iusto nemo libero illum perferendis recusandae cumque impedit laudantium, iure, quos, atque necessitatibus ea. Eos dignissimos rem accusantium, debitis repellat asperiores quae itaque soluta!
        Repellendus ipsum odio commodi voluptas. Repellat autem omnis nesciunt? Ad architecto iste quod iusto dolorum eligendi vero voluptatibus numquam laborum error aperiam animi, quo recusandae doloribus tenetur? Facere, incidunt veritatis?
        Dolore placeat quidem accusamus mollitia, numquam laudantium laborum consectetur dolorum pariatur optio? Ea hic doloremque natus quidem fugit rem magni, iste doloribus omnis itaque sint ducimus ipsa odit, reprehenderit quis.
        Pariatur mollitia tenetur, quis atque, nostrum vel totam ipsa fuga quasi delectus voluptate facilis laboriosam fugit? Corrupti magnam cupiditate facilis at molestias, nemo totam illum non rerum, libero, voluptatum fugiat.
        Necessitatibus repellat aliquam, magni illum saepe voluptatem natus est ipsam aperiam. Nulla molestiae sed fugiat facilis repellendus tenetur, obcaecati ex magni earum qui? Vel eveniet, itaque incidunt atque ratione dolor?
        Voluptatibus eius ut nihil corrupti, doloremque debitis nesciunt sed dignissimos hic reprehenderit officia alias error eos atque recusandae vel deserunt! Laudantium illo esse iste quo nisi expedita aperiam incidunt ipsum.</p>
    </div>
    <div class="footer">
        <span class="footnote">Developed by: Albert Alay-ay</span><br>
        <span class="footnote">Send me an email: @alayaysantos@gmail.com</span><br>
        <a href="https://github.com/">Github  </a>
        <a href="https://www.facebook.com/soldierofsolitude">Facebook</a><br>
        <span class="footnote">For old-fashions: 299 Shoe Avenue, Sto. Nino, Marikina City, Ph</span>
    </div>
</body>
</html>