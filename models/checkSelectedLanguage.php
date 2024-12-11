<?php
    function checkSelectedLanguage($selectedLang) {
        $availableLanguages = ['sr', 'en'];
    
        if (isset($selectedLang)) {
            if (in_array($selectedLang, $availableLanguages)) {
                return $selectedLang;
            } else {
                return 'sr';
            }
        }
    
        return 'sr';
    }
?>