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
        . '<svg width="450"   viewBox="0 0 6747 996" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H71V202C85 202 97 201 108 198C118 196 128 192 136 185C145 179 153 170 160 159C168 147 175 132 182 114C191 92 200 73 210 59C219 44 229 33 241 24C252 15 264 9 278 5C292 2 308 0 325 0H336V64C320 64 307 66 297 69C286 72 278 76 271 83C264 89 258 98 253 108C248 118 244 131 238 145C235 154 231 163 226 172C221 181 216 189 210 197C204 205 197 212 190 218C184 224 177 229 170 232C182 238 193 243 202 249C211 255 219 262 227 271C234 279 242 289 250 301C258 313 266 328 276 345L364 497H283L206 363C193 342 183 325 173 311C163 298 153 288 143 280C134 273 123 267 112 264C100 262 87 260 71 260V497H0V0ZM566 300V282C566 261 561 247 552 238C542 229 527 224 507 224C489 224 472 229 454 237C436 246 420 260 404 278V208C429 178 466 163 512 163C529 163 545 165 559 170C573 174 586 180 597 189C607 198 616 209 622 223C628 236 631 253 631 271V439C631 446 632 450 634 452C636 455 639 456 643 456C647 456 651 455 658 452C664 449 670 444 678 439V478C670 483 664 487 658 491C653 494 648 496 643 498C638 500 634 501 629 502C625 503 620 504 615 504C601 504 590 501 582 496C574 491 569 482 566 470C551 481 537 490 522 495C507 501 493 504 478 504C466 504 455 501 445 497C435 493 426 487 419 479C412 472 407 463 403 454C399 444 397 434 397 423C397 408 400 396 405 385C411 375 419 366 428 358C438 350 450 344 463 338C477 332 492 326 509 320L566 300ZM566 335C552 340 539 345 527 350C514 355 503 360 494 366C484 372 477 379 471 386C466 394 463 402 463 412C463 418 464 425 466 430C469 436 472 441 476 445C480 449 485 452 491 454C497 457 503 458 510 458C520 458 530 455 539 450C548 446 558 439 566 431V335ZM849 170C909 170 954 184 986 213C1017 241 1033 282 1033 336C1033 361 1029 383 1021 404C1013 424 1001 442 986 457C972 472 954 483 934 491C914 499 891 504 867 504C857 504 846 502 836 500C826 498 814 494 802 489V665H737V170H849ZM802 228V431C822 440 842 445 863 445C878 445 892 442 905 437C917 431 928 424 937 414C947 404 954 393 959 379C964 366 967 351 967 335C967 318 964 303 959 290C953 277 946 266 936 256C927 247 915 240 902 235C889 231 875 228 861 228H802ZM1252 228V497H1188V228H1073V170H1367V228H1252ZM1499 302C1514 302 1526 298 1536 290C1546 283 1555 272 1564 257L1583 220C1589 210 1594 202 1599 196C1605 189 1610 184 1616 180C1622 176 1629 174 1636 172C1644 171 1652 170 1662 170H1676V228H1661C1653 228 1648 230 1643 234C1639 238 1635 244 1631 250L1614 280C1610 287 1606 294 1602 299C1598 304 1594 308 1590 311C1586 315 1581 317 1576 320C1572 322 1566 325 1561 327C1569 329 1576 332 1583 336C1589 340 1596 345 1602 351C1608 357 1614 364 1620 373C1626 382 1632 392 1639 405L1688 497H1617L1572 408C1562 388 1550 373 1537 365C1524 357 1511 352 1499 352H1491V497H1426V170H1491V302H1499ZM1887 300V282C1887 261 1882 247 1872 238C1863 229 1848 224 1828 224C1810 224 1792 229 1775 237C1757 246 1740 260 1725 278V208C1750 178 1786 163 1833 163C1850 163 1865 165 1880 170C1894 174 1907 180 1917 189C1928 198 1936 209 1943 223C1949 236 1952 253 1952 271V439C1952 446 1953 450 1955 452C1957 455 1960 456 1964 456C1967 456 1972 455 1978 452C1984 449 1991 444 1998 439V478C1991 483 1985 487 1979 491C1973 494 1968 496 1964 498C1959 500 1954 501 1950 502C1946 503 1941 504 1936 504C1922 504 1911 501 1903 496C1895 491 1889 482 1886 470C1872 481 1858 490 1843 495C1828 501 1813 504 1798 504C1786 504 1775 501 1765 497C1756 493 1747 487 1740 479C1733 472 1727 463 1724 454C1720 444 1718 434 1718 423C1718 408 1721 396 1726 385C1732 375 1739 366 1749 358C1759 350 1770 344 1784 338C1798 332 1813 326 1830 320L1887 300ZM1887 335C1873 340 1860 345 1848 350C1835 355 1824 360 1815 366C1805 372 1797 379 1792 386C1786 394 1784 402 1784 412C1784 418 1785 425 1787 430C1789 436 1793 441 1797 445C1801 449 1806 452 1812 454C1817 457 1824 458 1830 458C1840 458 1850 455 1860 450C1869 446 1878 439 1887 431V335ZM2680 302C2694 302 2706 298 2716 290C2727 283 2736 272 2744 257L2763 220C2769 210 2774 202 2779 196C2785 189 2791 184 2797 180C2803 176 2809 174 2817 172C2824 171 2832 170 2842 170H2856V228H2841C2834 228 2828 230 2823 234C2819 238 2815 244 2811 250L2795 280C2791 287 2787 294 2783 299C2778 304 2774 308 2770 311C2766 315 2761 317 2757 320C2752 322 2747 325 2741 327C2749 329 2756 332 2763 336C2770 340 2776 345 2782 351C2788 357 2794 364 2800 373C2806 382 2812 392 2819 405L2868 497H2797L2753 408C2742 388 2730 373 2717 365C2704 357 2692 352 2679 352H2671V497H2606V170H2671V302H2680ZM3078 163C3104 163 3127 167 3149 176C3171 184 3189 196 3205 210C3221 225 3233 243 3242 263C3251 284 3255 306 3255 330C3255 356 3251 380 3242 401C3234 422 3221 441 3206 456C3190 471 3172 483 3150 491C3128 499 3104 504 3078 504C3053 504 3030 499 3009 491C2988 482 2969 470 2954 455C2939 439 2927 421 2918 400C2910 379 2905 355 2905 330C2905 307 2910 285 2919 265C2927 244 2940 227 2955 211C2971 196 2989 185 3010 176C3031 167 3054 163 3078 163ZM3077 222C3062 222 3048 224 3035 230C3022 235 3011 243 3002 252C2992 262 2985 273 2980 287C2974 300 2972 314 2972 330C2972 347 2974 363 2979 377C2984 392 2992 404 3001 414C3010 424 3022 432 3034 437C3047 443 3062 445 3077 445C3094 445 3110 443 3124 437C3137 432 3149 424 3159 415C3168 405 3176 393 3181 379C3186 364 3189 348 3189 331C3189 315 3186 300 3180 287C3175 274 3167 262 3157 253C3147 243 3136 235 3122 230C3108 224 3094 222 3077 222ZM3619 170V497H3554V357H3393V497H3329V170H3393V299H3554V170H3619ZM3862 163C3888 163 3912 167 3933 176C3955 184 3974 196 3990 210C4005 225 4018 243 4027 263C4035 284 4040 306 4040 330C4040 356 4035 380 4027 401C4018 422 4006 441 3990 456C3975 471 3956 483 3935 491C3913 499 3889 504 3862 504C3837 504 3814 499 3793 491C3772 482 3754 470 3738 455C3723 439 3711 421 3703 400C3694 379 3690 355 3690 330C3690 307 3694 285 3703 265C3712 244 3724 227 3740 211C3755 196 3773 185 3794 176C3815 167 3838 163 3862 163ZM3862 222C3847 222 3833 224 3820 230C3807 235 3796 243 3786 252C3777 262 3769 273 3764 287C3759 300 3756 314 3756 330C3756 347 3759 363 3764 377C3769 392 3776 404 3786 414C3795 424 3806 432 3819 437C3832 443 3846 445 3862 445C3879 445 3894 443 3908 437C3922 432 3934 424 3943 415C3953 405 3960 393 3966 379C3971 364 3973 348 3973 331C3973 315 3971 300 3965 287C3959 274 3952 262 3942 253C3932 243 3920 235 3907 230C3893 224 3878 222 3862 222ZM4186 170L4287 372L4383 170H4449L4472 497H4411L4391 274L4287 497L4176 272L4160 497H4099L4121 170H4186ZM4615 170V497H4550V170H4615ZM4622 71C4622 76 4621 81 4619 86C4617 90 4614 94 4611 98C4607 102 4603 104 4598 106C4594 108 4589 109 4583 109C4578 109 4573 108 4568 106C4564 104 4560 102 4556 98C4553 94 4550 90 4548 86C4546 81 4545 76 4545 71C4545 65 4546 60 4548 56C4550 51 4553 47 4556 44C4560 40 4564 37 4568 35C4573 33 4578 32 4583 32C4589 32 4594 33 4598 35C4603 37 4607 40 4611 44C4614 47 4617 51 4619 56C4621 60 4622 65 4622 71ZM4775 170V497H4710V170H4775ZM4690 67C4700 67 4708 70 4714 77C4721 83 4724 91 4724 101C4724 110 4721 118 4714 125C4708 132 4700 135 4690 135C4681 135 4673 132 4666 125C4660 118 4656 110 4656 101C4656 91 4660 83 4666 77C4673 70 4681 67 4690 67ZM4796 67C4805 67 4813 70 4819 77C4826 83 4829 91 4829 101C4829 110 4826 118 4819 125C4813 132 4805 135 4796 135C4786 135 4777 132 4771 125C4764 118 4761 110 4761 101C4761 91 4764 83 4771 77C4777 70 4786 67 4796 67ZM2307 343C2318 409 2354 442 2417 442C2437 442 2457 438 2475 431C2494 424 2513 415 2532 402V465C2522 472 2512 477 2502 482C2493 487 2483 491 2472 494C2462 497 2451 500 2440 501C2428 503 2415 504 2401 504C2376 504 2353 499 2334 489C2314 479 2297 467 2284 450C2270 434 2260 416 2253 395C2246 374 2242 352 2242 330C2242 305 2246 282 2254 261C2261 241 2272 224 2285 209C2299 194 2315 183 2334 175C2352 167 2373 163 2395 163C2417 163 2437 167 2454 174C2472 182 2487 193 2499 208C2511 223 2521 242 2527 264C2534 287 2537 313 2537 343H2307ZM2473 300C2472 275 2465 256 2452 241C2438 227 2420 219 2397 219C2372 219 2352 226 2337 240C2323 254 2313 274 2309 300H2473Z" transform="translate(0 176)" fill="#115240"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M666 161L828 0L990 161L1153 0L1657 498L1153 996L990 835L828 996L666 835L504 996L0 498L504 0L666 161ZM50 498L504 945L666 785L828 945L990 785L1153 945L1606 498L1153 51L990 211L828 51L666 211L504 51L50 498Z" transform="translate(5090)" fill="#115240"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M717.129 363C717.129 397 731.129 438 773.129 435C802.129 432 835.129 410 865.129 386C920.129 343 927.129 331 927.129 327C928.129 323 925.129 322 923.129 322C916.129 322 911.129 331 872.129 355C860.129 362 832.129 381 800.129 383C762.129 386 752.129 367 755.129 351C759.129 323 814.129 276 838.129 269C841.129 269 844.129 268 846.129 269C864.129 274 847.129 289 859.129 288C881.129 287 930.129 215 932.129 201C935.129 187 923.129 184 911.129 185C840.129 190 729.129 287 719.129 346C714.129 349 708.129 357 698.129 364C665.129 390 629.129 399 596.129 388C640.129 358 712.129 298 720.129 254C724.129 229 708.129 222 695.129 223C668.129 225 593.129 280 565.129 305C636.129 214 650.129 177 693.129 151C694.129 150 694.129 149 694.129 149C695.129 145 687.129 140 676.129 141C643.129 143 637.129 169 582.129 225C559.129 248 534.129 270 512.129 290C490.129 308 409.129 385 385.129 386C381.129 387 375.129 384 376.129 377C378.129 367 387.129 354 428.129 293C464.129 290 480.129 294 500.129 264C511.129 249 527.129 218 529.129 209C530.129 200 523.129 202 515.129 203L477.129 210C487.129 194 526.129 136 557.129 89C587.129 44 608.129 10 580.129 0C492.129 45 336.129 177 272.129 241L239.129 246L240.129 231C200.129 236 180.129 245 169.129 252C157.129 260 115.129 307 113.129 317C112.129 326 120.129 326 126.129 326C141.129 324 143.129 323 148.129 322L198.129 313L109.129 397L83.1294 399C60.1294 417 4.12938 472 0.129379 498C-0.870621 503 4.12938 503 8.12938 501C22.1294 497 68.1294 468 80.1294 457L239.129 308L366.129 297L327.129 353C312.129 374 306.129 385 299.129 403C289.129 430 295.129 450 327.129 448C347.129 446 364.129 434 382.129 419C383.129 419 384.129 418 386.129 417L517.129 305L561.129 270L468.129 403C419.129 442 377.129 497 368.129 554C366.129 567 370.129 579 378.129 579C399.129 577 409.129 541 479.129 430C541.129 475 659.129 428 717.129 363ZM412.129 219L312.129 235C371.129 173 453.129 109 518.129 64L412.129 219ZM513.129 383C550.129 342 610.129 286 636.129 284C648.129 283 652.129 291 649.129 301C642.129 318 607.129 357 570.129 382C556.129 374 530.129 375 513.129 383Z" transform="translate(5369.87 184)" fill="#115240"/>
