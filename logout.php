<?php

// Visuomet pirma startuojam sesija
session_start();

// Sunaikinus sesiją, išvalomas kintamasis $ _SESSION, tokiu būdu atjungiant vartotoją
// Tai taip pat įvyksta automatiškai, uždarius naršyklę

session_destroy();
