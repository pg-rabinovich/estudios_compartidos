import React from "react";
import Layout from "../Layouts/Layout";

function Base() {
    return (
        <>
            <h1 class="p-8">Estudios_compartidos </h1>
            <br />
            <br />
        </>
    );
}

/* Base.layout = (page) => <Layout children={page} />; */

//asi, aqui antes del export llamamos al layout en un componente, pero lo haremos por default
//en el archivo app.jsx. Ahi el diremos, usa el layout por default pero si coloco otro layout
//en mi componente , usa ese.

export default Base;
