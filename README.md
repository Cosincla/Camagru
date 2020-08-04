# Camagru

Camagru is a project I worked on during my time at WeThinkCode. The project entailed developing a website that can take an image, either uploaded or taken with the Computer's camera, and edit that photo with a variety of stickers. Other users would be able to see your photos and would be able to like and comment on them.


## Requirements
* [Xamp]
* [Thunderbird]


## Installation

1. Download and install requirements.
2. Follow [these] instructions, excluding the testmail.php part at the end.
3. In the XAMP Control Panel, start Apache, MySql and Mercury.
4. Navigate to http://localhost/Camagru/index.php


## Usage/Tests

1. Navigate to http://localhost/Camagru/index.php
2. Under New User, click on the link and sign up (Use local-user@localhost.com as your email).
3. After a few minutes, you should receive an email in thunderbird, use the verification code on the verification page (If you dont feel like waiting look it up in phpmyadmin cosincla_camagru -> verification under unlock).
4. Sign in with your account detail.
5. Click on Settings and choose the Edit Profile Photo option. Choose a file, upload then save it. You should be returned to the gallery with a changed profile photo.
6. Click on Create and allow the site to use the camera.
7. Click on either a sticker or a background to add it to the photo, clicking the same sticker/background again will remove it.
8. When you are happy, take the photo then save it.
9. The image should now be in the public Gallery, click Like/comment then either like or comment.
10. Click on Settings and choose My Gallery, find your photo and click on view likes/comments, it should show either your like or comment (whichever ones you did).
11. Click back, then go back into your gallery.
12. Click Delete, then yes.

If all that was successful, then all the important stuff works.


## Database Structure

(Note: for all tinyints, 1 is true and 0 is false)

### users

* `int` *id* (Primary key)
* `varchar(191)` *name*
* `varchar(191)` *surname*
* `varchar(20)` *username* (unique)
* `char(128)` *password* (hashed so nobody can steal it)
* `email` *varchar(191)*
* `tinyint(1)` *email_on_comment* (Does the user want to receive an email when someone comments on their photo?)
* `validated` *validated* (Has the user been successfully verified?)

### profile_photos

* `int` *id* (Primary key)
* `varchar(20)` *user_id*
* `tinyint(1)` *selected* (Is this photo currently in use?)

### uploads

* `int` *id* (Primary key)
* `varchar(20)` *image_creator*
* `varchar(191)` *image_id*
* `timestamp` *date_created*

### likes

* `varchar(20)` *image_creator*
* `varchar(191)` *image_id*
* `varchar(20)` *like_id* (id of whomever liked the photo)
* `tinyint(1)` *like*

### comments

* `int` *id* (Primary key)
* `varchar(191)` *image_id*
* `varchar(20)` *image_creator*
* `varchar(200)` *comment*
* `varchar(20)` *commenter*

### verification
(Note: User information in this table is deleted once the user is successfully verified)

* `int` *id* (Primary key)
* `varchar(191)` *user_id*
* `varchar(20)` *unlock* (verification code needed to validate a user's profile)


[xamp]: https://www.apachefriends.org/index.html
[thunderbird]: https://www.thunderbird.net/en-ZA/
[these]: http://wiki.deglowdesign.de/xampp:set-up-mercury-for-email-debugging-with-php-sendmail
