<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Ella123\HyperfCaptcha;

use Hyperf\Stringable\Str;
use function Hyperf\Support\make;

/**
 * 创建图片验证码
 */
function captcha_create(?string $key = null): array
{
    empty($key) && $key = md5(Str::random(32).time());
    return [
        'key' => $key,
        'img' => make(CaptchaInterface::class)->create($key),
    ];
}

/**
 * 验证图片验证码
 */
function captcha_verify(string $code, string $key): bool
{
    return make(CaptchaInterface::class)->verify(code: $code, key: $key);
}
