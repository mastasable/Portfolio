<!--
    Подкулючаем head
-->

<?php
    include_once "tmpl/head.php"
?>

<!--
    Подключаем header
-->

<?php
    include_once "tmpl/header.php"
?>

<!--
    Подключаем nav
-->
<body>
    <div class="content clear">
        <?php
            include_once "tmpl/nav.php"
        ?>
        <section class="">
            <article id="main-info">
                <div class="header"><h2>Основная информация</h2></div>
                <div class="clear">
                    <div class="portrait"><img src="img/userpicboy.png" alt=""></div>
                    <div class="info">
                        <ul>
                            <li><b>Меня зовут:</b>&nbsp; Соболь Александр Владимирович</li>
                            <li><b>Мой возраст:</b>&nbsp; 24 года</li>
                            <li><b>Мой город:</b>&nbsp; Можайск</li>
                            <li><b>Моя специализация:</b>&nbsp; FRONTEND разработчик</li>
                            <div class="clear">
                                <div class="key-skill">
                                    <li><b>Ключевые навыки: </b>&nbsp;
                                </div>
                                <div class="skills">
                                    <div>
                                        <span>html</span>
                                        <span>CSS</span>
                                        <span>git</span>
                                    </div>
                                    <div>
                                        <span>grunt</span>
                                        <span>javascript</span>
                                    </div>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </article>
            <article>
                <div class="header"><h2>Опыт работы</h2></div>
                <div class="clear">
                    <ul class="list">
                        <li>
                            <div class="left"><img src="img/port.png" alt=""/></div>
                            <div class="right"><p><b>ОАО "РЖД" - Электромеханик КТСМ</b></p>
                                <p>Октябрь 2013 - Декабрь 2014</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </article>
            <article>
                <div class="header"><h2>Образование</h2></div>
                <div class="clear">
                    <ul class="list">
                        <li>
                            <div class="left"><img src="img/high_ed.png" alt=""/>
                            </div>
                            <div class="right"><p><b>Средне-специальное. МГУПС МИИТ МКЖТ</b></p>
                                <p>Сентябрь 2005 - Июль 2009</p>
                            </div>
                        </li>
                        <li>
                            <div class="left"><img src="img/high_ed.png" alt=""/></div>
                            <div class="right"><p><b>Незаконченное высшее. МГУПС МИИТ</b></p>
                                <p>Сентябрь 2010 - по настоящее время</p>
                            </div>
                        </li>
                        <li>
                            <div class="left"><img src="img/course.png" alt=""/></div>
                            <div class="right"><p><b>Курсы Loftschool.ru</b></p>
                                <p>Январь 2015 - по настоящее время</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </article>
        </section>
        <div class="clear"></div>
    </div>
    </div>
    <!--
        Подключаем footer
    -->
    <?php
        include_once "tmpl/footer"
    ?>
    <script src="js/jquery-1.11.2.js"></script>
    <script src="js/masonry.js"></script>
</body>
