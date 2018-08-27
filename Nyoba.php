Loadf = 'https://raw.githubusercontent.com/nandoxscr/FFFF/master/Xscr.txt' 
Loadc = 'https://raw.githubusercontent.com/nandoxscr/FFFF/master/ChangeLog.txt' 

function doAction() 
    local ret = 
       gg.alert('    💻 Loader Auto Update 🖥️\n      🔥 By : Nando Xscr 🔥\n-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-\n           🛎️Always Read🛎️ \n 📣Change Log for Information📣\n-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-\n\n', 
              'OK', 'See Changelog', 'Exit') 	
       if ret == 1 then                 
            doRequest() 
                  os.exit()
                end
       if ret == 2 then
            doChangelog() 
                end
       if ret == 3 then 
    os.exit() 
end 
--coding By NandoXscr
Nwpp = 1
end 

function doRequest() 
gg.setVisible(true) 
local data = assert(load(gg.makeRequest(Loadf).content))
return data()
end

function doChangelog()
gg.alert(gg.makeRequest(Loadc).content) 
Nwpp = -1
end


while true do

if gg.isVisible(true) then

Nwpp = 1

gg.setVisible(false) 

end

gg.clearResults()

if Nwpp == 1 then doAction() 
end
gg.sleep(100)
end



