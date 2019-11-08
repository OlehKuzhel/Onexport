
<?php 
require_once 'phpQuery/phpQuery/phpQuery.php';
$testVin = $_POST['mycarvin'];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://vsbrothers.com/en/my-cars.html');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'mycar[vin]='.$testVin);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
$out = curl_exec($ch);
curl_close($ch);

// var_dump($out);

$pq = phpQuery::newDocument($out);

$dateLoad = $pq->find('.image_info')->text();
$cl_title = $pq->find('.cl_title')->text();
$imgs = $pq->find('.cli_main img');
$car_keys = $pq->find('.car_keys b')->text();

$Container = $pq->find('.li_block:nth-child(1)')->html();

$Booking = $pq->find('.crb_bit2 .li_block:nth-child(2)')->html();
$Carrier = $pq->find('.crb_bit2 .li_block:nth-child(3)')->html();
$Vessel = $pq->find('.crb_bit2 .li_block:nth-child(4)')->html();
$Port = $pq->find('.crb_bit2 .li_block:nth-child(5)')->html();
$Destination = $pq->find('.crb_bit2 .li_block:nth-child(6)')->html();
$Loaded = $pq->find('.crb_bit2 .li_block:nth-child(7)')->html();
$Move = $pq->find('.crb_bit2 .li_block:nth-child(8)')->html();
$Odessa = $pq->find('.crb_bit2 .li_block:nth-child(9)')->html();

$year = $pq->find('.phone-table:nth-child(1) tr:nth-child(1) b')->text();

$Make = $pq->find('.phone-table:nth-child(1) tr:nth-child(2) b')->text();
$Model = $pq->find('.phone-table:nth-child(1) tr:nth-child(3) b')->text();
$Drive = $pq->find('.phone-table:nth-child(1) tr:nth-child(4) b')->text();
$Mileage = $pq->find('.phone-table:nth-child(1) tr:nth-child(5) b')->text();
$VIN = $pq->find('.phone-table:nth-child(1) tr:nth-child(6) b')->text();

$Color = $pq->find('.phone-table:nth-child(2) tr:nth-child(1) b')->text();
$Interior = $pq->find('.phone-table:nth-child(2) tr:nth-child(2) b')->text();
$Type = $pq->find('.phone-table:nth-child(2) tr:nth-child(3) b')->text();
$Fuel = $pq->find('.phone-table:nth-child(2) tr:nth-child(4) b')->text();
$Transmission = $pq->find('.phone-table:nth-child(2) tr:nth-child(5) b')->text();

$phone1 = $pq->find('.no-phones .cr_contact tr:nth-child(1) td:nth-child(1) span')->text();
$phone2 = $pq->find('.no-phones .cr_contact tr:nth-child(1) td:nth-child(2) span')->text();
$phone3 = $pq->find('.no-phones .cr_contact tr:nth-child(2) td:nth-child(1) span')->text();
$fax = $pq->find('.no-phones .cr_contact tr:nth-child(2) td:nth-child(2) span')->text();
$email = $pq->find('.no-phones .cr_contact tr:nth-child(3) td:nth-child(1) a')->text();


 ?>

