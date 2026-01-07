@echo off
cd /d "%~dp0"

echo ===============================
echo Adding all changes...
git add .

echo Committing changes...
git commit -m "Update: %date% %time%"

echo ===============================
echo Pushing to GitHub...
git push origin main

if errorlevel 1 (
    echo.
    echo Push failed — clearing old GitHub credentials...
    git config --global --unset credential.helper 2>nul
    cmdkey /delete:git:https://github.com >nul 2>&1
    cmdkey /delete:LegacyGeneric:target=git:https://github.com >nul 2>&1

    echo.
    echo Please enter your NEW GitHub token when prompted.
    echo Retrying push...
    git push origin main
)

echo.
echo GitHub push completed!
pause
