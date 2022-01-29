<?php

function print_redln(mixed $str): void {
    echo "\033[0;31m$str\033[0m\n";
}

function print_lightGreenln(mixed $str): void {
    echo "\033[1;32m$str\033[0m\n";
}

function print_greenln(mixed $str): void {
    echo "\033[0;32m$str\033[0m\n";
}

function print_yellowln(mixed $str): void {
    echo "\033[1;33m$str\033[0m\n";
}

function showLogo(): void {
    echo "\n";
    print_greenln("    ____  ____  _   __   ______      __           __      __            ");
    print_greenln("   / __ \/ __ \/ | / /  / ____/___ _/ /______  __/ /___ _/ /_____  _____");
    print_greenln("  / /_/ / /_/ /  |/ /  / /   / __ `/ / ___/ / / / / __ `/ __/ __ \/ ___/");
    print_greenln(" / _, _/ ____/ /|  /  / /___/ /_/ / / /__/ /_/ / / /_/ / /_/ /_/ / /    ");
    print_greenln("/_/ |_/_/   /_/ |_/   \____/\__,_/_/\___/\__,_/_/\__,_/\__/\____/_/     ");
    echo "\n";
}
