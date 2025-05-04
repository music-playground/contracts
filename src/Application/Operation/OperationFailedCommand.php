<?php

namespace MusicPlayground\Contract\Application\Operation;

use InvalidArgumentException;
use MusicPlayground\Contract\Application\Command\OperationCommandInterface;

final readonly class OperationFailedCommand implements OperationCommandInterface
{
    /** @var string|string[] */
    public string|array $errors;

    public function __construct(
        public ?string $operationId,
        string|array $errors,
        public int $code
    ) {
        if (is_array($errors) === true) {
            if (count($errors) === 0) {
                throw new InvalidArgumentException('Empty errors array');
            }

            $this->errors = count($errors) === 1 ? $errors[0] : $errors;
        } else {
            $this->errors = $errors;
        }
    }

    public function getId(): string
    {
        return $this->operationId ?: '#';
    }
}