<?php

class PatternGenerator
{
    private int $row, $col;

    public function __construct(int $row, int $col)
    {
        $this->row = $row;
        $this->col = $col;
    }

    public function generatePattern()
    {
        $pointer = 1;
        $rowPointer = 2;
        $color = '[B]';
        $pattern = [];

        for ($row=1; $row <= $this->row; $row++) { 
            if ($rowPointer%3 == 0) {
                $pointer = 3;
                $rowPointer = 1;
            } else {
                $pointer = 3 - $rowPointer;
                $rowPointer++;
            }

            $arrayRow = [];
            for ($col=1; $col <= $this->col; $col++) { 
                $color = '[B]';

                if ($pointer%3 == 0) {
                    $color = '[ ]';
                    $pointer = 1;
                }else{
                    $pointer++;
                    $color = '[B]';
                };

                if ($col%4 == 0) {
                    $color = '[ ]';
                }

                $arrayRow[] = $color;
            }

            $pattern[] = $arrayRow;
        }

        return $pattern;
    }
}

?>