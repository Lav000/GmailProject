document.addEventListener("DOMContentLoaded", function() {

    //affiche ou non la page de connexion
    function PageChanger() {
        var CnAccount = document.getElementsByClassName('connection');
        var CrAccount = document.getElementsByClassName('createaccount');
    
        if (CnAccount.classList.contains('visible')) {
            CrAccount.classList.remove('visible');
            CnAccount.classList.add('visible');
        } else {
          CnAccount.classList.remove('visible');
          CrAccount.classList.add('visible');
        }
      }

      document.getElementsByClassName('PageChanger').addEventListener('click', PageChanger);
});