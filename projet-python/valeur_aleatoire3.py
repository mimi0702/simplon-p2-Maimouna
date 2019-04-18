import random
	
x = random.randint(0, 9)
chiffre_secret = random.randint(0, 9)
reponse =int(input("entrer une valeur"))
if chiffre_secret == random.randint(0, 9):
	print("vous avez gagné")
else:
	print("vous avez perdu")
