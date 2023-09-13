document.addEventListener('DOMContentLoaded', () => {
    const formLogin = document.querySelector('#formLogin');

    formLogin.addEventListener('submit', e => {
        e.preventDefault();

        const data = Object.fromEntries(new FormData(e.target));
        
        $.ajax({
            url: 'http://localhost/proyecto_marlenne/server/login.php',
            type: 'POST',
            data,
            success: response => {
                const data = JSON.parse(response);

                Swal.fire({
                    icon: data.icon,
                    title: data.title,
                    text: data.message,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    confirmButtonText: 'Continuar'
                }).then(action => {
                    if(data.status == 200) {
                        if(action.isConfirmed) {
                            location.href = "http://localhost/proyecto_marlenne/pages/home.php";
                        }
                    }
                })
            }
        })
    })
});