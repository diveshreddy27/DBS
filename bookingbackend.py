restart='N'
while restart!=('Y','YES','y','yes'):
    print("1.Check PNR status")
    print("2.Ticket Reservation")
    option=int(input("\nEnter your option:"))
    if option == 1:
        print("Your PNR status is T3")
        exit(0)
    elif option == 2:
        source=input("\nSource:")
        destination=input("\nDestination:")
        start_date=input("Start_Date:")
        people=int(input("\nEnter the number of tickets you want:"))
        registration_id_l=[]
        name_l = []
        age_l = []
        gender_l = []
        for p in range(people):
            s=p+1
            registration_id_l.append(s)
            name=str(input("\nName:"))
            name_l.append(name)
            age=int(input("\nAge:"))
            age_l.append(age)
            gender=str(input("\nMale or Female:"))
            gender_l.append(gender)
        restart=str(input("\nconfirm booking yes or no:"))
        if restart in ('no','NO'):
                restart=('N')
        else:
                print("Your Tickets are Confirmed")
                x=0
                print("\nTotal Ticket:",people)
                print("From:",source)
                print("To:",destination)
                for p in range(0,people):
                    print("Registration_id:",registration_id_l[x])
                    print("Name:",name_l[x])
                    print("Age:",age_l[x])
                    print("Gender:",gender_l[x])
                    x=x+1
                    
                    
                    
                    
                    
                    
            
                
            
