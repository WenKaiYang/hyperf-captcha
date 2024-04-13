# ella123/hyperf-captcha

```shell
composer require ella123/hyperf-captcha
```

# 发布配置

```php
php bin/hyperf.php vendor:publish ella123/hyperf-captcha
```

# 使用案例

```php
# 创建图片验证码
$data = \Ella123\HyperfCaptcha\captcha_create();
$key = $data['key']; # 验证码标识
$key = $data['img']; # 验证码图片
# 验证图片验证码
# $code: 用户输入的验证码
# $key: 创建验证码的时候返回的key
\Ella123\HyperfCaptcha\captcha_verify($code,$key);
```