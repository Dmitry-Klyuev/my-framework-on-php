<?php

const DEBUG = 1;
define("ROOT", dirname(__DIR__));
const WWW = ROOT . '/public';
const APP = ROOT . '/app';
const CORE = ROOT . '/vendor/wfm';
const HELPERS = ROOT . '/vendor/wfm/helpers';
const CACHE = ROOT . '/tmp/cache';
const LOGS = ROOT . '/tmp/LOGS';
const CONFIG = ROOT . '/config';
const LAYOUT = 'ishop';
const PATH = 'http://ishop.loc';
const ADMIN = 'http://ishop.loc/admin';
const NO_IMAGE = 'u[;pads/no_image.jpg';

require_once ROOT. '/vendor/autoload.php';