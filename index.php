<?php get_header(); ?>
<header id="header">

    <div id="mobile_bar">
        <div class="mobile_menu_icon"><a><i class="flaticon-lines-menu"></i></a></div>
        <div class="mobile_close_icon"><a><i class="icon-cancel"></i></a></div>
    </div>
    <div id="mobile_menu">
        <ul>
            <li><a href="#header">Home</a></li>
            <li><a href="#about">O nas</a></li>
            <li><a href="#concerts">Koncerty</a></li>
            <li><a href="#come_and_play">Zagrasz?</a></li>
            <li><a href="#drinks">Menu</a></li>
            <li><a href="#photo-gallery">Galeria</a></li>
            <li><a href="#offer">Oferta</a></li>
            <li><a href="#footer">Kontakt</a></li>
        </ul>
    </div>

    <nav class="nav">

        <ul class="navigation">
            <!-- Icons from www.flaticon.com: -->
            <li><a href="#header" class="icon_link"><i class="flaticon-animals-1"></i></a><a href="#header"
            class="menu_des">Home</a>
            </li>
            <li><a href="#about" class="icon_link"><i class="flaticon-rock"></i></a><a href="#about" class="menu_des">O nas</a></li>
            <li><a href="#concerts" class="icon_link"><i class="flaticon-electric-guitar"></i></a><a href="#concerts" class="menu_des">Koncerty</a>
            </li>
            <li><a href="#come_and_play" class="icon_link"><i class="flaticon-karaoke"></i></a><a href="#come_and_play" class="menu_des">Zagrasz?</a>
            </li>
            <li><a href="#drinks" class="icon_link"><i class="flaticon-glass"></i></a><a href="#drinks"
            class="menu_des">Menu</a></li>
            <li><a href="#photo-gallery" class="icon_link"><i class="flaticon-photo-camera"></i></a><a
            href="#photo-gallery" class="menu_des">Galeria</a></li>
            <li><a href="#offer" class="icon_link"><i class="flaticon-small-notepad-and-pencil-outlines"></i></a><a href="#offer" class="menu_des">Oferta</a></li>
            <li><a href="#footer" class="icon_link"><i class="flaticon-technology"></i></a><a href="#footer" class="menu_des">Kontakt</a>
            </li>
        </ul>

    </nav>

    <div class="container">
        <div id="title">
            <p class="big_title">Whiskey Cave</p>
            <p class="sm_title">Live Music Hard Rock & Blues Club</p>
        </div>
    </div>
</header>

<div class="grey_belt">O nas</div>

<section id="about">
    <div class="container">
        <div class="about-description">
            <p>W sercu <span>Katowic</span>, w zabytkowych wnętrzach starego katowickiego dworca, stworzyliśmy dla Was miejsce napędzane <span>pasją do muzyki</span> i miłością do dobrego <span>whiskey</span>. <span>Whiskey Cave</span> to największa klubowa scena koncertowa, na której usłyszysz <span>najlepszych artystów</span> ze Śląska, z całego kraju i zagranicy. Jedyne w mieście miejsce z <span>muzyką na żywo</span> nie tylko w weekendy! Prowadzone przez ludzi, którzy mają <span>serce do muzyki</span> i wiedzą, co oznacza dobrze spędzony wieczór. Scena inspirowana najlepszymi nowojorskimi klubami zaprasza codziennie od 18.00 do 4.00!</p>
        </div>
    </div>
</section>

<section id="gif_bar">
    <div class="container">

    </div>
</section>

<div class="grey_belt">Koncerty</div>

<section id="concerts">
    <div class="container">
        <div id="concerts_box">

            <?php
            query_posts( array ( 'category_name' => 'koncerty' ) );
            while ( have_posts() ) : the_post();
                ?>

                <div class="concert_item clearfix">
                    <p class="concert_desc"><?php the_title(); ?></p>
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
                                               
        </div>

        <a>
            <div class="next">Wcześniejsze</div>
        </a>

        <div class="more_info">
            <p>Wszystkie informacje o koncertach znajdziesz na naszym profilu</p>
            <a href="http://facebook.com" target="_blank"><i class="flaticon-facebook"></i></a>
        </div>
    </div>

</section>

<div class="grey_belt">Zagrasz?</div>

