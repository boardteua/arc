<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://weekdays.te.ua
 * @since      1.0.0
 *
 * @package    loyalty
 * @subpackage loyalty/inc/frontend/views
 */
?>

<?php

$tabs = '<div class="row mb-4 align-items-center">'
        . '<div class="col-md-5">'
        . '<a class="logotype" href="#arc_register" >'
        . '<svg width="450"  viewBox="0 0 6717 995" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M0 0H71V202C85 202 97 201 107 198C118 196 128 192 136 185C145 179 153 170 160 158C168 147 175 132 182 114C191 92 200 73 209 59C219 44 229 32 240 24C252 15 264 9 278 5C292 2 307 0 325 0H336V64C320 64 307 65 296 68C286 71 278 76 271 83C264 89 258 98 253 108C248 118 243 131 238 145C235 154 231 163 226 172C221 181 216 189 209 197C203 205 197 212 190 218C184 224 177 229 170 232C182 237 193 243 202 249C211 255 219 262 227 271C234 279 242 289 250 301C257 313 266 328 276 345L364 497H283L205 363C193 342 182 324 173 311C163 298 153 287 143 280C133 272 123 267 111 264C100 261 87 260 71 260V497H0V0ZM566 299V282C566 261 561 247 552 238C542 229 527 224 507 224C489 224 472 229 454 237C436 246 419 260 404 278V208C429 178 465 163 512 163C529 163 544 165 559 170C573 174 586 180 597 189C607 198 616 209 622 223C628 236 631 252 631 271V439C631 445 632 450 634 452C636 455 639 456 643 456C646 456 651 454 657 451C664 448 670 444 678 439V478C670 483 664 487 658 490C653 494 648 496 643 498C638 500 633 501 629 502C625 503 620 503 615 503C601 503 590 501 582 496C574 491 568 482 565 470C551 481 537 490 522 495C507 501 492 503 478 503C465 503 454 501 445 497C435 492 426 486 419 479C412 472 407 463 403 454C399 444 397 434 397 423C397 408 400 396 405 385C411 375 418 366 428 358C438 350 450 343 463 337C477 332 492 326 509 320L566 299ZM566 335C552 340 539 345 527 350C514 355 503 360 494 366C484 372 477 379 471 386C465 393 463 402 463 412C463 418 464 424 466 430C469 436 472 441 476 445C480 449 485 452 491 454C497 456 503 457 509 457C520 457 529 455 539 450C548 446 557 439 566 431V335ZM849 170C908 170 954 184 986 212C1017 241 1033 282 1033 336C1033 360 1029 383 1021 404C1013 424 1001 442 986 457C972 471 954 483 934 491C913 499 891 503 867 503C857 503 846 502 836 500C826 498 814 494 801 489V664H737V170H849ZM801 228V431C822 440 842 445 863 445C878 445 892 442 904 437C917 431 928 423 937 414C947 404 954 392 959 379C964 365 967 351 967 335C967 318 964 303 959 290C953 277 946 265 936 256C926 247 915 240 902 235C889 230 875 228 860 228H801ZM1252 228V497H1187V228H1073V170H1367V228H1252ZM1499 302C1514 302 1526 298 1536 290C1546 283 1555 271 1563 256L1583 220C1588 210 1594 202 1599 195C1604 189 1610 184 1616 180C1622 176 1629 174 1636 172C1644 170 1652 170 1662 170H1675V228H1661C1653 228 1647 230 1643 234C1639 238 1635 243 1631 250L1614 280C1610 287 1606 293 1602 298C1598 303 1594 308 1590 311C1585 314 1581 317 1576 320C1571 322 1566 324 1561 326C1569 329 1576 332 1583 336C1589 340 1596 345 1602 351C1608 357 1614 364 1620 373C1626 382 1632 392 1639 404L1688 497H1617L1572 408C1562 388 1550 373 1537 365C1524 357 1511 352 1499 352H1490V497H1426V170H1490V302H1499ZM1887 299V282C1887 261 1882 247 1872 238C1863 229 1848 224 1828 224C1810 224 1792 229 1775 237C1757 246 1740 260 1725 278V208C1750 178 1786 163 1833 163C1850 163 1865 165 1880 170C1894 174 1907 180 1917 189C1928 198 1936 209 1942 223C1949 236 1952 252 1952 271V439C1952 445 1953 450 1955 452C1957 455 1960 456 1964 456C1967 456 1972 454 1978 451C1984 448 1991 444 1998 439V478C1991 483 1984 487 1979 490C1973 494 1968 496 1963 498C1959 500 1954 501 1950 502C1945 503 1941 503 1936 503C1922 503 1911 501 1903 496C1895 491 1889 482 1886 470C1872 481 1857 490 1843 495C1828 501 1813 503 1798 503C1786 503 1775 501 1765 497C1755 492 1747 486 1740 479C1733 472 1727 463 1724 454C1720 444 1718 434 1718 423C1718 408 1720 396 1726 385C1731 375 1739 366 1749 358C1758 350 1770 343 1784 337C1798 332 1813 326 1830 320L1887 299ZM1887 335C1873 340 1860 345 1847 350C1835 355 1824 360 1814 366C1805 372 1797 379 1792 386C1786 393 1783 402 1783 412C1783 418 1785 424 1787 430C1789 436 1792 441 1797 445C1801 449 1806 452 1811 454C1817 456 1823 457 1830 457C1840 457 1850 455 1860 450C1869 446 1878 439 1887 431V335ZM2680 302C2694 302 2706 298 2716 290C2726 283 2735 271 2744 256L2763 220C2769 210 2774 202 2779 195C2785 189 2790 184 2796 180C2802 176 2809 174 2816 172C2824 170 2832 170 2842 170H2856V228H2841C2833 228 2828 230 2823 234C2819 238 2815 243 2811 250L2795 280C2790 287 2786 293 2782 298C2778 303 2774 308 2770 311C2766 314 2761 317 2756 320C2752 322 2746 324 2741 326C2749 329 2756 332 2763 336C2769 340 2776 345 2782 351C2788 357 2794 364 2800 373C2806 382 2812 392 2819 404L2868 497H2797L2752 408C2742 388 2730 373 2717 365C2704 357 2691 352 2679 352H2671V497H2606V170H2671V302H2680ZM3078 163C3103 163 3127 167 3149 176C3170 184 3189 195 3205 210C3221 225 3233 243 3242 263C3251 284 3255 306 3255 330C3255 356 3251 379 3242 401C3233 422 3221 440 3206 456C3190 471 3172 483 3150 491C3128 499 3104 503 3078 503C3053 503 3030 499 3008 490C2987 482 2969 470 2954 454C2939 439 2927 421 2918 400C2910 378 2905 355 2905 330C2905 307 2910 285 2918 264C2927 244 2939 226 2955 211C2970 196 2989 184 3010 176C3031 167 3053 163 3078 163ZM3077 221C3062 221 3048 224 3035 230C3022 235 3011 243 3001 252C2992 262 2985 273 2979 286C2974 300 2972 314 2972 330C2972 347 2974 363 2979 377C2984 391 2992 404 3001 414C3010 424 3021 431 3034 437C3047 442 3062 445 3077 445C3094 445 3110 442 3124 437C3137 432 3149 424 3159 414C3168 405 3176 392 3181 378C3186 364 3189 348 3189 331C3189 315 3186 300 3180 287C3175 273 3167 262 3157 252C3147 243 3136 235 3122 230C3108 224 3093 221 3077 221ZM3618 170V497H3554V357H3393V497H3328V170H3393V299H3554V170H3618ZM3862 163C3888 163 3912 167 3933 176C3955 184 3974 195 3990 210C4005 225 4018 243 4026 263C4035 284 4040 306 4040 330C4040 356 4035 379 4027 401C4018 422 4006 440 3990 456C3975 471 3956 483 3934 491C3913 499 3889 503 3862 503C3837 503 3814 499 3793 490C3772 482 3754 470 3738 454C3723 439 3711 421 3703 400C3694 378 3690 355 3690 330C3690 307 3694 285 3703 264C3712 244 3724 226 3739 211C3755 196 3773 184 3794 176C3815 167 3838 163 3862 163ZM3862 221C3847 221 3833 224 3820 230C3807 235 3795 243 3786 252C3776 262 3769 273 3764 286C3759 300 3756 314 3756 330C3756 347 3759 363 3764 377C3769 391 3776 404 3785 414C3795 424 3806 431 3819 437C3832 442 3846 445 3862 445C3879 445 3894 442 3908 437C3922 432 3934 424 3943 414C3953 405 3960 392 3965 378C3971 364 3973 348 3973 331C3973 315 3970 300 3965 287C3959 273 3952 262 3942 252C3932 243 3920 235 3906 230C3893 224 3878 221 3862 221ZM4186 170L4287 372L4383 170H4449L4472 497H4411L4391 274L4287 497L4176 272L4160 497H4098L4120 170H4186ZM4615 170V497H4550V170H4615ZM4622 71C4622 76 4621 81 4619 85C4617 90 4614 94 4610 98C4607 101 4603 104 4598 106C4594 108 4588 109 4583 109C4578 109 4573 108 4568 106C4564 104 4560 101 4556 98C4552 94 4550 90 4548 85C4546 81 4545 76 4545 71C4545 65 4546 60 4548 56C4550 51 4552 47 4556 43C4560 40 4564 37 4568 35C4573 33 4578 32 4583 32C4588 32 4594 33 4598 35C4603 37 4607 40 4610 43C4614 47 4617 51 4619 56C4621 60 4622 65 4622 71ZM4775 170V497H4710V170H4775ZM4690 67C4700 67 4708 70 4714 77C4721 83 4724 91 4724 100C4724 110 4721 118 4714 125C4708 131 4700 135 4690 135C4681 135 4673 131 4666 125C4659 118 4656 110 4656 100C4656 91 4659 83 4666 77C4673 70 4681 67 4690 67ZM4795 67C4805 67 4813 70 4819 77C4826 83 4829 91 4829 100C4829 110 4826 118 4819 125C4813 131 4805 135 4795 135C4786 135 4777 131 4771 125C4764 118 4761 110 4761 100C4761 91 4764 83 4771 77C4777 70 4786 67 4795 67ZM2307 343C2317 409 2354 441 2417 441C2437 441 2457 438 2475 431C2494 424 2512 415 2532 402V465C2522 472 2512 477 2502 482C2493 487 2483 491 2472 494C2462 497 2451 499 2439 501C2428 503 2415 503 2401 503C2376 503 2353 499 2333 489C2314 479 2297 466 2284 450C2270 434 2260 416 2253 395C2246 374 2242 352 2242 329C2242 304 2246 282 2254 261C2261 241 2271 223 2285 209C2299 194 2315 183 2333 175C2352 167 2373 163 2395 163C2417 163 2437 167 2454 174C2472 182 2487 193 2499 208C2511 223 2521 242 2527 264C2534 287 2537 313 2537 343H2307ZM2473 300C2472 275 2465 255 2451 241C2438 226 2420 219 2397 219C2372 219 2352 226 2337 240C2322 254 2313 274 2308 300H2473Z" transform="translate(0 331)" fill="#115240"/>
        <path id="Vector_2" fill-rule="evenodd" clip-rule="evenodd" d="M667 160L829 0L991 160L1153 0L1658 498L1153 995L991 835L829 995L667 835L504 995L0 498L504 0L667 160ZM51 498L504 945L667 785L829 945L991 785L1153 945L1607 498L1153 51L991 211L829 51L667 211L504 51L51 498Z" transform="translate(5059)" fill="#115240"/>
        <path id="Vector_3" fill-rule="evenodd" clip-rule="evenodd" d="M718 363C718 396 732 438 774 434C803 432 836 410 866 386C921 342 927 331 928 327C929 323 926 322 923 322C917 322 912 330 873 355C861 362 833 380 801 383C763 386 753 367 756 351C760 323 815 276 839 269C841 268 845 268 847 269C865 274 848 289 860 288C881 286 931 215 933 200C936 187 923 184 912 184C841 190 730 287 720 346C715 349 709 356 699 364C666 390 630 398 597 387C641 358 713 298 720 253C724 229 709 222 696 223C669 225 594 280 566 305C637 214 651 177 694 150C695 150 695 149 695 149C696 144 688 140 677 141C644 143 638 169 583 225C560 248 535 270 513 290C490 308 410 384 386 386C381 386 376 384 377 377C379 367 388 354 429 293C465 290 481 294 501 264C512 248 528 218 530 209C531 200 524 202 516 203L477 210C488 194 527 136 558 89C588 43 609 10 581 0C493 45 337 177 273 241L240 246L241 231C201 236 181 244 170 252C158 260 116 306 114 316C113 326 121 326 127 325C141 324 143 323 148 322L199 313L110 397L84 399C61 417 5 472 0 498C0 503 5 502 9 501C23 496 69 468 81 457L240 308L367 297L328 352C313 374 307 384 300 403C290 430 295 450 328 448C347 446 365 434 383 419C384 418 385 418 386 417L518 305L562 270L469 403C420 442 378 497 369 554C366 567 370 579 379 579C400 577 410 541 480 430C542 475 660 428 718 363ZM413 219L313 235C372 173 454 109 519 64L413 219ZM513 383C551 342 611 286 637 284C649 283 653 291 649 301C642 318 608 357 571 382C557 374 531 374 513 383Z" transform="translate(5339 184)" fill="#115240"/>
        </svg>'
        . '</a>'
        . '</div>'
        . '<div class="col-md-7">'
        . '<nav class="nav login justify-content-end align-items-center">'
        . '<a class="nav-link   ml-auto arc-modal-register" href="#arc_register" >Зареєструватися</a>'
        . '<a class="nav-link" href="#" data-toggle="modal" data-target="#arc-modal-login" >Увійти <svg style="margin-bottom:-3px" width="20" height="18" viewBox="0 0 357 319" fill="none" xmlns="http://www.w3.org/2000/svg">
            
