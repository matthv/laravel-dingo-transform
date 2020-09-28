LARAVEL DINGO TRANSFORM
=============

This repository extends the [Dingo API package](https://github.com/dingo/api).
It lets your API users pass in and receive camelCased or snake_cased keys while your app receives and produces snake_cased ones.


# Installation

```
composer require 'matthv/laravel-dingo-transform' '~1.2'
```

# Requirements

- Laravel 7/8
- Dingo/api 3.+

# Use

Include a X-Key-Inflection header with values of camel or snake in your JSON API requests.
  
![snake_case](https://i.imgur.com/2wn3FAA.png)
![camelCase](https://i.imgur.com/2PC3h8W.png)

___

This repo is inspired by the [```gem "olive_branch"```](https://github.com/vigetlabs/olive_branch)

---
