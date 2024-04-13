<?php


namespace Ella123\HyperfCaptcha;


use Hyperf\Stringable\Str;
use function Hyperf\Support\make;

/**
 * 创建图片验证码
 * @param  string|null  $key
 * @return array
 */
function captcha_create(string $key = null): array
{
    return [
        'key' => !$key && $key = Str::random(),
        'img' => make(CaptchaInterface::class)->create($key),
    ];
}

/**
 * 验证图片验证码
 * @param  string  $code
 * @param  string  $key
 * @return mixed
 */
function captcha_verify(string $code, string $key): bool
{
    return make(CaptchaInterface::class)->verify($key, $code);
}