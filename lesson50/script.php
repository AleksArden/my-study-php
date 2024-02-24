<?php
echo "File name - " . $_FILES['filename']['name'] . '<br>';
echo "File size b - " . $_FILES['filename']['size'] . '<br>';
echo "MIME - " . $_FILES['filename']['type'] . '<br>';
echo "temporary file - " . $_FILES['filename']['tmp_name'] . '<br>';
