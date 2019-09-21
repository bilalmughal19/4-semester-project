<style type="text/css">
img
{
border:5px solid black;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 10;
  overflow: hidden;
  background-color:#6FF;
}

li {
  float:left;
}

li a {
  display: block;
  color:#000;
  text-align:justify;
  padding: 14px 16px;
  text-decoration:blink;
}

li a:hover {
  background-color:#969;
}
</style>
<header>
<ul>
  <li><a class="active" href="home.html">Home</a></li>
  <li><a href="about.html">About us</a></li>
  <li><a href="gallery.html">Gallery</a></li>
  <li><a href="contact.html">Contact us</a></li>
</ul>

</header>
<?php
$dir          = 'uploads';
$file_display = array(
    'jpg',
    'jpeg',
    'png',
    'gif'
);

if (file_exists($dir) == false) {
    echo 'Directory \''. $dir. '\' not found!';
} else {
    $dir_contents = scandir($dir);

    foreach ($dir_contents as $file) {
        $file_type = strtolower(end(explode('.', $file)));

        if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
            echo '<img src="'. $dir. '/'. $file. '" alt="'. $file. $file, '" width=200 height=300 />';
        }
    }
}

?>
<footer>
<div class="img2">
<img src="https://media.nngroup.com/media/editor/2019/01/16/clarity.png" height="250px" width="1490px"/>
</div>
</footer>