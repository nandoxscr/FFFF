--------------------------
--- Script wrote by
--- Nando Xscr Function 
--- fb.com/inisedot
--------------------------

Qjctx = 1

if gg.isVisible(true) then
  gg.setVisible(false)
end

on = '[ON]'
off = '[OFF]'
cstatus = off
ostatus = off

function pstatus()
  if cstatus == on then
    cstatus = on
  else
    cstatus = off
  end
end

function main()
  menu = gg.choice({
    cstatus .. ' Cara Pertama',
	ostatus .. ' Cara Kedua', 
	'Exit'},
	nil,
	'Tes On/Off Function on GG ')
  if menu == 1 then
	if cstatus == on then -- Cek cstatus jika [ON]
	  cstatus = off -- Jika iya maka mengatur status ke [OFF]
	else
	  cstatus = on -- Jika tidak maka mengatur status ke [ON]
	end
    doCheat() -- Cek jika status sudah benar maka akan memanggil fungsi Cheat
  elseif menu == 2 then
	cheatTrigger()
  elseif menu == 3 then
    os.exit()
  end
  Qjctx =-1
end
  
function doCheat()
  if cstatus == on then -- Cek Jika status [ON]
    gg.toast('Enable! ') -- Jika iya, masukan fungsi pemanggil cheat ON dsni
  else
    gg.toast('Disable! ') -- Jika tidak, masukan fungsi pemanggil cheat Off dsni
  end
end

-------------------------------------------------- Ini adalah Cara kedua  --------------------------------------------------

function cheatTrigger()
  if ostatus == on then -- Cek jika ostatus [ON]
    ostatus = off -- mengatur fungsi prefix ke [OFF]
	nstatus() -- mengembalikan ostatus var
	gg.toast('Disable! ')
  else
    ostatus = on
	nstatus()
    gg.toast('Enable!')
  end
end

function nstatus()
  if ostatus == on then
    ostatus = on
  else
    ostatus = off
  end
end

-------------------------------------------------------------------------------------------------------------------

main()

while true do -- Biarkan Fungsi Selalu Berjalan 
    if gg.isVisible(true) then
        gg.setVisible(false)
        Qjctx = 1
    end
    gg.sleep(100)
	if Qjctx == 1 then
		main()
	end
end
