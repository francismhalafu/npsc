@echo off
echo Exporting database with maximum compatibility...
mysqldump -u root -p --skip-lock-tables --skip-triggers --skip-column-statistics --single-transaction --routines --events --default-character-set=utf8mb4 --no-tablespaces serveragent > serveragent_database_compatible.sql
echo.
echo Converting collation for older MySQL versions...
powershell -Command "(Get-Content serveragent_database_compatible.sql) -replace 'utf8mb4_0900_ai_ci', 'utf8mb4_unicode_ci' -replace 'utf8mb4_unicode_520_ci', 'utf8mb4_unicode_ci' | Set-Content serveragent_database_fixed.sql"
echo.
echo Database exported to: serveragent_database_fixed.sql
echo This file should work with MySQL 5.7+ servers
pause