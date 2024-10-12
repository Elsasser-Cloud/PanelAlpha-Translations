import json
import os

# Define the path to the translations directory
translations_dir = "panelalpha/translations"

# Load the English translation file
with open(os.path.join(translations_dir, "en/clientarea/translation.json"), "r", encoding="utf-8") as en_file:
    en_translations = json.load(en_file)

# Iterate over each language directory
for lang_dir in os.listdir(translations_dir):
    lang_path = os.path.join(translations_dir, lang_dir, "clientarea/translation.json")
    
    # Skip the English directory
    if lang_dir == "en" or not os.path.exists(lang_path):
        continue

    # Load the current language translation file
    with open(lang_path, "r", encoding="utf-8") as lang_file:
        lang_translations = json.load(lang_file)

    # Add missing keys from the English file
    for key, value in en_translations.items():
        if key not in lang_translations:
            lang_translations[key] = value  # Or use a placeholder like f"TODO: Translate '{value}'"

    # Save the updated language file
    with open(lang_path, "w", encoding="utf-8") as lang_file:
        json.dump(lang_translations, lang_file, ensure_ascii=False, indent=4)

print("Translation files have been synced.")