<g id="2175543446336">
<path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M260 0H9C4 0 0 4 0 9C0 14 4 17 9 17H252V302H9C4 302 0 306 0 311C0 316 4 319 9 319H260C265 319 269 316 269 311V9C269 4 265 0 260 0Z" transform="translate(88)" fill="black"/>
<path id="Vector_2" fill-rule="evenodd" clip-rule="evenodd" d="M132 109C128 113 128 118 132 121C133 123 136 124 138 124C140 124 142 123 144 121L197 68C200 65 200 59 197 56L144 3C140 -1 135 -1 132 3C128 6 128 12 132 15L170 53H9C4 53 0 57 0 62C0 67 4 71 9 71H170L132 109Z" transform="translate(0 103)" fill="black"/>
</g>
</svg>
</a>'
        . ' </nav></div>'
        . '</div>';


$slider = '<div class="arc-front-content">
    <div id="arc-carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#arc-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#arc-carousel" data-slide-to="1"></li>
    <li data-target="#arc-carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/img/slide_1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://via.placeholder.com/800x300" alt="#">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://via.placeholder.com/800x300" alt="#">
    </div>
  </div>
  
</div>';


$html = ''
        . '<div class="d-flex justify-content-center mt-4 pt-4 text-center">'
        . '<a class="btn-success btn-lg arc-modal-register" href="#arc_register"  >Зареєструвати картку</a>'
        . '</div>'
        . '<div class="d-flex justify-content-center mt-1 text-center">'
        . '<a class="btn btn-link btn-lg arc-user-getcard" href="#">У мене немає картки</a>'
        . '</div>'
        . '</div>';

