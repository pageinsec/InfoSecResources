# From https://gist.github.com/anonymous/e8ced9c92a689e4cdb67fe0417cd272c

Param(
      [Parameter (Position=0,Mandatory=$True)]
      [String[]]
      $searchPath
)

Get-ChildItem $searchPath -Recurse -File | Select-Object fullname, length, lastwritetime | Out-GridView