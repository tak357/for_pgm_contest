<?php
$arr = [];
$str = trim(fgets(STDIN));
$arr = explode(' ', $str);
class Scanner {
    private $arr = [];
    private $count = 0;
    private $pointer = 0;
    public function next() {
        if ($this->pointer >= $this->count) {
            $str = trim(fgets(STDIN));
            $this->arr = explode(' ', $str);
            $this->count = count($this->arr);
            $this->pointer = 0;
        }
        $result = $this->arr[$this->pointer];
        $this->pointer++;
        return $result;
    }
    public function hasNext() { return $this->pointer < $this->count; }
    public function nextInt() { return (int)$this->next(); }
    public function nextDouble() { return (double)$this->next(); }
    public function nextString() { return (string)$this->next(); }
    public function int2keta($a, $b) { return ($a * 10 + $b); }
    public function int3keta($a, $b, $c) { return ($a * 100 + $b * 10 + $c); }
    public function int4keta($a, $b, $c, $d) { return ($a * 1000 + $b * 100 + $c * 10 + $d); }
}
class out {
    public static function println($str = "") { echo $str . PHP_EOL; }
}

// $sc = new Scanner();
// $n = $sc->nextInt();
// out::println($n);
