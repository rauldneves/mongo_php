<?php

	$manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

	$up=new \MongoDB\Driver\BulkWrite;

	$up->update(['nome'=>'Raul'],['$set'=>['nome'=>'Raul Neves']]);

	$manager->executeBulkWrite('raiz.academicos',$up);