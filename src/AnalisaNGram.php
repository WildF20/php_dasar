<?php
declare(strict_types=1);

class AnalisaNGram
{
    private string $text = '';
    private array $words = [];

    public function __construct(string $input)
    {
        $this->text = $input;
        $parts = preg_split('/\s+/', trim($input));
        if ($parts === false) {
            $this->words = [];
        } else {
            $this->words = array_values(array_filter($parts, fn($w) => $w !== ''));
        }
    }

    public function unigrams(): string
    {
        return $this->cetak('Unigram', implode(', ', $this->words));
    }

    public function bigrams(): string
    {
        $grams = [];
        $count = count($this->words);
        for ($i = 0; $i < $count - 1; $i++) {
            $grams[] = $this->words[$i] . ' ' . $this->words[$i + 1];
        }

        return $this->cetak('Bigram', implode(', ', $grams));
    }

    public function trigrams(): string
    {
        $grams = [];
        $count = count($this->words);
        for ($i = 0; $i < $count - 2; $i++) {
            $grams[] = $this->words[$i] . ' ' . $this->words[$i + 1] . ' ' . $this->words[$i + 2];
        }
        return $this->cetak('Trigram', implode(', ', $grams));
    }

    public function all(): string
    {
        $results = "";
        $results .= $this->unigrams();
        $results .= $this->bigrams();
        $results .= $this->trigrams();

        return $results;
    }

    private function cetak(string $label, string $data) {
        return $label . ": " . $data . "\n";
    }
}
