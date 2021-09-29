<?php
/*
Template Name: Home Page
*/
?>

<?php $page_id = get_the_ID(); ?>
<?php $projects_gallery = carbon_get_post_meta($page_id, 'projects'); ?>
<?php get_header(); ?>
<main class="main main-page">
    <section class="container-fluid slider-section">
        <div class="bg-fon"><img style="width:100%;height:100%" src="<?php bloginfo('template_url'); ?>/assets/img/slider.png" alt=""></div>
        <div class="slider main-slider">
            <div class="slide">
                <div class="swiper-text-field">
                    <div class="container">
                        <div class="wrapper-absolute">
                            <h1 class="title-swiper">Доверьте подбор вашего насоса<br> нашим специалистам</h1>
                            <p class="swiper-main-text">Поможем подобрать насосное<br> оборудование быстро и эффективно!
                            </p>
                            <div class="swiper-learn-more" onclick="openModal()">
                                Заказать подбор
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="swiper-text-field">
                    <div class="container">
                        <h1 class="title-swiper">Доверьте подбор вашего насоса<br> нашим специалистам</h1>
                        <p class="swiper-main-text">Поможем подобрать насосное<br> оборудование быстро и эффективно!
                        </p>
                        <div class="swiper-learn-more" onclick="openModal()">
                            Заказать подбор
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="swiper-text-field">
                    <div class="container">
                        <h1 class="title-swiper">Доверьте подбор вашего насоса<br> нашим специалистам</h1>
                        <p class="swiper-main-text">Поможем подобрать насосное<br> оборудование быстро и эффективно!
                        </p>
                        <div class="swiper-learn-more" onclick="openModal()">
                            Заказать подбор
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cat-menu">
        <div class="container">
            <div class="row">
                <a href="" class="cat-item cat-item-scroll-wrapper col-lg-2" onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' })">
                    <div class="cat-item-scroll">Скролл вниз</div>
                    <div class="cat-item-scroll-svg">
                        <svg width="26" height="31" viewBox="0 0 26 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.1001 1.81891C15.1202 1.94273 15.1294 2.06804 15.1278 2.19342L15.1278 23.5421L15.3443 23.0766C15.5597 22.6215 15.8528 22.2076 16.2104 21.8532L22.1971 15.8665C22.9498 15.0781 24.1606 14.9456 25.066 15.5526C26.0307 16.259 26.2402 17.6138 25.5338 18.5787C25.4767 18.6566 25.4144 18.7307 25.3474 18.8004L14.5216 29.6262C13.6765 30.4722 12.3056 30.473 11.4595 29.6279C11.459 29.6274 11.4584 29.6268 11.4579 29.6262L0.632 18.8004C-0.212349 17.9536 -0.210455 16.5827 0.636261 15.7383C0.702908 15.6719 0.773817 15.6098 0.848517 15.5526C1.75389 14.9456 2.9647 15.0781 3.71737 15.8665L9.71489 21.8424C10.0329 22.1601 10.2996 22.5253 10.5052 22.925L10.7975 23.5746L10.7975 2.31257C10.7564 1.2065 11.529 0.236101 12.6162 0.0283125C13.7966 -0.163101 14.9086 0.638553 15.1001 1.81891Z" fill="white"/>
                        </svg>
                    </div>
                </a>
                <a href="/product-categories/pipes/" class="cat-item col-lg-2">
                    <div class="cat-item-svg">
                        <svg width="90" height="88" viewBox="0 0 108 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.20535 23.8598H7.65134V32.0747H9.27594L14.0449 27.3132V16.0635H10.3241V9.88927H11.5294H14.0449V8.0056H3.98289V0H5.18824H40.3006V8.0056H30.815V9.67997H34.5359V15.9066H30.815V17.3193L43.2877 24.2784H54.922L60.4771 32.127H83.4835V27.2609H84.6888H90.7156V34.3247H96.8471V52.4288H90.7156V59.7542H83.4835V56.0915L80.6535 57.452V60.3821H82.9594V75.8177H107.8V87.957H106.595H0.262032V75.8177H11.4246V70.6376H14.0449V58.3938L9.53798 52.4812H7.65134V63.8355H0V23.8598H1.20535ZM30.815 12.0869V13.4473H32.1252V12.0869H30.815ZM7.65134 34.534V50.0742H10.6909L14.0449 54.4172V30.7666L10.2717 34.534H9.80001H7.65134ZM40.0909 32.6503V53.6323H37.6802V32.6503H40.0909ZM35.7412 26.4237V60.1205H33.2781V26.4237H35.7412ZM30.815 67.7598L41.768 61.0623V50.1789V47.772V34.9002V31.0806V26.2144L30.815 20.0925V67.7598ZM43.3401 62.946L30.815 70.5853V70.6376H33.2781V75.8177H65.9797V70.376H74.8888V61.7425L73.2642 55.6729H57.1754V62.946H43.3401ZM44.1786 31.0806V34.9002H48.7904V31.0806H44.1786ZM53.6642 26.7377H44.1786V28.6737H51.2535V34.9002H52.9305V47.772H57.1754V53.266H75.0985L77.0375 60.3821H78.2429V55.9869L83.4835 53.423V34.534H59.2193L53.6642 26.7377ZM14.0449 12.2962H12.7348V13.6566H14.0449V12.2962ZM23.1637 70.6376V64.2018H21.6963V70.6376H23.1637ZM24.369 73.0446H19.2856H14.0449H13.8353V75.8177H30.8674V73.0446H30.815H25.5744H24.369ZM19.2856 70.6376V61.7949H25.5744V70.6376H28.4043V15.9589V15.9066V9.67997V8.0056H16.4556V9.88927V16.0635V24.9063V61.5332V70.6376H19.2856ZM19.7572 37.8827H26.5701V45.9406H18.5519V37.8827H19.7572ZM24.1594 40.3419H21.015V43.5337H24.1594V40.3419ZM80.5487 75.8177V62.8413H77.2995V70.376V75.8177H80.5487ZM74.8888 75.8177V72.7829H68.3904V75.8177H74.8888ZM94.4364 36.7316H90.7156V50.0219H94.4364V36.7316ZM88.3049 29.6678H85.8942V32.127V54.8881V57.3473H88.3049V52.4288V34.3247V29.6678ZM50.5198 37.3071H48.7904H44.1786V47.772H50.5198V37.3071ZM54.7648 50.1789H52.9305H50.5198H44.1786V60.5391H54.7648V55.6729V50.1789ZM2.72514 85.4977H105.389V78.277H82.9594H77.2995H76.0942H74.8888H65.9797H33.2781H11.4246H2.72514V85.4977ZM37.8899 2.40691H6.39359V5.59869H14.0449H15.2503H30.815H37.8899V2.40691ZM5.18824 26.2667H2.4107V61.3763H5.18824V52.4812V32.0747V26.2667Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="cat-item-title">Промышленные насосы</div>
                </a>
                <a href="" class="cat-item col-lg-2">
                    <div class="cat-item-svg">
                        <svg width="92" height="88" viewBox="0 0 92 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.648 6.29257H2.84598L15.0366 50.9485H28.1706V48.1222H17.2839L6.67276 8.93758H10.648V6.29257ZM19.0754 55.6733H16.9659V64.3762H19.0754V55.6733ZM81.1519 39.5899H79.0424V59.0862H81.1519V39.5899ZM75.9471 19.5176H73.8376V27.3567H75.9471V19.5176ZM16.086 34.4918H23.5382V29.1591H16.0542V23.5278H19.4464V18.5897H23.5382V14.1103H24.5982H32.8772V29.1591H31.6688V34.4918H39.9902V30.9722H37.552V8.67095L45.7992 6.87917C47.1243 5.2367 53.58 0 65.7282 0H81.0459V10.0681H76.9965V12.7131H71.3359V15.0808H82.159V32.1668H75.9471V34.4918H83.272L83.5689 34.7691C83.5795 34.7691 84.1943 35.3131 85.0635 36.3796L87.8939 34.9398L91.9115 39.9632L88.5511 42.3735C89.5899 44.9546 90.3744 48.1862 90.3744 52.047C90.3744 57.3584 88.8903 61.4752 87.3108 64.3549C86.166 66.4346 84.9681 67.8851 84.2473 68.653C85.1801 70.4768 85.6996 72.5352 85.6996 74.7323C85.6996 78.3905 84.2261 81.7074 81.841 84.1178C79.4453 86.5175 76.1485 88 72.5019 88C68.8659 88 65.5586 86.5175 63.1735 84.1178C60.7884 81.7074 59.3149 78.3905 59.3149 74.7323C59.3149 72.9085 59.6753 71.1807 60.3325 69.6022H33.1846V81.3875H24.5028V69.6022H15.7362L15.4606 69.3783C15.4394 69.3676 8.58085 64.3229 8.58085 52.047C8.58085 47.8769 9.36529 44.5493 10.4147 41.9576L0.0898438 4.18083H1.46791H12.7469V11.06H9.41829L15.768 34.4918H16.086ZM42.0997 34.4918H44.4848V10.6014H45.5448H69.2264H71.3359H74.8976V7.95637H78.947V2.12241H65.7282C53.1136 2.12241 47.2727 8.42565 47.2515 8.44698L47.0183 8.7776L39.6615 10.3774V28.8605H42.0997V34.4918ZM71.3359 34.4918H73.8376V30.0444H80.0601V17.1926H71.3359V34.4918ZM86.325 38.1074C86.7702 38.7793 87.226 39.5472 87.6713 40.4218L88.8797 39.5472L87.332 37.5954L86.325 38.1074ZM11.4218 45.6478C10.966 47.4716 10.6798 49.594 10.6798 52.047C10.6798 61.8592 15.291 66.4773 16.4464 67.4798H24.5028H25.5523H33.1846H61.4456C61.9544 66.7119 62.5268 65.9867 63.1735 65.3361C65.0498 63.4483 67.4879 62.1258 70.2122 61.6459L70.3182 61.6352H70.3288L70.4242 61.6139L70.5408 61.6032L70.6468 61.5819H70.6574L70.7528 61.5712L70.8588 61.5499L70.9649 61.5392H70.986L71.0709 61.5285L71.1557 61.5179H71.1875L71.2935 61.5072H71.3253L71.4843 61.4859H71.4949H71.5161L71.6221 61.4752H71.6539H71.7281L71.8235 61.4646H71.8447H71.9507H71.9931L72.0567 61.4539H72.1627H72.1733H72.2793H72.3323H72.3959H72.5019H72.6185H72.6715H72.7245H72.8411H72.9472L73.0107 61.4646H73.0532H73.1698H73.1804L73.2758 61.4752H73.35H73.3818L73.4984 61.4859H73.5196L73.6044 61.4965L73.6892 61.5072H73.7104L73.8164 61.5179L74.039 61.5392L74.145 61.5499C77.1343 61.9232 79.8057 63.299 81.841 65.3361C82.2862 65.7947 82.7102 66.2853 83.0918 66.7972C83.7279 66.0613 84.6077 64.9095 85.477 63.331C86.9186 60.7073 88.2755 56.9318 88.2755 52.047C88.2755 43.0135 83.6643 37.8194 82.4558 36.6142H71.3359H44.4848H31.6688H23.5382H16.4464L16.3616 36.6889L18.8845 45.9998H30.2695V53.0602H13.4465L11.4218 45.6478ZM72.5019 77.2173C73.191 77.2173 73.8058 76.94 74.251 76.4814C74.7068 76.0334 74.9824 75.4149 74.9824 74.7323C74.9824 74.039 74.7068 73.4204 74.2616 72.9618C73.8058 72.5139 73.191 72.2366 72.5019 72.2366C71.8235 72.2366 71.1981 72.5139 70.7528 72.9618C70.3076 73.4204 70.032 74.039 70.032 74.7323C70.032 75.4149 70.3076 76.0334 70.7528 76.4814C71.2087 76.94 71.8235 77.2173 72.5019 77.2173ZM75.7457 77.9852C74.9188 78.8171 73.774 79.329 72.5019 79.329C71.2405 79.329 70.0956 78.8171 69.2688 77.9852C68.4419 77.1533 67.9331 76.0015 67.9331 74.7323C67.9331 73.4524 68.4419 72.3006 69.2688 71.4687C70.1062 70.6368 71.2405 70.1248 72.5019 70.1248C73.7634 70.1248 74.9082 70.6368 75.7351 71.4687L75.7457 71.4793C76.5725 72.3112 77.0813 73.4631 77.0813 74.7323C77.0813 75.9908 76.5725 77.1427 75.7457 77.9852ZM69.2264 12.7131H46.5943V34.4918H69.2264V17.1926V12.7131ZM25.6477 29.1591V34.4918H29.5593V29.1591H27.3756H25.6477ZM23.5382 20.7122H21.5453V25.6502H18.1531V27.0367H23.5382V20.7122ZM30.7783 16.2327H25.6477V27.0367H27.3756H30.7783V16.2327ZM80.3463 66.8399C78.629 65.1014 76.3393 63.9389 73.7952 63.6403H73.7846C73.5938 63.619 73.403 63.5976 73.2228 63.587H73.1592H73.0743H73.0638L72.9683 63.5763H72.9365H72.8835H72.7881L72.6927 63.5656H72.6503H72.5973H72.5019H72.4171H72.3641H72.3217L72.2263 63.5763H72.2157H72.1309H72.0779H72.0355L71.9507 63.587H71.9401C71.7917 63.587 71.6539 63.5976 71.5161 63.6083L71.4843 63.619H71.3889L71.3677 63.6296H71.3041L71.2299 63.6403H71.2087L71.1239 63.651L71.0921 63.6616L70.9649 63.6723H70.9542L70.9436 63.6829L70.8482 63.6936H70.8164L70.6786 63.7149L70.668 63.7256C70.5832 63.7363 70.4984 63.7469 70.403 63.7683L70.2652 63.8003H70.2228L70.138 63.8216C69.9578 63.8643 69.7882 63.9069 69.608 63.9496H69.5974C68.5373 64.2375 67.5515 64.6855 66.6398 65.2508L66.6186 65.2721C66.4914 65.3467 66.3642 65.4321 66.237 65.5174L66.1946 65.5494L66.0886 65.624L65.866 65.784L65.654 65.944C65.3042 66.2213 64.9756 66.5199 64.6681 66.8399C62.654 68.8557 61.4138 71.65 61.4138 74.7323C61.4138 77.8039 62.654 80.5982 64.6681 82.614C66.6716 84.6404 69.4384 85.8883 72.5019 85.8883C75.5655 85.8883 78.3428 84.6404 80.3463 82.614C82.3498 80.5982 83.6007 77.8039 83.6007 74.7323C83.6007 71.65 82.3498 68.8557 80.3463 66.8399ZM31.0751 69.6022H26.6017V79.2757H31.0751V69.6022Z" fill="#FEFEFE"/>
                        </svg>
                    </div>
                    <div class="cat-item-title">Комрессорное оборудование</div>
                </a>
                <a href="" class="cat-item col-lg-2">
                    <div class="cat-item-svg">
                        <svg width="109" height="88" viewBox="0 0 109 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.25417 85.7689H27.1038V72.2718H19.0324H8.3967H2.25417V85.7689ZM76.1004 16.1011H54.4321H47.7597H40.1286H38.0609H35.8151V14.6513V13.8701V10.8723V8.64075V5.67004H33.0019H30.756H15.6782V8.64075H30.756H33.0019V10.8723V14.6513V19.2325H33.6252H35.8151H38.0609H39.775H40.1286H40.898H42.0209V21.4635V24.1125V25.1449H44.4133V24.1125V21.4635V19.2325H46.6592H49.3794H50.5023H51.6252V21.4635V22.5297V25.1449H54.0177V22.5297V21.4635V19.2325H56.2635H61.8948H63.0177H64.1406V21.4635V25.1449H66.5331V22.701V21.4635V19.2325H68.7789H71.4621H72.585H73.708V21.4635V22.3826V25.1449H75.7405C75.6987 24.7854 75.6763 24.4202 75.6763 24.0497C75.6763 23.0797 75.8248 22.1437 76.1004 21.2637V19.2325V17.4755V16.1011ZM38.0609 13.8701H47.7597V8.23924H48.8827H54.4321V13.8701H78.3463V17.5166L78.4408 17.4218C80.148 15.7253 82.5074 14.676 85.1126 14.676C86.2662 14.676 87.3711 14.8816 88.3928 15.258L88.7897 12.6293L85.4004 12.1242L85.9682 6.62496L86.108 6.40437L90.1673 0L97.5272 1.06377L99.6562 8.03026L98.2805 14.0438L95.3656 13.6089L94.1754 21.4316C94.4184 22.2627 94.5485 23.1412 94.5485 24.0497C94.5485 26.6377 93.4922 28.9815 91.7845 30.6775C90.1444 32.3068 87.9034 33.3391 85.4213 33.4184V34.162V36.3635H96.7753V19.4182H97.8983H109V63.8202V66.0518V70.0408V72.2718V88H107.877H0.00830078V70.0408H2.04867V58.544H0.00830078V3.54541H1.13123H9.22161H11.4675H13.4324V3.43898H14.5553H30.756H38.0609V10.8723V13.8701ZM39.775 21.4635H38.0609H35.8151H30.756V10.8723H16.7325L21.7243 15.2996V46.0603L13.4324 52.7791V47.4966H11.4675V58.544H8.3967V70.0408H19.0324V63.8202H23.905V49.6633H25.0279H31.0292V25.1449H32.1521H39.775V21.4635ZM71.4621 21.4635H68.7789V25.1449H71.4621V21.4635ZM61.8948 21.4635H56.2635V25.1449H61.8948V21.4635ZM49.3794 21.4635H46.6592V25.1449H49.3794V21.4635ZM80.5308 72.2718V85.7689H106.754V72.2718H80.5308ZM78.2849 85.7689V72.2718H54.9132V85.7689H78.2849ZM52.6673 85.7689V72.2718H29.3497V85.7689H52.6673ZM52.1862 10.4703H50.0056V13.8701H52.1862V10.4703ZM75.3885 34.162H83.1755V33.2259C81.3474 32.8467 79.7132 31.942 78.4408 30.6775C77.5058 29.7492 76.7661 28.6264 76.2879 27.3759H71.4621H68.7789H61.8948H56.2635H49.3794H46.6592H39.775H33.2751V49.6633H36.9468V58.5773H54.3147L62.3033 53.4723H83.1755V47.2256H69.299V38.4519H70.422H74.2655V34.162H75.3885ZM83.1755 36.393H76.5114V38.4519H83.1755V36.393ZM83.1755 40.6829H74.2655H71.5449V44.9946H83.1755V40.6829ZM42.784 38.2376H47.4695V49.5854H41.661V38.2376H42.784ZM45.2236 40.4686H43.9069V47.3538H45.2236V40.4686ZM58.7636 30.7138H65.8245V43.6701H57.6407V30.7138H58.7636ZM63.5787 32.9449H59.8865V41.439H63.5787V32.9449ZM91.0078 12.9597L90.4955 16.3503C90.9571 16.6696 91.3881 17.028 91.7845 17.4218C92.0051 17.6404 92.214 17.8702 92.4122 18.1097L93.147 13.2785L91.0078 12.9597ZM91.2853 2.4115L88.1425 7.36897L87.8469 10.2357L96.5596 11.5341L97.3431 8.10862L95.8014 3.06407L91.2853 2.4115ZM85.4213 55.5389V55.7034H62.9544L54.9653 60.8089H36.9468V63.8202H96.7753V55.5389H85.4213ZM90.197 18.9988C88.8963 17.7062 87.0984 16.9071 85.1126 16.9071C83.1268 16.9071 81.3289 17.7062 80.0278 18.9988C78.7271 20.2909 77.9221 22.0769 77.9221 24.0497C77.9221 26.0229 78.7271 27.8084 80.0278 29.101C81.3289 30.3931 83.1268 31.1927 85.1126 31.1927C87.0984 31.1927 88.8963 30.3931 90.197 29.101C91.4981 27.8084 92.3026 26.0229 92.3026 24.0497C92.3026 22.0769 91.4981 20.2909 90.197 18.9988ZM96.7753 38.5946H85.4213V40.6829V47.2256V53.3078H96.7753V38.5946ZM106.754 21.6493H99.0212V36.3635V55.5389V63.8202H106.754V21.6493ZM19.4785 16.2855L15.6782 12.9152V47.4966V48.0901L19.4785 45.011V16.2855ZM11.4675 45.2655H13.4324V10.8723V7.94512V5.77646H11.4675V45.2655ZM34.7009 51.8943H31.0292H26.1508V63.8202H34.7009V60.8089V51.8943ZM106.754 70.0408V66.0518H96.7753H36.9468H23.905H21.2788V70.0408H106.754ZM4.29454 58.544V70.0408H6.15083V58.544H4.29454ZM9.22161 5.77646H2.25417V56.3129H3.1716H8.3967H9.22161V47.4966V5.77646Z" fill="#FEFEFE"/>
                        </svg>
                    </div>
                    <div class="cat-item-title">Дизельные электростанции</div>
                </a>
                <a href="" class="cat-item col-lg-2">
                    <div class="cat-item-svg">
                        <svg width="92" height="87" viewBox="0 0 92 87" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.79866 0.0422363H92V86.9587H4.65985V41.3683H0V5.15702H1.13882H4.65985V0.0422363H5.79866V0.0422363ZM72.338 19.7674H74.8945V14.2914H68.3638H66.0978H32.0147V41.2402H41.2762V36.7429H42.4034H47.6211V45.4345H49.492V37.4536H50.6192H59.4276V25.0919H60.5548H62.6348V19.7674H64.4593V16.0973H70.8622V19.7674H71.2108H72.338ZM82.2852 14.2914V27.3638H76.1728V74.8999H59.4276V61.9789H51.758V66.919H47.6211V74.4921H41.2762V70.2978H32.0147V79.3622H84.6907V7.44062H82.2852V12.0195V14.2914ZM76.0333 22.0393H72.338V25.0919H76.1728H80.0192V14.2914H77.1605V22.0393H76.0333ZM32.0147 12.0195H66.0978V7.44062H32.0147V12.0195ZM68.5846 19.7674V18.3693H66.7253V19.7674H68.5846ZM70.072 25.0919V22.0393H69.7234H64.9008V25.0919H70.072ZM15.2229 53.3106H22.021V61.5013H14.0841V53.3106H15.2229ZM19.755 55.5825H16.3501V59.2293H19.755V55.5825ZM19.0345 45.2714H20.2314V38.3041H19.0345V45.2714ZM22.4974 38.3041V47.5434H19.0345V51.3765H12.2365V79.3622H23.8454V38.3041H22.4974ZM12.2365 49.1046H16.7685V47.5434V38.3041H12.2365V49.1046ZM4.65985 39.0964V7.42897H2.26601V39.0964H4.65985ZM45.3551 66.919V45.4345V39.0148H43.5423V41.2402V70.2978V72.2202H45.3551V66.919ZM49.492 47.7065H47.6211V64.647H49.492V61.9789V47.7065ZM41.2762 43.5121H32.0147V68.0258H41.2762V43.5121ZM59.4159 39.7255H51.758V45.4345V59.707H59.4159V39.7255ZM68.3638 7.44062V12.0195H74.8945H80.0192V7.44062H68.3638ZM73.8952 27.3638H72.338H71.2108H70.072H62.6348H61.6936V72.628H73.8952V27.3638ZM30.8875 5.16868H66.0978H67.225H68.3638H82.2852H86.9683V81.6342H29.7486V70.2978V41.2402V14.2914V5.16868H30.8875ZM11.0976 36.0205H16.7685H17.9073H19.0345H22.4974H26.1114V81.6342H9.95882V51.3765V36.0205H11.0976ZM12.1202 10.8777H25.9022V25.4181H10.9931V10.8777H12.1202ZM23.6362 13.1496H13.2591V23.1462H23.6362V13.1496ZM89.734 2.31418H6.93748V5.15702V41.3683V84.6867H89.734V2.31418Z" fill="#FEFEFE"/>
                        </svg>
                    </div>
                    <div class="cat-item-title">Подготовка сжатого воздуха</div>
                </a>
            </div>
        </div>
    </section>
    <section class="about-us-container">
        <div class="about-us-wrapper">
            <div class="pipe-img col-xs-12 col-sm-12 col-xl-6 ">
                <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'about_us_img'), 'full'); ?>" alt="" style="width:100%;height:auto">
            </div>
            <div class="about-us col-xs-12 col-sm-12 col-xl-6 ">
                <h2 class="about-us-title"><?php echo carbon_get_post_meta($page_id, 'about_us_title') ?></h2>
                <div class="about-us-info">
                    <?php echo carbon_get_post_meta($page_id, 'about_us_subtitle') ?>
                </div>
				<a href="<?php echo carbon_get_post_meta($page_id, 'about_us_button') ?>" class="go-to-about-us-btn">
					<div class="go-to-about-us-btn-text">Подробнее...</div>
					<div class="go-to-about-us-btn-svg">
						<svg width="33" height="14" viewBox="0 0 33 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.981388 5.85419C1.04818 5.84335 1.11578 5.83835 1.18342 5.83923H28.7L28.4489 5.72242C28.2034 5.60624 27.9801 5.44812 27.789 5.25522L24.5594 2.02567C24.1341 1.61964 24.0626 0.966469 24.3901 0.478059C24.7712 -0.0423995 25.502 -0.155404 26.0225 0.225695C26.0646 0.256502 26.1045 0.290082 26.1421 0.326217L31.9821 6.16627C32.4385 6.62216 32.4389 7.36169 31.9831 7.81809L31.9821 7.819L26.1421 13.6591C25.6853 14.1145 24.9458 14.1135 24.4903 13.6568C24.4544 13.6208 24.421 13.5826 24.3901 13.5423C24.0626 13.0538 24.1341 12.4007 24.5594 11.9946L27.7831 8.75925C27.9545 8.5877 28.1515 8.44385 28.3672 8.33293L28.7176 8.17525H1.24769C0.651022 8.1974 0.127533 7.7806 0.0154419 7.19412C-0.0878181 6.55737 0.344641 5.95749 0.981388 5.85419Z" fill="#EB1C24"/>
						</svg>
					</div>
				<?php echo carbon_get_post_meta($page_id, 'about_us_button') ?></a>
            </div>
        </div>
    </section>

    <section class="advantages container-xl">
        <h2 class="advantages-title"><?php echo carbon_get_post_meta($page_id, 'advantages_title') ?></h2>
		<p class="advantages-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget lectus ipsum. Praesent blandit egestas arcu luctus semper. Praesent ultricies orci ut viverra consequat. </p>
        <div class="advantages-list row">
            <div class="advantages-list-item col-sm-6 col-xl-3">
                <div class="advantages-list-item-circle">
                    <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'advantages_img1'), 'full'); ?>" alt="">
                </div>
                <div class="advantages-list-item-text">
                    <?php echo carbon_get_post_meta($page_id, 'advantages1') ?>
                </div>
            </div>
            <div class="advantages-list-item col-sm-6 col-xl-3">
                <div class="advantages-list-item-circle">
                    <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'advantages_img2'), 'full'); ?>" alt="">
                </div>
                <div class="advantages-list-item-text">
                    <?php echo carbon_get_post_meta($page_id, 'advantages2') ?>
                </div>
            </div>
            <div class="advantages-list-item col-sm-6 col-xl-3">
                <div class="advantages-list-item-circle">
                    <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'advantages_img3'), 'full'); ?>" alt="">
                </div>
                <div class="advantages-list-item-text">
                    <?php echo carbon_get_post_meta($page_id, 'advantages3') ?>
                </div>
            </div>
            <div class="advantages-list-item col-sm-6 col-xl-3">
                <div class="advantages-list-item-circle">
                    <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'advantages_img4'), 'full'); ?>" alt="">
                </div>
                <div class="advantages-list-item-text">
                    <?php echo carbon_get_post_meta($page_id, 'advantages4') ?>
                </div>
            </div>
        </div>
    </section>

    <section class="our-projects">
        <div class="our-projects-wrapper">
            <div class="projects-info-wrapper">
                <h2><?php echo carbon_get_post_meta($page_id, 'projects_title') ?></h1>
                <div class="projects-info-comment">
                    <?php echo carbon_get_post_meta($page_id, 'projects_text') ?>
                </div>
                <a href="<?php echo carbon_get_post_meta($page_id, 'projects_link') ?>" class="go-to-projects-btn">
                    <div><?php echo carbon_get_post_meta($page_id, 'projects_button') ?></div>
                    <div>
                        <svg width="41" height="14" viewBox="0 0 41 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.981388 5.85419C1.04818 5.84335 1.11578 5.83835 1.18342 5.83923H36.7L36.4489 5.72242C36.2034 5.60624 35.9801 5.44812 35.789 5.25522L32.5594 2.02567C32.1341 1.61964 32.0626 0.966469 32.3901 0.478059C32.7712 -0.0423995 33.502 -0.155404 34.0225 0.225695C34.0646 0.256502 34.1045 0.290082 34.1421 0.326217L39.9821 6.16627C40.4385 6.62216 40.4389 7.36169 39.9831 7.81809L39.9821 7.819L34.1421 13.6591C33.6853 14.1145 32.9458 14.1135 32.4903 13.6568C32.4544 13.6208 32.421 13.5826 32.3901 13.5423C32.0626 13.0538 32.1341 12.4007 32.5594 11.9946L35.7831 8.75925C35.9545 8.5877 36.1515 8.44385 36.3672 8.33293L36.7176 8.17525H1.24769C0.65102 8.1974 0.127533 7.7806 0.0154419 7.19412C-0.0878181 6.55737 0.344639 5.95749 0.981388 5.85419Z" fill="white"/>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="projects-wrapper">
                <div class="projects-list">
                    <!-- <?php //foreach($projects_gallery as $gallery_id) :
                        //$img_src = wp_get_attachment_image_url($gallery_id, 'full');
                    ?>
                        <div class="project-list-item">
                            <div class="project-list-item-bg">
                                <img src="<?php //echo $img_src; ?>" alt="">
                            </div>
                            <div class="title-wrapper">
                                <h3 class="list-item-title">Consectetur adipiscing</h3>
                                <div class="list-item-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget lectus ipsum. </div>
                            </div>
                        </div>
                    <?php //endforeach; ?> -->

                    <?php if ( function_exists( 'wpsp_display' ) ) wpsp_display( 569 ); ?>
                </div>
            </div>
        </div>
    </section>


    <section class="news container">
        <div class="news-header">
            <h2 class="news-header-title"><?php echo carbon_get_post_meta($page_id, 'news_title') ?></h2>
            <a href="<?php echo carbon_get_post_meta($page_id, 'news_link') ?>" class="go-to-news-btn">
                <div class="go-to-news-btn-text"><?php echo carbon_get_post_meta($page_id, 'news_button') ?></div>
                <div class="go-to-news-btn-svg">
                    <svg width="33" height="14" viewBox="0 0 33 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.981388 5.85419C1.04818 5.84335 1.11578 5.83835 1.18342 5.83923H28.7L28.4489 5.72242C28.2034 5.60624 27.9801 5.44812 27.789 5.25522L24.5594 2.02567C24.1341 1.61964 24.0626 0.966469 24.3901 0.478059C24.7712 -0.0423995 25.502 -0.155404 26.0225 0.225695C26.0646 0.256502 26.1045 0.290082 26.1421 0.326217L31.9821 6.16627C32.4385 6.62216 32.4389 7.36169 31.9831 7.81809L31.9821 7.819L26.1421 13.6591C25.6853 14.1145 24.9458 14.1135 24.4903 13.6568C24.4544 13.6208 24.421 13.5826 24.3901 13.5423C24.0626 13.0538 24.1341 12.4007 24.5594 11.9946L27.7831 8.75925C27.9545 8.5877 28.1515 8.44385 28.3672 8.33293L28.7176 8.17525H1.24769C0.651022 8.1974 0.127533 7.7806 0.0154419 7.19412C-0.0878181 6.55737 0.344641 5.95749 0.981388 5.85419Z" fill="#EB1C24"/>
                    </svg>
                </div>
            </a>
        </div>
        <div class="news-secondary-title"><?php echo carbon_get_post_meta($page_id, 'news_text') ?></div>
        <!-- <div class="news-wrapper row">
            <div class="news-item col-lg-3">
                <div class="news-item-img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe3.png" alt="" style="width:100%;height:100%">
                </div>
                <p class="news-item-title">Consectetur adipiscing</p>
                <div class="news-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget lectus ipsum.
                    Praesent blandit egestas arcu luctus semper. Praesent ultricies orci ut viverra ...
                </div>
                <a href="" class="see-more-btn">
                    <div class="see-more-btn-tezt">Читать больше</div>
                    <div class="see-more-btn-svg">
                        <svg width="22" height="10" viewBox="0 0 22 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.66799 3.98432C0.713449 3.97694 0.759459 3.97353 0.80549 3.97413H19.5331L19.3622 3.89464C19.1951 3.81556 19.0431 3.70795 18.913 3.57666L16.715 1.37866C16.4255 1.10232 16.3769 0.657771 16.5998 0.325363C16.8591 -0.0288568 17.3565 -0.105767 17.7108 0.153606C17.7394 0.174573 17.7666 0.197427 17.7922 0.222021L21.7669 4.19671C22.0775 4.50699 22.0777 5.01031 21.7675 5.32093L21.7669 5.32155L17.7922 9.29624C17.4813 9.60624 16.978 9.60555 16.6679 9.29468C16.6435 9.27021 16.6208 9.24417 16.5998 9.21675C16.3769 8.88434 16.4255 8.4398 16.715 8.16346L18.909 5.96148C19.0257 5.84472 19.1598 5.74682 19.3065 5.67132L19.545 5.56401H0.849234C0.443144 5.57909 0.0868645 5.29542 0.0105743 4.89626C-0.0597038 4.46289 0.234625 4.05462 0.66799 3.98432Z" fill="#EB1C24"/>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="news-item col-lg-3">
                <div class="news-item-img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe3.png" alt="" style="width:100%;height:100%">
                </div>
                <p class="news-item-title">Consectetur adipiscing</p>
                <div class="news-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget lectus ipsum.
                    Praesent blandit egestas arcu luctus semper. Praesent ultricies orci ut viverra ...
                </div>
                <a href="" class="see-more-btn">
                    <div class="see-more-btn-tezt">Читать больше</div>
                    <div class="see-more-btn-svg">
                        <svg width="22" height="10" viewBox="0 0 22 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.66799 3.98432C0.713449 3.97694 0.759459 3.97353 0.80549 3.97413H19.5331L19.3622 3.89464C19.1951 3.81556 19.0431 3.70795 18.913 3.57666L16.715 1.37866C16.4255 1.10232 16.3769 0.657771 16.5998 0.325363C16.8591 -0.0288568 17.3565 -0.105767 17.7108 0.153606C17.7394 0.174573 17.7666 0.197427 17.7922 0.222021L21.7669 4.19671C22.0775 4.50699 22.0777 5.01031 21.7675 5.32093L21.7669 5.32155L17.7922 9.29624C17.4813 9.60624 16.978 9.60555 16.6679 9.29468C16.6435 9.27021 16.6208 9.24417 16.5998 9.21675C16.3769 8.88434 16.4255 8.4398 16.715 8.16346L18.909 5.96148C19.0257 5.84472 19.1598 5.74682 19.3065 5.67132L19.545 5.56401H0.849234C0.443144 5.57909 0.0868645 5.29542 0.0105743 4.89626C-0.0597038 4.46289 0.234625 4.05462 0.66799 3.98432Z" fill="#EB1C24"/>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="news-item col-lg-3">
                <div class="news-item-img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe3.png" alt="" style="width:100%;height:100%">
                </div>
                <p class="news-item-title">Consectetur adipiscing</p>
                <div class="news-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget lectus ipsum.
                    Praesent blandit egestas arcu luctus semper. Praesent ultricies orci ut viverra ...
                </div>
                <a href="" class="see-more-btn">
                    <div class="see-more-btn-tezt">Читать больше</div>
                    <div class="see-more-btn-svg">
                        <svg width="22" height="10" viewBox="0 0 22 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.66799 3.98432C0.713449 3.97694 0.759459 3.97353 0.80549 3.97413H19.5331L19.3622 3.89464C19.1951 3.81556 19.0431 3.70795 18.913 3.57666L16.715 1.37866C16.4255 1.10232 16.3769 0.657771 16.5998 0.325363C16.8591 -0.0288568 17.3565 -0.105767 17.7108 0.153606C17.7394 0.174573 17.7666 0.197427 17.7922 0.222021L21.7669 4.19671C22.0775 4.50699 22.0777 5.01031 21.7675 5.32093L21.7669 5.32155L17.7922 9.29624C17.4813 9.60624 16.978 9.60555 16.6679 9.29468C16.6435 9.27021 16.6208 9.24417 16.5998 9.21675C16.3769 8.88434 16.4255 8.4398 16.715 8.16346L18.909 5.96148C19.0257 5.84472 19.1598 5.74682 19.3065 5.67132L19.545 5.56401H0.849234C0.443144 5.57909 0.0868645 5.29542 0.0105743 4.89626C-0.0597038 4.46289 0.234625 4.05462 0.66799 3.98432Z" fill="#EB1C24"/>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="news-item col-lg-3">
                <div class="news-item-img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe3.png" alt="" style="width:100%;height:100%">
                </div>
                <p class="news-item-title">Consectetur adipiscing</p>
                <div class="news-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget lectus ipsum.
                    Praesent blandit egestas arcu luctus semper. Praesent ultricies orci ut viverra ...
                </div>
                <a href="" class="see-more-btn">
                    <div class="see-more-btn-tezt">Читать больше</div>
                    <div class="see-more-btn-svg">
                        <svg width="22" height="10" viewBox="0 0 22 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.66799 3.98432C0.713449 3.97694 0.759459 3.97353 0.80549 3.97413H19.5331L19.3622 3.89464C19.1951 3.81556 19.0431 3.70795 18.913 3.57666L16.715 1.37866C16.4255 1.10232 16.3769 0.657771 16.5998 0.325363C16.8591 -0.0288568 17.3565 -0.105767 17.7108 0.153606C17.7394 0.174573 17.7666 0.197427 17.7922 0.222021L21.7669 4.19671C22.0775 4.50699 22.0777 5.01031 21.7675 5.32093L21.7669 5.32155L17.7922 9.29624C17.4813 9.60624 16.978 9.60555 16.6679 9.29468C16.6435 9.27021 16.6208 9.24417 16.5998 9.21675C16.3769 8.88434 16.4255 8.4398 16.715 8.16346L18.909 5.96148C19.0257 5.84472 19.1598 5.74682 19.3065 5.67132L19.545 5.56401H0.849234C0.443144 5.57909 0.0868645 5.29542 0.0105743 4.89626C-0.0597038 4.46289 0.234625 4.05462 0.66799 3.98432Z" fill="#EB1C24"/>
                        </svg>
                    </div>
                </a>
            </div>
        </div> -->

        
        <div class="news-wrapper">
            <?php if ( function_exists( 'wpsp_display' ) ) wpsp_display( 570 ); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
