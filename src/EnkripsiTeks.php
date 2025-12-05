<?php

class EnkripsiTeks {
    private string $teks;

    public function __construct(string $teks) {
        $this->teks = $teks;
    }

    public function enkripsi(): string {
        $length = strlen($this->teks);
        $key = -1;
        $switch = -1;

        for ($i = 0; $i < $length; $i++) {
            $this->teks[$i] = chr(ord($this->teks[$i]) + ($key * $switch));
            $key--;
            $switch *= -1;
        }

        return $this->teks;
    }

    public function dekripsi(): string {
        $length = strlen($this->teks);
        $key = -1;
        $switch = -1;

        for ($i = 0; $i < $length; $i++) {
            $this->teks[$i] = chr(ord($this->teks[$i]) - ($key * $switch));
            $key--;
            $switch *= -1;
        }

        return $this->teks;
    }
}


?>