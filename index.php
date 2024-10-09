<?php
  echo 'Hello World!';


  function foo() {
    echo 'foo';
  }
  foo();
  echo '</br>';


  class Teste {
    public function bar() {
      echo __METHOD__;
    }
  }
  echo '</br>';


  (new Teste)->bar(); 
  $teste = new Teste;
  var_dump($teste);
  $teste->bar();

?>