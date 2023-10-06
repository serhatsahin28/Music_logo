<!DOCTYPE html>
<html lang="tr">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="Style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>
<script>


</script>


<body class="bg-black">



  <?php
  include 'connect.php';
  //SELECT * FROM sarkilar s  LEFT JOIN  muzik_set m ON s.Id=müzik_set_Id
  $baglanti = new mysqli("localhost", "root", "", "bootstrap");
  $music_set_query = "SELECT * FROM muzik_set";
  $music_set = $baglanti->query($music_set_query);


  $ortsorgu1 = "SELECT * FROM ort_kisim";
  $mid_content = $baglanti->query($ortsorgu1);



  /*
$liste=array(
      array(
        "baslik1"=>$satir["baslik1"],
        "altbaslik"=>$satir["altbaslik"],
        "kbaslik"=>$satir["kbaslik"],
        "iyazi"=>$satir["iyazi"],
        "kbaslik2"=>$satir["kbaslik2"],
        "iyazi2"=>$satir["iyazi2"],
        "kbaslik3"=>$satir["kbaslik3"],
        "showmore"=>$satir["showmore"],
        "Image"=>"img/".$satir["Image"],
        "small_img1"=>"img/".$satir["small_img1"],
        "small_img2"=>"img/".$satir["small_img2"],
        "small_img3"=>"img/".$satir["small_img3"],
      ),   
      array(
        "baslik1"=>$satir2["baslik1"],
        "altbaslik"=>$satir2["altbaslik"],
        "kbaslik"=>$satir2["kbaslik"],
        "iyazi"=>$satir2["iyazi"],
        "kbaslik2"=>$satir2["kbaslik2"],
        "iyazi2"=>$satir2["iyazi2"],
        "kbaslik3"=>$satir2["kbaslik3"],
        "showmore"=>$satir2["showmore"],
        "Image"=>"img/".$satir2["Image"],
        "small_img1"=>"img/".$satir2["small_img1"],
        "small_img2"=>"img/".$satir2["small_img1"],
        "small_img3"=>"img/".$satir2["small_img1"],
      ),   
      array(
        "baslik1"=>$satir3["baslik1"],
        "altbaslik"=>$satir3["altbaslik"],
        "kbaslik"=>$satir3["kbaslik"],
        "iyazi"=>$satir3["iyazi"],
        "kbaslik2"=>$satir3["kbaslik2"],
        "iyazi2"=>$satir3["iyazi2"],
        "kbaslik3"=>$satir3["kbaslik3"],
        "showmore"=>$satir3["showmore"],
        "Image"=>"img/".$satir3["Image"],
        "small_img1"=>"img/".$satir3["small_img1"],
        "small_img2"=>"img/".$satir3["small_img1"],
        "small_img3"=>"img/".$satir3["small_img1"],
      ),       
);

$liste2=array(

array(
  "resim1"=>"img/".$ortsatir1["resim1"],
  "baslik"=>$ortsatir1["baslik"],
  "yazi"=>$ortsatir1["yazi"],
  "yazi2"=>$ortsatir1["yazi2"],
  "yazi3"=>$ortsatir1["yazi3"],
  "yazi4"=>$ortsatir1["yazi4"]
),
array(
  "resim1"=>"img/".$ortsatir2["resim1"],
  "baslik"=>$ortsatir2["baslik"],
  "yazi"=>$ortsatir2["yazi"],
  "yazi2"=>$ortsatir2["yazi2"],
  "yazi3"=>$ortsatir2["yazi3"],
  "yazi4"=>$ortsatir2["yazi4"]
),
array(
  "resim1"=>"img/".$ortsatir3["resim1"],
  "baslik"=>$ortsatir3["baslik"],
  "yazi"=>$ortsatir3["yazi"],
  "yazi2"=>$ortsatir3["yazi2"],
  "yazi3"=>$ortsatir3["yazi3"],
  "yazi4"=>$ortsatir3["yazi4"]
),
array(
  "resim1"=>"img/".$ortsatir4["resim1"],
  "baslik"=>$ortsatir4["baslik"],
  "yazi"=>$ortsatir4["yazi"],
  "yazi2"=>$ortsatir4["yazi2"],
  "yazi3"=>$ortsatir4["yazi3"],
  "yazi4"=>$ortsatir4["yazi4"]
)


);
*/
  ?>


  <nav class="navbar navbar-expand-lg  enableBlur">
    <div class="container-fluid ">
      <a class="navbar-white disableBlur logo " href="#">Logo</a>
      <button class="navbar-toggler disableBlur" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">

            <span class="visually-hidden">(current)</span>
            </a>

          </li>

        </ul>
        <form class="button1 d-flex me-3">
          <a class="btn log" type="submit">Log in</a>
        </form>
        <form class="button1 d-flex">
          <button class="btn sign" type="submit">Sign up</button>
        </form>

      </div>
    </div>
  </nav>


  <img src="img/WhatsApp Image 2023-02-05 at 19.14.57.jpeg" class="img1 img-fluid bg-black " alt="...">



  <form class="search d-flex  col-4 mx-auto mtr-2" role="search">
    <a class="fa fa-search mt-3 mx-3" href="update.php"></a>

    <input class=" form-control " type="search" placeholder="Find Your Perfect Sound" aria-label="Search">


    </input>

  </form>

  <i class="glyphicon glyphicon-play"></i>
  <div class="container float-center">
    <br><br>
    <br>

    <div class="body2 justify-end">
      <ul class="nav justify-content-center ">

        <li class="nav-item">
          <a class="nav-link text-white" href="#">Ambient</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Electronic</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Funk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Kids</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Orchestral</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Pop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Rock</a>
        </li>

      </ul><br>


      <hr class="bg-secondary">

      <br> <br>
      <?PHP


      $str = '';
      foreach ($music_set as $list) {

        $str .= '
    <div class="row justify-content-end">
      <div class="col-4">
        <img src="img/' . $list["resim_ad"] . '" width="98%" class="img  m-0 mt-1" alt="Responsive image">
      </div>

      

      <div class="col-6 text-light mx-4 ">
        <a class="Abaslik text-left">' . $list["baslik1"] . '</a>
        <p class="yazi"> ' . $list["yazi"] . ' </p>';


        $music_content_query = "SELECT baslik2, img, m.adi as muzisyen_adi, m.avatar_url as muzisyen_avatar
        FROM muzik_set_list msl
        LEFT JOIN sarkilar s ON msl.sarki_Id = s.id
        LEFT JOIN muzisyen m ON s.muzisyen_Id = m.id
        where msl.set_Id=$list[id]";

        $music_content = $baglanti->query($music_content_query);
        foreach ($music_content as $music) {
          $str .= '
            <div class="row">
              <div class="col-2 justify-content-start">
                <img src="img/' . $music["img"] . '" width="80%" class="img2 img-fluid m-1 mt-0" alt="Responsive image">
              </div>

              <div class="col-6 text-light mx-0 mt-2 text-left">
              
                <a class="Kbaslik"href="update.php"> ' . $music["baslik2"] . '</a>
                <p class="iyazi bir"> ' . $music["muzisyen_adi"] . ' </p>
              </div>
            </div>';
        }




        $str .= '
        <div class="d-grid gap-2 col-5 mx-2 mt-4">
          <a class="btn btn-primary btn2 " type="button" href="update.php">Show More </a>
        </div>
      </div>
    </div>
 
<br>
<br><br>
<div class="col-8 mx-auto">
<a class="btn btn-primary btn2 text-light float-center col-2 justify-center" href="update.php" style="text-align: center">Update</a>
        </div>
<hr class="bg-black border-7">
<br>
<br><br>';
      }

      echo $str;

      ?>


      <?php
      $str = '';
      $str .= '<div class="container">
          <div class="row">';
      foreach ($mid_content as $list) {
        $str .= '
  
    <div class="col-6 mx-0 pb-5 mt-2">
      <div class="row">
        <div class="coll col-6  mx-0  ">
          <img src="img/' . $list["resim1"] . '" width="125" class="img rounded float-end" alt="Responsive image">
        </div>
        <div class="col-6 text-light"> 
          <h2 class="h2">' . $list["baslik"] . '</h2>
          
          <p class="p"><i class="fa fa-play"></i>  ' . $list["yazi"] . '</p>
          
          
          <p class="p"> <i class="fa fa-play"></i>  ' . $list["yazi2"] . '</p>
          
          <p class="p"><i class="fa fa-play"></i>  ' . $list["yazi3"] . '</p>
          <a class="renk nav-link text-primary " href="#" style="font-size:.9rem;">' . $list["yazi4"] . '</a>
        </div>
      </div>
    </div>
    

  
';
      }
      $str .= '</div>



