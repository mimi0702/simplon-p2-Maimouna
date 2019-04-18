import random
import sys

chiffre_secret = random.randint(0, 9)
reponse  =  None
for i in  range(3):

	reponse =int(input("entrer une valeur:"))
	if reponse > chiffre_secret:
		print("le chiffre secret est plus petit que ca:")
	elif reponse < chiffre_secret:
		print("le chiffre secret est plus grand que ca:")
	else:
		print("vous avez gagne")
		sys.exit()

print("Dommage vous avez perdu")
