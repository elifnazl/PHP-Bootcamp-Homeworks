<?php

/************************** ODEV **************************
 * posts.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - functions.php içerisinde oluşturacağınız `getRandomPostCount` fonksiyonunuza min
 * ve max değerleri gönderip bu fonksiyondan rastgele bir tam sayı elde etmeniz
 * gerekiyor. (min ve max için istediğiniz değerleri seçebilirsiniz. Random bir
 * tam sayı elde etmek için `rand` (https://www.php.net/manual/en/function.rand.php)
 * fonksiyonunu kullanabilirsiniz.)
 *
 * - Elde ettiğiniz bu sayıyı da kullanarak `getLatestPosts` fonksiyonunu
 * çalıştırmalısınız. Bu fonksiyondan aldığınız diziyi kullanarak `post.php` betik
 * dosyasını döngü içinde dahil etmeli ve her yazı için detayları göstermelisiniz.
 *

/************************** ODEV **************************/

$server=basename($_SERVER['REQUEST_URI']);
$file=basename(__FILE__);
   
if($server!=$file) {
    function getLatestPosts($count = 5){
        $posts = [];
        $postTypes = ["urgent", "warning", "normal"];
        for($i=1; $i<=$count; $i++) {
            do {
                $id = rand(1, 1000);
            }
            while (array_key_exists($id, $posts));
            $type = $postTypes[rand(0, count($postTypes)-1)];
            $posts[$id] = [
            "title" => "Yazı " . $i,
            "type" => $type
        ];
    }
    return $posts;
}
function getPostDetails($id, $title){
    echo "<h1>".$title." (#".$id.")</h1>";
    echo <<<EOT
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a iaculis justo, ac molestie justo. Integer semper nibh non imperdiet blandit. Integer nec diam eget sapien viverra rutrum ut eu justo. Suspendisse efficitur pretium eleifend. Vivamus ex nibh, euismod eget massa ut, accumsan ullamcorper nisi. Phasellus tristique magna et nibh dictum rhoncus. Phasellus at metus quis mi egestas blandit. Vestibulum lacinia ut tortor nec consectetur. Nulla sed risus ut est imperdiet vulputate ac non quam. Aliquam viverra erat vitae diam commodo, et molestie metus ultricies. Praesent rutrum urna a nisi egestas aliquam sit amet eu eros.
    </p>
    EOT;
}   
function getRandomPostCount($mindeg, $maxdeg){
    return rand($mindeg,$maxdeg);
}
else {
   echo "403 Forbidden";
   exit();

}  

// Aşağıya fonksiyonu tanımlayabilirsiniz.
