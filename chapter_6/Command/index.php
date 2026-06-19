<?php

namespace Command;

require_once __DIR__ . '/Light.php';
require_once __DIR__ . '/LightOnCommand.php';
require_once __DIR__ . '/LightOffCommand.php';
require_once __DIR__ . '/CeilingFan.php';
require_once __DIR__ . '/CeilingFanLowCommand.php';
require_once __DIR__ . '/CeilingFanMediumCommand.php';
require_once __DIR__ . '/CeilingFanHighCommand.php';
require_once __DIR__ . '/CeilingFanOffCommand.php';
require_once __DIR__ . '/MacroCommand.php';
require_once __DIR__ . '/RemoteControl.php';

$light = new Light('Living Room');
$lightOnCommand = new LightOnCommand($light);
$lightOffCommand = new LightOffCommand($light);

$lightOnCommand->execute();
$lightOffCommand->execute();
$lightOnCommand->undo();
$lightOffCommand->undo();

$ceilingFan = new CeilingFan('Living Room');
$ceilingFanLowCommand = new CeilingFanLowCommand($ceilingFan);
$ceilingFanMediumCommand = new CeilingFanMediumCommand($ceilingFan);
$ceilingFanHighCommand = new CeilingFanHighCommand($ceilingFan);
$ceilingFanOffCommand = new CeilingFanOffCommand($ceilingFan);

$ceilingFanLowCommand->execute();
$ceilingFanMediumCommand->execute();
$ceilingFanHighCommand->execute();
$ceilingFanOffCommand->execute();
$ceilingFanLowCommand->undo();
$ceilingFanMediumCommand->undo();
$ceilingFanHighCommand->undo();
$ceilingFanOffCommand->undo();

$macroCommand = new MacroCommand([$lightOnCommand, $ceilingFanMediumCommand]);
$macroCommand->execute();
$macroCommand->undo();

$remoteControl = new RemoteControl();
$remoteControl->setCommand(0, $lightOnCommand, $lightOffCommand);
$remoteControl->onButtonWasPushed(0);
$remoteControl->offButtonWasPushed(0);
$remoteControl->undoButtonWasPushed();