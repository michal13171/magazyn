<!DOCTYPE html>
<html>
<head>
    <title>My Webpage</title>
</head>
<body>
<a href="Home" class="btn btn-sm btn-primary">Modyfikuj</a>
<a href="Product" class="btn btn-sm btn-primary">Modyfikuj</a>
<ul id="navigation">
    {% for item in navigation %}
    <li><a href="{{ item.href }}">{{ item.caption }}</a></li>
    {% endfor %}
</ul>

<h1>My Webpage</h1>
{{ a_variable }}
</body>
</html>