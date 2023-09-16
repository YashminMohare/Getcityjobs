


function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
        autoDisplay: false,
        includedLanguages: 'hi,mr',
        gaTrack: true,
        gaId: 'YOUR_API_KEY',
        googleAttribution: ''
    }, 'google_translate_element');

    // Add event listener to Hindi language hyperlink
    var hindiLink = document.getElementById('hindi-link');
    hindiLink.addEventListener('click', function() {
        var langSelect = document.querySelector('select.goog-te-combo');
        langSelect.value = 'hi';
        langSelect.dispatchEvent(new Event('change'));
    });

    var marathiLink = document.getElementById('marathi-link');
    marathiLink.addEventListener('click', function() {
        var langSelect = document.querySelector('select.goog-te-combo');
        langSelect.value = 'mr';
        langSelect.dispatchEvent(new Event('change'));
    });
}