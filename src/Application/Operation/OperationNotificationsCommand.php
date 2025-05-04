<?php

namespace MusicPlayground\Contract\Application\Operation;

use InvalidArgumentException;
use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;

final readonly class OperationNotificationsCommand implements CommandWithIdInterface
{
    /** @var string|string[] */
    public string|array $errors;

    public function __construct(
        public ?string $operationId,
        string|array $messages,
        public int $code,
        public array $params = []
    ) {
        if (is_array($messages) === true) {
            if (count($messages) === 0) {
                throw new InvalidArgumentException('Empty errors array');
            }

            $this->errors = count($messages) === 1 ? $messages[0] : $messages;
        } else {
            $this->errors = $messages;
        }
    }

    public function getId(): string
    {
        return $this->operationId ?: '#';
    }
}