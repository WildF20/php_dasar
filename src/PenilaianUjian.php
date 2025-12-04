<?php

class PenilaianUjian
{
    private array $nilai = [];

    public function __construct(string $input)
    {
        $trimmed = trim($input);

        if ($trimmed === '') {
            throw new InvalidArgumentException('Input string is empty; expected integers separated by spaces.');
        }

        $parts = preg_split('/\s+/', $trimmed);
        if ($parts === false) {
            throw new InvalidArgumentException('Failed to parse input string.');
        }

        $intRegex = '/^[+-]?\d+$/';

        $ints = [];
        foreach ($parts as $token) {
            if (!preg_match($intRegex, $token)) {
                throw new InvalidArgumentException(sprintf('Invalid token in input (not an integer): "%s"', $token));
            }
            $ints[] = (int) $token;
        }

        $this->nilai = $ints;
    }

    public function average(): float
    {
        if (count($this->nilai) === 0) {
            throw new RuntimeException('No numbers available to calculate average.');
        }

        return array_sum($this->nilai) / count($this->nilai);
    }

    public function max(): int
    {
        if (count($this->nilai) === 0) {
            throw new RuntimeException('No numbers available to determine max.');
        }

        return (int) max($this->nilai);
    }

    public function min(): int
    {
        if (count($this->nilai) === 0) {
            throw new RuntimeException('No numbers available to determine min.');
        }

        return (int) min($this->nilai);
    }
}
