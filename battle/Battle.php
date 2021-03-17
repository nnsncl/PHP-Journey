<?php

class Battle
{
    private $codes = [
        1 => "As",
        11 => "Valet",
        12 => "Dame",
        13 => "Roi"
    ];

    private $signs = [
        "piques" => [1, 13],
        "carreaux" => [14, 26],
        "coeurs" => [27, 39],
        "trèfles" => [40, 52]
    ];

    public function numCard(int $num): int
    {
        $num = $num % 13;

        if ($num == 0) return 13;

        return $num;
    }

    public function textCard(int $num): string
    {
        $sign = '';
        foreach ($this->signs as $s => $intv) {
            if ($intv[0] <= $num and $num <= $intv[1]) {
                $sign .= $s;
            }
        }

        $num = $this->numCard($num);

        if (isset($this->codes[$num]))
            $val = $this->codes[$num];
        else {
            $val = $num;
        }

        return sprintf('%s %s', $val, $sign);
    }

}