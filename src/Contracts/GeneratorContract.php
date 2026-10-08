<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\OTPAuth\Contracts;

interface GeneratorContract
{
    /**
     * Generate a new One Time Password code.
     */
    public function generate(?int $length = null): string;
}
