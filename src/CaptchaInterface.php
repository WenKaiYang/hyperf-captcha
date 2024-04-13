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

interface CaptchaInterface
{
    /**
     * 创建图片验证码
     * @param string $key (请求标识+验证类型)
     */
    public function create(string $key): string;

    /**
     * 验证图片验证码
     * @param string $key (请求标识+验证类型)
     */
    public function verify(string $key, string $value): bool;
}
