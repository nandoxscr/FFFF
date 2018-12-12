

gg.setRanges(bit32.bxor(gg.REGION_ANONYMOUS, gg.REGION_C_ALLOC, gg.REGION_JAVA_HEAP, gg.REGION_C_HEAP, gg.REGION_C_DATA, gg.REGION_C_BSS, gg.REGION_BAD))
gg.skipRestoreState()

Loadf = 'https://raw.githubusercontent.com/xscrprog/Hack/master/starthack.txt' 
Loadc = 'https://raw.githubusercontent.com/nandoxscr/FFFF/master/ChangeLog.txt' 
Loadd = 'https://raw.githubusercontent.com/nandoxscr/FFFF/master/Maintance.txt' 
LoadL = 'https://raw.githubusercontent.com/xscrprog/Hack/master/exelogin.txt'
Loadsf = 'https://raw.githubusercontent.com/xscrprog/Hack/master/1starthack.txt'
let = gg.makeRequest

goR = "id.co.duniagames.android.mobafps"
goT = "com.tencent.ig"

local c = gg.getTargetPackage()
if c == 'kk' then
  pubgm_stats = "\226\155\148 Game tidak ditemukan!\n                               Jangan start dulu WOY!"
  gg.alert("          \226\155\148 WARNING \226\155\148\nStart Game nya cuk Zzzz!!")
else
  pubgm_stats = "\226\156\133 Oke Cheat Sudah Ready ^^"
end

function AntiCrash()
  gg.setVisible(false)
gg.setRanges(gg.REGION_ANONYMOUS)
gg.clearResults()
gg.searchNumber("5001;1.1;1F::10", gg.TYPE_DOUBLE, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(100)
gg.searchNumber("1.2F;1.8F:9::1", gg.TYPE_DOUBLE, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("1.1F;1.4F:3::1", gg.TYPE_DOUBLE, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("1.1D;1.4D:2::10", gg.TYPE_DOUBLE, false, gg.SIGN_EQUAL, 0, -1)
gg.clearResults()
gg.searchNumber("5001;1.1;1F::10", gg.TYPE_DOUBLE, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(100)
gg.searchNumber("1.2F;1.8F:9::1", gg.TYPE_DOUBLE, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("1.1F;1.4F:3::1", gg.TYPE_DOUBLE, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("1.1D;1.4D:2::10", gg.TYPE_DOUBLE, false, gg.SIGN_EQUAL, 0, -1)
gg.clearResults()
gg.searchNumber("5001;1.1;1F::10", gg.TYPE_DOUBLE, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(100)
gg.searchNumber("1.2F;1.8F:9::1", gg.TYPE_DOUBLE, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("1.1F;1.4F:3::1", gg.TYPE_DOUBLE, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("1.1D;1.4D:2::10", gg.TYPE_DOUBLE, false, gg.SIGN_EQUAL, 0, -1)
gg.clearResults()
gg.searchNumber("5001;1.1;1F::10", gg.TYPE_DOUBLE, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(100)
gg.searchNumber("1.2F;1.8F:9::1", gg.TYPE_DOUBLE, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("1.1F;1.4F:3::1", gg.TYPE_DOUBLE, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("1.1D;1.4D:2::10", gg.TYPE_DOUBLE, false, gg.SIGN_EQUAL, 0, -1)
gg.alert("Kupon & Doyok Noob\n Nando is GGWP ty\n No Comment plz !!")
end

function doRequest() 
gg.setVisible(true) 
local data = assert(load(let(Loadf).content))
return data()
end

function doShell()
gg.setVisible(true)
local data = assert(load(let(Loadsf).content))
return data()
end

function doChangelog()
gg.alert(let(Loadc).content) 
end

function doLog()
gg.setVisible(true)
local data = assert(load(let(LoadL).content))
return data()
end

function doMT()
gg.alert(let(Loadd).content) 
os.exit()
end

function usebypass()
  if gg.choice({
    "\226\158\164 Login + PUBG Hack",
    "\226\158\164 Login + ShellFire Hack"
  }, nil, "\240\159\147\159 XscrGame Hack - v1.3\n\t\227\128\142STATUS: " .. pubgm_stats .. "\227\128\143\n\n\t\t\240\159\142\167 My FB: https://fb.com/inisedot\n\n\226\149\148GG MINIM\t                     :\tv8.68.5\n\226\149\154VERSI SEKARANG\t\t :\tv" .. gg.VERSION) == 1 then
AntiCrash()
doLog()
doRequest()
  end
   if gg.choice({
    "\226\158\164 Login + PUBG Hack",
    "\226\158\164 Login + ShellFire Hack"
  }, nil, "\240\159\147\159 XscrGame Hack - v1.3\n\t\227\128\142STATUS: " .. pubgm_stats .. "\227\128\143\n\n\t\t\240\159\142\167 My FB: https://fb.com/inisedot\n\n\226\149\148GG MINIM\t                     :\tv8.68.5\n\226\149\154VERSI SEKARANG\t\t  :\tv" .. gg.VERSION) == 2 then
  AntiCrash()   
  doLog()
  doShell()
  end
end
--[[ Ini yg callernya hrus lu ubah yong ]]--
doChangelog()
usebypass()
