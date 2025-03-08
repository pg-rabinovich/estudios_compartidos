import React from "react";

function Home({ usuarios }) {
    //props que Inertia pasa al componente
    return (
        <>
            <h1>Estudios_compartidos </h1>
            <br />
            <br />

            <ul>
                {usuarios.map((usuario) => (
                    <li key={usuario.id}>
                        {usuario.nombre} {usuario.apellido} - {usuario.edad}{" "}
                        años - {usuario.email}
                    </li>
                ))}
            </ul>
        </>
    );
}

export default Home;
