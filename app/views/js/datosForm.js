window.addEventListener('load', () => {


    const formulario = document.getElementById('formFallas');

    formulario.addEventListener('submit', function (event) {
        event.preventDefault(); // evita el envío del formulario
        console.log("click");

        const formData = new FormData(formulario);
        const datos = {};

        // Recorremos cada entrada del FormData
        for (const [clave, valor] of formData.entries()) {
            // Si ya existe la clave, convertir en array (para campos múltiples como checkboxes)
            if (datos[clave]) {
                if (Array.isArray(datos[clave])) {
                    datos[clave].push(valor);
                } else {
                    datos[clave] = [datos[clave], valor];
                }
            } else {
                datos[clave] = valor;
            }
        }

        console.log(datos);
        console.log(datos.upload1);

    });


});