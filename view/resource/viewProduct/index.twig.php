<?php
include VIEW . 'inc/header.php';
?>
    <ul id="navigation">
        {% for item in navigation %}
        <li><a href="{{ item.href }}">{{ item.caption }}</a></li>
        {% endfor %}
    </ul>
    <h1>My folder produkt</h1>

    <ul id="navigation">
        {% for product in products %}
        <li><a href="{{ produkt.id }}">{{ product.name }}</a></li>
        {% endfor %}
    </ul>
<?php

include VIEW . 'inc/footer.php';

?>