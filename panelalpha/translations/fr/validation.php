<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines-
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

    'accepted' => 'L\'attribut :doit être accepté.',
    'accepted_if' => 'L\'attribut :doit être accepté lorsque :other est :value.',
    'active_url' => 'L\'attribut :n\'est pas une URL valide.',
    'after' => 'L\'attribut :doit être une date postérieure à :date.',
    'after_or_equal' => 'L\'attribut :doit être une date postérieure ou égale à :date.',
    'alpha' => 'L\'attribut :ne peut contenir que des lettres.',
    'alpha_dash' => 'L\'attribut :ne doit contenir que des lettres, des chiffres, des tirets et des traits de soulignement.',
    'alpha_num' => 'L\'attribut :ne doit contenir que des lettres et des chiffres.',
    'array' => 'L\'attribut :doit être un tableau.',
    'before' => 'L\'attribut :doit être une date avant :date.',
    'before_or_equal' => 'L\'attribut :doit être une date antérieure ou égale à :date.',
    'between' => [
        'numeric' => 'L\'attribut :doit être compris entre :min et :max.',
        'file' => 'L\'attribut :doit être compris entre :min et :max kilo-octets.',
        'string' => 'L\'attribut :doit être compris entre les caractères :min et :max.',
        'array' => 'L\'attribut :doit comporter entre :min et :max.',
    ],
    'boolean' => 'Le champ :attribute doit avoir la valeur true ou false.',
    'confirmed' => 'La confirmation de l\'attribut :ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'L\'attribut :n\'est pas une date valide.',
    'date_equals' => 'L\'attribut :doit être une date égale à :date.',
    'date_format' => 'L\'attribut :ne correspond pas au format :format.',
    'declined' => 'L\'attribut :doit être décliné.',
    'declined_if' => 'L\'attribut :attribute doit être décliné lorsque :other est :value.',
    'different' => 'L\'attribut :attribute et :other doivent être différents.',
    'digits' => 'L\'attribut :doit être :digits chiffres.',
    'digits_between' => 'L\'attribut :doit être compris entre les chiffres :min et :max.',
    'dimensions' => 'Les dimensions de l\'image de l\'attribut :ne sont pas valides.',
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'email' => 'L\'attribut :doit être une adresse électronique valide.',
    'ends_with' => 'L\'attribut :doit se terminer par l\'un des éléments suivants : :values.',
    'exists' => 'L\'attribut :sélectionné n\'est pas valide.',
    'file' => 'L\'attribut :doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => 'L\'attribut :attribute doit être supérieur à la valeur :value.',
        'file' => 'L\'attribut :doit être supérieur à la valeur :kilo-octets.',
        'string' => 'L\'attribut :doit être supérieur à la valeur :caractères.',
        'array' => 'L\'attribut :attribute doit avoir plus d\'éléments :value.',
    ],
    'gte' => [
        'numeric' => 'L\'attribut :attribute doit être supérieur ou égal à la valeur :value.',
        'file' => 'L\'attribut :doit être supérieur ou égal à :value kilobytes.',
        'string' => 'L\'attribut :doit être supérieur ou égal aux caractères :value.',
        'array' => 'L\'attribut :doit avoir des éléments :value ou plus.',
    ],
    'image' => 'L\'attribut :doit être une image.',
    'in' => 'L\'attribut :sélectionné n\'est pas valide.',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => 'L\'attribut :doit être un nombre entier.',
    'ip' => 'L\'attribut :doit être une adresse IP valide.',
    'ipv6' => 'L\'attribut :doit être une adresse IPv6 valide.',
    'json' => 'L\'attribut :doit être une chaîne JSON valide.',
    'lt' => [
        'numeric' => 'L\'attribut :attribute doit être inférieur à la valeur :value.',
        'file' => 'L\'attribut :doit être inférieur à la valeur :kilo-octets.',
        'string' => 'L\'attribut :doit être inférieur à la valeur :caractères.',
        'array' => 'L\'attribut :attribute doit avoir moins d\'éléments :value.',
    ],
    'lte' => [
        'numeric' => 'L\'attribut :attribute doit être inférieur ou égal à la valeur :value.',
        'file' => 'L\'attribut :doit être inférieur ou égal à :value kilobytes.',
        'string' => 'L\'attribut :doit être inférieur ou égal aux caractères :value.',
        'array' => 'L\'attribut :ne doit pas comporter plus d\'éléments :value.',
    ],
    'max' => [
        'numeric' => 'L\'attribut :ne doit pas être supérieur à :max.',
        'file' => 'L\'attribut :ne doit pas être supérieur à :max kilo-octets.',
        'string' => 'L\'attribut :ne doit pas être supérieur à :max caractères.',
        'array' => 'L\'attribut :ne doit pas comporter plus d\'éléments que :max.',
    ],
    'mimes' => 'L\'attribut :doit être un fichier de type : :values.',
    'min' => [
        'numeric' => 'L\'attribut :doit être au moins :min.',
        'file' => 'L\'attribut :doit être d\'au moins :min kilo-octets.',
        'string' => 'L\'attribut :doit comporter au moins :min caractères.',
        'array' => 'L\'attribut :doit comporter au moins des éléments :min.',
    ],
    'not_in' => 'L\'attribut :sélectionné n\'est pas valide.',
    'not_regex' => 'Le format de l\'attribut :n\'est pas valide.',
    'numeric' => 'L\'attribut :doit être un nombre.',
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'Le champ :attribute doit être présent.',
    'regex' => 'Le format de l\'attribut :n\'est pas valide.',
    'required' => 'Le champ :attribute est obligatoire.',
    'required_unless' => 'Le champ :attribute est obligatoire sauf si :other figure dans :values.',
    'required_with' => 'Le champ :attribute est obligatoire lorsque :values est présent.',
    'required_with_all' => 'Le champ :attribute est obligatoire lorsque :values est présent.',
    'required_without' => 'Le champ :attribute est obligatoire lorsque :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est obligatoire si aucune des :values n\'est présente.',
    'prohibited' => 'Le champ :attribute est interdit.',
    'prohibited_unless' => 'Le champ :attribute est interdit à moins que :other ne figure dans :values.',
    'prohibits' => 'Le champ :attribute interdit la présence de :other.',
    'same' => 'Les attributs :attribute et :other doivent correspondre.',
    'size' => [
        'numeric' => 'L\'attribut :doit être :size.',
        'file' => 'L\'attribut :doit être :size kilobytes.',
        'string' => 'L\'attribut :doit être :size caractères.',
        'array' => 'L\'attribut :doit contenir des éléments :size.',
    ],
    'starts_with' => 'L\'attribut :doit commencer par l\'un des éléments suivants : :values.',
    'string' => 'L\'attribut :doit être une chaîne de caractères.',
    'timezone' => 'L\'attribut :doit être un fuseau horaire valide.',
    'unique' => 'L\'attribut :a déjà été pris.',
    'uploaded' => 'L\'attribut :n\'a pas pu être téléchargé.',
    'url' => 'L\'attribut :doit être une URL valide.',
    'uuid' => 'L\'attribut :doit être un UUID valide.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'message personnalisé',
        ],
    ],
    'attributes' => [
    ],
    'ipv4' => 'L\'attribut :doit être une adresse IPv4 valide.',
    'mimetypes' => 'L\'attribut :doit être un fichier de type : :values.',
    'multiple_of' => 'L\'attribut :attribute doit être un multiple de la valeur :value.',
    'required_if' => 'Le champ :attribute est obligatoire lorsque :other est :value.',
    'prohibited_if' => 'Le champ :attribute est interdit lorsque :other est :value.',
];
