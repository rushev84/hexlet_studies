<?php

namespace App;

use function Symfony\Component\String\length;

class Truncater
{
    public const OPTIONS = [
        'separator' => '...',
        'length' => 200,
    ];

    // BEGIN (write your solution here)
    private $options;

    public function __construct($options = [])
    {
        $this->options = array_merge(self::OPTIONS, $options);
    }

    public function truncate($str, $options = []) {
        $defaultOptions = $this->options;
        $this->options = array_merge($this->options, $options);
        $result = strlen($str) > $this->options['length'] ? substr($str, 0, $this->options['length']) . $this->options['separator'] : $str;
        $this->options = $defaultOptions;

        return $result;
    }
    // END
}

$truncater = new Truncater();
$actual = $truncater->truncate('one two');
//$this->assertEquals('one two', $actual);


$actual = $truncater->truncate('one two', ['length' => 6]);
//$this->assertEquals('one tw...', $actual);
$actual = $truncater->truncate('one two', ['separator' => '.']);
//$this->assertEquals('one two', $actual);
$actual = $truncater->truncate('one two', ['length' => '3']);
//$this->assertEquals('one...', $actual);

$truncater = new Truncater(['length' => 3]);
$actual = $truncater->truncate('one two');
//$this->assertEquals('one...', $actual);
print_r($actual);