<section id="come_and_play">
    <div id="play">
        <p class="bigger">Chcesz wystąpić na naszej scenie?</p> <br>
        <p>Masz zespół lub jesteś solistą?</p> <br>
        <p>Zapraszamy do współpracy!</p> <br>
    </div>
    <div id="play_contact">
        <p>Pisz, dzwoń, ślij swoje demo!</p> <br>
        <p>tel. 600 350 200</p> <br>
        <p>whiskey.cave@gmail.com</p>
    </div>
</section>

<div class="grey_belt">Drinks menu</div>

<section id="drinks">
     <div class="container">
        <div id="drinks_menu">
        <!-- Drinks menu inspierd by Whiskey on the Rocks and Upojeni pub menus -->
        <div id="whiskey_jar" class="drop_list">
            <a><h2>Whiskey in the Jar</h2></a>
            <ul class="whiskey_ul">
                <li><span class="bg">Classic Jar</span> - Jack Daniel’s® Tennessee Whiskey 40 ml, Coca Cola, limonka</li>
                <li><span class="bg">Amaretto Jar</span> - Jack Daniel’s® Tennessee Whiskey 40 ml, Amaretto, syrop wiśniowy, sok ananasowy, sok pomarańczowy</li>
                <li><span class="bg">Candy Jar</span> - Jack Daniel’s® Tennessee Whiskey 40 ml, sok z cytryny, grenadine</li>
                <li><span class="bg">Black Jack Jar</span> - Jack Daniel’s® Tennessee Whiskey 40 ml, Chambord® 15 ml, Sprite</li>
                <li><span class="bg">Strawberry Jar</span> - Jack Daniel’s® Tennessee Whiskey 40 ml, Peach Tree 20 ml, truskawkowe puree, S&S mix, Sprite</li>
                <li><span class="bg">Jackberry Smash Jar</span> - Jack Daniel’s® Tennessee Whiskey 40 ml, Peachtree, mięta, maliny, jeżyny, sok z cytryny, Sprite</li>
            </ul>
        </div>
        <div id="drinks" class="drop_list">
            <a><h2>Drinki</h2></a>
            <ul class="whiskey_ul">
                <li><span class="bg">Cuba Libre</span> - ciemny rum, Coca Cola, limonka</li>
                <li><span class="bg">Aperol Spritz</span> - aperol, prosecco, woda gazowana, pomarańcza</li>
                <li><span class="bg">Tequila Sunrise</span> - złota tequila, sok pomarańczowy, grenadine</li>
                <li><span class="bg">Mojito</span> - jasny rum, woda gazowana, mięta, syrop cukrowy,limonki</li>
                <li><span class="bg">Tom Collins</span> - gin, woda gazowana, sok z cytryny, mięta</li>
                <li><span class="bg">Old Fashioned</span> - bourbon, syrop cukrowy, angustura, pomarańcza, woda gazowana</li>
                <li><span class="bg">Long Island Iced Tea</span> - złota tequila, jasny rum, gin, triple sec, wódka, Coca Cola, syrop cukrowy, sok z cytryny</li>
            </ul>
        </div>
        <div id="beer" class="drop_list">
            <a><h2>Browar</h2></a>
            <ul class="whiskey_ul">
                <li><span class="bg">DearBear Blackout</span> - Black Ipa</li>
                <li><span class="bg">Craft Special</span> - Bohemian Pilsner</li>
                <li><span class="bg">Paulaner</span> - pszeniczne, München</li>
                <li><span class="bg">Special Altbier</span> - ciemnozłote piwo górnej fermentacji</li>
                <li><span class="bg">Marcowe</span> - piwo dolnej fermentacji typu lager</li>
                <li><span class="bg">Waisebier</span> - musujące piwo pszeniczne górnej fermentacji</li>
                <li><span class="bg">Żywiec Porter</span> - ciemne piwo z posmakiem palonego słodu</li>
            </ul>
        </div>
        <div id="wine" class="drop_list">
            <a><h2>Wino</h2></a>
            <ul class="whiskey_ul">
                <li><span class="bg">Panamera Chardonnay, California</span></li>
                <li><span class="bg">Canepa Classico Sauvignon Blanc, Chile</span></li>
                <li><span class="bg">Casal Garcia Rose, Portugalia</span></li>
                <li><span class="bg">Prosecco</span></li>
                <li><span class="bg">Panamera Cuvée, California</span></li>
                <li><span class="bg">Spellbound Petite Sirah, California</span></li>
                <li><span class="bg">Marie Stuart Brut, California</span></li>
            </ul>
        </div>
        </div>
     </div>
