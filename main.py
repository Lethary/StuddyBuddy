import tkinter as tk

# --- Fenêtre principale ---
fenetre = tk.Tk()
fenetre.title("Menu principal")
fenetre.geometry("400x200")

# --- Fonction : ouvre la première interface ---
def ouvrir_interface1():
    win1 = tk.Toplevel(fenetre)
    win1.title("Interface 1")
    win1.geometry("300x200")

    label1 = tk.Label(win1, text="Ceci est l'interface 1", font=("Arial", 14))
    label1.pack(pady=20)

    bouton1 = tk.Button(win1, text="Action 1", command=lambda: label1.config(text="Tu as cliqué dans l'interface 1"))
    bouton1.pack(pady=10)

# --- Fonction : ouvre la deuxième interface ---
def ouvrir_interface2():
    win2 = tk.Toplevel(fenetre)
    win2.title("Interface 2")
    win2.geometry("300x200")

    label2 = tk.Label(win2, text="Ceci est l'interface 2", font=("Arial", 14))
    label2.pack(pady=20)

    bouton2 = tk.Button(win2, text="Action 2", command=lambda: label2.config(text="Tu as cliqué dans l'interface 2"))
    bouton2.pack(pady=10)

# --- Boutons dans la fenêtre principale ---
btn1 = tk.Button(fenetre, text="Ouvrir interface 1", command=ouvrir_interface1)
btn1.pack(pady=10)

btn2 = tk.Button(fenetre, text="Ouvrir interface 2", command=ouvrir_interface2)
btn2.pack(pady=10)

# --- Lancer ---
fenetre.mainloop()
