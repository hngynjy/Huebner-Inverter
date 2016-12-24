$openocd = "C:\Program Files\GNU ARM Eclipse\OpenOCD"
if (-Not (Test-Path $openocd)){
    Start-Process "$env:USERPROFILE\Downloads\gnuarmeclipse-openocd-win64-0.10.0-201601101000-dev-setup.exe" -Wait
}else{
    Set-Location "$openocd%\0.10.0-201601101000-dev"
    Start-Process "openocd.exe" -ArgumentList "-f ./scripts/interface/ftdi/$1.cfg -f ./scripts/board/olimex_stm32_h103.cfg  -c ""init"" -c ""reset init"" -c ""halt"" -c ""flash write_image erase $0 0x08000000"" -c ""reset"" -c ""shutdown"""
}