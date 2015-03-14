<?php
namespace DQNEO\HelloWorld;

interface WriterInterface
{
    public function write(String $string);

    public function writeLn(String $string);

}

class Writer implements WriterInterface
{
    private $eol;

    public function __construct()
    {
        $this->eol = new String(String::EOL);
    }

    public function write(String $string)
    {
        echo $string->getValue();
    }

    public function writeLn(String $string)
    {
        $this->write($string);
        $this->write($this->eol);
    }
}
