# ella123/hyperf-captcha

```
composer require ella123/hyperf-captcha
```

# 使用案例

```php

# 创建图片验证码
list($key,$img) = \Ella123\HyperfCaptcha\captcha_create();

# 验证图片验证码
# $code: 用户输入的验证码
# $key: 创建验证码的时候返回的key
\Ella123\HyperfCaptcha\captcha_verify($code,$key);
```