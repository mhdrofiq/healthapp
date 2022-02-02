@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
<<<<<<<< HEAD:vendor/bin/google-cloud-batch.bat
SET BIN_TARGET=%~dp0/google-cloud-batch
SET BIN_TARGET=%~dp0/../mtdowling/jmespath.php/bin/jp.php
>>>>>>>> fedb5abc29ed6c32d72bc16abc95768e1d06ff04:vendor/bin/jp.php.bat
SET BIN_TARGET=%~dp0/../google/cloud-core/bin/google-cloud-batch
>>>>>>> fedb5abc29ed6c32d72bc16abc95768e1d06ff04
php "%BIN_TARGET%" %*