$register = '<div class="arc-user-register">'
            . '<div class="col-md-12 text-center mt-4">'
            . '<h3 class="text-success">Реєстрація нового користувача:</h3>'
            . '</div>'
            . '<form id="arc-register-form">'
                . '<div class="row">'
                    . '<div class="col-md-6">'
                        . '<div class="form-group">'
                            . '<label for="arc_phone">Номер мобільного*</label>'
                            . '<input data-validation="length" data-validation-length="min12" class="form-control" id="arc_phone" name="arc_phone" type="text" placeholder="" />'
                        . '</div>'
                        . '<div class="form-group">'
                            . '<label  for="arc_email">E-Mail*</label>'
                            . '<input  class="form-control" data-validation="email" id="arc_email" name="arc_email" type="email" placeholder=""/> '
                        . '</div>'
                        . '<div class="form-group">'
                            . '<label  for="arc_number">Пароль*</label>'
                            . '<input  class="form-control"  id="arc_number" name="arc_number"  placeholder="Номер картки"/> '
                        . '</div>'
                        . '<div class="form-group">'
                            . '<label  for="arc_addres">Адреса*</label>'
                            . '<input  class="form-control" data-validation-length="min6" id="arc_addres" name="arc_address"  placeholder=""/> '
                        . '</div>'
                    
                    . '</div>'
                    . '<div class="col-md-6">'
                        . '<div class="form-group">'
                            . '<label  for="arc_password">Ім\'я*</label>'
                            . '<input  class="form-control"  data-validation-length="min2" id="arc_name" name="arc_name"  placeholder=""/> '
                        . '</div>'
                        . '<div class="form-group">'
                            . '<label  for="arc_password">Прізвище*</label>'
                            . '<input  class="form-control" data-validation-length="min2" id="arc_surname" name="arc_surname"  placeholder=""/> '
                        . '</div>'
                        . '<div class="form-group">'
                            . '<label  for="arc_password">Дата Народження*</label>'
                             . '<input data-validation="length alphanumeric" data-validation-length="min4"  class="form-control datapicker" data-validation="date" data-validation-format="dd.mm.yy"   type="text" id="arc_birthday" name="arc_birthday"/>'
                        . '</div>'
                        . '<div class="row">'
                       . '<div class="form-group col-md-6"><label for="arc_region">Область</label> <select  class="form-control" data-current="' . $region . '" id="arc_region" name="arc_region"> '
                       . '<option selected>Тернопільська</option>'
                       . '</select>'
                       . '</div>'
                       . '<div class="form-group col-md-6"><label for="arc_area">Район</label> <select  class="form-control" data-current="' . $area . '" id="arc_area" name="arc_area"> '
                       . '<option selected>Тернопільский</option>'
                       . '</select>'
                       . '</div>'
                       . '<div class="form-group col-md-12"><label for="arc_town">Місто</label> <select  class="form-control" data-current="' . $town . '" id="arc_town" name="arc_town"> '
                       . '<option selected>Тернопіль</option>'
                       . '</select>'
                       . '</div>'
                       . '</div>'
                    . '</div>'
                     . '<div class="col-md-6 offset-md-3">'
                        . '<div class="row mt-4">'
                            . '<div class="col-md-6">'
                              . '<div class="form-check text-right">'
                              . '<input  class="form-check-input"  id="arc_agree" name="arc_agree"  type="checkbox" value="true" data-validation="checkbox_group" data-validation-qty="min1"  />'
                              . '<label  class="form-check-label " for="arc_agree"> Я погоджуюся з правилами програми. <a href="#"  data-toggle="modal" data-target="#arc-modal-rules" >Ознайомитися </a></label>'
                            . '</div>'
                            . '</div>'
                               . '<div class="col-md-6">'
                                . '<a href="#" class="btn btn-success arc-reg">Зареєструватися</a>'
                            . '</div>'
                            . '</div>'
                        . '</div>'
                . '</div>'
            . '</form>'
        . '</div>';

