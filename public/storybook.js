const letterButton = document.querySelector('.letter-button');
const surpriseNote = document.querySelector('#surprise-note');

if (letterButton && surpriseNote) {
    letterButton.addEventListener('click', () => {
        const isExpanded = letterButton.getAttribute('aria-expanded') === 'true';

        letterButton.setAttribute('aria-expanded', String(!isExpanded));
        surpriseNote.hidden = isExpanded;
        letterButton.querySelector('span:first-child').textContent = isExpanded
            ? 'Buka pesan kecil'
            : 'Simpan pesan kecil';

        if (!isExpanded) {
            surpriseNote.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    });
}