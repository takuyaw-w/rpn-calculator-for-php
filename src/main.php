<?php

require_once 'utility.php';

function main(): void {
    $stack = [];

    showLogo();

    while(true) {
        // 入力を促す
        print_yellowln("\n数値もしくは演算子を入力してください。");
        print_yellowln("=: 最終結果出力, .: 終了, c:クリア");
        echo "現在の入力値 [" . implode(" ", $stack) .  "]\n";
        echo "> ";
        $stdin = trim(fgets(STDIN));
        if (is_numeric($stdin)) {
            $val = intval($stdin);
            array_push($stack, $val);
        } else {
            switch ($stdin) {
                case '+':
                    if (count($stack) < 2) {
                        print_redln("データが存在しません。");
                        break;
                    }
                    $a = array_pop($stack);
                    $b = array_pop($stack);
                    $c = $a + $b;
                    array_push($stack, $c);
                    break;
                case '-':
                    if (count($stack) < 2) {
                        print_redln("データが存在しません。");
                        break;
                    }
                    $a = array_pop($stack);
                    $b = array_pop($stack);
                    $c = $a - $b;
                    array_push($stack, $c);
                    break;
                case '*':
                    if (count($stack) < 2) {
                        print_redln("データが存在しません。");
                        break;
                    }
                    $a = array_pop($stack);
                    $b = array_pop($stack);
                    $c = $a * $b;
                    array_push($stack, $c);
                    break;
                case '/':
                    if (count($stack) < 2) {
                        print_redln("データが存在しません。");
                        break;
                    }
                    // 計算処理
                    $a = array_pop($stack);
                    $b = array_pop($stack);
                    if ($b == 0) {
                        print_redln("0で除算しようとしています。");
                        $stack = [];
                        break;
                    }
                    $c = $a / $b;
                    array_push($stack, $c);
                    break;
                case '=':
                    if (count($stack) !== 1) {
                        print_redln("計算途中です。");
                        break;
                    }
                    // 最終的な結果を出力
                    $result = array_pop($stack);
                    print_lightGreenln("計算結果： {$result}");
                    break;
                case '.':
                    return;
                case 'c':
                    $stack = [];
                    break;
                default:
                    print_redln("不正な入力です。");
                    break;
            }
        }
    }
}

main();