</section>

<div class="grey_belt">Food menu</div>

<section id="food">
    <div class="container">
        <div id="food_menu">
        <!-- Menu inspired by Upojeni pub menu -->
        <h1>Food menu</h1>
            <ul>
                <li><span class="bigger">Burger klasyczny</span> - prawdziwa wołowina, ser, bekon, czerwona cebula, sos</li>
                <li><span class="bigger">Burger wegetariański</span> - bez prawdziwej wołowiny:) z tofu, hummusem, sałatką marokańską, grillowanym bakłażanem</li>
                <li><span class="bigger">Kurczak Supreme</span> - szaszłyki z kurczaka marynowanego w sosie sojowym, podawane w sosie chilli mango</li>
                <li><span class="bigger">Żeberka z dzika</span> - marynowane w ziołach, podawane ze śliwkowym BBQ</li>
                <li><span class="bigger">Ramen wegetariański</span> - z grzybami shitake, jajkiem, tofu i makaronem sojowym</li>
                <li><span class="bigger">Grillowany łosoś</span> - podawany z ziemniakami zapiekanymi w salsa brava</li>
                <li><span class="bigger">Krewetki Taco</span> - marynowane w teryiaki, chilli i ananasie, podawane z limonką i serem kozim</li>
                <li><span class="bigger">Sałatka Cesar</span> - grillowana pierś kurczaka, sos anchois, grzanki, sałata, pomodory, oliwa</li>
                <li><span class="bigger">Pizza z pieca</span> - różne rodzaje - info w lokalu</li>
            </ul>
        </div>
    </div>
</section>

<div class="grey_belt">Galeria</div>

<section id="photo-gallery">
    <div class="container">
        <div id="gallery">

            <div class="row clear">
                <a rel="prettyPhoto[gallery]" href="<?php bloginfo('template_directory') ?>/images/maelle-ramsay-195046.jpg">
                    <div class="col-3"><img src="<?php bloginfo('template_directory') ?>/images/thumbnails/maelle-ramsay-195046-min.jpg" width="100%" height="100%"/></div>
                </a>

                <a rel="prettyPhoto[gallery]" href="<?php bloginfo('template_directory') ?>/images/pexels-photo.jpg">
                    <div class="col-3"><img src="<?php bloginfo('template_directory') ?>/images/thumbnails/pexels-photo-min.jpg" width="100%" height="100%"/>
                    </div>
                </a>

                <a rel="prettyPhoto[gallery]" href="<?php bloginfo('template_directory') ?>/images/austin-neill-213461.jpg">
                    <div class="col-3"><img src="<?php bloginfo('template_directory') ?>/images/thumbnails/austin-neill-213461-min.jpg" width="100%" height="100%"/></div>
                </a>

                <a rel="prettyPhoto[gallery]" href="<?php bloginfo('template_directory') ?>/images/francisco-moreno-110533.jpg" rel="prettyPhoto[gallery]">
                    <div class="col-3"><img src="<?php bloginfo('template_directory') ?>/images/thumbnails/francisco-moreno-110533-min.jpg" width="100%" height="100%"/></div>
                </a>
            </div>

            <div class="row clear">
                <a rel="prettyPhoto[gallery]" href="<?php bloginfo('template_directory') ?>/images/andreas-schafer-214300.jpg">
                    <div class="col-3"><img src="<?php bloginfo('template_directory') ?>/images/thumbnails/andreas-schafer-214300-min.jpg" width="100%" height="100%"/></div>
                </a>

                <a rel="prettyPhoto[gallery]" href="<?php bloginfo('template_directory') ?>/images/victor-abrantes-110259.jpg">
                    <div class="col-3"><img src="<?php bloginfo('template_directory') ?>/images/thumbnails/victor-abrantes-110259-min.jpg" width="100%" height="100%"/></div>
                </a>

                <a rel="prettyPhoto[gallery]" href="<?php bloginfo('template_directory') ?>/images/maelle-ramsay-195042.jpg">
                    <div class="col-3"><img src="<?php bloginfo('template_directory') ?>/images/thumbnails/maelle-ramsay-195042-min.jpg" width="100%" height="100%"/></div>
                </a>

                <a rel="prettyPhoto[gallery]" href="<?php bloginfo('template_directory') ?>/images/austin-neill-222827.jpg">
                    <div class="col-3"><img src="<?php bloginfo('template_directory') ?>/images/thumbnails/austin-neill-222827-min.jpg" width="100%" height="100%"/></div>
                </a>
            </div>

            <div class="row clear">
                <a rel="prettyPhoto[gallery]" href="<?php bloginfo('template_directory') ?>/images/soren-astrup-jorgensen-133814.jpg">
                    <div class="col-3"><img src="<?php bloginfo('template_directory') ?>/images/thumbnails/soren-astrup-jorgensen-133814-min.jpg" width="100%" height="100%"/></div>
                </a>

                <a rel="prettyPhoto[gallery]" href="<?php bloginfo('template_directory') ?>/images/chad-kirchoff-144869.jpg">
                    <div class="col-3"><img src="<?php bloginfo('template_directory') ?>/images/thumbnails/chad-kirchoff-144869-min.jpg" width="100%" height="100%"/></div>
                </a>

                <a rel="prettyPhoto[gallery]" href="<?php bloginfo('template_directory') ?>/images/greg-weaver-198706.jpg">
                    <div class="col-3"><img src="<?php bloginfo('template_directory') ?>/images/thumbnails/greg-weaver-198706-min.jpg" width="100%" height="100%"/></div>
                </a>

                <a rel="prettyPhoto[gallery]" href="<?php bloginfo('template_directory') ?>/images/markus-spiske-78530.jpg">
                    <div class="col-3"><img src="<?php bloginfo('template_directory') ?>/images/thumbnails/markus-spiske-78530-min.jpg" width="100%" height="100%"/></div>
                </a>

            </div>
            <div class="show-all">Więcej zdjęć</div>
        </div>
    </div>
