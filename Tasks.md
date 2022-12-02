# Installation symfony

```shell
symfony new ocr-php-p5
cd ocr-php-p5
composer install
composer require \
    annotations
    twig
```

Configurer vscode.

Faire une page Home : 
* url : /
* HomeController
* content twig <h1>Home</h1>
* extends base.html.twig

# Gestion des utilisateurs

https://symfony.com/doc/5.4/security.html
https://symfony.com/doc/5.4/security/user_checkers.html

```shell
composer require \
    orm \
    form  \
    validator \
    symfony/security-bundle \
    symfonycasts/verify-email-bundle \
    symfony/mailer
composer require --dev \
    symfony/profiler-pack \
    symfony/maker-bundle \
    orm-fixtures 
sudo npm install -g maildev
maildev
```

* Login
* Logout
* Register
* Verify Email