#From https://gist.github.com/anonymous/140f4455ede789f7c3c3419946d1bd66

While($True)
{
  If($(Get-WmiObject -Class Win32_Process -Filter "Name='w3wp.exe'") -ne $null)
  {
    $p=Get-WmiObject -Class Win32_Process -Filter "Name='w3wp.exe'" | Select ProcessID,CreationDate
    $pp= $p.ProcessID
    Get-WmiObject -Class Win32_Process -Filter "ParentProcessId=$pp" | ? ($_.Name -eq "cmd.exe") | & C:\hunting\scripts\Get-W3WPChildren.ps1
  }
}