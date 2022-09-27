<?php

return [
    'accepted' => 'Le champ :attribute doit être accepté.',
    'accepted_if' => 'Le champ :attribute doit être accepté quand :other a la valeur :value.',
    'active_url' => 'Le champ :attribute n\'est pas une URL valide.',
    'after' => 'Le champ :attribute doit être une date postérieure au :date.',
    'after_or_equal' => 'Le champ :attribute doit être une date postérieure ou égale au :date.',
    'alpha' => 'Le champ :attribute doit contenir uniquement des lettres.',
    'alpha_dash' => 'Le champ :attribute doit contenir uniquement des lettres, des chiffres et des tirets.',
    'alpha_num' => 'Le champ :attribute doit contenir uniquement des chiffres et des lettres.',
    'array' => 'Le champ :attribute doit être un tableau.',
    'attached' => ':Attribute est déjà attaché(e).',
    'before' => 'Le champ :attribute doit être une date antérieure au :date.',
    'before_or_equal' => 'Le champ :attribute doit être une date antérieure ou égale au :date.',

    'between' => [
        'array' => 'Le tableau :attribute doit contenir entre :min et :max éléments.',
        'file' => 'La taille du fichier de :attribute doit être comprise entre :min et :max kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être comprise entre :min et :max.',
        'string' => 'Le texte :attribute doit contenir entre :min et :max caractères.',
    ],

    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'Le champ de confirmation :attribute ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'Le champ :attribute n\'est pas une date valide.',
    'date_equals' => 'Le champ :attribute doit être une date égale à :date.',
    'date_format' => 'Le champ :attribute ne correspond pas au format :format.',
    'declined' => 'Le champ :attribute doit être décliné.',
    'declined_if' => 'Le champ :attribute doit être décliné quand :other a la valeur :value.',
    'different' => 'Les champs :attribute et :other doivent être différents.',
    'digits' => 'Le champ :attribute doit contenir :digits chiffres.',
    'digits_between' => 'Le champ :attribute doit contenir entre :min et :max chiffres.',
    'dimensions' => 'La taille de l\'image :attribute n\'est pas conforme.',
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'doesnt_end_with' => 'Le champ :attribute ne doit pas finir avec une des valeurs suivantes : :values.',
    'doesnt_start_with' => 'Le champ :attribute ne doit pas commencer avec une des valeurs suivantes : :values.',
    'email' => 'Le champ :attribute doit être une adresse e-mail valide.',
    'ends_with' => 'Le champ :attribute doit se terminer par une des valeurs suivantes : :values',
    'enum' => 'Le champ :attribute sélectionné est invalide.',
    'exists' => 'Le champ :attribute sélectionné est invalide.',
    'failed' => 'Ces identifiants ne correspondent pas à nos enregistrements.',
    'file' => 'Le champ :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',

    'gt' => [
        'array' => 'Le tableau :attribute doit contenir plus de :value éléments.',
        'file' => 'La taille du fichier de :attribute doit être supérieure à :value kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être supérieure à :value.',
        'string' => 'Le texte :attribute doit contenir plus de :value caractères.',
    ],
    'gte' => [
        'array' => 'Le tableau :attribute doit contenir au moins :value éléments.',
        'file' => 'La taille du fichier de :attribute doit être supérieure ou égale à :value kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être supérieure ou égale à :value.',
        'string' => 'Le texte :attribute doit contenir au moins :value caractères.',
    ],

    'image' => 'Le champ :attribute doit être une image.',
    'in' => 'Le champ :attribute est invalide.',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => 'Le champ :attribute doit être un entier.',
    'ip' => 'Le champ :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le champ :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le champ :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le champ :attribute doit être un document JSON valide.',

    'lt' => [
        'array' => 'Le tableau :attribute doit contenir moins de :value éléments.',
        'file' => 'La taille du fichier de :attribute doit être inférieure à :value kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être inférieure à :value.',
        'string' => 'Le texte :attribute doit contenir moins de :value caractères.',
    ],
    'lte' => [
        'array' => 'Le tableau :attribute doit contenir au plus :value éléments.',
        'file' => 'La taille du fichier de :attribute doit être inférieure ou égale à :value kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être inférieure ou égale à :value.',
        'string' => 'Le texte :attribute doit contenir au plus :value caractères.',
    ],

    'mac_address' => 'Le champ :attribute doit être une adresse MAC valide.',

    'max_digits' => 'Le champ :attribute ne doit pas avoir plus de :max chiffres.',

    'max' => [
        'array' => 'Le tableau :attribute ne peut pas contenir plus que :max éléments.',
        'file' => 'La taille du fichier de :attribute ne peut pas dépasser :max kilo-octets.',
        'numeric' => 'La valeur de :attribute ne peut pas être supérieure à :max.',
        'string' => 'Le texte de :attribute ne peut pas contenir plus de :max caractères.',
    ],

    'mimes' => 'Le champ :attribute doit être un fichier de type : :values.',
    'mimetypes' => 'Le champ :attribute doit être un fichier de type : :values.',

    'min' => [
        'array' => 'Le tableau :attribute doit contenir au moins :min éléments.',
        'file' => 'La taille du fichier de :attribute doit être supérieure ou égale à :min kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être supérieure ou égale à :min.',
        'string' => 'Le texte :attribute doit contenir au moins :min caractères.',
    ],

    'min_digits' => 'Le champ :attribute doit avoir au moins :min chiffres.',
    'multiple_of' => 'La valeur de :attribute doit être un multiple de :value',
    'next' => 'Suivant &raquo;',
    'not_in' => 'Le champ :attribute sélectionné n\'est pas valide.',
    'not_regex' => 'Le format du champ :attribute n\'est pas valide.',
    'numeric' => 'Le champ :attribute doit contenir un nombre.',

    'password' => [
        'letters' => 'Le champ :attribute doit contenir au moins une lettre.',
        'mixed' => 'Le champ :attribute doit contenir au moins une majuscule et une minuscule.',
        'numbers' => 'Le champ :attribute doit contenir au moins un chiffre.',
        'symbols' => 'Le champ :attribute doit contenir au moins un symbole.',
        'uncompromised' => 'La valeur du champ :attribute est apparue dans une fuite de données. Veuillez choisir une valeur différente.',
    ],

    'present' => 'Le champ :attribute doit être présent.',
    'previous' => '&laquo; Précédent',
    'prohibited' => 'Le champ :attribute est interdit.',
    'prohibited_if' => 'Le champ :attribute est interdit quand :other a la valeur :value.',
    'prohibited_unless' => 'Le champ :attribute est interdit à moins que :other est l\'une des valeurs :values.',
    'prohibits' => 'Le champ :attribute interdit :other d\'être présent.',
    'regex' => 'Le format du champ :attribute est invalide.',
    'relatable' => ':Attribute n\'est sans doute pas associé(e) avec cette donnée.',
    'required' => 'Le champ :attribute est obligatoire.',
    'required_array_keys' => 'Le champ :attribute doit contenir des entrées pour : :values.',
    'required_if' => 'Le champ :attribute est obligatoire quand la valeur de :other est :value.',
    'required_if_accepted' => 'Le champ :attribute est obligatoire quand le champ :other a été accepté.',
    'required_unless' => 'Le champ :attribute est obligatoire sauf si :other est :values.',
    'required_with' => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_with_all' => 'Le champ :attribute est obligatoire quand :values sont présents.',
    'required_without' => 'Le champ :attribute est obligatoire quand :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est requis quand aucun de :values n\'est présent.',
    'reset' => 'Votre mot de passe a été réinitialisé !',
    'same' => 'Les champs :attribute et :other doivent être identiques.',
    'sent' => 'Nous vous avons envoyé par email le lien de réinitialisation du mot de passe !',
    'size' => [
        'array' => 'Le tableau :attribute doit contenir :size éléments.',
        'file' => 'La taille du fichier de :attribute doit être de :size kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être :size.',
        'string' => 'Le texte de :attribute doit contenir :size caractères.',
    ],

    'starts_with' => 'Le champ :attribute doit commencer avec une des valeurs suivantes : :values',
    'string' => 'Le champ :attribute doit être une chaîne de caractères.',
    'throttle' => 'Tentatives de connexion trop nombreuses. Veuillez essayer de nouveau dans :seconds secondes.',
    'throttled' => 'Veuillez patienter avant de réessayer.',
    'timezone' => 'Le champ :attribute doit être un fuseau horaire valide.',
    'token' => 'Ce jeton de réinitialisation du mot de passe n\'est pas valide.',
    'unique' => 'La valeur du champ :attribute est déjà utilisée.',
    'uploaded' => 'Le fichier du champ :attribute n\'a pu être téléversé.',
    'url' => 'Le format de l\'URL de :attribute n\'est pas valide.',
    'user' => 'Aucun utilisateur n\'a été trouvé avec cette adresse email.',
    'uuid' => 'Le champ :attribute doit être un UUID valide',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
     */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
     */

    'attributes' => [],

];
