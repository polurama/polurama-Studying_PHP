<?php
declare(strict_types=1);

function inverse(int $x): float {
//    if($x === 0) {
//        throw new LogicException('Can not divide by 0');
//    }
    return 1/$x;
}
try {
    echo inverse(0), "\n", 'ddd', "\n";
    echo "Hi!", "\n";

} catch (Throwable $e) {
    echo "An error: {$e->getMessage()}, in file {$e->getFile()}, in line {$e->getLine()}", "\n";
} finally {
    echo "The app is completed";
}