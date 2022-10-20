<?php
declare(strict_types=1);


namespace P2Media\PhpStan\rules;


use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\Expr\FuncCall;
use PHPStan\Analyser\Scope;
use PHPStan\Rules\Rule;
use PHPStan\Rules\RuleErrorBuilder;
use PHPStan\ShouldNotHappenException;

/**
 * @implements Rule<FuncCall>
 */
final class ForbiddenFuncCallRule implements Rule
{


    public function __construct(private readonly array $funcNames)
    {

    }

    public function getNodeType(): string
    {
        return FuncCall::class;
    }

    /**
     * @param FuncCall $node
     * @throws ShouldNotHappenException
     */
    public function processNode(Node $node, Scope $scope): array
    {

        if ($node->name instanceof Name && in_array($node->name->toString(), $this->funcNames)) {
            return [
                RuleErrorBuilder::message($node->name->toString() .' detected')->build()
            ];
        }

        return [];
    }
}
