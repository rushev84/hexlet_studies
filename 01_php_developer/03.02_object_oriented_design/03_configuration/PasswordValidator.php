<?php

namespace App;

class PasswordValidator
{
    // BEGIN (write your solution here)
    public $options;
    public $errors;

    public function __construct($options = [])
    {
        if (array_key_exists('minLength', $options)) {
            $this->options['minLength'] = $options['minLength'];
        } else {
            $this->options['minLength'] = 8;
        }
        if (array_key_exists('containNumbers', $options)) {
            $this->options['containNumbers'] = $options['containNumbers'];
        } else {
            $this->options['containNumbers'] = false;
        }

    }

    public function validate($str)
    {
        $this->errors = [];
        if (strlen($str) < $this->options['minLength']) {
            $this->errors += ['minLength' => 'too small'];
        }
        if ($this->options['containNumbers'] === true && !self::hasNumber($str)) {
            $this->errors += ['containNumbers' => 'should contain at least one number'];
        }
        return $this->errors;
    }

    // END

    private function hasNumber(string $subject): bool
    {
        return strpbrk($subject, '1234567890') !== false;
    }
}

$validator = new PasswordValidator();
$errors1 = $validator->validate('qwertyui');

print_r($validator);