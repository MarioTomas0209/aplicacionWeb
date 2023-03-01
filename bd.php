<?php

		$conexion = new PDO("mysql:host=localhost;dbname=app","root","");

		$conexion->exec("set names utf8");

		return $conexion;