<!---İlk 2 resim bitis-->







  <br>
  <br>
  <br>
  <br>
  <br>
</div>';
      echo $str;
      ?>
      <h1 class="col text-center text-white">GENRES</h1>
      <br>
      <div class="cizgi container"> </div>
      <br><br>
      <div class="container col-9 text-center mb-auto">
        <button type="button" class="btn btnn btn-black text-white">Ambient</button>
        <button type="button" class="btn btn-black text-white">Blues</button>
        <button type="button" class="btn btn-black text-white">Electronic</button>
        <button type="button" class="btn btn-black text-white">Folk</button>
        <button type="button" class="btn btn-black text-white">Funk</button>
        <button type="button" class="btn btn-black text-white">Hip-Hop</button>
        <button type="button" class="btn btn-black text-white">Jazz</button>
        <button type="button" class="btn btn-black text-white">Kids</button>
        <button type="button" class="btn btn-black text-white">Orchestral</button>
        <button type="button" class="btn btn-black text-white">Pop</button>
      </div>

      <div class="container text-center">
        <button type="button" class="btn btn-black text-white  text-center">R&B</button>
        <button type="button" class="btn btn-black text-white text-center">Reggae</button>
        <button type="button" class="btn btn-black text-white text-center">Rock</button>
        <button type="button" class="btn btn-black text-white text-center">Soundrack</button>

      </div>



      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>















</body>

</html>