@echo off
cd /d "%~dp0"
echo Adding all changes to git...
git add .
echo Committing changes...
git commit -m "Update: %date% %time%"
echo Pushing to GitHub...
git push origin main
echo GitHub push completed!
pause