</section>

<div class="grey_belt">Oferta</div>

<section id="offer">
    <div class="container">
        <div id="offer_box">
            <div class="offer_list">
                <ul>
                    <li>zapraszamy do współpracy <span class="big">zespoły i solistów</span></li>
                    <li>organizujemy <span class="big">koncerty, jam sessions</span>, przeglądy zespołów, pokazy filmów</li>
                    <li>organizujemy <span class="big">imprezy urodzinowe</span>, przyjęcia okolicznościowe</li>
                    <li>udostępniamy lokal pod <span class="big">imprezy zamknięte</span></li>
                    <li>organizujemy <span class="big">szkolenia</span> dla barmanów i baristów</li>
                    <li>jesteśmy otwarci na inne propozycje :)</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="grey_belt">Kontakt</div>

<footer id="footer">
    <div class="container">
        <div id="contact">
            <div id="contact_items">
                <div class="phone_nr">
                    <i class="flaticon-technology"></i>
                    <p>666 999 444</p>
                </div>
                <div class="e-mail">
                    <i class="flaticon-email"></i>
                    <p>whiskey.cave@gmail.com</p>
                </div>
                <div class="home">
                    <i class="flaticon-home"></i>
                    <p>Katowice <br>
                        ul. Dworcowa 2</p>
                </div>
                <div class="fb">
                    <i class="flaticon-facebook"></i>
                    <p>facebook.com/WhiskeyCave</p>
                </div>

                <div id="contact_form">
                    <form>
                        Napisz do nas: <br>
                        <input type="text" name="name" id="name" placeholder="Imię i nazwisko" class="input_data"/>
                        <br>
                        <input type="email" name="email" id="email" placeholder="email" class="input_data"/>
                        <br>
                        <textarea id="info" placeholder="Wiadomość"></textarea>
                        <br>
                        <input type="submit" value="Wyślij"/>
                        <div id="error"></div>
                        <div id="success"></div>
                    </form>
                </div>
            </div>

            <div id="our_people">
                <p class="org">organizacja koncertów: <br>
                    Rita tel. 600 350 200
                </p>
                <p class="rez">rezerwacje: <br>
                    Michał tel. 500 456 456
                </p>
                <p class="parties">imprezy zamknięte i <br> przyjęcia oklicznościowe: <br>
                    Stanley tel. 789 456 234
                </p>
                <p class="bar">szef baru: <br>
                    Richard tel. 456 567 234</p>
            </div>
        </div>
    </div>
</footer>
<?php get_footer(); ?>
