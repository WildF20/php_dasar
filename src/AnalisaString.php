<?php

class AnalisaString
{
    private string $string = '';

    public function __construct(string $input)
    {
        $this->string = $input;
    }

    public function hitungLowercase(): string
    {
        $count = 0;
        foreach (str_split($this->string) as $char) {
            if (ctype_lower($char)) {
                $count++;
            }
        }
        return "\"$this->string\" mengandung $count buah huruf kecil.";
    }
}