<!doctype html>
<html lang=ru>
   <head>
      <meta charset=UTF-8>
      <title>Alego.agency</title>
      <meta content=ru http-equiv=content-language>
      <meta content="Alego.agency" name=description>
      <meta content="Alego.agency" name=keywords>
      <meta content="Alego.agency" property=og:title>
      <meta content=website property=og:type>
      <meta content=img/title.jpg property=og:image>
      <meta content="Alego.agency" property=og:description>
      <meta content="width=device-width,user-scalable=no"name=viewport id=viewport>
      <link href=favicon.ico rel="shortcut icon"type=image/x-icon>
      <link href="css/main.css" rel="stylesheet">
      <link href="css/media.css" rel="stylesheet">
   </head>
   <body >
      <header class="section section-header">
         <div class="wrapper">
            <div class="header">
               <a href="#" class="link link--logo"><img src="img/logo-main-white.png" alt="logo-main-white"></a>
               <div class="header-content">
                  <div class="header-content__select">
                     <div class="header-content__select-tabs">
                        <div class="header-content__select-tab">
                           <div class="header-content__select-row">
                              <a href="#" class="link link--lang" data-contry="GE">Geo</a>
                              <a href="#" class="link link--lang" data-contry="GB">Eng</a>
                              <a href="#" class="link link--lang" data-contry="UA">Ua</a>
                              <a href="#" class="link link--lang" data-contry="AZ">Aze</a>
                              <a href="#" class="link link--lang" data-contry="AM">Arm</a>
                           </div>
                        </div>
                        <a href="#" class="link link--select">
                           <svg viewBox="0 0 5 7" width="5" height="7" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M.505 3.5c0-.125.048-.25.143-.347l3.01-3.01a.49.49 0 1 1 .694.694L1.688 3.5l2.663 2.663a.49.49 0 0 1-.693.693l-3.01-3.01A.489.489 0 0 1 .505 3.5z" fill="#fff"/>
                           </svg>
                           <i class="flag-RU"></i> <span>Country</span>
                        </a>
                     </div>
                     <div class="header-content__select-tabs">
                        <div class="header-content__select-tab">
                           <div class="header-content__select-row">
                              <a href="#" class="link link--lang" data-lang="GE">Geo</a>
                              <a href="#" class="link link--lang" data-lang="GB">Eng</a>
                              <a href="#" class="link link--lang" data-lang="UA">Ua</a>
                              <a href="#" class="link link--lang" data-lang="AZ">Aze</a>
                              <a href="#" class="link link--lang" data-lang="AM">Arm</a>
                           </div>
                        </div>
                        <a href="#" class="link link--select">
                           <svg viewBox="0 0 5 7" width="5" height="7" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M.505 3.5c0-.125.048-.25.143-.347l3.01-3.01a.49.49 0 1 1 .694.694L1.688 3.5l2.663 2.663a.49.49 0 0 1-.693.693l-3.01-3.01A.489.489 0 0 1 .505 3.5z" fill="#fff"/>
                           </svg>
                           <i class="flag-RU"></i> <span>Language</span>
                        </a>
                     </div>
                  </div>
                  <div class="header-content__bittons">
                     <a href="#" class="btn btn--action">Registration</a>
                     <a href="#" class="btn btn--action">Login</a>
                  </div>
               </div>
               <a href="#" class="link link--menu ">
                  <svg viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <rect width="30" height="2" fill="white"/>
                     <rect y="9" width="30" height="2" fill="white"/>
                     <rect y="9" width="30" height="2" fill="white"/>
                     <rect y="18" width="30" height="2" fill="white"/>
                  </svg>
               </a>
            </div>
         </div>
      </header>
      <section class="section section-lot">
         <div class="wrapper">
            <div class="lot">
               <div class="lot-thanks">
                  <p class="paragraph paragraph--thanks">
                     Thank you for choosing our company! Onexport.inc
                  </p>
               </div>
            </div>
         </div>
         <div class="wrapper">
            <div class="lot">
               <div class="lot-forms">
                  <p class="paragraph paragraph--forms">To find your container number, please enter:</p>
                  <div class="lot-forms__row">
                     <form class="form-search" action="cars.php"  method="post">
                        <div class="form-search__row">
                           <input type="search" class="field field--search" id="search-vin" name="mycarvin" aria-label="Find a car by VIN code" placeholder="Enter VIN code" required>
                           <button class="btn btn--search" type="submit">
                              <span>Search</span>
                              <svg viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M20.225 16.8l-4.588-4.59a8.831 8.831 0 0 1-2.652 2.652l4.589 4.589a1.874 1.874 0 1 0 2.651-2.651zM15.776 7.5a7.5 7.5 0 1 0-15.001 0 7.5 7.5 0 0 0 15 0zm-7.5 5.625A5.63 5.63 0 0 1 2.65 7.5a5.631 5.631 0 0 1 5.625-5.625A5.631 5.631 0 0 1 13.9 7.5a5.631 5.631 0 0 1-5.625 5.625z" fill="#fff"/>
                                 <path d="M3.9 7.5h1.25a3.129 3.129 0 0 1 3.125-3.125v-1.25A4.38 4.38 0 0 0 3.9 7.5z" fill="#fff"/>
                              </svg>
                           </button>
                        </div>
                     </form>
                     <p class="or">Or</p>
                     <form class="form-search" method="POST" action="container.php">
                        <div class="form-search__row">
                           <input type="search" class="field field--search" id="search-number" name="container" aria-label="Find a car by VIN code" placeholder="Enter container number" required>
                           <button id="tracking" class="btn btn--search" type="submit">
                              <span>Search</span>
                              <svg viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M20.225 16.8l-4.588-4.59a8.831 8.831 0 0 1-2.652 2.652l4.589 4.589a1.874 1.874 0 1 0 2.651-2.651zM15.776 7.5a7.5 7.5 0 1 0-15.001 0 7.5 7.5 0 0 0 15 0zm-7.5 5.625A5.63 5.63 0 0 1 2.65 7.5a5.631 5.631 0 0 1 5.625-5.625A5.631 5.631 0 0 1 13.9 7.5a5.631 5.631 0 0 1-5.625 5.625z" fill="#fff"/>
                                 <path d="M3.9 7.5h1.25a3.129 3.129 0 0 1 3.125-3.125v-1.25A4.38 4.38 0 0 0 3.9 7.5z" fill="#fff"/>
                              </svg>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="lot-content">
                  <div class="lot-content__sliders">
                     <div class="lot-content__big swiper-container">
                        <div class="lot-name">
                           <p><?php echo $cl_title; ?></p>
                        </div>
                        <div class="swiper-wrapper">
                           <?php 

                              foreach ($imgs as $img) {

      $pqLink = pq($img); //pq делает объект phpQuery
      $text = $pqLink->attr('src');
      echo '<a href="https://vsbrothers.com'.$text.'" class="lot-content__bslide swiper-slide " data-fancybox="gallery">';
      echo '<img src="https://vsbrothers.com'.$text.'" alt="">';
      echo '</a>';
      
   }
                            ?>
                          
                        </div>
                        <div class="lot-nav">
                           <a href="#" class="link link--nav lot--prev bd">
                              <svg viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M0 11.974c0-.415.168-.83.503-1.147L11.063.868a1.794 1.794 0 0 1 2.433 0c.672.633.672 1.66 0 2.294l-9.344 8.812 9.344 8.811c.671.634.671 1.66 0 2.294a1.794 1.794 0 0 1-2.432 0L.504 13.12A1.571 1.571 0 0 1 0 11.974z" fill="#fff"/>
                              </svg>
                           </a>
                           <a href="#" class="link link--nav lot--next bd">
                              <svg viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14 11.974c0 .415-.168.83-.504 1.146l-10.56 9.96a1.794 1.794 0 0 1-2.432 0 1.558 1.558 0 0 1 0-2.295l9.344-8.811L.504 3.162a1.557 1.557 0 0 1 0-2.294 1.794 1.794 0 0 1 2.432 0l10.56 9.959c.336.317.504.732.504 1.147z" fill="#fff"/>
                              </svg>
                           </a>
                        </div>
                     </div>
                     <div class="lot-content__description">
                        <p class="paragraph paragraph--up"><?php echo $dateLoad; ?></p>
                        <div class="download">
                           <a href="#" class="link link--download">Email Photos</a>
                           <a href="#" class="link link--download">Download all photos</a>
                        </div>
                        <h5 class="title title--port">Port Photos</h5>
                     </div>
                     <div class="lot-content__padding">
                        <div class="lot-content__little swiper-container">
                           <div class="swiper-wrapper">
                              
                              <?php 

                              foreach ($imgs as $img) {

      $pqLink = pq($img); //pq делает объект phpQuery
      $text = $pqLink->attr('src');
      echo '<div class="lot-content__lslide swiper-slide">';
      echo '<img src="https://vsbrothers.com'.$text.'" alt="">';
      echo '</div>';
      
   }
                            ?>
                           </div>
                        </div>
                        <div class="lot-lnav">
                           <a href="#" class="link link--nav lotl--prev bd">
                              <svg viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M0 11.974c0-.415.168-.83.503-1.147L11.063.868a1.794 1.794 0 0 1 2.433 0c.672.633.672 1.66 0 2.294l-9.344 8.812 9.344 8.811c.671.634.671 1.66 0 2.294a1.794 1.794 0 0 1-2.432 0L.504 13.12A1.571 1.571 0 0 1 0 11.974z" fill="#fff"/>
                              </svg>
                           </a>
                           <a href="#" class="link link--nav lotl--next bd">
                              <svg viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14 11.974c0 .415-.168.83-.504 1.146l-10.56 9.96a1.794 1.794 0 0 1-2.432 0 1.558 1.558 0 0 1 0-2.295l9.344-8.811L.504 3.162a1.557 1.557 0 0 1 0-2.294 1.794 1.794 0 0 1 2.432 0l10.56 9.959c.336.317.504.732.504 1.147z" fill="#fff"/>
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="lot-content__info">
                     <div class="keys">
                        <div class="keys-left">
                           <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#keys)" fill="#fff">
                                 <path d="M39.872 4.138a.638.638 0 0 0-.617-.618l-4.15-.128a.638.638 0 0 0-.636.803l.346 1.287-1.287-.345a.638.638 0 0 0-.782.781l.346 1.288-1.288-.345a.638.638 0 0 0-.781.78l.345 1.288-1.288-.345a.638.638 0 0 0-.616.165l-1.803 1.804a.637.637 0 0 0-.165.616l.345 1.287-1.288-.345a.638.638 0 0 0-.616.165l-2.484 2.485-.959-.934c-1.018-.988-2.038-1.975-3.008-3.01a5.673 5.673 0 0 0-1.53-1.149c-.415-.207-.939-.322-1.475-.322a.641.641 0 0 0-.074.004c-1.44.17-2.356 1.156-3.165 2.027-.154.166-.3.323-.449.475a.638.638 0 0 0 .91.894c.161-.164.32-.335.474-.5.714-.77 1.389-1.495 2.342-1.624.323.005.638.072.867.187.392.196.711.496 1.048.77.133.109.245.242.364.366.912.957 1.86 1.878 2.808 2.798.41.397.812.789 1.21 1.18.03.086.08.165.146.23l2.167 2.167c.364.365.678.74.792 1.252.083.372.052.764-.085 1.12l-.417.625c-2.898 3.045-5.738 5.838-8.744 8.795l-1.211 1.192a.637.637 0 1 0 .895.909l1.21-1.192c2.957-2.908 22.245-22.264 22.245-22.264a.638.638 0 0 0 .186-.47l-.128-4.15zm-13.83 13.291a51.222 51.222 0 0 0-1.684-1.77l2.22-2.22 2 .535a.638.638 0 0 0 .78-.78l-.535-2 1.283-1.282 1.999.535a.638.638 0 0 0 .78-.78l-.344-1.288 1.287.345a.638.638 0 0 0 .781-.781l-.345-1.288L35.552 7a.638.638 0 0 0 .78-.78l-.408-1.526 2.692.083.015.476-12.383 12.383-.207-.207zm1.175 2.122a3.232 3.232 0 0 0-.152-.643 8.489 8.489 0 0 0-.067-.218L38.685 7.003l.032 1.048-11.5 11.5zM14.273 33.42a.638.638 0 0 0-.902-.022c-.213.203-.412.415-.605.62-.333.356-.668.722-1.072 1-.428.294-.788.276-1.29.262a1.162 1.162 0 0 1-.379-.059c-.285-.099-.54-.314-.79-.48-.84-.841-1.692-1.674-2.516-2.48-1.65-1.612-3.354-3.279-4.983-5.02a1.805 1.805 0 0 1-.456-1.095c-.026-.331.027-.92.265-1.18 2.094-2.298 4.292-4.443 6.418-6.518 1.295-1.263 2.633-2.569 3.937-3.898a.638.638 0 0 0-.91-.893 251.677 251.677 0 0 1-3.917 3.878C4.91 19.645 2.675 21.828.536 24.18c-.234.258-.377.731-.452 1.062a3.242 3.242 0 0 0 .713 2.864c1.65 1.764 3.369 3.444 5.03 5.068.836.818 1.701 1.663 2.552 2.514.803.803 2.335 1.166 3.408.736a.817.817 0 0 0 .027-.011c.794-.361 1.347-.95 1.882-1.52.19-.202.368-.392.555-.571a.638.638 0 0 0 .022-.902z"/>
                                 <path d="M22.724 17.54a2.272 2.272 0 0 0-3.18 0c-.866.865-.865 2.317 0 3.181.416.417 1.003.625 1.59.625.587 0 1.174-.208 1.59-.625a2.272 2.272 0 0 0 0-3.18zm-.901 2.28a.987.987 0 0 1-1.378 0 .985.985 0 0 1 0-1.378.985.985 0 0 1 1.378 0 .986.986 0 0 1 0 1.377zM19.244 21.078l-3.713-3.713a2.79 2.79 0 0 0-1.986-.823 2.79 2.79 0 0 0-1.986.823L8.45 20.473v.001l-3.11 3.108a2.812 2.812 0 0 0 0 3.973l3.714 3.713a2.79 2.79 0 0 0 1.987.823 2.79 2.79 0 0 0 1.986-.823l3.108-3.108 3.11-3.11a2.812 2.812 0 0 0 0-3.972zm-7.119 9.289c-.29.29-.675.449-1.084.449-.41 0-.795-.16-1.085-.45l-3.713-3.713a1.535 1.535 0 0 1 0-2.169L8.9 21.826l5.882 5.883-2.658 2.658zm6.218-6.218l-2.658 2.658-5.883-5.883 2.658-2.657c.29-.29.675-.45 1.085-.45.41 0 .794.16 1.084.45l3.714 3.713a1.535 1.535 0 0 1 0 2.169z"/>
                              </g>
                              <defs>
                                 <clipPath id="keys">
                                    <path fill="#fff" d="M0 0h40v40H0z"/>
                                 </clipPath>
                              </defs>
                           </svg>
                           <p>Keys’’</p>
                        </div>
                        <div class="keys-right">
                           <p>
                              <?php echo $car_keys; ?>
                           </p>
                        </div>
                     </div>
                     <div class="lot-detail load">
                        <p class="paragraph paragraph--zag">
                           Loading information
                        </p>
                        <div class="lot-detail__tables">
                           <div class="lot-detail__table">
                              <div class="tr">
                                 <?php echo $Container; ?>
                              </div>
                              <div class="tr">
                                 <?php echo $Booking; ?>
                              </div>
                              <div class="tr">
                                 <?php echo $Carrier; ?>
                              </div>
                              <div class="tr">
                                 <?php echo $Vessel; ?>
                              </div>
                              <div class="tr">
                                 <?php echo $Port; ?>
                              </div>
                              <div class="tr">
                                 <?php echo $Destination; ?>
                              </div>
                              <div class="tr">
                                 <?php echo $Loaded; ?>
                              </div>
                              <div class="tr">
                                 <?php echo $Move; ?>
                              </div>
                              <div class="tr">
                                 <?php echo $Odessa; ?>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="lot-detail cardetail">
                        <p class="paragraph paragraph--zag">
                           Car details
                        </p>
                        <div class="lot-detail__tables">
                           <div class="lot-detail__table">
                              <div class="tr">
                                 <p class="tr-l">Year:</p>
                                 <p class="tr-r"><?php echo $year; ?></p>
                              </div>
                              <div class="tr">
                                 <p class="tr-l">Make: </p>
                                 <p class="tr-r"><?php echo $Make; ?></p>
                              </div>
                              <div class="tr">
                                 <p class="tr-l">Model:</p>
                                 <p class="tr-r"><?php echo $Model; ?></p>
                              </div>
                              <div class="tr">
                                 <p class="tr-l">Drive:</p>
                                 <p class="tr-r"><?php echo $Drive; ?></p>
                              </div>
                              <div class="tr">
                                 <p class="tr-l">Mileage:</p>
                                 <p class="tr-r"><?php echo $Mileage; ?></p>
                              </div>
                              <div class="tr">
                                 <p class="tr-l">VIN:</p>
                                 <p class="tr-r"><?php echo $VIN; ?></p>
                              </div>
                           </div>
                           <div class="lot-detail__table">
                              <div class="tr">
                                 <p class="tr-l">Color:</p>
                                 <p class="tr-r"><?php echo $Color; ?></p>
                              </div>
                              <div class="tr">
                                 <p class="tr-l">Interior:</p>
                                 <p class="tr-r"><?php echo $Interior; ?></p>
                              </div>
                              <div class="tr">
                                 <p class="tr-l">Type:</p>
                                 <p class="tr-r"><?php echo $Type; ?></p>
                              </div>
                              <div class="tr">
                                 <p class="tr-l">Fuel:</p>
                                 <p class="tr-r"><?php echo $Fuel; ?></p>
                              </div>
                              <div class="tr">
                                 <p class="tr-l">Transmission:</p>
                                 <p class="tr-r"><?php echo $Transmission; ?></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="lot-detail contact">
                        <p class="paragraph paragraph--zag">
                           Contact
                        </p>
                        <div class="lot-detail__tables">
                           <div class="lot-detail__table">
                              <div class="tr">
                                 <p class="tr-l">phone:</p>
                                 <p class="tr-r"><?php echo $phone1; ?></p>
                              </div>
                              <div class="tr">
                                 <p class="tr-l">phone: </p>
                                 <p class="tr-r"><?php echo $phone2; ?></p>
                              </div>
                              <div class="tr">
                                 <p class="tr-l">email:</p>
                                 <p class="tr-r"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                              </div>
                           </div>
                           <div class="lot-detail__table">
                              <div class="tr">
                                 <p class="tr-l">phone:</p>
                                 <p class="tr-r"><?php echo $phone3; ?></p>
                              </div>
                              <div class="tr">
                                 <p class="tr-l">phone/fax: </p>
                                 <p class="tr-r"><?php echo $fax; ?></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      <footer class="section section-footer">
         <div class="wrapper">
            <div class="footer">
               <div class="footer-col">
                  <a href="#" class="link link--logo"><img src="img/logo-main-white.png" alt=""></a>
               </div>
               <div class="footer-col">
                  <h4 class="title title--footer">
                     Menu
                  </h4>
                  <ul class="footer-menu">
                     <li><a href="#" class="link link--footer">Cars</a></li>
                     <li><a href="#" class="link link--footer">Calculator</a></li>
                     <li><a href="#" class="link link--footer">News</a></li>
                     <li><a href="#" class="link link--footer">About us</a></li>
                     <li><a href="#" class="link link--footer">Contacts</a></li>
                     <li><a href="#" class="link link--footer">FAQ</a></li>
                  </ul>
               </div>
               <div class="footer-col">
                  <h4 class="title title--footer">
                     Subscribe
                  </h4>
                  <div class="footer-col__content">
                     <form class="form-subscribe">
                        <input type="email" class="field" name="email" placeholder="Enter your email" required>
                        <button type="submit" class="btn btn--submit">Subscribe</button>
                     </form>
                  </div>
               </div>
               <div class="footer-col">
                  <h4 class="title title--footer">
                     We are in the<br> social networks
                  </h4>
                  <div class="footer-col__content">
                     <div class="footer-social">
                        <a href="#" class="link link--social"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="link link--social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="link link--social"><i class="fab fa-youtube"></i></a>
                     </div>
                     <a href="tel:+19733436282" class="link link--contact">
                        <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#phonecall)">
                              <path d="M9.644 12.162c-.499 0-1.102-.12-1.765-.362-1.454-.528-3.036-1.573-4.454-2.941C2.006 7.491.923 5.965.375 4.563c-.5-1.275-.5-2.322-.003-2.8.071-.07.144-.143.219-.22.453-.46.965-.977 1.644-.953.468.018.921.299 1.385.856 1.372 1.645.753 2.231.038 2.91l-.126.121c-.118.113-.339.636 1.719 2.62.672.648 1.244 1.122 1.702 1.41.288.18.804.453 1.015.25l.127-.125c.704-.688 1.312-1.283 3.016.039.578.448.868.884.888 1.336.027.655-.513 1.15-.99 1.587-.079.072-.155.142-.227.21-.246.239-.64.358-1.138.358zM2.187.979c-.483 0-.918.442-1.304.834-.077.078-.152.154-.226.226-.37.356-.333 1.293.095 2.388.529 1.351 1.58 2.828 2.959 4.158 1.379 1.33 2.909 2.343 4.31 2.853 1.135.413 2.107.448 2.476.092.074-.072.153-.144.235-.218.414-.38.884-.81.864-1.288-.014-.329-.262-.682-.737-1.05-1.42-1.101-1.817-.712-2.476-.068l-.13.126c-.314.304-.825.236-1.52-.199-.481-.302-1.076-.793-1.767-1.46-1.708-1.647-2.254-2.654-1.72-3.171l.13-.123c.669-.635 1.073-1.018-.07-2.389-.382-.457-.748-.696-1.088-.71h-.031z" fill="#fff"/>
                           </g>
                           <defs>
                              <clipPath id="phonecall">
                                 <path fill="#fff" transform="translate(0 .589)" d="M0 0h12v11.574H0z"/>
                              </clipPath>
                           </defs>
                        </svg>
                        <span>+1 (973) 343-6282</span>
                     </a>
                     <a href="mailto:onexport@gmail.com" class="link link--contact">
                        <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M9.716 8.586a.196.196 0 0 1-.132-.05L7.357 6.52a.182.182 0 0 1-.008-.264.198.198 0 0 1 .273-.008L9.85 8.264c.077.07.081.188.008.263a.196.196 0 0 1-.141.06zM2.284 8.587a.197.197 0 0 1-.141-.06.182.182 0 0 1 .008-.263L4.378 6.25c.078-.07.201-.067.274.008a.182.182 0 0 1-.009.263L2.416 8.536a.196.196 0 0 1-.132.05z" fill="#fff"/>
                           <path d="M11.033 10.46H.967C.434 10.46 0 10.04 0 9.525V3.164c0-.514.434-.933.967-.933h10.066c.533 0 .967.419.967.933v6.362c0 .515-.434.933-.967.933zM.967 2.604c-.32 0-.58.25-.58.56v6.361c0 .309.26.56.58.56h10.066c.32 0 .58-.251.58-.56V3.164c0-.308-.26-.56-.58-.56H.967z" fill="#fff"/>
                           <path d="M6 7.283c-.257 0-.515-.082-.71-.247L.32 2.856a.182.182 0 0 1-.019-.264.2.2 0 0 1 .273-.018l4.969 4.18a.745.745 0 0 0 .912 0l4.962-4.173a.199.199 0 0 1 .273.018.182.182 0 0 1-.019.264L6.71 7.036a1.106 1.106 0 0 1-.71.247z" fill="#fff"/>
                        </svg>
                        <span>onexport@gmail.com</span>
                     </a>
                  </div>
               </div>
               <div class="footer-col">
                  <h4 class="title title--footer">
                     Title
                  </h4>
                  <div class="footer-col__content">
                     <p class="any">Calculator</p>
                     <p class="any">Search engine system</p>
                     <p class="any">Search engine system of a car on the road by VIN</p>
                     <p class="any">Container?</p>
                  </div>
               </div>
               <div class="footer-col">
                  <h4 class="title title--footer">
                     Company Brief
                  </h4>
                  <div class="footer-col__content">
                     <p class="any">We Deliver car to any port in USA or Canada</p>
                     <p class="any">We are export experts</p>
                     <p class="any">Affordable shiping worldwide</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <aside class="menu-mobile">
         <div class="menu-row">
            <div class="header-content__select-tabs">
               <a href="#" class="link link--select">
                  <svg viewBox="0 0 5 7" width="5" height="7" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M.505 3.5c0-.125.048-.25.143-.347l3.01-3.01a.49.49 0 1 1 .694.694L1.688 3.5l2.663 2.663a.49.49 0 0 1-.693.693l-3.01-3.01A.489.489 0 0 1 .505 3.5z" fill="#fff"/>
                  </svg>
                  <i class="flag-RU"></i> <span>Country</span>
               </a>
               <!-- <div class="header-content__select-tab">
                  <div class="header-content__select-row">
                     <a href="#" class="link link--lang" data-contry="GE">Geo</a>
                     <a href="#" class="link link--lang" data-contry="GB">Eng</a>
                     <a href="#" class="link link--lang" data-contry="UA">Ua</a>
                     <a href="#" class="link link--lang" data-contry="AZ">Aze</a>
                     <a href="#" class="link link--lang" data-contry="AM">Arm</a>
                  </div>
                  </div> -->
            </div>
            <div class="header-content__select-tabs">
               <a href="#" class="link link--select">
                  <svg viewBox="0 0 5 7" width="5" height="7" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M.505 3.5c0-.125.048-.25.143-.347l3.01-3.01a.49.49 0 1 1 .694.694L1.688 3.5l2.663 2.663a.49.49 0 0 1-.693.693l-3.01-3.01A.489.489 0 0 1 .505 3.5z" fill="#fff"/>
                  </svg>
                  <i class="flag-RU"></i> <span>Language</span>
               </a>
               <!--< div class="header-content__select-tab">
                  <div class="header-content__select-row">
                     <a href="#" class="link link--lang" data-lang="GE">Geo</a>
                     <a href="#" class="link link--lang" data-lang="GB">Eng</a>
                     <a href="#" class="link link--lang" data-lang="UA">Ua</a>
                     <a href="#" class="link link--lang" data-lang="AZ">Aze</a>
                     <a href="#" class="link link--lang" data-lang="AM">Arm</a>
                  </div>
                  </div> -->
            </div>
         </div>
         <ul class="menu-list">
            <li><a href="#" class="link link--go">Cars</a></li>
            <li><a href="#" class="link link--go">Calculator</a></li>
            <li><a href="#" class="link link--go">News</a></li>
            <li><a href="#" class="link link--go">About us</a></li>
            <li><a href="#" class="link link--go">Contacts</a></li>
            <li><a href="#" class="link link--go">FAQ</a></li>
         </ul>
         <div class="menu-btn">
            <a href="#" class="btn btn--action">Registration</a>
            <a href="#" class="btn btn--action">Login</a>
         </div>
         <div class="menu-social">
            <a href="#" class="link link--social"><i class="fab fa-instagram"></i></a>
            <a href="#" class="link link--social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="link link--social"><i class="fab fa-youtube"></i></a>
         </div>
      </aside>
      <script src="https://www.youtube.com/iframe_api"></script>
      <script src=js/libs.min.js></script>
      <script src=js/main.js></script>
   </body>
</html>