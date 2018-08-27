

  
gg.alert('=================\n=   ChangeLog    =\n=================', 'Ok') 

gg.setVisible(true) 
while true do 	
        if gg.isVisible() 
            then 	
	       gg.setVisible(false) 		
     doAction() 	
end 	
gg.sleep(100)
end
