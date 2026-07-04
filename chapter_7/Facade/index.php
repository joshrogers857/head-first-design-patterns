<?php

namespace Facade;

require_once 'PopcornPopper.php';
require_once 'TheaterLights.php';
require_once 'Screen.php';
require_once 'Projector.php';
require_once 'StreamingPlayer.php';
require_once 'Amplifier.php';
require_once 'Tuner.php';
require_once 'HomeTheaterFacade.php';

printf("Without Facade:\n\n");

$popper = new PopcornPopper();
$theaterLights = new TheaterLights();
$screen = new Screen();
$projector = new Projector();
$player = new StreamingPlayer();
$amplifier = new Amplifier();
$tuner = new Tuner();

$popper->on();
$popper->pop();

$theaterLights->dim(10);

$screen->down();

$projector->on();
$projector->setInput($player);
$projector->wideScreenMode();

$tuner->setAmplifier($amplifier);

$amplifier->on();
$amplifier->setStreamingPlayer($player);
$amplifier->setTuner($tuner);
$amplifier->setSurroundSound();
$amplifier->setVolume(5);

$player->on();
$player->play("Raiders of the Lost Ark");

printf("\n\nWith Facade:\n\n");

$facade = new HomeTheaterFacade(
    $popper,
    $theaterLights,
    $screen,
    $projector,
    $player,
    $amplifier,
    $tuner
);

$facade->watchMovie("Raiders of the Lost Ark");
$facade->endMovie();