$getcard = '<div class="arc-modal-getcard">'
        . '<div class="col-md-12 text-center mt-4">'
            . '<h3 class="text-success">Оформлення картки:</h3>'
            . '</div>'
            . '<form id="arc-getcard-form">'
                . '<div class="row">'
                    . '<div class="col-md-6">'
                         . '<div class="form-group">'
                            . '<label for="arc_phone">Номер мобільного*</label>'
                            . '<input data-validation="length" data-validation-length="min12" class="form-control" id="arc_phone" name="arc_phone" type="text" placeholder="" />'
                        . '</div>'
                        . '<div class="form-group">'
                            . '<label  for="arc_password">Ім\'я*</label>'
                            . '<input  class="form-control"  data-validation-length="min2" id="arc_name" name="arc_name"  placeholder=""/> '
                        . '</div>'
                        . '<div class="form-group">'
                            . '<label  for="arc_password">Прізвище*</label>'
                            . '<input  class="form-control" data-validation-length="min2" id="arc_surname" name="arc_surname"  placeholder=""/> '
                        . '</div>'
                        . '<div class="form-group">'
                            . '<label  for="arc_email">E-Mail*</label>'
                            . '<input  class="form-control" data-validation="email" id="arc_email" name="arc_email" type="email" placeholder=""/> '
                        . '</div>'
                    
                    . '</div>'
                    . '<div class="col-md-6">'
                       
                        . '<div class="form-group">'
                            . '<label  for="arc_password">Дата Народження*</label>'
                             . '<input data-validation="length alphanumeric" data-validation-length="min4"  class="form-control datapicker" data-validation="date" data-validation-format="dd.mm.yy"   type="text" id="arc_birthday" name="arc_birthday"/>'
                        . '</div>'
                        . '<div class="row">'
                       . '<div class="form-group col-md-6"><label for="arc_region">Область</label> <select  class="form-control" data-current="' . $region . '" id="arc_region" name="arc_region"> '
                       . '<option selected>Тернопільська</option>'
                       . '</select>'
                       . '</div>'
                       . '<div class="form-group col-md-6"><label for="arc_area">Район</label> <select  class="form-control" data-current="' . $area . '" id="arc_area" name="arc_area"> '
                       . '<option selected>Тернопільский</option>'
                       . '</select>'
                       . '</div>'
                       . '<div class="form-group col-md-12"><label for="arc_town">Місто</label> <select  class="form-control" data-current="' . $town . '" id="arc_town" name="arc_town"> '
                       . '<option selected>Тернопіль</option>'
                       . '</select>'
                       . '</div>'
                       . '</div>'
                         . '<div class="form-group">'
                            . '<label  for="arc_password">Адреса*</label>'
                            . '<input  class="form-control" data-validation-length="min6" id="arc_addres" name="arc_addres"  placeholder=""/> '
                        . '</div>'
                    . '</div>'
                     . '<div class="col-md-6 offset-md-3">'
                        . '<div class="row mt-4">'
                            . '<div class="col-md-6">'
                              . '<div class="form-check text-right">'
                              . '<input  class="form-check-input"  id="arc_agree" name="arc_agree"  type="checkbox" value="true" data-validation="checkbox_group" data-validation-qty="min1"  />'
                              . '<label  class="form-check-label " for="arc_agree"> Я погоджуюся з правилами програми. <a href="#"  data-toggle="modal" data-target="#arc-modal-rules" >Ознайомитися </a></label>'
                            . '</div>'
                            . '</div>'
                               . '<div class="col-md-6">'
                                . '<a href="#" class="btn btn-success">Зареєструватися</a>'
                            . '</div>'
                            . '</div>'
                        . '</div>'
                . '</div>'
            . '</form>'
        . '</div>';