</svg>
'
        . '</a>'
        . '</div>'
        . '<div class="col-md-7">'
        . '<nav class="nav login justify-content-end align-items-center">'
        . '<a class="nav-link open-register" data-toggle="modal" data-target="#arc-modal-login" href="#arc_register" >Зареєструватися</a>'
        . '<a class="nav-link open-login" href="#"  data-toggle="modal" data-target="#arc-modal-login" >Увійти <svg width="20" height="18" viewBox="0 0 357 319" fill="none" xmlns="http://www.w3.org/2000/svg">
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


$modal_login = '<div class="modal fade" id="arc-modal-login" tabindex="-1" role="dialog" aria-labelledby="arc-modal-login" aria-hidden="true">
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
        . '<div class="  arc-login-wrapper  ">'
        //. '<img class="card-img-top" src="' . $this->path . 'img/login.png" alt="Card image cap">'
        . '<div class="card-body">'
        . '<div class="arc-login">'
        . '<form id="arc-login-form">'
        . '<div class="form-group">'
        . '<label for="arc_login_username">Номер телефону</label>'
        . '<input  class="form-control input_phone_mask" id="arc_login_username"  name="arc_login_username" type="text"  placeholder="+38(0__)___-__-__" />'
        . '</div>'
        . '<div class="form-group">'
        . '<label for="arc_login_pass">Номер картки</label>'
        . '<input  class="form-control" id="arc_login_pass" data-validation="length" data-validation-length="min6" name="arc_login_pass" type="password" placeholder=""/> '
        . '</div>'
        . '<div class="form-check">'
        . '<input  class="form-check-input" id="arc_login_remember" name="arc_login_remember" type="checkbox" value="true"/>'
        . '<label  class="form-check-label" for="arc_login_remember">Запам\'ятати</label>'
        . '</div>'
        . '<div class="button-group mt-2">'
        . '<a class="arc-log  btn-success btn-lg" href="#">Увійти</a>'
        . '<a class="arc-make-register btn btn-link btn-lg " href="#">Реєстрація</a>'
        . '</div>'
        . '</form>'
        
        . '</div>'
        . '<div class="arc-register " style="display:none">'
        . '<form id="arc-register-form" class="row">'
        . '<div class="col-md-12">'
        . '<div class="form-group">'
        . '<label for="arc_username">Номер Телефону</label>'
        . '<input   class="form-control input_phone_mask" id="arc_username" name="arc_username" type="text" placeholder="+38(0__)___-__-__" />'
        . '</div>'
        . '<div class="form-group pass-group">'
        . '<label  for="arc_number">Пароль</label>'
        . '<input  class="form-control" id="arc_number" name="arc_number" type="text" placeholder="Номер картки"/> '       
        . '</div>'
    
        . '<div class="form-check  from-agree  col-md-12">'
        . '<input  class="form-check-input"  id="arc_agree" name="arc_agree"  type="checkbox" value="true" data-validation="checkbox_group" data-validation-qty="min1"  />'
        . '<label  class="form-check-label " for="arc_agree"> <small>Я погоджуюся з <a href="#"  data-toggle="modal" data-target="#arc-modal-rules" >правилами програми. </a></small></label>'
        . '</div>'
        
        . '<div class="col-md-12 button-group mt-2">'
        . '<a class="arc-reg btn btn-success btn-lg" href="#">Зареєструватися</a>'
        . '<a class="arc-make-login btn btn-link btn-lg" href="#">Увійти</a>'
        . '</div>'
        . '</form>'
        . '</div>'
  
        . '</div>'
              . '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <p></p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>'
        . '</div>'    
      . '</div>
     
  </div>
