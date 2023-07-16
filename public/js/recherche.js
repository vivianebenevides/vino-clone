
    window.addEventListener('DOMContentLoaded', function() {
        let rechercheInput = document.getElementById('rechercheInput');
        rechercheInput.focus();
        rechercheInput.setSelectionRange(rechercheInput.value.length, rechercheInput.value.length);
    });
