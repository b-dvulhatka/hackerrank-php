<?php

class Solution
{
    private $stack = [];
    private $queue = [];

    public function pushCharacter($stack)
    {
        $this->stack[] = $stack;
        array_push($this->stack, $stack);
    }

    public function enqueueCharacter($queue)
    {
        $this->queue[] = $queue;
        array_push($this->queue, $queue);
    }

    public function popCharacter()
    {
        return array_pop($this->stack);
    }

    public function dequeueCharacter()
    {
        return array_shift($this->queue);
    }
}

// ler string s
$s = fgets(STDIN);

// criação da classe objeto solution 
$obj = new Solution();

$len = strlen($s);
$isPalindrome = true;

for ($i = 0; $i < $len; $i++) {
    $obj->pushCharacter($s{$i});
    $obj->enqueueCharacter($s{$i});
}


// retira o primeiro caracter do topo, remove o primeiro caracter da fila e os compara

for ($i = 0; $i < $len / 2; $i++) {
    if ($obj->popCharacter() != $obj->dequeueCharacter()) {
        $isPalindrome = false;

        break;
    }
}

// retorna string s sendo palindrome ou nao
if ($isPalindrome) {
    echo 'The word, ' . $s . ', is a palindrome.';
} else {
    echo 'The word, ' . $s . ', is not a palindrome.';
}
