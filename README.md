# takedown
Exclusively created to takedown subdomains using git push


# How to use
1. Save any page, example google.com
2. Save it as login.html
3. Fix paths as absolute paths
4. Edit index.php and enter login.html
5. Edit login.php, enter redirect url
6. Search, action= in login.html and use action=login.php 
7. Save it and use these file as phishing or take over

# Capture Requests
1. Use $_POST['loginfmt'] field
2. If username field is user or username or loginfmt, enter it in post field of login.php
3. It is possible to record more fields using $_POST, example $_POST['passwd']

# How to apply
1. Use git push in heroku
- cc and git verification is required
2. Hijack subdomains, clone this repository and edit accordingly
3. You can fine tune these template for phishing
4. Iframe based phishing is also possible

# Permissions
1. Always use 777 (world readable and writable permission)


# How to update template
1. It can work for any kind of website bases phishing
2. It will work to hijack subdomains that use git push

# Benefits
1. Guest I.P will save as ip.txt
2. User and passwords will save as usernames.txt
