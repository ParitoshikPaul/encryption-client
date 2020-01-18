# Encryption-client

Encryption Client demonstrating Provider and Factory Design Patterns, PS4 autoloading, PSR2 Code style, Unit test cases,

## PSR 4 Autoloading

This PSR describes a specification for autoloading classes from file paths. It is fully interoperable, and can be used in addition to any other autoloading specification, including PSR-0. This PSR also describes where to place files that will be autoloaded according to the specification.

`\<NamespaceName>(\<SubNamespaceNames>)*\<ClassName>`

## PSR 2 Codeing Style

Code MUST follow a “coding style guide” PSR [PSR-1].

Code MUST use 4 spaces for indenting, not tabs.

There MUST NOT be a hard limit on line length; the soft limit MUST be 120 characters; lines SHOULD be 80 characters or less.

There MUST be one blank line after the namespace declaration, and there MUST be one blank line after the block of use declarations.

Opening braces for classes MUST go on the next line, and closing braces MUST go on the next line after the body.

Opening braces for methods MUST go on the next line, and closing braces MUST go on the next line after the body.

Visibility MUST be declared on all properties and methods; abstract and final MUST be declared before the visibility; static MUST be declared after the visibility.

Control structure keywords MUST have one space after them; method and function calls MUST NOT.

Opening braces for control structures MUST go on the same line, and closing braces MUST go on the next line after the body.

Opening parentheses for control structures MUST NOT have a space after them, and closing parentheses for control structures MUST NOT have a space before.

## PHP Unit Tests for code coverage

phpunit `sourceFile.php`

## Use of MCRYPT library in php.

[Documentation](https://www.php.net/manual/en/book.mcrypt.php)

## Demostrating Provider and Factory Design Pattern

provider.service = function(name, Class) {
provider.provide(name, function() {
this.$get = function($injector) {
return $injector.instantiate(Class);
    };
  });
}
provider.factory = function(name, factory) {
  provider.provide(name, function() {
    this.$get = function($injector) {
      return $injector.invoke(factory);
};
});
}
provider.value = function(name, value) {
provider.factory(name, function() {
return value;
});
};

[Design Patterns](https://phptherightway.com/pages/Design-Patterns.html)

# Requisities:

-   PHP 7.0
-   Composer

# How to Run this project !

-   Install php
-   Install composer
-   Run `composer install`
-   php -S localhost:8000

##PHP INFO

php -S localhost:8000 phpinfo.php
