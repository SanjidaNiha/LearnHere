<?php

function unique_id($length = 20) {
    return bin2hex(random_bytes($length));
}
?>