const miTool = new tool();

const btnCloseModal = document.getElementById("btn-close-modal-info");
btnCloseModal.addEventListener("click", () => miTool.closeModal("modal-info"));


document.addEventListener("click", (event) => {
    const boton = event.target.closest(".btn-data-info");
    if (boton) {
        console.log("clic");
        console.log(boton.dataset.cod);
        console.log(boton.dataset.tipo);
        getDataInfo(boton.dataset.cod, boton.dataset.tipo)
    }

});


async function getDataInfo(cod, tipo) {
    // try {
        const response = await miTool.makeRequest(`/${tipo}/${cod}`,'get');
        if (response) {
            console.log(response.data);
            miTool.iterateTable(".table-data-info", response.data);
            miTool.openModal("modal-info");
        }
    // }  catch(e) {
    //     console.log(e)
    // }

}