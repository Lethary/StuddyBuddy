from function import choisir_fichier
import tkinter as tk

# --- Fenêtre principale ---
fenetre = tk.Tk()
fenetre.title("Menu principal")
fenetre.state('zoomed')

# Bouton
btn1 = tk.Button(fenetre, text="Générer une fiche de Révision", command=lambda: choisir_fichier(zone_texte), font=("Arial", 14), bg="#4CAF50", fg="white", padx=10, pady=5)
btn1.pack(pady=10)

# Zone de texte
zone_texte = tk.Text(fenetre, wrap="word", font=("Arial", 12))
zone_texte.pack(fill="both", expand=True, padx=20, pady=10)


# --- Lancer ---
fenetre.mainloop()
