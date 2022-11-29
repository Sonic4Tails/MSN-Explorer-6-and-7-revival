----- on your main computer ----
(im gonna assume you are gonna do everything on the same computer)
1. get xampp installed https://www.apachefriends.org/
2. get fiddler installed https://www.telerik.com/download/fiddler
3. in fiddler go to tools > hosts
4. firstly enable the hosts
5. add the following in the hosts
127.0.0.1 nexus.passport.com
127.0.0.1 my.msn.com
127.0.0.1 logo.msn.com
127.0.0.1 arc2.msn.com
127.0.0.1 login.live.com
127.0.0.1 moneycentral.msn.com
127.0.0.1 go.msn.com

6. go to the the htdocs directory of xampp  and then add the files in the zip folder that is attached
7. start apache in xampp
8. go to 127.0.0.1 and if you see a list of folders and files it works

---- windows 2000, me, whistler, xp, etc (if ran above xp some unexpected issues can occur) -----
9. start windows xp
10. configure your proxy in the internet options in internet explorer in windows xp to your local ip 192.168.xxx.xxx and then the port you set in fiddler make sure "allow remote connections" is enabled
11. open msn explorer
12. click the x at the top after you are at the connecting to msn stage
13. click on the guest signin option
14. enter an email and password does'nt matter which ones
15. confirm you can signin

if you have questions or its unclear you can ask me on discord "Miles "Tails" Prower#2318"
