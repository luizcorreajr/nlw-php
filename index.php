<?php

  echo 'Hello World!';

  function foo() {
    echo 'foo';
  }

  class Teste {
    public function bar() {
      echo __METHOD__;
    }
  }

  echo '</br>';

  foo();

  echo '</br>';

  (new Teste)->bar(); 

?>