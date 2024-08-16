SETLOCAL ENABLEDELAYEDEXPANSION
SET count=1
FOR %%F IN (C:\xampp\htdocs\smilesandsmallz.com\cruise\*.jpg) DO MOVE "%%~fF" "%%~dpF!count!.jpg" & SET /a count=!count!+1
ENDLOCAL