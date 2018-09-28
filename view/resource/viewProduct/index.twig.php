<?php
include VIEW . 'inc/header.php';
?>
    <ul id="navigation">
        {% for item in navigation %}
        <li><a href="{{ item.href }}">{{ item.caption }}</a></li>
        {% endfor %}
    </ul>

    <h1>My Webpage</h1>
    {{ name }}
<?php

include VIEW . 'inc/footer.php';

?>