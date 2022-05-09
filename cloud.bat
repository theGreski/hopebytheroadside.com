@ECHO OFF

:: clean the screen
CLS

:: Set the window title
TITLE hopebytheroadside.com

:: Set the variable default to 2
SET v=1

:MENU
CLS
ECHO.
ECHO ...............................................
ECHO PRESS 1, 2 OR 3 to select your task, or 4 to EXIT.
ECHO ...............................................
ECHO.
ECHO 1 - Install PHP component
ECHO 2 - Update all components
ECHO 3 - Deploy the app
ECHO 4 - EXIT
ECHO.


SET INPUT=
SET /P INPUT=Please select an option: 

IF /i %INPUT% == 1 GOTO INSTALL
IF /i %INPUT% == 2 GOTO UPDATE
IF /i %INPUT% == 3 GOTO DEPLOY
IF /i %INPUT% == 4 GOTO EOF



:INSTALL
cd "C:\Users\lim_gre\AppData\Local\Google\Cloud SDK"
@ECHO ON
call gcloud components install app-engine-php
@ECHO OFF
GOTO MENU

:UPDATE
::cd %windir%\system32\calc.exe
::start calc.exe
cd "C:\Users\lim_gre\AppData\Local\Google\Cloud SDK"
@ECHO ON
gcloud components update
@ECHO OFF
GOTO MENU

:DEPLOY
::REM cd cleverwater-account
cd "C:\Users\lim_gre\OneDrive - PurmoGroup\Personal\WebApps\hopebytheroadside.com"
@ECHO ON
call gcloud app deploy --version %v% --no-promote --project eggizoapp
@ECHO OFF
PAUSE
GOTO MENU

PAUSE