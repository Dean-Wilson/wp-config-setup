@ECHO OFF

git branch
git branch | find "* master" > NUL & IF ERRORLEVEL 1 (
    
    ECHO.
    ECHO ---------------------------------------------
    ECHO  WARNING:
    ECHO  You are attempting to deploy to production
    ECHO  but you are NOT on the master branch.
    ECHO  Is this what you want to do?
    ECHO.
    ECHO  Hit CTRL+C now to cancel deployment.
    ECHO ---------------------------------------------
    ECHO.
    PAUSE
    
)

CALL phploy -s production --list
PAUSE

git tag production-deployment -f

CALL phploy -s production
PAUSE

EXIT
