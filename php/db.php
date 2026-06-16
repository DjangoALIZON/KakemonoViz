<?php

$pdo = new PDO(
    "pgsql:host=db;dbname=projet",
    "etudiant",
    "etudiant"
);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);