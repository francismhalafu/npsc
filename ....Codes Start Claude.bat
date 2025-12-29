@echo off
cd /d "%~dp0"
for /f "tokens=*" %%i in ('wsl wslpath "%CD%"') do set "WSL_PATH=%%i"
wsl --cd "%WSL_PATH%" claude --dangerously-skip-permissions
pause