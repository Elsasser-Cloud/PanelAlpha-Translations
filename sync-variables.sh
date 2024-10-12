#!/bin/bash

# Define the path to the translations directory
translations_dir="panelalpha/translations"

# Load the English translation files
en_files=$(find "$translations_dir/en" -type f -name "*.json")

# Iterate over each language directory
for lang_dir in "$translations_dir"/*; do
    # Skip if it's not a directory or if it's the English directory
    if [ ! -d "$lang_dir" ] || [ "$lang_dir" == "$translations_dir/en" ]; then
        continue
    fi

    # Find all JSON files in the current language directory
    lang_files=$(find "$lang_dir" -type f -name "*.json")

    # Iterate over each English file
    for en_file in $en_files; do
        # Determine the relative path of the English file
        relative_path=${en_file#"$translations_dir/en/"}

        # Determine the corresponding language file
        lang_file="$lang_dir/$relative_path"

        # Check if the language file exists
        if [ ! -f "$lang_file" ]; then
            echo "Creating missing file: $lang_file"
            mkdir -p "$(dirname "$lang_file")"
            cp "$en_file" "$lang_file"
        fi

        # Use jq to merge the English keys into the language file without overwriting existing keys
        # Sort keys and format JSON to minimize diffs
        updated_json=$(jq -s '.[1] * .[0] | to_entries | sort_by(.key) | from_entries' "$lang_file" "$en_file")

        # Save the updated JSON back to the language file with consistent formatting
        echo "$updated_json" | jq '.' > "$lang_file"
    done
done

echo "Translation files have been synced."
