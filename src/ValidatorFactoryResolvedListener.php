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

use Hyperf\Event\Contract\ListenerInterface;
use Hyperf\Validation\Contract\ValidatorFactoryInterface;
use Hyperf\Validation\Event\ValidatorFactoryResolved;
use Hyperf\Validation\Validator;

class ValidatorFactoryResolvedListener implements ListenerInterface
{
    public function listen(): array
    {
        return [
            ValidatorFactoryResolved::class,
        ];
    }

    public function process(object $event): void
    {
        /** @var ValidatorFactoryInterface $validatorFactory */
        $validatorFactory = $event->validatorFactory;

        // 注册 captcha 验证器
        $validatorFactory->extend('captcha', function ($attribute, $value, $parameters, $validator) {
            /** @var Validator $validator */
            // 要求：验证码的 key,默认是 $attribute.'_key'
            $key = (string) ($parameters[0] ?? $validator->getValue($attribute . '_key'));
            return captcha_verify(
                code: $value,
                key: $key
            );
        });
        // 错误信息 :captcha 占位符
        $validatorFactory->replacer('captcha', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':captcha', $attribute, $message);
        });
    }
}