</div> ';



$html = '<div class="arc-wrapper">'
        . $tabs
        . $slider
        . '<div class="d-flex justify-content-center mt-4 pt-4 text-center">'
        . '<a class="btn-success btn-lg arc-modal-register open-register" data-toggle="modal" data-target="#arc-modal-login" href="#arc_register">Зареєструвати картку</a>'
        . '</div>'
        . '<div class="d-flex justify-content-center mt-1 text-center">'
        . '<a class="btn btn-link btn-lg arc-user-getcard open-register-nocard" data-toggle="modal" data-target="#arc-modal-login" href="#">У мене немає картки</a>'
        . '</div>'
        . '</div>'
        . '</div>'
        . '<div class="full-width container-fluid  bg-light arc-footer"><div class=container><div class="row py-3 d-flex align-items-center" ><div class="co-md-6 "><svg width="300"   viewBox="0   0 6687 996" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H71V202C85 202 97 201 108 198C118 196 128 192 136 185C145 179 153 170 160 159C168 147 175 132 182 114C191 92 200 73 210 59C219 44 229 33 241 24C252 15 264 9 278 5C292 2 308 0 325 0H336V64C320 64 307 66 297 69C286 72 278 76 271 83C264 89 258 98 253 108C248 118 244 131 238 145C235 154 231 163 226 172C221 181 216 189 210 197C204 205 197 212 190 218C184 224 177 229 170 232C182 238 193 243 202 249C211 255 219 262 227 271C234 279 242 289 250 301C258 313 266 328 276 345L364 497H283L206 363C193 342 183 325 173 311C163 298 153 288 143 280C134 273 123 267 112 264C100 262 87 260 71 260V497H0V0ZM566 300V282C566 261 561 247 552 238C542 229 527 224 507 224C489 224 472 229 454 237C436 246 420 260 404 278V208C429 178 466 163 512 163C529 163 545 165 559 170C573 174 586 180 597 189C607 198 616 209 622 223C628 236 631 253 631 271V439C631 446 632 450 634 452C636 455 639 456 643 456C647 456 651 455 658 452C664 449 670 444 678 439V478C670 483 664 487 658 491C653 494 648 496 643 498C638 500 634 501 629 502C625 503 620 504 615 504C601 504 590 501 582 496C574 491 569 482 566 470C551 481 537 490 522 495C507 501 493 504 478 504C466 504 455 501 445 497C435 493 426 487 419 479C412 472 407 463 403 454C399 444 397 434 397 423C397 408 400 396 405 385C411 375 419 366 428 358C438 350 450 344 463 338C477 332 492 326 509 320L566 300ZM566 335C552 340 539 345 527 350C514 355 503 360 494 366C484 372 477 379 471 386C466 394 463 402 463 412C463 418 464 425 466 430C469 436 472 441 476 445C480 449 485 452 491 454C497 457 503 458 510 458C520 458 530 455 539 450C548 446 558 439 566 431V335ZM849 170C909 170 954 184 986 213C1017 241 1033 282 1033 336C1033 361 1029 383 1021 404C1013 424 1001 442 986 457C972 472 954 483 934 491C914 499 891 504 867 504C857 504 846 502 836 500C826 498 814 494 802 489V665H737V170H849ZM802 228V431C822 440 842 445 863 445C878 445 892 442 905 437C917 431 928 424 937 414C947 404 954 393 959 379C964 366 967 351 967 335C967 318 964 303 959 290C953 277 946 266 936 256C927 247 915 240 902 235C889 231 875 228 861 228H802ZM1252 228V497H1188V228H1073V170H1367V228H1252ZM1499 302C1514 302 1526 298 1536 290C1546 283 1555 272 1564 257L1583 220C1589 210 1594 202 1599 196C1605 189 1610 184 1616 180C1622 176 1629 174 1636 172C1644 171 1652 170 1662 170H1676V228H1661C1653 228 1648 230 1643 234C1639 238 1635 244 1631 250L1614 280C1610 287 1606 294 1602 299C1598 304 1594 308 1590 311C1586 315 1581 317 1576 320C1572 322 1566 325 1561 327C1569 329 1576 332 1583 336C1589 340 1596 345 1602 351C1608 357 1614 364 1620 373C1626 382 1632 392 1639 405L1688 497H1617L1572 408C1562 388 1550 373 1537 365C1524 357 1511 352 1499 352H1491V497H1426V170H1491V302H1499ZM1887 300V282C1887 261 1882 247 1872 238C1863 229 1848 224 1828 224C1810 224 1792 229 1775 237C1757 246 1740 260 1725 278V208C1750 178 1786 163 1833 163C1850 163 1865 165 1880 170C1894 174 1907 180 1917 189C1928 198 1936 209 1943 223C1949 236 1952 253 1952 271V439C1952 446 1953 450 1955 452C1957 455 1960 456 1964 456C1967 456 1972 455 1978 452C1984 449 1991 444 1998 439V478C1991 483 1985 487 1979 491C1973 494 1968 496 1964 498C1959 500 1954 501 1950 502C1946 503 1941 504 1936 504C1922 504 1911 501 1903 496C1895 491 1889 482 1886 470C1872 481 1858 490 1843 495C1828 501 1813 504 1798 504C1786 504 1775 501 1765 497C1756 493 1747 487 1740 479C1733 472 1727 463 1724 454C1720 444 1718 434 1718 423C1718 408 1721 396 1726 385C1732 375 1739 366 1749 358C1759 350 1770 344 1784 338C1798 332 1813 326 1830 320L1887 300ZM1887 335C1873 340 1860 345 1848 350C1835 355 1824 360 1815 366C1805 372 1797 379 1792 386C1786 394 1784 402 1784 412C1784 418 1785 425 1787 430C1789 436 1793 441 1797 445C1801 449 1806 452 1812 454C1817 457 1824 458 1830 458C1840 458 1850 455 1860 450C1869 446 1878 439 1887 431V335ZM2680 302C2694 302 2706 298 2716 290C2727 283 2736 272 2744 257L2763 220C2769 210 2774 202 2779 196C2785 189 2791 184 2797 180C2803 176 2809 174 2817 172C2824 171 2832 170 2842 170H2856V228H2841C2834 228 2828 230 2823 234C2819 238 2815 244 2811 250L2795 280C2791 287 2787 294 2783 299C2778 304 2774 308 2770 311C2766 315 2761 317 2757 320C2752 322 2747 325 2741 327C2749 329 2756 332 2763 336C2770 340 2776 345 2782 351C2788 357 2794 364 2800 373C2806 382 2812 392 2819 405L2868 497H2797L2753 408C2742 388 2730 373 2717 365C2704 357 2692 352 2679 352H2671V497H2606V170H2671V302H2680ZM3078 163C3104 163 3127 167 3149 176C3171 184 3189 196 3205 210C3221 225 3233 243 3242 263C3251 284 3255 306 3255 330C3255 356 3251 380 3242 401C3234 422 3221 441 3206 456C3190 471 3172 483 3150 491C3128 499 3104 504 3078 504C3053 504 3030 499 3009 491C2988 482 2969 470 2954 455C2939 439 2927 421 2918 400C2910 379 2905 355 2905 330C2905 307 2910 285 2919 265C2927 244 2940 227 2955 211C2971 196 2989 185 3010 176C3031 167 3054 163 3078 163ZM3077 222C3062 222 3048 224 3035 230C3022 235 3011 243 3002 252C2992 262 2985 273 2980 287C2974 300 2972 314 2972 330C2972 347 2974 363 2979 377C2984 392 2992 404 3001 414C3010 424 3022 432 3034 437C3047 443 3062 445 3077 445C3094 445 3110 443 3124 437C3137 432 3149 424 3159 415C3168 405 3176 393 3181 379C3186 364 3189 348 3189 331C3189 315 3186 300 3180 287C3175 274 3167 262 3157 253C3147 243 3136 235 3122 230C3108 224 3094 222 3077 222ZM3619 170V497H3554V357H3393V497H3329V170H3393V299H3554V170H3619ZM3862 163C3888 163 3912 167 3933 176C3955 184 3974 196 3990 210C4005 225 4018 243 4027 263C4035 284 4040 306 4040 330C4040 356 4035 380 4027 401C4018 422 4006 441 3990 456C3975 471 3956 483 3935 491C3913 499 3889 504 3862 504C3837 504 3814 499 3793 491C3772 482 3754 470 3738 455C3723 439 3711 421 3703 400C3694 379 3690 355 3690 330C3690 307 3694 285 3703 265C3712 244 3724 227 3740 211C3755 196 3773 185 3794 176C3815 167 3838 163 3862 163ZM3862 222C3847 222 3833 224 3820 230C3807 235 3796 243 3786 252C3777 262 3769 273 3764 287C3759 300 3756 314 3756 330C3756 347 3759 363 3764 377C3769 392 3776 404 3786 414C3795 424 3806 432 3819 437C3832 443 3846 445 3862 445C3879 445 3894 443 3908 437C3922 432 3934 424 3943 415C3953 405 3960 393 3966 379C3971 364 3973 348 3973 331C3973 315 3971 300 3965 287C3959 274 3952 262 3942 253C3932 243 3920 235 3907 230C3893 224 3878 222 3862 222ZM4186 170L4287 372L4383 170H4449L4472 497H4411L4391 274L4287 497L4176 272L4160 497H4099L4121 170H4186ZM4615 170V497H4550V170H4615ZM4622 71C4622 76 4621 81 4619 86C4617 90 4614 94 4611 98C4607 102 4603 104 4598 106C4594 108 4589 109 4583 109C4578 109 4573 108 4568 106C4564 104 4560 102 4556 98C4553 94 4550 90 4548 86C4546 81 4545 76 4545 71C4545 65 4546 60 4548 56C4550 51 4553 47 4556 44C4560 40 4564 37 4568 35C4573 33 4578 32 4583 32C4589 32 4594 33 4598 35C4603 37 4607 40 4611 44C4614 47 4617 51 4619 56C4621 60 4622 65 4622 71ZM4775 170V497H4710V170H4775ZM4690 67C4700 67 4708 70 4714 77C4721 83 4724 91 4724 101C4724 110 4721 118 4714 125C4708 132 4700 135 4690 135C4681 135 4673 132 4666 125C4660 118 4656 110 4656 101C4656 91 4660 83 4666 77C4673 70 4681 67 4690 67ZM4796 67C4805 67 4813 70 4819 77C4826 83 4829 91 4829 101C4829 110 4826 118 4819 125C4813 132 4805 135 4796 135C4786 135 4777 132 4771 125C4764 118 4761 110 4761 101C4761 91 4764 83 4771 77C4777 70 4786 67 4796 67ZM2307 343C2318 409 2354 442 2417 442C2437 442 2457 438 2475 431C2494 424 2513 415 2532 402V465C2522 472 2512 477 2502 482C2493 487 2483 491 2472 494C2462 497 2451 500 2440 501C2428 503 2415 504 2401 504C2376 504 2353 499 2334 489C2314 479 2297 467 2284 450C2270 434 2260 416 2253 395C2246 374 2242 352 2242 330C2242 305 2246 282 2254 261C2261 241 2272 224 2285 209C2299 194 2315 183 2334 175C2352 167 2373 163 2395 163C2417 163 2437 167 2454 174C2472 182 2487 193 2499 208C2511 223 2521 242 2527 264C2534 287 2537 313 2537 343H2307ZM2473 300C2472 275 2465 256 2452 241C2438 227 2420 219 2397 219C2372 219 2352 226 2337 240C2323 254 2313 274 2309 300H2473Z" transform="translate(0 184)" fill="#A0A0A0"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M666 161L828 0L990 161L1153 0L1657 498L1153 996L990 835L828 996L666 835L504 996L0 498L504 0L666 161ZM50 498L504 945L666 785L828 945L990 785L1153 945L1606 498L1153 51L990 211L828 51L666 211L504 51L50 498Z" transform="translate(5030)" fill="#A0A0A0"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M717.129 363C717.129 397 731.129 438 773.129 435C802.129 432 835.129 410 865.129 386C920.129 343 927.129 331 927.129 327C928.129 323 925.129 322 923.129 322C916.129 322 911.129 331 872.129 355C860.129 362 832.129 381 800.129 383C762.129 386 752.129 367 755.129 351C759.129 323 814.129 276 838.129 269C841.129 269 844.129 268 846.129 269C864.129 274 847.129 289 859.129 288C881.129 287 930.129 215 932.129 201C935.129 187 923.129 184 911.129 185C840.129 190 729.129 287 719.129 346C714.129 349 708.129 357 698.129 364C665.129 390 629.129 399 596.129 388C640.129 358 712.129 298 720.129 254C724.129 229 708.129 222 695.129 223C668.129 225 593.129 280 565.129 305C636.129 214 650.129 177 693.129 151C694.129 150 694.129 149 694.129 149C695.129 145 687.129 140 676.129 141C643.129 143 637.129 169 582.129 225C559.129 248 534.129 270 512.129 290C490.129 308 409.129 385 385.129 386C381.129 387 375.129 384 376.129 377C378.129 367 387.129 354 428.129 293C464.129 290 480.129 294 500.129 264C511.129 249 527.129 218 529.129 209C530.129 200 523.129 202 515.129 203L477.129 210C487.129 194 526.129 136 557.129 89C587.129 44 608.129 10 580.129 0C492.129 45 336.129 177 272.129 241L239.129 246L240.129 231C200.129 236 180.129 245 169.129 252C157.129 260 115.129 307 113.129 317C112.129 326 120.129 326 126.129 326C141.129 324 143.129 323 148.129 322L198.129 313L109.129 397L83.1294 399C60.1294 417 4.12938 472 0.129379 498C-0.870621 503 4.12938 503 8.12938 501C22.1294 497 68.1294 468 80.1294 457L239.129 308L366.129 297L327.129 353C312.129 374 306.129 385 299.129 403C289.129 430 295.129 450 327.129 448C347.129 446 364.129 434 382.129 419C383.129 419 384.129 418 386.129 417L517.129 305L561.129 270L468.129 403C419.129 442 377.129 497 368.129 554C366.129 567 370.129 579 378.129 579C399.129 577 409.129 541 479.129 430C541.129 475 659.129 428 717.129 363ZM412.129 219L312.129 235C371.129 173 453.129 109 518.129 64L412.129 219ZM513.129 383C550.129 342 610.129 286 636.129 284C648.129 283 652.129 291 649.129 301C642.129 318 607.129 357 570.129 382C556.129 374 530.129 375 513.129 383Z" transform="translate(5309.87 184)" fill="#A0A0A0"/>
</svg>

</div>
<div class="co-md-3 px-3">
<div class="arc-footer-phone">
<svg width="16px" viewBox="0 0 181 309" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M79 283C79 261 109 261 109 283C109 302 79 303 79 283ZM18 37H163V255H18V37ZM0 8V302C0 305 5 309 9 309H171C175 309 181 305 181 302V8C181 4 175 0 171 0H9C5 0 0 4 0 8Z" fill="#999999"/>
</svg>
0 800 508 400
</div></div>
<div class="co-md-3 px-3 arc-footer-nav ml-auto">
<a href="#">Наша Мережа</a> |
<a href="#">Запитання\Відповіді</a>
</div>
<div class="col-md-12 text-center "><small>© Copyright 2016 Торгова Марка "АРС-Керамыка"</small></div>
</div></div>
</div>';

echo $html . $modal_login;

