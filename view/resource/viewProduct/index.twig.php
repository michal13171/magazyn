<?php
include VIEW . 'inc/header.php';
?>
    <ul id="navigation">
        {% for item in navigation %}
        <li><a href="{{ item.href }}">{{ item.caption }}</a></li>
        {% endfor %}
    </ul>

    <h1>My folder produkt</h1>
    {% for name in navigation %}
    <li>>{{ navigation.name }}</li>
    {% endfor %}
<?php

include VIEW . 'inc/footer.php';

?>