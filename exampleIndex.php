<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>World's worst web page</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Categories</a>
            <ul>
                <li><a href="#">Category 1</a></li>
                <li>Category 2</li>
                <li>Category 3</li>
                <li>Category 4</li>
            </ul>
        </li>
    </ul>
</nav>
<div id="sidebar">
    <?php
    echo "hello world";
    ?>
    <ol>
        <?php
        for ($i = 0; $i < 10; $i++) {
            $j = "hello $i world";
            if ($i % 2 == 0) {
                ?>
                <li>item <?=$j?> <?php echo $i?> <?php print $i?></li>
                <?php
            }
        }
        ?>
    </ol>
</div>
<main>
    <h1>World's worst web page</h1>

    <form action="info.php" method="post">
        Address <input type="text" name="address" id="addressfield" /><br />
        Subject <input type="text" name="subject" id="subjectfield"  /><br />
        <textarea name="body"></textarea>
        <input type="submit" value="Send" />
    </form>

    <button id="sendbutton">Use fetch to fake form submission</button>


    <form action="index.php" method="get">
        Pick a colour <input type="text" name="colour" />
        <input type="submit" value="Go" />
    </form>


    <?php
    if (isset($_REQUEST['colour'])) {
        ?>
        Last time you picked <?=$_REQUEST['colour']?>
        <?php
    }
    ?>
    <!-- matches p.tree: -->
    <p class="tree bottle">Hello world</p>
    <p id="hello">
        A <a href="https://google.com/">link to Google</a>.
        <!-- matches p .tree: -->
        <span class="tree">a tree span</span>
    </p>
    <!-- this is a comment -->
    <img id="firstbridge" src="bridge.jpg" alt="A bridge" /><img src="fossil.jpg" alt="" />
    <video>
    </video>

    <audio controls>

    </audio>
    <picture>
        <source srcset="bridge.jpg" type="image/jpeg" media="(min-width: 800px)" />
        <img src="bridge.jpg" alt="A bridge" />
    </picture>
    <ul class="tree">
        <li>Item A</li>
        <li>Item B<br />
            The second line</li>
        <li>Item C</li>
        <li>Item D</li>
    </ul>
    <ol class="bottle">
        <li>Item A</li>
        <li>Item B<br />
            The second line</li>
        <li>Item C</li>
        <li>Item D</li>
    </ol>
    <hr />
    <section id="the-table">

        <table>
            <tr>
                <th>City</th>
                <th>Country</th>
            </tr>
            <tr>
                <td>
                    Wellington
                </td>
                <td rowspan="2">
                    New Zealand
                </td>
            </tr>
            <tr>
                <td>Auckland</td>
            </tr>
        </table>
        <section>

        </section>

    </section>
    <div>
        <p>
            This is a <em>second</em> paragraph with some
            more text in it that I will repeat.
            This <strong>is</strong> a second paragraph with some
            more text in it that I will repeat.
            This <span class="qwerty">is a second paragraph</span> with some
            more text in it that I will repeat.
        </p>
    </div>

    <div class="gallery-item">
        <img  src="bridge.jpg" alt="A bridge" />
        <div class="caption">
            A photo of a bridge with a caption that takes up multiple lines
        </div>
    </div>
    <div class="gallery-item">
        <img  src="mountain.jpg" alt="A mountain" />
        <div class="caption">
            A photo of a mountain with a caption that takes up multiple lines
        </div>
    </div>
    <div id="multicol-area">
        <p>
            This is a <em>second</em> paragraph with some
            more text in it that I will repeat.
            This <strong>is</strong> a second paragraph with some
            more text in it that I will repeat.
            This <span class="qwerty">is a second paragraph</span> with some
            more text in it that I will repeat.
        </p>
        <p>
            This is a <em>second</em> paragraph with some
            more text in it that I will repeat.
            This <strong>is</strong> a second paragraph with some
            more text in it that I will repeat.
            This <span class="qwerty">is a second paragraph</span> with some
            more text in it that I will repeat.
        </p>
        <p>
            This is a <em>second</em> paragraph with some
            more text in it that I will repeat.
            This <strong>is</strong> a second paragraph with some
            more text in it that I will repeat.
            This <span class="qwerty">is a second paragraph</span> with some
            more text in it that I will repeat.
        </p>
        <p>
            This is a <em>second</em> paragraph with some
            more text in it that I will repeat.
            This <strong>is</strong> a second paragraph with some
            more text in it that I will repeat.
            This <span class="qwerty">is a second paragraph</span> with some
            more text in it that I will repeat.
        </p>
        <p>
            This is a <em>second</em> paragraph with some
            more text in it that I will repeat.
            This <strong>is</strong> a second paragraph with some
            more text in it that I will repeat.
            This <span class="qwerty">is a second paragraph</span> with some
            more text in it that I will repeat.
        </p>
        <p>
            This is a <em>second</em> paragraph with some
            more text in it that I will repeat.
            This <strong>is</strong> a second paragraph with some
            more text in it that I will repeat.
            This <span class="qwerty">is a second paragraph</span> with some
            more text in it that I will repeat.
        </p>
        <p>
            This is a <em>second</em> paragraph with some
            more text in it that I will repeat.
            This <strong>is</strong> a second paragraph with some
            more text in it that I will repeat.
            This <span class="qwerty">is a second paragraph</span> with some
            more text in it that I will repeat.
        </p>
        <p>
            This is a <em>second</em> paragraph with some
            more text in it that I will repeat.
            This <strong>is</strong> a second paragraph with some
            more text in it that I will repeat.
            This <span class="qwerty">is a second paragraph</span> with some
            more text in it that I will repeat.
        </p>
    </div>
    <p>
        This is a <em>second</em> paragraph with some
        more text in it that I will repeat.
        This <strong>is</strong> a second paragraph with some
        more text in it that I will repeat.
        This <span class="qwerty">is a second paragraph</span> with some
        more text in it that I will repeat.
    </p>

    <div id="flexbox-example">
        <div id="box1">box 1 text</div>
        <div id="box2">
            something in box 2
        </div>
        <div id="box3">
            <p>
                This is a <em>second</em> paragraph with some
                more text in it that I will repeat.
                This <strong>is</strong> a second paragraph with some
                more text in it that I will repeat.
                This <span class="qwerty">is a second paragraph</span> with some
                more text in it that I will repeat.
            </p></div>
    </div>

    <br /> <br /> <br /><hr /><br /><br /><br />
    <div id="grid-example">
        <div id="gbox1">box 1 text</div>
        <div id="gbox2">
            something in box 2
        </div>
        <div id="gbox3">
            <p>
                This is a <em>second</em> paragraph with some
                more text in it that I will repeat.
                This <strong>is</strong> a second paragraph with some
                more text in it that I will repeat.
                This <span class="qwerty">is a second paragraph</span> with some
                more text in it that I will repeat.
            </p></div>
        <div id="gbox4">
            this is box 4
        </div>
        <div id="gbox5">
            this is box 5
        </div>
    </div>

    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</main>
<script src="scripts/indexjs.js"></script>
</body>
</html>