<?php
if (!empty($availableTimes)) {
    foreach ($availableTimes as $time) {
        echo '<option value="' . $time . '">' . $time . '</option>';
    }
} else {
    echo '<option value="">Nenhum horário disponível</option>';
}
?>
