<?php
declare(strict_types=1);


namespace P2Media\PhpStan\Tests\rules\NoVarDumpRule;


use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;
use P2Media\PhpStan\rules\ForbiddenFuncCallRule;

/**
 * @extends RuleTestCase<ForbiddenFuncCallRule>
 */
final class ForbiddenFuncCallRuleTest extends RuleTestCase
{

    protected function getRule(): Rule
    {
        return self::getContainer()->getByType(ForbiddenFuncCallRule::class);
    }

    public static function getAdditionalConfigFiles(): array
    {
        return [__DIR__ . '/../../../../../phpstan.neon'];
    }

    public function testHappy(): void {
        $this->analyse(
            [
                __DIR__ .'/data/happy.php'
            ],
            []
        );
    }

    public function testUnhappy(): void {
        $this->analyse(
            [
                __DIR__ .'/data/unhappy.php'
            ],
            [
                [
                    'var_dump detected', 3
                ]
            ]
        );
    }
}
