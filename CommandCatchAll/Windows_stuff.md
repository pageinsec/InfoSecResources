# Random but helpful Windows commands

## Change the lockscreen timeout
Changing the screensaver settings doesn't help the lockscreen timeout. This is the easiest way I've found to adjust the lockscreen screen timeout so the screen doens't shut off after 1 minute. Time is in seconds. `/setacvalueindex` is for plugged in, `/setdcvalueindex` is for battery power.
```
powercfg.exe /setacvalueindex SCHEME_CURRENT SUB_VIDEO VIDEOCONLOCK 1200 
powercfg.exe /setdcvalueindex SCHEME_CURRENT SUB_VIDEO VIDEOCONLOCK 1200
powercfg.exe /setactive SCHEME_CURRENT
```