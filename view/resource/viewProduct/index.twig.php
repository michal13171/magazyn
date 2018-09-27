<?php
include VIEW . 'inc/header.php';
?>
    <ul id="navigation">
        {% for item in navigation %}
        <li><a href="{{ item.href }}">{{ item.caption }}</a></li>
        {% endfor %}
    </ul>
<?= $data['name'] ?>
    <h1>My Webpage</h1>
    {{ a_variable }}
<?php
pr($data['name']);
include VIEW . 'inc/footer.php';

?>