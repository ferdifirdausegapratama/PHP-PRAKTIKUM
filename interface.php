<?php
    interface MyInterface
    {
        public function A();
        public function B();
        public function setName ($name);
    }
    class Myclass implements MyInterface
    {
        protected $name;
        public function A()
        {
            echo("Ini Dari Fungsi A <br>");

        }
        public function B()
        {
            echo("Ini Dari Fungsi B <br>");

        }
        public function setName($name)
        {
            $this->name = $name;
            Echo $this->name;
        }
    }
    $call = new Myclass();
    $call->A(); //Panggil Fungsi Induk
    $call->B(); //Panggil Funsi Anak
    $call->setName('Ferdi Firdaus Ega Pratama');
?>