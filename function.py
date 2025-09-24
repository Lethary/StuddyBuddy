from tkinter import filedialog
from google-generativeai import genai
from google.genai.types import Tool, GenerateContentConfig
import tkinter as tk

client = genai.Client()
model_id = "gemini-2.5-flash-lite"


def choisir_fichier(zone_texte):
    """Ouvre un fichier .txt et met son contenu dans la zone de texte donnée"""
    chemin = filedialog.askopenfilename(
        title="Choisir un fichier texte",
        filetypes=[("Fichiers texte", "*.txt")]
    )
    if chemin:
        with open(chemin, "r", encoding="utf-8") as f:
            contenu = f.read()
        # zone_texte.delete("1.0", tk.END)
        # zone_texte.insert(tk.END, contenu)
        fiche = client.models.generate_content_stream(
        model=model_id,
        contents=[contenu, "Fait moi une fiche de révision claire et concise, avec des titres et des sous-titres en markdown."],
        config=GenerateContentConfig(
    )
)   
        zone_texte.delete("1.0", tk.END)
        for chunk in fiche:
            zone_texte.insert(tk.END, chunk.text)