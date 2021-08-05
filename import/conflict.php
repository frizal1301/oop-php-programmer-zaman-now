<?php

namespace Data\One {
    class Conflict {
        function info() {
            echo "Function/Kelas ini berada di namespace Data\One\Conflict" . PHP_EOL;
        }
    }
}

namespace Data\Two {
    class Conflict {
        function info() {
            echo "Function/Kelas ini berada di namespace Data\Two\Conflict" . PHP_EOL;
        }
    }
}