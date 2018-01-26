<?php
	Class Animal
	{
		function __construct($name)
		{
			$this->name = $name;
		}
		function getName()
		{
			return $this->name;
		}
	}

	Class Cat extends Animal
	{
		function meow()
		{
			$result = 'Cat '.$this->getName().' is saying meow';
			return $result;
		}
	}
	$cat = new Cat('Garfield');
	echo $cat->meow();