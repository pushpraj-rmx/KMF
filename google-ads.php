<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <title>KMF Media | Music Promotion Company</title>
    <meta name="author" content="Themezinho">
    <meta name="description" content="Anchor | Freelancer & Creative Agency Portfolio">
    <meta name="keywords" content="creative, works, showcase, portfolio, highlight, projects, parallax, agency, digital, studio, css, animation, transition, svg, html, css">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="Anchor | Freelancer & Creative Agency Portfolio">
    <meta property="og:image" content="http://www.themezinho.net/Anchor/preview.png">
    <meta property="og:site_name" content="Anchor">
    <meta property="og:title" content="Anchor">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.themezinho.net/Anchor">

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Anchor">
    <meta name="twitter:creator" content="@Anchor">
    <meta name="twitter:title" content="Anchor">
    <meta name="twitter:description" content="Anchor | Freelancer & Creative Agency Portfolio">
    <meta name="twitter:image" content="http://www.themezinho.net/Anchor/preview.png">

    <!-- FAVICON FILES -->
    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
    <link href="ico/favicon.png" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/hamburger-menu.css">
    <link rel="stylesheet" href="css/odometer.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    
      <div id="whatsapp-icon">
    <a href="#" onclick="sendWhatsAppMessage()">
      <img src="whats-app.png" alt="WhatsApp Icon">
    </a>
  </div>
  
  <style>
   #whatsapp-icon {
      position: fixed;
      right: 7%;
      bottom: 20px; /* Adjust the distance from the bottom as needed */
      transform: translateX(50%);
      z-index: 999; /* Ensure the icon appears above other elements */
      cursor: pointer;
    }

    #whatsapp-icon img {
      height: 80px; /* Set the desired height */
      width: 80px; /* Set the desired width */
    }
  </style>

    <style>
        @charset "UTF-8";

        :root {
            --color-brand-primary: hsl(var(--color-brand-primary-h), 43%, 43%);
            --color-brand-primary-h: 251;
            --color-brand-primary-s: 43%;
            --color-brand-primary-l: 43%;
            --color-brand-accent: hsl(var(--color-brand-accent-h), 96%, 61%);
            --color-brand-accent-h: 16;
            --color-brand-accent-s: 96%;
            --color-brand-accent-l: 61%;
            --color-brand-accent-bg: hsl(calc(var(--color-brand-accent-h) + 17), 100%, 96%);
            --ratio: 1.4;
            --s-6: calc(var(--s-5) / var(--ratio));
            --s-5: calc(var(--s-4) / var(--ratio));
            --s-4: calc(var(--s-3) / var(--ratio));
            --s-3: calc(var(--s-2) / var(--ratio));
            --s-2: calc(var(--s-1) / var(--ratio));
            --s-1: calc(var(--s0) / var(--ratio));
            --s0: calc(1.05rem + 0.333vw);
            --s1: calc(var(--s0) * var(--ratio));
            --s2: calc(var(--s1) * var(--ratio));
            --s3: calc(var(--s2) * var(--ratio));
            --s4: calc(var(--s3) * var(--ratio));
            --s5: calc(var(--s4) * var(--ratio));
            --s6: calc(var(--s5) * var(--ratio));
            font-size: 62.5%;
            line-height: 1.6;
            box-sizing: border-box;
        }

        @media (min-width: 40.625em) {
            :root {
                --s0: calc(1.25rem + 0.333vw);
            }
        }

        @media (min-width: 48em) {
            :root {
                --s0: calc(1.4rem + 0.333vw);
            }
        }

        @media (min-width: 62em) {
            :root {
                --s0: calc(1.6rem + 0.333vw);
            }
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        body {
            font-size: 1.4rem;
            font-family: "Outfit", sans-serif;
            font-weight: 300;
            background-color: white;
            min-height: 100vh;
        }

        @media (min-width: 48em) {
            body {
                font-size: 1.5rem;
            }
        }

        h2,
        h3,
        p,
        ul {
            margin: 0;
        }

        ul {
            padding: 0;
        }

        ul li {
            /* Remove li Bullets with zero-width space for accessability */
            list-style-type: none;
        }

        ul li:before {
            content: "​";
            /* add zero-width space */
            clip: rect(0 0 0 0);
            height: 1px;
            width: 1px;
            position: absolute;
        }

        .c-section {
            padding: 0 var(--s3);
        }

        .c-section__title {
            padding: var(--s2) var(--s3) calc(var(--s6) * 1.8);
            margin: 0 calc(var(--s3) * -1);
            color: #fff;
            font-size: var(--s4);
            font-weight: 900;
            text-align: center;
        }

        @media (min-width: 40.625em) {
            .c-section__title {
                padding: var(--s2) var(--s3) var(--s4);
            }
        }

        @media (min-width: 40.625em) {
            .c-section__title {
                display: flex;
                align-items: center;
                justify-content: flex-end;
                position: relative;
                text-align: unset;
            }
        }

        .c-section__title:after {
            content: "";
            display: block;
            background-size: calc(var(--s5) * 3) calc(var(--s5) * 3);
            width: calc(var(--s5) * 3);
            height: calc(var(--s5) * 3);
            background-repeat: no-repeat;
            background-position: center;
            margin-left: auto;
            margin-right: auto;
            transform: translateY(11rem);
            z-index: 1;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' id='aadef149-4ba5-4382-9e09-7df651a328a5' data-name='Layer 1' width='704' height='745.19433' viewBox='0 0 704 745.19433' class='injected-svg modal__media modal__lg_media' data-src='https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/mobile_web_2g8b.svg'%3E%3Ctitle%3Emobile_web%3C/title%3E%3Cpath d='M344.69391,661.25125l-8.38722-33.073A429.46111,429.46111,0,0,0,290.74208,611.834l-1.05792,15.37062L285.39,610.2712c-19.202-5.482-32.265-7.89648-32.265-7.89648s17.64872,67.09731,54.6606,118.39272l43.124,7.57249-33.50125,4.83219A173.75069,173.75069,0,0,0,332.395,749.05228c53.84043,49.96979,113.80669,72.89422,133.93843,51.20309s-7.1946-79.78376-61.035-129.75355c-16.69106-15.49113-37.65818-27.92221-58.646-37.70546Z' transform='translate(-248 -77.40283)' fill='%23fb6f3c'/%3E%3Cpath d='M424.44317,625.32976l9.91563-32.64732a429.46451,429.46451,0,0,0-30.557-37.54385L394.9511,567.7497l5.07688-16.71545c-13.60408-14.61837-23.53857-23.43755-23.53857-23.43755s-19.57459,66.561-14.40543,129.60362l33.00186,28.77326L363.9095,672.79331a173.75138,173.75138,0,0,0,4.62073,21.34072c20.26038,70.60659,59.74453,121.22757,88.19038,113.06511s35.08143-72.01738,14.821-142.624c-6.28092-21.88874-17.80407-43.36822-30.71362-62.59176Z' transform='translate(-248 -77.40283)' fill='%23fb6f3c'/%3E%3Cellipse cx='352' cy='727.19433' rx='352' ry='18' fill='%233f3d56'/%3E%3Cpath d='M805.65354,250.35009h-3.99878V140.80476a63.40186,63.40186,0,0,0-63.40205-63.40193H506.16627a63.40186,63.40186,0,0,0-63.402,63.40193V741.77894a63.40186,63.40186,0,0,0,63.402,63.40193H738.25271a63.40186,63.40186,0,0,0,63.40205-63.40193V328.32631h3.99878Z' transform='translate(-248 -77.40283)' fill='%233f3d56'/%3E%3Cpath d='M788.16,141.24713v600.09a47.3508,47.3508,0,0,1-47.35,47.35H507.61a47.35084,47.35084,0,0,1-47.35-47.35v-600.09a47.35089,47.35089,0,0,1,47.35-47.35H535.9a22.50661,22.50661,0,0,0,20.83,30.99H689.69a22.50673,22.50673,0,0,0,20.83-30.99h30.29A47.35084,47.35084,0,0,1,788.16,141.24713Z' transform='translate(-248 -77.40283)' fill='%23fff'/%3E%3Cpath d='M788.16,612.40716v128.93a47.3508,47.3508,0,0,1-47.35,47.35H507.61a47.35084,47.35084,0,0,1-47.35-47.35v-116.36a222.97136,222.97136,0,0,1,327.9-12.57Z' transform='translate(-248 -77.40283)' fill='%23e6e6e6'/%3E%3Cpolygon points='322.174 511.167 312.75 511.167 315.891 327.064 319.033 327.064 322.174 511.167' fill='%23e6e6e6'/%3E%3Cpath d='M578.02779,288.5586l15.21367-23.512a352.49687,352.49687,0,0,0-15.60827-36.53743l-9.83764,7.94573,7.78946-12.03815c-7.42343-14.61275-13.26462-23.81956-13.26462-23.81956s-30.5115,48.08118-40.70521,98.98824l19.52266,30.17145L519.5254,312.3006a142.61,142.61,0,0,0-1.18572,17.8826c0,60.291,19.69081,109.16642,43.98071,109.16642s43.98072-48.87547,43.98072-109.16642c0-18.69079-4.22846-38.24546-10.0614-56.33418Z' transform='translate(-248 -77.40283)' fill='%23e6e6e6'/%3E%3Cpolygon points='267.479 524.167 262.908 524.167 264.432 434.879 265.955 434.879 267.479 524.167' fill='%23e6e6e6'/%3E%3Cpath d='M519.28775,456.06773l7.37846-11.40307a170.95723,170.95723,0,0,0-7.56983-17.72025l-4.77115,3.85359,3.7778-5.83837c-3.60028-7.087-6.43319-11.55223-6.43319-11.55223s-14.79775,23.31885-19.74158,48.00821l9.46827,14.63282-10.48179-8.46609a69.16528,69.16528,0,0,0-.57506,8.67286c0,29.24044,9.54982,52.94451,21.33016,52.94451S533,505.49564,533,476.2552c0-9.06483-2.05076-18.54863-4.87967-27.32146Z' transform='translate(-248 -77.40283)' fill='%23e6e6e6'/%3E%3Cpolygon points='386.479 524.167 381.908 524.167 383.432 434.879 384.955 434.879 386.479 524.167' fill='%23e6e6e6'/%3E%3Cpath d='M638.28775,456.06773l7.37846-11.40307a170.95723,170.95723,0,0,0-7.56983-17.72025l-4.77115,3.85359,3.7778-5.83837c-3.60028-7.087-6.43319-11.55223-6.43319-11.55223s-14.79775,23.31885-19.74158,48.00821l9.46827,14.63282-10.48179-8.46609a69.16528,69.16528,0,0,0-.57506,8.67286c0,29.24044,9.54982,52.94451,21.33016,52.94451S652,505.49564,652,476.2552c0-9.06483-2.05076-18.54863-4.87967-27.32146Z' transform='translate(-248 -77.40283)' fill='%23e6e6e6'/%3E%3Ccircle cx='264' cy='186.19433' r='42' fill='%23e6e6e6'/%3E%3Cpolygon points='415.872 234.173 492.533 236.077 502.852 144.666 415.872 144.666 415.872 234.173' fill='%232f2e41'/%3E%3Cpath d='M644.76993,239.9612l-21.14671-81.078s5.84211-38.92023,19.97409-38.27814-3.66865,38.049-3.66865,38.049l23.94311,70.03766Z' transform='translate(-248 -77.40283)' fill='%23ffb8b8'/%3E%3Cpath d='M686.22412,443.10875l3.31146,33.11459s-104.311,71.19639-104.311,100.99953-3.31146,124.17974-3.31146,124.17974l38.08179,1.65573,3.31146-44.70471s8.27865-49.67189,3.31146-67.88492l54.63908-41.39325s-16.5573,19.86876-13.24584,54.63909S663.0439,706.3698,663.0439,706.3698l39.73752,3.31146s4.96719-36.42606,6.62292-39.73752,9.93438-62.91773,1.65573-79.475l67.88493-79.475s23.18022-29.80314,0-59.60627l-13.24584-6.62292Z' transform='translate(-248 -77.40283)' fill='%232f2e41'/%3E%3Cpath d='M583.56887,694.77969l-3.31146,21.52449-21.52449,51.32763s-36.42606,18.213-9.93438,21.52449,36.42606-3.31146,41.39325-11.59011,14.90157-21.52449,14.90157-21.52449L603.43763,790.812h8.27865l13.56912-47.49194a29.95239,29.95239,0,0,0-5.09327-26.76756q-.09786-.12417-.1972-.24835c-6.62292-8.27865-3.31146-19.86876-3.31146-19.86876Z' transform='translate(-248 -77.40283)' fill='%232f2e41'/%3E%3Cpath d='M666.35536,694.77969l-3.31146,21.52449-21.52449,51.32763s-36.42605,18.213-9.93437,21.52449,36.426-3.31146,41.39324-11.59011,14.90157-21.52449,14.90157-21.52449L686.22412,790.812h8.27865l13.56913-47.49194a29.95239,29.95239,0,0,0-5.09328-26.76756q-.09786-.12417-.1972-.24835c-6.62292-8.27865-3.31146-19.86876-3.31146-19.86876Z' transform='translate(-248 -77.40283)' fill='%232f2e41'/%3E%3Ccircle cx='458.09288' cy='162.05113' r='33.1146' fill='%23ffb8b8'/%3E%3Cpath d='M704.43715,267.60138l14.90157,34.77032,29.80314-23.18022s-18.213-24.83594-18.213-28.1474Z' transform='translate(-248 -77.40283)' fill='%23ffb8b8'/%3E%3Cpath d='M707.74861,287.47013l7.06394,4.34051s22.82273-12.10094,28.576-20.6387c0,0,20.65486-6.882,28.93351,9.67527s-4.96719,130.80267-4.96719,130.80267,8.27865,11.59011,6.62292,16.5573S778.945,441.453,778.945,441.453v9.93438s-94.37661,1.65573-94.37661-6.62292V418.2728l-9.93438-3.31146s-9.93438,21.52449-13.24584,19.86876-19.86876-14.90157-19.86876-14.90157,26.49168-87.75369,41.39325-102.65526l18.213-31.45887Z' transform='translate(-248 -77.40283)' fill='%23fb6f3c'/%3E%3Cpath d='M704.43715,289.12586s-3.31146-6.62292-8.27865-8.27865-29.80314-36.42605-29.80314-36.42605l3.31146-18.213-33.1146-4.96719s1.65573,18.213,8.27865,29.80314,43.049,71.19638,43.049,71.19638l18.213-33.1146Z' transform='translate(-248 -77.40283)' fill='%23fb6f3c'/%3E%3Cpath d='M730.101,420.75639l-19.86875,59.60628s-41.39325,46.36044-18.213,46.36044,34.77032-41.39325,34.77032-41.39325l28.14741-59.60628Z' transform='translate(-248 -77.40283)' fill='%23ffb8b8'/%3E%3Cpath d='M666.40465,239.938c26.52245-10.63018,52.66949-12.89779,78.1352,0V218.51138A13.95535,13.95535,0,0,0,730.58449,204.556H677.42954a11.02489,11.02489,0,0,0-11.02489,11.02489Z' transform='translate(-248 -77.40283)' fill='%232f2e41'/%3E%3Cpath d='M750.79759,285.8144s15.10671-12.79586,23.28279,1.88072,3.20889,77.59432,1.55316,85.873-13.24584,59.60628-13.24584,59.60628l-39.73752-8.27865s-3.31146-23.18022,6.62292-21.52449Z' transform='translate(-248 -77.40283)' fill='%23fb6f3c'/%3E%3Cpath d='M767.27813,271.58657c-7.47508-4.10485-10.95384-13.3183-11.20173-21.8427-.24822-8.5244,1.81928-16.96078,1.98174-25.48727a19.70066,19.70066,0,0,0-.44217-5.19738,19.99152,19.99152,0,0,0-2.85872-5.91734c-9.72073-14.89484-26.61815-25.37235-44.41647-25.53721a19.72685,19.72685,0,0,0-7.51573,1.38171c-1.84014.737-2.44183.64676-2.79446,2.90614a18.80778,18.80778,0,0,0-12.90778.41044,43.67006,43.67006,0,0,0-11.28781,6.72245,50.91134,50.91134,0,0,0-5.707,4.94121c-9.4059,9.74414-11.57188,24.76187-8.847,38.02816.88586,4.313-3.3647,8.47684-6.88166,11.12594s-7.57824,5.08173-9.3054,9.132c-1.66117,3.89607-.74885,8.35188-1.08333,12.57414a21.50585,21.50585,0,0,1-13.71993,18.06931,6.619,6.619,0,0,0,6.38589,2.24579,15.71689,15.71689,0,0,0,6.65437-3.168,39.58173,39.58173,0,0,0,14.7562-21.89461c1.03307,4.69842.63244,9.54449.59442,14.355a40.097,40.097,0,0,1-2.90746,15.67932,22.95849,22.95849,0,0,1-10.57045,11.63912c4.6135,2.25911,9.69783.62172,13.60738-2.71074,3.90938-3.33246,6.21789-8.16974,7.83049-13.047a65.02715,65.02715,0,0,0,3.1334-24.67964A35.23865,35.23865,0,0,1,674.197,295.3399a36.73,36.73,0,0,1-12.45807,21.62429,71.55883,71.55883,0,0,0,32.75215-8.24838,18.53725,18.53725,0,0,0,6.71768-5.17351c3.251-4.50991,2.48187-10.6609,1.57006-16.14519-.72122-4.3364,4.69775-10.60546,1.5945-13.71918a5.14429,5.14429,0,0,0-3.44914-1.48246c-9.45259-.91006-18.20527-5.65746-23.25035-13.70275-3.53538-5.63781-5.87629-12.07592-5.87629-18.09738a32.93149,32.93149,0,1,1,64.38483,9.77247,66.08219,66.08219,0,0,0-2.39716,11.16014,87.6848,87.6848,0,0,1-2.6728,12.98267c-2.34787,8.17535-6.32542,16.51719-13.68526,20.7814,2.47315,1.35348,5.33556,1.41445,8.13766,1.72322,9.23506,1.01758,18.9478.79289,27.30655-3.26312C761.2304,289.496,767.87372,280.85839,767.27813,271.58657Z' transform='translate(-248 -77.40283)' fill='%232f2e41'/%3E%3Cpolygon points='490.38 252.288 481.739 323.422 482.101 255.6 490.38 252.288' opacity='0.2'/%3E%3Cpolygon points='518.772 336.291 515.216 358.255 523.494 361.567 518.772 336.291' opacity='0.2'/%3E%3C/svg%3E");
        }

        @media (min-width: 40.625em) {
            .c-section__title:after {
                margin-left: auto;
                margin-right: 0;
                transform: translateY(2rem);
            }
        }

        .c-section span:before {
            content: "";
            display: block;
            position: absolute;
            top: -100%;
            left: 0;
            width: 100%;
            height: 200%;
            transform: skew(0deg, 10deg);
            z-index: -1;
            background: var(--color-brand-primary);
            background-attachment: fixed;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='487' height='243.5' viewBox='0 0 1600 800' style='&%2310; opacity: .45;&%2310;'%3E%3Cpath fill='%23fdb9a0' d='M1102.5 734.8c2.5-1.2 24.8-8.6 25.6-7.5.5.7-3.9 23.8-4.6 24.5-.2.3-16-12.3-21-17zm123.8-505.7c0-.1-4.9-9.4-7-14.2-.1-.3-.3-1.1-.4-1.6-.1-.4-.3-.7-.6-.9-.3-.2-.6-.1-.8.1l-13.1 12.3c-.2.2-.3.5-.4.8 0 .3 0 .7.2 1 .1.1 1.4 2.5 2.1 3.6 2.4 3.7 6.5 12.1 6.5 12.2.2.3.4.5.7.6.3 0 .5-.1.7-.3 0 0 1.8-2.5 2.7-3.6 1.5-1.6 3-3.2 4.6-4.7 1.2-1.2 1.6-1.4 2.1-1.6.5-.3 1.1-.5 2.5-1.9.4-.5.5-1.3.2-1.8zM33 770.3c0-.7-.5-1.2-1.2-1.2-.1 0-.3 0-.4.1-1.6.2-14.3.1-22.2 0-.3 0-.6.1-.9.4-.2.2-.4.5-.4.9 0 .2 0 4.9.1 5.9l.4 13.6c0 .3.2.6.4.9.2.2.5.3.8.3h.1c7.3-.7 14.7-.9 22-.6.3 0 .7-.1.9-.3.2-.2.4-.6.4-.9-.1-6.1-.1-13.2 0-19.1z' style='&%2310;'/%3E%3Cpath fill='%23fee272' d='M171.1 383.4c1.3-2.5 14.3-22 15.6-21.6.8.3 11.5 21.2 11.5 22.1-.1.3-20.3.1-27.1-.5zm425.3 328.4c-.1-.1-6.7-8.2-9.7-12.5-.2-.3-.5-1-.7-1.5-.2-.4-.4-.7-.7-.8-.3-.1-.6 0-.8.3L574 712c-.2.2-.2.5-.2.9 0 .3.2.7.4.9.1.1 1.8 2.2 2.8 3.1 3.1 3.1 8.8 10.5 8.9 10.6.2.3.5.4.8.4.3 0 .5-.2.6-.5 0 0 1.2-2.8 2-4.1 1.1-1.9 2.3-3.7 3.5-5.5.9-1.4 1.3-1.7 1.7-2 .5-.4 1-.7 2.1-2.4.3-.3.2-1.1-.2-1.6zm131.1-531.9c.6.2 1.3-.2 1.4-.8v-.4c.2-1.4 2.8-12.6 4.5-19.5.1-.3 0-.6-.2-.8-.2-.3-.5-.4-.8-.5-.2 0-4.7-1.1-5.7-1.3l-13.4-2.7c-.3-.1-.7 0-.9.2-.2.2-.4.4-.5.6v.1c-.8 6.5-2.2 13.1-3.9 19.4-.1.3 0 .6.2.9.2.3.5.4.8.5 5.8 1.3 12.7 2.9 18.5 4.3zm1-1.8c-.1-.1-.2-.2-.4-.2.2 0 .3.1.4.2z'/%3E%3Cg fill='%23eac5e7'%3E%3Cpath d='M699.6 472.7c-1.5 0-2.8-.8-3.5-2.3-.8-1.9 0-4.2 1.9-5 3.7-1.6 6.8-4.7 8.4-8.5 1.6-3.8 1.7-8.1.2-11.9-.3-.9-.8-1.8-1.2-2.8-.8-1.7-1.8-3.7-2.3-5.9-.9-4.1-.2-8.6 2-12.8 1.7-3.1 4.1-6.1 7.6-9.1 1.6-1.4 4-1.2 5.3.4 1.4 1.6 1.2 4-.4 5.3-2.8 2.5-4.7 4.7-5.9 7-1.4 2.6-1.9 5.3-1.3 7.6.3 1.4 1 2.8 1.7 4.3l1.5 3.3c2.1 5.6 2 12-.3 17.6-2.3 5.5-6.8 10.1-12.3 12.5-.4.2-.9.3-1.4.3zm40.8-51.3c1.5-.2 3 .5 3.8 1.9 1.1 1.8.4 4.2-1.4 5.3-3.7 2.1-6.4 5.6-7.6 9.5-1.2 4-.8 8.4 1.1 12.1.4.9 1 1.7 1.6 2.7 1 1.7 2.2 3.5 3 5.7 1.4 4 1.2 8.7-.6 13.2-1.4 3.4-3.5 6.6-6.8 10.1-1.5 1.6-3.9 1.7-5.5.2-1.6-1.4-1.7-3.9-.2-5.4 2.6-2.8 4.3-5.3 5.3-7.7 1.1-2.8 1.3-5.6.5-7.9-.5-1.3-1.3-2.7-2.2-4.1-.6-1-1.3-2.1-1.9-3.2-2.8-5.4-3.4-11.9-1.7-17.8 1.8-5.9 5.8-11 11.2-14 .4-.4.9-.6 1.4-.6zM261.3 590.9c5.7 6.8 9 15.7 9.4 22.4.5 7.3-2.4 16.4-10.2 20.4-3 1.5-6.7 2.2-11.2 2.2-7.9-.1-12.9-2.9-15.4-8.4-2.1-4.7-2.3-11.4 1.8-15.9 3.2-3.5 7.8-4.1 11.2-1.6 1.2.9 1.5 2.7.6 3.9-.9 1.2-2.7 1.5-3.9.6-1.8-1.3-3.6.6-3.8.8-2.4 2.6-2.1 7-.8 9.9 1.5 3.4 4.7 5 10.4 5.1 3.6 0 6.4-.5 8.6-1.6 4.7-2.4 7.7-8.6 7.2-15-.5-7.3-5.3-18.2-13-23.9-4.2-3.1-8.5-4.1-12.9-3.1-3.1.7-6.2 2.4-9.7 5-6.6 5.1-11.7 11.8-14.2 19-2.7 7.7-2.1 15.8 1.9 23.9.7 1.4.1 3.1-1.3 3.7-1.4.7-3.1.1-3.7-1.3-4.6-9.4-5.4-19.2-2.2-28.2 2.9-8.2 8.6-15.9 16.1-21.6 4.1-3.1 8-5.1 11.8-6 6-1.4 12 0 17.5 4 2.1 1.7 4.1 3.6 5.8 5.7z'/%3E%3Ccircle cx='1013.7' cy='153.9' r='7.1'/%3E%3Ccircle cx='1024.3' cy='132.1' r='7.1'/%3E%3Ccircle cx='1037.3' cy='148.9' r='7.1'/%3E%3Cpath d='M1508.7 297.2c-4.8-5.4-9.7-10.8-14.8-16.2 5.6-5.6 11.1-11.5 15.6-18.2 1.2-1.7.7-4.1-1-5.2-1.7-1.2-4.1-.7-5.2 1-4.2 6.2-9.1 11.6-14.5 16.9-4.8-5-9.7-10-14.7-14.9-1.5-1.5-3.9-1.5-5.3 0-1.5 1.5-1.5 3.9 0 5.3 4.9 4.8 9.7 9.8 14.5 14.8-1.1 1.1-2.3 2.2-3.5 3.2-4.1 3.8-8.4 7.8-12.4 12-1.4 1.5-1.4 3.8 0 5.3 1.5 1.4 3.9 1.4 5.3-.1 3.9-4 8.1-7.9 12.1-11.7 1.2-1.1 2.3-2.2 3.5-3.3 4.9 5.3 9.8 10.6 14.6 15.9l.2.2c1.4 1.4 3.7 1.5 5.2.2 1.7-1.2 1.8-3.6.4-5.2zM327.6 248.6l-.4-2.6c-1.5-11.1-2.2-23.2-2.3-37 0-5.5 0-11.5.2-18.5v-2.3c0-5 0-11.2 3.9-13.5 2.2-1.3 5.1-1 8.5.9 5.7 3.1 13.2 8.7 17.5 14.9 5.5 7.8 7.3 16.9 5 25.7-3.2 12.3-15 31-30 32.1l-2.4.3zm4.5-69.4c-.2 0-.3 0-.4.1-.1.1-.7.5-1.1 2.7-.3 1.9-.3 4.2-.3 6.3v2.4c-.2 6.9-.2 12.8-.2 18.3.1 12.5.7 23.5 2 33.7 11-2.7 20.4-18.1 23-27.8 1.9-7.2.4-14.8-4.2-21.3-3.9-5.5-10.9-10.6-15.9-13.3-1.4-.8-2.4-1.1-2.9-1.1zM516.3 60.8c-.1 0-.2 0-.4-.1-2.4-.7-4-.9-6.7-.7-.7 0-1.3-.5-1.4-1.2 0-.7.5-1.3 1.2-1.4 3.1-.2 4.9 0 7.6.8.7.2 1.1.9.9 1.6-.2.6-.7 1-1.2 1zm-10.2 9.7c-.5 0-1-.3-1.2-.8-.8-2.1-1.2-4.3-1.3-6.6 0-.7.5-1.3 1.2-1.3s1.3.5 1.3 1.2c.1 2 .5 3.9 1.1 5.8.2.7-.1 1.4-.8 1.6 0 .1-.2.1-.3.1zm-12-6.1c-.4 0-.8-.2-1-.5-.4-.6-.3-1.4.2-1.8 1.8-1.4 3.7-2.6 5.8-3.6.6-.3 1.4 0 1.7.6.3.6 0 1.4-.6 1.7-1.9.9-3.7 2-5.3 3.3-.2.2-.5.3-.8.3zm6.4-9.1c-.5 0-.9-.3-1.2-.7-.5-1-1.2-1.9-2.4-3.4-.3-.4-.7-.9-1.1-1.4-.4-.6-.3-1.4.2-1.8.6-.4 1.4-.3 1.8.2.4.5.8 1 1.1 1.4 1.3 1.6 2.1 2.6 2.7 3.9.3.6 0 1.4-.6 1.7-.1.1-.3.1-.5.1zm6.2-.3c-.3 0-.5-.1-.8-.2-.6-.4-.7-1.2-.3-1.8 1.2-1.7 2.3-3.4 3.3-5.2.3-.6 1.1-.9 1.7-.5.6.3.9 1.1.5 1.7-1 1.9-2.2 3.8-3.5 5.6-.2.2-.5.4-.9.4zm522.6 327.8c-.1 0-.2 0-.4-.1-2.4-.7-4-.9-6.7-.7-.7 0-1.3-.5-1.4-1.2 0-.7.5-1.3 1.2-1.4 3.1-.2 4.9 0 7.6.8.7.2 1.1.9.9 1.6-.2.6-.7 1-1.2 1zm-10.2 9.7c-.5 0-1-.3-1.2-.8-.8-2.1-1.2-4.3-1.3-6.6 0-.7.5-1.3 1.2-1.3s1.3.5 1.3 1.2c.1 2 .5 3.9 1.1 5.8.2.7-.1 1.4-.8 1.6 0 .1-.2.1-.3.1zm-12-6.1c-.4 0-.8-.2-1-.5-.4-.6-.3-1.4.2-1.8 1.8-1.4 3.7-2.6 5.8-3.6.6-.3 1.4 0 1.7.6.3.6 0 1.4-.6 1.7-1.9.9-3.7 2-5.3 3.3-.2.2-.5.3-.8.3zm6.4-9.1c-.5 0-.9-.3-1.2-.7-.5-1-1.2-1.9-2.4-3.4-.3-.4-.7-.9-1.1-1.4-.4-.6-.3-1.4.2-1.8.6-.4 1.4-.3 1.8.2.4.5.8 1 1.1 1.4 1.3 1.6 2.1 2.6 2.7 3.9.3.6 0 1.4-.6 1.7-.1.1-.3.1-.5.1zm6.2-.3c-.3 0-.5-.1-.8-.2-.6-.4-.7-1.2-.3-1.8 1.2-1.7 2.3-3.4 3.3-5.2.3-.6 1.1-.9 1.7-.5.6.3.9 1.1.5 1.7-1 1.9-2.2 3.8-3.5 5.6-.2.2-.5.4-.9.4zm310 196.4c-1.4 0-2.9-.2-4.5-.7-8.4-2.7-16.6-12.7-18.7-20-.4-1.4-.7-2.9-.9-4.4-8.1 3.3-15.5 10.6-15.4 21 0 1.5-1.2 2.7-2.7 2.8-1.5 0-2.7-1.2-2.7-2.7-.1-6.7 2.4-12.9 7-18 3.6-4 8.4-7.1 13.7-8.8.5-6.5 3.1-12.9 7.4-17.4 7-7.4 18.2-8.9 27.3-10.1l.7-.1c1.5-.2 2.9.9 3.1 2.3.2 1.5-.9 2.9-2.3 3.1l-.7.1c-8.6 1.2-18.4 2.5-24 8.4-3 3.2-5 7.7-5.7 12.4 7.9-1 17.7 1.3 24.3 5.7 4.3 2.9 7.1 7.8 7.2 12.7.2 4.3-1.7 8.3-5.2 11.1-2.4 1.6-5 2.6-7.9 2.6zm-18.7-26.7c.1 1.5.4 3 .8 4.4 1.7 5.8 8.7 14.2 15.1 16.3 2.8.9 5.1.5 7.2-1.1 2.7-2.1 3.2-4.8 3.1-6.6-.1-3.2-2-6.4-4.8-8.3-5.7-3.9-14.7-5.8-21.4-4.7z'/%3E%3C/g%3E%3C/svg%3E");
        }

        .c-section span:after {
            content: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae accusamus eaque necessitatibus modi facilis aspernatur ut natus saepe!";
            display: block;
            font-size: 1.4rem;
            position: absolute;
            font-weight: 350;
            padding: 0 var(--s3);
            color: rgba(255, 255, 255, 0.85);
            left: 9px;
        }

        @media (min-width: 40.625em) {
            .c-section span:after {
                font-size: 23%;
            }
        }

        @media (min-width: 40.625em) {
            .c-section span:after {
                width: 47ch;
            }
        }

        @media (min-width: 48em) {
            .c-section span:after {
                width: 57ch;
            }
        }

        @media (min-width: 62em) {
            .c-section span:after {
                width: 67ch;
            }
        }

        .c-services {
            display: grid;
            grid-gap: var(--s2);
            margin: 0 calc(var(--s3) * -1);
            padding: var(--s6) var(--s3);
            position: relative;
            z-index: 1;
        }

        @media (min-width: 40.625em) {
            .c-services {
                grid-template-columns: repeat(7, 1fr);
                grid-template-rows: minmax(100px, 1fr);
            }
        }

        @media (min-width: 40.625em) {
            .c-services {
                padding: 0 var(--s3);
            }
        }

        .c-services:before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            /* background: var(--color-brand-accent-bg); */
            width: 100%;
            height: 100%;
            transform: skew(0deg, 10deg);
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='487' height='243.5' viewBox='0 0 1600 800'%3E%3Cpath fill='%23fdb9a0' d='M1102.5 734.8c2.5-1.2 24.8-8.6 25.6-7.5.5.7-3.9 23.8-4.6 24.5-.2.3-16-12.3-21-17zm123.8-505.7c0-.1-4.9-9.4-7-14.2-.1-.3-.3-1.1-.4-1.6-.1-.4-.3-.7-.6-.9-.3-.2-.6-.1-.8.1l-13.1 12.3c-.2.2-.3.5-.4.8 0 .3 0 .7.2 1 .1.1 1.4 2.5 2.1 3.6 2.4 3.7 6.5 12.1 6.5 12.2.2.3.4.5.7.6.3 0 .5-.1.7-.3 0 0 1.8-2.5 2.7-3.6 1.5-1.6 3-3.2 4.6-4.7 1.2-1.2 1.6-1.4 2.1-1.6.5-.3 1.1-.5 2.5-1.9.4-.5.5-1.3.2-1.8zM33 770.3c0-.7-.5-1.2-1.2-1.2-.1 0-.3 0-.4.1-1.6.2-14.3.1-22.2 0-.3 0-.6.1-.9.4-.2.2-.4.5-.4.9 0 .2 0 4.9.1 5.9l.4 13.6c0 .3.2.6.4.9.2.2.5.3.8.3h.1c7.3-.7 14.7-.9 22-.6.3 0 .7-.1.9-.3.2-.2.4-.6.4-.9-.1-6.1-.1-13.2 0-19.1z' style='&%2310;'/%3E%3Cpath fill='%23fee272' d='M171.1 383.4c1.3-2.5 14.3-22 15.6-21.6.8.3 11.5 21.2 11.5 22.1-.1.3-20.3.1-27.1-.5zm425.3 328.4c-.1-.1-6.7-8.2-9.7-12.5-.2-.3-.5-1-.7-1.5-.2-.4-.4-.7-.7-.8-.3-.1-.6 0-.8.3L574 712c-.2.2-.2.5-.2.9 0 .3.2.7.4.9.1.1 1.8 2.2 2.8 3.1 3.1 3.1 8.8 10.5 8.9 10.6.2.3.5.4.8.4.3 0 .5-.2.6-.5 0 0 1.2-2.8 2-4.1 1.1-1.9 2.3-3.7 3.5-5.5.9-1.4 1.3-1.7 1.7-2 .5-.4 1-.7 2.1-2.4.3-.3.2-1.1-.2-1.6zm131.1-531.9c.6.2 1.3-.2 1.4-.8v-.4c.2-1.4 2.8-12.6 4.5-19.5.1-.3 0-.6-.2-.8-.2-.3-.5-.4-.8-.5-.2 0-4.7-1.1-5.7-1.3l-13.4-2.7c-.3-.1-.7 0-.9.2-.2.2-.4.4-.5.6v.1c-.8 6.5-2.2 13.1-3.9 19.4-.1.3 0 .6.2.9.2.3.5.4.8.5 5.8 1.3 12.7 2.9 18.5 4.3zm1-1.8c-.1-.1-.2-.2-.4-.2.2 0 .3.1.4.2z'/%3E%3Cg fill='%23eac5e7'%3E%3Cpath d='M699.6 472.7c-1.5 0-2.8-.8-3.5-2.3-.8-1.9 0-4.2 1.9-5 3.7-1.6 6.8-4.7 8.4-8.5 1.6-3.8 1.7-8.1.2-11.9-.3-.9-.8-1.8-1.2-2.8-.8-1.7-1.8-3.7-2.3-5.9-.9-4.1-.2-8.6 2-12.8 1.7-3.1 4.1-6.1 7.6-9.1 1.6-1.4 4-1.2 5.3.4 1.4 1.6 1.2 4-.4 5.3-2.8 2.5-4.7 4.7-5.9 7-1.4 2.6-1.9 5.3-1.3 7.6.3 1.4 1 2.8 1.7 4.3l1.5 3.3c2.1 5.6 2 12-.3 17.6-2.3 5.5-6.8 10.1-12.3 12.5-.4.2-.9.3-1.4.3zm40.8-51.3c1.5-.2 3 .5 3.8 1.9 1.1 1.8.4 4.2-1.4 5.3-3.7 2.1-6.4 5.6-7.6 9.5-1.2 4-.8 8.4 1.1 12.1.4.9 1 1.7 1.6 2.7 1 1.7 2.2 3.5 3 5.7 1.4 4 1.2 8.7-.6 13.2-1.4 3.4-3.5 6.6-6.8 10.1-1.5 1.6-3.9 1.7-5.5.2-1.6-1.4-1.7-3.9-.2-5.4 2.6-2.8 4.3-5.3 5.3-7.7 1.1-2.8 1.3-5.6.5-7.9-.5-1.3-1.3-2.7-2.2-4.1-.6-1-1.3-2.1-1.9-3.2-2.8-5.4-3.4-11.9-1.7-17.8 1.8-5.9 5.8-11 11.2-14 .4-.4.9-.6 1.4-.6zM261.3 590.9c5.7 6.8 9 15.7 9.4 22.4.5 7.3-2.4 16.4-10.2 20.4-3 1.5-6.7 2.2-11.2 2.2-7.9-.1-12.9-2.9-15.4-8.4-2.1-4.7-2.3-11.4 1.8-15.9 3.2-3.5 7.8-4.1 11.2-1.6 1.2.9 1.5 2.7.6 3.9-.9 1.2-2.7 1.5-3.9.6-1.8-1.3-3.6.6-3.8.8-2.4 2.6-2.1 7-.8 9.9 1.5 3.4 4.7 5 10.4 5.1 3.6 0 6.4-.5 8.6-1.6 4.7-2.4 7.7-8.6 7.2-15-.5-7.3-5.3-18.2-13-23.9-4.2-3.1-8.5-4.1-12.9-3.1-3.1.7-6.2 2.4-9.7 5-6.6 5.1-11.7 11.8-14.2 19-2.7 7.7-2.1 15.8 1.9 23.9.7 1.4.1 3.1-1.3 3.7-1.4.7-3.1.1-3.7-1.3-4.6-9.4-5.4-19.2-2.2-28.2 2.9-8.2 8.6-15.9 16.1-21.6 4.1-3.1 8-5.1 11.8-6 6-1.4 12 0 17.5 4 2.1 1.7 4.1 3.6 5.8 5.7z'/%3E%3Ccircle cx='1013.7' cy='153.9' r='7.1'/%3E%3Ccircle cx='1024.3' cy='132.1' r='7.1'/%3E%3Ccircle cx='1037.3' cy='148.9' r='7.1'/%3E%3Cpath d='M1508.7 297.2c-4.8-5.4-9.7-10.8-14.8-16.2 5.6-5.6 11.1-11.5 15.6-18.2 1.2-1.7.7-4.1-1-5.2-1.7-1.2-4.1-.7-5.2 1-4.2 6.2-9.1 11.6-14.5 16.9-4.8-5-9.7-10-14.7-14.9-1.5-1.5-3.9-1.5-5.3 0-1.5 1.5-1.5 3.9 0 5.3 4.9 4.8 9.7 9.8 14.5 14.8-1.1 1.1-2.3 2.2-3.5 3.2-4.1 3.8-8.4 7.8-12.4 12-1.4 1.5-1.4 3.8 0 5.3 1.5 1.4 3.9 1.4 5.3-.1 3.9-4 8.1-7.9 12.1-11.7 1.2-1.1 2.3-2.2 3.5-3.3 4.9 5.3 9.8 10.6 14.6 15.9l.2.2c1.4 1.4 3.7 1.5 5.2.2 1.7-1.2 1.8-3.6.4-5.2zM327.6 248.6l-.4-2.6c-1.5-11.1-2.2-23.2-2.3-37 0-5.5 0-11.5.2-18.5v-2.3c0-5 0-11.2 3.9-13.5 2.2-1.3 5.1-1 8.5.9 5.7 3.1 13.2 8.7 17.5 14.9 5.5 7.8 7.3 16.9 5 25.7-3.2 12.3-15 31-30 32.1l-2.4.3zm4.5-69.4c-.2 0-.3 0-.4.1-.1.1-.7.5-1.1 2.7-.3 1.9-.3 4.2-.3 6.3v2.4c-.2 6.9-.2 12.8-.2 18.3.1 12.5.7 23.5 2 33.7 11-2.7 20.4-18.1 23-27.8 1.9-7.2.4-14.8-4.2-21.3-3.9-5.5-10.9-10.6-15.9-13.3-1.4-.8-2.4-1.1-2.9-1.1zM516.3 60.8c-.1 0-.2 0-.4-.1-2.4-.7-4-.9-6.7-.7-.7 0-1.3-.5-1.4-1.2 0-.7.5-1.3 1.2-1.4 3.1-.2 4.9 0 7.6.8.7.2 1.1.9.9 1.6-.2.6-.7 1-1.2 1zm-10.2 9.7c-.5 0-1-.3-1.2-.8-.8-2.1-1.2-4.3-1.3-6.6 0-.7.5-1.3 1.2-1.3s1.3.5 1.3 1.2c.1 2 .5 3.9 1.1 5.8.2.7-.1 1.4-.8 1.6 0 .1-.2.1-.3.1zm-12-6.1c-.4 0-.8-.2-1-.5-.4-.6-.3-1.4.2-1.8 1.8-1.4 3.7-2.6 5.8-3.6.6-.3 1.4 0 1.7.6.3.6 0 1.4-.6 1.7-1.9.9-3.7 2-5.3 3.3-.2.2-.5.3-.8.3zm6.4-9.1c-.5 0-.9-.3-1.2-.7-.5-1-1.2-1.9-2.4-3.4-.3-.4-.7-.9-1.1-1.4-.4-.6-.3-1.4.2-1.8.6-.4 1.4-.3 1.8.2.4.5.8 1 1.1 1.4 1.3 1.6 2.1 2.6 2.7 3.9.3.6 0 1.4-.6 1.7-.1.1-.3.1-.5.1zm6.2-.3c-.3 0-.5-.1-.8-.2-.6-.4-.7-1.2-.3-1.8 1.2-1.7 2.3-3.4 3.3-5.2.3-.6 1.1-.9 1.7-.5.6.3.9 1.1.5 1.7-1 1.9-2.2 3.8-3.5 5.6-.2.2-.5.4-.9.4zm522.6 327.8c-.1 0-.2 0-.4-.1-2.4-.7-4-.9-6.7-.7-.7 0-1.3-.5-1.4-1.2 0-.7.5-1.3 1.2-1.4 3.1-.2 4.9 0 7.6.8.7.2 1.1.9.9 1.6-.2.6-.7 1-1.2 1zm-10.2 9.7c-.5 0-1-.3-1.2-.8-.8-2.1-1.2-4.3-1.3-6.6 0-.7.5-1.3 1.2-1.3s1.3.5 1.3 1.2c.1 2 .5 3.9 1.1 5.8.2.7-.1 1.4-.8 1.6 0 .1-.2.1-.3.1zm-12-6.1c-.4 0-.8-.2-1-.5-.4-.6-.3-1.4.2-1.8 1.8-1.4 3.7-2.6 5.8-3.6.6-.3 1.4 0 1.7.6.3.6 0 1.4-.6 1.7-1.9.9-3.7 2-5.3 3.3-.2.2-.5.3-.8.3zm6.4-9.1c-.5 0-.9-.3-1.2-.7-.5-1-1.2-1.9-2.4-3.4-.3-.4-.7-.9-1.1-1.4-.4-.6-.3-1.4.2-1.8.6-.4 1.4-.3 1.8.2.4.5.8 1 1.1 1.4 1.3 1.6 2.1 2.6 2.7 3.9.3.6 0 1.4-.6 1.7-.1.1-.3.1-.5.1zm6.2-.3c-.3 0-.5-.1-.8-.2-.6-.4-.7-1.2-.3-1.8 1.2-1.7 2.3-3.4 3.3-5.2.3-.6 1.1-.9 1.7-.5.6.3.9 1.1.5 1.7-1 1.9-2.2 3.8-3.5 5.6-.2.2-.5.4-.9.4zm310 196.4c-1.4 0-2.9-.2-4.5-.7-8.4-2.7-16.6-12.7-18.7-20-.4-1.4-.7-2.9-.9-4.4-8.1 3.3-15.5 10.6-15.4 21 0 1.5-1.2 2.7-2.7 2.8-1.5 0-2.7-1.2-2.7-2.7-.1-6.7 2.4-12.9 7-18 3.6-4 8.4-7.1 13.7-8.8.5-6.5 3.1-12.9 7.4-17.4 7-7.4 18.2-8.9 27.3-10.1l.7-.1c1.5-.2 2.9.9 3.1 2.3.2 1.5-.9 2.9-2.3 3.1l-.7.1c-8.6 1.2-18.4 2.5-24 8.4-3 3.2-5 7.7-5.7 12.4 7.9-1 17.7 1.3 24.3 5.7 4.3 2.9 7.1 7.8 7.2 12.7.2 4.3-1.7 8.3-5.2 11.1-2.4 1.6-5 2.6-7.9 2.6zm-18.7-26.7c.1 1.5.4 3 .8 4.4 1.7 5.8 8.7 14.2 15.1 16.3 2.8.9 5.1.5 7.2-1.1 2.7-2.1 3.2-4.8 3.1-6.6-.1-3.2-2-6.4-4.8-8.3-5.7-3.9-14.7-5.8-21.4-4.7z'/%3E%3C/g%3E%3C/svg%3E");
        }

        .c-services__item {
            background: #fff;
            padding: calc(var(--s2) - 0.6rem) var(--s1);
            border-radius: 25px;
            box-shadow: 0 7px 20px rgba(100, 28, 2, 0.135);
            transition: all 300ms ease, transform 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            z-index: 1;
        }

        @media (min-width: 40.625em) {
            .c-services__item {
                transform: translateY(-85px);
            }
        }

        @media (min-width: 48em) {
            .c-services__item {
                transform: translateY(-130px);
            }
        }

        @media (min-width: 40.625em) {
            .c-services__item:nth-of-type(1) {
                grid-column: 1/-1;
                grid-row: 4;
            }
        }

        @media (min-width: 62em) {
            .c-services__item:nth-of-type(1) {
                grid-column: 5/-1;
                grid-row: 3;
            }
        }

        @media (min-width: 40.625em) {
            .c-services__item:nth-of-type(2) {
                grid-column: 1/span 3;
                grid-row: 2;
            }
        }

        @media (min-width: 62em) {
            .c-services__item:nth-of-type(2) {
                grid-column: 3/span 2;
                grid-row: auto;
            }
        }

        @media (min-width: 40.625em) {
            .c-services__item:nth-of-type(3) {
                grid-column: 4/-1;
            }
        }

        @media (min-width: 62em) {
            .c-services__item:nth-of-type(3) {
                grid-column: 4/-1;
                grid-row: 2;
            }
        }

        @media (min-width: 40.625em) {
            .c-services__item:nth-of-type(4) {
                grid-column: 1/span 4;
            }
        }

        @media (min-width: 62em) {
            .c-services__item:nth-of-type(4) {
                grid-column: 1/span 3;
            }
        }

        @media (min-width: 40.625em) {
            .c-services__item:nth-of-type(5) {
                grid-column: 5/-1;
            }
        }

        @media (min-width: 62em) {
            .c-services__item:nth-of-type(5) {
                grid-column: 1/span 4;
            }
        }

        @media (min-width: 40.625em) {
            .c-services__item:nth-of-type(6) {
                grid-column: 1/span 4;
                grid-row: 1;
            }
        }

        @media (min-width: 62em) {
            .c-services__item:nth-of-type(6) {
                grid-column: 1/span 2;
                grid-row: 1;
            }
        }

        /* @media (min-width: 40.625em) {
            .c-services__item:nth-of-type(7) {
                grid-column: 5/-1;
            }
        }

        @media (min-width: 62em) {
            .c-services__item:nth-of-type(7) {
                grid-column: 1/span 4;
            }
        }

        @media (min-width: 40.625em) {
            .c-services__item:nth-of-type(8) {
                grid-column: 1/span 4;
                grid-row: 4;
            }
        }

        @media (min-width: 62em) {
            .c-services__item:nth-of-type(8) {
                grid-column: 1/span 2;
                grid-row: 4;
            }
        }

        @media (min-width: 40.625em) {
            .c-services__item:nth-of-type(9) {
                grid-column: 1/span 4;
                grid-row: 5;
            }
        }

        @media (min-width: 62em) {
            .c-services__item:nth-of-type(9) {
                grid-column: 1/span 2;
                grid-row: 5;
            }
        } */

        .c-services__item h3 {
            color: var(--color-brand-primary);
            font-size: var(--s1);
            line-height: 1.2;
        }

        .c-services__item:after {
            content: "";
            display: block;
            position: absolute;
            bottom: 0;
            right: 0;
            width: 50px;
            height: 50px;
            border-radius: 25px 0;
            cursor: pointer;
            transition: inherit;
            background-color: var(--color-brand-accent);
            background-size: 20px 20px;
            background-repeat: no-repeat;
            background-position: center;
            background-image: url("data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzMwMHB4JyB3aWR0aD0nMzAwcHgnICBmaWxsPSIjZmZmZmZmIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGRhdGEtbmFtZT0iTGF5ZXIgMSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHg9IjBweCIgeT0iMHB4Ij48dGl0bGU+NTI8L3RpdGxlPjxwYXRoIGQ9Ik04MS4zMDMyOSwzOC41MjkzOUExNC4wMTgsMTQuMDE4LDAsMSwwLDYxLjQ3NywxOC43MDY3MUw0Ny4wMDMxNSwzMy4xNzkxNGExNC4wMzAzNywxNC4wMzAzNywwLDAsMCwwLDE5LjgyMTcxLDQuODAxMTMsNC44MDExMywwLDAsMS02Ljc4OTc5LDYuNzg5ODcsMjMuNjQzMjcsMjMuNjQzMjcsMCwwLDEsMC0zMy40MDE0NUw1NC42ODcyMSwxMS45MTY4NEEyMy42MjAzLDIzLjYyMDMsMCwwLDEsODguMDkzMDgsNDUuMzE5MjdMODAuOTIzOCw1Mi40ODcxMWE0LjgwMTE0LDQuODAxMTQsMCwwLDEtNi43ODk4LTYuNzg5ODdaTTExLjkwNzQxLDg4LjA5MzlhMjMuNjUwNTMsMjMuNjUwNTMsMCwwLDAsMzMuNDA1ODYtLjAwMUw1OS43ODY2NCw3My42MjE0N2EyMy42MTU4MywyMy42MTU4MywwLDAsMCwwLTMzLjQwMTQ1LDQuODAxMTQsNC44MDExNCwwLDAsMC02Ljc4OTc5LDYuNzg5ODgsMTQuMDE1MzEsMTQuMDE1MzEsMCwwLDEsMCwxOS44MjI2OEwzOC41MjM0OCw4MS4zMDRBMTQuMDE4LDE0LjAxOCwwLDEsMSwxOC42OTcyLDYxLjQ4MTM1TDI1Ljg2Niw1NC4zMTM1YTQuODAxMTQsNC44MDExNCwwLDAsMC02Ljc4OTgtNi43ODk4N2wtNy4xNjg3OSw3LjE2Nzg1QTIzLjY0NDg5LDIzLjY0NDg5LDAsMCwwLDExLjkwNzQxLDg4LjA5MzlaIj48L3BhdGg+PC9zdmc+");
        }

        .c-services__item p {
            margin-top: var(--s-1);
            font-weight: 400;
            color: #706d7e;
        }

        .c-services__item:hover {
            background-color: var(--color-brand-accent);
        }

        @media (min-width: 40.625em) {
            .c-services__item:hover {
                transform: translateY(-93px);
            }
        }

        @media (min-width: 48em) {
            .c-services__item:hover {
                transform: translateY(-138px);
            }
        }

        .c-services__item:hover h3 {
            color: #fff;
        }

        .c-services__item:hover p {
            color: rgba(255, 255, 255, 0.8);
        }

        .c-services__item:hover:after {
            background-color: #fff;
            background-image: url("data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzMwMHB4JyB3aWR0aD0nMzAwcHgnICBmaWxsPSIjZmI2ZjNjIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGRhdGEtbmFtZT0iTGF5ZXIgMSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHg9IjBweCIgeT0iMHB4Ij48dGl0bGU+NTI8L3RpdGxlPjxwYXRoIGQ9Ik04MS4zMDMyOSwzOC41MjkzOUExNC4wMTgsMTQuMDE4LDAsMSwwLDYxLjQ3NywxOC43MDY3MUw0Ny4wMDMxNSwzMy4xNzkxNGExNC4wMzAzNywxNC4wMzAzNywwLDAsMCwwLDE5LjgyMTcxLDQuODAxMTMsNC44MDExMywwLDAsMS02Ljc4OTc5LDYuNzg5ODcsMjMuNjQzMjcsMjMuNjQzMjcsMCwwLDEsMC0zMy40MDE0NUw1NC42ODcyMSwxMS45MTY4NEEyMy42MjAzLDIzLjYyMDMsMCwwLDEsODguMDkzMDgsNDUuMzE5MjdMODAuOTIzOCw1Mi40ODcxMWE0LjgwMTE0LDQuODAxMTQsMCwwLDEtNi43ODk4LTYuNzg5ODdaTTExLjkwNzQxLDg4LjA5MzlhMjMuNjUwNTMsMjMuNjUwNTMsMCwwLDAsMzMuNDA1ODYtLjAwMUw1OS43ODY2NCw3My42MjE0N2EyMy42MTU4MywyMy42MTU4MywwLDAsMCwwLTMzLjQwMTQ1LDQuODAxMTQsNC44MDExNCwwLDAsMC02Ljc4OTc5LDYuNzg5ODgsMTQuMDE1MzEsMTQuMDE1MzEsMCwwLDEsMCwxOS44MjI2OEwzOC41MjM0OCw4MS4zMDRBMTQuMDE4LDE0LjAxOCwwLDEsMSwxOC42OTcyLDYxLjQ4MTM1TDI1Ljg2Niw1NC4zMTM1YTQuODAxMTQsNC44MDExNCwwLDAsMC02Ljc4OTgtNi43ODk4N2wtNy4xNjg3OSw3LjE2Nzg1QTIzLjY0NDg5LDIzLjY0NDg5LDAsMCwwLDExLjkwNzQxLDg4LjA5MzlaIj48L3BhdGg+PC9zdmc+");
        }

        .header {
            background: linear-gradient(180deg, rgb(0 0 0) 0%, rgb(0 0 0) 60%, rgba(255, 255, 255, 0) 100%);
        }
    </style>


 
    <!-- end preloader -->
    <div class="transition-overlay"></div>
    <!-- end transition-overlay -->
    <main>
        <!-- end hamburger-navigation -->
        <svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path class="shape-overlays__path" d=""></path>
            <path class="shape-overlays__path" d=""></path>
            <path class="shape-overlays__path" d=""></path>
        </svg>
        <?php include 'includes/header.php' ?>
        <section class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!--<div class="swiper-slide bg-image" data-background="images/hero1.jpg" data-stellar-background-ratio="0.5">-->
                    <!--    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/HHSK9jjuSTI?si=9L75riBYS7qnGTMH&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                    <!--</div>-->
                    <!-- end swiper-slide -->
                    <div class="swiper-slide bg-image" data-background="banner-images/d/google-ads1.jpg" data-stellar-background-ratio="0.5">
                        <!--<div class="inner">-->
                        <!--    <h5 data-swiper-parallax="-600">USER INTERFACE</h5>-->
                        <!--    <h2 data-swiper-parallax="-400">Custom design for users</h2>-->
                        <!--    <p data-swiper-parallax="-200">Lorem ipsum dolor sit amet, <u>consectetur adipiscing</u> elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec.</p>-->
                        <!--    <a href="#" class="link">DISCOVER NOW</a>-->
                        <!--</div>-->
                        <!-- end inner -->
                    </div>
                    <!-- end swiper-slide -->
                    <div class="swiper-slide bg-image" data-background="banner-images/d/google-ads2.jpg" data-stellar-background-ratio="0.5">
                        <!--<div class="inner">-->
                        <!--    <h5 data-swiper-parallax="-600">EASY TO USE</h5>-->
                        <!--    <h2 data-swiper-parallax="-400">Setting easy admin system </h2>-->
                        <!--    <p data-swiper-parallax="-200">Lorem ipsum dolor sit amet, <u>consectetur adipiscing</u> elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec.</p>-->
                        <!--    <a href="#" class="link">DISCOVER NOW</a>-->
                        <!--</div>-->
                        <!-- end inner -->
                    </div>
                    <!-- end swiper-slide -->
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Navigation -->
                <div class="swiper-button-prev"><span>PREV</span><img src="images/arrow-left.svg" alt="Image"></div>
                <span class="swiper-button-line"></span>
                <div class="swiper-button-next"><span>NEXT</span><img src="images/arrow-right.svg" alt="Image"></div>
            </div>
            <!-- end swiper-container -->
            <div class="scroll-down"><span></span></div>
        </section>
        <!-- end slider -->


        <!-- end project-hero -->
        <section class="content">
            <div class="project-detail">
                <div class="container">
                    <!-- end navbar -->
                    <div class="project" id="client">
                     <span class="whats-app" id="whatsapp-message"> <h2>Google Ads</h2></span>  
                        <p class="lead">
                           <h3 style="font-size:40px;">Strategic Google Ads campaigns tailored to enhance your online visibility and reach.</h3> 
                        </p><br>
                        <p>
                         Stay ahead of the competition with our Google Ads Service. We optimize campaigns for maximum impact, ensuring your business is visible to those actively searching for your products or services.

                           Achieve instant visibility on Google. Our Ads Service ensures your business appears at the top, precisely when potential customers are searching for your products or services. Maximize your online presence with our Google Ads expertise.
                        </p>

                        <section class="content">
                            <div class="about-studio">
                                <figure class="hero-image wow fadeInUp"> <img src="inner-images/google-ads.jpg" alt="Image"></figure>
                                <!--<div class="container">-->
                                <!--    <div class="row">-->
                                <!--        <div class="col-md-4 wow fadeInLeft">-->
                                <!--            <h5>KMF Media Promotions</h5>-->
                                <!--            <p class="lead"> Setting a financial operation apart from the crowd </p>-->
                                <!--            <a href="#" class="link">support.anchor.com</a>-->
                                <!--        </div>-->
                                        <!-- end col-4 -->
                                <!--        <div class="col-md-8 wow fadeInRight">-->
                                <!--            <p class="lead">The only fear they entertain of attack is from the green <u>Martians</u> or some demented-->
                                <!--                red man, as all <u>Barsoomians</u> realize that the very existence of every form of life of Mars is-->
                                <!--                dependent upon the uninterrupted working of this plant.</p>-->
                                <!--            <p>As we approached the palace I could see through the great windows of the first floor into the-->
                                <!--                brilliantly illuminated audience chamber of <strong>Than Kosis</strong>. The immense hall was crowded-->
                                <!--                with nobles and their women, as though some important function was in progress. There was not a guard in-->
                                <!--                sight without the palace, due, I presume, to the fact that the city and palace walls were considered-->
                                <!--                impregnable, and so I came close and peered within.</p>-->
                                <!--            <p>The immense hall was crowded with <u>nobles</u> and <u>their women</u>, as though some important-->
                                <!--                function was in progress. </p>-->
                                <!--        </div>-->
                                        <!--end col-6 -->
                                <!--    </div>-->
                                    <!-- end row -->
                                <!--</div>-->
                                <!-- end container -->
                            </div>
                            <!-- end about-studio -->
                        </section>
                        
                                                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
	<!--<div class="pricing-container">-->
	<!--	<ul class="pricing-list bounce-invert">-->
	<!--		<li>-->
	<!--			<ul class="pricing-wrapper">-->
	<!--				<li data-type="monthly" class="is-visible">-->
	<!--					<header class="pricing-header">-->
	<!--						<h2 style="font-size:42px;">Tester's Bag</h2>-->
	<!--						<div class="price">-->
	<!--							<span class="currency">₹</span>-->
	<!--							<span class="value">5000</span>-->
	<!--							<span class="duration">mo</span>-->
	<!--						</div>-->
	<!--					</header>-->
	<!--					<div class="pricing-body">-->
	<!--						<ul class="pricing-features">-->
	<!--							<li><em>20,000+</em> Views</li>-->
	<!--							<li><em>1,000+</em> Likes</li>-->
	<!--							<li><em>Location</em> Targeting✅</li>-->
	<!--							<li><em>Interest</em> Targeting✅ </li>-->
	<!--							<li><em>Language </em> Targeting✅ </li>-->
	<!--							<li><em>Targeted </em> Audience ✅</li>-->
	<!--						</ul>-->
	<!--					</div>-->
	<!--					<footer class="pricing-footer">-->
	<!--						<a class="select" href="contact-us.php">Book Now</a>-->
	<!--					</footer>-->
	<!--				</li>-->
	<!--				<li data-type="yearly" class="is-hidden">-->
	<!--					<header class="pricing-header">-->
	<!--						<h2 style="font-size:42px;">Basic</h2>-->
	<!--						<div class="price">-->
	<!--							<span class="currency">$</span>-->
	<!--							<span class="value">320</span>-->
	<!--							<span class="duration">yr</span>-->
	<!--						</div>-->
	<!--					</header>-->
	<!--					<div class="pricing-body">-->
	<!--						<ul class="pricing-features">-->
	<!--							<li><em>5</em> Email Accounts</li>-->
	<!--							<li><em>1</em> Template Style</li>-->
	<!--							<li><em>25</em> Products Loaded</li>-->
	<!--							<li><em>1</em> Image per Product</li>-->
	<!--							<li><em>Unlimited</em> Bandwidth</li>-->
	<!--							<li><em>24/7</em> Support</li>-->
	<!--						</ul>-->
	<!--					</div>-->
	<!--					<footer class="pricing-footer">-->
	<!--						<a class="select" href="contact-us.php">Book Now</a>-->
	<!--					</footer>-->
	<!--				</li>-->
	<!--			</ul>-->
	<!--		</li>-->
	<!--		<li class="exclusive">-->
	<!--			<ul class="pricing-wrapper">-->
	<!--				<li data-type="monthly" class="is-visible">-->
	<!--					<header class="pricing-header">-->
	<!--						<h2 style="font-size:42px; color:#1BBC9D;">Fan Finder <br>(<span style="color:	#DAA520;">Gold</span>)</h2>-->
	<!--						<div class="price">-->
	<!--							<span class="currency">₹</span>-->
	<!--							<span class="value">25,000</span>-->
	<!--							<span class="duration">mo</span>-->
	<!--						</div>-->
	<!--					</header>-->
	<!--					<div class="pricing-body">-->
	<!--						<ul class="pricing-features">-->
	<!--							<li><em>100,000+</em> Views</li>-->
	<!--							<li><em>5000+</em> Likes</li>-->
	<!--							<li><em>Location</em> Targeting✅</li>-->
	<!--							<li><em>Interest</em> Targeting✅ </li>-->
	<!--							<li><em>Language </em> Targeting✅ </li>-->
	<!--							<li><em>Targeted </em> Audience ✅</li>-->
	<!--						</ul>-->
	<!--					</div>-->
	<!--					<footer class="pricing-footer">-->
	<!--						<a class="select" href="contact-us.php">Book Now</a>-->
	<!--					</footer>-->
	<!--				</li>-->
	<!--				<li data-type="yearly" class="is-hidden">-->
	<!--					<header class="pricing-header">-->
	<!--						<h2 style="font-size:42px;">Exclusive</h2>-->
	<!--						<div class="price">-->
	<!--							<span class="currency">$</span>-->
	<!--							<span class="value">630</span>-->
	<!--							<span class="duration">yr</span>-->
	<!--						</div>-->
	<!--					</header>-->
	<!--					<div class="pricing-body">-->
	<!--						<ul class="pricing-features">-->
	<!--							<li><em>15</em> Email Accounts</li>-->
	<!--							<li><em>3</em> Template Styles</li>-->
	<!--							<li><em>40</em> Products Loaded</li>-->
	<!--							<li><em>7</em> Images per Product</li>-->
	<!--							<li><em>Unlimited</em> Bandwidth</li>-->
	<!--							<li><em>24/7</em> Support</li>-->
	<!--						</ul>-->
	<!--					</div>-->
	<!--					<footer class="pricing-footer">-->
	<!--						<a class="select" href="contact-us.php">Book Now</a>-->
	<!--					</footer>-->
	<!--				</li>-->
	<!--			</ul>-->
	<!--		</li>-->
	<!--		<li>-->
	<!--			<ul class="pricing-wrapper">-->
	<!--				<li data-type="monthly" class="is-visible">-->
	<!--					<header class="pricing-header">-->
	<!--						<h2 style="font-size:42px;">Brand Builder</h2>-->
	<!--						<div class="price">-->
	<!--							<span class="currency">₹</span>-->
	<!--							<span class="value">50,000</span>-->
	<!--							<span class="duration">mo</span>-->
	<!--						</div>-->
	<!--					</header>-->
	<!--					<div class="pricing-body">-->
	<!--						<ul class="pricing-features">-->
	<!--							<li><em>1 Million+</em> Views</li>-->
	<!--							<li><em>30k+</em> Likes</li>-->
	<!--							<li><em>2000+</em> Comments</li>-->
	<!--							<li><em>2000+</em> Subscribers</li>-->
	<!--							<li><em>Language </em> Targeting✅ </li>-->
	<!--							<li><em>Targeted </em> Audience ✅</li>-->
	<!--						</ul>-->
	<!--					</div>-->
	<!--					<footer class="pricing-footer">-->
	<!--						<a class="select" href="contact-us.php">Book Now</a>-->
	<!--					</footer>-->
	<!--				</li>-->
	<!--				<li data-type="yearly" class="is-hidden">-->
	<!--					<header class="pricing-header">-->
	<!--						<h2 style="font-size:42px;">Pro</h2>-->
	<!--						<div class="price">-->
	<!--							<span class="currency">$</span>-->
	<!--							<span class="value">950</span>-->
	<!--							<span class="duration">yr</span>-->
	<!--						</div>-->
	<!--					</header>-->
	<!--					<div class="pricing-body">-->
	<!--						<ul class="pricing-features">-->
	<!--							<li><em>20</em> Email Accounts</li>-->
	<!--							<li><em>5</em> Template Styles</li>-->
	<!--							<li><em>50</em> Products Loaded</li>-->
	<!--							<li><em>10</em> Images per Product</li>-->
	<!--							<li><em>Unlimited</em> Bandwidth</li>-->
	<!--							<li><em>24/7</em> Support</li>-->
	<!--						</ul>-->
	<!--					</div>-->
	<!--					<footer class="pricing-footer">-->
	<!--						<a class="select" href="contact-us.php">Book Now</a>-->
	<!--					</footer>-->
	<!--				</li>-->
	<!--			</ul>-->
	<!--		</li>-->
	<!--	</ul>-->
	<!--</div>-->
	
	<style>
	    html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section, main {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
*,
*::after,
*::before {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

html {
	font-size: 62.5%;
}

html * {
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

body {
	font-size: 1.6rem;
	font-family: "Open Sans", sans-serif;
	color: #2d3d4f;
	background-color: #1E3F52;
}

a {
	text-decoration: none;
}

.pricing-container {
	width: 90%;
	max-width: 1170px;
	margin: 4em auto;
}

.pricing-container {
    margin: 6em auto;
}
.pricing-container.full-width {
    width: 100%;
    max-width: none;
}

.pricing-switcher {
	text-align: center;
}

.pricing-switcher .fieldset {
	display: inline-block;
	position: relative;
	padding: 2px;
	border-radius: 50em;
	border: 2px solid #2d3e50;
}

.pricing-switcher input[type="radio"] {
	position: absolute;
	opacity: 0;
}

.pricing-switcher label {
	position: relative;
	z-index: 1;
	display: inline-block;
	float: left;
	width: 90px;
	height: 40px;
	line-height: 40px;
	cursor: pointer;
	font-size: 1.4rem;
	color: #ffffff;
}

.pricing-switcher .switch {
	position: absolute;
	top: 2px;
	left: 2px;
	height: 40px;
	width: 90px;
	background-color: #2d3e50;
	border-radius: 50em;
	-webkit-transition: -webkit-transform 0.5s;
	-moz-transition: -moz-transform 0.5s;
	transition: transform 0.5s;
}

.pricing-switcher input[type="radio"]:checked + label + .switch,
.pricing-switcher input[type="radio"]:checked + label:nth-of-type(n) + .switch {
	-webkit-transform: translateX(90px);
	-moz-transform: translateX(90px);
	-ms-transform: translateX(90px);
	-o-transform: translateX(90px);
	transform: translateX(90px);
}

.no-js .pricing-switcher {
	display: none;
}

.pricing-list {
	margin: 2em 0 0;
}

.pricing-list > li {
	position: relative;
	margin-bottom: 1em;
}

@media only screen and (min-width: 768px) {
  .pricing-list {
    margin: 3em 0 0;
  }
  .pricing-list:after {
    content: "";
    display: table;
    clear: both;
  }
  .pricing-list > li {
    width: 33.3333333333%;
    float: left;
    padding-left: 5px;
    padding-right: 5px;
  }
  .has-margins .pricing-list > li {
    width: 32.3333333333%;
    float: left;
    margin-right: 1.5%;
  }
  .has-margins .pricing-list > li:last-of-type {
    margin-right: 0;
  }
}

.pricing-wrapper {
	position: relative;
}

.touch .pricing-wrapper {
	-webkit-perspective: 2000px;
	-moz-perspective: 2000px;
	perspective: 2000px;
}

.pricing-wrapper.is-switched .is-visible {
	-webkit-transform: rotateY(180deg);
	-moz-transform: rotateY(180deg);
	-ms-transform: rotateY(180deg);
	-o-transform: rotateY(180deg);
	transform: rotateY(180deg);
	-webkit-animation: rotate 0.5s;
	-moz-animation: rotate 0.5s;
	animation: rotate 0.5s;
}

.pricing-wrapper.is-switched .is-hidden {
	-webkit-transform: rotateY(0);
	-moz-transform: rotateY(0);
	-ms-transform: rotateY(0);
	-o-transform: rotateY(0);
	transform: rotateY(0);
	-webkit-animation: rotate-inverse 0.5s;
	-moz-animation: rotate-inverse 0.5s;
	animation: rotate-inverse 0.5s;
	opacity: 0;
}

.pricing-wrapper.is-switched .is-selected {
	opacity: 1;
}

.pricing-wrapper.is-switched.reverse-animation .is-visible {
	-webkit-transform: rotateY(-180deg);
	-moz-transform: rotateY(-180deg);
	-ms-transform: rotateY(-180deg);
	-o-transform: rotateY(-180deg);
	transform: rotateY(-180deg);
	-webkit-animation: rotate-back 0.5s;
	-moz-animation: rotate-back 0.5s;
	animation: rotate-back 0.5s;
}

.pricing-wrapper.is-switched.reverse-animation .is-hidden {
	-webkit-transform: rotateY(0);
	-moz-transform: rotateY(0);
	-ms-transform: rotateY(0);
	-o-transform: rotateY(0);
	transform: rotateY(0);
	-webkit-animation: rotate-inverse-back 0.5s;
	-moz-animation: rotate-inverse-back 0.5s;
	animation: rotate-inverse-back 0.5s;
	opacity: 0;
}

.pricing-wrapper.is-switched.reverse-animation .is-selected {
	opacity: 1;
}

.pricing-wrapper > li {
	background-color: #ffffff;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	outline: 1px solid transparent;
}

.pricing-wrapper > li::after {
	content: '';
	position: absolute;
	top: 0;
	right: 0;
	height: 100%;
	width: 50px;
	pointer-events: none;
	background: -webkit-linear-gradient( right , #ffffff, rgba(255, 255, 255, 0));
	background: linear-gradient(to left, #ffffff, rgba(255, 255, 255, 0));
}

.pricing-wrapper > li.is-ended::after {
	display: none;
}

.pricing-wrapper .is-visible {
	position: relative;
	z-index: 5;
}

.pricing-wrapper .is-hidden {
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	z-index: 1;
	-webkit-transform: rotateY(180deg);
	-moz-transform: rotateY(180deg);
	-ms-transform: rotateY(180deg);
	-o-transform: rotateY(180deg);
	transform: rotateY(180deg);
}

.pricing-wrapper .is-selected {
	z-index: 3 !important;
}

@media only screen and (min-width: 768px) {
  .pricing-wrapper > li::before {
    content: '';
    position: absolute;
    z-index: 6;
    left: -1px;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    height: 50%;
    width: 1px;
    background-color: #b1d6e8;
  }
  .pricing-wrapper > li::after {
    display: none;
  }
  .exclusive .pricing-wrapper > li {
    box-shadow: inset 0 0 0 3px #2d3e50;
  }
  .has-margins .pricing-wrapper > li,
  .has-margins .exclusive .pricing-wrapper > li {
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
  }
  :nth-of-type(1) > .pricing-wrapper > li::before {
    display: none;
  }
  .has-margins .pricing-wrapper > li {
    border-radius: 4px 4px 6px 6px;
  }
  .has-margins .pricing-wrapper > li::before {
    display: none;
  }
}

@media only screen and (min-width: 1500px) {
  .full-width .pricing-wrapper > li {
    padding: 2.5em 0;
  }
}

.no-js .pricing-wrapper .is-hidden {
	position: relative;
	-webkit-transform: rotateY(0);
	-moz-transform: rotateY(0);
	-ms-transform: rotateY(0);
	-o-transform: rotateY(0);
	transform: rotateY(0);
	margin-top: 1em;
}

@media only screen and (min-width: 768px) {
  .exclusive .pricing-wrapper > li::before {
    display: none;
  }
  .exclusive + li .pricing-wrapper > li::before {
    display: none;
  }
}

.pricing-header h2 {
	padding: 0.9em 0.9em 0.6em;
    font-weight: 400;
    margin-bottom: 30px;
    margin-top: 10px;
    text-transform: uppercase;
	text-align: center;
}

.pricing-header {
    height: auto;
    padding: 1.9em 0 1.6em;
    pointer-events: auto;
    text-align: center;
    color: #173d50;
    background-color: transparent;
}

.exclusive .pricing-header {
    color: #1E3F52;
    background-color: transparent;
}

.pricing-header h2 {
    font-size: 2.8rem;
    letter-spacing: 2px;
}

.currency,
.value {
	font-size: 3rem;
	font-weight: 300;
}

.duration {
	font-weight: 700;
	font-size: 1.3rem;
	color: #8dc8e4;
	text-transform: uppercase;
}

.exclusive .duration {
	color: #f3b6ab;
}

.duration::before {
	content: '/';
	margin-right: 2px;
}

.value {
    font-size: 7rem;
    font-weight: 300;
}

.currency, 
.duration {
    color: #1E3F52;
}

.exclusive .currency,
.exclusive .duration {
    color: #2d3e50;
}

.currency {
    display: inline-block;
    margin-top: 10px;
    vertical-align: top;
    font-size: 2rem;
    font-weight: 700;
}

.duration {
    font-size: 1.4rem;
}

.pricing-body {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

.is-switched .pricing-body {
  overflow: hidden;
}

.pricing-body {
    overflow-x: visible;
}

.pricing-features {
	width: 600px;
}

.pricing-features:after {
	content: "";
	display: table;
	clear: both;
}

.pricing-features li {
	width: 100px;
	float: left;
	padding: 1.6em 1em;
	font-size: 1.5rem;
	text-align: center;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}

.pricing-features em {
	display: block;
	margin-bottom: 5px;
	font-weight: 600;
}

.pricing-features {
    width: auto;
}

.pricing-features li {
    float: none;
    width: auto;
    padding: 1em;
}

.exclusive .pricing-features li {
    margin: 0 3px;
}
  
.pricing-features em {
    display: inline-block;
    margin-bottom: 0;
}

.has-margins .exclusive .pricing-features li {
    margin: 0;
}

.pricing-footer {
	position: absolute;
	z-index: 1;
	top: 0;
	left: 0;
	height: 80px;
	width: 100%;
}

.pricing-footer {
    position: relative;
    height: auto;
    padding: 1.8em 0;
    text-align: center;
}

.pricing-footer::after {
    display: none;
}

.has-margins .pricing-footer {
    padding-bottom: 0;
}

.select {
	position: relative;
	z-index: 1;
	display: block;
	height: 100%;
	overflow: hidden;
	text-indent: 100%;
	white-space: nowrap;
	color: transparent;
}

.select {
    position: static;
    display: inline-block;
    height: auto;
    padding: 1.3em 2em;
    color: #1E3F52;
    border-radius: 8px;
    border: 2px solid #1E3F52;
    font-size: 1.4rem;
    text-indent: 0;
    text-transform: uppercase;
    letter-spacing: 2px;
	transition: all .6s;
	width: 70%;
}

.no-touch .select:hover {
    background-color: #1E3F52;
	color: #ffffff;
}

.exclusive .select {
    background-color: #1E3F52;
	color: #ffffff;
}
  
.no-touch .exclusive .select:hover {
    background-color: #24e0ba;
}
  
.secondary-theme .exclusive .select {
    background-color: #1E3F52;
}
  
.no-touch .secondary-theme .exclusive .select:hover {
    background-color: #112e3c;
}
  
.has-margins .select {
    display: block;
    padding: 1.7em 0;
    border-radius: 0 0 4px 4px;
}

@-webkit-keyframes rotate {
  0% {
    -webkit-transform: perspective(2000px) rotateY(0);
  }
  70% {
    -webkit-transform: perspective(2000px) rotateY(200deg);
  }
  100% {
    -webkit-transform: perspective(2000px) rotateY(180deg);
  }
}

@-moz-keyframes rotate {
  0% {
    -moz-transform: perspective(2000px) rotateY(0);
  }
  70% {
    -moz-transform: perspective(2000px) rotateY(200deg);
  }
  100% {
    -moz-transform: perspective(2000px) rotateY(180deg);
  }
}

@keyframes rotate {
  0% {
    -webkit-transform: perspective(2000px) rotateY(0);
    -moz-transform: perspective(2000px) rotateY(0);
    -ms-transform: perspective(2000px) rotateY(0);
    -o-transform: perspective(2000px) rotateY(0);
    transform: perspective(2000px) rotateY(0);
  }
  70% {
    -webkit-transform: perspective(2000px) rotateY(200deg);
    -moz-transform: perspective(2000px) rotateY(200deg);
    -ms-transform: perspective(2000px) rotateY(200deg);
    -o-transform: perspective(2000px) rotateY(200deg);
    transform: perspective(2000px) rotateY(200deg);
  }
  100% {
    -webkit-transform: perspective(2000px) rotateY(180deg);
    -moz-transform: perspective(2000px) rotateY(180deg);
    -ms-transform: perspective(2000px) rotateY(180deg);
    -o-transform: perspective(2000px) rotateY(180deg);
    transform: perspective(2000px) rotateY(180deg);
  }
}

@-webkit-keyframes rotate-inverse {
  0% {
    -webkit-transform: perspective(2000px) rotateY(-180deg);
  }
  70% {
    -webkit-transform: perspective(2000px) rotateY(20deg);
  }
  100% {
    -webkit-transform: perspective(2000px) rotateY(0);
  }
}

@-moz-keyframes rotate-inverse {
  0% {
    -moz-transform: perspective(2000px) rotateY(-180deg);
  }
  70% {
    -moz-transform: perspective(2000px) rotateY(20deg);
  }
  100% {
    -moz-transform: perspective(2000px) rotateY(0);
  }
}

@keyframes rotate-inverse {
  0% {
    -webkit-transform: perspective(2000px) rotateY(-180deg);
    -moz-transform: perspective(2000px) rotateY(-180deg);
    -ms-transform: perspective(2000px) rotateY(-180deg);
    -o-transform: perspective(2000px) rotateY(-180deg);
    transform: perspective(2000px) rotateY(-180deg);
  }
  70% {
    -webkit-transform: perspective(2000px) rotateY(20deg);
    -moz-transform: perspective(2000px) rotateY(20deg);
    -ms-transform: perspective(2000px) rotateY(20deg);
    -o-transform: perspective(2000px) rotateY(20deg);
    transform: perspective(2000px) rotateY(20deg);
  }
  100% {
    -webkit-transform: perspective(2000px) rotateY(0);
    -moz-transform: perspective(2000px) rotateY(0);
    -ms-transform: perspective(2000px) rotateY(0);
    -o-transform: perspective(2000px) rotateY(0);
    transform: perspective(2000px) rotateY(0);
  }
}

@-webkit-keyframes rotate-back {
  0% {
    -webkit-transform: perspective(2000px) rotateY(0);
  }
  70% {
    -webkit-transform: perspective(2000px) rotateY(-200deg);
  }
  100% {
    -webkit-transform: perspective(2000px) rotateY(-180deg);
  }
}

@-moz-keyframes rotate-back {
  0% {
    -moz-transform: perspective(2000px) rotateY(0);
  }
  70% {
    -moz-transform: perspective(2000px) rotateY(-200deg);
  }
  100% {
    -moz-transform: perspective(2000px) rotateY(-180deg);
  }
}

@keyframes rotate-back {
  0% {
    -webkit-transform: perspective(2000px) rotateY(0);
    -moz-transform: perspective(2000px) rotateY(0);
    -ms-transform: perspective(2000px) rotateY(0);
    -o-transform: perspective(2000px) rotateY(0);
    transform: perspective(2000px) rotateY(0);
  }
  70% {
    -webkit-transform: perspective(2000px) rotateY(-200deg);
    -moz-transform: perspective(2000px) rotateY(-200deg);
    -ms-transform: perspective(2000px) rotateY(-200deg);
    -o-transform: perspective(2000px) rotateY(-200deg);
    transform: perspective(2000px) rotateY(-200deg);
  }
  100% {
    -webkit-transform: perspective(2000px) rotateY(-180deg);
    -moz-transform: perspective(2000px) rotateY(-180deg);
    -ms-transform: perspective(2000px) rotateY(-180deg);
    -o-transform: perspective(2000px) rotateY(-180deg);
    transform: perspective(2000px) rotateY(-180deg);
  }
}

@-webkit-keyframes rotate-inverse-back {
  0% {
    -webkit-transform: perspective(2000px) rotateY(180deg);
  }
  70% {
    -webkit-transform: perspective(2000px) rotateY(-20deg);
  }
  100% {
    -webkit-transform: perspective(2000px) rotateY(0);
  }
}

@-moz-keyframes rotate-inverse-back {
  0% {
    -moz-transform: perspective(2000px) rotateY(180deg);
  }
  70% {
    -moz-transform: perspective(2000px) rotateY(-20deg);
  }
  100% {
    -moz-transform: perspective(2000px) rotateY(0);
  }
}

@keyframes rotate-inverse-back {
  0% {
    -webkit-transform: perspective(2000px) rotateY(180deg);
    -moz-transform: perspective(2000px) rotateY(180deg);
    -ms-transform: perspective(2000px) rotateY(180deg);
    -o-transform: perspective(2000px) rotateY(180deg);
    transform: perspective(2000px) rotateY(180deg);
  }
  70% {
    -webkit-transform: perspective(2000px) rotateY(-20deg);
    -moz-transform: perspective(2000px) rotateY(-20deg);
    -ms-transform: perspective(2000px) rotateY(-20deg);
    -o-transform: perspective(2000px) rotateY(-20deg);
    transform: perspective(2000px) rotateY(-20deg);
  }
  100% {
    -webkit-transform: perspective(2000px) rotateY(0);
    -moz-transform: perspective(2000px) rotateY(0);
    -ms-transform: perspective(2000px) rotateY(0);
    -o-transform: perspective(2000px) rotateY(0);
    transform: perspective(2000px) rotateY(0);
  }
}
	</style>
	
	<style>
	    @media only screen and (max-width: 767px) {
    .project-detail .project h2 {
        font-size: 55px; /* Adjust this size according to your preference for smaller screens */
    }
    
    #whatsapp-icon {
        right: 12%;
    }
}
	</style>

                        <style>
                            .custom-card-container .card {
                                background: linear-gradient(268deg,
                                        rgba(255, 171, 188, 0.1) 0%,
                                        rgba(164, 179, 255, 0.1) 97%);
                                /* background-blend-mode: ; */
                                box-shadow:
                                    inset 0px 5px 5px 0px rgba(255, 255, 255, 0.1),
                                    inset 0px -5px 5px 0px rgba(164, 179, 255, 0.1);
                                backdrop-filter: blur(5px);
                                -webkit-backdrop-filter: blur(5px);
                                border: 1px solid transparent;
                            }

                            .custom-card-container .card {
                                border-radius: 20px;
                                padding: 20px;
                                /* background-color: #fff; */
                                box-shadow: 10px 10px 30px -3px rgba(0, 0, 0, 0.23);

                            }

                            .custom-card-container .card-wrapper {
                                padding: 20px;
                            }
                        </style>

                                               <div class="col-md-12 col-sm-12 col-12 wow fadeIn">
          <h2>Our <br> <span style="color:red;">Services</span></h2>
          <p>
                             Welcome to our services. We are dedicated to providing top-notch solutions to elevate your brand and meet your marketing needs. Explore our diverse range of services tailored to drive impactful results for your business.
                        </p>
      </div>
<hr>

                        <section class="c-section">
    <div class="container">
        <div class="row custom-card-container">
            <!-- Repeat the following card structure for each card -->
            <div class="card-wrapper col-md-4">
                <div class="card">
                    <h3 class="text-center text-bold big"><i class="fas fa-chart-bar" style="color: #3498db;"></i> Marketing Consultation</h3>

                    <hr>
                    <p>Elevate your brand with tailored marketing strategies through our expert Marketing Consultation services, driving impactful results.</p>
                    <!-- Add a button with a link to another page -->
                    <a href="music-marketing.php" class="btn btn-danger">Read More</a>
                </div>
            </div>

            <div class="card-wrapper col-md-4">
                <div class="card">
                    <h3 class="text-center text-bold big"><i class="far fa-newspaper" style="color: #e74c3c;"></i> Press Releases</h3>
                    <hr>
                    <p>Craft compelling narratives that captivate your audience with our Press Release services, strategically conveying your brand's milestones and stories.</p>
                    <!-- Add a button with a link to another page -->
                    <a href="press-releases.php" class="btn btn-danger">Read More</a>
                </div>
            </div>

            <div class="card-wrapper col-md-4">
                <div class="card">
                    <h3 class="text-center text-bold big"><i class="fab fa-google" style="color: #2ecc71;"></i> Google Ads</h3>
                    <hr>
                    <p>Maximize your advertising budget with strategic Google Ads placements, ensuring your brand reaches the right audience at the right moment.</p>
                    <!-- Add a button with a link to another page -->
                    <a href="google-ads.php" class="btn btn-danger">Read More</a>
                </div>
            </div>

            <div class="card-wrapper col-md-4">
                <div class="card">
                    <h3 class="text-center text-bold big"><i class="fab fa-meta" style="color: #9b59b6;"></i> Meta Ads</h3>
                    <hr>
                    <p>Elevate your brand presence on Meta platforms through innovative ad campaigns, connecting your business with millions of potential customers.</p>
                    <!-- Add a button with a link to another page -->
                    <a href="meta-ads.php" class="btn btn-danger">Read More</a>
                </div>
            </div>

            <div class="card-wrapper col-md-4">
                <div class="card">
                    <h3 class="text-center text-bold big"><i class="fab fa-spotify" style="color: #1db954;"></i> Spotify Promotions</h3>
                    <hr>
                    <p>Amplify your music's reach and impact with targeted Spotify promotions, reaching a wider audience and building a dedicated fan base.</p>
                    <!-- Add a button with a link to another page -->
                    <a href="spotify-promotions.php" class="btn btn-danger">Read More</a>
                </div>
            </div>

            <div class="card-wrapper col-md-4">
                <div class="card">
                    <h3 class="text-center text-bold big"><i class="fab fa-youtube" style="color: #ff0000;"></i> Youtube Promotions</h3>
                    <hr>
                    <p>Leverage YouTube's vast audience through targeted promotions, ensuring your content reaches the right viewers and drives interaction</p>
                    <!-- Add a button with a link to another page -->
                    <a href="youtube-promotions.php" class="btn btn-danger">Read More</a>
                </div>
            </div>

            <div class="card-wrapper col-md-4">
                <div class="card">
                    <h3 class="text-center text-bold big"><i class="fas fa-money-bill-alt" style="color: #27ae60;"></i> Influencer Marketing</h3>
                    <hr>
                    <p>Elevate your marketing strategy with strategic influencer collaborations, leveraging the trust and influence of key personalities to elevate your brand.</p>
                    <!-- Add a button with a link to another page -->
                    <a href="influencer-marketing.php" class="btn btn-danger">Read More</a>
                </div>
            </div>

            <div class="card-wrapper col-md-4">
                <div class="card">
                    <h3 class="text-center text-bold big"><i class="fab fa-instagram" style="color: #e1306c;"></i> Reels Promotions</h3>
                    <hr>
                    <p>Optimize your Reels strategy with our promotional expertise, ensuring your content stands out amidst the vast sea of short-form videos. Elevate your social media presence with our Reels Promotion service</p>
                    <!-- Add a button with a link to another page -->
                    <a href="reels-promotions.php" class="btn btn-danger">Read More</a>
                </div>
            </div>

            <div class="card-wrapper col-md-4">
                <div class="card">
                    <h3 class="text-center text-bold big"><i class="fas fa-music" style="color: #3498db;"></i> Music Distribution</h3>
                    <hr>
                    <p>Expand your music's reach across major platforms with our Music Distribution services, ensuring your tracks are accessible to a global audience. Our Music Distribution service puts your tracks on the map.</p>
                    <!-- Add a button with a link to another page -->
                    <a href="music-distribution.php" class="btn btn-danger">Read More</a>
                </div>
            </div>
            <!-- Repeat the above card structure for each card -->
        </div>
    </div>
</section>
<style>
    .big{
        font-size:25px;
    }
</style>
                    </div>
                </div>
                <!-- end container -->
            </div>
            <!-- end project-detail -->
        </section>
        <!-- end content -->
    </main>
    <div class="footer-spacing"></div>
    <!-- end footer-spacing -->
    <?php include "includes/footer.php" ?>
    <!-- end footer -->
    <audio id="link" src="audio/link.mp3" preload="auto"></audio>

    <!-- JS FILES -->
    <script src="js/jquery.min.js"></script>
    <script>
        // PRELOADER
        (function($) {
            $(window).load(function() {
                $("body").addClass("page-loaded");
            });
        })(jQuery)
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/fancybox.min.js"></script>
    <script src="js/jquery.stellar.js"></script>
    <script src="js/odometer.min.js"></script>
    <script src="js/hamburger.min.js"></script>
    <script src="js/easings.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/perspective.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/contact.form.min.js"></script>
    <script src="js/jquery.form.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="js/googlemaps.min.js"></script>
         <script>
    function sendWhatsAppMessage() {
      var message = "Hello KMF Media, I am interested in " + document.getElementById("whatsapp-message").innerText;
      var encodedMessage = encodeURIComponent(message);

      var whatsappLink = "https://wa.me/917666086521?text=" + encodedMessage;
      window.open(whatsappLink, "_blank");
    }
  </script>

</body>

</html>