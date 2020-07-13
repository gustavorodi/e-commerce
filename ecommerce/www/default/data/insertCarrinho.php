<?php
        require_once("../data/connect.php");
      $baseclass = new BaseClass;

      $baseclass->insetCarrinho($_POST['id'], 1);
