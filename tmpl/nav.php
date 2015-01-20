<nav>
    <div class="main-nav">
        <ul>
            <li <?php echo ($page == '')? 'class="active"':''?>><a href="/" id="info" >Обо мне</a></li>
            <li <?php echo ($page == 'projects') ? 'class="active"' : '';?>><a href="projects" id="my-projects" >Мои работы</a></li>
            <li <?php echo ($page == 'feedback') ? 'class="active"' : '';?>><a href="feedback" id="contact-me" >Связаться со мной</a></li>
        </ul>
    </div>
    <div class="contacts">
        <ul>
            <li><span id="contacts">Контакты</li>
            <li><a href="#" id="mail"><span class="whitespace"></span><span class="btn-contacts">masta.sable@gmail.com</span></a></li>
            <li><a href="#" id="phone"><span class="whitespace"></span><span class="btn-contacts">+79269612210</span></a></li>
            <li><a href="#" id="skype"><span class="whitespace"></span><span class="btn-contacts">masta.sable</span></a></li>
        </ul>
    </div>
</nav>