$modals = '<!-- Modal Login -->
    <div class="modal fade" id="arc-modal-login" tabindex="-1" role="dialog" aria-labelledby="arc-modal-login" aria-hidden="true">
      <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title " id="arc-modal-login">Вхід</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <svg width="16" height="16" viewBox="0 0 288 288" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0L268 268" transform="translate(10 10)" stroke="black" stroke-width="19.685" stroke-linecap="round"/>
            <path d="M268 0L0 268" transform="translate(10 10)" stroke="black" stroke-width="19.685" stroke-linecap="round"/>
            </svg>
              </button>
      </div>
      <div class="modal-body col-md-10 offset-md-1">'
        . '<div class="arc-login">'
        . '<form id="arc-login-form">'
        . '<div class="form-group">'
        . '<label for="arc_login_username">Номер телефону</label>'
        . '<input  class="form-control" id="arc_login_username" data-validation="length" data-validation-length="min4" name="arc_login_username" type="text" placeholder="" />'
        . '</div>'
        . '<div class="form-group">'
        . '<label for="arc_login_pass">Номер картки</label>'
        . '<input  class="form-control" id="arc_login_pass" data-validation="length" data-validation-length="min6" name="arc_login_pass"  placeholder=""/> '
        . '</div>'
        . '<div class="d-flex d-flex justify-content-between ">'
        . '<a class="btn btn-link btn-sm" href="#">Забули номер картки?</a>'
        . '<a class="btn btn-link btn-sm  arc-modal-register"    data-dismiss="modal" aria-label="Close" href="#">Зареєструватися</a>'
        . '</div>'
        . '</div>   
      </div>
      <div class="modal-footer">'
        . '<div class="button-group mt-2">'
        . '<a class="arc-log  btn btn-success" href="#">Увійти</a>'
        . '</div>'
        . ' </div></form>
    </div>
  </div>
</div> 

<!--modal-rules---->


<div class="modal fade" id="arc-modal-rules" tabindex="-1" role="dialog" aria-labelledby="arc-modal-rules" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="arc-modal-rules-Title">Правилами програми.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">  
            <svg width="16" height="16" viewBox="0 0 288 288" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0L268 268" transform="translate(10 10)" stroke="black" stroke-width="19.685" stroke-linecap="round"/>
            <path d="M268 0L0 268" transform="translate(10 10)" stroke="black" stroke-width="19.685" stroke-linecap="round"/>
            </svg>
            </span>
        </button>
      </div>
      <div class="modal-body">
        Я погоджуюсь з обробкою ТОВ "ТГ АРС-Кераміка" моїх персональних даних, які є в цій формі для реалізації програми лояльності АРС. Я заявляю, про своє право на доступ до своїх персональних даних та право на їх виправлення, та що ці персональні дані були надані на добровільній основі. Я заявляю, что приймаю усі офіційні правила Програми лояльності. Персональна інформація, яку містить дана форма буде внесена в базу даних ТОВ "ТГ Арс-Кераміка
      </div>
    </div>
  </div>
</div>
';


echo $tabs . $slider . $html . $register . $getcard . $modals;
