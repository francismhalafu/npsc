@echo off
cd /d "%~dp0"
title Git Auto-Push

echo ===============================================
echo   Git Auto-Commit and Push
echo   Project: %~n0
echo ===============================================
echo.

:: Check if this is a git repository
git status >nul 2>&1
if errorlevel 1 (
    echo ERROR: This is not a Git repository.
    echo Folder: %CD%
    pause
    exit /b 1
)

:: Auto-detect branch
set BRANCH=
for /f "delims=" %%b in ('git branch --show-current 2^>nul') do set BRANCH=%%b

if "%BRANCH%"=="" (
    echo ERROR: Could not detect branch.
    echo Try: git branch --show-current
    pause
    exit /b 1
)

echo Repository: %CD%
echo Branch:     %BRANCH%
echo.

:: Step 1: Check for changes
echo [1/3] Checking for changes...
git status --porcelain >nul
if errorlevel 1 (
    echo No changes to commit.
    echo.
    goto PUSH_ONLY
)

:: Step 2: Add all changes
echo [2/3] Adding and committing changes...
git add .
git commit -m "Update: %date% %time%"

:PUSH_ONLY
:: Step 3: Push to current branch
echo [3/3] Pushing to origin/%BRANCH%...
git push origin %BRANCH%

if errorlevel 1 (
    echo.
    echo WARNING: Push failed!
    echo Try: git pull origin %BRANCH%
    echo.
) else (
    echo.
    echo SUCCESS: Pushed to GitHub via SSH.
)

echo ===============================================
pause