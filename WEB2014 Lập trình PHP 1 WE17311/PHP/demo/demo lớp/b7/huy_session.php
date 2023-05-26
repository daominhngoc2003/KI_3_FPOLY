<?php
session_start();
// huy session
session_destroy();

// xoa tung session
unset($_SESSION['username']);