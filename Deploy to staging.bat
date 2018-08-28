@ECHO OFF

:: git branch
:: git branch | find "* staging" > NUL & IF ERRORLEVEL 1 (
::     
::     ECHO.
::     ECHO ---------------------------------------------
::     ECHO  WARNING:
::     ECHO  You are attempting to deploy to staging
::     ECHO  but you are NOT on the staging branch.
::     ECHO  Is this what you want to do?
::     ECHO.
::     ECHO  Hit CTRL+C now to cancel deployment.
::     ECHO ---------------------------------------------
::     ECHO.
::     PAUSE
::     
:: )

@CALL phploy -s staging --list
@PAUSE

git tag staging-deployment -f

CALL phploy -s staging
PAUSE
EXIT