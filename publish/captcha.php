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
use function Hyperf\Support\env;

return [
    // 是否启用验证
    'enable' => (bool) env('CAPTCHA_ENABLE', true),
    // 验证码位数
    'length' => 5,
    // 验证码字符集合
    'codeSet' => '2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY',
    // 验证码过期时间
    'expire' => 1800,
    // 是否使用算术验证码
    'math' => true,
    // 验证码字符大小
    'fontSize' => 25,
    // 是否使用混淆曲线
    'useCurve' => true,
    // 是否添加杂点
    'useNoise' => true,
    // 验证码字体 不设置则随机
    'fontttf' => '',
    // 背景颜色
    'bg' => [243, 251, 254],
    // 验证码图片高度
    'imageH' => 0,
    // 验证码图片宽度
    'imageW' => 0,
];
