import 'bootstrap';

console.log('hola')

class tool {

    async makeRequest(ruta, metodo, form) {
        try {
            const params = {
                method: metodo,
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(form)
            }
    
            if (metodo.toLowerCase() === 'get' && form) {
                const queryParams = new URLSearchParams(form).toString();
                ruta += `?${queryParams}`;
            }
    
            if (metodo.toLowerCase() === 'post') {
                params.body = JSON.stringify(data);
            }
    
            const response = await fetch(ruta, params);
    
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
    
            const result = await response.json();
            return result;
    
        } catch (error) {
            console.error('Hubo un problema con la solicitud fetch:', error);
        }
    }

    iterateTable(clase, data) {
        const tabla = document.querySelectorAll(clase);
        if (tabla) {
            for (const td in tabla) {
                const elemento = tabla[td];
                if (elemento.dataset) {
                    const nombre = elemento.dataset.nombre;
                    console.log(nombre)
                    console.log(nombre)
                    tabla[td].textContent = data[nombre];
                }
            }
        }
    }

    openModal(nombre) {
        const modal = document.getElementById(nombre);
        if (modal) {
            modal.style.display = 'block';
        }
    }

    closeModal(nombre) {
        const modal = document.getElementById(nombre);
        if (modal) {
            modal.style.display = 'none';
        }
    }

}

window.tool = tool;