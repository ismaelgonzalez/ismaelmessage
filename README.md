ismaelmessage
=============

Test Plugin for WordPress that allows users to add Global Message anywhere on the blog.


Installation
============

DB Stuff
--------

1. Just run this query in your MySQL WordPress database:
    CREATE TABLE wp_global_message (id INT NOT NULL AUTO_INCREMENT, message TEXT NULL, PRIMARY KEY(id));


Plugin Installation
-------------------

1. Just clone this project in your wordpress project within wp-content/plugins/


Using The Global Message Plugin
===============================

1. After you install it go to your admin page, then to plugins then activate the Ismael Message plugin.

2. You will the see an Add a Global Message option on your left hand menu, click on it to add a Global Message

3. After you've added in some text for the global message, go to any post and add the [show_message] shortcode anywhere in the content and the global message will be shown.